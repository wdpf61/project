@extends('layout.backend.main')

@section('page_content')



<div class="row">
    <!-- Book Appointment Form start -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Book Appointment Form</h5>
            </div>
            <div class="card-body">
                <form class="app-form" action="{{url("user/store")}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Enter Your First Name" >
                                @error('name')
                                    <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        
                     
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input value="{{old('email')}}" name="email" type="text" class="form-control" placeholder="Enter Your Email" >
                                @error('email')
                                    <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Contact</label>
                                <div class="input-group">
                                    <span class="input-group-text b-r-left">+88</span>
                                    <input value="{{old('mobile')}}" name="mobile" type="text" class="form-control b-r-right" placeholder="Enter Your Contact" />
                                    
                                </div>
                                @error('mobile')
                                    <span style="color:red">{{$message}}</span>
                                   @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Client Registration end -->
</div>

@endsection