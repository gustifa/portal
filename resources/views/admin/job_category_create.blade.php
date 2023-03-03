@extends('admin.layout.app')
@section('home')
<div class="main-content">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.job.category.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Category Name *</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group mb-3">
                                <label>Category Icon *</label>
                                <input type="text" class="form-control" name="icon">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection