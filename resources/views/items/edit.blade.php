@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Update Item </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="fname" class="form-label">Item name</label>
                <input type="text" class="form-control" id="fname" name="food_item_name" aria-describedby="fname" value="{{ $item->fname }}">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="lname" name="image_url" aria-describedby="lname" value="{{ $item->lname }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
