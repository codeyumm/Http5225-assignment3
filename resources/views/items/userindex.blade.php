@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Items
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach($items as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card text-center mx-auto mt-3 p-0 glassmorphism mt-4" style="width: 18rem;">
                    <div class="card-header p-0">
                        <img src="{{ $item->image_url }}" alt="image" class="img-fluid" style="max-height: 120px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->food_item_name }}</h5>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-dark">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
