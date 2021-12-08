
<?php
$reciever=$_POST["receiver"];
   
   $checkAmount=$_POST["checkAmount"];
   
   $db = @mysqli_connect("localhost", "testuser", "mypassword", "checkdata")
   
   OR die('could not connect to mysql: '.mysqli_error($db)); 
   
   $db->query("insert into checkdatatable(receiver, checkAmount) values('$receiver','$checkAmount')");
   ?>
   <html>
      <form action="welcome.php">
         <input type="submit" value="Next check">
</form>
</html>
<script>window.history.go(-1)</script>