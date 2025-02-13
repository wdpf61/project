
@extends('layout.backend.main')

@section('page_content')
<div class="error-container p-0">
    <div class="container">
      <div>
        <div>
          <img src="assets/images/background/error-404.png" class="img-fluid" alt="">
        </div>
        <div class="mb-3">
          <div class="row">
            <div class="col-lg-8 offset-lg-2 ">
              <p class="text-center text-secondary f-w-500">Website owners should regularly check for and fix broken links using tools like Google Search Console or other link-checking software.</p>
            </div>
          </div>
        </div>
        <a role="button" href="index.html" class="btn btn-lg btn-primary"><i class="ti ti-home"></i> Back To Home</a>
      </div>
    </div>
  </div>
@endsection

 

