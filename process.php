<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $date_hired = $_POST['date_hired'];

    $sql = "INSERT INTO employees (name, position, salary, date_hired) 
            VALUES ('$name', '$position', '$salary', '$date_hired')";

    if ($conn->query($sql) === TRUE) {
        header("Location: payroll.html"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
