<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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


    $conn = new PDO("mysql:host=localhost;dbname=students", "root", "maftuna2005");

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

    echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>
            <tbody>
    ';

    $counter=1;

    foreach ($query as $row) {
        echo"<tr>
                <td>{$counter}</td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['age']}</td>
                <td>{$row['fakultet']}</td>
                <td>{$row['course']}</td>
                </tr>
            ";
        $counter++;
    }

    echo "</tbody></table>";
    
}
?>