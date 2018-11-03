<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Laravel') }}</title>
        
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <style>
body{
    overflow-x: hidden;
}
/* .zoom-effect-container {
    float: left;
    position: relative;
    width: 640px;
    height: 360px;
    margin: 0 auto;
    overflow: hidden;
} */
{{-- 
.image-card {
  position: absolute;
  top: 0;
  left: 0;
  
} --}}

.image-card img {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}

.zoom-effect-container:hover .image-card img {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
}

       </style>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-dark">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/rhino-watch.png')}}" style="height: 45px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Get Involved
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('donate')}}">Donate</a>
                        <a class="dropdown-item" href="#">Events</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('reach_us')}}">Reach Us</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav ml-auto h3">
                        <li class="nav-item" style="margin-right: 10px"><i class="fab fa-facebook"></i></li>
                        <li class="nav-item" style="margin-right: 10px"><i class="fab fa-twitter-square"></i></li>
                        <li class="nav-item" style="margin-right: 10px"><i class="fab fa-google-plus"></i></li>
                    </ul>
                </div>
                </nav>

            <div class="content">
                    @yield('welcome')
            </div>

       {{-- <footer>
           <div class="row">
               <div class="col-md-8">
                   <form action="" method="post">
                       <div class="form-group">
                           <input type="text" class="form-control">
                       </div>
                       <div class="form-group">
                           <input type="email" class="form-control">
                       </div>
                       <div class="form-group">
                           <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-block btn-dark">Get Newsletter</button>
                   </form>
               </div>
           </div>
       </footer> --}}

       <div class="bg-dark text-white">
           <div class="row">
              
                    <div class="col-sm-12 col-md-7 d-flex p-0 pt-sm-1 pb-sm-2">
							<div class="col col-sm-2 pr-4 pl-0 d-none d-lg-block">
								<img class="container-fluid" src="{{asset('images/rhino-watch.png')}}" alt="Save The Rhino">
							</div>
							<div class="col-12 col-lg-10 px-0">
                            <div id="text-4" class="">			<div class="textwidget"><p>Save the Rhino, Unit 3, Coach House Mews, 217 Long Lane, London, SE1 4PR<br>
                                <span class="s1"><a href="tel:+4402073577474">+44 (0)20 7567 7474</a> |&nbsp;&nbsp;</span>
                                <a href="mailto:info@savetherhino.org">
                                    <span class="s1">info@rhinowatch.org</span></a></p>
                                <p class="p1"><span class="s1">For press enquiries &amp; images, please contact our Communications Manager on<br>
                                </span>
                                <span class="s1"><a href="tel:+4402073577474">+44 (0)20 7357 7474</a> or email&nbsp;</span>
                                <a href="mailto:press@savetherhino.org">
                                    <span class="s1">press@rhinowatch.org</span></a></p>
                                </div>
                            </div>
                            <!-- .footer-widget -->															</div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-6">
                                        <h3>QuickLinks</h3>
                                        <ul style="list-style-type: none">
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                        </ul>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <br>
                                        <ul style="list-style-type: none">
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                            <li><a href="http://">Link 1</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
           </div>
       </div>
       

    </body>
</html>
