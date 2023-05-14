
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trendyverse/contactus</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

        .contact {
            padding: 2%;
            height: 400px;
        }

        .col-md-3 {
            background: #000000;
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        /* .contact-info {
                margin-top: 10%;
            } */

        .contact-info img {
            margin-bottom: 15%;
        }

        .contact-info h2 {
            color: white;
            margin-bottom: 10%;
        }
        .contact-info h4 {
            color: white;
        }
        .col-md-9 {
            background: #fff;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .contact-form label {
            font-weight: 400;
        }

        .contact-form button {
            background: #151515;
            color: #fff;
            font-weight: 600;
            width: 25%;
        }

        .contact-form button:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">
        <a href="./index.php">.TrendyVerse</a>
    </div>
    <ul class="navul">
        <li> <a href="./index.php">Home</a></li>
        <li  class="Collections"> <a href="">Collections </a>
            <div class="collection">
                <ul>
                    <li><a href="#">Women's Wear</a>

                    <li><a href="#">Men's Wear</a></li>
                    <li><a href="#">Kid's Wear</a></li>
                    <li><a href="#">FootWear</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul></div></li>


        <li> <a href="./contactus.php">Contact us</a></li>
        <li>  <a href="./about.php" id="about" >About</a></li>
        <li><a href=""><i class="fa-solid fa-cart-shopping icon"></i></a></li>
    </ul>
    <div class="login">
        <a class="login1" href="./login.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20"  fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 16" >
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>Account</a>
    </div>

</nav>


<div class="container contact  ">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                <h2>Contact Us</h2>
                <h4>We would love to hear from you!</h4>
            </div>
        </div>
        <div class="col-md-9 border border-dark">
            <div class="contact-form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder=" Enter your name"
                               name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="message">Message:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="message"></textarea>
                    </div>
                </div>
                <div class="form-group my-2">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default"  onclick="gotowhatsapp()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function gotowhatsapp() {

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        var url = "https://wa.me/+919958430577?text="
            + "Name: " + name + "%0a"
            + "Email: " + email + "%0a"
            + "Message: " + message;

        window.open(url, '_blank').focus();
    }
</script>

</html>



