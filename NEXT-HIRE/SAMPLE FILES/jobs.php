<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM jobs");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>Location: " . $row['location'] . "</p>";
    echo "<p>Salary: " . $row['salary'] . "</p>";
    echo "<form action='apply.php' method='POST'>
            <input type='hidden' name='job_id' value='" . $row['id'] . "'>
            <button type='submit'>Apply</button>
          </form>";
    echo "</div>";
}
?>
