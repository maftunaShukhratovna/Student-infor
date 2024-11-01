<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register form</title>
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <form action="saqlash.php" method="post">
        <div class="heading">
            <h2>Student Register form</h2>
        </div>

        <div class="labels">
            <label for="fname">First name
                <input type="text" placeholder="Enter First name" id="fname" name="fname">
            </label>

            <br><br>

            <label for="lname">Last name
                <input type="text" placeholder="Enter Last name" id="lname" name="lname">
            </label>

            <br><br>

            <label for="age">Age
                <input type="number" placeholder="Enter age" id="age" name="age">
            </label>

            <br><br>

            <label for="fakultet">Faculty
                <select name="fakultet" id="fakultet">
                    <option value="Dasturlash">Dasturlash</option>
                    <option value="Huquq">Huquq</option>
                    <option value="Iqtisod">Iqtisod</option>
                    <option value="Tibbiyot">Tibbiyot</option>
                </select>
                </label>

            <br><br>

            <label for="course">Course
                <select name="course" id="course">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </label>
        </div>

        <br>
        <button type="submit" name="submit">Submit</button>


    </form>
</body>

</html>
