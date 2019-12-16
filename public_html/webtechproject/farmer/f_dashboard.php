<?php
$con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
if($con->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user = $_COOKIE['user'];
$sql = "SELECT crop_type, name, quantity, date_planted_on FROM add_crop WHERE user='$user'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr style='border-bottom: 2px solid;'><td>" . $row["crop_type"] . "</td><td>"
    . $row["name"]. "</td><td>" . $row["quantity"] . "</td><td>" . $row["date_planted_on"] . "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $con->close();

?>