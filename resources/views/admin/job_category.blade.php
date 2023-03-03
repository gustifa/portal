@extends('admin.layout.app')
@section('home')
<div class="main-content">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Category Icon</th>
                                    <th>Icon Preview</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobCategoryData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->icon }}</td>
                                        <td>
                                            <i class="{{ $item->icon }}"></i>
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin.job.category.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('admin.job.category.delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection