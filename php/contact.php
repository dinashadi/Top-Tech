<?php
extract($_POST);
$link = mysqli_connect("localhost", "root", "", "toptech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO contact (`Your-Name`, `Your-Email`, `Subject`, `Message`) VALUES ('".$name."', '".$email."', '".$subject."','".$message."')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>