<div class="wrap">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="bg-wrap">
    <div class="row">
    <div class="col-md-6 d-flex align-items-center">
    <p class="mb-0 phone pl-md-2">
    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
    <a href="#" class="mr-5"><span class="fa fa-paper-plane mr-1"></span> <span class="__cf_email__" data-cfemail="661f091314030b070f0a26030b070f0a4805090b">[email&#160;protected]</span></a>
    </p>
    </div>
    <div class="col-md-6 d-flex justify-content-md-end">
    <div class="social-media">
    <p class="mb-0 d-flex">
    <a href="#" class="d-flex align-items-center justify-content-center"><i style="color:white;font-size: 20px;margin-top:3px;"
        class="fa-brands fa-facebook"></i></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><i style="color:white;font-size: 20px;margin-top:3px;"
        class="fa-brands fa-twitter"></i></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><i style="color:white;font-size: 20px;margin-top:3px;"
        class="fa-brands fa-instagram"></i></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><i style="color:white;font-size: 20px;margin-top:3px;" class="fa-brands fa-dribbble"></i></a>
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div  class="col-md-12 d-flex justify-content-md-end ">
     <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket fa-rotate-270"></i></a>
    </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="{{url('frontend/homepage')}}">Accounting</a>
<form action="#" class="searchform order-sm-start order-lg-last">
<div class="form-group d-flex">
<input type="text" class="form-control pl-3" placeholder="Search">
<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
</div>
</form>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav m-auto">
<li class="list_item nav-item {{isset($home)?'active':''}}"><a href="{{url('frontend/homepage')}}" class="nav-link">Home</a></li>
<li class="list_item nav-item {{isset($about)?'active':''}}"><a href="{{url('frontend/aboutpage')}}" class="nav-link">About</a></li>
<li class="list_item nav-item {{isset($services)?'active':''}}"><a href="{{url('frontend/servicespage')}}" class="nav-link">Services</a></li>
<li class="list_item nav-item {{isset($cases)?'active':''}}"><a href="{{url('frontend/casespage')}}" class="nav-link">Case Study</a></li>
<li class="list_item nav-item {{isset($blog)?'active':''}}"><a href="{{url('frontend/blogpage')}}" class="nav-link">Blog</a></li>
<li class="list_item nav-item {{isset($contact)?'active':''}}"><a href="{{url('frontend/contactpage')}}" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>
