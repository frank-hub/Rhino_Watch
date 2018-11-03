@extends('layouts.home_page')

@section('welcome')
    <div class="container" style="margin-top: 20px">
        <div class="text-center">
            <h4 class="" style="letter-spacing: 15px;">
                <span><hr style="width: 395px;"></span>
                    Reach To The Rhinos
                <span><hr style="width: 395px;"></span>
            </h4>
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="card bg-dark">
                <div class="card-body">
                    <form action="" method="post">
                       <div class="form-group">
                        <input type="text" class="form-control" required="" placeholder="Full Name">
                       </div>
                       <div class="form-group">
                        <input type="email" class="form-control" required placeholder="Email Address">
                       </div>
                       <div class="form-group">
                           <textarea class="form-control" required placeholder="Message" name="" id="" cols="30" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                        <button class="btn btn-outline" type="reset">Clear</button>
                        <button class="btn btn-outline float-right" type="submit">Submit</button>                           
                       </div>
                    </form>
                </div>
               </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
@endsection