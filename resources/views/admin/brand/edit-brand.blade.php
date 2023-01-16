@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit $brand Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('updateBrand', ['id' => $brand->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$brand->name}}" id="horizontal-firstname-input" name="name"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="horizontal-password-input3" name="description">{{$brand->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="horizontal-password-input4" name="image"/>
                                <img class="py-4" src="{{asset($brand->image)}}" alt="" height="170" width="180"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label><input type="radio" name="status" {{$brand->status == 1 ? 'checked' : ''}} value="1"/> Published</label>
                                <label><input type="radio" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0"/> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Category Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




