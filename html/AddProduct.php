
<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $productid = $_POST['productid'];

    $productname = $_POST['productname'];

    $productprice = $_POST['productprice'];

    $picture_name=$_FILES['image']['name'];
    $picture_type=$_FILES['image']['type'];
    $picture_tmp_name=$_FILES['image']['tmp_name'];
    $picture_size=$_FILES['image']['size'];
    
    $Grocery = $_POST['Grocery'];

    

   

    if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);

		$sql = "INSERT INTO `product`(`productid`, `productname`, `productprice`,`Category`,`Image` ) VALUES ('$productid','$productname','$productprice','$Grocery','$pic_name')";
    $result = $con->query($sql);

    if ($result == TRUE) {

      
      echo '<script>alert("Sucess")</script>';

    }else{

      //echo "Error:". $sql . "<br>". $conn->error;
      echo '<script>alert(" not Sucess")</script>';

    } 

}



    $con->close(); 

  }

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
      <title>Anjappar Angadi</title>
      <link rel="icon" type="image/x-icon" href="../Images/title.jpg">
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/Admin.css">
    <!-- Boxicons CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/Add Product.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <span class="logo_name">Anjappar Angadi</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../html/index-2.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Gowtham s</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<br>
<br>
<br>
<br>

<form action="AddProduct.php" method="post" enctype="multipart/form-data">
 
 
  <div class="container-2">
    
        <center>
    <TABLE>
      <tr>
      <td style="text-align: right;">
        Product ID:</td> 
      <td><input  type="text"  input id="productid" name="productid" required> </td>
    </tr>

    <tr>
       <td style="text-align: right;">
        Product Name: </td>
      <td> <input type="text" input id="productname" name="productname" required > </td>
    </tr>
       
    <tr>
      <td style="text-align: right;">
        Product Price: </td>
      <td><input  type="text" input id=" productprice" name="productprice" required> </td> 
    </tr>
      
  </div>
 
    <tr>
      <td style="text-align: right;">
    Image: </td>
    <td> <input  type="file" input id="Image" name="image" required></td>
  </tr>
    
      
  <tr>
    <td style="text-align :right;">
                <label for="">Category:</label></td>
                <td><select name="Grocery" id="Grocery">
                  <option value="Fresh Fruits">Fresh Fruits</option>
                  <option value="Fresh Vegetables">Fresh Vegetables</option>
                  <option value="Atta, Flours & Sooji">Atta, Flours & Sooji</option>
                  <option value="Dals & Pulses">Dals & Pulses</option>
                  <option value="Rice Products">Rice Products</option>
                  <option value="Sugar,Jaggery & Salt">Sugar,Jaggery & Salt</option>
                  <option value="Masala Powders">Masala Powders</option>
                  <option value="Dry Fruits, Nuts & Seeds">Dry Fruits, Nuts & Seeds</option>
                  <option value="Noodles, Pasta & Soups">Noodles, Pasta & Soups</option>
                  <option value="Pickles & Chutney">Pickles & Chutney</option>
                  <option value="Ready To Eat">Ready To Eat</option>
                  <option value="Raw Masalas & Spices">Raw Masalas & Spicess</option></td>
                </select>
              </tr>
            </div>
   
 
    </TABLE>
  </center>
      
  

     <div class="ch">
       <button type="submit" id="submit" name="submit" >Submit</button><br>   
      </div>
  
  </form>
</div>
       
         
          </div>    
    </form>
