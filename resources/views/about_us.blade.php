@extends('layouts.home_page')

@section('welcome')
    <div class="thumbnail">
        <img src="{{asset('images/slide_2.jpeg')}}"  style="height: 250px" width="100%" alt="">
    </div>
    <section class="container">
            <div class="text-center">
                <h4 class="" style="letter-spacing: 15px;">
                    <span><hr style="width: 395px;"></span>
                    The Team
                    <span><hr style="width: 395px;"></span>
                </h4>
            </div>
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                        <img src="{{asset('images/img1.png')}}" class="img-fluid" style="height: 250px" alt="">
                    </div>
                </div>
                <div class="card-body">
                    Content Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consectetur esse animi excepturi porro quidem, beatae neque aperiam,
                     iste sequi, ut veniam!
                     Ut sapiente repellat recusandae adipisci modi? Nemo, placeat quaerat?
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                        <img src="{{asset('images/img1.png')}}" class="img-fluid" style="height: 250px" alt="">
                    </div>
                </div>
                <div class="card-body">
                    Content Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consectetur esse animi excepturi porro quidem, beatae neque aperiam,
                        iste sequi, ut veniam!
                        Ut sapiente repellat recusandae adipisci modi? Nemo, placeat quaerat?
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                        <img src="{{asset('images/img1.png')}}" class="img-fluid" style="height: 250px" alt="">
                    </div>
                </div>
                <div class="card-body">
                    Content Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consectetur esse animi excepturi porro quidem, beatae neque aperiam,
                        iste sequi, ut veniam!
                        Ut sapiente repellat recusandae adipisci modi? Nemo, placeat quaerat?
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                        <img src="{{asset('images/img1.png')}}" class="img-fluid" style="height: 250px" alt="">
                    </div>
                </div>
                <div class="card-body">
                    Content Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consectetur esse animi excepturi porro quidem, beatae neque aperiam,
                        iste sequi, ut veniam!
                        Ut sapiente repellat recusandae adipisci modi? Nemo, placeat quaerat?
                </div>
            </div>
        </div>
    </section>
@endsection