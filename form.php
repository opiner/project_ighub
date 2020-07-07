<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Username: <?php echo $_POST["Username"]; ?>
Your email address is: <?php echo $_POST["Email"]; ?>
Message: <?php echo $_POST["Message..."]; 


if($_POST['Submit'] == "Submit") 
{
   $varUsername = $_POST['Username'];
   $varEmail = $_POST['Email'];
   $varMessage = $_POST['Message'];
   $errorMessage = "go back";
 
}

?> 

</body>
</html> 

