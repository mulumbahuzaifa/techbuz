<div>
    <div class="container pt-100 pb-100">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.services') }}" class="btn btb-success pull-right"> All Products</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateService">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    @if($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">
                                        {{-- @error('newImage')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror --}}
                                    @else
                                    <img src="{{ asset('image/services') }}/{{ $image }}" width="120" alt="">
                                    @endif

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Description</label>
                                <div class="col-md-4">
                                    <textarea name="" id=""  placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable"></label>
                                <div class="col-md-4">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
