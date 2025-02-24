@extends('layout.localService.app')

@section('page')
    
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content">
			<div class="container-fluid">
				<!-- Booking -->
				<div class="row">
					<div class="col-xxl-12 col-xl-12 mx-auto">
						<div class="card border-0 mb-0">
							<div class="card-body p-3 fieldset-wizard">
								<div class="row">

									<!-- Booking Sidebar -->
									<div class="col-lg-3 theiaStickySidebar">
										<div class="card bg-dark booking-sidebar mb-4 mb-lg-0">
											<div class="card-body">
												<h6 class="text-white fs-14 mb-2">Service Details</h6>
												<div class="service-info d-flex align-items-center">
													<span class="avatar avatar-md me-2 flex-shrink-0">
														<img src="{{asset('public_service_asset')}}/assets/img/services/service-02.jpg" alt="img">
													</span>
													<div>
														<p class="fs-12 text-white fw-medium mb-1">Spark Services</p>
														<span class="fs-10"><i class="ti ti-star-filled text-warning me-1"></i>4.9 (255 reviews)</span>
													</div>
												</div>
												<div class="booking-wizard">
													<h6 class="text-white fs-14 mb-3">Bookings</h6>
													<ul class="wizard-progress" id="bokingwizard">
														<li class="active pb-3">
															<span>1. Location</span>
														</li>
														<li class="pb-3">
															<span>2. Staffs</span>															
														</li>
														<li class="pb-3">
															<span>3. Additional Services</span>															
														</li>
														<li class="pb-3">
															<span>4. Date & Time</span>															
														</li>
														<li class="pb-3">
															<span>5. Personal Information</span>															
														</li>
														<li class="pb-3">
															<span>6. Cart</span>	
														</li>
														<li class="pb-3">
															<span>7. Payment</span>																
														</li>
														<li>
															<span>8. Confirmation</span>
														</li>
													</ul>
												</div>
												<div class="status-report">													
													<h6 class="text-white fs-14 mb-2 pb-2">Bookings</h6>
													<p class="fs-10">0% complete</p>
												</div>
												<div class="text-center">
													<p class="fs-10 text-white">Already have an account? <a href="login.html" class="link-primary">Login</a></p>
												</div>
											</div>
										</div>
									</div>
									<!-- /Booking Sidebar -->

									<div class="col-lg-9">

										<!-- Location -->
										<fieldset class="booking-content"  id="first-field">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Select Location</h6>
														<span class="badge badge-info-transparent mb-2">Total : 05</span>
													</div>
													<div class="d-flex align-items-center mb-2">
														<div class="dropdown loc-dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="dropdown-toggle bg-light-500" data-bs-toggle="dropdown">
																All Locations
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="javascript:void(0);">1052 Edsel Road LA</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">1197 Tennessee Avenue</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">1214 Rich land Avenue</a></li>
															</ul>
														</div>
														<div class="dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-lg-4 col-md-6">
														<div class="card location-card mb-0">
															<div class="card-body p-3 text-center">
																<div class="trend-icon">
																	<span class="bg-info">
																		<img src="{{asset('public_service_asset')}}/assets/img/icons/loc-icon.svg" alt="icon">
																	</span>
																</div>
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/icons/service-01.svg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Lighting Services - California Shop</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><i class="ti ti-map-pin-check me-1"></i>1052 Edsel Road LA</p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>12 Staffs</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>5.0</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card location-card mb-0">
															<div class="card-body p-3 text-center">
																<div class="trend-icon">
																	<span class="bg-info">
																		<img src="{{asset('public_service_asset')}}/assets/img/icons/loc-icon.svg" alt="icon">
																	</span>
																</div>
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/icons/service-02.svg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Lighting Services - California Shop</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><i class="ti ti-map-pin-check me-1"></i>1052 Edsel Road LA</p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>15 Staffs</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card location-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/icons/service-03.svg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Lighting Services -Texas Shop</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><i class="ti ti-map-pin-check me-1"></i>1214 Rich land Avenue</p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>16 Staffs</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.0</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card location-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/icons/service-04.svg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Lighting Services - New York Shop</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><i class="ti ti-map-pin-check me-1"></i>4127 Small Street</p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>16 Staffs</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card location-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/icons/service-05.svg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Lighting Services - New Jersy Shop</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><i class="ti ti-map-pin-check me-1"></i>3527 Saint James Drive</p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>21 Staffs</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-end">
												<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
											</div>
										</fieldset>
										<!-- /Location -->

										<!-- Staffs -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Select Staffs</h6>
														<span class="badge badge-info-transparent mb-2">Total : 09</span>
													</div>
													<div class="d-flex align-items-center mb-2">
														<div class="dropdown loc-dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="dropdown-toggle bg-light-500" data-bs-toggle="dropdown">
																All Ratings
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="javascript:void(0);">5 Ratings</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">4 Ratings</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">3 Ratings</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">2 Ratings</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">1 Ratings</a></li>
															</ul>
														</div>
														<div class="dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Jeff Fitch</h6>
																<p class="mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02646b766a616a36343542677a636f726e672c616d6f">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>08 Servicess</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-17.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Jacob Kline</h6>
																<p class="mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e38988d1d0d6a3869b828e938f86cd808c8e">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>07 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.8</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-25.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Patricia Durham</h6>
																<p class="mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86f6e7f4e5e3f2b3b0c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>06 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.0</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-14.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">David Kauffman</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640005120d000113515024011c05091408014a070b09">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>05 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Kara Coble</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a010b180b0e0f595e5f2a0f120b071a060f44090507">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>02 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Marcela Garcia</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86ebe7f4e5b5b2b0c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>04 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.8</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Bill Andrus</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5d56535b0c0a09087f5a475e524f535a115c5052">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>04 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.7</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Travis Machado</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3347415000050473564b525e435f561d505c5e">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>06 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.0</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="card staff-card mb-0">
															<div class="card-body p-3 text-center">
																<span class="avatar avatar-lg mx-auto mb-2">
																	<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
																<h6 class="mb-2 fw-medium">Darrell Dolezal</h6>
																<p class="d-flex align-items-center justify-content-center mb-2"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9bdb8abafedecef99bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></p>
																<div class="d-flex align-items-center justify-content-between border-top pt-2">
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>02 Services</p>
																	<p class="mb-0 d-flex align-items-center"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-between flex-wrap">
												<div class="form-check d-inline-flex align-items-center ps-0 me-3 mt-3">
													<input class="form-check-input ms-0 mt-0" name="service1" type="checkbox" id="service" checked>
													<label class="form-check-label ms-2 text-black" for="service">
														Select Anyone for this Booking
													</label>
												</div>
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
												</div>
											</div>
										</fieldset>
										<!-- /Staffs -->

										<!-- Additional Service -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Select Additional Service</h6>
														<span class="badge badge-info-transparent mb-2">Total : 05</span>
													</div>
													<div class="d-flex align-items-center mb-2">
														<div class="dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-md-6">
														<div class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
															<div class="d-flex align-items-center pb-2">
																<span class="avatar avatar-lg">
																	<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-01.jpg" alt="img" class="br-5">
																</span>
																<div class="ms-2">
																	<h6 class="mb-1 fs-12 fw-medium">Ceiling Fans Repairs</h6>
																	<p class="fs-10"><span class="fs-12 text-gray-9 fw-medium">$400</span> / 30 min</p>
																</div>
															</div>
															<div class="d-flex align-items-center pb-2">
																<p class="mb-0 d-flex align-items-center fs-12 me-2"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																<a href="javascript:void(0);" class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center"><i class="feather-plus-circle me-1"></i>Add</a>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
															<div class="d-flex align-items-center pb-2">
																<span class="avatar avatar-lg">
																	<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-02.jpg" alt="img" class="br-5">
																</span>
																<div class="ms-2">
																	<h6 class="mb-1 fs-12 fw-medium">Switches Changes</h6>
																	<p class="fs-10"><span class="fs-12 text-gray-9 fw-medium">$250</span> / 30 min</p>
																</div>
															</div>
															<div class="d-flex align-items-center pb-2">
																<p class="mb-0 d-flex align-items-center fs-12 me-2"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																<a href="javascript:void(0);" class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center"><i class="feather-plus-circle me-1"></i>Add</a>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
															<div class="d-flex align-items-center pb-2">
																<span class="avatar avatar-lg">
																	<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-03.jpg" alt="img" class="br-5">
																</span>
																<div class="ms-2">
																	<h6 class="mb-1 fs-12 fw-medium">Outlets & Wiring </h6>
																	<p class="fs-10"><span class="fs-12 text-gray-9 fw-medium">$300</span> / 30 min</p>
																</div>
															</div>
															<div class="d-flex align-items-center pb-2">
																<p class="mb-0 d-flex align-items-center fs-12 me-2"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																<a href="javascript:void(0);" class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center active"><i class="feather-check-circle me-1"></i>Added</a>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
															<div class="d-flex align-items-center pb-2">
																<span class="avatar avatar-lg">
																	<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-04.jpg" alt="img" class="br-5">
																</span>
																<div class="ms-2">
																	<h6 class="mb-1 fs-12 fw-medium">Fixing Faulty Wiring</h6>
																	<p class="fs-10"><span class="fs-12 text-gray-9 fw-medium">$300</span> / 30 min</p>
																</div>
															</div>
															<div class="d-flex align-items-center pb-2">
																<p class="mb-0 d-flex align-items-center fs-12 me-2"><i class="ti ti-star-filled text-warning me-1"></i>4.5</p>
																<a href="javascript:void(0);" class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center"><i class="feather-plus-circle me-1"></i>Add</a>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
															<div class="d-flex align-items-center pb-2">
																<span class="avatar avatar-lg">
																	<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img" class="br-5">
																</span>
																<div class="ms-2">
																	<h6 class="mb-1 fs-12 fw-medium">Lighting Fixtures</h6>
																	<p class="fs-10"><span class="fs-12 text-gray-9 fw-medium">$1500</span> / 20 min</p>
																</div>
															</div>
															<div class="d-flex align-items-center pb-2">
																<p class="mb-0 d-flex align-items-center fs-12 me-2"><i class="ti ti-star-filled text-warning me-1"></i>4.9</p>
																<a href="javascript:void(0);" class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center"><i class="feather-plus-circle me-1"></i>Add</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-end">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
												</div>
											</div>
										</fieldset> 
										<!-- /Additional Service -->

										<!-- Date & Time -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Select Date & Time</h6>
													</div>
													<div class="d-flex align-items-center mb-2">
														<div class="dropdown mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-md-5">
														<h6 class="fs-13 fw-medium mb-2">Select date</h6>
														<div class="card border mb-0">
															<div class="card-body p-3">
																<div class="datepic"></div>															
															</div>
														</div>
													</div>
													<div class="col-md-7">
														<h6 class="fs-13 fw-medium mb-2">Select Time</h6>
														<div class="row g-2">
															<div class="col-lg-4 col-md-6">
																<div class="time-item disable">
																	<h6 class="fs-12 fw-medium">07:00 - 07:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item disable">
																	<h6 class="fs-12 fw-medium">07:30 - 08:00</h6>
																	<p class="fs-10">4 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item disable">
																	<h6 class="fs-12 fw-medium">08:00 - 08:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item disable">
																	<h6 class="fs-12 fw-medium">08:30 - 09:00</h6>
																	<p class="fs-10">3 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">09:00 - 09:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">09:30 - 10:00</h6>
																	<p class="fs-10">5 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">10:00 - 10:30</h6>
																	<p class="fs-10">3 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">10:30 - 11:00</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">11:00 - 11:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">11:30 - 12:00</h6>
																	<p class="fs-10">5 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">12:00 - 12:30</h6>
																	<p class="fs-10">4 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">12:30 - 13:00</h6>
																	<p class="fs-10">6 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">13:00 - 13:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">13:30 - 14:00</h6>
																	<p class="fs-10">1 Slot</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">14:00 - 14:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">14:30 - 15:00</h6>
																	<p class="fs-10">3 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">15:00 - 15:30</h6>
																	<p class="fs-10">2 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">15:30 - 16:00</h6>
																	<p class="fs-10">4 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">16:00 - 16:30</h6>
																	<p class="fs-10">3 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">16:30 - 17:00</h6>
																	<p class="fs-10">1 Slots</p>
																</div>															
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="time-item">
																	<h6 class="fs-12 fw-medium">17:00 - 17:30</h6>
																	<p class="fs-10">3 Slots</p>
																</div>															
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-end">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
												</div>
											</div>
										</fieldset>
										<!-- /Date & Time -->

										<!-- Personal Information -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Add Personal Information</h6>
													</div>
													<div class="d-flex align-items-center mb-2">
														<div class="dropdown me-2 mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-md-5">		
														<div class="cart-info-wrap">
															<div class="mb-2 d-flex align-items-center justify-content-between">
																<div>
																	<h6 class="fw-medium">Lighting Services</h6>
																	<p class="fs-10">30 Min</p>
																</div>
																<h6 class="fs-12 fw-medium">$457</h6>
															</div>
															<div class="mb-2 d-flex align-items-center justify-content-between">
																<div>
																	<h6 class="fw-medium">Outlets & Wiring</h6>
																	<p class="fs-10">30 Min</p>
																</div>
																<h6 class="fs-12 fw-medium">$200</h6>
															</div>
															<div class="mb-0 d-flex align-items-center justify-content-between">
																<div>
																	<h6 class="fw-medium">Switches Changes</h6>
																	<p class="fs-10">30 Min</p>
																</div>
																<h6 class="fs-12 fw-medium">$100</h6>
															</div>
															<div class="border-top pt-3 mt-3">
																<h6 class="mb-2">Location</h6>
																<div class="d-flex align-items-center mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/icons/service-02.svg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="fw-medium mb-1">Lighting Services -California Shop</h6>
																	</div>
																</div>
															</div>
															<div class="border-top pt-3">
																<h6 class="mb-2">Staff</h6>
																<div class="d-flex align-items-center mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/profiles/avatar-04.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="fw-medium mb-1">Travis Machado</h6>
																	</div>
																</div>
															</div>
															<div class="border-top pt-3 mt-3">
																<h6 class="mb-2">Date & Time</h6>
																<p class="mb-2 text-gray-9 fw-medium d-flex align-items-center"><i class="feather-calendar me-2"></i>Fri, 12 Aug 2024</p>
																<p class="text-gray-9 fw-medium d-flex align-items-center"><i class="feather-clock me-2"></i>08:30 AM  - 09:00 AM</p>
															</div>
														</div>	
													</div>
													<div class="col-md-7">
														<div class="row g-2">
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">First Name</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">Last Name</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">Email</label>
																	<input type="email" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">Phone Number</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">Street Address</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">City</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">State</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-6">
																<div>
																	<label class="form-label fs-12">Postal Code</label>
																	<input type="text" class="form-control">
																</div>															
															</div>
															<div class="col-md-12">
																<div>
																	<label class="form-label fs-12">Add booking notes</label>
																	<textarea class="form-control" rows="4"></textarea>
																</div>															
															</div>
														</div>
														<div class="border-top pt-3 mt-3">
															<h6 class="fs-13 fw-medium mb-1">Cancellation policy</h6>
															<p>Cancel for free anytime in advance, otherwise you will be charged  100% of the service price for not showing up.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-end">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
												</div>
											</div>
										</fieldset>
										<!-- /Personal Information -->

										<!-- Cart -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Cart</h6>
													</div>
													<div class="d-flex align-items-center flex-wrap mb-2">														
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary d-inline-flex align-items-center prev_btn fs-10 mb-2 me-2"><i class="ti ti-circle-plus me-1"></i>Add New Booking</a>
														<div class="dropdown mb-2">
															<a href="javascript:void(0);" class="bg-light-500 d-inline-flex align-items-center" data-bs-toggle="dropdown">
																<i class="ti ti-shopping-cart me-1"></i>Cart<span class="bg-primary num-count ms-1">1</span>
															</a>
															<div class="dropdown-menu dropdown-sm p-3">
																<h6 class="fs-13 mb-3">Added In Cart (02)</h6>
																<div class="d-flex align-items-center p-2 bg-light rounded mb-3">
																	<span class="avatar avatar-lg">
																		<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																	</span>
																	<div class="ms-2">
																		<h6 class="mb-1">Lighting Services</h6>
																		<p class="fs-12"><i class="ti ti-star-filled text-warning me-1"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
																	</div>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div>
																<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
																	<div>
																		<h6 class="fw-medium">Total</h6>
																	</div>
																	<h6 class="fw-medium">$757</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-md-6 d-flex">		
														<div class="card flex-fill">
															<div class="card-body p-3 d-flex justify-content-between flex-column">
																<div>
																	<div class="d-flex align-items-center p-3 bg-light-400 rounded mb-2">
																		<span class="avatar avatar-lg">
																			<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																		</span>
																		<div class="ms-2">
																			<h6 class="fs-14 fw-medium mb-1">Lighting Services</h6>
																			<p>30 Minutes</p>
																		</div>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Additional Service</h6>
																		<p>Outlets & Wiring, Switches Changes</p>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Location</h6>
																		<p>Spark Electrical Services -  California Shop</p>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Employee</h6>
																		<p>Carl Newman</p>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Date  & Time</h6>
																		<p>Sun 16 July 2023 at 5:00pm</p>
																	</div>
																	<div class="mb-0">
																		<h6 class="fw-medium mb-1">Amount</h6>
																		<span class="badge badge-dark">$757</span>
																	</div>
																</div>																
																<div class="text-center border-top pt-3 mt-3">
																	<a href="javascript:void(0);" class="d-inline-flex align-items-center link-danger fs-12"><i class="ti ti-trash me-1"></i>Remove</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 d-flex">		
														<div class="card flex-fill">
															<div class="card-body p-3 d-flex justify-content-between flex-column">
																<div>
																	<div class="d-flex align-items-center p-3 bg-light-400 rounded mb-2">
																		<span class="avatar avatar-lg">
																			<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																		</span>
																		<div class="ms-2">
																			<h6 class="fs-14 fw-medium mb-1">Lighting Services</h6>
																			<p>30 Minutes</p>
																		</div>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Location</h6>
																		<p>Spark Electrical Services -  California Shop</p>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Employee</h6>
																		<p>Carl Newman</p>
																	</div>
																	<div class="mb-2">
																		<h6 class="fw-medium mb-1">Date  & Time</h6>
																		<p>Sun 16 July 2023 at 5:00pm</p>
																	</div>
																	<div class="mb-0">
																		<h6 class="fw-medium mb-1">Amount</h6>
																		<span class="badge badge-dark">$757</span>
																	</div>
																</div>	
																<div class="text-center border-top pt-3 mt-3">
																	<a href="javascript:void(0);" class="d-inline-flex align-items-center link-danger fs-12"><i class="ti ti-trash me-1"></i>Remove</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="booking-footer d-flex align-items-center justify-content-end">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i class="ti ti-arrow-right ms-1"></i></a>
												</div>
											</div>
										</fieldset>
										<!-- /Cart -->

										<!-- Payment Method -->
										<fieldset class="booking-content">
											<div class="book-card">
												<div class="d-flex align-items-center justify-content-between flex-wrap booking-title">
													<div class="d-flex align-items-center mb-2">
														<h6 class="fs-16 me-2 mb-2">Payment Method</h6>
													</div>
													<div class="d-flex align-items-center mb-2">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary d-inline-flex align-items-center prev_btn mb-2"><i class="ti ti-caret-left-filled me-1"></i>Back to Cart</a>
													</div>
												</div>
												<div class="row g-3">
													<div class="col-md-6">	
														<h6 class="fs-13 mb-3">Payment Types</h6>	
														<div class="payment-item d-flex align-items-center justify-content-between mb-2">
															<div class="form-check d-flex align-items-center ps-0">
																<input class="form-check-input ms-0 mt-0" name="payment" type="radio" id="payment1">
																<label class="form-check-label ms-2" for="payment1">
																	Stripe
																</label>
															</div>
															<div>
																<img src="{{asset('public_service_asset')}}/assets/img/icons/payment1.svg" alt="payment">
															</div>
														</div>
														<div class="payment-item d-flex align-items-center justify-content-between mb-2">
															<div class="form-check d-flex align-items-center ps-0">
																<input class="form-check-input ms-0 mt-0" name="payment" type="radio" id="payment2">
																<label class="form-check-label ms-2" for="payment2">
																	Paypal
																</label>
															</div>
															<div>
																<img src="{{asset('public_service_asset')}}/assets/img/icons/payment2.svg" alt="payment">
															</div>
														</div>
														<div class="payment-item d-flex align-items-center justify-content-between mb-2">
															<div class="form-check d-flex align-items-center ps-0">
																<input class="form-check-input ms-0 mt-0" name="payment" type="radio" id="payment3">
																<label class="form-check-label ms-2" for="payment3">
																	Razorpay	
																</label>
															</div>
															<div>
																<img src="{{asset('public_service_asset')}}/assets/img/icons/razor-pay.svg" alt="payment">
															</div>
														</div>
														<div class="payment-item d-flex align-items-center justify-content-between mb-2">
															<div class="form-check d-flex align-items-center ps-0">
																<input class="form-check-input ms-0 mt-0" name="payment" type="radio" id="payment4">
																<label class="form-check-label ms-2" for="payment4">
																	PaySolution
																</label>
															</div>
															<div>
																<img src="{{asset('public_service_asset')}}/assets/img/icons/pay-solution.svg" alt="payment">
															</div>
														</div>
														<div class="payment-item d-flex align-items-center justify-content-between mb-0">
															<div class="form-check d-flex align-items-center ps-0">
																<input class="form-check-input ms-0 mt-0" name="payment" type="radio" id="payment5">
																<label class="form-check-label ms-2" for="payment5">
																	Square
																</label>
															</div>
															<div>
																<img src="{{asset('public_service_asset')}}/assets/img/icons/square.svg" alt="payment">
															</div>
														</div>
													</div>
													<div class="col-md-6">		
														<div class="card total-card">
															<div class="card-body p-3 d-flex justify-content-between flex-column">
																<div>
																	<div class="mb-2 d-flex align-items-center justify-content-between">
																		<div>
																			<h6 class="fw-medium">Lighting Services</h6>
																			<p class="fs-10">30 Min</p>
																		</div>
																		<h6 class="fs-12 fw-medium">$457</h6>
																	</div>
																	<div class="mb-2 d-flex align-items-center justify-content-between">
																		<div>
																			<h6 class="fw-medium">Outlets & Wiring</h6>
																			<p class="fs-10">30 Min</p>
																		</div>
																		<h6 class="fs-12 fw-medium">$200</h6>
																	</div>
																	<div class="mb-0 d-flex align-items-center justify-content-between">
																		<div>
																			<h6 class="fw-medium">Switches Changes</h6>
																			<p class="fs-10">30 Min</p>
																		</div>
																		<h6 class="fs-12 fw-medium">$100</h6>
																	</div>
																</div>	
																<div>
																	<div class="total-wrap">
																		<div class="mb-2 d-flex align-items-center justify-content-between">
																			<h6 class="fw-medium">Sub Total</h6>
																			<p class="text-gray-9">$757</p>
																		</div>
																		<div class="mb-2 d-flex align-items-center justify-content-between">
																			<h6 class="fw-medium">Tax <span class="text-default fw-normal">(GST 5%)</span></h6>
																			<p class="text-gray-9">$60</p>
																		</div>
																		<div class="mb-2 d-flex align-items-center justify-content-between">
																			<h6 class="fw-medium">Discount <span class="text-default fw-normal">15%</span></h6>
																			<p class="text-gray-9">$757</p>
																		</div>
																		<div class="d-flex align-items-center justify-content-between">
																			<h6 class="fs-14">Total</h6>
																			<h6 class="fs-14">$757</h6>
																		</div>
																	</div>
																	<a href="javascript:void(0);" id="pay-btn" class="btn btn-light w-100 next_btn">Pay $757</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
										<!-- /Payment Method -->

										<!-- Confirmation -->
										<fieldset class="booking-content">
											<div class="book-card">
												<h6 class="fs-16 me-2 mb-3">Payment Method</h6>
												<div class="card">
													<div class="card-body">
														<h6 class="fs-14 fw-medium mb-3">Your Booking is Successful on Sun 16 July 2024at 5:00pm</h6>
														<div class="card shadow-none mb-0">
															<div class="card-body p-3">
																<div class="d-flex align-items-center justify-content-between flex-wrap p-2 bg-light-300 rounded mb-3">
																	<div class="d-flex align-items-center pb-2">
																		<span class="avatar avatar-xl flex-shrink-0">
																			<img src="{{asset('public_service_asset')}}/assets/img/services/addservice-05.jpg" alt="img">
																		</span>
																		<div class="ms-2">
																			<h6 class="mb-1">Lighting Services</h6>
																			<p>Booking ref. <span class="text-primary">#65742695</span></p>
																		</div>
																	</div>
																	<span class="badge badge-success"><i class="ti ti-circle-check-filled me-1"></i>Confirmed</span>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Lighting Services</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$457</h6>
																</div>
																<div class="mb-2 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Outlets & Wiring</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$200</h6>
																</div>
																<div class="mb-0 d-flex align-items-center justify-content-between">
																	<div>
																		<h6 class="fw-medium">Switches Changes</h6>
																		<p class="fs-10">30 Min</p>
																	</div>
																	<h6 class="fs-12 fw-medium">$100</h6>
																</div><div class="border-top pt-2">
																	<div class="mb-2 d-flex align-items-center justify-content-between">
																		<h6 class="fw-medium">Sub Total</h6>
																		<p>$757</p>
																	</div>
																	<div class="mb-2 d-flex align-items-center justify-content-between">
																		<h6 class="fw-medium">Tax</h6>
																		<p>$60</p>
																	</div>
																	<div class="mb-2 d-flex align-items-center justify-content-between">
																		<h6 class="fw-medium">Discount</h6>
																		<p>$757</p>
																	</div>
																</div>
																<div class="border-top pt-2 d-flex align-items-center justify-content-between">
																	<h6 class="fs-14">Total</h6>
																	<h6 class="fs-14">$757</h6>
																</div>
															</div>															
														</div>
														<div class="d-flex align-items-center justify-content-center flex-wrap">
															<a href="javascript:void(0);" class="btn btn-sm btn-info d-inline-flex align-items-center me-3 mt-3"><i class="ti ti-calendar me-1"></i>Add to Calendar</a>
															<a href="booking.html" class="btn btn-sm btn-primary d-inline-flex align-items-center mt-3"><i class="ti ti-circle-plus me-1"></i>Start New Booking</a>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
										<!-- /Confirmation -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Booking -->

			</div>
		</div>
	</div>
	<!-- /Page Wrapper -->
@endsection