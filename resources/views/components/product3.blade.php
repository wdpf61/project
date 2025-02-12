{{-- @props(['product']) --}}


<div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
    <div class="card-product-wrapper">
        <a href="product-detail.html" class="product-img">
            <img class="lazyload img-product" data-src="{{asset('ecom_asset')}}/images/products/{{$product->photo_orange}}" src="{{asset('ecom_asset')}}/images/products/{{$product->photo_orange}}" alt="image-product">
            <img class="lazyload img-hover" data-src="{{asset('ecom_asset')}}/images/products/{{$product->photo_white}}" src="{{asset('ecom_asset')}}/images/products/{{$product->photo_white}}" alt="image-product">
        </a>
        <div class="list-product-btn">
            <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                <span class="icon icon-heart"></span>
                <span class="tooltip">Add to Wishlist</span>
                <span class="icon icon-delete"></span>
            </a>
            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                <span class="icon icon-compare"></span>
                <span class="tooltip">Add to Compare</span>
                <span class="icon icon-check"></span>
            </a>
            <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                <span class="icon icon-view"></span>
                <span class="tooltip">Quick View</span>
            </a>
        </div>
        <div class="size-list">
            <span class="size-item">S</span>
            <span class="size-item">M</span>
            <span class="size-item">L</span>
            <span class="size-item">XL</span>
        </div>
    </div>
    <div class="card-product-info">
        <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
        <a href="product-detail.html" class="title link">{{$product->name}}</a>
        <span class="price current-price">${{$product->price}}</span>
        <ul class="list-color-product">
            <li class="list-color-item color-swatch active">
                <span class="tooltip">Orange</span>
                <span class="swatch-value bg_orange-3"></span>
                <img class="lazyload" data-src="{{asset('ecom_asset')}}/images/products/orange-1.jpg" src="{{asset('ecom_asset')}}/images/products/{{$product->photo_orange}}" alt="image-product">
            </li>
            <li class="list-color-item color-swatch">
                <span class="tooltip">Black</span>
                <span class="swatch-value bg_dark"></span>
                <img class="lazyload" data-src="{{asset('ecom_asset')}}/images/products/black-1.jpg" src="{{asset('ecom_asset')}}/images/products/{{$product->photo_black}}" alt="image-product">
            </li>
            <li class="list-color-item color-swatch">
                <span class="tooltip">White</span>
                <span class="swatch-value bg_white"></span>
                <img class="lazyload" data-src="{{asset('ecom_asset')}}/images/products/white-1.jpg" src="{{asset('ecom_asset')}}/images/products/{{$product->photo_white}}" alt="image-product">
            </li>
        </ul>
    </div>
</div>