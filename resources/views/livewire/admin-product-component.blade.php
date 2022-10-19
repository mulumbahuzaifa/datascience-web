<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container start-screen start-screen--style-4" style="padding: 30px 0; margin-top: 150px">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h4> All Products</h4></div>
                            <div class="col-md-6"><a href="{{ route('admin.addproduct') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Product</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Vendor</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="60" height="60" alt="{{ $product->name }}"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->SKU }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->vendor->name }}</td>
                                        {{-- <td>
                                            <ol>
                                                @foreach ($product->aminities as $aminity)
                                                <li>{{ $aminity->name}}</li>
                                                @endforeach
                                            </ol>
                                        </td> --}}
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct', ['product_slug'=> $product->slug]) }}" ><i class="fas fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this product') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})" style="margin-left: 20px"><i class="fas fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $products->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
