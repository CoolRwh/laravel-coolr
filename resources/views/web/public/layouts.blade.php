<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telphone=no,email=no">

    <link rel="icon" type="image/x-icon" href="#">
    <title> @yield('title') </title>

    <link rel='stylesheet' id='fontawe-css'  href='{{asset('static/web/css/font-awesome.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='kratos-css'  href='{{asset('static/web/css/kratos.min.css')}}' type='text/css' media='all' />
{{--    <link rel='stylesheet' id='kratos-css'  href='{{asset('static/web/css/lo.css')}}' type='text/css' media='all' />--}}
    <style>#offcanvas-menu{background:rgba(42,42,42,.9)}
        .affix{top:61px}
        .kratos-cover.kratos-cover_2{   background-image: url({{@asset('static/web/images/wallhaven-mp7dkm.jpg')}})}
        @media(max-width:768px){
            .kratos-cover.kratos-cover_2
            {  background-image: url({{@asset('static/web/images/wallhaven-mp7dkm.jpg')}})}}
    </style>
</head>
<body>
<div id="kratos-wrapper">
    <div id="kratos-page">
        {{--header头--}}
        @include('web.public.header')
        <div id="kratos-blog-post" style="background:#f5f5f5">
            <div id="container" class="container">
                <div class="row">
                    <section id="main" class="col-md-8">
                        {{--类容--}}
                        @yield('content')
                    </section>
                    <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                        {{--右侧菜单--}}
                        @include('web.public.menu')
                    </aside>
                </div>
            </div>
        </div>
        {{--底部--}}
        @include('web.public.footer')
    </div>
</div>

<script type='text/javascript' src='{{@asset('static/web/js/jquery.min.js')}}'></script>
<script type='text/javascript' src='{{@asset('static/web/js/kratos.js')}}'></script>
{{--<script type='text/javascript' src='{{@asset('static/web/js/theme.min.js')}}'></script>--}}

<script type='text/javascript'>
    /* <![CDATA[ */
    var xb = {
        //"thome": "https:\/\/moedog.org\/wp-content\/themes\/Kratos-alpha",
        "ctime": "10\/10\/2019 10:10:00",
        // "copy": "",
        // "ajax_url": "https:\/\/moedog.org\/wp-admin\/admin-ajax.php",
        // "order": "asc",
        // "owo": "https:\/\/cdn.jsdelivr.net\/gh\/xb2016\/kratos-pjax@0.4.1",
        // "site_sh": "61"
    };
    /* ]]> */
</script>


</body>
</html>