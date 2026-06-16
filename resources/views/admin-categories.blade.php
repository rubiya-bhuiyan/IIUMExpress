@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Category Management</h2>
            <p class="text-muted">View, add, and update food categories.</p>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success">
            Back to Dashboard
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-5 mb-4">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-3">Add New Category</h4>

            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-md-5">
                        <input type="text" name="name" class="form-control rounded-4" placeholder="Category name" required>
                    </div>

                    <div class="col-md-5">
                        <input type="text" name="description" class="form-control rounded-4" placeholder="Description">
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success w-100 rounded-4">
                            Add
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-5">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-4">Existing Categories</h4>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                                    @csrf

                                    <td>{{ $category->id }}</td>

                                    <td>
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control rounded-4">
                                    </td>

                                    <td>
                                        <input type="text" name="description" value="{{ $category->description }}" class="form-control rounded-4">
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-success rounded-4">
                                            Update
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection