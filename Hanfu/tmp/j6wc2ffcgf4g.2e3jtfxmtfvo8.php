
<section class="Home_BackPage">
    <div class="container">
        <div class="row row-30"id="Product_Details">
            <div class="col-xl-6">
                <div class="slider">

                    <?php foreach (($item_list?:[]) as $ikey=>$idiv): ?>
                        <input type="radio" name="slide_switch" id="id<?= ($ikey) ?>" <?= ($ikey == 0 ? 'checked="checked"' : '') ?>>
                        <label for="id<?= ($ikey) ?>">
                            <img src="<?= ($idiv['image']) ?>" onclick="showGoodsInfo(this)" width="100" data-name="<?= ($idiv['item_name']) ?>" data-intro="<?= ($idiv['intro']) ?>" data-price="<?= ($idiv['price']) ?>" data-id="<?= ($idiv['id']) ?>" >
                        </label>
                        <img src="<?= ($idiv['image']) ?>" >
                    <?php endforeach; ?>

                </div>

            </div>
            <div class="col-xl-6">
                <div class="single-product">
                    <div class="row">
                        <h3 id="Product_Name" name="name" method="get" action="<?= ($BASE) ?>/Details">
                            <?= ($item_list[0]['item_name'])."
" ?>
                        </h3>
                    </div>

                    <div class="row">
                        <h1 id="Product_Price" name="price" method="get" action="<?= ($BASE) ?>/Details">
                            £<?= ($item_list[0]['price'])."
" ?>
                        </h1>
                    </div>

                    <div class="row">

                        <h6 id="product_Detail" name="intro" method="get" action="<?= ($BASE) ?>/Details">
                            <?= ($item_list[0]['intro'])."
" ?>
                        </h6>
                    </div>
                    <div class="row">
                        <div id="product_Size">
                            <select id="size">
                                <option value="" selected>Choose...</option>
                                <option value="xxs">xxs</option>
                                <option value="xs">xs</option>
                                <option value="s">s</option>
                                <option value="m">m</option>
                                <option value="l">l</option>
                                <option value="xl">xl</option>
                                <option value="xxl">xxl</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" id="product_id" value="<?= ($item_list[0]['id']) ?>" />
                        <button id="product_Submit" type="button" name="Add to cart">
                            Add to Cart </button>

                    </div>
                    <div class="row">
                        <div id="product_End">
                            <li>
                                <a   href="#">
                                    Check FAQs for updated info</a>
                            </li>
                            <li>
                                <a   href="#">
                                    No additional taxes or duty charges</a>
                            </li>
                            <li>
                                <a  href="#">
                                    Free Shipping on orders over £60</a>
                            </li>
                            <li>
                                <a  href="#">
                                    Delivery within 1-5 working days</a>
                            </li>
                            <li>
                                <a  href="#">
                                    30 Days Free Returns</a>
                            </li>
                            <li class="more">
                                <a  href="#">
                                    PRODUCT DETAILS</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
    <h1 style="">Share your opinion here</h1>
    <form id="form1" name="form1" method="post" action="<?= ($BASE) ?>/review">
        Enter your title and comment:
        <input name="title" type="text" placeholder="Title" id="title" size="50" autocomplete="off" />
        <input name="comment" type="text" placeholder="Comment" id="comment" size="50" />
        <p>
            <input type="button" id="remark-submit" name="Submit" value="Submit" />
        </p>
    </form>
    </div>
    <div class="evaluate-div">
        <h1 style="">Comments List</h1>
        <?php foreach (($evaluate?:[]) as $ikey=>$idiv): ?>
            <div class="evaluate-con">
                <p><?= ($idiv['title']) ?> (<?= ($idiv['create_time']) ?>):</p>
                <p><?= ($idiv['comment']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <input type="hidden" id="suit_id" value="<?= ($suit_id) ?>" />
</section>
  