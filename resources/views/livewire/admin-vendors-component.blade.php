<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h4> All Vendors</h4></div>
                            <div class="col-md-6"><a href="{{ route('admin.addvendor') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Vendor</a></div>
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
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendors as $vendor)
                                    <tr>
                                        <td>{{ $vendor->id }}</td>
                                        <td><img src="{{ asset('assets/images/vendors') }}/{{ $vendor->image }}" width="60" height="60" alt="{{ $vendor->name }}"></td>
                                        <td>{{ $vendor->name }}</td>
                                        <td>{{ $vendor->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editvendor', ['vendor_slug'=> $vendor->slug]) }}" ><i class="fas fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this vendor') || event.stopImmediatePropagation()" wire:click.prevent="deleteVendor({{ $vendor->id }})" style="margin-left: 20px"><i class="fas fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $vendors->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
