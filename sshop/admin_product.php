<!DOCTYPE html>
<html lang="en">
<head>
  <title>SKS ELECTRONICS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>




<div class="col-sm-12">
<nav class="navbar navbar-expand-sm">
        
        <a class="navbar-brand" href="#">
        <img src="img/logo2.png" alt="Logo" style="width:180px;">
        </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="watch.php">Watch List <span class="badge badge-pill badge-primary">4</span></a>
             </li>   
             <li class="nav-item">
            <a class="nav-link" href="admin_product.php">Admin</a>
             </li>
        </ul>
    </div>  
    </nav>
</div>

</div>

</div>
<!--2nd body-->
<div class="row" style="padding:30px">
  <div class="col-sm-9">
    <!--row of product-->
    <h3>Admin products</h3>
  <div class="row" style="padding:16px">
  
            <form action="admin_product.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label >Product Name</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label >Product description</label>
                <input type="text" name="des">
            </div>
            <div class="form-group">
                <label >Product Price</label>
                <input type="text" name="price">
            </div>
            <div class="form-group">
                <label >catagory</label>
                <input type="text" name="cat">
            </div>
            Select image to upload:
            <input type="file" name="picFile">

            <input type="submit" name="Submit" value="Submit">
            </form>

<?php 
    include_once("conn/config.php");

    if(isset($_POST['Submit'])) {	
        
         $name = $_POST['name'];
        $price = $_POST['price'];
        $des = $_POST['des'];
        $cat = $_POST['cat'];
         $imagetmp= addslashes (file_get_contents($_FILES['picFile']['tmp_name']));

        
         $sql = "INSERT INTO `product`(`name`, `des`, `price`, `pic`, `catagory`) VALUES ('$name','$des','$price','$imagetmp','$cat')";
         $result = mysqli_query($conn, $sql);          
       
         
              echo 'uploaded';
        
        }

?>

  </div>

</div>

    <!--side body-->
  <div class="col-sm-3">
        <div class="row">
        <form class="form-inline" action="search.php" method="get">
                <input class="form-control mr-sm-2" name = "name" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>

  </div>
</div>

<!--footer-->
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>SKS ELECTRONICS</p>
</div>
</body>
</html>