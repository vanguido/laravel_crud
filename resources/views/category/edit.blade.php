@extends('layout.frontend')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Category
                        </h4>
                        <a href="{{ route('category.index') }}" class="btn btn-danger float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.update', $category->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}"/>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" rows="2" class="form-control">{!! $category->description !!}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <br />
                                <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked' : '' }} style="width: 30px; height: 30px" /> checked=visible, unchecked=hidden
                            @error('status')
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection