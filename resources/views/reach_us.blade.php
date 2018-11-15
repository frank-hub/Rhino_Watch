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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-6" >
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
            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-globe-africa" style="font-size: 45px"></i></div>
                                <div>
                                    Unit 3, Coach House Mews, 217 Long Lane, London, SE1 4PR
                                </div>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-envelope" style="font-size: 45px"></i></div>
                                <div>
                                 Send as a mail<br>
                                 info@savetherhino.org
                                </div>
                             </p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-phone" style="font-size: 45px"></i></div>
                                <div>
                                 Make a call to :<br>
                                 +44 (0)20 7357 7474
                                </div>
                             </p>
                        </div>
                    </div>
                    <p>
                        We always love to hear from our rhino supporters.
                        We are here to help and we’ll do our best to 
                        accommodate your enquiry.
                    </p>
            </div>
        </div>
    </div>
@endsection