<?php include'inc/process.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<div class="container" style="border:2px solid #337ab7;width:65%;height:510px">
<div class="row">
<p><img height="45" src="images/log.png"> +263 717 529 162 - info@kingpin.co.zw</p>
<div class="col-sm-12 bg-primary">
<h3 class="text-center">Motor Insurance Invoice</h3>
</div>
</div>


<center>
<form action="inc/down.php" method="post" name="export_excel"><br>
     
    			<div class="control-group">
    				<div class="controls">
    					<button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">Download Customer Invoice File</button>
    				</div>
    			</div>
</form><a class="pull-right" style="padding-right:5px" href="inc/logout.php">Logout</a>

<table class="table" style="border:1px solid #CCC">
	<th><u>Customer Details List</u></th>
<tr class="bg-info">
<td><strong>Name</strong></td>
<td><strong>Surname </strong></td>
<td><strong>Email</strong></td>
<td><strong>Phone</strong></td>
<td><strong>Address</strong></td>
<td><strong>Premium Total Due</strong></td>


</tr>
<?php
		$num=0;
		$result = $pdo->prepare("SELECT * FROM amount ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==100){
			break;	
			}
	?>
   
<tr style="border-bottom: 1px solid #000">
<td style="color:red"><?php echo strtolower($row['name']); ?></td>
<td style="color:red"><?php echo strtolower($row['surname']); ?></td>
<td style="color:red"><?php echo strtolower($row['email']); ?></td>
<td style="color:red"><?php echo strtolower($row['phone']); ?></td>
<td style="color:red"><?php echo strtolower($row['address']); ?></td>
<td style="color:red"class="text-right">
<strong><u><?php echo '$US '.$row['fee']; ?></u></strong></td>

</tr> 
 <?php
		}
	?> 

</table>


<p>Developed by <a href="">Intelli-Sys</a></p>
</center>





</div>







<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to remove this USER?");
    
   if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>