<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manage Menu</title>
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="icon" href="img/DALOGO.gif" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<div id="main-wrapper">
	<?php 
	include("dbconnect.php");
	include("header.php");
	//$itemId="";
	?>
	
		<?php
		if(isset($_GET["itemId"]))
		{				echo"<script> alert('haan sahi hai');</script>";

			$sql="delete from menu where menu_id = '$_GET[itemId]'";
		
		$qsql = mysqli_query($con,$sql);	
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Album record deleted successfully...');</script>";
			header("Location: manageMenu.php");		
		}
		
		}
		?>
		

		<!-- end #header -->
		<!-- thumbnail slide section -->
		<div id="page-content">
			
			<!-- end .thumbnail-slide -->

			<!-- start #main-wrapper -->
			<div class="container">
				<div class="row mt30">
					<div class="col-md-7 col-md-push-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab-1" role="tab" data-toggle="tab">All</a>
							</li>
							<li><a href="#tab-2" role="tab" data-toggle="tab">Daily Menu</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Starters</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Main Course</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Dessert</a>
							</li>
						</ul>

						<!-- end view-style -->
						<br>
											
						<div class="tab-content" >
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details" >
									<div>
										<h5><center>Daily Menu <a href="addNewItemForm.php"><i class="fa fa-plus price" style="float:right;"></i>
										</a></center></h5>
										
									</div>
									<form action="" method="get">
									<?php
													$sql="select * from menu where owner_id='$_SESSION[cid]'";
													
													$rs=mysqli_query($con,$sql);			
						
						
													while($row=mysqli_fetch_array($rs))
													{
														$itemId=$row[0];
														$itemName=$row[1];
														$itemPrice=$row[2];
														$prepTime=$row[3];
													
													?>
									<div class="item-list right-checkout" >
										
										
										<div class="all-details">
											<div class="visible-option" style="position: relative;left:-120px;width:63rem">
												<div class="details">
													<h6><a href="#"><?php echo $itemName; ?></a>
													
													</h6>
													<p>Preparation Time:<?php echo $prepTime ?></p>
												</div>

												<div class="price-option fl">
													<h4><?php echo $itemPrice; ?> Rs.</h4>
													
												</div>
												<!-- end .price-option-->
												<div class="qty-cart text-center clearfix">
													<br>
													
														<input type="button" style="width:4em" value="EDIT">
														<br>
														<a href="manageMenu.php?itemId=<?php echo $row["menu_id"] ?>"><input type="button" style="width:5em;margin-top:1em" value="DELETE" name="delete" id="delete">
														</a>
													</form>
												</div> <!-- end .qty-cart -->
											</div> <!-- end .visible-option -->	
										
											<div class="dropdown-option clearfix">
												<div class="dropdown-details">
													<form class="default-form">
														<h5>Please Select Your Option</h5>
														<h6>Option</h6>
														<span class="radio-input">
															<input type="radio" id="rice-1" name="choose">
															<label for="rice-1">Rice</label>
														</span>
														
														<span class="radio-input">
															<input type="radio" id="noodles-1" name="choose">
															<label for="noodles-1">Noodles</label>
														</span>
														
														<span class="radio-input">
															<input type="radio" id="bread-1" name="choose">
															<label for="bread-1">Bread</label>
														</span>

														<h6>Extras</h6>
														<span class="checkbox-input">
															<input type="checkbox" id="shrimps-1">
															<label for="shrimps-1">Double Shrimps<i class="fa fa-plus price">$3.00</i>
															</label>
														</span>
												
														<span class="checkbox-input">
															<input type="checkbox" id="extra-veggies-1">
															<label for="extra-veggies-1">Extra Veggies <i class="fa fa-plus price">$3.00</i>
															</label>
														</span>
													
														<span class="checkbox-input">
															<input type="checkbox" id="additional-butter-1">
															<label for="additional-butter-1">Additional Butter <i class="fa fa-plus price">$3.00</i>
															</label>
														</span>

														<h6>Additional Notes</h6>
														<textarea placeholder="Write here"></textarea>
														
														<a class="btn btn-default-red">Confirm</a>
														<a class="btn btn-default-black">Cancle</a>
													</form>
												</div>
												<!--end .dropdown-details-->
											</div>
											<!--end .dropdown-option-->
										</div>
										<!-- end .all-details -->
									</div>
									<!-- end .item-list -->
							<?php } ?>
							


							</div> <!-- end .tab-pane -->



							</div> <!-- end .tab-pane  -->
						</div> <!-- end .tab-content -->

						
					</div>
					<!--end main-grid layout-->
					<!-- Side-panel begin -->
					<!--end .col-md-3 -->
					
				</div>
				<!-- end .row -->
			</div>
			<!--end .container -->
			<!-- footer begin -->
			<?php include("footer.php");?>
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