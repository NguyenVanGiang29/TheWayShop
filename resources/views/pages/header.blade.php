   <!-- Start Main Top -->
   <header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="home"><img src="images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="home">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/shop">Cửa hàng</a></li>
                    <li class="dropdown megamenu">
                        <a href="home/shop" class="nav-link dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                       
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="shop.html">Quần</a></li>
                                                <li><a href="shop.html">Áo</a></li>
                                                <li><a href="shop.html">Đồng hồ</a></li>
                                                <li><a href="shop.html">Giày</a></li>
                                       
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('sale') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">Giảm giá</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="home/about">Giới thiêụ</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="service.html">Dịch vụ</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="home/contact ">Liên lạc</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href=""><i class="fa fa-search"></i></a></li>
                    <li>
                        @guest
                            <a href="#modalLogin" data-toggle="modal">
                                <i class="fa fa-shopping-bag"></i>
                                    
                            </a>
                        @endguest
                        @auth
                            <a href="home/cart">
                                <i class="fa fa-shopping-bag"></i>
                                    <span class="badge">3</span>
                            </a>
                        @endauth
                        
                    </li>
                    @guest
                        <li><a class="cart" href="#modalLogin" data-toggle="modal">Đăng nhập</a></li>
                    @endguest
                    @auth
                        <li><a href="logout">Đăng xuất</a></li>
                    @endauth
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
    </nav>
    <!-- End Navigation -->
   </header>
    <!-- End Main Top -->

    <!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            value="" required>
                    </div> 
                    <div class="form-group">
                        <input type="password" class="form-control"
                            name="password" placeholder="Mật khẩu" required>
                    </div>

                    <button type="submit" class="btn btn-dark btn-block">Đăng nhập</button>
                </form>
            </div>
            <div class="modal-footer">
             <a class="text-success mr-auto" data-toggle="modal" data-dismiss="modal" href="#modalSignup">Đăng ký ngay!</a>
                <a class="text-danger ml-auto" href="#">Quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Login -->

<!-- Modal Signup -->
<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Đăng ký</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control"
                            name="name" placeholder="Tên hiển thị" required>

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"
                            name="email" placeholder="Email" required>
                                  
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"
                            name="password" placeholder="Mật khẩu" required>           
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Xác nhận mật khẩu" required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                </form>
            </div>
            <div class="modal-footer">
                Hoặc&nbsp;<a class="text-success mr-auto" data-toggle="modal" data-dismiss="modal" href="#modalLogin">Đăng nhập!</a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Signup -->

@include('pages.search')

