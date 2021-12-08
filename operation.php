<style>
   td {
  padding: 30px;
  border-bottom: 1px solid #ddd;
  text-align: center;
  width: 500px;
}
th {
   padding: 30px;
   background-color: #228B22;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:nth-child(odd) {background-color: beige;}
body {
   background-color: #DCDCDC;
}
input {
   padding:50px;
   width: 500px;
   height: 100px;
   font-size:20px;
   background-color: #87CEEB;
}
</style>
<center>
   <?php
   $db = @mysqli_connect("localhost", "testuser", "mypassword", "checkdata")
   OR die('could not connect to mysql: '.mysqli_error($db)); 
      $query = "SELECT * FROM checkdatatable";
      echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">Reciever</font> </th> 
          <th> <font face="Arial">Check Amount</font> </th> 
      </tr>';
      if ($result = $db->query($query)) {
         while ($row = $result->fetch_assoc()) {
            $field1name = $row["reciever"];
            $field2name = $row["checkAmount"];
            echo '<tr> 
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td> 
        </tr>';       
        }
        $result->free();
      }
    ?>
   <html>
      <form action="welcome.php">
         <input type="submit" value="Go back to Data Entry">
</form>
</html>
   </center>

