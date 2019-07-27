<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu </title>
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="icon" href="img/DALOGO.gif" type="image/gif" sizes="16x16">

	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->


<style>

</style>

</head>

<body>
  <?php
	include("dbconnect.php");	
?>
	
	<div id="main-wrapper">
	<?php 
	//ob_start();

//session_start();
include('header.php');
	/*if(isset($_SESSION["id"]))
{
$sql = "select * from student_info where student_id='$_SESSION[id]'";
$qsqlstaff = mysqli_query($con,$sql);
$rsstaff = mysqli_fetch_array($qsqlstaff);
}*/
?>
<?php 
													
if(isset($_POST['addCart']))
{	
	$sql="INSERT INTO `cart`(`student_id`, `menu_id`, `qty`,`order_id`) 
	VALUES ($_SESSION[id],'$_POST[itemId]',$_POST[getQty],null)";
	if(!$qsql=mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
else
{
	echo"<script>alert('Item added to your cart...')</script>";
	//header("Location: IncomeAndExpense.php");		
}
														
}
											?>			

	<!-- end #header -->
	

			<!-- start #main-wrapper -->
			
			<div class="container">
				<div class="row mt30">
					<div class="col-md-7 col-md-push-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active "><a href="#tab-1" role="tab" data-toggle="tab">All</a>
							</li>
							<li class="hi"><a href="#tab-2" role="tab" data-toggle="tab">Breakfast</a>
							</li>
							<li class="hi"><a href="#tab-3" role="tab" data-toggle="tab">Lunch</a>
							</li>
							<li class="hi"><a href="#tab-3" role="tab" data-toggle="tab">Snacks</a>
							</li>
							<li class="hi"><a href="#tab-3" role="tab" data-toggle="tab">Dinner</a>
							</li>
						</ul>

						<div class="view-style dsn">
							<div class="list-grid-view">
								
								
							</div>
							<!-- end .list-grid-view -->

							
							<!-- end .page-list -->
						</div>
						<!-- end view-style -->
						
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details">
									<center><h5>Daily Menu</h5></center>
									<form action="" method="post">


									<?php
												$canteen=$_GET['owner'];
													$sql="select * from menu WHERE owner_id=$canteen";
													
													$rs=mysqli_query($con,$sql);			
						
													//$getQty=$_GET['getQty'];
													while($row=mysqli_fetch_array($rs))
													{
														$itemId=$row[0];
														$itemName=$row[1];
														$itemPrice=$row[2];	
													
													?>
											<input name="itemId" type="hidden" value="<?=$itemId?>">

									<div class="item-list right-checkout">
										
										<div class="all-details">
											<div class="visible-option"> 
												<div class="details">
												
													<h6><a href="#" id="getItemName"><?php echo $itemName; ?></a>
													<input name="itemName" type="hidden" value="<?=$itemName?>">

													</h6>
																
												</div>

												<div class="price-option fl">
													<h4 id="getItemPrice"><?php echo $itemPrice; ?> Rs.</h4>
													<input name="itemPrice" type="hidden" value="<?=$itemPrice?>">

													
												</div>
												<!-- end .price-option-->
												<div class="qty-cart text-center clearfix">
												
													<h6>Quantity</h6>
														<input type="number" min="0" id="getQty" name="getQty" style="width:55px;" value="0">
														<br>
														
															
														<input type="submit" name="addCart" id="addCart"><i class="fa fa-shopping-cart"></i>
														
															</a>
													</form>
												
												</div> <!-- end .qty-cart -->
											</div> <!-- end .visible-option -->	
											
										</div>
										<!-- end .all-details -->
									</div>
													
												<?php	} ?>

												
									<!-- end .item-list -->
																
									<div class="item-list right-checkout" style="background-color: white;">
									
										<div class="all-details">
											
											
										</div>
										<!-- end .all-details -->
									</div>
									<!-- end .item-list -->
								</div>
								<!--end all-menu-details-->
							</div> <!-- end .tab-pane  -->
						</div> <!-- end .tab-content -->

						<!-- end .pagination -->
					</div>
					<!--end main-grid layout-->
					
					<!-- Side-panel begin -->
					<div class="col-md-3 col-sm-12 col-xs-12 col-md-pull-7">
						<div class="side-panel">
							<form class="default-form">
								<h6 class="toggle-main-title">Checkout Details</h6>
								<div class="sd-panel-heading">
									<h5 class="toggle-title">My Check</h5>
									<?php
													$sql="select * from cart where student_id='$_SESSION[id]'";
													
													$rs=mysqli_query($con,$sql);			
						
													//$getQty=$_GET['getQty'];
													while($row=mysqli_fetch_array($rs))
													{
														$cartId=$row[0];
														$mitemId=$row[2];
														$qty=$row[3];
														$orderId=$row[4];
													
													$sql1="select * from menu where menu_id='$mitemId'";
													
													$rsMenu=mysqli_query($con,$sql1);			
						
						
													while($row1=mysqli_fetch_array($rsMenu))
													{
														//$itemId=$row[0];
														//$itemName=$row[1];
														$itemName=$row1[1];	
														$itemPrice=$row1[2];
														$prepTime=$row1[3];
													?>
									<div class="slideToggle">
										<ul class="list-unstyled">
											
											<li>
												<p id="qty"><label id="qty"></label>
													<span class="icon-link"><i class="fa fa-pencil"></i><i class="fa fa-times"></i>
													</span>
												</p>
												
												<p class="price" id="price"><?php echo $itemName; echo " ";?> Rs.<?php echo $itemPrice; echo " 	x";?><?php echo $qty?>
												</p>
												<?php
												}	
													
													?>
																							
											</li>
											
											<li>
												<!-- list for total price-->
												<p>Total</p>
												<p class="price-total" id="sum">
												<?php
												$sum=0;
												$sum+=$itemPrice*$qty;
												echo $sum;
												
											?> </p>
											</li>
											<li>
											<input type="text" placeholder="Special instructions">
											</li>
											
										</ul>

										<div class="checkout">
											<button class="btn btn-default-red" href="#"><i class="fa fa-shopping-cart"></i>Checkout</button>
										</div>
										<?php } ?>
									</div>
									
									<!--end .slide-toggle -->
								</div>
								<!-- end .sd-side-panel class -->
								
							</form>
							<!-- end form -->
						</div>
						<!-- end side-panel -->
					</div>
					<!--end .col-md-3 -->
					
						<!-- end .chekout class -->
					</div>
				</div>
				<!-- end .row -->
			</div>
			<!--end .container -->
			<!-- footer begin -->
	<?php include("footer.php"); ?>
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


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
</html>
