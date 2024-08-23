@extends('layout.frontend')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Show Category Details
                        </h4>
                        <a href="{{ route('category.index') }}" class="btn btn-danger float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <p>{{ $category->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <p>{{ $category->description }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <p>{{ $category->status == 1 ? 'checked' : 'not checked' }}</p>
                        </div>
                        <div class="mb-3 d-inline-block">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('category.destroy', $category->id) }}" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection