@extends('layouts.home_page')

@section('welcome')
    <div class="container" style="margin-top: 20px">
        <div class="text-center">
            <h4 class="" style="letter-spacing: 15px;">
                <span><hr style="width: 395px;"></span>
                Watch and Credit The Rhino
                <span><hr style="width: 395px;"></span>
            </h4>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @foreach ($donates->chunk(3) as $donateChunk)
        <div class="row">
            @foreach ($donateChunk as $donate)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$donate->imagePath}}" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>{{$donate->title}}</h3>
                        <p class="description">
                            {{$donate->description}}
                        </p>
                        <div class="clearfix">
                            <div class="pull-left price">$ {{$donate->amount}}</div>
                            <a href="{{route('donate.addToCart',['id'=> $donate->id ])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    
@endsection
    