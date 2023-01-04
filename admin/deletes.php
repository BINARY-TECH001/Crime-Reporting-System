<?php
     $conn = mysqli_connect("localhost", "root", "", "caaz") or die("Error : " . mysqli_error($conn));
     $id = $_GET['id'];
     $query = "DELETE FROM cases WHERE id='$id'";
     $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
     header("Location: v_issue.php");
?>