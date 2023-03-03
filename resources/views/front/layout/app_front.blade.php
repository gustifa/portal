<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <meta name="description" content="" />
        <title>Job Hunt</title>

        <link rel="icon" type="image/png" href="{{asset('front/uploads/favicon.png')}}" />

        <!-- All CSS -->
        @include('front.layout.style_header')

        @include('front.layout.js_header')

        
    </head>
    <body>
        
        @include('front.layout.nav_top')

        @include('front.layout.nav')

        @include('front.layout.slider')
        
        @include('front.layout.category')

        @include('front.layout.choose')

        @include('front.layout.job')

        @include('front.layout.testimonial')

        @include('front.layout.blog')

        @include('front.layout.footer')

        @include('front.layout.footer_botton')

        @include('front.layout.scroll_top')

        @include('front.layout.js_footer')
    </body>
</html>
