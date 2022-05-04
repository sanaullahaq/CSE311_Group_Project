<?php 
$ip = $_SERVER["REMOTE_ADDR"];
include_once 'conn/config.php';

$sql = "SELECT * FROM product p JOIN watch_list w ON p.id = w.product_id JOIN user u ON w.user_id = u.user_id WHERE u.ip_address = '$ip'";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SKS Electronics</title>
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
    <h3>Watch List</h3>
  <div class="row" style="padding:16px">
  
  <?php 
	while($res = mysqli_fetch_array($result)) { 
	
 
        echo '<div class="card" style="width:16vw; padding:5px">
        
                <img class="card-img-top" src="data:image/png;base64,'.base64_encode($res['pic']).'" alt="Card image"> <button class="badge badge-secondary">Add To watch List</button>
                <div class="card-body">
                    <span>'.$res['name'].'</span></br>
                    <img src="img/star.png" height="20vw" width="100vw">
                    <p>$'.$res['price'].'</p>
                
                </div>
                
        </div>';

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
        <h5 style="padding-top:20px"> catagory </h5>
        <!--catagory body-->
        <div class="row" style="padding-top:10px; height: 40vw">
        
   

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="catagory.php?cat=Display">Display</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="catagory.php?cat=IC">IC</a>
  </li>
  <li class="nav-item">
     <a class="nav-link" href="catagory.php?cat=LED">LED</a>
  </li>
</ul>


        </div>
  </div>
</div>

<!--footer-->
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>SKS Electronics</p>
</div>
</body>
</html>