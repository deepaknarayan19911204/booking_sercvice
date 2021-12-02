<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Services</h4>
                                        <div class="owl-carousel owl-theme">
                                        @foreach ($allservice as $alldetails)
                                           
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6"> 
                                                            <img class="d-block img-responsive" src="{{asset($alldetails->imagepath)}}" alt="First slide">
                                                        </div>
                                                        <div class="col-lg-6"> 
                                                        <h3 class="text-black">{{$alldetails->servicename}}</h3>
                                                        <i class="text-black">{{$alldetails->description}}</i><br />
                                                        <i class="text-black">price : {{$alldetails->price}}</i>
                                                        </div>
                                                    </div>
                                                    
                                              
                                                </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Services</h4>
                                        
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="d-block img-responsive" src="{{asset('assets/images/big/img6.jpg')}}" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Yoga and pilate training</h3>
                                                        <p>Training - Fitness</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-responsive" src="{{asset('assets/images/big/img3.jpg')}}" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Technical session</h3>
                                                        <p>Learning new technologies</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-responsive" src="{{asset('assets/images/big/img4.jpg')}}" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Online courses</h3>
                                                        <p>New courses launched</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->