<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Username: <?php echo $_GET["Username"]; ?>
Your email address is: <?php echo $_GET["Email"]; ?>
Message: <?php echo $_GET["Message..."]; 


if($_GET['Submit'] == "Submit") 
{
   $varUsername = $_GET['Username'];
   $varEmail = $_GET['Email'];
   $varMessage = $_GET['Message'];
   $errorMessage = "go back";
 
}

?> 

</body>
</html> 

