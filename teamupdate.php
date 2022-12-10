<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
          $idteams =  $_POST['idteams'];
          

          $fields = array('teamname','wins','losses');

          // Loop through the fields
          foreach ($fields as $field) {
            // Check if the field is not empty
            if (!empty($_POST[$field])) {
              // Update the field in the database
              $query = "UPDATE teams SET $field = '$_POST[$field]' WHERE idteams=$idteams";
              $result = $conn->query($query);
            }
          }


        if(mysqli_query($conn, $query)){
              echo "<h3>data stored in a database successfully."
                  . " Please browse "
                  . " to view the updated data</h3>";
            //
          } else{
              echo "ERROR: Hush! Sorry $query. "
                  . mysqli_error($conn);
                }

        header('location:adminteams.php');
        // Close connection

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
