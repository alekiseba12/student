<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>LOGIN PAGE: NYCE MEDIA</title>

        


        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/morris/morris.css">


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

        <div class="wrapper-page animated fadeInDown">
            @if (count($errors) > 0)
    
                      @foreach ($errors->all() as $error)
                       <div class="alert alert-danger">{!! $error !!}</div>
                           @endforeach
        
                                 @endif
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> <b>Sign In </b></h3>
                </div> 


                <form class="form-horizontal m-t-40" action="{{route('login')}}" method="post">
                    @csrf
                                            
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="form-group ">
                        
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" unchecked>
                                <i class="fa"></i> 
                                Remember me
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-success w-md" type="submit">Log In</button>
                        </div>
                    </div>
                   
                </form>

            </div>
        </div>

    


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
            

        <!--common script for all pages-->
        <script src="js/jquery.app.js"></script>

    
    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
</html>
