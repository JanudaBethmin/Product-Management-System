<?php
session_start();

require_once ('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $select = "INSERT INTO products (name, price, description, image) VALUES('$name', '$price', '$description','img/$image');";
    mysqli_query($conn, $select);
    
    header('location:mngproducts.php');
}

if(isset($_POST['back'])){
    echo ("location:../mngproducts.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php include "header.php" ?>
 
  <div class="position-absolute top-50 start-50 translate-middle w-50">  
  <form class="row g-3" method="POST">
  <label for="exampleInputEmail1" class="form-label"><h1>Add Products</h1></label>
  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <div class="col-md-6">
    <label for="validationServer01" class="form-label">Product name</label>
    <input type="text" name="name" class="form-control" id="validationServer01" required>
  </div>
  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Product price</label>
    <input type="text" name="price" class="form-control" id="validationServer02" required>
  </div>
  <div class="col-md-12">
  <label for="validationServer02" class="form-label">Product description</label>
  <div class="form-floating">
  <textarea class="form-control" name="description" id="floatingTextarea" required></textarea>
  </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Product image name with the extention </label>
    <input type="text" name="image" class="form-control" id="validationServer02" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Add product</button>
  </div>
</form>
</div>   

<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>