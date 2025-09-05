<?php 
    include "connection.php";
?>

<?php 
    $pid=$_GET['pid'];  
    $delete='delete from product where pid='.$_GET["pid"];
    if(mysqli_query($cn,$delete))
    {
        header("Location:product.php");
        exit();
    }
    else
    {
        echo "Some thinng Wrong";
    }
?>