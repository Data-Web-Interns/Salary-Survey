<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name'];  print "<script type=\"text/javascript\"> alert('YAYA you signed in!!'); </script>";

include("dashboard.php");
?>

 


<a href="index.php?logout">Logout</a>
