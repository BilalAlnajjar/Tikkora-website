<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dashboard –  English">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico"/>

    <!-- TITLE -->
    {{--    <title>{{$web ? $web->name : 'Web Title'}}</title>--}}
    <title>{{'Box Print'}}</title>

    <!-- BOOTSTRAP CSS -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- STYLE CSS -->
    <link href="/assets/css/style.css" rel="stylesheet"/>
    <link href="/assets/css/skin-modes.css" rel="stylesheet"/>

    <!-- SIDE-MENU CSS -->
    <link href="/assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

    <!--C3.JS CHARTS CSS -->
    <link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!--MORRIS CSS -->
    <link href="/assets/plugins/morris/morris.css" rel="stylesheet"/>

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!-- table -->
    <link href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    {{--  end table  --}}

    <!-- ION-RANGESLIDER CSS -->
    <link href="/assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="/assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css" rel="stylesheet">

    <!--SWEET ALERT CSS-->
    <link href="/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="/assets/css/icons.css" rel="stylesheet"/>
    <link href='/assets/fonts/stylesheet.css' rel='stylesheet' type='text/css'>

    <!-- SIDEBAR CSS -->
    <link href="/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- WYSIWYG EDITOR CSS -->
    <link href="/assets/plugins/wysiwyag/richtext.css" rel="stylesheet"/>

    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="/assets/plugins/multipleselect/multiple-select.css">

    <!-- FILE UPLODE CSS -->
    <link href="/assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>

    <!-- SELECT2 CSS -->
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet"/>

    <!-- GALLERY CSS -->
    <link href="/assets/plugins/gallery/gallery.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css"/>

    <style>
        .swal2-popup {
            font-size: 15px !important;
        }
    </style>

    <script src="sweetalert2.min.js"></script>
    <script src="https://my.forms.app/static/feedback.js" type="text/javascript">  FormsAppFeedbackButton({
            formId: "60e35e4e2ca34f5aa4a349b6",
            buttonText: "Contact Us",
            buttonTextColor: "#FFFFFF",
            buttonBackground: "#11c4e0",
            verticalAlligment: "middle",
            horizontalAlligment: "left",
            width: 500,
            height: 400
        }); </script>
    <script src="/assets/js/jquery-3.4.1.min.js"></script>


</head>

<body class="app sidebar-mini">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->
<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- Sidebar -->
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            {{--                <div class="side-header">--}}
            {{--                    <a class="header-brand1" href="index.php">--}}
            {{--                        <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">--}}
            {{--                        <img src="/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">--}}
            {{--                        <img src="/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">--}}
            {{--                        <img src="/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">--}}
            {{--                    </a><!-- LOGO -->--}}
            {{--                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a>--}}
            {{--                    <!-- sidebar-toggle-->--}}
            {{--                </div>--}}
            <div class="app-sidebar__user">
                <div class="dropdown user-pro-body text-center">
                    <div class="user-pic">
                        <img src="https://i.imgur.com/ye6m2k3.jpg" alt="user-img" class="avatar-xl rounded-circle">
                    </div>
                    <div class="user-info">
                        <h6 class=" mb-0 text-dark">Admin</h6>
                        <span class="text-muted app-sidebar__user-name text-sm">Company Name</span>
                    </div>
                </div>
            </div>
            <div class="sidebar-navs">
                <ul class="nav  nav-pills-circle">
                    {{-- <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                        <a class="nav-link text-center m-2" href="generalsettings.php">
                            <i class="fe fe-settings"></i>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Inbox">
                        <a class="nav-link text-center m-2" href="inbox.php">
                            <i class="fe fe-mail"></i>
                        </a>
                    </li> --}}
                    <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                        <a class="nav-link text-center m-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            <i class="fe fe-power"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    {{-- <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-power"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
            <ul class="side-menu">
                <li>
                    <a class="side-menu__item" href="{{route('dashboard')}}"><i
                            class="side-menu__icon ti-home"></i><span
                            class="side-menu__label">لوحة القيادة</span></a>
                </li>


                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-futbol-o"></i><span
                            class="side-menu__label">المباريات</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('game.index')}}" class="slide-item"> <i class="side-menu__icon ion-grid"></i>عرض المباريات
                            </a></li>
                        <li><a href="{{route('game.create')}}" class="slide-item"> <i
                                    class="side-menu__icon fe fe-plus"></i>اضافة مباراة جديدة</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-newspaper-o"></i><span
                            class="side-menu__label">الاخبار</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('news.index')}}" class="slide-item"> <i class="side-menu__icon ion-grid"></i>عرض الاخبار
                            </a></li>
                        <li><a href="{{route('news.create')}}" class="slide-item"> <i
                                    class="side-menu__icon fe fe-plus"></i>اضافة خبر جديدة</a></li>
                    </ul>
                </li>

                <li>
                    <a class="side-menu__item" href="{{route('users.index')}}"><i
                            class="side-menu__icon side-menu__icon mdi mdi-account-multiple"></i><span
                            class="side-menu__label">المستخدمين</span></a>
                </li>


                {{--                    <li>--}}
                {{--                        <a class="side-menu__item" href="#"><i--}}
                {{--                                class="side-menu__icon side-menu__icon fe fe-mail"></i><span--}}
                {{--                                class="side-menu__label">الخدمات</span></a>--}}
                {{--                    </li>--}}


                {{--                    <li>--}}
                {{--                        <a class="side-menu__item" href="#"><i--}}
                {{--                                class="side-menu__icon fa fa-cutlery"></i><span--}}
                {{--                                class="side-menu__label">Product</span></a>--}}
                {{--                    </li>--}}

                {{--                    <li class="slide">--}}
                {{--                        <a class="side-menu__item" data-toggle="slide" href="#"><i--}}
                {{--                                class="side-menu__icon zmdi zmdi-assignment"></i><span--}}
                {{--                                class="side-menu__label">Addition</span><i class="angle fa fa-angle-right"></i></a>--}}
                {{--                        <ul class="slide-menu">--}}
                {{--                            <li><a href="#" class="slide-item"> <i class="side-menu__icon ion-grid"></i> Addition Category--}}
                {{--                                    </a></li>--}}
                {{--                            <li><a href="#" class="slide-item"> <i--}}
                {{--                                        class="side-menu__icon fe fe-plus"></i>Addition SubCategory</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{-- <li>
                    <a class="side-menu__item" href="clients.php"><i class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Clients</span></a>
                </li> --}}


                {{--                    <li>--}}
                {{--                        <a class="side-menu__item" href="#"><i--}}
                {{--                                class="side-menu__icon mdi mdi-truck"></i><span--}}
                {{--                                class="side-menu__label">Delivery</span></a>--}}
                {{--                    </li>--}}

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon mdi mdi-tune"></i><span
                            class="side-menu__label">التحكم في الموقع</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('slide.index')}}" class="slide-item"><i
                                    class="side-menu__icon ti-layers"></i>عرض الشرائح</a></li>

{{--                        <li><a href="#" class="slide-item"><i--}}
{{--                                    class="side-menu__icon zicon icon-book-open"></i>قسم حولنا</a></li>--}}
                        <li><a href="{{route('element.indexSectionOne')}}" class="slide-item"><i
                                    class="side-menu__icon ti-write"></i>منطقة اضافية 1</a></li>
                        <li><a href="{{route('element.indexSectionTwo')}}" class="slide-item"><i
                                    class="side-menu__icon ti-write"></i>منطقة اضافية 2</a></li>
                        {{-- <li><a href="home-global.php" class="slide-item"><i
                                    class="side-menu__icon fa fa-fort-awesome"></i>The best</a></li> --}}
                        {{--                            <li><a href="#" class="slide-item"><i--}}
                        {{--                                        class="side-menu__icon fa fa-play-circle"></i>video</a></li>--}}
                        {{-- <li><a href="pages.php" class="slide-item"><i
                                    class="side-menu__icon fa fa-home"></i>about</a></li> --}}
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon mdi mdi-wrench"></i><span class="side-menu__label">الاعدادات</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        {{--                            <li><a href="#" class="slide-item"><i--}}
                        {{--                                        class="side-menu__icon fa fa-th-large"></i>Sort Categories</a></li>--}}
                        {{--                            <li><a href="#" class="slide-item"><i--}}
                        {{--                                        class="side-menu__icon fa fa-th-large"></i>Sort products</a></li>--}}
                        {{-- <li><a href="sub_category.php" class="slide-item"><i
                                    class="side-menu__icon fa fa-th-large"></i>Sub Category</a></li> --}}
                        <li><a href="{{route('social.create')}}" class="slide-item"> <i
                                    class="side-menu__icon fe fe-twitter"></i>مواقع التواصل الاجتماعي</a></li>
                        <li><a href="{{route('general.create')}}" class="slide-item"><i
                                    class="side-menu__icon fe fe-align-center"></i>الاعدادات العامة</a></li>

                    </ul>
                </li>

                {{-- <li>
                    <a class="side-menu__item" href="{{route('setting-payament.index')}}"><i
                            class="side-menu__icon side-menu__icon fe fe-mail"></i><span
                            class="side-menu__label">Payment Method</span></a>
                </li> --}}


                {{-- <li>
                    <a class="side-menu__item" href="{{route('setting-email.index')}}"><i
                            class="side-menu__icon side-menu__icon fe fe-mail"></i><span
                            class="side-menu__label">Setting Emails</span></a>
                </li> --}}


                {{-- <li>
                    <a class="side-menu__item" href="users.php"><i
                            class="side-menu__icon side-menu__icon mdi mdi-account-settings-variant"></i><span
                            class="side-menu__label">UserController</span></a>
                </li> --}}

            </ul>
        </aside>
        <!--/APP-SIDEBAR-->
        <!-- /Sidebar -->

        <!-- Top Header Mobile -->
        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="container-fluid">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                    <!-- sidebar-toggle-->
                    <a class="header-brand" href="index.html">
                        <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="/assets/images/brand/logo-3.png"
                             class="header-brand-img desktop-logo mobile-light" alt="logo">
                    </a>
                    <div class="d-flex order-lg-2 ml-auto header-right-icons">
                        <button class="navbar-toggler navresponsive-toggler d-md-none" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                        </button>


                    </div>
                </div>
            </div>
        </div>
        <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 ml-auto">
                    <div class="dropdown d-sm-flex">
                        <a href="#" class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-search"></i>
                        </a>
                        <div class="dropdown-menu header-search dropdown-menu-left">
                            <div class="input-group w-100 p-2">
                                <input type="text" class="form-control " placeholder="Search....">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary ">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- SEARCH -->
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                            <i class="fe fe-maximize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                </div>
            </div>
        </div>
        <!-- /Mobile Header -->
        <!-- /Top Header Mobile  -->

        <div class="app-content">

            <div class="side-app">

                <div class="page-header">
                    <div>
                        <h1 class="page-title">لوحة التحكم</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active" aria-current="page">الصفحة الرئيسية</li>
                        </ol>
                    </div>
                    <div class="d-flex  ml-auto header-right-icons header-search-icon">
                        <div class="dropdown d-sm-flex">
                            <a href="#" class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-left">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control " placeholder="Search....">
                                    <div class="input-group-append ">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SEARCH -->
                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link nav-link-bg">
                                <i class="fe fe-maximize fullscreen-button"></i>
                            </a>
                        </div><!-- FULL-SCREEN -->
                        {{--                            <div class="dropdown profile-1">--}}
                        {{--                                <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">--}}
                        {{--										<span>--}}
                        {{--											<img src="../assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">--}}
                        {{--										</span>--}}
                        {{--                                </a>--}}
                        {{--                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">--}}
                        {{--                                    <div class="drop-heading">--}}
                        {{--                                        <div class="text-center">--}}
                        {{--                                            <h5 class="text-dark mb-0">Elizabeth Dyer</h5>--}}
                        {{--                                            <small class="text-muted">Administrator</small>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="dropdown-divider m-0"></div>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile--}}
                        {{--                                    </a>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings--}}
                        {{--                                    </a>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <span class="float-right"></span>--}}
                        {{--                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox--}}
                        {{--                                    </a>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message--}}
                        {{--                                    </a>--}}
                        {{--                                    <div class="dropdown-divider"></div>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?--}}
                        {{--                                    </a>--}}
                        {{--                                    <a class="dropdown-item" href="login.html">--}}
                        {{--                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="dropdown d-md-flex header-settings">--}}
                        {{--                                <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">--}}
                        {{--                                    <i class="fe fe-align-right"></i>--}}
                        {{--                                </a>--}}
                        {{--                            </div><!-- SIDE-MENU -->--}}
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                @yield('content')

                <!-- Copyright -->
                <!-- FOOTER -->
                <footer class="footer">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-md-12 col-sm-12 text-center ">
                                <p class="copy-p">Copyright © 2023 <a href="#">Mediabird</a>. Designed by <a
                                        href="#"> mediabirdco.com </a> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- FOOTER CLOSED -->
                <!-- /Copyright -->
            </div>
            <!-- Footer -->
            <!-- BACK-TO-TOP -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

            <!-- JQUERY JS -->
            <script src="{{asset('/assets/js/jquery-3.4.1.min.js')}}"></script>

            <!-- BOOTSTRAP JS -->
            <script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>

            <!-- SPARKLINE JS-->
            <script src="{{asset('/assets/js/jquery.sparkline.min.js')}}"></script>

            <!-- CHART-CIRCLE JS-->
            <script src="{{asset('/assets/js/circle-progress.min.js')}}"></script>

            <!-- RATING STAR JS-->
            <script src="{{asset('/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

            <!-- C3 CHART JS -->
            <script src="{{asset('/assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
            <script src="{{asset('/assets/plugins/charts-c3/c3-chart.js')}}"></script>

            <!-- INPUT MASK JS-->
            <script src="{{asset('/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

            <!-- SIDEBAR JS -->
            <script src="{{asset('/assets/plugins/sidebar/sidebar.js')}}"></script>

            <!-- SIDE-MENU JS -->
            <script src="{{asset('/assets/plugins/sidemenu/sidemenu.js')}}"></script>

            <!-- CUSTOM SCROLL BAR JS-->
            <script src="{{asset('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

            <!-- CUSTOM JS-->
            <script src="{{asset('/assets/js/custom.js')}}"></script>

            <!-- DATA TABLE JS-->
            <script src="{{asset('/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{asset('/assets/plugins/datatable/datatable.js')}}"></script>
            <script src="{{asset('/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

            <!-- FORMEDITOR JS -->
            <script src="{{asset('assets/js/summernote.js')}}"></script>
            <script src="{{asset('assets/js/summernote-ar-AR.js')}}"></script>
            <script src="{{asset('assets/js/formeditor.js')}}"></script>

            <!-- FILE UPLOADES JS -->
            <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
            <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

            <!-- SELECT2 JS -->
            <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

            <!-- BOOTSTRAP-DATERANGEPICKER JS -->
            <script src="{{asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
            <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

            <!-- WYSIWYG Editor JS -->
            <script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
            <script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

            <!-- FORMELEMENTS JS -->
            <script src="{{asset('assets/js/form-elements.js')}}"></script>
            <!-- SUMMERNOTE JS -->
            <script src="{{asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

            <!-- MULTI SELECT JS-->
            <script src="{{asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
            <script src="{{asset('assets/plugins/multipleselect/multi-select.js')}}"></script>

            <!-- DATEPICKER JS -->
            <script src="{{asset('assets/plugins/date-picker/spectrum.js')}}"></script>
            <script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
            <script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

            <!-- TIMEPICKER JS -->
            <script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
            <script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

            <!-- GALLERY JS -->
            <script src="{{asset('assets/plugins/gallery/picturefill.js')}}"></script>
            <script src="{{asset('assets/plugins/gallery/lightgallery.js')}}"></script>
            <script src="/assets/plugins/gallery/lightgallery-1.js"></script>
            <script src="/assets/plugins/gallery/lg-pager.js"></script>
            <script src="/assets/plugins/gallery/lg-autoplay.js"></script>
            <script src="/assets/plugins/gallery/lg-fullscreen.js"></script>
            <script src="/assets/plugins/gallery/lg-zoom.js"></script>
            <script src="/assets/plugins/gallery/lg-hash.js"></script>
            <script src="/assets/plugins/gallery/lg-share.js"></script>

            <script src="/assets/js/form-elements.js"></script>

            <script src="/assets/js/custom.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            @if(session('result') == 'success')
                <script>
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: "{{session('message')}}"
                    })

                    {{--Swal.fire({--}}
                    {{--    icon: 'success',--}}
                    {{--    title: 'Success',--}}
                    {{--    text: "{{session('message')}}",--}}
                    {{--})--}}
                </script>
            @endif

            @if($errors->any())

                @error('links.*')
                <script>
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        @error('links.*')
                        title:  "يجب ان يكون الرابط صالح",
                        @enderror
                    })



                </script>
            @enderror
@endif

</body>

</html><!-- /Footer -->
