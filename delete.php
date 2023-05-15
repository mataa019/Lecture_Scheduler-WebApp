<?php 
include ("Database.php");
if(isset($_GET['deleteid'])){
    $Subject=$_GET['deleteid'];

    $sql= "delete from records where Subject='$Subject'";
    $result=mysqli_query($conn ,$sql);
    if($result){
        header("location: AdminDisplay.php"); 
    }
    else{
        die("Failed to Delete");
    }
}



?> 