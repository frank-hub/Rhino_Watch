@extends('layouts.home_page')

@section('welcome')
<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign In</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form action="{{ route('user.signin')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Sign In</button>
            </form>
        </div>
    </div>
@endsection