$(document).ready(function(){
    var introNum=0;

    //Ming 缩放
    var height = $("#Guides_Back").height();
    $(".Dynasty .Goods").css("height",height*1.05);

    $("#ming").mouseenter(function(){
        //var parentWidth = $(".animate").width(); // parent element
        //var width = ($("#ming").width()/parentWidth * 100).toFixed() +"%";

        var width = $(this).width();

        $("#ming").animate({width:width*1.1},500,function(){
            $("#ming").css("width","33%");
        });


    }).mouseleave(function (){
            var width = $(this).width();

            $("#ming").animate({width:width*0.91},500,function(){
                $("#ming").css("width","30%");
            });
        }
    );
    //Tang1 缩放
    $("#tang1").mouseenter(function(){
        var width = $(this).width();

        $("#tang1").animate({width:width*1.1},500,function(){
            $("#tang1").css("width","33%");
        });
    }).mouseleave(function (){
            var width = $(this).width();

            $("#tang1").animate({width:width*0.91},500,function(){
                $("#tang1").css("width","30%");
            });
        }
    );
    //Tang2 缩放
    $("#tang2").mouseenter(function(){
        var width = $(this).width();

        $("#tang2").animate({width:width*1.1},500,function(){
            $("#tang2").css("width","18.7%");
        });
    }).mouseleave(function (){
            var width = $(this).width();

            $("#tang2").animate({width:width*0.91},500,function(){
                $("#tang2").css("width","17%");
            });
        }
    );
    //Song 缩放
    $("#song").mouseenter(function(){
        var width = $(this).width();

        $("#song").animate({width:width*1.1},500,function(){
            $("#song").css("width","44%");
        });
    }).mouseleave(function (){
            var width = $(this).width();

            $("#song").animate({width:width*0.91},500,function(){
                $("#song").css("width","40%");
            });
        }
    );

    //Icon变化
    $("#menu_Home").mouseenter(function(){
        $("#menu_Home img").attr("src", "https://s2.loli.net/2022/02/14/HlgYNCwJLtMKQGh.png").width(50).height(45);
    }).mouseleave(function (){
            $("#menu_Home img").attr("src", " https://s2.loli.net/2022/02/14/QrJeoGHEZbWMN6x.png").width(30).height(30);
        }
    );

    $("#menu_Guides").mouseenter(function(){
        $("#menu_Guides img").attr("src", "https://s2.loli.net/2022/02/14/QNEL5t4DIsSAPJp.png").width(50).height(45);
    }).mouseleave(function (){
            $("#menu_Guides img").attr("src", "https://s2.loli.net/2022/02/17/KXOEr6YVscJ7fUl.png").width(30).height(30);
        }
    );

    $("#menu_Carts").mouseenter(function(){
        $("#menu_Carts img").attr("src", "https://s2.loli.net/2022/02/14/Xprhc2eGUamYjt9.png").width(50).height(45);
    }).mouseleave(function (){
            $("#menu_Carts img").attr("src", "https://s2.loli.net/2022/02/14/28GcKfo6RWJxyiV.png").width(30).height(30);
        }
    );

    $("#menu_Log").mouseenter(function(){
        $("#menu_Log img").attr("src", "https://s2.loli.net/2022/02/14/il3EVaBhuLNtmA2.png").width(50).height(45);
    }).mouseleave(function (){
            $("#menu_Log img").attr("src", "https://s2.loli.net/2022/02/14/Yt5gpA6G8ecshCH.png").width(30).height(30);
        }
    );


////////Ming

    //Features
    $("#label1_s_1").mouseenter(function(){
        $("#label1_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/JkpTl9aXh4i1KH6.png");
        $("#Ming_Intro_Title").text("Features");
        $("#Ming_Intro_Content").text('The Short Coat is lively and playful; The Long Coat is more dignified and elegant, not only has a richer flavor of wealth, but also can elongate the body lines and show slim figures to a certain extent.\n' +
            'In the Ming Dynasty, there are Cloud Shoulders that can play a decorative role in the overall shape. It can not only make the modeling more layered, but also make the clothes look more gorgeous.');

    }).mouseleave(function (){
            $("#label1_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/ND5UE7alirMsyZp.png");
        }
    );

    //Method
    $("#label1_s_2").mouseenter(function(){
        $("#label1_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/pzqUn9om7ReZXi6.png");
        $("#Ming_Intro_Title").text('Wearing Method');
        $("#Ming_Intro_Content").text('1. The middle of the skirt (skirt door) is aligned with the middle of the body.\n' +
            '2. Cross the straps and wrap them right in front of the body.\n' +
            '3. Cross again and tie a bow after 3 turns.\n' +
            '4. Wear the Stand Collar Long Coat.');

    }).mouseleave(function (){
            $("#label1_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/ONEhL31BrAnTp2o.png");
        }

    );
    //History
    $("#label1_s_3").mouseenter(function(){
        $("#label1_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/dyRUZ25HLgjpJiO.png");
        $("#Ming_Intro_Title").text('History');
        $("#Ming_Intro_Content").text('According to the tradition of the Han nationality, Zhu Yuanzhang, the emperor Taizu of the Ming Dynasty, ‘inherited the Zhou and Han Dynasties from the upper and the Tang and Song Dynasties from the lower’, reformulated the dress system. In the middle and late stage of development, there appeared a style not seen in the previous generation - Stand Collar, and a large number of buttons were used in prominent places of clothes.');

    }).mouseleave(function (){
            $("#label1_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/WiNvjlDTda7IpGx.png");
        }
    ) ;
    //Introduction
    $("#label1_s_4").mouseenter(function(){
        $("#label1_s_4 img").attr("src", "https://s2.loli.net/2022/03/07/PwNZeUDn8O9SGRL.png");
        $("#Ming_Intro_Title").text('Introduction');
        $("#Ming_Intro_Content").text('In the Ming Dynasty, the coats can be divided into long ones and short ones according to the length. The Horse Face Skirt has four skirt doors at the front and rear, with two overlapping. Compared with Tang Dynasty clothes, the proportion of clothes and skirts is obviously inverted, from short tops and long bottoms, gradually elongated the tops. The collar also changed from the opposite collar in the Song Dynasty to a round collar.');

    }).mouseleave(function (){
            $("#label1_s_4 img").attr("src", "https://s2.loli.net/2022/03/07/HCAQ4eSNWbt5U7o.png");
        }
    );


////////Tang

    //Features
    $("#label_s_1").mouseenter(function(){
        $("#label_s_1 img").attr("src", " https://s2.loli.net/2022/03/07/JkpTl9aXh4i1KH6.png");
        $("#Tang_Intro_Title").text("Features");
        $("#Tang_Intro_Content").text("The Tang Dynasty was unified, the economy was prosperous, and the social fashion was open. The clothing styles were also colorful, elegant and gorgeous, showing the graceful and luxurious plump charm of women.\n" +
            "Chest-length Ru Skirt is very popular among ladies in the Tang Dynasty. It is found in many ancient paintings and unearthed cultural relics preserved now.");

    }).mouseleave(function (){
            $("#label_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/ND5UE7alirMsyZp.png");
        }
    );

    //Method
    $("#label_s_2").mouseenter(function(){
        $("#label_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/pzqUn9om7ReZXi6.png");
        $("#Tang_Intro_Title").text('Wearing Method');
        $("#Tang_Intro_Content").text('1. Tie the Upper Ru.\n' +
            '2. Put in the skirt and tie the back skirt around the chest.\n' +
            '3. Lift the belt of the front skirt and cross it around the back.\n' +
            '4. After the belt is crossed, wrap it back to the chest and tie it.');

    }).mouseleave(function (){
            $("#label_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/ONEhL31BrAnTp2o.png");
        }

    );
    //History
    $("#label_s_3").mouseenter(function(){
        $("#label_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/dyRUZ25HLgjpJiO.png");
        $("#Tang_Intro_Title").text('History');
        $("#Tang_Intro_Content").text('Chest-length Ru skin was first seen in the Northern and Southern Dynasties, and experienced the Sui, Tang and Five Dynasties. It was not eliminated by history until the rise of Neo Confucianism in the Song Dynasty, which has a history of about 1000 years. Terracotta figures or paintings unearthed before the Tang Dynasty were mostly in the style of straps. In the Kaiyuan period of the Tang Dynasty, they were fixed under their armpits with ties. After the prosperous Tang Dynasty, the noble clothes turned to be broad and procrastinating, among which the Large Sleeved Shirt was once popular, showing the spiritual style of ideological emancipation in the Tang Dynasty.');

    }).mouseleave(function (){
            $("#label_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/WiNvjlDTda7IpGx.png");
        }
    );
    //Introduction
    $("#label_s_4").mouseenter(function(){
        $("#label_s_4 img").attr("src", "https://s2.loli.net/2022/03/07/PwNZeUDn8O9SGRL.png");
        $("#Tang_Intro_Title").text('Inroduction');
        $("#Tang_Intro_Content").text('Chest-length Ru Skirt is a special name for women\'s skirt in Sui, Tang and Five Dynasties. The general wearing method is a pair of Parallel-collar Shirt with a lower skirt, or a Cross-collar Upper Ru with a lower skirt. The waist of the skirt is tied to the chest.');

    }).mouseleave(function (){
            $("#label_s_4 img").attr("src", " https://s2.loli.net/2022/03/07/HCAQ4eSNWbt5U7o.png");
        }
    );


    ////////Tang2

    //Feature
    $("#label4_s_1").mouseenter(function(){
        $("#label4_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/JkpTl9aXh4i1KH6.png");
        $("#Tang2_Intro_Title").text("Features");
        $("#Tang2_Intro_Content").text("The Tang Dynasty was unified, the economy was prosperous, and the social fashion was open. The clothing styles were also colorful, elegant and gorgeous, showing the graceful and luxurious plump charm of women.");

    }).mouseleave(function (){
            $("#label4_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/ND5UE7alirMsyZp.png");
        }
    );

    //Method
    $("#label4_s_2").mouseenter(function(){
        $("#label4_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/pzqUn9om7ReZXi6.png");
        $("#Tang2_Intro_Title").text('Wearing Method');
        $("#Tang2_Intro_Content").text('1. Wear the Pleated Skirt. The skirt wraps around the waist more than once, and the belt wraps from the back to the front. Double twist or single twist bow.\n' +
            '2. Wear the Short Vest. It can be interleaved and embedded into the skirt, or it can be put outside the skirt without embedding.');

    }).mouseleave(function (){
            $("#label4_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/ONEhL31BrAnTp2o.png");
        }

    );
    //History
    $("#label4_s_3").mouseenter(function(){
        $("#label4_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/dyRUZ25HLgjpJiO.png");
        $("#Tang2_Intro_Title").text('History');
        $("#Tang2_Intro_Content").text('The Vest originated in the Sui Dynasty and was popular in the song and Ming Dynasties.');

    }).mouseleave(function (){
            $("#label4_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/WiNvjlDTda7IpGx.png");
        }
    );
    //Introduction
    $("#label4_s_4").mouseenter(function(){
        $("#label4_s_4 img").attr("src", "https://s2.loli.net/2022/03/07/PwNZeUDn8O9SGRL.png");
        $("#Tang2_Intro_Title").text('Inroduction');
        $("#Tang2_Intro_Content").text('Vest(Bei Zi) means that one should keep his back straight when walking, so as to straighten one\'s back and body. The color and pattern of the Vest are simple and exquisite, and the seasonal variation of the material is fully considered.');

    }).mouseleave(function (){
            $("#label4_s_4 img").attr("src", " https://s2.loli.net/2022/03/07/HCAQ4eSNWbt5U7o.png");
        }
    );


    ////////Song

    //Feature
    $("#label3_s_1").mouseenter(function(){
        $("#label3_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/JkpTl9aXh4i1KH6.png");
        $("#Song_Intro_Title").text("Features");
        $("#Song_Intro_Content").text("Women in the Song Dynasty mostly matched with a bra inside a Vest. As an inner lining, it is often matched with gorgeous large sleeved shirts.\n" +
            "Vest(Bei Zi) means that one should keep his back straight when walking, so as to straighten one's back and body. The color and pattern of the Vest are simple and exquisite, and the seasonal variation of the material is fully considered. With the rapid development of the economy in the Northern Song Dynasty, women pursued more practicability and self-image confidence in their dress up, which made the Southern Song Dynasty establish an aesthetic fashion of ‘Containing but not revealing, revealing but not naked’.");

    }).mouseleave(function (){
            $("#label3_s_1 img").attr("src", "https://s2.loli.net/2022/03/07/ND5UE7alirMsyZp.png");
        }
    );

    //Method
    $("#label3_s_2").mouseenter(function(){
        $("#label3_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/pzqUn9om7ReZXi6.png");
        $("#Song_Intro_Title").text('Wearing Method');
        $("#Song_Intro_Content").text('1. Wear the Pleated Skirt. The skirt wraps around the waist more than once, and the belt wraps from the back to the front. Double twist or single twist bow.\n' +
            '2. Wear the Parallel-collar Shirt. It can be interleaved and embedded into the skirt, or it can be put outside the skirt without embedding.\n' +
            '3. Wear the Large Sleeved Shirt outside.');

    }).mouseleave(function (){
            $("#label3_s_2 img").attr("src", "https://s2.loli.net/2022/03/07/ONEhL31BrAnTp2o.png");
        }

    );
    //History
    $("#label3_s_3").mouseenter(function(){
        $("#label3_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/dyRUZ25HLgjpJiO.png");
        $("#Song_Intro_Title").text('History');
        $("#Song_Intro_Content").text('The Vest originated in the Sui Dynasty and was popular in the song and Ming Dynasties. The Large Sleeved Shirt originated in the Tang Dynasty and continued to be used until the end of the Ming Dynasty.');

    }).mouseleave(function (){
            $("#label3_s_3 img").attr("src", "https://s2.loli.net/2022/03/07/WiNvjlDTda7IpGx.png");
        }
    );
    //Introduction
    $("#label3_s_4").mouseenter(function(){
        $("#label3_s_4 img").attr("src", "https://s2.loli.net/2022/03/07/PwNZeUDn8O9SGRL.png");
        $("#Song_Intro_Title").text('Inroduction');
        $("#Song_Intro_Content").text('The Vest has a straight collar and opposite lapels, and the two sides are not sewn from the armpit. The short style reaches the waist, and the long style is over the knee. It is usually worn outside other clothes. Large sleeved shirt is a kind of dress with a wide style. It is often made of Luosha and is often worn on important occasions.');

    }).mouseleave(function (){
            $("#label3_s_4 img").attr("src", " https://s2.loli.net/2022/03/07/HCAQ4eSNWbt5U7o.png");
        }
    ) ;


// 点击sigup触发翻转样式
    $("#signUp").click(function() {
        $(".LogSign_form").toggleClass("middle-flip");
    });
    // 点击login触发翻转样式
    $("#logIn").click(function() {
        $(".LogSign_form").toggleClass("middle-flip");
    });

    // 点击login触发翻转样式
    $(function() {
        var width=$(".slider").width();
        $(".slider").css("padding-top",width);
        console.log(width);
        //$(".slider").css("padding-top",width);
    });
    $(window).resize(function () {
        var width=$(".slider").width();
        $(".slider").css("padding-top",width);
    });

    // remark submit
    $('#remark-submit').click(function () {
       var title = $('#title').val();
       var comment = $('#comment').val();
       var suit_id = $('#suit_id').val();
       if (!title || !comment) {
           alert("Please complete the information!");
           return ;
       }
       $.post("/hanfu/review", {title: title, comment: comment, suit_id: suit_id}, function (data) {
           if (data == 1) {
               alert('success!');
               location.reload();
           } else {
               alert('error!');
           }
       })
    });

    // submit to cart
    $('#product_Submit').click(function () {
        // get product id
        var id = $('#product_id').val();
        // get product size
        var size = $('#size').val();
        if (!size) {
            alert('Please choose product size!');
            return ;
        }
        $.post("/hanfu/submitCart", {id: id, size: size}, function (data) {
            if (data == -1) {
                alert("Please login first!");
                location.href = "/hanfu/SignUp";
            } else {
                if (data) {
                    location.href = "/hanfu/Cart";
                } else {
                    alert("Add error!");
                }
            }
        })
    });


////网页简介的跳转
    $("#Intro_Button")
        .mouseenter(function(){
            $("#Intro_Button").attr("src","https://s2.loli.net/2022/04/05/nQqEKjZpcdTVa42.png");})
        .mouseleave(
            function(){
                $("#Intro_Button").attr("src", "https://s2.loli.net/2022/04/05/wETOCU8ciR3Hnq9.png");}
        )
        .click(function(){
                introNum++;
                if(introNum==1){
                    $("#Intro_Pics").attr("src", "https://s2.loli.net/2022/04/05/m578gvU4nJBhzjl.png");
                    $("#Intro_Details").attr("src", "https://s2.loli.net/2022/04/05/bsHjMXzOuKiFnTg.png");
                }
                else if(introNum==2){
                    $("#Intro_Pics").attr("src", "https://s2.loli.net/2022/04/08/6xbjBORiQIkwgVy.png");
                    $("#Intro_Details").attr("src", "https://s2.loli.net/2022/04/08/r468kML7XNn21a5.png");
                }
                else if(introNum==3){
                    $("#Intro_Pics").attr("src", "https://s2.loli.net/2022/04/08/aKBpneSxfyPTCG5.png");
                    $("#Intro_Details").attr("src", "https://s2.loli.net/2022/04/08/VzlMg1eidRXvpcJ.png");
                }
                else if(introNum==4){
                    $("#Intro_Pics").attr("src", "https://s2.loli.net/2022/04/05/e2WMRi3FP9ELhqC.png");
                    $("#Intro_Details").attr("src", "https://s2.loli.net/2022/04/05/1fxNChdzpqsUu4L.png");
                }
                else if(introNum==5){
                    location.href = "https://s2215486.edinburgh.domains/HanfuProject/HomePage";
                }
            }
        );


});

function showGoodsInfo(obj) {
    var name = $(obj).attr('data-name');
    $('#Product_Name').html(name);
    var intro = $(obj).attr('data-intro');
    $('#product_Detail').html(intro);
    var price = $(obj).attr('data-price');
    $('#Product_Price').html('£' + price);
    var id = $(obj).attr('data-id');
    $('#product_id').val(id);
}

function deleteCart(cart_id) {
    $.post("/hanfu/deleteCart", {id: cart_id}, function (data) {
        if (data) {
            alert('delete success!');
            location.reload();
        } else {
            alert('delete error!');
        }
    })
}


$(window).resize(function() {

    var height = $("#Guides_Back").height();
    $(".Dynasty .Goods").css("height",height*1.05);
});
$(window).onload(function (){
    var height = $("#Guides_Back").height();
    $(".Dynasty .Goods").css("height",height*1.05);
})