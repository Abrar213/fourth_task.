<?php
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "DB";

     
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
       }

      $sql = "SELECT intnumber FROM number1 ";
      $result = $conn->query($sql);


     
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>intnumber</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["intnumber"] . "</td><tr>";
        }
        echo "</table>";
     
      $conn->close();
    }
    ?>