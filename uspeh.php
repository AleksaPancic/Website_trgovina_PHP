<!DOCTYPE html>
					<html>
						<head>
							<meta charset="UTF-8">
							<title>Trgovina</title>
							<link rel="stylesheet" href="css/bootstrap.min.css"/>
							<script src="js/jquery2.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="main.js"></script>
							<style>
								table tr td {padding:10px;}
							</style>
						</head>
					<body>
						<div class="navbar navbar-inverse navbar-fixed-top">
							<div class="container-fluid">	
								<div class="navbar-header">
									<a href="#" class="navbar-brand">Trgovina</a>
								</div>
								<ul class="nav navbar-nav">
									<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home stranica</a></li>
									<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Produkti</a></li>
								</ul>
							</div>
						</div>
						<p><br/></p>
						<p><br/></p>
						<p><br/></p>
						<div class="container-fluid">
						
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="panel panel-default">
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Zahvalni smo </h1>
											<hr/>
											<p>Popunite sledecu formu i uplatite sa zadatim informacijama ili kupite preko paypal-a:<br/> <br/></p>
											<img src="uplatnica.png" id="uplatnica.png"> 
											<br>
											<br>
											<br>
											<br>
						</form>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="shoppingcart@Prodavnica.com">
							<input type="hidden" name="upload" value="1">
									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row["product_price"].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">;   
								<input type="hidden" name="return" value="http://localhost/AleksaPancic121"/>
					                <input type="hidden" name="notify_url" value="http://localhost/project1/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/project1/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
									<input style="float:left;margin-left:80px;" type="image" name="submit"
										src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"
										alt="PayPal - The safer, easier way to pay online">
								</form>
											<br>
											<br>
											<br>
											<br>
											<a href="index.php" class="btn btn-success btn-lg">Nastavak kupovine</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</body>
					</html>