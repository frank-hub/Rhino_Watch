@extends('layouts.home_page')

@section('welcome')
    @if (Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($donates as $donate)
                        <li class="list-group-item">
                            <span class="badge">{{ $donate['qty']}}</span>
                            <strong>{{$donate['item']['title']}}</strong>
                            <span class="label label-success">{{$donate['amount']}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle"
                                data-toggle="dropdown">Action<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Reduce by 1</a></li>
                                    <li><a href="">Reduce All</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <strong>Total : {{ $totalAmount }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <h2>No Item in Cart</h2>
        </div>
    </div>
    @endif
@endsection
