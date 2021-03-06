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
            @foreach ($prd_hot as $prd_hots)
            <div class="col-lg-3 col-md-6 special-grid top-featured" style="height: 450px">
                
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
                                <a class="cart" href="home/cart">Thêm vào giỏ</a>
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
            @foreach($prd_sale as $prd_sales)
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/{{ $prd_sales->image }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{ route('product.show', $prd_sales->id) }}" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            @guest
                                <a class="cart" href="#modalLogin" data-toggle="modal">Thêm vào giỏ</a>
                            @endguest
                            @auth
                            <a class="cart" href="home/cart">Thêm vào giỏ</a>
                            @endauth
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>{{$prd_sales->name_prd}}</h4>
                        <h5>{{$prd_sales->price}}.000 đồng</h5>
                    </div>
                </div>
            
            </div>
        @endforeach
           
        </div>
    </div>
</div>
<!-- End Product Selling -->



@endsection