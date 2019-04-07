<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/layout/front-end')}}/">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TNT- @yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/logo/T.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{asset('/')}}"><img src="img/logo/logotnt.png" alt="">
                </a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            @foreach ($loaigiay as $loai)
                            <li><a href="{{asset('loaigiay/'.$loai->loai_id.'/'.$loai->loai_slug.'.html')}}">{{$loai->loai_name}}</a>
                               
                            </li>
                             @endforeach
                        </ul>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
            <form action="{{asset('search/')}}" method="get">
                    <div>
                        <div>
                        <input type="text" class="form-control" name="result" placeholder="Search">
                    </div>
                    <div>
                        <button type="submit"></button>
                    </div>
                </div>
            </form>
                </div>
                <!--Search Area -->
                <div>

                    <a href="{{asset('dangnhapkh')}}"><img src="" alt="">Đăng nhập</a>

                     <a href="{{asset('dangky')}}"> Đăng ký</a>

                    <a href="{{asset('cart/')}}"><img src="img/core-img/cart.png" alt="">Giỏ hàng</a>

                </div>
                

            </div>
        </div>
    </header>

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

              
            </div>
        </div>
    </div>
      <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/logo/15.gif);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                </div>
                  <div class="single-brands-logo">
                 <img src="img/logo/tho.gif" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- ##### CTA Area End ##### -->
     <section class="new_arrivals_area section-padding-80 clearfix">
		@yield('main')
    </section>
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/zara.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/nike.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/bitit.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/vans.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/gucci.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/logo/puma.png" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">

                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/logo/logotnt.png" alt=""></a>
                        </div>

                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a>Mọi thắc mắc xin hãy liên hệ với chúng tôi để được giải quyết một cách nhanh và sớm nhất. Chúng tôi luôn đặc quyền lợi của khách hàng lên hàng đầu. </a></li>
                              <li><a><img src="img/logo/tk.gif" alt="" width="200px" height="200px"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Địa chỉ : 180 Cao Lỗ Phường  Quận 8</h6>
                        </div>
                        <div class="footer_heading mb-30">
                            <h6>Số điện thoại : +0912345678</h6>
                        </div>
                         <div class="footer_heading mb-30">
                            <h3>Email : tntshopgiay@gmail.com</h3>
                        </div>
                       
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Shop Giày TNT &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> Được sự hỗ trợ thiết kế bởi <a href="https://colorlib.com" target="_blank">TNT</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>