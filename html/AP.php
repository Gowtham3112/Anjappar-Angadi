<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $Productid = $_POST['Productid'];

    $Productname = $_POST['Productname'];

    $ProductPrice = $_POST['ProductPrice'];

    

    

    $sql = "INSERT INTO `product`(`productid`, `productname`, `productprice`, ) VALUES ('$productid','$productname','$productprice')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>