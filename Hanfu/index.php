<?php
//==============================================================================
// index.php for SimpleExample app //

// Create f3 object then set various global properties of it
// These are available to the routing code below, but also to any
// classes defined in autoloaded definitions
//php.get_current_user()--获取到当前所有者的名称

session_start();

$home = '/home/'.get_current_user();
// $home = 'C:/Users/super/Desktop/Hanfu/Hanfu/AboveWebRoot';
// 改成本机地址

//require是将一个 PHP 文件的数据放到另一个 PHP 文件中

$f3 = require($home.'/AboveWebRoot_Hanfu/lib/base.php');

// autoload Controller class(es) and anything hidden above web root, e.g. DB stuff
$f3->set('AUTOLOAD','autoload/;'.$home.'/AboveWebRoot_Hanfu/autoload/');
global $db;
$db = DatabaseConnection::connect(); // defined as autoloaded class in AboveWebRoot/autoload/
$f3->set('DB', $db);
$f3->set('DEBUG',3);        // set maximum debug level
$f3->set('UI','ui/');       // folder for View templates

$f3->set('USER_NAME', isset($_SESSION['name']) ? $_SESSION['name'] : '');

//==============================================================================
// Simple Example URL application routings

//home page (index.html) -- actually just shows form entry page with a different title
//初始化的时候，在当前根目录下，GET方法获取到网页中的数据
//渲染显示的html是layout.html,其content内容为simpleHome.html中的内容，标题为"Simple Example Home"
$f3->route('GET /',
    function ($f3)
    {
        $f3->set('html_title','Website Introduction');
        $f3->set('content','Intro.html');
        echo template::instance()->render('layout1.html');
    }
);
$f3->route('GET /HomePage',
    function ($f3)
    {
        $f3->set('html_title','Hanfu Home');
        $f3->set('head','Title.html');
        $f3->set('content','HomePage.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);
$f3->route('GET /report',
    function ($f3)
    {
        $f3->set('html_title','Report');
        $f3->set('head','Title.html');
        $f3->set('content','report.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);
//==============================================================================
// When using GET, provide a form for the user to upload an image via the file input type

$f3->route('GET /Login',
    function($f3)
    {
        global $db;
        $email = $_GET['email'];
        $password=array();
        console_log($email);
        $password = $db->exec("SELECT * FROM user_info WHERE Email='$email'");
        console_log($password);
        if ($password[0]['Password'] == $_GET['password']) {
            // login success
            $_SESSION['user_id'] = $password[0]['id'];
            $_SESSION['name'] = $password[0]['Name'];
            header("Location: /hanfu/HomePage/");
            exit;
        } else {
            // login error
        }

        //$password = $db->exec('SELECT password FROM user_Info WHERE email='.$email);

        $f3->set('html_title','Logsign');
        $f3->set('head','Title.html');
        $f3->set('content','LogSign.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);

$f3->route('POST /SignUp',
    function($f3)
    {
        $formdata = array();			// array to pass on the entered data
        $formdata["Name"] = $f3->get('POST.name');			// whatever was called "name" on the form
        $formdata["Email"] = $f3->get('POST.email');		// whatever was called "colour" on the form
        $formdata["PhoneNumber"] = $f3->get('POST.phoneNum');
        $formdata["Password"] = $f3->get('POST.password');
        $controller = new SimpleController('user_info');
        $controller->putIntoDatabase($formdata);
        
        echo "<script>alert('Register success!');
            location.href='/hanfu/SignUp/';</script>";

        $f3->set('html_title','Logsign');
        $f3->set('head','Title.html');
        $f3->set('content','LogSign.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);

$f3->route('GET /SignUp',
    function($f3)
    {
        $f3->set('html_title','Logsign');
        $f3->set('head','Title.html');
        $f3->set('content','LogSign.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);


$f3->route('GET /Guides',
    function($f3)
    {
        $f3->set('html_title','Guides');
        $f3->set('head','Title.html');
        $f3->set('content','Guides.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);

$f3->route('POST /review',
    function($f3)
    {
        try {
            $formdata = array();			// array to pass on the entered data in
            $formdata["title"] = $f3->get('POST.title');
            $formdata["comment"] = $f3->get('POST.comment');
            $formdata["suit_id"] = $f3->get('POST.suit_id');
            $controller = new SimpleController('review');
            $controller->putIntoReviewDatabase($formdata);
            echo 1;
        } catch (\Exception $e) {
            echo 0;
        }
    }
);
$f3->route('GET /review',
    function($f3)
    {
        $f3->set('html_title','Review');
        $f3->set('head','Title.html');
        $f3->set('content','ProductDetails.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);
//==============================================================================
// When using GET, provide a form for the user to upload an image via the file input type
$f3->route('GET /Details',
    function($f3)
    {

        global $db;

        $suit = 0;

        if ($_GET['suit']) {
            $suit = $_GET['suit'];
        } else if ($_GET['product_id']) {
            $product = $db->exec("SELECT * FROM product WHERE id={$_GET['product_id']}");
            if ($product) {
                $suit = $product[0]['suit_number'];
            }            
        } else {
            $product = $db->exec("SELECT * FROM product LIMIT 1,1");
            if ($product) {
                $suit = $product[0]['suit_number'];
            }
        }

        $f3->set('suit_id', $suit);

        $item_name = $db->exec("SELECT * FROM product WHERE suit_number={$suit}");
        $f3->set('item_list', $item_name);
        // console_log($item_name);

        // select evaluate
        $evaluate = $db->exec("SELECT * FROM review WHERE suit_id={$suit}");
        $f3->set('evaluate', $evaluate);

        /*$item_name = $db->exec("SELECT item_name FROM product WHERE suit_number=1");
        console_log($item_name);
        $price = $db->exec("SELECT price FROM product WHERE suit_number=1");
        console_log($price);
        $image = $db->exec("SELECT image FROM product WHERE suit_number=1");
        console_log($image);
        $intro = $db->exec("SELECT intro FROM product WHERE suit_number=1");
        console_log($intro);
        $suit_design_concept = $db->exec("SELECT suit_design_concept FROM product WHERE suit_number=1");
        console_log($suit_design_concept);*/
        $f3->set('status','0');
        $f3->set('html_title','Details');
        $f3->set('head','Title.html');
        $f3->set('content','ProductDetails.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);
//==============================================================================
// When using GET, provide a form for the user to upload an image via the file input type
$f3->route('GET /Cart',
    function($f3)
    {
        if (!isset($_SESSION['user_id'])) {
            echo "<script>alert('Please login first!');location.href='/hanfu/SignUp';</script>";
            // header('Location: /hanfu/SignUp');
            exit;
        }

        global $db;
        // select cart
        $cart = $db->exec("SELECT * FROM cart WHERE user_id={$_SESSION['user_id']}");
        $f3->set('cart', $cart);

        // total price
        $total_price = 0;
        if ($cart) {
            foreach ($cart as $k => $v) {
                $total_price += ($v['price'] * $v['number']);
            }
        }
        $f3->set('total_price', $total_price);

        $f3->set('html_title','Cart');
        $f3->set('head','Title.html');
        $f3->set('content','ShoppingBag.html');
        $f3->set('footer','Footer.html');
        echo template::instance()->render('layout.html');
    }
);
$f3->route('POST /submitCart',
    function($f3)
    {
        if (!isset($_SESSION['user_id'])) {
            echo -1;
            exit;
        }
        try {
            global $db;
            $id = $f3->get('POST.id');
            $size = $f3->get('POST.size');
            // select cart if exist
            $exist= $db->exec("SELECT * FROM cart WHERE `product_id`='{$id}' AND `size`='{$size}'");
            if ($exist) {
                // number + 1
                $cart_id = $exist[0]['id'];
                $number = $exist[0]['number'] + 1;
                $res = $db->exec("UPDATE cart SET `number`='{$number}' WHERE id='{$cart_id}'");
                if ($res) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                // insert
                $product = $db->exec("SELECT * FROM product WHERE `id`='{$id}'"); // select product information
                $res = $db->exec("INSERT INTO cart (`user_id`, `product_id`, `size`, `price`, `name`, `image`, `number`) VALUES ('{$_SESSION['user_id']}', '{$id}', '{$size}', '{$product[0]['price']}', '{$product[0]['item_name']}', '{$product[0]['image']}', '1')");
                if ($res) {
                    echo 1;
                } else {
                    echo 0;
                }
            }
        } catch (\Exception $e) {
            echo 0;
        }
    }
);
$f3->route('POST /deleteCart',
    function($f3)
    {
        try {
            $id = $f3->get('POST.id');
            $controller = new SimpleController('cart');
            $controller->deleteFromDatabase($id);
            echo 1;
        } catch (\Exception $e) {
            echo 0;
        }
    }
);
//==============================================================================
// When using POST (e.g.  form is submitted), invoke the controller, which will process
// any data then return info we want to display. We display
// the info here via the response.html template
// 当使用POST时（例如表单被提交），调用控制器，它将处理
// 任何数据，然后返回我们要显示的信息。我们通过response.html模板显示
// 信息在这里通过response.html模板显示。
$f3->route('GET /dataView',
    function($f3)
    {
        $controller = new SimpleController('review');
        $alldata = $controller->getData();
        $f3->set("dbData", $alldata);
        $f3->set('html_title','Viewing the data');
        $f3->set('content','dataView.html');
        echo template::instance()->render('layout.html');
    }
);
//==============================================================================
$f3->route('GET /editView',				// exactly the same as dataView, apart from the template used
    function($f3)
    {
        $controller = new SimpleController('review');
        $alldata = $controller->getData();

        $f3->set("dbData", $alldata);
        $f3->set('html_title','Viewing the data');
        $f3->set('content','editView.html');
        echo template::instance()->render('layout.html');
    }
);
//==============================================================================
$f3->route('POST /editView',
    function($f3)
    {
        $controller = new SimpleController('review');
        $controller->deleteFromDatabase($f3->get('POST.toDelete'));		// in this case, delete selected data record
        $f3->reroute();
    }
);

//==============================================================================

$f3->route('GET /about',
    function($f3)
    {
        $file = F3::instance()->read('README.md');
        $html = Markdown::instance()->convert($file);
        $f3->set('article_html', $html);
        $f3->set('content','article.html');
        echo template::instance()->render('layout.html');;
    }
);


//==============================================================================
function pprint_var($var)
{
    ob_start();
    var_dump($var);
    return ob_get_clean();
}

$f3->set('ONERROR', // what to do if something goes wrong.
    function($f3) {
        $f3->set('html_title',$f3['ERROR']['code']);
        $f3->set('DUMP', pprint_var($f3['ERROR']));
        $f3->set('content','error.html');
        echo template::instance()->render('layout.html');
    }
);
$test = $_SERVER['HOME'];
//==============================================================================
$f3->route('GET /test', // have a test page to print out variables
    function($f3)
    {
        global $test;
        $f3->set('html_title','TEST');
        $f3->set('DUMP', pprint_var($f3));
        $f3->set('content','error.html');
        echo template::instance()->render('layout.html');;
    }
);
//==============================================================================
// Run the FFF engine //
$f3->run();

function console_log($data)
{
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('" . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('" . $data . "');</script>");
    }
}