<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{asset('admin/uploads/favicon.png')}}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('admin.layout.style_header')
    @include('admin.layout.js_header')

    
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
       
        @include('admin.layout.nav')


        
        @include('admin.layout.sidebar')
        

        @yield('home')

    </div>
</div>

@include('admin.layout.js_footer')

</body>
</html>