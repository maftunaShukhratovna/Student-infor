<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Information Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

</body>
</html>


<?php
if (isset($_POST["submit"])) {
    $email=$_POST["email"];
    $passwordinfo=$_POST["passwordinfo"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dbirth = $_POST['dbirth'];
    $fakultet = $_POST['fakultet'];
    $course = $_POST['course'];
    $gender=$_POST["gender"];


    $conn = new PDO("mysql:host=localhost;dbname=students", "root", "maftuna2005");

    $insertinfo = "INSERT INTO students (email,passwordinfo,fname, lname, dbirth, fakultet, course, gender) VALUES (:email, :passwordinfo,:fname, :lname, :dbirth, :fakultet, :course,:gender)";

    $matching = $conn->prepare($insertinfo);
    $matching->execute([
        ':email' => $email,
        ':passwordinfo' => $passwordinfo,
        ':fname' => $fname,
        ':lname' => $lname,
        ':dbirth' => $dbirth,
        ':fakultet' => $fakultet,
        ':course' => $course,
        ':gender' => $gender,
    ]);

    $query = $conn->query("SELECT * FROM students");

    echo '
    <div class="container">
        <table class="table">
            <thead>
                <tr class="table table-secondary">
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Course</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>

    ';


    $counter=1;

    foreach ($query as $row) {
        if ($counter%2==1){
            echo"<tr class='table table-light'>
                <td>{$counter}</td>
                <td>{$row['email']}</td>
                <td>{$row['passwordinfo']}</td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['dbirth']}</td>
                <td>{$row['fakultet']}</td>
                <td>{$row['course']}</td>
                <td>{$row['gender']}</td>
                </tr>
            ";
        }
        else{
            echo"<tr class='table table-secondary'>
                <td>{$counter}</td>
                <td>{$row['email']}</td>
                <td>{$row['passwordinfo']}</td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['dbirth']}</td>
                <td>{$row['fakultet']}</td>
                <td>{$row['course']}</td>
                <td>{$row['gender']}</td>
                </tr>
            ";
        }
        $counter++;
    }

    echo "</tbody></table></div";
    
}
?>