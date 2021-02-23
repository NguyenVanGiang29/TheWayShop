@extends('pages.index')
@section('content')
 <!-- Start Cart  -->
 <div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <div>  
                    <button style="background: rgb(209, 62, 62)"><a href="{{route('shop')}}">Tiếp tục mua hàng</a></button>
                </div>
            </div>
            <br>
            <br>
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prd_cart as $prd_cart)
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="images/{{$prd_cart->image_prd}}" alt="" />
                                    </a>
                                </td>
                                
                                    <td class="name-pr">
                                        <a href="product/{{$prd_cart->prd_id}}">
                                            {{$prd_cart->name_prd}}
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{$prd_cart->price_prd}}.000 đồng</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" value="{{$prd_cart->quality}}"></td>
                                    <td class="total-pr">
                                        <p>$ {{$prd_cart->price_prd*$prd_cart->quality}}.000 đồng</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="home/deletecart/{{ $prd_cart->id }}">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Nhập code giảm giá..." aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Giảm giá</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-sm-6">
                <div class="update-box">  
                    <input value="Tiếp tục mua hàng" type="submit">
                </div>
            </div> --}}
        </div>
    </form>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Tổng đơn hàng</h3>
                    <div class="d-flex">
                        <h4>Tổng tiền</h4>
                        <div class="ml-auto font-weight-bold"> $ 130 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Giảm giá</h4>
                        <div class="ml-auto font-weight-bold"> $ 0</div>
                    </div>
                    <hr class="my-1">

                    <div class="d-flex">
                        <h4>Tiền ship</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Thành tiền</h5>
                        <div class="ml-auto h5"> $ 388 </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Thanh toán</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->

@endsection