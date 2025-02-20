@extends('layout.restaurant.app')

@section('page')
    <section class="shop-con w-100 float-left padding-top padding-bottom gradient">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
                <h2>Discover The Master
                    Arrivals</h2>
            </div>
            <div class="shop-box main-shop-page">

                @foreach ($products as $product)
                    <div class="shop-box-item">
                        <div class="shop-box-img">
                            <div class="sale-lable shop-label">Sale</div>
                            <figure class="mb-0">
                                <img src="{{ asset('asset_restaurant') }}/images/{{ $product->photo }}" alt="shop-img">
                            </figure>
                            <div class="shop-box-cart">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                                <div class="generic-btn">
                                    <a style="cursor: pointer" class="add_cart_btn" data-product='{{ json_encode($product) }}'>Add to Cart</a>

                                </div>
                            </div>
                        </div>
                        <div class="shop-box-details">
                            <figure>
                                <img src="{{ asset('asset_restaurant') }}/images/star-img3.png" alt="star-img">
                            </figure>
                            <h6>{{ $product->name }}</h6>
                            <div class="shop-price">
                                <span class="inline-block">${{ $product->offer_price }}.00 -
                                </span>${{ $product->offer_price }}.00
                            </div>
                        </div>
                        <!-- shop-box-item -->
                    </div>
                @endforeach






                <!-- shop-box -->
            </div>
            <div class="pagination-con">
                <ul class="pagination mb-0 justify-content-center">
                    <li class="page-item"><a class="page-link" href="shop.html">Previous</a></li>
                    <li class="page-item"><a class="page-link active" href="product-detail.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="cart.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="checkout.html">3</a></li>
                    <li class="page-item"><a class="page-link" href="product-detail.html">Next</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/cart_.js') }}"></script>
    <script>
        $(function() {

             const cart= new Cart('restaurant');
             cart_length()

            $(document).on('click', '.add_cart_btn',function() {

                let product = JSON.parse($(this).attr('data-product')) ;

                 console.log(product);
                 


                // let name = $("#product_id option:selected").text();

                // let price = $(".p_price").val();
                // let qty = $(".p_qty").val();
                // let discount = $(".p_discount").val();

                // let total_discount = discount * qty;
                // let subtotal = price * qty - total_discount;

                let item = {
                    "name": product.name,
                    "item_id": product.id,
                    "price": product.offer_price,
                    "qty": 1,
                    "discount":0,
                    'total_discount': 0,
                    "subtotal":  product.offer_price,
                };

                  cart.save(item);
                  cart_length();
                  


                // printCart();
                // console.log(cart.getCart());
                

            });


            function cart_length() {
                let items=  cart.getCart().length ?? 0
                $('.cartlength').text(items);
               
            }







        })
    </script>
@endsection
