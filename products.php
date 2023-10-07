<?php
session_start();
@include 'config.php';

$sql = "SELECT * FROM products";
$data = mysqli_query($conn,$sql);
?>

<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>

  <?php include "header.php" ?>
  
  <div class="position-absolute top-50 start-50 translate-middle w-75 h-75">  
  <div class="row row-cols-1 row-cols-md-3 g-4">

<?php while($row = mysqli_fetch_assoc($data)):?>
  <div class="col">
    <div class="card">
      <img src="<?php echo $row['image'];?>" class="card-img-top" alt="<?php echo $row['name'];?> image">
      <div class="card-body">
        <h4 class="card-title"><?php echo $row['name'];?></h4>
        <h5 class="card-title">Rs.<?php echo $row['price'];?></h5>
        <p class="card-text"><?php echo $row['description'];?></p>
      </div>
    </div>
  </div>
<?php endwhile;?>

</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>