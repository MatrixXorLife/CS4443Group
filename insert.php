
<?php
$reciever=$_POST["reciever"];
   
   $checkAmount=$_POST["checkAmount"];
   
   $db = @mysqli_connect("localhost", "testuser", "mypassword", "checkdata")
   
   OR die('could not connect to mysql: '.mysqli_error($db)); 
   
   $db->query("insert into checkdatatable(reciever, checkAmount) values('$reciever','$checkAmount')");
   ?>
   <html>
      <form action="welcome.php">
         <input type="submit" value="Next check">
</form>
</html>
<script>window.location.href = 'welcome.php'</script>