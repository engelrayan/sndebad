<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>صفحة الشركة</title>

    <!-- for styles -->
    <link rel="stylesheet" type="text/css" href="/design/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/design/css/style.css">
    <link href="/design/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/design/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="/design/css/animate.css" rel="stylesheet" type="text/css">
    <link href="#" rel="icon" type="text/css">
</head>

<body>
<div class="myhead col-sm-12 col-xs-12 text-center">
    <div class="arrow col-xs-12 hidden-md hidden-lg">
        <i class="fa fa-arrow-up hidden-md hidden-lg" id="show-up" data-toggle="tooltip" data-placement="right" title="" data-original-title="Hide Nav"></i>

    </div>
    <div class="container">





        <div class="btns1 col-lg-4 col-md-4 col-xs-12 text-center">
            <a href="index.html">
                تسجيل الخروج
            </a><a class="" href="send-message.html">
                الرسائل
                <span class="fa fa-envelope"></span>
            </a><a href="company.html">
                شركتي
            </a>
        </div>
        <div class="search col-lg-4 col-md-4 col-xs-12 text-center">
            <form method="get" action="/view/search">
                <input type="text" name="search" placeholder="البحث">
                <input type="submit" value="ابحث ">
            </form>
        </div>
        <!-- end search -->
    </div>
    <!-- end container -->
</div>
<!--end my heade-->

<i class="fa fa-arrow-down " id="show-down" data-toggle="tooltip" data-placement="right" title="" data-original-title="Show Nav"></i>


<div class="comp-info col-xs-12 text-center">
    <div class="container">
        <div class="row">
            <div class="comp-img col-xs-12 col-sm-5 text-center">
                <h3>cairobot</h3>
                <form>
                    <input type="submit" id="adj8" value="تاكيد رفع الصورة">
                </form>
                <div class="imgcontent">
                    <div class="bstext"><span>أختر صورة الشركه</span></div>
                    <output id="list"></output>
                    <input type="file" id="show-adj8" name="myFileSelect">
                </div>


            </div>
            <div class="infos1 col-xs-12 col-sm-7">
                <ul>
                    <li class="m">اسم الشركة</li>
                    <li> cairobot</li>
                    <li class="m">رقم الهاتف</li>
                    <li> 01094087595</li>
                    <li class="m">العنوان</li>
                    <li> المنصوره الدقهليه</li>
                    <li class="m">مواعيد العمل</li>
                    <li> من &nbsp;&nbsp;9 صباحا &nbsp;&nbsp; الى &nbsp;&nbsp;9 مساءا</li>


                    <li class="m">تواصل معنا</li>
                    <li>
                        <div class="social-links">
                            <a class="btn btn-social-icon btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a class="btn btn-social-icon btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a class="btn btn-social-icon btn-google-plus">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a class="btn btn-social-icon btn-linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end infos1 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!--end comp-info-->



<div class="login-pass">
    <h1>تعديل كلمة المرور</h1>
    <form action="/login" method="post">
        <input type="password" placeholder="أدخل كلمة المرور القديمة" class="pass1" required="" autofocus="" name="oldpass">
        <input type="password" id="password" placeholder="أدخل كلمة المرور الجديدة" class="pass1" required="" name="newpass">
        <span id="result"></span>
        <input type="password" id="cpassword" onkeyup="checkPass(); return false;" placeholder="أعد  إدخال كلمة المرور الجديدة" class="pass1" required="" name="cnewpass">
        <span id="confirmMessage" class="confirmMessage"></span>
        <button type="submit" class="bt1" name="lginbtn">حفظ</button>
    </form>
</div>
<!--end login-form-->




<div class="control-pg">
        <span class="open-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>
    <span class="close-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>
    <div>
        <li class="edit-comp-btn" id="edit-comp">
            <span class="glyphicon glyphicon-pencil"></span> تعديل بيانات الشركه
        </li>

        <li class="add-prod-btn" id="edit-prod">
            <span class="glyphicon glyphicon-plus"></span> اضافة منتج
        </li>

        <li class="add-offer-btn" id="edit-offer">
            <span class="glyphicon glyphicon-plus"></span> اضافة عرض
        </li>

        <a href="orders.html">
            <li>
                    <span class="fa fa-download">
                        <span class="badge">5</span>
                    </span>طلبات المنتجات الواردة
            </li>
        </a>

        <a href="join-jop.html">
            <li>
                <span class="fa fa-bullhorn"></span> أعلان عن وظيفة
            </li>
        </a>

        <li class="add-offer-btn" id="edit-social">
            <span class="fa fa-group"></span> تعديل معلومات التواصل
        </li>

        <li class="add-offer-btn" id="show-all">
            <span class="fa fa-bank"></span> جميع المنتجات والعروض
        </li>

        <a href="inbox.html">
            <li class="add-offer-btn" id="show-message">
                    <span class="fa fa-envelope">
                        <span class="badge">2</span>
                    </span> الرسائل الواردة
            </li>
        </a>
    </div>
</div>
<!--end control-pg-->


<div class="container1 edits">
    <div class="row">

        <div class="widme edit-comp col-md-7 col-sm-9 col-xs-12 wow bounceInDown">
            <h3>تعديل بيانات الشركه </h3>
            <div class="row">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="partone col-sm-6 col-xs-12">
                        <input type="text" name="name" value="cairobot" class="form-control input-sm" placeholder="اسم الشركه">

                        <input type="text" name="username" value="m.cairobot" class="form-control input-sm" placeholder="الاسم المستخدم فى الدخول">

                        <input type="email" name="email" value="hassansharaf2020@yahoo.com" class="form-control input-sm" placeholder="البريد الإلكترونى">



                        <input type="text" name="mobile" value="01094087595" class="form-control input-sm" placeholder="أرقام الهواتف">
                        <a class="show-pass">إضغط لتغير الرقم السري</a>
                        <div class="time">
                            <label>مواعيد العمل</label>
                            <input type="text" name="start_work" value="9" class="form-control input-sm" placeholder="من">
                            <select name="from_work">
                                <option selected="" value="صباحا">ص</option>
                                <option value="مساءا">م</option>
                            </select>


                            <input type="text" name="end_work" value="9" class="form-control input-sm" placeholder="إلى">
                            <select name="to_work">
                                <option value="صباحا">ص</option>
                                <option selected="" value="مساءا">م</option>
                            </select>
                        </div>

                        <div class="time">
                            <label>فترة الإستراحه</label>
                            <input type="text" name="start_rest" value="1" class="form-control input-sm" placeholder="من">
                            <select name="from_rest">
                                <option selected="" value="صباحا">ص</option>
                                <option value="مساءا">م</option>
                            </select>

                            <input type="text" name="end_rest" value="2" class="form-control input-sm" placeholder="إلى">
                            <select name="to_rest">
                                <option selected="" value="صباحا">ص</option>
                                <option value="مساءا">م</option>
                            </select>
                        </div>

                        <div class="places">
                            <label>حدد مكان الشركه</label>
                            <div class="controls">
                                <input required="" type="text" name="country" value="مصر" class="form-control input-sm" placeholder="الدوله">


                                <input required="" type="text" name="bigcity" value="القاهره" class="form-control input-sm" placeholder="المحافظه">


                                <input required="" type="text" name="city" value="الحى السادس" class="form-control input-sm" placeholder="المدينه">

                                <input required="" type="text" name="street" value="الجلاء" class="form-control input-sm" placeholder="المناطق">
                            </div>
                            <input type="text" name="address" class="form-control input-sm" value="المنصوره الدقهليه" placeholder="العنوان تفصيليا">
                        </div>
                    </div>
                    <!--end partone-->

                    <div class="part-two col-sm-6 col-xs-12">
                        <div class="s-sort">
                            <label>التصنيف</label>
                            <select name="specify">
                                <option selected="" value="developer">developer</option>
                            </select>

                            <a id="add-dept" class="btn">تصنيف أخر +</a>
                            <div class="an-sort">
                                <input type="text" name="specifyy" placeholder="تصنيف اخر">
                                <a id="add-an-sort">إضافة</a>
                            </div>
                            <!--end an-sort-->

                            <div class="imgcontent v2">
                                <div class="bstext"><span>أختر صورة الشركه</span></div>
                                <output id="list"></output>
                                <input type="file" name="myFileSelect" multiple="">

                            </div>


                            <textarea rows="6" name="describe" class="form-control input-sm" placeholder="نبذه مختصره عن الشركه"> this test of this company </textarea>

                        </div>

                        <input type="submit" name="companyedit" value="ارسال">
                    </div>
                    <!--end parttwo-->

                </form>
            </div>
        </div>
        <!--end edit-comp-->

        <div class="widme edited-social col-md-5 col-sm-9 col-xs-12 wow bounceInDown">
            <div class="row">
                <h1>تعديل معلومات التواصل الاجتماعي</h1>
                <div class="net-form">
                    <form action="#" method="get">
                        <input type="text" placeholder="FaceBook">
                        <input type="text" placeholder="Twitter">
                        <input type="text" placeholder="YouTube">
                        <input type="text" placeholder="LinkedIn">
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <!-- end social-form -->
            </div>
            <!-- end row -->
        </div>
        <!-- end edited-social -->

        <div class="widme all-shown col-md-5 col-sm-9 col-xs-12 wow bounceInDown text-center">
            <div class="row">
                <h1>جميع منتجاتنا وعروضنا</h1>
                <div class="offers-prod">
                    <a href="all-products.html">
                        <h4>عدد المنتجات</h4>
                        <span>( 50 )</span>
                    </a>

                    <a href="all-products.html">
                        <h4>عدد العروض</h4>
                        <span>( 20 )</span>
                    </a>
                </div>
                <!-- end offers-prod -->
            </div>
            <!-- end row -->
        </div>
        <!-- end edited-social -->

        <div class="widme add-prod col-md-7 col-sm-8 col-xs-12 wow bounceInDown">
            <!-- Add product-->
            <h3>اضافة منتج</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" name="name" placeholder="اسم المنتج">
                        <input type="number" name="price" placeholder="السعر">
                        <input type="text" name="type" placeholder="التصنيف">

                        <a class="add-other">اضافه مواصفات أخرى</a>
                        <div id="other">
                            <input type="text" name="offeraddress[]" placeholder="اسم الصفه">
                            <input type="text" name="offerinfo[]" placeholder="تفاصيل">
                        </div>

                        <textarea rows="6" name="description" class="form-control input-sm" placeholder="تفاصيل المنتج"></textarea>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="imgcontent">
                            <div class="bstext"><span>أختر صورة المنتج</span></div>
                            <output id="list"></output>
                            <input type="file" name="myProFileSelect" multiple="">

                        </div>
                        <!--end imagecontent-->
                        <input type="submit" name="addproduct" value="إضافة" id="addpr-btn">

                    </div>
                    <!-- end col-imgcontent -->
                </div>
                <!-- end row -->


            </form>
        </div>
        <!--end edit-comp-->

        <div class="widme add-offer col-md-7 col-sm-8 col-xs-12 wow bounceInDown">
            <h3>اضافة عرض</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" name="name" placeholder="اسم العرض">
                        <input type="text" name="price" placeholder="السعر قبل الخصم">
                        <input type="text" name="offerprice" placeholder="السعر بعد الخصم">
                        <input type="text" name="type" placeholder="التصنيف">
                        <a class="add-other">اضافه مواصفات أخرى</a>
                        <div id="other">
                            <input type="text" name="offeraddress[]" placeholder="اسم الصفه">
                            <input type="text" name="offerinfo[]" placeholder="تفاصيل">
                        </div>
                        <textarea rows="6" name="description" class="form-control input-sm" placeholder="تفاصيل العرض"></textarea>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="imgcontent">
                            <div class="bstext"><span>أختر صورة العرض</span></div>
                            <output id="list"></output>
                            <input type="file" name="myOfFileSelect" multiple="">

                        </div>
                        <!--end imagecontent-->

                        <input type="submit" name="addoffer" value="إضافة" id="addpr-btn">
                    </div>
                    <!-- end col-imgcontent -->
                </div>
                <!-- end row -->


            </form>
        </div>
        <!--end edit-comp-->
    </div>
    <!-- end row -->


</div>
<!-- end slider4 -->
</div>
<!--end second container-->


<div class="container">

            <div class="main-bottom1 col-xs-12 text-center">
                <h3 id="show-offers">منتجاتنا</h3>
                <div class="filters">
                    <button class="filter active" data-filter="all">جميع المأكولات
                    </button>

                    <button class="filter" data-filter=".category-1">سندوتشات
                    </button>

                    <button class="filter" data-filter=".category-3">كريبات
                    </button>

                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>
                    <button class="filter" data-filter=".category-4">سلطات
                    </button>

                </div>

                <div id="portfolio-container">
                    <div class="mix category-1" data-my-order="1" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" class="go_link" title="Go Offer Page" target="_blank">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="images/a.jpg" alt="ios1">
                    </div>

                    <div class="mix category-1" data-my-order="2" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" class="go_link" title="Go Offer Page" target="_blank">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="images/a.jpg" alt="ios2">
                    </div>

                    <div class="mix category-2" data-my-order="3" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" class="go_link" title="Go Offer Page" target="_blank">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="images/a.jpg" alt="ios3">
                    </div>

                    <div class="mix category-2" data-my-order="4" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios4">
                    </div>

                    <div class="mix category-3" data-my-order="5" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios5">
                    </div>

                    <div class="mix category-3" data-my-order="6" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios6">
                    </div>

                    <div class="mix category-4" data-my-order="7" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios7">
                    </div>

                    <div class="mix category-4" data-my-order="8" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios8">
                    </div>

                    <div class="mix category-4" data-my-order="8" style="display: inline-block;">
                        <div class="caption">
                            <h1>sisinfo ksa</h1>
                            <h1>120$</h1>
                            <a href="#" target="_blank" class="go_link" title="Go Offer Page">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <img src="images/a.jpg" alt="ios8">
                    </div>
                    <div id="sw1">
                        <img src="images/a.jpg" alt="s1">
                    </div>

                    <div id="sw2">
                        <img src="images/a.jpg" alt="s2">
                    </div>

                    <div id="sw3">
                        <img src="images/a.jpg" alt="s3">
                    </div>

                    <div id="sw4">
                        <img src="images/a.jpg" alt="s4">
                    </div>

                    <div id="sw5">
                        <img src="images/a.jpg" alt="s5">
                    </div>

                    <div id="sw6">
                        <img src="images/a.jpg" alt="s6">
                    </div>

                    <div id="sw7">
                        <img src="images/a.jpg" alt="s7">
                    </div>

                    <div id="sw8">
                        <img src="images/a.jpg" alt="s8">
                    </div>

                    <div id="sw9">
                        <img src="images/a.jpg" alt="s8">
                    </div>
                </div>
            </div>
             end main-bottom

</div>
<!-- end container -->
<!-- for scripts -->
<script type="text/javascript" src="/design/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/design/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/design/js/cycle.all.js"></script>
<script type="text/javascript" src="/design/js/jquery.bpopup.js"></script>
<script type="text/javascript" src="/design/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="/design/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="/design/js/script.js"></script>

</body>

</html>