<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Award</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="facebook-domain-verification" content="ppkyrv4ppf001c5ppmmjblvah7wfry" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('front_asset/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('front_asset/css/style.css')}}">

    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('front_asset/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('front_asset/images/fevicon.png" type="image/gif')}}" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('front_asset/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<style>
    .rwid {
      position: fixed; 
      z-index: 999;
      right: 0;
      top: 47%;
      display: inline-block;
      margin-right:20px;
      font-size: 50px;
  }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.main-menu ul>li a {
    padding: 7px 10px 7px 10px;
    line-height: 20px;
    font-size: 16px;
    display: block;
    font-weight: 500;
    color: #ebd8d8;
    text-transform: uppercase;
    margin: 0px 15px;
}


body {
    overflow-x: hidden;
    font-family: "Montserrat", sans-serif !important;
}
a{text-decoration:none!important;
}

h3, h4, h5 {
    margin-bottom: 0px !important;
}

.w-95 {
    width: 95%;
}

p, p > span, p > span > span, p > span > span > span, p > strong > span, p > div {
    color: #09076e !important;
}

div, p, ol li, ul li {
    color: #09076e !important;
}

table {
    color: #09076e !important;
    border-color: #09076e !important;
}

.tooltip-inner {
    color: #fff !important;
}

.container {
    max-width: 85% !important;
}

.container-1350px {
    max-width: 90% !important;
}


.Main-p {
    padding: 20px 0px;
}

.Main-bg {
    background-color: #09076e;
}

.Main-Gradiunt {
    background: rgb(19,9,109);
    background: linear-gradient(90deg, rgba(19,9,109,1) 0%, rgba(101,25,101,1) 100%);
}

.color-main {
    color: #09076e;
}

.btn-primary {
    background-color: #09076e !important;
    border-color: #09076e !important;
}

.bg-OrangeRed {
    background-color: rgb(225 51 90);
}



.font-80 {
    font-size: 80px;
}

.bg-Orange {
    background-color: #FF5139;
}

.bg-purple4 {
    background: #511567 !important;
}

.text-green {
    color: #10b745 !important;
}

.text-red {
    color: #e3213c !important;
}

.text-purple {
    color: #511567 !important;
}


/* TOP HEADER CSS*/

.TopHeader {
    color: #fff !important;
    background: #fff;
}

.TopHeaderText {
    font-size: 11px;
    font-weight: 700;
    color: #09076e;
}

.G20-Logo {
    width: 94px;
    margin-right: 10px;
}
/*NAVBAR CSS*/
.navbar-nav > li > a {
    color: #fff !important;
    display: inline-block;
    text-decoration: none;
    outline: 0 !important;
    line-height: 1.42857143 !important;
    padding: 15px 10px !important;
    font-weight: 600;
    font-size: 15px;
}

.navbar-nav > .nav-item > a:hover {
    background-color: #4745c9;
    border-radius: 7px !important;
}

#logRgBtn {
    color: #09076e !important;
    border-radius: 6px !important;
    background-color: #ffca0d !important;
}

.navbar-light .navbar-toggler {
    color: rgba(255,255,255,.7) !important;
    border-color: rgba(255,255,255,.9) !important;
}

.navbar {
    padding: 4px 1px 0px !important;
}
/*CARAUOSLE CSS*/



.width-23 {
    width: 23px;
}

.font-14 {
    font-size: 14px !important;
}

.carousel-caption > p {
    color: #fff !important;
}
/*ONGOING NOMINATION CSSS*/
.font-38 {
    font-size: 38px !important;
}

.font-12 {
    font-size: 12px !important;
}

.font-18 {
    font-size: 18px !important;
}

.font-300 {
    font-weight: 300 !important;
}

.pointer {
    cursor: pointer;
}

.shadow-new {
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
}


.help_desk {
    cursor: pointer;
    transition-delay: 0.6s;
    width: 35%;
    animation: mover 2s linear infinite alternate;
    margin-left: -11px;
    margin-bottom: 7px;
}

.width-15 {
    width: 15%;
}

@keyframes mover {
    0% {
        transform: translateY(2px)
    }

    25% {
        transform: translateY(-2px)
    }

    75% {
        transform: translateY(2px)
    }

    100% {
        transform: translateY(2px)
    }
}


.ViewAllBtn {
    background-color: #e4e3ee;
    color: #09076e !important;
    border-radius: 20px;
    padding: 12px 23px;
    font-size: 17px;
    border: 1px solid;
    transition: all 0.3s ease 0s;
    text-decoration: none;
    font-weight: 700;
    width:auto;
}

    .ViewAllBtn:hover {
        box-shadow: 0 19px 38px rgb(0 0 0 / 30%), 0 15px 12px rgb(0 0 0 / 22%);
        transform: translateY(-7px);
        text-decoration: none;
    }


/*NOMINATIONS FOR UPCOMING AWARDS*/

/*SLIDER CSS*/


.CongText {
    font-family: 'Mr Dafoe', cursive;
    font-size: 3rem;
    color: #d0d0d0;
}

.bg-photo {
    background-color: #e8e8e8;
}

.w-25 {
    width: 25% !important;
}

.w-70 {
    width: 70%;
}

.h-5 {
    height: 5px;
}

.m-Award {
    margin-left: 90px;
    margin-top: -17px;
}

/*footer CSSS*/
.Footer {
    color: #fff !important;
    background-image: url(../../Content/images/FooterBG.png);
    background-size: cover;
    padding: 60px 0 20px 0;
}

.nav-link-footer {
    transition: .3s;
    color: #fff;
    font-weight: lighter;
}

    .nav-link-footer:hover {
        margin-left: 10px;
        font-weight: 600;
        box-shadow: inset 0 0 0 2em #000080;
        border-color: #000080;
        color: #fff !important;
    }


/*    AWARDPEDIA PAGE CSS */
.modal-dialog-AD {
    max-width: 750px;
}

    .modal-dialog-AD .modal-content {
        box-shadow: 7px 6px #0055aa;
    }

.modal {
    backdrop-filter: blur(4px);
}

.lines-on-sides {
    display: table;
    white-space: nowrap;
    margin-left: auto;
    margin-right: auto;
}

    .lines-on-sides:after {
        border-left: 1em solid transparent;
    }

    .lines-on-sides:before {
        border-right: 1em solid transparent;
    }

    .lines-on-sides:after, .lines-on-sides:before {
        content: "";
        display: table-cell;
        width: 33%;
        background: linear-gradient(transparent 50%, currentColor 50%, currentColor calc(50% + 1px), transparent calc(50% + 1px));
    }

.w-115 {
    width: 115px;
}

.width-27 {
    width: 27%;
}

.form-control {
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;
    color: #090b6f !important;
}

    .form-control::placeholder {
        color: #090b6f !important;
    }

.NAimg {
    width: 10%;
}


.col-lg-3 {
    max-width: 22% !important;
}



.w-25 {
    width: 25% !important;
}


/*    AWARDLIBRARY PAGE CSS */
.Top-N80 {
    margin-top: -80px;
}

.Items-Center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.width-10 {
    width: 10%;
}

.ADBtn {
    background-color: #77559B;
    border: none;
    color: #fff;
    padding: 5px 10px;
    border-radius: 7px;
}


/*LOGIN CSS*/
.backLoging {
    background-image: url(../../Content/images/login-org.jpg);
    background-size: cover;
    background-position: center;
}

.LogGroup {
    border: 1px solid #0050a1 !important;
    width: 100%;
    height: 40px;
    border-radius: 15px;
    margin-bottom: 15px;
    position: relative;
    overflow: hidden;
}

.input-group-text {
    background: #004c99 !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
    height: 100%;
}

#togglePassword {
    color: #004b97 !important;
    display: inline;
    position: absolute;
    cursor: pointer;
    top: 10px;
    right: 10px;
    cursor: pointer;
}


#login-btn {
    background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
    background-color: #005fbf;
    width: 100%;
    height: 40px;
    color: white;
    border-radius: 15px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    transition: all 0.5s ease 0s;
}

.a_Forget {
    color: #09076e !important;
    font-weight: 700;
    font-size: 14px;
}

.form-control-login {
    border: none;
    font-size: 16px;
    outline: none !important;
}

.page-content-Reg {
    padding: 5px 15px 5px 15px;
    -webkit-border-radius: 8px/7px;
    -moz-border-radius: 8px/7px;
    border-radius: 8px/7px;
    background-color: #ebebeb;
    -webkit-box-shadow: 1px 2px 5px rgb(0 0 0 / 31%);
    -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
    box-shadow: 1px 2px 5px rgb(0 0 0 / 31%);
    border: solid 1px #cbc9c9;
}

.btn_Gradient {
    background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #09076e), color-stop(1, #003f7f) );
    background-color: #09076e;
    color: #fff !important;
}

.Image {
    font-size: 38px;
    color: #090b6f;
    padding: 2px;
}

.loadingSTyle {
    display: none;
    top: 20%;
    position: absolute;
    left: 50%;
}

    .loadingSTyle img {
        width: 100px !important;
        height: 100px;
        margin: 0px;
    }

.box-3d {
    border: 1px solid #999999;
    -webkit-box-shadow: 0px 0px 20px #888888;
    box-shadow: 5px 5px 20px #888888;
}

.mt-20 {
    margin-top: 20px;
}

.border-0 {
    border: 0 !important;
}

.pointer {
    cursor: pointer !important;
}


/*USER PROFILE CSS*/
.Tble-eye {
    width: auto;
    font-size: 33px;
    margin-top: 15px;
    padding: 8px;
    color: #fff;
    border-radius: 8px;
}


.note-primary {
    border-color: #15096d !important;
}


.w-80px {
    width: 80px;
}

.min-width-120px {
    min-width: 120px;
}


.V-top {
    vertical-align: top;
    margin-top: 7px
}

/*MY NOMINATION CSS*/
div.dt-buttons {
    border: 1px solid #d4d9df;
    background-color: #fff;
}

.dt-button {
    background-color: transparent !important;
    border: none !important;
    padding: 0.3em 0.7em !important;
    background-image: none !important;
}

    .dt-button:hover {
        transform: scale(1.1);
    }

.buttons-copy {
    color: #150a6d !important;
    font-weight: 600;
}

    .buttons-copy::before {
        font-family: "Font Awesome 5 Free";
        content: "\f0c5";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
    }

.buttons-excel {
    color: green !important;
    font-weight: 600;
}

    .buttons-excel::before {
        font-family: "Font Awesome 5 Free";
        content: "\f1c3";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
    }



.buttons-colvis {
    color: #ce5310 !important;
    font-weight: 600;
    text-transform: capitalize;
}

    .buttons-colvis::before {
        font-family: "Font Awesome 5 Free";
        content: "\f0ae";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
    }


.buttons-page-length {
    color: #FFCC00 !important;
    font-weight: 600;
    text-transform: capitalize;
}

    .buttons-page-length::before {
        font-family: "Font Awesome 5 Free";
        content: "\f815";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
    }

.table > thead {
    border: 1px solid #ebe9e9 !important;
    font-weight: bold !important;
}

.table thead tr th {
    background-color: #ebe9e9 !important;
    font-size: 14px !important;
    white-space: nowrap !important;
}

/*NEW NOMINATION CSS*/
.help_desk_Under {
    width: 32%;
    cursor: pointer;
    animation: mover 2s linear infinite alternate;
}


.width-100px {
    width: 100px !important;
}

.width-80px {
    width: 80px !important;
}

.Faq_desk_Under_s {
    width: 80%;
    cursor: pointer;
    animation: mover 2s linear infinite alternate;
}

.printpage1 {
    width: 100%;
    border: solid;
    border-width: 1px;
    border-color: gray;
    border-radius: 4px;
}

.printpage2 {
    width: 100%;
    font-family: Verdana;
    font-size: 10pt;
    vertical-align: top;
    border: 1px solid #ddd;
    padding: 1%;
}

label {
    margin-bottom: 0 !important;
}

.lhabout {
    line-height: 19px;
}

.NotificationAllBtn {
    background-color: #e4e3ee;
    color: #09076e !important;
    padding: 6px 17px;
    font-size: 13px;
    border: 1px solid;
    transition: all 0.3s ease 0s;
    text-decoration: none;
    font-weight: 700;
    display: inline-block;
    margin-top: 12px;
    text-align: center;
    width: 100%
}

#ddlLanguage {
    width: 108px !important;
    border: none !important;
    margin-right: 10px;
    border-radius: 4px !important;
    font-size: 14px !important;
    color: #0c0a97 !important;
}

.bg-lightGray {
    /* background: #d3d3d3!important;*/
    background: #0e0c6c !important;
    color: #ffff !important;
}


.table thead th {
    color: #09076e !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    color: #09076e !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #09076e !important;
}
.NAimgCalender {
    width: 20%;
}
.w-70 {
    width:70%!important;
}
.text-yellow{
    color: #ffca0d;
}

.m-h-215px{
    min-height: 215px;
}
.mt-2px {
    margin-top:2px!important;
}
.mt-N20px{
    margin-top: -20px !important;
}
.vertical-top {
    vertical-align: top;
}
.text-gray {
    color: gray !important;
}
.p-15px{
    padding: 15px !important;
}
.cursor-pointer{
    cursor: pointer!important;
}
.mt-n8px {
    margin-top:-8px!important;
}
.ml-15px {
    margin-left: 15px;
}
.w-30 {
    width:30%!important;
}
.table .bl-none {
    border-left: none !important;
}
.table .bx-none {
    border-right: none !important;
    border-left: none !important;
}
.table .br-none {
    border-right: none !important;
}

.AwardCal {
    width: 8%;
    margin-right: 10px;
}
.w-6 {
    width: 6.8%;
    
}


/*@*SUGGESTION INPUT*@*/
ul {
    list-style: none;
}

.list {
    z-index: 99;
    width: 95%;
    background-color: #ffffff;
    border-radius: 0 0 5px 5px;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;
    padding: 0 5px;
    position: absolute;
    max-height: 300px;
    overflow: auto;

}




.list-items {
    padding: 10px 5px;
    border-radius: 0 0 5px 5px;
}

    .list-items:hover {
        background-color: #dddddd;
    }


/*@*SUGGESTION INPUT*@*/


.navbar-nav > li > .Nav-padding {
    padding: 15px 8px !important;
}


/*MEDIA CSS*/
.Embed-btn {
    margin: 25px 0px;
}
    .Embed-btn > a {
        background: rgb(22 10 109);
        padding: 12px 5px;
        color: #fff;
        display: block;
        border-radius: 5px;
        text-align: center;
    }

    .Embed-btn > a:hover {
        color: #fff;
        text-decoration:none;
       
    }
.Embed-media {
    overflow:hidden;
}
    .Embed-media > iframe {
        overflow: scroll;
        height: 409px;
    }
    .Embed-media > iframe {
        width: 100%;
       /* height: 409px;*/
    }


.Media-sec > iframe {
    overflow: scroll;
    height: 500px;
}

.PMPadma {
    display: flex;
    max-width: 550px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
}


.PMPadmaiframe {
    position: static;
    visibility: visible;
    width: 550px;
    height: 710px;
    display: block;
    flex-grow: 1;
}

.TwitterPadmaAwards {
    display: flex;
    max-width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
}

.TwitterPadmaAwardsiframe {
    position: static;
    visibility: visible;
    width: 598px;
    height: 9393px;
    display: block;
    flex-grow: 1;
}
.ui-widget-header {
    border: 1px solid #e1ecfd!important;
    background: #e1ecfd!important;
}
.ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
    color: #09076e!important;
    border-color: inherit!important;
}
    label {
    font-weight:700;
}

select[name="ddlrelation"] {
    font-weight: 700;
}
.w-inherit {

    white-space: inherit;
    width: 72% !important;
}

.btn-danger {
    background-color: #dc3545 !important;
    border-color: #dc3545 !important;
}
.btn-success {
    background-color: #198754 !important;
    border-color: #198754 !important;
}
.btn-info {
    background-color: #0dcaf0 !important;
    border-color: #0dcaf0 !important;
}
.text-right {
    text-align:right;
}
.text-left {
    text-align:left;
}
/*MOBILE SCREEN TO TAB SCREEN MEDIA*/
@media (min-width: 992px) {
    .col-lg-25 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
}




    @media (min-width: 767px) and (max-width:1200px) {
        body {
            overflow-x: hidden !important;
        }

        .carousel-control-prevSec {
            left: 69% !important;
        }

        .carousel-control-prevSec {
            top: 51% !important;
        }

        .carousel-itemSec {
            height: 380px !important;
        }

        .col-lg-3 {
            max-width: initial !important;
        }

        .Main-p {
            padding: 20px 15px !important;
        }

        .width-10 {
            width: 21% !important;
        }

        .carousel-indicators {
            bottom: -43px !important;
        }

        .carousel-control-next-first {
            right: -40px !important;
        }

        .carousel-control-prev-first {
            left: -40px !important;
        }

        .col-md-5 {
            -ms-flex: 0 0 45.666667% !important;
            flex: 0 0 45.666667% !important;
        }

        .Faq_desk_Under_s {
            width: 100%;
        }

        .help_desk_Under {
            width: 80% !important;
        }

        .m-3 {
            margin: 0.5rem !important;
        }

        .font-38 {
            font-size: 30px !important;
        }

        .font-18 {
            font-size: 14px !important;
        }

        .centerAwardCalImg {
            display: flex;
            flex-direction: column;
            font-size: 9px !important;
            align-items: baseline;
        }

            .centerAwardCalImg a {
                font-size: 12px !important;
            }

            .centerAwardCalImg img {
                width: 60% !important;
            }
    }

    @media (max-width: 767px) {
        .text-center {
            text-align:center!important;
        }
        .col-lg-3 {
            max-width: 90% !important;
        }

        .carousel-itemSec {
            height: auto !important;
        }

        .carousel-control-prevSec {
            top: 6% !important;
        }

        .Main-p {
            padding: 20px 15px !important;
        }

        .carousel-control-next {
            display: none;
        }

        .AboutImg {
            width: 30% !important;
        }

        .navbar-toggler {
            border: 1px solid rgba(255,255,255,.3) !important;
        }

        .font-38 {
            font-size: 30px !important;
        }

        .mx-xs-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .NAimg {
            width: 30%;
        }

        .Border-bottom-Alib {
            padding: 6px;
            border-bottom: 1px solid #dad6d6;
        }

        .width-10 {
            width: 35% !important;
        }

        .Faq_desk_Under_s {
            width: 30%;
        }

        .help_desk_Under {
            width: 30% !important;
        }

        .lhabout {
            line-height: 13px !important;
            font-size: 8px !important;
            margin-left: 0px !important;
        }

        .w-25 {
            width:100%!important;
        }
        .text-right {
            text-align: right!important;
        }
        
    }
    div, p, ol li, ul li {
        color: #fff !important;
    }
</style>
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('front_asset/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('front_asset/images/logo.png')}}" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">HOME</a> </li>
                                        <li> <a href="{{ route('admin.register')}}">Register</a> </li>
                                        <li> <a href="{{ route('admin.login')}}">Login</a> </li>
                                        
                                        <li> <a href="#footer_with_contact">CONTACT US</a> </li>
                                        
                                    
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="banner_section">
        <div class="banner-main">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('front_asset/images/banner-3.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('front_asset/images/banner-2.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('front_asset/images/banner10.png')}}" alt="Third slide">
                </div>
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- <img src="images/banner1.jpg" /> -->
            <div class="container">

                <div class="text-bg relative" style="margin-top:170px">
                    
                        
                     
                    <!-- <a href="#" class="btn" style="background-color: red;color:#fff">Register</a> -->
                </div>

            </div>
        </div>

    </section>
    <div id="screenshot" class="Albums" style="margin-top:40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage" style="margin-bottom: -30px;">
                        
                        <span>🏆 Welcome to the Website of IAMRF:
                        <span>Welcome to  IAMRF (Innovative & Advanced Multidisciplinary Research Foundation Award Company), a visionary organization dedicated to advancing multidisciplinary research and fostering innovation across various domains. At IAMRF, we strive to push the boundaries of knowledge, fuel groundbreaking discoveries, and recognize exceptional contributions that have the potential to transform industries and improve the lives of people worldwide.🏆</span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    

    <div class="container-fluid">
        <div class="row">
            
       <!--    <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption"> 
                </div>
              <a href="#">
                <img src="images/award.png" alt="award" style="margin-top: 30px;
    height: auto;
    width: 100%;
    height: 268px;"> 
              </a>
            </div>
          </div> -->
          <div class="col-md-6">
            
             <video  controls autoplay loop style="width: 100%;">
               <source src="{{asset('front_asset/images/video1.mp4')}}" type="video/mp4">
               </video>  
          </div>
         
          <div class="col-md-6">
           
                 
              <video  controls autoplay loop style="width: 100%;">
                <source src="{{asset('front_asset/images/video2.mp4')}}" type="video/mp4">
               </video>
          </div>
           
      
    </div>
    <div class="container Main-p">
            <div class="row justify-content-between">
                <div class="col-md-12">
                     
                    
                    <h2 class="color-main font-300 font-38">Nominations For Ongoing Awards </h2>
                </div>
                
            </div>
            
<div class="row" id="Grid">
    <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Institution Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
    <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Director/ Principal Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Chairman of the Institute Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Vice Chancellor Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Pro Vice Chancellor Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Dean Academic Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Dean Research Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Administrator Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Director Administration Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Controller of Examination Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Registrar Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
<div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Placement Coordinator Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
    <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Teacher Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Lifetime Achievement Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Publication Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Women Researcher Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Research Supervisor Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Women Faculty Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Entrepreneur Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Young Researcher Award (Male)</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Young Researcher Award (Female)</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
      <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Young Scientist Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
      <div class="col-lg-3 col-md-5 p-3 shadow-new m-3 bg-light">
        <h5 class="d-inline-block color-main fw-bolder pb-0 mb-0 font-18">IAMRF Best Academician Award</h5>
        {{-- <p class="my-2 font-12 color-main">Click TO Ragister</p> --}}
        <p class="color-main font-14"><span class="text-success fw-bold">Open From</span> :<b>19/06/2023</b> To <b>20/08/2023</b></p> 
    </div>
   
</div>
</div>

 
</div>
   


   
    <!-- end Albums -->
    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li style="font:#fff"><img src="{{asset('front_asset/icon/1.png')}}" alt="icon" />B. M. Institute of Engineering & Technology is an engineering college located at Raipur-Fazilpur Road, Sonepat, Haryana, Delhi NCR</li>
                                <li><img src="{{asset('front_asset/icon/2.png')}}" alt="icon" />Phone : ( +91  8851610575)</li>
                                {{-- <li><img src="{{asset('front_asset/icon/3.png')}}" alt="icon" />Email : info@iamrf.in</li> --}}
                                <li>
                                {{-- <script type="text/javascript" src="https://services.webestools.com/cpt_pages_views/74630-11-5.js"></script>
                                </li> --}}

                            </ul>
{{-- 
                            <ul class="contant_icon">
                                <li><img src="{{asset('front_asset/icon/fb.png')}}" alt="icon" /></li>
                                <li><img src="{{asset('front_asset/icon/tw.png')}}" alt="icon" /></li>
                                <li><img src="{{asset('front_asset/icon/lin(2).png')}}" alt="icon" /></li>
                                <li><img src="{{asset('front_asset/icon/instagram.png')}}" alt="icon" /></li>
                            </ul> --}}
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <div class="col-lg-9 width "> 
                        <iframe frameborder="0" width="100%" height="100%" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.933271234535!2d77.06030834562439!3d28.987009785388267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390db1cd94a1de7d%3A0xdcb85d73d60cbd13!2sB.M.%20Institute%20Of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1687083647190!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                     
                </div>
            </div>
            <div class="copyright">
                <p>© All Rights Reserved. <a href="#">IAMRF.in</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
<div class="rwid">
        <a href="tel: 8851610575" style="color:#80cd33 !important">
        <i class="fa fa-phone"> </i>
      </a>
      
          
</div>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '3066390753638077');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=3066390753638077&ev=PageView&noscript=1"
/></noscript>
    <script src="{{asset('front_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_asset/js/popper.min.js')}}"></script>
    <script src="{{asset('front_asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front_asset/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('front_asset/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('front_asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('front_asset/js/custom.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>