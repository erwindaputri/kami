<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vegetables-Blogs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

@include('Client.template.head')
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Vegetables - Blogs</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/blog/blog11.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{url('beranda')}}">Beranda</a></li>
          <li><a href="{{url('postingan')}}">Postingan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <body>
  <div class="container">
  
    <h3 class="center alt">“Oracle Blogger Template” Documentation by “Soratemplates” v1.0</h3>
    
    <hr>
    
    <h1 class="center">
        <center><img src="http://3.bp.blogspot.com/-ODieH5wVT_Q/VnA_hLWgmUI/AAAAAAAAHXg/HZmQH8Hd2mQ/s1600-r/logo_large.png"></center></h1>
    
    
    <div class="borderTop">
      <div class="span-6 colborder info prepend-1">
        <p class="prepend-top">
          <strong>
<p><img src="{{url('public')}}/client/assets/img/about.jpg" width="1025" height="526"></p>
        </p>
      </div><!-- end div .span-6 -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@include('Client.template.footer')
@include('Client.template.js')

</body>

</html>