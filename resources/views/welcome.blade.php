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
        <link rel="stylesheet" type="text/css" href="assets/form-wizard/jquery.steps.css" />
        <link href="/assets/modal-effect/css/component.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        

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
                    <div class="col-md-6">

                        <div class="panel panel-default text-center">
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider" class="owl-carousel">
                                        <div class="item">
                                            <h4><a href="#">GRAFFITI BRANDING</a></h4>
                                            <p class="small">Nyce Media</p>
                                            <br>
                                            <img src="img/3.png" alt="GRAFFITI BRANDING">
                                            
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4><a href="#">NYCE WIFI</a></h4>
                                            <p class="small">Nyce Media</p>
                                            <br>
                                            <img src="img/4.png" alt="NYCE WIFI">
                                            
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4><a href="#">MAT AD</a></h4>
                                            <p class="small">Nyce Media</p>
                                            <br>
                                            <img src="img/7.png" alt="NYCE WIFI">
                                            
                                        </div><!-- /.item -->

                                    </div><!-- /#tiles-slide-1 -->
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default text-center text-white slider-bg">
                            <div class="slider-overlay br-radius"></div>
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider-2" class="owl-carousel">
                                        <div class="item">
                                            <h4 class="text-white"><b>GRAFFITI BRANDING</b></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>We design artistic graphics that transforms our matatus into moving billboards that connect with your customers in a way that no other marketing medium can.</em></p>
                                            <a href="http://nycemedia.net/nyce-wifi/"><button class="btn btn-danger btn-sm m-t-40">Read More</button></a>
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4 class="text-white"><b>NYCE WIFI</b></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em> If you can’t share your brands smart people can’t do anything about them and your brand will remain anonymous.</em></p>
                                            <a href="http://nycemedia.net/mat-ad/"><button class="btn btn-danger btn-sm m-t-40">Read more</button></a>
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <h4 class="text-white"><b>MAT AD</b></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>Nyce Media is a solid based on the foundation of numbers, we offer the best way to reach your target audience. </em></p>
                                            <a href="http://nycemedia.net/graffiti-branding/"><button class="btn btn-danger btn-sm m-t-40">Read more</button></a>
                                        </div><!-- /.item -->
                                    </div><!-- /#tiles-slide-2 -->
                                </div>
                            </div> <!-- panel-body -->
                        </div><!-- Panel -->
                    </div> <!-- col-->

                </div>
                <!-- End row -->
                 <div class="row">
                    @if ($errors->any())
                  <div class="col-md-12 alert alert-danger">
                         <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                               </ul>
                                </div>
                            @endif
                        </div>
                        <div class="row">        
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">Booking Dashboard</h3> 
                            </div> 
                            <div class="panel-body"> 
                               <form action="{{route('storeclientbooking')}}" method="post" id="form">
                                    @csrf
                                <div id="wizard-vertical">
                                    <h3>COMPANY PROFILE</h3>
                                    <section>
                                        <div class="form">
                                            <label class="col-lg-2 control-label " for="userName1">COMPANY *</label>
                                            <div class="col-lg-4">
                                              <input class="form-control required" id="company" name="company" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password1"> ADDRESS *</label>
                                            <div class="col-lg-4">
                                              <input class="form-control required" id="address" name="address" type="text">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1">EMAIL *</label>
                                            <div class="col-lg-4">
                                              <input class="form-control required" id="email" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label ">(*) Mandatory</label>
                                        </div>
                                    </section>
                                    <h3>SERVICES</h3>
                                    <section>
                                        <div class="form">

                                            <label class="col-lg-4 control-label" for="name1"> SELECT SERVICE </label>
                                            <div class="col-lg-9">
                                                
                                            <div class="checkbox">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="service[]" value="mat ad">
                                                    <i class="fa"></i> 
                                                    MAT AD
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="service[]" value="graffiti">
                                                    <i class="fa"></i> 
                                                    GRAFFITI BRANDING
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label class="cr-styled">
                                                    <input type="checkbox"  name="service[]" value="nyce wifi">
                                                    <i class="fa"></i> 
                                                    NYCE WIFI
                                                </label>
                                            </div>
                                    
                                            </div>
                                        </div>
                                     
                                            <br>
                                      

                                    </section>
                                    <h3>MAT AD</h3>
                                    <section>
                                        <div class="form">

                                          <div class="text pull-center">
                                                <u><h5>WEEKLY COST FOR ADS</h5></u>
                                                <a href="javascript:;" class="md-trigger btn btn-primary btn-xs" data-modal="modal-11">Check Here
                                                  </a>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label " for="surname1"> PICK MATS</label>
                                            <div class="col-lg-9">
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="mat" value="100">
                                                    <i class="fa"></i> 
                                                    100
                                                </label>
                                            </div>

                                            <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="mat" value="200">
                                                    <i class="fa"></i> 
                                                    200
                                                </label>
                                            </div>

                                            <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="mat" value="300">
                                                    <i class="fa"></i> 
                                                   300
                                                </label>
                                            </div>
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="mat" value="400">
                                                    <i class="fa"></i> 
                                                   400
                                                </label>
                                            </div>
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="mat" value="500">
                                                    <i class="fa"></i> 
                                                   500
                                                </label>
                                            </div>

                                            </div>
                                        </div>
                                    </section>
                                    <h3>GRAFFITI BRANDING</h3>
                                    <section>
                                        <div class="form">

                                            <div class="text pull-center">
                                                <u><h5>GRAFFITI BRANDING PACKAGE</h5></u>
                                                <a href="javascript:;" class="md-trigger btn btn-primary btn-xs" data-modal="modal-12">Check Here
                                                  </a>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label " for="surname1"> GRAFFITI BRANDING MATS</label>
                                            <div class="col-lg-6">
                                                <select id="location" name="graffiti_mats" type="text" class="required form-control">
                                                    <option value="">SELECT GRAFFITI MATS</option>
                                                    <option value="1-30">1-30</option>
                                                    <option value="30-500">30-500</option>
                                                </select>

                                            </div>
                                        </div>
                                  
                                    </section>
                                    <h3>NYCE WIFI</h3>
                                      <section>
                                        
                                        <div class="form">
                                          <div class="form">

                                            <div class="text pull-center">
                                                <u><h5>NYCE WIFI RATE CARD WEEKLY COST</h5></u>
                                                <a href="javascript:;" class="md-trigger btn btn-primary btn-xs" data-modal="modal-13">Check Here
                                                  </a>
                                                
                                            </div>
                                        </div>
                                        </div>
                                         <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label " for="surname1"> PICK MATS</label>
                                            <div class="col-lg-9">

                                            <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="wifi_mats" value="300">
                                                    <i class="fa"></i> 
                                                   300
                                                </label>
                                            </div>
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="wifi_mats" value="400">
                                                    <i class="fa"></i> 
                                                   400
                                                </label>
                                            </div>
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="wifi_mats" value="500">
                                                    <i class="fa"></i> 
                                                   500
                                                </label>
                                            </div>

                                            </div>
                                        </div>
                                   

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="address1">RESTAURANTS</label>
                                            <div class="col-lg-4">
                                                <select id="address1" name="wifi_restaurants" type="text" class="form-control">
                                                    <option value="">SELECT RESTAURANT</option>
                                                    <option value="91-162">91-162</option>
                                                    <option value="71-90">71-90</option>
                                                    <option value="1-70">1-70</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                     
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <div class="text pull-center">
                                                <u><h5>THE ROUTES FOR MAT AD</h5></u>
                                               <a href="javascript:;" class="md-trigger btn btn-primary btn-xs  m-b-5"  data-toggle="modal" data-target="#accordion-modal">CHECK ROUTES
                                                  </a>
                                                
                                            </div>
                                          <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label " for="surname1"> SELECT THE LOCATION</label>
                                            <div class="col-lg-9">
                                             <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="location" value="Nairobi">
                                                    <i class="fa"></i> 
                                                    NAIROBI
                                                </label>
                                            </div>

                                            <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="location" value="Outside Nairobi">
                                                    <i class="fa"></i> 
                                                    OUTSIDE NAIROBI
                                                </label>
                                            </div>

                                            <div class="checkbox-inline">
                                                <label class="cr-styled">
                                                    <input type="checkbox" name="location" value="Combined">
                                                    <i class="fa"></i> 
                                                   COMBINED
                                                </label>

                                            </div>

                                          

                                            </div>

                                        </div>
                                         
                                        <div class="form-group clearfix">
                                           
                                        </div>
                                      <div class="form-group pull-center">
                                         <div class="col-lg-12">
                                     <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                  </div>
                                 </section>
                                </div> 
                              
                            </form>
                                <div class="md-modal md-effect-11" id="modal-11">
                                <div class="md-content">
                                    <h3>Nyce Media: MAT AD RATE CARD</h3>
                                    <div>
                                        <p>This is a Rate cards window. You can choose from the following range:</p>
                                        <u><p><strong>Ksh 800 for 1 Ad for I spot: (PEAK HOURS)</strong></p></u>
                                        <u><p><strong>Ksh 600 for 1 Ad for I spot: (OFF PEAK HOURS)</strong></p></u>
                                        <ul>
                                                    <li><strong>500 Mats:</strong> 1 Ad for 7 days.
                                                        <ul>
                                                        <li>Ksh 400,000: Peak Hours</li>
                                                        <li>Ksh 300,000: Off Peak Hours</li>
                                                    </ul>
                                                    </li>
                                                     <li><strong>400 Mats:</strong> 1 Ad for 7 days.
                                                        <ul>
                                                        <li>Ksh 320,000: Peak Hours</li>
                                                        <li>Ksh 240,000: Off Peak Hours</li>
                                                    </ul>
                                                    </li>
                                                     <li><strong>300 Mats:</strong> 1 Ad for 7 days.
                                                        <ul>
                                                        <li>Ksh 240,000: Peak Hours</li>
                                                        <li>Ksh 180,000: Off Peak Hours</li>
                                                    </ul>
                                                    </li>
                                                     <li><strong>200 Mats:</strong> 1 Ad for 7 days.
                                                        <ul>
                                                        <li>Ksh 160,000: Peak Hours</li>
                                                        <li>Ksh 120,000: Off Peak Hours</li>
                                                    </ul>
                                                    </li>
                                                     <li><strong>100 Mats:</strong> 1 Ad for 7 days.
                                                        <ul>
                                                        <li>Ksh 80,000: Peak Hours</li>
                                                        <li>Ksh 60,000: Off Peak Hours</li>
                                                    </ul>
                                                    </li>
                                                    
                                                </ul>
                                        <button class="md-close btn-sm btn-success">Close</button>
                                    </div>
                                </div>
                            </div> 
                            <div class="md-modal md-effect-11" id="modal-12">
                                <div class="md-content">
                                    <h3>Nyce Media: BRANDING PACKAGE</h3>
                                    <div>
                                        <p>This is a Branding Package window. You can choose from the following range:</p>
                                       
                                        <ul>
                                                    <u><p><strong>Ksh 800 for 1 Ad for I spot: (PEAK HOURS)</strong></p></u>
                                                    <li><strong>1-30 Mats:</strong>.
                                                        <ul>
                                                        <li>Ksh 100,000 :<strong>Per Mat</strong></li>
                                                        
                                                    </ul>
                                                    </li>
                                                     <li><strong>30 and Above Mats:</strong>.
                                                        <ul>
                                                        <li>Ksh 70,000:  <strong>Per Mat:</strong></li>
                                                        
                                                    </ul>
                                                    </li>  
                                                </ul>
                                        <button class="md-close btn-sm btn-success">Close</button>
                                    </div>
                                </div>
                            </div>
                              <div class="md-modal md-effect-11" id="modal-13">
                                <div class="md-content">
                                    <h3>Nyce Media: WI-FI RATE CARD</h3>
                                    <div>
                                        <p>This is a Nyce Wi-Fi window. You can choose from the following range:</p>
                                        <u><p><strong>MATS</p></u></strong>
                                          <u><p><strong>KSH 300 per mat per spot:</strong></p></u>
                                        <ul>
                                            <li><strong>500 Mats: </strong> Ksh 150,000</li>
                                            <li><strong>400 Mats: </strong> Ksh 120,000 .</li>
                                            <li><strong>300 Mats:</strong> Ksh 90,000.</li>       
                                                </ul>
                                                <hr>
                                             <u><p><strong>RESTAURANTS</p></u></strong>
                                             <ul>
                                            <li><strong>91-162: </strong> Ksh 15,000 per restaurant.</li>
                                            <li><strong>71-90: </strong> Ksh 20,000.</li>
                                            <li><strong>1-70:</strong>  Ksh 25,000.</li>
                                        </ul>
                                        <button class="md-close btn-sm btn-success">Close</button>
                                    </div>
                                </div>
                            </div>
                             <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0">
                                            <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                <div class="panel panel-default"> 
                                                    <div class="panel-heading"> 
                                                        <h4 class="panel-title"> 
                                                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                NAIROBI ROUTES 
                                                            </a> 
                                                        </h4> 
                                                    </div> 
                                                    <div id="collapseOne" class="panel-collapse collapse"> 
                                                        <div class="panel-body">
                                                             <u><p><strong>NGONG ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Valley Road, Hurling ham, Nairobi Women’s, Yaya, Lavington, James Gichuru, Amboseli Road, Braeburn, Kawangware.<br>
                                            <li><strong>ROUTE 2: </strong> Haile Selassie, KNH, Ngong Road, Junction, Kawangware, Satelite.<br>
                                            <li><strong>ROUTE 3: </strong>CBD, Haile Sellasie, NHIF, Upper Hill, KNH, Ngong Road (Jamhuri Estate), Junction, Dagoretti Corner, Karen, Ngong, Kiserian<br>
                                            <li><strong>ROUTE 4: </strong>CBD, Haile Sellasie, Nyayo Stadium, Madaraka, Lang’ata road, Bomas, Mamba, Bogani, Hardi, Co-operative, Karen<br>
                                            <li><strong>ROUTE 5: </strong> CBD, Yaya Center, Hurlingham, Kilimani, Lavington, James Gichuru, Amboseli, Kawangware.
                                            </li>
                                                </ul>
                                        <u><p><strong>LANG'ATA ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Madaraka, Langata Road, Bomas, Rongai.<br>
                                            <li><strong>ROUTE 2: </strong> CBD, Lang’ata road, T-mall, Highrise, Kibera, Mbagathi Way, KNH, Ngong Road.<br>
                                            </li>
                                                </ul>
                                        <u><p><strong>THIKA ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Thika Road, Ngara, Pumwani,Juja road, Eastleigh.<br>
                                            <li><strong>ROUTE 2: </strong>CBD, Thika Road, KCA, Huruma, Kariobangi, Dandora.<br>
                                            <li><strong>ROUTE 3: </strong>CBD, Juja Road, Dandora.<br>
                                            <li><strong>ROUTE 4: </strong>CBD, Thika Super Highway, Roysambu, Githurai 44, Githurai 45.<br>
                                            <li><strong>ROUTE 5: </strong> CBD, Thika Road, Githurai, Wendani, Ruiru, Juja, Waitethie, Gatitu, Thika, Makongeni.<br>
                                            <li><strong>ROUTE 4: </strong>CBD, Thika road,TRM, Roysambu, Zimmerman, Mirema, Githurai 44, Kahawa west.<br>
                                            <li><strong>ROUTE 4: </strong>CBD, Ngara, Muthaiga, Survey, Alllsopes, Safari park, Kasarani, Hunters, Sunton, Mwiki.
                                            </li>
                                                </ul>
                                        <u><p><strong>LIMURU ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>Ruaka - CBD, Limuru Road, Parklands, UNEP, Village Market, Runda, Two Rivers, Ruaka, Denderu.<br>
                                            <li><strong>ROUTE 2: </strong> CBD, Thika Road, Kiambu Road, Bypass, Ruaka, Denderu, Karura.
                                                </ul>
                                        <u><p><strong>MOMBASA ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Uhuru Highway, Nyayo Stadium, Msa Road, Cabanas, Syokimau, Mlolongo, Athi River, Kitengela.<br>
                                            <li><strong>ROUTE 2: </strong>CBD, Uhuru Highway, Mombasa Road, Cabanas, North Airport Road, Southern Bypass, Utawala, Ruai.<br>
                                            <li><strong>ROUTE 3: </strong>CBD, Mombasa road, South B & C.
                                            </li>
                                                </ul>
                                        <u><p><strong>KIAMBU ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Thika Road, Runda, Kiambu Road, Ridgeways, Bypass, Thindigua, Kiambu Town.
                                            </li>
                                                </ul>
                                        <u><p><strong>WAIYAKI ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>Wangige – CBD, Waiyaki Way, Westlands, Kabete road, School Government, UON Kabete, Kabete, Wangige.<br>
                                            <li><strong>ROUTE 2: </strong>CBD, Waiyaki Way, Westlands, Kangemi, Kinoo
                                            </li>
                                                </ul>
                                        <u><p><strong>JUJA ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Thika Road, Ngara, Pumwani,Juja road, Eastleigh.<br>
                                            <li><strong>ROUTE 2: </strong>CBD, Ngara, Juja Road, Eastleigh, Huruma.<br>
                                            <li><strong>ROUTE 3: </strong>CBD, Thika Road, Juja Road, Allsopes, Baba Dogo.
                                            </li>
                                                </ul>
                                        <u><p><strong>JOGOO ROAD</p></u></strong>
                                        <ul>
                                            <li><strong>ROUTE 1: </strong>CBD, Jogoo Road, Donholm, Umoja.<br>
                                            <li><strong>ROUTE 2: </strong>CBD, Jogoo Road, Donholm, Umoja, kayole.<br>
                                            <li><strong>ROUTE 3: </strong>CBD, Jogoo Road, Donholm, Komarocks, Kangundo road.<br>
                                            <li><strong>ROUTE 4: </strong>CBD, Uhuru Highway, Nyayo Stadium, Msa Road, Cabanas, Rounda, Embakasi, Pipeline, Fedha, Avenue Park 1 and 2, Donholm, Jogoo Road
                                            </li>
                                                </ul>
                                                        </div> 
                                                    </div> 
                                                </div> 
                                                <div class="panel panel-default"> 
                                                    <div class="panel-heading"> 
                                                        <h4 class="panel-title"> 
                                                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                               OUTSIDE NAIROBI ROUTES 
                                                            </a> 
                                                        </h4> 
                                                    </div> 
                                                    <div id="collapseTwo" class="panel-collapse collapse in"> 
                                                        <div class="panel-body">
                                        <u><p><strong>ELDORET TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>UGANDA ROAD: </strong>Subaru, Jerusalem, hawai, peris, Kisumu, junction, chebisas, chepkoilel, sogomo.<br>
                                            <li><strong>KAPSABET ROAD: </strong> CBD, brookside, sosiani, televise,polytechnic, elgonview, hospital.<br>
                                            <li><strong>KENYATTA STREET: </strong>CBD pauls bakery, Caltex, pilot.<br>
                                            <li><strong>ELDORET NAKURU HIGHWAY: </strong>CBD,poa place,cheptiret,iten,salgaa ,nakuru.<br>
                                            <li><strong>UNIVERSITY WAY: </strong> Subaru, Jerusalem, hawai, peris, Kisumu, junction, chebisas, chepkoilel, sogomo.
                                            </li>
                                                </ul>
                                        <u><p><strong>MOMBASA COUNTY</p></u></strong>
                                        <ul>
                                            <li><strong>DONGOKUNDU BYPASS: </strong>Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu, Mtwapa.<br>
                                            <li><strong>JOMO KENYATTA AVENUE: </strong> Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu, Mtwapa.<br>
                                            <li><strong>MOI AVENUE: </strong>Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu<br>
                                            <li><strong>MOMBASA GARRISA ROAD: </strong>Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu.<br>
                                            <li><strong>MAKUPA COURSE WAY: </strong> Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu.<br>
                                            <li><strong>BAGAMOYO HIGHWAY: </strong> Mombasa CBD, Buxtan, Nyali Bridge, Light, Bombolulu, City Mall, Nyali, Bamburi Mtambo, Pirates, Bamburi Beach, Shanzu.
                                            </li>
                                                </ul>
                                        <u><p><strong>MERU COUNTY</p></u></strong>
                                        <ul>
                                            <li><strong>MIKINDURI ROAD: </strong>CBD, Makuyu, Thika, Ruiru, Nairobi.<br>
                                            <li><strong>GITHONGI ROAD: </strong>CBD, Timau, Nanyuki.<br>
                                            <li><strong>ISIOLO ROAD: </strong>CBD, Isiolo, Magado.<br>
                                            <li><strong>MOYALE ROAD: </strong>CBD, Isiolo, Magado,Moyale.<br>
                                            </li>
                                                </ul>
                                        <u><p><strong>KISII TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>NYATIEKO ROAD: </strong>CBD, nyabera,nyandisi,nyangoso,nyamira,nyangusu.<br>
                                            <li><strong>KILGORIS ROAD: </strong>CBD,riana,riondonga,zacharia,musa.<br>
                                            <li><strong>KEROKA ROAD: </strong>CBD,gors,kisii town,bomburia,kisii university,KMTC Kisii.<br>
                                            <li><strong>KISII KISUMU ROAD: </strong>CBD,kisii county government,Nyakoe, Ruga Market, Kotieno Awuor Road, Oyugis Post Office.<br>
                                            <li><strong>MIGORI ROAD: </strong> CBD, Suneka, Tabaka, Rongo, Kabola, Sare, Dianga, Stela, Migori.
                                            </li>
                                                </ul>
                                        <u><p><strong>KISUMU COUNTY</p></u></strong>
                                        <ul>
                                            <li><strong>AHERO ROAD: </strong>CBD, Ahero, Homabay, Kendubay, Katito.<br>
                                            <li><strong>BONDO/SIAYA ROAD: </strong> CBD, Kibuye, Kondele, Mamboleo, Kisian,Akala, Ndori,Bondo,Nyawita, Siaya.<br>
                                            <li><strong>KAKAMEGA ROAD: </strong>CBD, maseno, Luanda, Kakamega<br>
                                            <li><strong>KERICHO ROAD: </strong>CBD, Nakumatt mega, Ahero,Awasi,Kaitui,Kapsoit,Kericho.<br>
                                            <li><strong>OYUGIS ROAD: </strong> CBD, Ahero, Awach,Nyabondo, Sondu, Kadogoo, Ringa, Oyugis.<br>
                                            <li><strong>YALA ROAD: </strong>CBD,Airport, Kisian, Maseno, Luanda, Ulumbi, Yala<br>
                                            <li><strong>MUHORONI ROAD: </strong>CBD, Ahero, Awasi, Kipsitet, Muhoroni .<br>
                                            <li><strong>HOMABAY ROAD: </strong> CBD, Ahero, Awach, Pap Onditi, Kindu Bay, Olare, Homabay.
                                            </li>
                                                </ul>
                                        <u><p><strong>WESTERN RIGION</p></u></strong>
                                        <ul>
                                            <li><strong>BUTERE ROAD: </strong>cbd,mumias,khumusalaba,butere,luanda,maseno,kisumu.<br>
                                            <li><strong>KAKAMEGA ROAD: </strong> cbd,musikoma,kabula,harambee,mayoni,mumias,ekero,kakamega.<br>
                                            <li><strong>LUANDA ROAD: </strong>cbd,bungoma, Luanda.<br>
                                            <li><strong>LUGULU ROAD: </strong>cbd,mumias,khumusalaba,butere,luanda,maseno,kisumu.<br>
                                            <li><strong>MALABA ROAD: </strong> cbd kanduyi,mabanga, bukembe matisi,webuye,lugulu, Malaba.<br>
                                            <li><strong>MALAKISI ROAD: </strong>CBD,kanduyi,mayanja,kimaeti,amagoro,malaba<br>
                                            <li><strong>MUMIAS ROAD: </strong>cbd,kanduyi,kibabii,chwele,kimilili,kitale.<br>
                                            <li><strong>NAMBALE ROAD: </strong> CBD,Romima,Muskoma,Kabula,Harambee,Mumias.<br>
                                            <li><strong>WEBUYE ROAD: </strong>CBD, maseno, Luanda, Kakamega<br>
                                            <li><strong>YALA ROAD: </strong>CBD,muskoma,kabula,harambee,mayoni,nambale.<br>
                                            <li><strong>OYUGIS ROAD: </strong> cbd,kabula,harambee,,mumias,shianda,kakamega,mukumu,chavakali, yala.
                                            </li>
                                                </ul>
                                                <u><p><strong>BUSIA TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>BUNGOMA ROAD: </strong>CBD, Korinda, Nambale, Mungatsi, Koyonzo, Mumias Sugar Company, Bulimbo, Bungoma.<br>
                                            <li><strong>KISUMU ROAD: </strong>CBD,riana,riondonga,zacharia,musa.<br>
                                            <li><strong>PORT ROAD: </strong>CBD,Korinda, Matayos, Bumala, Funyula, Port Bunyala.<br>
                                            <li><strong>MUMIAS ROAD: </strong>CBD,Korinda, Nambale.
                                            </li>
                                                </ul>
                                                <u><p><strong>KERICHO TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>AHERO ROAD: </strong>CBD,Kapsoit,kaitui,awasi,ahero.<br>
                                            <li><strong>LITEIN ROAD: </strong>CBD,KAPSUSER,LITEIN.<br>
                                            <li><strong>LONDIANI ROAD: </strong>Kericho CBD, Temple rd, Nishkam saint, Tom Mboya rd,Kericho Cemetry.<br>
                                            <li><strong>MUHORONI ROAD: </strong>CBD,Kapsoit,kaitui,muhoroni.<br>
                                            <li><strong>SOTIC ROAD: </strong> CBD,kiptetan,boito,sotik.
                                            </li>
                                                </ul>
                                                <u><p><strong>BOMET TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>LITEIN ROAD: </strong>CBD,KAPSUSER,LITEIN.<br>
                                            <li><strong>SOTIC ROAD: </strong>CBD,Chebole,yaganek,sotik.
                                            </li>
                                                </ul>
                                                <u><p><strong>NAKURU TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>KENYATTA AVENUE: </strong>CBD, daraja, NCCK, Jogoo, posta, shell, rivana,eclipse, hostel,kawangware, sakafos.<br>
                                            <li><strong>MBURU GICHUA ROAD: </strong>CBD,Camp ya moto,machego,isageni,eldama ravine.<br>
                                            <li><strong>LONIANI ROAD: </strong>CBD,Njoro,elburgon,molo.<br>
                                            <li><strong>NAIVASHA ROAD: </strong>CBD,Mawanga,bahati,subukia nyahururu.<br>
                                            <li><strong>NYAHURURU ROAD: </strong> CBD, nyahururu, thika.
                                            </li>
                                                </ul>
                                                <u><p><strong>NYERI TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>OTHAYA ROAD: </strong>CBD,Mururi,kutus,kagio,sagana,gitungi,kiriani,othaya.
                                            </li>
                                                </ul>
                                                <u><p><strong>EMBU TOWN</p></u></strong>
                                        <ul>
                                            <li><strong>CHUKA ROAD: </strong>CBD,Manyatta,kianjakoma,kyeni,kirege,chuka.<br>
                                            <li><strong>KANGEMA ROAD: </strong> CBD,Mururi,kutus,kagio,gacharu,sagana,gatheuri,karuri,kangema.<br>
                                            <li><strong>KARURI ROAD: </strong>CBD,Mururi,kutus,kagio,sagana,gitungi,karuri.<br>
                                            <li><strong>KERUGOYA ROAD: </strong>CBD,Mururi,kamiiguna,kutus,rukenya,karia,kerugoya.<br>
                                            <li><strong>MERU ROAD: </strong> CBD,Chuka,marima,chogoria,igoji,nkubu,meru.<br>
                                            <li><strong>NANYUKI ROAD: </strong>CBD,,Kutus,karatina,kiganjo,naro moru,nanyuki.<br>
                                            <li><strong>OTHAYA ROAD: </strong>CBD,Mururi,kutus,kagio,sagana,gitungi,kiriani,othaya.<br>
                                            <li><strong>THIKA ROAD: </strong> CBD,Mururi, Kimbimbi, Wanguru, Wamumu, Makuyu, Kabati, Thika.<br>
                                            <li><strong>KUTUS-KERUGOYA ROAD: </strong>CBD,Mururi, Kutus,  Kirinya University, Kerugoya.
                                            </li>
                                                </ul>
                                                        </div> 
                                                    </div> 
                                                </div> 
                                                <div class="panel panel-default"> 
                                                    <div class="panel-heading"> 
                                                        <h4 class="panel-title"> 
                                                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                                COMBINED ROUTES 
                                                            </a> 
                                                        </h4> 
                                                    </div> 
                                                    <div id="collapseThree" class="panel-collapse collapse"> 
                                                        <div class="panel-body">
                                                            Nairobi Routes + Outside Nairobi Routes.
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                 
                                      
                                    <div class="md-overlay"></div>
                                
                            </div>  <!-- End panel-body -->
                        </div> <!-- End panel -->


                    </div> <!-- end col -->

                </div> <!-- End row -->


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

        <!-- EASY PIE CHART JS -->
        <script src="assets/easypie-chart/easypiechart.min.js"></script>
        <script src="assets/easypie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/easypie-chart/example.js"></script>

        <!-- sparkline --> 
        <script src="assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script> 
        <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>




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
       <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      @include('sweet::alert')
    
    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:19:30 GMT -->
</html>
