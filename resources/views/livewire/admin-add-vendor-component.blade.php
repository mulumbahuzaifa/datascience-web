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
                            <div class="col-md-6">
                                Add New Vendor
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.vendors') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Vendors</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="card-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addVendor">
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Vendor Title</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Vendor Title" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Vendor Slug</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Vendor Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Vendor Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                    @endif
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <div name="description" id="description"  wire:model="description"></div>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable"></label>
                                <div class="col-md-8">
                                    <Button type="submit" class="btn btn-primary">Submit</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    $('#description').summernote({
      placeholder: 'Add Description',
      tabsize: 2,
      height: 200,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onChange: function(contents, $editable){
                @this.set('description', contents);
            }
        }
        });
  </script>

@endpush
