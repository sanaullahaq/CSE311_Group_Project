<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
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