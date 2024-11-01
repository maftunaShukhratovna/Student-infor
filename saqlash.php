<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>

</body>
</html>


<?php
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST['age'];
    $fakultet = $_POST['fakultet'];
    $course = $_POST['course'];


    $conn = new PDO("mysql:host=localhost;dbname=students", "root", "****");

    $insertinfo = "INSERT INTO students (fname, lname, age, fakultet, course) VALUES (:fname, :lname, :age, :fakultet, :course)";

    $matching = $conn->prepare($insertinfo);
    $matching->execute([
        ':fname' => $fname,
        ':lname' => $lname,
        ':age' => $age,
        ':fakultet' => $fakultet,
        ':course' => $course
    ]);

    $query = $conn->query("SELECT * FROM students");
    

    echo "<table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Faculty</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($query as $row) {
        echo "<tr>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['age']}</td>
                <td>{$row['fakultet']}</td>
                <td>{$row['course']}</td>
            </tr>";
    }

    echo "</tbody></table>";
    
}
?>