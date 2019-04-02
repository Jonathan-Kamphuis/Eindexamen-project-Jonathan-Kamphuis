<?php
include('includes/Entities.class.php');

  public function changepage($ID) {
    switch ($ID) {
        case 0:
          $page = "Views/Login.php";
          break;
        case 1:
          $page = "Views/Signup.php";
          break;
        case 2:
          $page = "Views/Listing.php";
          break;
        case 3:
          $page = "Views/Message.php";
          break;
        }
  }

?>
