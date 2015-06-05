<?php require_once('forms.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head> 
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

  
    <link href="<?= base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet"><!--link the html code to the bootstrap-->
    <link href="<?= base_url();?>bootstrap/css/styles.css" rel="stylesheet" type="text/css">


    <!--DATATABLE-->
    <link  href="<?= base_url();?>DataTables-1.10.7/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.js"></script>  
    <!-- DataTables -->
    <script type="text/javascript"  charset="utf8"  src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8"  src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
    <!--DATA TABLE-->



<script type="text/javascript"> 
$('.dropdown-menu').click(function(event){
    event.stopPropagation();
});
</script>


    

   
  </head>
  <body>  

   
   <div style= "background-color:#276696"  class="navbar navbar-inverse navbar-static-top">

      <div class="container"><!--this contains the everything to be place in the navbar-->
        
        <button class= "navbar-toggle" data-toggle = "collapse" data-target = "#navHeaderCollapse">
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>   

        </button>

        <div class="collapse navbar-collapse" id="navHeaderCollapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="<?= base_url();?>">Home</a></li><!--this is the general outlook of the site by everyone-->
                    


           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setup<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#" >Funding Agency</a></li>


            
                <li><a href="<?= base_url();?>index.php/update_ctrl/show_agency_id" >Supply Chain Agencies</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/show_commodities_id">Commodities</a></li>
                <li><a href="#">Zone</a></li>
                <li><a href="#">Counties</a></li>
              </ul>
            </li>  



           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#" >Add Transactions</a></li>
                <li><a href="#">View Transactions</a></li>
              </ul>
            </li>  



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#" >Central</a></li>
                <li><a href="#">County</a></li>
                <li><a href="#">Commodities</a></li>
                <li><a href="#">Period</a></li>
              </ul>
            </li> 
               

          </ul>

        </div>       

      </div>
    </div><!--this is the end of the top navbar-->
