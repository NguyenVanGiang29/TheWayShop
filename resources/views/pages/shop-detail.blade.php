@extends('pages.index')
@section('content')
    

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Chi tiết sản phẩm</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Sản phẩm chi tiết </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                       <img class="d-block w-100" src="images/{{ $prd->image }}" alt="First slide">
                        {{-- <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-02.jpg" alt="Second slide"> </div>
                        <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-03.jpg" alt="Third slide"> </div> --}}
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span> 
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
                    <i class="fa fa-angle-right" aria-hidden="true"></i> 
                    <span class="sr-only">Next</span> 
                    </a>
                    {{-- <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                            <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                        </li>
                        <li data-target="#carousel-example-1" data-slide-to="1">
                            <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                        </li>
                        <li data-target="#carousel-example-1" data-slide-to="2">
                            <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                        </li>
                    </ol> --}}
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <Form method="POST" action="home/addcart/{{ $prd->id }}">
                    @csrf
                <div class="single-product-details">
                    <h2>{{$prd->name_prd}}</h2>
                    <h5>{{$prd->price}}.000 đồng</h5>
                    {{-- <del>$ 60.00</del> --}}
                    <p class="available-stock"><span> More than 20 available / <a href="#">8 sold </a></span>
                        <p>
                            <h4>Giới thiệu sản phẩm</h4>
                            <p>{{$prd->description}}</p>
                            <ul>
                                {{-- <li>
                                    <div class="form-group size-st">
                                        <label class="size-label">Kích cỡ</label>
                                        <select id="basic" class="selectpicker show-tick form-control">
                                <option value="0">Size</option>
                                <option value="0">S</option>
                                <option value="1">M</option>
                                <option value="1">L</option>
                                <option value="1">XL</option>
                                <option value="1">XXL</option>
                                <option value="1">3XL</option>
                                <option value="1">4XL</option>
                            </select>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Số lượng</label>
                                        <input class="form-control" value="1" min="0" max="20" type="number" name="quality">
                                    </div>
                                </li>
                            </ul>

                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <button type="submit" class="btn hvr-hover" >Thêm vào giỏ</button>
                                </div>
                            </div>

                            <div class="add-to-btn">
                                <div class="add-comp">
                                    <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Yêu thích</a>
                                    
                                </div>
                                <div class="share-bar">
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                </div>
                </Form>
            </div>
        </div>

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
            @foreach ($prd_hot as $prd_hots)
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                
                <div class="products-single fix">
                    <div class="box-img-hover">
                    
                        <div class="type-lb">
                            <p class="sale">Hot</p>
                        </div>
                        <img src="images/{{ $prd_hots->image }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{ route('product.show', $prd_hots->id) }}" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"> </i></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            @guest
                                <a class="cart" href="#modalLogin" data-toggle="modal">Thêm vào giỏ</a>
                            @endguest
                            @auth
                                <a class="cart" href="home/addcart/{{ $prd_hots->id}}">Thêm vào giỏ</a>
                            @endauth
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>{{$prd_hots->name_prd}}</h4>
                        <h5>{{$prd_hots->price}}.000 đồng</h5>
                    </div>
                    
                </div>
               
            </div>
            @endforeach
           
           
            
        </div>
    </div>
</div>
<!-- End Products  -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
@endsection