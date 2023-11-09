<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
    <title>Contact Us</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Your Logo" width="30" height="30" class="d-inline-block align-top">
                APEX ACHIEVERS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="pages/billionaires.html">Billionaires</a></li>
                            <li><a class="dropdown-item" href="pages/actors.html">Actors</a></li>
                            <li><a class="dropdown-item" href="pages/cricketers.html">Cricketers</a></li>
                            <li><a class="dropdown-item" href="pages/singers.html">Popstar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/aboutus.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.php">contact us</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

    <div class="container mt-5" style="color: aliceblue; background-color: rgb(21, 21, 51)!important;">
        <h1 class="text-center">Contact Us</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $success_message = "Thank you for your message, $name!";
            
            // Validate input data
            $valid = true;
            if (empty($name) || empty($email) || empty($message)) {
                $valid = false;
                echo '<div class="alert alert-danger" role="alert">All fields are required.</div>';
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $valid = false;
                echo '<div class="alert alert-danger" role="alert">Invalid email format.</div>';
            }
            
            if ($valid) {
                //Save or send the message (e.g., store in a database or send an email)
                echo '<div class="alert alert-success" role="alert">' . $success_message . '</div>';
            }
        }
        ?>

        <form method="POST" >
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>