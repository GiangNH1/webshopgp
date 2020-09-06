@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm mới nhất</h2>
                        @foreach($all_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <form action="{{URL::to('/save-cart')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="productinfo text-center">
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                        </a>
                                            <input name="qty" type="hidden" min="1"  value="1" />
                                            <input name="productid_hidden" type="hidden"  value="{{$product->product_id}}" />
                                            <button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm giỏ hàng
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
        <!--/recommended_items-->
@endsection