@extends('layout.backend.main')
@section('page_content')
    
@section('title', "Users")

<div class="row table-section">
    <!-- Simple Table start -->
 

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> User Table</h5>
                
             
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            {{-- <th scope="col">Id</th> --}}
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Office</th>
                            {{-- <th scope="col">Status</th> --}}
                            <th scope="col">Salary</th>
                            <th scope="col">Contact</th>
                        </tr>
                        </thead>
                        <tbody>
                             @forelse ( $users as $key => $user)
                             <tr>
                                {{-- <td>{{$user->id}}</td> --}}
                                <td>
                                    <div class="d-flex align-items-center ">
                                        <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 simple-table-avtar">
                                            <img src="{{asset('assets')}}/images/avtar//1.png" alt="" class="img-fluid">
                                        </div>
                                        <p class="mb-0 f-w-500 ">{{$user->name}}</p>
                                    </div>
                                </td>
                                <td class="f-w-500">Architect</td>
                                {{-- <td class="text-secondary f-w-600">Edinburgh</td> --}}
                                <td><span class="badge text-light-primary">active</span></td>
                                <td class="text-success f-w-500">$320,800</td>
                                <td>+1 (025) {{$user->mobile}}</td>
                                <td>
                                    <div class="btn btn-group">
                                         <a class="btn btn-sm btn-primary" href="{{url("user/show/$user->id")}}">Show</a>
                                         <a class="btn btn-sm btn-info" href="{{url("user/edit/$user->id")}}">Edit</a>
                                         <a class="btn btn-sm btn-danger" href="{{url("user/delete/$user->id")}}" > <i class="fa-solid fa-archive fa-fw"></i> </a>
                                    </div>
                                </td>
                            </tr>
                             @empty
                                 <tr>
                                    <td rowspan="7"> No data Found </td>
                                 </tr>
                             @endforelse
                     



                        </tbody>
                    </table>

                   
                </div>
               
            </div>

            
            
        </div>
    </div>
    <!-- Simple Table end -->

   
</div>

@endsection