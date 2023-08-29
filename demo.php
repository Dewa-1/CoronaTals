<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'corona_db';
$con = mysqli_connect($server, $username, $password, $db);
if (isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];
  
    $chk = "";
  
    foreach($symp as $chk1){
      $chk .= $chk1.",";
    } 
    
    //yha jo insert into( ) h usme database me jo columns bne hn wo likhne hote hn  //aur values me jo name h input name me wo likhne pdte hn
    $insertquery = "insert into coronacases(username, email,	mobile,	symp,	message) values ('$username', '$email',	'$mobile',	'$chk',	'$msg')";
    
    $query = mysqli_query($con, $insertquery);
  
    if($query) {
      ?>
      <script>
      alert("Insertion successful");
      </script>
      <?php
      }
  
  else {
      ?>
      <script>
      alert("Insertion failed");
      </script>
      <?php
    }
  }
  header("Location:index.php");
?>