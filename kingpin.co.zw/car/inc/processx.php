<?php
include'config.php';
 $time=time();
 $time = date("F j,Y,g:i a",$time); 
//  registration code
if(isset($_POST['submit']))  
   {
    $name=strtolower(trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING)));
    $surname= strtolower(trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING)));
    $phone= strtolower(trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS)));
    $reg_number= trim(filter_input(INPUT_POST,"reg_number",FILTER_SANITIZE_SPECIAL_CHARS));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS));
    $address= trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS));
    $fee1= trim(filter_input(INPUT_POST,"fee",FILTER_SANITIZE_SPECIAL_CHARS));
    $fee2=45.80;
    $fee=$fee1+$fee2;
    $buyback= trim(filter_input(INPUT_POST,"buyback",FILTER_SANITIZE_SPECIAL_CHARS));
    
if (empty($name)||empty($surname)||empty($phone)||empty($reg_number)||
empty($email)) 
{
  echo"<script> alert ('Please enter all your details');window.location=('../index.php')</script>";
 }
 
else{
  $pdoQuery = "INSERT INTO `amount`
  (`name`,`surname`,`phone`,`reg_number`,`email`,`address`,`fee`,`buyback`)
 VALUES (:name,:surname,:phone,:reg_number,:email,:address,:fee,:buyback)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
   ":name"=>$name,
   ":surname"=>$surname,
   ":phone"=>$phone,
   ":reg_number"=>$reg_number,
   ":email"=>$email,
   ":address"=>$address,
   ":fee"=>$fee,
   ":buyback"=>$buyback
  ))
   ;
    if ($pdoExec)
  { 
     $_SESSION['amount']=$fee;
  echo "<script> alert ('Invoice Successfully Generated'); window.location=('../invoice.php')</script>"; 
} else
   {  echo "<script> alert ('Sorry Network Down'); window.location=('../index.php')</script>";
   }
    }
}
//code end here

//admin login code
if(isset($_POST['login']))
{
 
  $password=($_POST['password']);
{
 $select = $pdo->prepare("SELECT * FROM users_login WHERE password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['password']!=$password)
 {
echo "<script> alert ('Sorry Incorrect Password'); window.location=('../../index.html')</script>";
 }
 elseif($data['password']==$password)
 {
echo "<script> alert ('Kingpin Admin Welcome'); window.location=('../admin.php')</script>";
 }
 }
}
//end of code 2  <form action="inc/down.php" method="post" name="export_excel">
     
          /*<div class="control-group">
            <div class="controls">
              <button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">Download Invoice File</button>
            </div>
          </div>
        </form>*/


?>