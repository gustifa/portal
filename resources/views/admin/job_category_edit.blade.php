@extends('admin.layout.app')
@section('home')
<div class="main-content">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.job.category.update',$job_category_single->id) }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Category Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ $job_category_single->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Icon Preview</label>
                                <div>
                                    <i class="{{ $job_category_single->icon }}"></i>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Category Icon *</label>
                                <input type="text" class="form-control" name="icon" value="{{ $job_category_single->icon }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection