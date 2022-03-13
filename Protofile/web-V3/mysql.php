<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "admin", "123", "preregistration_db");
  mysqli_set_charset($link, "utf8");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM courses WHERE courseID=ANY(SELECT courseID FROM register)";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>courseID</th>";
                echo "<th>course_name_in_arabic</th>";
                echo "<th>course_name_in_english</th>";
                echo "<th>credit</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['courseID'] . "</td>";
                echo "<td>" . $row['course_name_in_arabic'] . "</td>";
                echo "<td>" . $row['course_name_in_english'] . "</td>";
                echo "<td>" . $row['credit'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>