<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<?php
/*
Template Name:Insert
*/
?>

<div class="contact-form">
        <h1>DATABASE FORM</h1>
    </div>
    <div class="contact-us">
       <form method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="submit" class="form-control submit" value="insert" name="insert" >
       </form>
	 
	   <?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "office") or die("connection failed");
$sql = "INSERT INTO database_table(First_name,Last_name, Email, Mobile) VALUES ('{$firstname}','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
mysqli_close($conn);
?>
</div>

	   

