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
        
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="/css/bootstrap-reset.css" rel="stylesheet" type="text/css" media="all">

        <!--Animation css-->
        <link href="/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="/assets/ionicon/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all">

        <!-- Plugins css -->
      

    


        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="/css/helper.css" rel="stylesheet" type="text/css" media="all">
        
        

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
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h4 class="text-right"><img src="/img/logo2.png" alt="velonic"></h4>
                                        
                                    </div>
                                    <div class="pull-right">
                                        <img src="data:image/png;base64,{{base64_encode($barcode)}}"><br>
                                            <strong>{{$label}}</strong>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="pull-left m-t-30">
                                            <address>
                                              <strong>NYCE MEDIA.</strong><br>
                                              House 2457 Greenfields Estate Donholm.<br>
                                              Wood Avenue Court, Apartment A2, Hurlingham<br>
                                              <abbr title="Phone">P:</abbr> (+254) 793811460
                                              </address>
                                        </div>
                                        @foreach($clients as $client)
                                        <div class="pull-right m-t-30">
                                            <p><strong>Booking Date: </strong> {{$client->created_at}}</p>
                                            <p class="m-t-10"><strong>Booking Status:
                                                     @if($client->status==0)

                                                      @php $class='Pending'
                                                      @endphp
                                                      @php $badgeClass='warning'
                                                      @endphp
                                                      @elseif($client->status==1)
                                                      @php $class='Confirmed'
                                                      @endphp
                                                      @php $badgeClass='success'
                                                      
                                                      @endphp
                                                      @endif
                                                   
                                            <span class="label label-{{$badgeClass}}">{{$class}}</span></p>
                                            <p class="m-t-10"><strong>Booking ID: </strong> <u>{{$client->id}}</u></p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="m-h-50"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                          @foreach($clients as $client)
                                        <div class="table-responsive">
                                            <table class="table m-t-30">
                                                <thead>
                                                    <tr><th>S/N</th>
                                                    <th>Company</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Services</th>
                                                    <th>Location</th>
                                                    
                                                </tr></thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$client->company}}</td>
                                                        <td>{{$client->address}}</td>
                                                        <td>{{$client->email}}</td>
                                                        <td>{{$client->service}}</td>
                                                        <td>{{$client->location}}</td>

                                                    </tr>
                                            
                                                </tbody>
                                            </table>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row" style="border-radius: 0px;">
                                    
                                    <div class="col-md-3 col-md-offset-9">
                                        <p class="text-right"><b>Check-Out:</b></p>
                                         @if(!empty($client->mat))
                                        <p class="text-right"><b>Mat Ad:</b> {{$client->mat}}</p>
                                         @else
                                         <p class="text-right"><b>Mat Ad:</b>00</p>
                                         @endif
                                         @if(!empty($client->graffiti_mats))
                                        <p class="text-right"><b>Graffiti Branding</b>: {{$client->graffiti_mats}}</p>
                                            @else
                                         <p class="text-right"><b>Graffiti Branding:</b>00</p>
                                         @endif
                                         @if(!empty($client->wifi_mats))
                                        <p class="text-right"><b>Wifi Mats</b>: {{$client->wifi_mats}}</p>
                                            @else
                                         <p class="text-right"><b>Wifi Mats:</b>00</p>
                                         @endif
                                         @if(!empty($client->wifi_restaurants))
                                        <p class="text-right"><b>Wifi Restaurants</b>: {{$client->wifi_restaurants}}</p>
                                            @else
                                         <p class="text-right"><b>Wifi Restaurants:</b>00</p>
                                         @endif
                                        
                                        <hr>
                                        
                                    
                                       
                                    </div>
                                   
                                </div>
                                
                                  <div class="pull-left m-t-30">
                                            <address>
                                              <strong><i>This is a generated report from the system</i></strong><br>
                                              
                                              </address>
                                        </div>
                                <div class="hidden-print">
                                    <div class="pull-right">
                                        <a href='{{url("customerBookingReport/{$client->id}")}}' class="btn btn-inverse"><i class="fa fa-print"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


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
       




        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
       


        <!-- Custom Script -->
        <script src="js/jquery.app.js"></script>

        
       
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
    
    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:19:30 GMT -->
</html>

