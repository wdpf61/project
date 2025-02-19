
@extends('layout.erp.app')
@section('title', 'Manage Product')
@section('style')


@endsection
@section('page')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('products.create') }}">New Product</a>
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Offer Price</th>
                                <th>Manufacturer Id</th>
                                <th>Regular Price</th>
                                {{-- <th>Description</th> --}}
                                    {{-- <th>Photo</th>
                                    <th>Product Category Id</th>
                                    <th>Product Section Id</th>
                                    <th>Is Featured</th>
                                    <th>Star</th>
                                    <th>Is Brand</th>
                                    <th>Offer Discount</th>
                                    <th>Uom Id</th>
                                    <th>Weight</th>
                                    <th>Barcode</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Product Type Id</th> --}}

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->offer_price }}</td>
                                    <td>{{ $product->manufacturer_id }}</td>
                                    <td>{{ $product->regular_price }}</td>
                                    {{-- <td>{{$product->description}}</td>
                                        <td><img src="{{asset('img/'.$product->photo)}}" width="100" /></td>
                                        <td>{{$product->product_category_id}}</td> --}}
                                                                {{-- <td>{{$product->product_section_id}}</td>
                                        <td>{{$product->is_featured}}</td>
                                        <td>{{$product->star}}</td>
                                        <td>{{$product->is_brand}}</td>
                                        <td>{{$product->offer_discount}}</td>
                                        <td>{{$product->uom_id}}</td>
                                        <td>{{$product->weight}}</td>
                                        <td>{{$product->barcode}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>{{$product->product_type_id}}</td> --}}

                                    <td>
                                        <form action = "{{ route('products.destroy', $product->id) }}" method = "post">
                                            <a class= 'btn btn-primary'
                                                href = "{{ route('products.show', $product->id) }}">View</a>
                                            <a class= 'btn btn-success' href = "{{ route('products.edit', $product->id) }}">
                                                Edit </a>
                                            @method('DELETE')
                                            @csrf
                                            <input type = "submit" class="btn btn-danger" name = "delete"
                                                value = "Delete" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')


@endsection
