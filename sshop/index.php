<?php 
include_once 'conn/config.php';
$sql = "SELECT * FROM product ORDER BY date DESC LIMIT 8";
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

    <script>
                $(document).ready(function(){
            $(".watch").click(function(){
               $val =  $(this).attr('val');
                $.post("conn/add_watch.php",
                {
                     product_id: $val
                },
                function(data,status){
                 alert(data);
                });
            });
            });
    </script>
</head>
<body>



<div class="row" style="background-image:url(img/banner.jpeg); background-repeat:no-repeat;background-size:cover;">

<div class="col-sm-12">
    <nav class="navbar navbar-expand-sm navbar-dark">
        
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Logo" style="width:180px;">
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
<div class="col-sm-12" style="min-height:40vw">
  <h1 style="text-align:center; top:15vw; position:relative; color:white; font-family: Courier New; font-weight:100">Summer Offer</h1>
  <h3 style="text-align:center; top:15vw; position:relative; color:white; font-family: Courier New; ">40% Discount</h3>
</div>
</div>

<div class="row" style="border: 4px solid #f5f5f5; padding:20px;">
    <div class="col-sm-3 borderRight">
        <img src="img/freeDelivery.png" height="60vw" width="60vw">
        Free Delivery
    </div>
    <div class="col-sm-3 borderRight">
    <img src="img/support.png" height="60vw" width="60vw">
        Free Delivery
    </div>
    <div class="col-sm-3 borderRight">
     <img src="img/return.png" height="60vw" width="60vw">
        Free Delivery
    </div>
    <div class="col-sm-3 borderRight">
    <img src="img/secure.png" height="60vw" width="60vw">
        Free Delivery
    </div>
</div>
<!--2nd body-->
<div class="row" style="padding:30px">
  <div class="col-sm-9">
    <!--row of product-->
  <div class="row" style="padding:16px">
 
  <?php 
	while($res = mysqli_fetch_array($result)) { 
	
 
        echo '<div class="card" style="width:16vw; padding:5px">
        
                <a href="detail.php?id='.$res['id'].'"><img class="card-img-top" src="data:image/png;base64,'.base64_encode($res['pic']).'" alt="Card image"></a> <button class="watch badge badge-secondary" val="'.$res['id'].'">Add To watch List</button>
                <div class="card-body">
                    <span>'.$res['name'].'</span></br>
                    <img src="img/star.png" height="20vw" width="100vw">
                    <p>$'.$res['price'].'</p>
                
                </div>
                
        </div>';

    }
    
    ?>

  </div>
  <div class="row">
        <img src="img/banner_d1.png" style="width:100vw">
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