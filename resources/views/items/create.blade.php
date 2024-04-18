@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a item 
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('items.store') }}" method="post">
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
                <label for="fname" class="form-label">Food Item Name</label>
                <input type="text" class="form-control" id="food_item_name" name="food_item_name" aria-describedby="image_url">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Food Item Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url" aria-describedby="image_url">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

