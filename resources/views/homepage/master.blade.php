<!DOCTYPE>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    @include('homepage.partrials.header')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        .header_wp {
            padding: 13px 20px 13px 66px !important;
            background: #C22B1A url(https://shop2banh.vn/style/frontend/theme/default/images/sound.png) 10px 0px no-repeat !important;
        }

        .header_wp {
            text-transform: uppercase;
            text-align: center;
            padding-left: 20px !important;
            background-image: none !important;
        }

        .ct-high-line {
            background-color: #f1eeee;
            text-align: center;
            margin-top: 15px;
            font-size: 16px;
            padding: 10px 10px;
        }

        .close-black {
            background: #fff url(/images/close-black.png) center center no-repeat !important;
            top: 0;
            right: 0;
            width: 28px;
            height: 28px;
        }

    </style>
    <style type="text/css">
        body {
            position: relative;
        }

        div#ct-left-viewed-prod {
            position: fixed;
            top: 50%;
            right: 0;
            margin-top: -71px;
            z-index: 9;
        }

        div#ct-left-viewed-prod a {
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div#ct-left-viewed-prod a:hover {
            text-decoration: none;
        }

        div#ct-left-viewed-prod a span {
            text-align: center;
        }

        .ct-m-close {
            position: absolute;
            color: #fff;
            bottom: -5px;
            left: -5px;
            width: 15px;
            height: 15px;
            background-color: #000;
            cursor: pointer;
            transform: rotate(-90deg);
            border-radius: 50%;
            background-image: url(/images/close-button-w.png);
            background-size: 7px;
            background-repeat: no-repeat;
            background-position: center center;
        }

        div#ct-left-viewed-prod a {
            width: 31px;
            height: 142px;
            background: url(/images/da-xem-bg.jpg) center center no-repeat;
            display: block;
        }

    </style>

</head>

<body>
    @include('homepage.partrials.menu_header')
    @yield('menu_header')
    @yield('content')

    @include('homepage.partrials.footer')
    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.lightbox_me.js"></script>
    <script src="/asset/js/scrolltofixed.js"></script>
    <script src="/asset/js/index.js"></script>
    <script type="text/javascript" src="/asset/js/smartmenus.js"></script>
    <script type="text/javascript" src="/asset/js/smartmenus_bootstrap.js"></script>
    <script type="text/javascript" src="/asset/js/swiper.min.js"></script>
    <script type="text/javascript" src="/asset/js/lib.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-container', {
                autoplay: true
                , pagination: {
                    el: '.swiper-pagination'
                , }
                , loop: true
            , });
            $(".ct-navbar-search-full-width #search").focusin(function(e) {
                e.preventDefault();
                e.stopPropagation();
                window.scrollTo(0, 0);
                $('.ct-back-btn').attr('onclick', '');
                $('.ct-back-btn i').toggleClass('fa-chevron-left');
                $('.ct-back-btn i').toggleClass('fa-times');
                $(".top-search-key").addClass('top-search-key-show');
                $(".hamburger").addClass('is-active');
                $(".hamburger").addClass('is-active');
                $(".hamburger").attr('data-toggle', '');
                $('body').css({
                    'height': '100vh'
                    , 'overflow': 'hidden'
                    , 'position': 'fixed'
                });
                $('#navbar').removeClass('in');
                $(document).on('touchmove', function(tm) {
                    tm.preventDefault();
                });
            });
            $(".ct-back-btn").click(function() {
                if ($('.ct-back-btn i').hasClass('fa-times')) {
                    $('.ct-back-btn i').removeClass('fa-times');
                    $('.ct-back-btn i').addClass('fa-chevron-left');
                    $('.ct-back-btn').attr('onclick', 'goBack()');
                }
                $('.ct-navbar-search-full-width').hide();
            });
            $(document).click(function(e) {
                if ($('.top-search-key').hasClass('top-search-key-show')) {
                    if ($(e.target).closest(".top-search-key-show").length === 0 && e.target.id != 'search') {
                        $('html, body').animate({
                            scrollTop: $(".main-content").offset().top
                        }, 1);
                        $(".hamburger").removeClass('is-active');
                        $(".hamburger").attr('data-toggle', 'collapse');
                        $('body').css({
                            'height': 'auto'
                            , 'overflow': 'unset'
                            , 'position': 'relative'
                        });
                        $(".top-search-key").removeClass('top-search-key-show');
                        $(document).on('touchmove', function(tm) {
                            return true;
                        });
                    } else {}
                } else {}
            });
            $(".hamburger").click(function() {
                if ($('.top-search-key').hasClass('top-search-key-show')) {} else {
                    $(this).toggleClass('is-active');
                    $('.ct-navbar-active .ct-navbar-search-full-width').toggleClass('ct-navbar-search-at-top');
                }
            });
            $(".ct-search-mini").click(function() {
                $('.ct-search-mini i').toggleClass('fa-times');
                $('.ct-search-mini i').toggleClass('fa-search');
                $('body').toggleClass('not-home-show-search');
            });
            $(window).on('scroll', function() {
                var scrollTop = $(this).scrollTop();
                if (scrollTop <= 0) {
                    $('#ct-mobile-navbar').removeClass('ct-navbar-active');
                } else {
                    $('#ct-mobile-navbar').addClass('ct-navbar-active');
                }
            });
            var $mainMenu = $('.ct-menu-parent').on('click', 'span.sub-arrow', function(e) {
                var obj = $mainMenu.data('smartmenus');
                if (obj.isCollapsible()) {
                    var $item = $(this).parent()
                        , $sub = $item.parent().dataSM('sub')
                        , subIsVisible = $sub.dataSM('shown-before') && $sub.is(':visible');
                    $sub.dataSM('arrowClicked', true);
                    obj.itemActivate($item);
                    if (subIsVisible) {
                        obj.menuHide($sub);
                    }
                    e.stopPropagation();
                    e.preventDefault();
                }
            }).bind({
                'beforeshow.smapi': function(e, menu) {
                    var obj = $mainMenu.data('smartmenus');
                    if (obj.isCollapsible()) {
                        var $menu = $(menu);
                        if (!$menu.dataSM('arrowClicked')) {
                            return false;
                        }
                        $menu.removeDataSM('arrowClicked');
                    }
                }
                , 'show.smapi': function(e, menu) {}
                , 'hide.smapi': function(e, menu) {}
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ct-stores').on('touchstart', function() {
                if ($('#ct-list-store').is(":visible")) {
                    $('.ct-stores i').removeClass('ct-rotate90');
                    $('#ct-list-store').hide();
                    $('html, body').css({
                        overflow: 'auto'
                        , height: 'auto'
                    });
                } else {
                    $('.ct-stores i').addClass('ct-rotate90');
                    $('#ct-list-store').show();
                    $('html, body').css({
                        overflow: 'hidden'
                        , height: '100%'
                    });
                }
            });
            $('#ct-list-store-close').on('touchstart', function(e) {
                e.preventDefault();
                $('.ct-stores i').removeClass('ct-rotate90');
                $('#ct-list-store').hide();
                $('html, body').css({
                    overflow: 'auto'
                    , height: 'auto'
                });
            });
        });

    </script>
    <script type="text/javascript">
        $('.ct-m-close').on('click', function() {
            $('#ct-left-viewed-prod').hide();
        });
        $('.ct-scoll-fixed-block').scrollToFixed({
            marginTop: 35
            , zIndex: 998
            , minWidth: 1024
            , limit: function() {
                var limit = $('footer').offset().top - $('.ct-scoll-fixed-block').outerHeight(true);
                return limit;
            }
            , removeOffsets: true
        , });

    </script>

    @yield('js')
</body>

</html>
