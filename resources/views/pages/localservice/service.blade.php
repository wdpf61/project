@extends('layout.localService.app')

@section('breadcrumb')
       <!-- Breadcrumb -->
   <div class="breadcrumb-bar text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Search</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home-2"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="breadcrumb-bg">
            <img src="{{asset('public_service_asset')}}/assets/img/bg/breadcrumb-bg-01.png" class="breadcrumb-bg-1" alt="Img">
            <img src="{{asset('public_service_asset')}}/assets/img/bg/breadcrumb-bg-02.png" class="breadcrumb-bg-2" alt="Img">
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
@endsection

@section('page')
    







<!-- Page Wrapper -->
 <div class="page-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <form action="https://truelysell.dreamstechnologies.com/html/template/search.html">
                                <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                    <h5><i class="ti ti-filter-check me-2"></i>Filters</h5>
                                    <a href="javascript:void(0);">Reset Filter</a>
                                </div>
                                <div class="mb-3 pb-3 border-bottom">
                                    <label class="form-label">Search By Keyword</label>
                                    <input type="text" class="form-control" placeholder="What are you looking for?">
                                </div>
                                <div class="accordion border-bottom mb-3">
                                    <div class="accordion-item mb-3">
                                        <div class="accordion-header" id="accordion-headingThree">
                                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseThree" aria-expanded="true" aria-controls="accordion-collapseThree" role="button">
                                                Categories
                                            </div>
                                        </div>
                                        <div id="accordion-collapseThree" class="accordion-collapse collapse show" aria-labelledby="accordion-headingThree">
                                            <div class="content-list mb-3" id="fill-more">
                                                <div class="form-check mb-2" >								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                        All Categories
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Construction
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Car Wash
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Electrical
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Cleaning
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Plumbing
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Designing
                                                    </label>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" id="more" class="more-view text-primary fs-14">View more <i class="ti ti-chevron-down ms-1"></i></a>
                                        </div>										
                                    </div>
                                </div>
                                <div class="accordion border-bottom mb-3">
                                    <div class="accordion-header" id="accordion-headingFour">
                                        <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseFour" aria-expanded="true" aria-controls="accordion-collapseFour" role="button">
                                            Sub Category
                                        </div>
                                    </div>
                                    <div id="accordion-collapseFour" class="accordion-collapse collapse show" aria-labelledby="accordion-headingFour">
                                        <div class="mb-3">
                                            <select class="select">
                                                <option selected>Select Sub Category</option>
                                                <option>Car Wash</option>
                                                <option>Construction</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion border-bottom mb-3">
                                    <div class="accordion-header" id="accordion-headingFive">
                                        <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseFive" aria-expanded="true" aria-controls="accordion-collapseFive" role="button">
                                            Location
                                        </div>
                                    </div>
                                    <div id="accordion-collapseFive" class="accordion-collapse collapse show" aria-labelledby="accordion-headingFive">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Select Location">
                                                <span class="icon-addon"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion border-bottom mb-3">
                                    <div class="accordion-header" id="accordion-headingSix">
                                        <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseSix" aria-expanded="true" aria-controls="accordion-collapseSix" role="button">
                                            Price Range
                                        </div>
                                    </div>
                                    <div id="accordion-collapseSix" class="accordion-collapse collapse show" aria-labelledby="accordion-headingSix">
                                        <div class="filter-range">
                                            <input type="text" id="range_03">
                                        </div>
                                        <div class="filter-range-amount mb-3">
                                            <p class="fs-14">Price: <span>$5 - $210</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-item mb-3">
                                        <div class="accordion-header" id="accordion-headingTwo">
                                            <div class="accordion-button fs-18 p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseTwo" aria-expanded="true" aria-controls="accordion-collapseTwo" role="button">
                                                Ratings
                                            </div>
                                        </div>
                                        <div id="accordion-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="accordion-headingTwo">
                                            <div class="mb-3">
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label d-block">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                        <span class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i><span class="float-end">(55)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label d-block">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i><span class="float-end">(48)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label d-block">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i><span class="float-end">(13)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label d-block">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i><span class="float-end">(05)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">								
                                                    <label class="form-check-label d-block">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i>
                                                            <i class="fa-regular fa-star filled"></i><span class="float-end">(00)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>										
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark w-100">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <h4 >Found <span class="text-primary">11 Services</span></h4>
                        <div class="d-flex align-items-center">
                            <span class="text-dark me-2">Sort</span>
                            <div class="dropdown me-2">
                                <a href="javascript:void(0);" class="dropdown-toggle bg-light-300 " data-bs-toggle="dropdown">
                                    Price Low to High
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item active">Price Low to High</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Price High to Low</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="tags d-flex justify-content-center align-items-center bg-primary rounded me-2"><i class="ti ti-layout-grid"></i></a>
                            <a href="javascript:void(0);" class="tags d-flex justify-content-center align-items-center border rounded"><i class="ti ti-list"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">


                         @forelse ( $services as  $service)
                         <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/{{$service->service_img}}" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">{{$service->category->name}}</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/{{$service->provider_img}}" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">{{$service->title}}</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>{{$service->provider->address}}</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>{{ optional($service->review)->rating ?? 4.9}}</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>${{$service->price}} <span class="fs-13 text-gray"><del>${{$service->price}}/hr</del></span></h5>
                                            <a href="" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @empty

                         <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <p>Data not Found</p> 
                                </div>
                                </div>
                                </div>
                             
                         @endforelse

                        
                        {{-- <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-14.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Construction</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Toughened Glass Fitting</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>New Jersey, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.7</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$20.00 <span class="fs-13 text-gray"><del>$25.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-15.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Computer</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2 text-truncate">
                                            <a href="javascript:void(0);">Computer Hardware Service</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>California, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.5</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$20.00 <span class="fs-13 text-gray"><del>$35.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-16.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Interior</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Interior Designing</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Maryland, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.8</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$30.00 <span class="fs-13 text-gray"><del>$35.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-17.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Car Wash</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Steam Car Wash</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Montana, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.2</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$20.00 <span class="fs-13 text-gray"><del>$25.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-18.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Electrical</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Electric Panel Repairing</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Texas, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.9</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$40.00 <span class="fs-13 text-gray"><del>$45.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-19.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Cleaning</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2 text-truncate">
                                            <a href="javascript:void(0);">House Cleaning Services</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>New Jersey, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.6</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$45.00 <span class="fs-13 text-gray"><del>$50.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-20.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Construction</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Commercial Painting </a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Alabama, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.5</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$40.00 <span class="fs-13 text-gray"><del>$45.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-21.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Appliance</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Air Conditioner Service</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Washington, DC, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.2</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$20.00 <span class="fs-13 text-gray"><del>$25.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-22.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Construction</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Building Construction</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Montana, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.0</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$50.00 <span class="fs-13 text-gray"><del>$55.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-23.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Plumber</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Plumbing Services</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Virginia, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.3</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$45.00 <span class="fs-13 text-gray"><del>$50.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="img-sec w-100">
                                        <a href="service-details.html"><img src="{{asset('public_service_asset')}}/assets/img/providers/provider-24.jpg" class="img-fluid rounded-top w-100" alt="img"></a>
                                        <div class="image-tag d-flex justify-content-end align-items-center">
                                            <span class="trend-tag">Carpentry</span>
                                            <a href="javascript:void(0);" class="fav-icon like-icon"><i class="ti ti-heart"></i></a>
                                        </div>
                                        <span class="image-logo avatar avatar-md border rounded-circle">
                                            <img src="{{asset('public_service_asset')}}/assets/img/providers/provider-01.jpg" class="img-fluid rounded-circle " alt="logo">
                                        </span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2">
                                            <a href="service-details.html">Wooden Carpentry Work</a>
                                        </h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fs-14 mb-0"><i class="ti ti-map-pin me-2"></i>Alabama, USA</p>
                                            <span class="rating text-gray fs-14"><i class="fa fa-star filled me-1"></i>4.1</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>$25.00 <span class="fs-13 text-gray"><del>$30.00/hr</del></span></h5>
                                            <a href="booking.html" class="btn bg-primary-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="paginations d-flex justify-content-center align-items-center">
                          <li class="page-item me-3">
                            <a class="page-link"><i class="ti ti-arrow-left me-2"></i>Prev</a>
                          </li>
                          <li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="javascript:void(0);">1</a></li>
                          <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">2</a></li>
                          <li class="page-item me-3"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">3</a></li>
                          <li class="page-item ">
                            <a class="page-link" href="javascript:void(0);">Next<i class="ti ti-arrow-right ms-2"></i></a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- /Page Wrapper -->

 @endsection