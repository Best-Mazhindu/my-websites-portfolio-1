<?php include'inc/process.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Invoice Generator</title>
</head>
<body>
<div class="container" style="border:2px solid #337ab7;width:65%;height:510px">
<div class="row">
<p><img height="45" src="images/log.png"> +263 717 529 162 - info@kingpin.co.zw</p>
<div class="col-sm-12 bg-primary">
<h3 class="text-center">Motor Insurance Invoice</h3>
</div>
</div>

<div style="border:1px dotted #333">
<div class="row">
<div class="col-sm-4"><p>Policy Starts</p></div>
<div class="col-sm-8"><p class="text-right" style="border:1px dotted #333;padding:3px;margin:2px">
<?php
echo date("Y/m/d");
?>
</p></div>
</div>
<div class="row">
<div class="col-sm-4"><p>Policy End</p></div>
<div class="col-sm-8"><p class="text-right"  style="border:1px dotted #333;padding:3px;margin:2px">2018</p></div>
</div>
<div class="row">
<div class="col-sm-4"><p>Policy Days</p></div>
<div class="col-sm-8"><p class="text-right text-primary"  style="border:1px dotted #333;padding:3px;margin:2px">122 Days</p></div>
</div>
</div>

<div class="row bg-info">
<div class="col-sm-4">Cover Description</div>
<div class="col-sm-2">Cover</div>
<div class="col-sm-2">Value</div>
<div class="col-sm-2">Rate</div>
<div class="col-sm-2" ><p class="text-right">Premium</p></div>
</div>

<div class="row">
<div class="col-sm-4">Excess Buy-Back</div>
<div class="col-sm-2">yes</div>
<div class="col-sm-2"></div>
<div class="col-sm-2">1.50%</div>
<div class="col-sm-2" style="color:red"><p class="text-right"><strong>US$35.10</strong></p></div>
</div>
<div class="row">
<div class="col-sm-4">Motor Levy</div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2" style="color:red"><p class="text-right"><strong>$3.60</strong></p></div>
</div>
<div class="row">
<div class="col-sm-4">Stamp Duty @5%</div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2" style="color:red"><p class="text-right"><strong>$7.10</strong></p></div>
</div>
<div class="row bg-danger" style="border:1px dotted #333;padding:3px;">
<table class="table" style="border:1px solid #CCC">
	<th><u>Customer Generated Details</u></th>
<tr class="bg-info">
<td><strong>Invoice # </strong></td>
<td><strong>Name </strong></td>
<td><strong>Vehicle Reg#</strong></td>
<td><strong>Phone</strong></td>
<td><strong>Premium Total Due</strong></td>
</tr>
<?php
		$num=0;
		$result = $pdo->prepare("SELECT * FROM amount ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==2){
			break;	
			}
	?>
   
<tr style="border-bottom: 1px solid #000">
<td style="color:red"><?php echo '000'.strtoupper($row['id']); ?></td>
<td style="color:red"><?php echo strtoupper($row['name']); ?></td>
<td style="color:red"><?php echo strtoupper($row['reg_number']); ?></td>
<td style="color:red"><?php echo strtoupper($row['phone']); ?></td>
<td style="color:red"class="text-right">
	<strong><u><?php echo '$US '.$row['fee']; ?></u></strong></td>

</tr> 
 <?php
		}
	?> 
</table>	

</div>
<div class="row">
	<h4><u>Cover Extensions</u></h4>
<div class="col-sm-4">Medical expenses</div>
<div class="col-sm-8"><strong>$500</strong></div>
<div class="col-sm-4">Legal fees</div>
<div class="col-sm-8"><strong>$250</strong></div>
<div class="col-sm-4" >Emergency overnight charges </div>
<div class="col-sm-8"><strong>$200</strong></div>
<div class="col-sm-4">Self authorisation limit</div> 
<div class="col-sm-8"><strong>$200</strong></div>
<div class="col-sm-4">Towing charges</div> 
<div class="col-sm-8"><strong>$200</strong></div>
<div class="col-sm-4 bg-danger"><strong><h4 class="text-primary" >Total</h4></strong></div>
<div class="col-sm-8 bg-danger" ><p class="text-right text-primary" style="color:red"><strong>$1350</strong></p></div>	
</div>

<hr style="border:2px solid #337ab7;width:50%">
<center><a class="btn btn-info" href="" onclick="window.print();"> Print Invoice Now</a><br>


   
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