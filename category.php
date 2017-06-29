<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!--360 browser -->
    <meta name="renderer" content="webkit">
    <meta name="author" content="wos">
    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/i/app.png">
    <!--Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="images/i/app.png">
    <!--Win8 or 10 -->
    <meta name="msapplication-TileImage" content="images/i/app.png">
    <meta name="msapplication-TileColor" content="#e1652f">

    <link rel="icon" type="image/png" href="images/i/favicon.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="css/public.css">

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="assets/js/jquery.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="jquery-3.2.1.min.js"></script>
    <！--script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script-->
    <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <script src="assets/js/amazeui.min.js"></script>
    <script src="js/public.js"></script>
</head>
<body>

<header class="am-topbar am-topbar-fixed-top wos-header">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="#"><img src="images/logo.png" alt=""></a>
        </h1>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-warning am-show-sm-only"
                data-am-collapse="{target: '#collapse-head'}">
            <span class="am-sr-only">导航切换</span>
            <span class="am-icon-bars"></span>
        </button>

        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li class="am-active"><a href="index.php">首页</a></li>
                <li><a href="#">资讯</a></li>
                <li><a href="#">专栏</a></li>
                <li class="am-dropdown" data-am-dropdown>
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                        案例 <span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li class="am-dropdown-header">案例</li>
                        <li><a href="#">1. 游戏案例</a></li>
                        <li><a href="#">2. 营销案例</a></li>
                        <li><a href="#">3. 工具案例</a></li>
                    </ul>
                </li>
                <li><a href="#">评测</a></li>
                <li><a href="#">活动</a></li>
            </ul>

            <div class="am-topbar-right">
                <button class="am-btn am-btn-default am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span>注册</button>
            </div>

            <div class="am-topbar-right">
                <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
            </div>
        </div>
    </div>
</header>

<div id="category_top">
    <div class="am-hide-lg-only kz" id="leftbtn">
        <i class="am-icon-angle-left" ></i>
    </div>
    <div class="am-hide-lg-only kz" style="right:0px;" id="rightbtn">
        <i class="am-icon-angle-right"></i>
    </div>
    <div class="am-container" >
        <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-thumbnails" id="topface">
            <li>
                <a href="category2.php">
                <div class="ctl active">
                    <img src="Temp-images/face1.jpg">
                    <h3>一号女嘉宾</h3>
                    <p>MMM</p>
                </div>
                <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.sina.com">
                <div class="ctl">
                    <img src="Temp-images/face2.jpg">
                    <h3>二号女嘉宾</h3>
                    <p>AmazeUI</p>
                </div>
                <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.qq.com">
                    <div class="ctl">
                        <img src="Temp-images/face3.jpg">
                        <h3>三号女嘉宾</h3>
                        <p>云适配</p>
                    </div>
                    <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.youku.com">
                    <div class="ctl">
                        <img src="Temp-images/face4.jpg">
                        <h3>四号女嘉宾</h3>
                        <p>XXXX</p>
                    </div>
                    <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.yahoo.com">
                    <div class="ctl">
                        <img src="Temp-images/face5.jpg">
                        <h3>五号女嘉宾</h3>
                        <p>去哪</p>
                    </div>
                    <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.china.com">
                    <div class="ctl">
                        <img src="Temp-images/face6.jpg">
                        <h3>六号女嘉宾</h3>
                        <p>Yahoo</p>
                    </div>
                    <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
        </ul>

    </div>

</div>

<script>
    var countnum=5 //一共多少个图 例如6个请输入5
    $("#leftbtn").click(function(){
        var temp_href=$("#topface li:eq(0) a").attr("href");
        var temp_img=$("#topface li:eq(0) img").attr("src");
        var temp_h3=$("#topface li:eq(0) h3").php();
        var temp_p=$("#topface li:eq(0) p").php();

        for (i=0; i<countnum; i++){
            var n=i+1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").php($("#topface li:eq("+n+") h3").php());
            $("#topface li:eq("+i+") p").php($("#topface li:eq("+n+") p").php());
        };
        $("#topface li:eq("+countnum+") a").attr('href',temp_href);
        $("#topface li:eq("+countnum+") img").attr('src',temp_img);
        $("#topface li:eq("+countnum+") h3").php(temp_h3);
        $("#topface li:eq("+countnum+") p").php(temp_p);
    });
    $("#rightbtn").click(function(){
        var temp_href=$("#topface li:eq("+countnum+") a").attr("href");
        var temp_img=$("#topface li:eq("+countnum+") img").attr("src");
        var temp_h3=$("#topface li:eq("+countnum+") h3").php();
        var temp_p=$("#topface li:eq("+countnum+") p").php();

        for (i=countnum; i>0; i--){
            var n=i-1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").php($("#topface li:eq("+n+") h3").php());
            $("#topface li:eq("+i+") p").php($("#topface li:eq("+n+") p").php());
        };
        $("#topface li:eq(0) a").attr('href',temp_href);
        $("#topface li:eq(0) img").attr('src',temp_img);
        $("#topface li:eq(0) h3").php(temp_h3);
        $("#topface li:eq(0) p").php(temp_p);
    });
</script>
<div id="cattit">
    <ul class="am-avg-sm-2 am-avg-md-2 am-avg-lg-2">
        <li><h3><a href="#">合作专栏</a></h3></li>
        <li  class="active-none"><h3><a href="#">个人专栏</a></h3></li>
    </ul>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<div id="cattlist" class="am-container">
    <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-4">
        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">
                        <i class="am-icon-plus"></i>
                        橙色按钮
                    </button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-default">
                        <i class="am-icon-plus"></i>
                        灰色按钮
                    </button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>

        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="Temp-images/face1.jpg">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">橙色按钮</button>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="am-container" style="margin: 100px auto">
    <ul data-am-widget="pagination" class="am-pagination am-pagination-default am-text-center">

        <li class="am-pagination-first ">
            <a href="#" class="">第一页</a>
        </li>

        <li class="am-pagination-prev ">
            <a href="#" class="">上一页</a>
        </li>


        <li class="">
            <a href="#" class="">1</a>
        </li>
        <li >
            <a href="#">2</a>
        </li>
        <li class="">
            <a href="#" class="">3</a>
        </li>
        <li class="">
            <a href="#" class="">4</a>
        </li>
        <li class="">
            <a href="#" class="">5</a>
        </li>
        <li class="">
            <a href="#" class="">6</a>
        </li>
        <li class="">
            <a href="#" class="">7</a>
        </li>
        <li class="">
            <a href="#" class="">8</a>
        </li>
        <li class="am-active">
            <a href="#">9</a>
        </li>
        <li class="">
            <a href="#" class="">10</a>
        </li>
        <li class="">
            <a href="#" class="">11</a>
        </li>
        <li class="">
            <a href="#" class="">12</a>
        </li>
        <li class="">
            <a href="#" class="">13</a>
        </li>
        <li class="">
            <a href="#" class="">14</a>
        </li>
        <li class="">
            <a href="#" class="">15</a>
        </li>
        <li class="">
            <a href="#" class="">16</a>
        </li>


        <li class="am-pagination-next ">
            <a href="#" class="">下一页</a>
        </li>

        <li class="am-pagination-last ">
            <a href="#" class="">最末页</a>
        </li>
    </ul>
</div>




<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>

<footer>
    <div class="content">
        <ul class="am-avg-sm-5 am-avg-md-5 am-avg-lg-5 am-thumbnails">
            <li><a href="#">联系我们</a></li>
            <li><a href="#">加入我们</a></li>
            <li><a href="#">合作伙伴</a></li>
            <li><a href="#">广告及服务</a></li>
            <li><a href="#">友情链接</a></li>
        </ul>
        <div class="btnlogo"><img src="images/btnlogo.png"/></div>
        <p>Amaze UI出品<br>京ICP备11008918号-3 Copyright ©2015 HTML5梦工场 助推HTML5发展</p>
        <div class="w2div">
            <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-2 am-avg-lg-2 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
                <li class="w2">
                    <div class="am-gallery-item">
                        <a href="Temp-images/dd.jpg">
                            <img src="Temp-images/dd.jpg" />
                            <h3 class="am-gallery-title">订阅号：HTML5梦工厂</h3>
                        </a>
                    </div>
                </li>
                <li   class="w2">
                    <div class="am-gallery-item">
                        <a href="Temp-images/dd.jpg">
                            <img src="Temp-images/dd.jpg"/>
                            <h3 class="am-gallery-title">服务号：HTML5头条</h3>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>