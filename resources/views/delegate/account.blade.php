<!DOCTYPE html>
<html>
<head>
    <title>control panel</title>
    <link rel="icon" href="/delegate/imgs/logo.png" type="image/png">
    <meta charset="utf-8">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/delegate/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/delegate/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="/delegate/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/delegate/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/delegate/js/nicescroll.js"></script>

    <link rel="stylesheet" type="text/css" href="/delegate/wow/animate.css" />
    <script type="text/javascript" src="/delegate/wow/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <link rel="stylesheet" type="text/css" href="/delegate/css/default.css" />
    <script type="text/javascript" src="/delegate/js/control.js"></script>
    <script type="text/javascript" src="/delegate/js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="/delegate/css/controlpanel.css" />

</head>
<body>
<div class="container">
    <div class="row">
        <div class="c-head col-xs-12">
            <div class="ps-h">
                <img src="imgs/p2.png" />
                محمود الريان
            </div><!--end ps-h-->
            <div class="msg-h">
                <div class="msg" id="fa-bullhorn">
                    <i class="fa fa-bullhorn"></i>
                    <a>2</a>
                    <div class="notfs">
                        <li>
                            <img src="imgs/p2.png" />
                            <span>تم اضافة شركة <b>بورجيت</b> بقسم <b>الملابس</b></span>
                        </li>
                        <li>
                            <img src="imgs/p2.png" />
                            <span>تم اضافة شركة <b>بورجيت</b> بقسم <b>الملابس</b></span>
                        </li>
                        <li>
                            <img src="imgs/p2.png" />
                            <span>تم اضافة شركة <b>بورجيت</b> بقسم <b>الملابس</b></span>
                        </li>
                        <li>
                            <img src="imgs/p2.png" />
                            <span>تم اضافة شركة <b>بورجيت</b> بقسم <b>الملابس</b></span>
                        </li>

                    </div>
                    <div class="mark"></div>
                </div><!--end msg-->

                <div class="msg" id="fa-envelope-o">
                    <i class="fa fa-envelope-o"></i>
                    <a>3</a>
                    <div class="mark"></div>
                    <div class="my-msgs">
                        <li>
                            <img src="imgs/p3.png" />
                            <h4>محمود الريان</h4>
                            <span>fri 2:20</span>
                        </li>
                        <li>
                            <img src="imgs/p3.png" />
                            <h4>محمود الريان</h4>
                            <span>fri 2:20</span>
                        </li>
                        <li>
                            <img src="imgs/p3.png" />
                            <h4>محمود الريان</h4>
                            <span>fri 2:20</span>
                        </li>
                        <li>
                            <img src="imgs/p3.png" />
                            <h4>محمود الريان</h4>
                            <span>fri 2:20</span>
                        </li>
                        <li>
                            <img src="imgs/p3.png" />
                            <h4>محمود الريان</h4>
                            <span>fri 2:20</span>
                        </li>
                    </div>
                </div><!--end msg-->
            </div><!--end ,sg-h-->
        </div><!--end c-head-->
        <div class="side col-sm-4 col-md-3">
            <div class="prof-s">
                <img src="imgs/p2.png">
                <h4>Mahmoud Alryan</h4>
            </div><!--end porf-s-->
            <a href="main.html">
                <li id="btn-home">
                    <i class="fa fa-home"></i>
                    الرئيسيه
                </li>
            </a>

            <a href="comps.html">
                <li id="btn-comp">
                    <i class="fa fa-building"></i>
                    الشركات
                </li>
            </a>

            <!--<a href="messages.html">-->
            <!--<li id="btn-msg">-->
            <!--<i class="fa fa-envelope-o"></i>-->
            <!--الرسائل-->
            <!--</li>-->
            <!--</a>-->

            <li id="btn-log">
                <i class="fa fa-unlock-alt"></i>
                تسجيل الخروج
            </li>
        </div><!--end side-->

        <div class="contents col-sm-8 col-md-9 col-xs-12">
            <div class="content main">
                <div class="row">
                    <div class="num-date col-sm-3 col-xs-4">
                        <i class="fa fa-calendar"></i>
                        <span>
								<?php echo(date('d m'))?>
                            12 April
							</span>
                        <a>
                            <?php echo(date('y')); ?>
                            2015
                        </a>
                    </div>

                    <div class="num-comp col-sm-3 col-xs-4">
                        <i class="fa fa-building"></i>
                        <span>
								<h4>عدد الشركات</h4>
								<a>158</a>
							</span>
                    </div>

                    <div class="num-new  col-sm-3 col-xs-4">
                        <i class="fa fa-briefcase"></i>
                        <span>
								<h4>الشركات المضافه اليوم</h4>
								<a>8</a>
							</span>
                    </div>
                </div>
                <div class="row">

                    <div class="sh col-sm-8 col-xs-9">
                        <form>
                            <input type="text" placeholder='اكتب الكلمه التى تريد البحث عنها' />
                            <input type="submit" />
                            <i class="fa fa-search"></i>
                        </form>
                    </div><!--end sh-->
                    <div class="select col-sm-6 col-xs-9">
                        <form>
                            <select>
                                <option>اسم الشركه</option>
                                <option>أهل الشام</option>
                                <option>حضرموت</option>
                                <option>بورجيت</option>
                                <option>أهل الشام</option>
                                <option>حضرموت</option>
                                <option>بورجيت</option>
                                <option>أهل الشام</option>
                                <option>حضرموت</option>
                                <option>بورجيت</option>
                            </select>

                            <select>
                                <option>التصنيف</option>
                                <option>ملابس</option>
                                <option>مأكولات</option>
                                <option>مطاعم</option>
                                <option>شركات</option>
                            </select>
                            <input type="submit" value="بحث">
                        </form>
                    </div><!--end select-->
                </div>
            </div><!--end content-->
        </div><!--end contents-->
    </div><!--end row-->
</div><!--end container-->
<div id="cp-edit-form">
    <form>
        <input type="text" placeholder="اسم الشركه" />
        <input type="radio" value="active" name="active"> active
        <input type="radio" value="notactive" name="active"> not active
        <input type="submit" value="حفظ" />
    </form>
</div>
<div class="back">
</div>
</body>
</html>