@yield('title')
@yield('seo')
<link rel="stylesheet" href="/asset/css/bootstrap.min.css">
<link rel="stylesheet" href="/asset/css/style.css">
<link rel="stylesheet" href="/asset/css/smartmenus_bootstrap.css">
<link rel="stylesheet" href="/asset/css/swiper.min.css">
<link rel="stylesheet" href="/asset/css/custom.css">
<link rel="stylesheet" href="/asset/css/responsive.css">
<link rel="stylesheet" href="/asset/css/hamburgers.css">
<style>
    .content-detail img {
        max-width: 800px;
    }
</style>
<style type="text/css">
    .ct-hotnews-block {
        background: rgb(255, 232, 232);
        padding: 10px;
        border: 1px dotted red;
        text-align: center;
        font-size: 15px;
    }

    span.ct-hotnews-title {
        color: red;
        font-weight: bold;
        text-decoration: underline;
    }

    span.ct-hotnews-text {
        color: #1679e4;
        font-size: 14px;
    }

    @media(max-width: 991px) {
        .ct-hotnews-block {
            margin-top: 10px;
        }
    }

    @media(max-width: 480px) {
        .ct-hotnews-block {
            padding: 10px 5px;
        }

        span.ct-hotnews-title {
            display: block;
            width: 100%;
            font-size: 14px;
        }
    }
</style>
@yield('css')