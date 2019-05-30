<?php
  $count = 0;
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap\css\product.css">
  </head>
  <body>
    <!-- Example row of columns -->
    <p class="lead text-center text-muted">Latest books</p>
    <div class="row">
      <?php foreach($row as $book) { ?>
      <div class="col-md-3">
        <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
         <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
         <div class="product-info text-center">
           <div>
           <h3 class="name"><a href="product-details.php?pid=2"><?php echo $book['book_title']; ?></a></h3>
           <div class="description"></div>
           <div class="product-price">
             <span class="price">Rs. <?php echo $book['book_price']; ?>/-</span>
           </div><!-- /.product-price -->
           <a href="index.php?page=product&amp;action=add&amp;id=2" class="lnk btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </body>
</html>

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
