<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<h2>Post Category</h2>
<?php
    require "action/add-category-action.php";
?>
<form method="POST">
    <label for="idcat">ID Category</label>
    <input type="text" name="idcat" id="idcat">
    <br>
    <label for="namecat">Category</label>
    <input type="text" name="namecat" id="namecat">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
    <br> <a href="post-book.php">Go to post book</a>
<?php
include "templates/footer.php";
?>