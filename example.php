<!DOCTYPE html>
<html>
<head>
  <title>Star ratings in PHP using font awesome star icons</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .ratings i {
      color: #ff9900;
    }
  </style>
</head>
<body>
<?php
  include 'value_to_star_rating.php';
?>
  <div class="ratings">
     <p>3.5 star ratings: <?php echo star_rating(3.5); ?></p>
     <p>5 star ratings: <?php echo star_rating(5); ?></p>
     <p>2.5 star ratings: <?php echo star_rating(2.5); ?></p>
     <p>4.5 star ratings: <?php echo star_rating(4.5); ?></p>
     <p>4 star ratings: <?php echo star_rating(4); ?></p>
  </div>
</body>
</html>