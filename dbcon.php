<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'corona_db';
$con = mysqli_connect($server, $username, $password, $db);
if($con)
{
?>
    <script>
    alert("Connection successful");
    </script>
    <?php
}
else{
    
    ?>
    <script>
    alert("Connection not successful");
    </script>
    <?php
}
?>