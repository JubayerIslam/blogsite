@extends('backend.master')

@section('content')
<div class="container-fluid px-4">
    <form action="{{ url('category/update/'.$category->id) }}"  method="POST">
        @csrf
        <div class="col-md-12 mt-5"> 
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong> {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
            
        @endif
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Update Category
                        </div>
                        <div class="card-body">
                            <label for="">Category Name</label>
                            <input type="text" name="name" class="form-control mt-2" placeholder="Category Name" value="{{ $category->name }}">
                            <button type="submit" name="btn" class="btn btn-success mt-3">Update</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </form>
</div>
@endsection