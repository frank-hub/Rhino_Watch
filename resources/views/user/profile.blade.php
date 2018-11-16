@extends('layouts.home_page')

@section('welcome')
<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>User Profile</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            
        </div>
    </div>
@endsection