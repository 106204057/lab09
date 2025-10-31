<?php
    require_once 'setting.php';
    $dbconn = @mysqli_connect ($host,$user,$pwd,$sql_db);
    if ($dbconn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if($result){
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Brand</th><th>Model</th><th>Price</th><th>Year</th></tr>";
            if(mysqli_num_rows($result) == 0){
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }
            else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['brand'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
            }   
            echo "</table>";
        }
        mysqli_close($dbconn);
    }
    else {
        echo "<p>Database connection failed</p>";
    }
?>