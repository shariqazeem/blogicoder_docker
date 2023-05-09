<?php include 'partials/_dbconnect.php';?>
<?php include 'partials/header.php';?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>iProgrammer - The Best Coding Blog</title>
</head>
<?php
$result = false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $email = $_POST['cemail'];
    $description = $_POST['desc'];

    $sql = "INSERT INTO `contact` (`first_name`, `last_name`, `address`, `city`, `user_email`, `desc`) VALUES ('$first_name', '$last_name', '$address', '$city', '$email', '$description')";
    $result = mysqli_query($conn, $sql);
    
}
if ($result>0) {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        <strong>Success!</strong> Your form has been submitted successfully. We will contact you shortly!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>';
}
else {
echo '<div class="container my-4">
    <h2>Contact Us</h2>
    <form action="/contact.php" method="post"class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="cemail" name="cemail" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Elaborate Your Concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
          </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<hr class="featurette-divider">';
}
?>
<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2020–2023 iProgrammer, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->