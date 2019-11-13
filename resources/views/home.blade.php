<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:18:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/nyce.png">

        <title>Booking Dashboard: Nyce Media</title>

        


        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!-- Plugins css -->
        <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet" />
        <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    


        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        
        

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
                            <div class="panel-heading">
                                <h3 class="panel-title">Clients Booking Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Service</th>
                                                    <th>Booked Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>

                                     
                                            <tbody>
                                                @foreach($bookings as $booking)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                 
                                                    <td>{{$booking->company}}</td>
                                                    <td>{{$booking->email}}</td>
                                                    <td>{{$booking->address}}</td>
                                                    <td>{{$booking->service}}</td>
                                                    <td>{{$booking->created_at}}</td>
                                                    <td>
                                                      @if($booking->status==0)

                                                      @php $class='Pending'
                                                      @endphp
                                                      @php $badgeClass='warning'
                                                      @endphp
                                                      @elseif($booking->status==1)
                                                      @php $class='Confirmed'
                                                      @endphp
                                                      @php $badgeClass='success'
                                                      
                                                      @endphp
                                                      @endif
                                                   
                                                    <span class="label label-{{$badgeClass}}">{{$class}}</span>
                                                    </td>
                                                       <td class="actions">
                                                 
                                                    <a  href='{{url("home/{$booking->id}")}}'><span class="btn btn-icon btn-primary m-b-5" data-toggle="modal" data-target="#con-close-modal"> <i class="ion-eye"></i> </span></a>
                                                      <a  href='{{url("editcustomer/{$booking->id}")}}'><span class="btn btn-icon btn-info m-b-5"> <i class="ion-edit"></i> </span>
                                                </td>
                                                   

                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
        <script src="js/sweetalert.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

        <!-- Counter-up -->
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- skycons -->
        <script src="js/skycons.min.js" type="text/javascript"></script>


        <!--wizard initialization-->
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap.js"></script>




        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/jquery-knob/jquery.knob.js"></script>

        <!-- owl-carousel --> 
        <script src="assets/owl-carousel/owl.carousel.js"></script>


        <!-- Custom Script -->
        <script src="js/jquery.app.js"></script>

        
       
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

