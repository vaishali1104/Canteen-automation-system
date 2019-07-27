<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from new.uouapps.com/takeaway/menu-without-side-panel.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:13 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Orders</title>
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/thumb-slide.css">
  <link rel="icon" href="img/DALOGO.gif" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <style>
    table , th , td{
      border: 1px solid black;
      
     
    } 
    input{
      width:90px;
    }
    th , td{
      text-align:center;
      width:50px;
      height:50px;
      padding :10px;
      margin:10px;
    } 
  </style>
  <!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

</head>

<body>
  <div id="main-wrapper">
    
      <!-- end .header-top-bar -->

      <?php 
        include 'header.php';
      ?>
      <!-- end .header-nav-bar -->

      <!-- end #header -->
    <!-- thumbnail slide section -->
    <div id="page-content">
    
    <div class="container">
				<div class="row mt30">
					<div class="col-md-7 col-md-push-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Current Orders</a>
							</li>
							<li><a href="#tab-2" role="tab" data-toggle="tab">Cancelled Orders</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Pending Orders</a>
							</li>
						</ul>

						<!-- end view-style -->
						<br>	
						<div class="tab-content" >
							<div class="tab-pane fade in active" id="tab-1">
                <div>
                  <div class="leave-reply">
                    <div style=" margin:auto;"> 
                      <h5 align="center">Current Orders List</h5>
                      <table width="100%">
                        <tr>
                          <th>Order Id</th>
                          <th>Student Id</th>
                          <th>Item List</th>
                          <th>Amount</th>
                          <th>Payment Mode</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>1002</td>
                          <td>201812053</td>
                          <td>Pani Puri</td>
                          <td>Rs 22</td>
                          <td>Paytm</td>
                          <td><center><input type="submit" value="Reject"></center></td>
                        </tr>
                        <tr>
                          <td>1003</td>
                          <td>201811053</td>
                          <td>Noddles</td>
                          <td>Rs 30</td>
                          <td>COD</td>
                          <td><center><input type="submit" value="Reject"></center></td>
                        </tr>

                      </table>

                    </div>
      
                  </div>
                </div>
		
							</div>
								<!--end all-menu-details-->
						
								
								 
						

						<!- - tab 2 content -->
							<div class="tab-pane fade" id="tab-2">
                <div>
                  <div class="leave-reply">
                    <div style=" margin:auto;"> 
                    <h5 align="center">Cancelled Orders List</h5>
                      <table width="100%">
                        <tr>
                          <th>Order Id</th>
                          <th>Student Id</th>
                          <th>Item List</th>
                          <th>Amount</th>
                        </tr>
                        <tr>
                          <td>1002</td>
                          <td>201812053</td>
                          <td>Pani Puri</td>
                          <td>Rs 22</td>
                        </tr>
                        <tr>
                          <td>1003</td>
                          <td>201811053</td>
                          <td>Noddles</td>
                          <td>Rs 30</td>
                        </tr>

                      </table>
                    </div>
                  </div>
                </div>
							</div> 
							<!-- tab 2 end  -->
						 	<!-- tab 3 start -->
							<div class="tab-pane fade" id="tab-3">

                <div>
                  <div class="leave-reply">
                    <div style=" margin:auto;"> 
                      <h5 align="center">Pending Orders List</h5>
                      <table width="100%">
                        <tr>
                          <th>Order Id</th>
                          <th>Student Id</th>
                          <th>Item List</th>
                          <th>Amount</th>
                          <th>Payment Mode</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>1002</td>
                          <td>201812053</td>
                          <td>Pani Puri</td>
                          <td>Rs 22</td>
                          <td>Paytm</td>
                          <td><center><input type="submit" value="&#10004;" ></center></td>
                        </tr>
                        <tr>
                          <td>1003</td>
                          <td>201811053</td>
                          <td>Noddles</td>
                          <td>Rs 30</td>
                          <td>COD</td>
                          <td><center><input type="submit" value="&#10004;"></center></td>
                        </tr>

                      </table>

                    </div>
      
                  </div>
                </div>
								
							</div>
							<!--tab 3 end -->
							<!-- tab 4 start -->
							
						</div>
					</div>
					<!--end main-grid layout-->
					<!-- Side-panel begin -->
					<!--end .col-md-3 -->
					
				</div>
				<!-- end .row -->
			</div>
			<!--end .container -->
		
			
		</div>

    
    
    
    
      <!-- start #main-wrapper -->
      
      <!--end .container -->
      <!-- footer begin -->
      <?php
        include 'Footer.php';
      ?>
      <!-- end #footer -->
      
    </div> <!-- end .page-content -->
  </div>
  <!-- end #main-wrapper -->

    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Local jQuery -->
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/jquery.ui.map.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    
    </script>

</body>


<!-- Mirrored from new.uouapps.com/takeaway/menu-without-side-panel.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:13 GMT -->
</html>
