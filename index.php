<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Find what you're looking for!!!</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'autocomplete_search.php'
    });
  });
  </script>
</head>
<body>
<div class="container">
  <h2>Find what you're looking for!!!</h2>
  <label for="skills" class="control-label">Product name: </label>
  <input id="skills" class="form-control" placeholder="Enter the product you're looking for">
</div>
</body>
<?php
// used to test if the connection to the db works
//include "auto.php";
?>
</html>