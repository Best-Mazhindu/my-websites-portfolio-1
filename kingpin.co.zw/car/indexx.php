<!DOCTYPE html>
<html>
<head>
	<title>Invoice Generator</title>
</head>
<body>
<div class="container" style="border:2px solid #337ab7">
<div class="row">
<a href="../http://kingpin.co.zw/idex.html"></a><p class="text-center"><img height="45" src="images/log.png">  +263 717 529 162 - info@kingpin.co.zw</p></a>
<div class="col-sm-12 bg-primary">
<h3 class="text-center">Motor vehicle Quotation</h3>
</div>
</div>

<div class="row">
<h4 style="padding-left:20px">Customer Details</h4>
<form action="inc/process.php"  method="post" autocomplete="off">
	
<div class="col-sm-4"><input class="form-control" type="text" name="name" placeholder="Enter your name"></div>
<div class="col-sm-4"><input class="form-control" type="text" name="surname" placeholder="Enter your surname"></div>
<div class="col-sm-4"><input class="form-control" type="tel" name="phone" placeholder="Enter your phone number"></div>
<div class="col-sm-4" style="margin-top:5px"><input class="form-control" type="text" name="reg_number" placeholder="Enter your vehicle registration number"></div>
<div class="col-sm-4" style="margin-top:5px"><input class="form-control" type="email" name="email" placeholder="Enter your email"></div>
<div class="col-sm-4" style="margin-top:5px"><textarea class="form-control" cols="10" rows="2" name="address" placeholder="Enter your address"></textarea></div>
<div class="col-sm-4" style="margin-top:3px"><input class="form-control" type="text" name="fee" placeholder="Enter your vehicle value"></div>
<div class="col-sm-4" style="margin-top:3px"><select name="buyback" class="form-control">
	<option value="0">--Select Excess Buyback(y/n)--</option>
	<option name="buyback">Yes</option>
	<option name="buyback">No</option>
</select></div>
<div class="col-sm-4" style="margin-top:3px"><button type="submit" name="submit" class="btn btn-block btn-info">Generate Quotation Now</button></div>
</form>
</div>
<div class="row">
<h4 style="padding-left:15px" class="text-primary">Cover Extensions</h4>
<div class="col-sm-4">
	<p>Medical expenses <span>$500</span>
	<br>Legal fees <span>$250</span></p></div>
<div class="col-sm-4"><p>Emergency overnight charges <span>$200</span>
	<br>Loss of keys <span>$300</span></p></div>
<div class="col-sm-4"><p>Self authorisation limit <span>$200</span>
	<br>Towing charges <span>$200</span></p></div>	

</div>
<hr style="border:1px dotted #337ab7;width:50%">
<center>
<p>Developed by <a href="http://intelli-sys.co.zw/">Intelli-Sys</a></p>
</center>



</div>








<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>