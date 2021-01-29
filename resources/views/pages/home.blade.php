@extends('pages.index')
@section('content')

@include('pages.slider')

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Sản phẩm nổi bật</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button>Nổi bật</button>
                        <button>Giảm giá</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="home/shop-detail" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"> </i></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                               
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                               
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-clipboard-list"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->
<!-- Product Selling -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Sản phẩm giảm giá</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button>Nổi bật</button>
                        <button>Giảm giá</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                               
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Selling -->

@endsection