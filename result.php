<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $club = $_POST["club"];
    $skills = $_POST["skill"];
    $time = $_POST["time"];

    echo "<div style='display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center;'>";
    echo "<img src='logo.png' alt='User Image' style='width: 100px;'><br>";
    echo "Thank you $name!<br>";
    echo "We received your application for the $club<br>";
    echo "You are " . implode(" and ", $skills) . ".<br>";
    echo "You will be available on $time.";
    echo "</div>";
}
?>