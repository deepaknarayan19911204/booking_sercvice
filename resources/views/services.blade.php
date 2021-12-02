@include('master.horizontal-head')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper pt-0">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Services</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Service details</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- row -->
                @include('master.horizontal-curosal')
                <!-- End row -->
                <div class="alert alert-info" role="alert">
                    These are your upcomming services. you could scan your customers QR code before service to check-in,
                    or scan QR code to generate invoice for payments.
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-b-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/requests')}}" role=""><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Requests</span></a> </li>
                                <li class="nav-item"> <a class="nav-link active"  href="{{url('/services')}}" role=""><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Services</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/payments')}}" role=""><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Payments</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                        
                                        <div class="row">
                    <div class="col-12">
                        <div class="">
                            @foreach ($requestorders as $order)
                                <div class="card card-body wizard-content">
                                    <h4 class="card-title">Upcomming service</h4>
                                    <form action="{{ route('servicesupdate') }}" method="POST" enctype="multipart/form-data" class="tab-wizard wizard-circle">
                                        @csrf
                                        <input type="hidden" name="servicerequestid" value="{{$order->servicerequestid}}" />
                                        <!-- Step 1 -->
                                        <h6>Request</h6>
                                        <section>
                                        </section>
                                        <!-- Step 2 -->
                                        <h6>Service</h6>
                                        <section>
                                        <div class="row">
                                                <div class="col-md-3 col-lg-2 text-center">
                                                    <a href="app-contact-detail.html"><img src="../{{ $order->profilepath }}" alt="user" class="img-circle img-responsive"></a>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <h3 class="box-title m-b-0">{{ $order->customername }}</h3><small>{{ $order->description }}</small>
                                                    <address>
                                                        {{ $order->caddress }}
                                                        <br/>
                                                        <br/>
                                                    </address>
                                                </div><br style="clear:left;"/><br />
                                                <div class="col-md-12 mt-5">
                                                    <h3 class=""><i>This customer available at:</i></h3>
                                                    @if ($order->cust_availability != "")
                                                        @foreach(explode('|', $order->cust_availability) as $info) 
                                                            <h3 class=""><i class="mdi mdi-av-timer"></i>{{$info}}</h3>
                                                    @endforeach
                                                    @endif
                                                    <h3 class=""><i class="mdi mdi-map-marker"></i>{{$order->actuallocation}}</h3>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Check in </button>
                                                    <button type="submit" class="btn waves-effect waves-light btn-primary">Generate Invoice</button>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 3 -->
                                        <h6>Payment</h6>
                                        <section>
                                        </section>
                                        <!-- Step 4 -->
                                        
                                    </form>
                                </div>
                            @endforeach
                            <p class="text-center"><i>No more service requests</i></p>
                        </div>
                    </div>
                </div>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
                                <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
                            </div>
                        </div>
                    </div>
                </div>
@include('master.horizontal-footer')
<script>
    $(document).ready(function() {
        $(".tab-wizard").each(function(e) {
            $(this).steps("next");
        });
    });
</script>