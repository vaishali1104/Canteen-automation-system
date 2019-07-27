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
		/*											
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
			*/								?>			
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM menu WHERE menu_id='" . $_GET["menu_id"] . "'");
			$itemArray = array($productByCode[0]["menu_id"]=>array('name'=>$productByCode[0]["item_name"],'menu_id'=>$productByCode[0]["menu_id"],'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["menu_id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["menu_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
	<!-- end #header -->
	

			<!-- start #main-wrapper -->
	<div class="container">
		<div class="row mt30">
			<div class="col-md-7 col-md-push-3">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#tab-1" role="tab" data-toggle="tab">All</a></li>
					<li><a href="#tab-2" role="tab" data-toggle="tab">Breakfast</a></li>
					<li><a href="#tab-3" role="tab" data-toggle="tab">Lunch</a></li>
					<li><a href="#tab-3" role="tab" data-toggle="tab">Snacks</a></li>
					<li><a href="#tab-3" role="tab" data-toggle="tab">Dinner</a></li>
				</ul>

				<div class="view-style dsn">
					<div class="list-grid-view">
								
						<button class="without-thumb" ><i class="fa fa-align-justify"></i></button>
								
					</div>
							<!-- end .list-grid-view -->

						<div class="page-list text-right">
								<ul class="list-unstyled list-inline">
									<li class="active"><a href="#">1</a>
									</li>
									<li><a href="#">2</a>
									</li>
									<li><a href="#">3</a>
									</li>
									<li><a href="#">4</a>
									</li>
									<li><a href="#">5</a>
									</li>
									<li><a href="#">6</a>
									</li>
								</ul>
						</div>
							<!-- end .page-list -->
				</div>
						<!-- end view-style -->
				<form action="" method="post">

						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details">
									<center><h5>Daily Menu</h5></center>
									
									<?php
												$canteen=$_GET['owner'];
													$sql="select * from menu WHERE owner_id=$canteen";
													
													$rs=mysqli_query($con,$sql);			
						
													//$getQty=$_GET['getQty'];
													while($row=mysqli_fetch_array($rs))
													{
														
														$itemId[$key]=$row[0];
														$itemName[$key]=$row[1];
														$itemPrice[$key]=$row[2];	
													
													
													
													foreach ($sql as $key => $value) {
        ?>  
            <div class="image">
            <img src="<?php echo $sql[$key]["item_name"] ; ?>" />
            <div class="product-info">
                <div class="product-title"><?php echo $query[$key]["Price"] ; ?></div>
                <ul>
									?>
									<input name="itemId" type="hidden" value="<?=$itemId?>">

									<div class="item-list right-checkout">
										
										<div class="all-details">
											<div class="visible-option"> 
												<div class="details">
													<h6><a href="#" id="getItemName"><?php echo $itemName; ?></a></h6>
													 
												</div>

												<div class="price-option fl">
													<h4 id="getItemPrice"><?php echo $itemPrice; ?> Rs.</h4>
													
												</div>
												<!-- end .price-option-->
												<div class="qty-cart text-center clearfix">
												
													<h6>Quantity</h6>
														<input type="number" min="0" id="getQty" name="getQty" style="width:55px;" value="0">
														<br>
														<input type="submit" name="addCart" id="addCart"><i class="fa fa-shopping-cart"></i>
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
				</form>
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
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><?php echo $item["name"]; ?></td>
				
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;">
				<a href="index.php?action=remove&code=<?php echo $item["menu_id"]; ?>" class="btnRemoveAction">
				<img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>
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
				<!-- end .row -->
	</div>
			<!--end .container -->
			<!-- footer begin -->
			<div>

			
			<?php include("footer.php"); ?>
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


</body>


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
</html>
