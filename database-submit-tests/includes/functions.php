<!-- creating a function that validates inputted data -->
<?php 
    function refine_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
?>

