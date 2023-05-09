<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">iProgrammer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/tech.php">Technology</a></li>
                            <li><a class="dropdown-item" href="/web.php">Web Development</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/feedback.php">Feedback</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Contact Us</a>
                    </li>
                </ul>';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
    echo '<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
        <p class="text-light text-center my-0 mx-2 nbar">Welcome '.$_SESSION['user_email'].'</p>
        <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
    </form>';
} else {
    echo '<div class="mx-2">
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button></div>';
}
echo '</div>
        </div>
        </nav>';

include 'partials/loginModal.php';
include 'partials/signupModal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        <strong>Success!</strong> You can now login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>';
}
?>
