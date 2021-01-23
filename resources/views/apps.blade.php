@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-group">
        @foreach($apps as $app)
        <div class="col-md-4">
            <div class="card-columns-fluid" style="width: 14rem;">
                <img src="{{ asset($app->image) }}" class="card-img-top"  width="160px" height="160px" alt="{{$app->app_name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$app->app_name}}</h5>
                    <p className="card-text">Rating: 5 <img className="starImage" src="http://pluspng.com/img-png/star-hd-png-star-png-image-yildiz-png-3580.png" width="25" height="25" alt="Star HD PNG"/></p>
                    <a href="#" class="btn btn-primary">Add to cart for ${{$app->price}}</a>
                    <input type="hidden" name="app_id" value="{{$app->app_id}}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection