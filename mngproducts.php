<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php include "header.php" ?>
 
  <div class="position-absolute top-50 start-50 translate-middle w-50">  

  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>


<div class="d-grid gap-2 col-6 mx-auto">
  <a class="btn btn-primary" href="addproducts.php" role="button">Add a product</a>
  <a class="btn btn-primary" href="updateproducts.php" role="button">Update a product</a>
  <a class="btn btn-primary" href="deleteproducts.php" role="button">Delete a product</a>
</div>

</div>   
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

