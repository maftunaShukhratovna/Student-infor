<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="saqlash.php" method="post">
            <div class="heading">
                <h2 class="text-danger text-center">Student Register form</h2>
            </div>

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="Enter first name">
                <div id="fname" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>


            <label for="fakultet" class="form-label">Faculty</label>
            <select class="form-select" aria-label="Select" name="fakultet">
                <option selected>Select Faculty:</option>
                <option value="Programming">Programming</option>
                <option value="Medicine">Medicine</option>
                <option value="Law">Law</option>
                <option value="Finance">Finance</option>

            </select>

            <br>

            <label for="course" class="form-label">Course</label>
            <select class="form-select" aria-label="Select" name="course">
                <option selected>Select Course:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>  

        </form>
    </div>


</body>

</html>
