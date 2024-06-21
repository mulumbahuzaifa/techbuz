<div>
    <div class="container pt-100 pb-100">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Services</div>
                            <div class="col-md-6"><a href="{{ route('admin.addservices') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Product</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($services as $product)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td><img src="{{ asset('image/services') }}/{{ $product->image }}" width="60" height="60" alt="{{ $product->name }}"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editservices', ['service_id'=> $product->id]) }}" ><i class="fa fa-edit"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Sevice') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})" style="margin-left: 20px"><i class="fa fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $services->links('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>