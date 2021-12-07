<!DOCTYPE html>
   <?php
   
      if ( !( $database = mysqli_connect( "localhost", "testuser", "mypassword" ) ) )
         die( "<p>Could not connect to database</p>" );
   
      if ( !mysqli_select_db( $database, "test") )
         die( "<p>Could not open database</p>" );
   
      if ( isset($_POST["name"]) )
         $name = $_POST["name"];
      
      if ( isset($_POST["amount"]) )
         $amount = $_POST["amount"];

      $query = "INSERT INTO table1 ( name, amount )";
      $query .= "VALUES ( '$name', '$amount' )";

      if ( !( $result = mysqli_query( $database, $query ) ) )
      {
         print( "<p>Could not execute query!</p>" );
         die( mysqli_error() );
      }
   ?>
   
<html>
   <head>
      <meta charset="utf-8">
      <title>Database Update</title>
   </head>
   <body>
      <h1>Database successfully updated.</h1>
      <table>
         <tr>
            <th>name</th><th>amount</th>
         </tr>
         <?php
            if ( !( $result = mysqli_query( $database,  "SELECT SUM( amount ) FROM table1 WHERE name='".$name."'" ) ) )
            {
               print( "<p>Could not execute query!</p>" );
               die( mysqli_error() );
            }

            mysqli_close( $database );
   
            while ( $row = mysqli_fetch_row( $result ) )
               print( "<tr><td>" . $name . "</td><td>" . $row[ 0 ] . "</td></tr>" );
         ?>
      </table>
   </body>
</html>
