@extends('layouts.home_page')

@section('welcome')
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
               <h1>CheckOut</h1>
               <h4>Your Total ${{$total}}</h4>
               <form action="{{route('checkout')}}" method="post">
                    
               </form>
             </div>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">

				   <input type="hidden" name="business" value="{{$paypal_id}}">

				   <input type="hidden" name="cmd" value="_xclick">

				    <input type="hidden" name="item_name" value="{{$product->name}}">

				   <input type="hidden" name="item_number" value="{{$product->id}}">

				   <input type="hidden" name="amount" value="{{$product->price}}">   

				   <input type="hidden" name="currency_code" value="USD">   

				   <input type="hidden" name="cancel_return" value="http://demo.expertphp.in/payment-cancel">

				   <input type="hidden" name="return" value="http://demo.expertphp.in/payment-status">

				</form>

				<script>document.frmTransaction.submit();</script>
        </div>
        
@endsection