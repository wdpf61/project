@extends('layout.erp.main')
@section('page_content')
    
@section('title', "Role")

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
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                             @forelse ( $roles as $key => $role)
                             <tr>
                                <td>{{$role->id}}</td>
                               
                                <td class="f-w-500">{{ optional( $role->user)->name}}</td>
                                <td class="text-secondary f-w-600">{{$role->name}}</td>
                                <td>
                                    <div class="btn btn-group">
                                         @if (auth()->user()->isAdmin())
                                         <a class="btn btn-sm btn-primary" href="{{url("user/show/$role->id")}}">Show</a>
                                         <a class="btn btn-sm btn-info" href="{{url("user/edit/$role->id")}}">Edit</a>
                                         <a class="btn btn-sm btn-danger" href="{{url("user/delete/$role->id")}}" > <i class="fa-solid fa-archive fa-fw"></i> </a>
                                         @endif
                                         
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