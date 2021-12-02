                <!-- row -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
         
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © online test </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects 
    <script src="{{asset('js/waves.js')}}"></script>-->
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->

    <script src="{{asset('assets/owl/jquery.min.js')}}"></script>
    <script src="{{asset('assets/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <!--<script src="{{asset('assets/plugins/moment/min/moment.min.js')}}"></script>-->
    <script src="{{asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
     <!-- Sweet-Alert  -->
     <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/steps.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            navText : ["<",">"],
            responsiveClass:true,
            autoHeight:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                }
            }
        })

    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
</body>
</html>