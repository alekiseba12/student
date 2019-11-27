<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:18:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="/img/nyce.png">

        <title>Booking Dashboard: Nyce Media</title>

        


        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!-- Plugins css -->
        <link href="/assets/owl-carousel/owl.carousel.css" rel="stylesheet" />
        <link href="/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    


        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/helper.css" rel="stylesheet">
        
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>
        <section class="content">
            <div class="wraper container">
                
                <br><br>

             <div class="row">


                    <div class="col-md-12">
                        <div class="panel panel-default text-center text-white slider-bg">
                            <div class="slider-overlay br-radius"></div>
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider-2" class="owl-carousel">
                                        <div class="item">
                                            <h4 class="text-white"><b> MAT AD</b></h4>
                                            <p class="small">Nyce Media</p>
                                            <p class="m-t-30"><em>Nyce Media is a solid based on the foundation of numbers, we offer the best way to reach your target audience.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4 class="text-white"><b>GRAFFITI BRANDING</b></h4>
                                            <p class="small">Nyce Media</p>
                                            <p class="m-t-30"><em>We design artistic graphics that transforms our matatus into moving billboards that connect with your customers in a way that no other marketing medium can.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4 class="text-white"><b>NYCE WIFI</b></h4>
                                            <p class="small">Nyce Media</p>
                                            <p class="m-t-30"><em>Nyce Media is a solid based on the foundation of numbers, we offer the best way to reach your target audience.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div><!-- /.item -->
                                    </div><!-- /#tiles-slide-2 -->
                                </div>
                            </div> <!-- panel-body -->
                        </div><!-- Panel -->
                    </div> <!-- col-->

                </div>

                <!-- End row -->
                  <div class="row">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Edit Customer Details</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{url('updateclient',array($bookings->id))}}" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="company" class="col-lg-4 control-label">Company</label>
                                        
                                        <input type="text" name="company" class="form-control" id="admin no" placeholder="Company Name" value="{{$bookings->company}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address" class="col-lg-4 control-label">Address</label>
                                        
                                        <input type="text" name="address" class="form-control" id="admin no" placeholder="Company Address" value="{{$bookings->address}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email" class="col-lg-4 control-label">Email</label>
                                        
                                        <input type="text" name="email" class="form-control" id="admin no" placeholder="Email Address" value="{{$bookings->email}}">
                                    </div>
                                       
                                  
                                </div>
                                        <div class="row">
                                              <div class="col-lg-8">
                                                <label for="marks" class="col-lg-4 control-label">Services</label>
                                                <select class="form-control" placeholder="Choose the matatus" name="service">
                                                       
                                                        <option value="{{$bookings->service}}">{{$bookings->service}}</option>
                                                        <option value="Mat Ad">Mat Ad</option>
                                                        <option value="Graffiti Branding">Graffiti Branding</option>
                                                        <option value="Nyce Wifi">Nyce Wifi</option>
                                                        
                                                        
                                                        
                                                    </select>
                                            </div>
                                      <div class="form-group col-md-4">
                                        <label for="marks" class="col-lg-4 control-label">Mat Ad</label>
                                          <select class="form-control" placeholder="Choose the matatus" name="mat">
                                                       
                                                        <option value="{{$bookings->mat}}">{{$bookings->mat}}</option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                        
                                                        
                                                    </select>
                                    </div>
                                        <div class="form-group col-md-4">
                                        <label for="Remraks" class="col-lg-6control-label">Graffiti Branding</label>
                                           <select class="form-control" placeholder="Choose the graffiti branding mats" name="graffiti_mats">
                                                       
                                                        <option value="{{$bookings->graffiti_mats}}">{{$bookings->graffiti_mats}}</option>
                                                        <option value="1-30">1-30</option>
                                                        <option value="30-500">30-500</option>
                                                        
                                                        
                                                    </select>
                                    </div>
                                    
                                  
                                </div>
                                <div class="row">
                                                <div class="form-group col-md-4">
                                        <label for="Subject" class="col-lg-4 control-label">Nyce Wifi</label>
                                           <select class="form-control" placeholder="Choose Nyce Wifi Mats" name="wifi_mats">
                                             <option value="{{$bookings->wifi_mats}}">{{$bookings->wifi_mats}}</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                       
                                                    </select>
                                    </div>
                                  
                                        <div class="form-group col-md-4">
                                        <label for="Remraks" class="col-lg-6control-label">Nyce Wif Restaurants</label>
                                           <select class="form-control" placeholder="Choose the graffiti branding mats" name="wifi_restaurants">
                                                       
                                                        <option value="{{$bookings->wifi_restaurants}}">{{$bookings->wifi_restaurants}}</option>
                                                        <option value="91-162">91-162</option>
                                                        <option value="71-90">71-90</option>
                                                        <option value="1-70">1-70</option>
                                                        
                                                        
                                                    </select>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <label for="address" class="col-lg-4 control-label">Location</label>
                                        
                                        <input type="text" name="location" class="form-control" id="admin no" placeholder="Location" value="{{$bookings->location}}">
                                    </div>
                                    
                                  
                                </div>
                                  <div class="row">
                                   
                                     <div class="form-group col-md-4">
                                        <label for="address" class="col-lg-4 control-label">Status</label>
                                        
                                          <select class="form-control" placeholder="Choose the status" name="status">
                                                       
                                                        <option value="{{$bookings->status}}">{{$bookings->status}}</option>
                                                        <option value="0">Pending</option>
                                                        <option value="1">Confirmed</option>
                                                        <option value="2">Cancelled</option>
                                                        
                                                        
                                                    </select>

                                    </div>
                                    
                                  
                                </div>
                                   
                                      

                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->
                    
                    
                </div> <!-- End Row -->


            </div> <!-- END Wraper -->

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2019 © Nyce Media | Booking.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->



    




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/js/sweetalert.min.js"></script>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/pace.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>

        <!-- Counter-up -->
        <script src="/js/waypoints.min.js" type="text/javascript"></script>
        <script src="/js/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- skycons -->
        <script src="/js/skycons.min.js" type="text/javascript"></script>


        <!--wizard initialization-->
        <script src="/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/datatables/dataTables.bootstrap.js"></script>




        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="/assets/jquery-knob/jquery.knob.js"></script>

        <!-- owl-carousel --> 
        <script src="/assets/owl-carousel/owl.carousel.js"></script>


        <!-- Custom Script -->
        <script src="/js/jquery.app.js"></script>

        
       
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                //owl carousel
                $("#velonic-slider,#velonic-slider-2").owlCarousel({
                    navigation : true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    autoPlay:true
                });
            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };
        </script>
    
    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:19:30 GMT -->
</html>

