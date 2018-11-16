@extends('layouts.home_page')

@section('welcome')
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
               <h1>CheckOut</h1>
               <h4>Your Total ${{$total}}</h4>
               <form action="{{route('checkout')}}" method="post">
                    
               </form>
             </div>
        </div>
        
@endsection