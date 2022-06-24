<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="nocache, no-store, max-age=0, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content=" Sun, 02 Jan 1990 00:00:00 GMT">
 
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
       
        <title>@section("title") Welcome! @stop</title>

    
  <link href="admin/img/favicon.png" rel="icon">
  <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/csss/sb-admin-2.min.css" rel="stylesheet">



  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="new/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
  

  <link href="admin/table/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin/table/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


  <script src="admin/lib/chart-master/Chart.js"></script>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
    </head>
    <body style="font-size:15px;" id="ref"  onload="f()">

   
    <script type="text/javascript">

/*
 

setTimeout(function() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var x = this.responseText;
  document.getElementById("id").innerHTML="dgdgf";
 if(x==0)
 {
   document.location.href="/";
 }
    }
  };
  xhttp.open("GET", "token", true);
  xhttp.send();
},200);

*/
</script>





     <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg" >
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b>NELDOU<span> ADMIN </span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
       <!--   <li style="margin-right:19px;"><a href="messages"><span class="glyphicon glyphicon-envelope"></span><span class="badge" style="background:red;">@if(Session::get('count')!==null){{Session::get('count')}}@endif</span></a></li>
         -->
          <!-- notification dropdown end -->
        </ul>

        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right" style="margin-top:15px;">
          <li> <a  class="btn btn-success" style="background:rgba(122,6,7,0.3);"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                       Logout
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;margin-right:30px;">
                                        @csrf
                                    </form>
        </ul>
      </div>


    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->



        <ul class="sidebar-menu" id="nav-accordion">
          
            <li class="mt">
              <a class="active" href="home">
                <i class="fa fa-home"></i>
                <span>Accueil</span>
                </a>
            </li>
           
           

            <li class="sub-menu" >
              <a href="informationIndex">
                <i class="fa fa-info"></i>
                <span style="font-size:15px" >changer coordonnées</span>
                </a>
             
            </li>

            <li class="sub-menu">
              <a href="publicationIndex">
                <i class="fas fa-fw fa-calendar"></i>
                <span style="font-size:15px">Publications</span>
                </a>
             
            </li>

            <li class="sub-menu">
              <a href="commandeIndex">
                <i class="fa fa-clock"></i>
                <span style="font-size:15px">commandes</span>
                </a>
             
            </li>
            <li class="sub-menu">
              <a href="syracuse">
                <i class="fa fa-clock"></i>
                <span style="font-size:15px">zone syracuse</span>
                </a>
             
            </li>
            v
        
  
            <li class="sub-menu">
              <a href="produitIndex">
                <i class="fas fa-fw fa-none"></i>  
                <span style="font-size:15px">produits</span>
                </a>
             
            </li>
  
          

    <!--         <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-money"></i>
                <span style="font-size:15px">Staff</span>
                </a>
             
            </li>  --> 
  
       <!--       <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-money"></i>
                <span style="font-size:15px">Livreurs</span>
                </a>
             
            </li>  

            <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-money"></i>
                <span style="font-size:15px">Livraisons</span>
                </a>
             
            </li>   
  
            <li class="sub-menu">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span style="font-size:15px">paramétres</span>
                </a>
             
            </li>   -->

          
            
            
           
           
          </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="margin-top:25px;">
      <section class="wrapper" style="font-size:17px;padding-top:35px;background:white;">
       
     

 @yield("body")
 
    </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <footer class="site-footer" style="margin-bottom:0px;margin-top:200px;float:bottom">
      <div class="text-center" >
        <p>
          &copy; Copyrights <strong>ersbest1@gmail.com.com for NELDOU</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          </a>
        </div>
        <a "#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
        

      

  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  
  
  <script src="admin/table/vendor/jquery/jquery.min.js"></script>
  <script src="admin/table/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="admin/table/vendor/jquery-easing/jquery.easing.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="admin/table/js/sb-admin-2.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="admin/table/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/table/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <!-- Page level custom scripts -->
  <script src="admin/table/js/demo/datatables-demo.js"></script>
  
  

    </body>
</html>
