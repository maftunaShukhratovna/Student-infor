<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create student account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="tableform.php" method="post">
            <div class="heading">
                <h2 class="text-danger text-center">Create student account</h2>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Enter your email:">
            </div>

            <div class="mb-3">
                <label for="passwordinfo" class="form-label">Password</label>
                <input required type="password" class="form-control" id="passwordinfo" name="passwordinfo" placeholder="Set password:">
            </div>

            <!-- <div class="mb-3">
                <label for="confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmation" required>
                <div id="passwordHelp" class="form-text text-danger" style="display: none;">password do not match.</div>
            </div> -->

            <hr>

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input required type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name:">
                <div id="fname" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input required type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name:">
            </div>

            <div class="mb-3">
                <label for="dbirth" class="form-label">Date of Birth</label>
                <input required type="date" class="form-control" id="dbirth" name="dbirth" placeholder="Enter your date of birth">
            </div>


            <label for="fakultet" class="form-label">Faculty</label>
            <select class="form-select" aria-label="Select" name="fakultet">
                <option value="Programming">Programming</option>
                <option value="Medicine">Medicine</option>
                <option value="Law">Law</option>
                <option value="Finance">Finance</option>

            </select>

            <br>

            <label for="course" class="form-label">Course</label>
            <select class="form-select" aria-label="Select" name="course">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <br>

            <input class="form-check-input" value="Male" type="radio" name="gender" id="gender">
            <label class="form-check-label" for="gender"> Male</label>

            <input class="form-check-input" value="Female" type="radio" name="gender" id="gender">
            <label class="form-check-label" for="gender"> Female</label>

            <br><br>
            <button type="submit" name="submit" class="btn btn-primary">Create account</button>

        </form>
    </div>


</body>

</html>