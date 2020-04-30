<?php
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
//recaptcha validation 
    $secret = '6LcxoukUAAAAANeHB_RgqieBILiB7fwPKTpM08Hw'; // recaptcha v2 secret key
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=" . $_POST['g-recaptcha-response']; //verifying using the secret key
    $verify = json_decode(file_get_contents($url)); //this takes the json response from $repsonse varible and turns it into a php variable.
//if statment which checks if the vericication is successful then proceeds to do this 
    if ($verify->success) {
        $name = $_POST['nameInput']; //name of sender
        $email = $_POST['emailInput']; //email of sender
        $subject = $_POST['subjectInput']; //subject of message
        $message = $_POST['messageInput']; //content of message
        $to = "tobybluck1210@hotmail.co.uk"; //email to send to
        //organisation of message being sent
        $formarrange = "From: $name \n Message: $message \n $email \r\n"; // \n is new line and \r is carriage return which takes it to the beginning of current line
        //headers 
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //if statment letting you know whether the message has been sucessful or not
        if (mail($to, $subject, $formarrange, $headers)) {
            echo "Thank you for contacting us";
        } else {
            echo "Email failed to send!";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- meta tags to help SEO -->
    <meta charset="utf-8">
    <title>AllStars Sports Bar</title>
    <meta name="author" content="Toby B">
    <meta name="description" content="AllStars Sports Bar, based in the  south west of the UK">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
        <!-- script for Recaptcha v2  -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>    <!-- provided by google -->


    <!--favicon from https://realfavicongenerator.net/ -->
    <!--optimised favicon, imgs for different devices with prefixed code for it this allows for the little icon in the top of the tab-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!--- HEADER BANNER --->
    <header>

        <!--- nav bar --->
        <!-- used a bootstrap component with minor alterations to tailor it to requirments and standardised web dev pratices -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img src="img/AllStarsLogo.png" alt="All Stars Sports Bar" width="30%"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Venues
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="venuesB.html">Bristol</a>
                            <a class="dropdown-item" href="venuesT.html">Taunton</a>
                            <a class="dropdown-item" href="venuesE.html">Exeter</a>
                            <a class="dropdown-item" href="venuesW.html">Weston-Super-Mare</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="livesports.html">Live Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food.html">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discount.html">Discounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.html">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="parties.html">Parties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--- Nav bar end --->
    </header>

<!--full sized jumbotron without rounded corners this is due to the fluid modifier -->
    <div class="faq-page jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Contact Us</h1>
            <p>All Stars Sports Bar</p>
        </div>
    </div>


    <div class="container">
        <div class="main-content-area">
            <h2>Ways to get in-touch</h2>
            <P>Telephone: WESTON 01934 419111,
                TAUNTON 01823 334880,
                BRISTOL 01179 294295,
                EXETER 01392 438853</P>

            <P>Email: weston@allstarssportsbars.co.uk,
                taunton@allstarssportsbars.co.uk,
                bristol@allstarssportsbars.co.uk,
                exeter@allstarssportsbars.co.uk</P>
        </div>
    </div>


    <div class="container">
        <div class="contact-form-section">

            <!--contact form calling for the contact.php, post is used to put the form data into the http request -->
            <form action="contact.php" method="post">

                <!--Boostrap component in which allows a stylized column that allows for a layout in which is close and compact together -->
                <!--Name input -->
                <!--form group is a bootstrap style which is used to add structure and help the overall layout of the from and gouping of comeponents -->
                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <!--Form control is used for the input to add styles and overall sizing of the element from bootstrap -->
                    <!-- record user input, class from bootstrap allows for validation --> 
                    <input type="text" id="nameInput" name="nameInput" class="form-control" placeholder="John Smith" required="true"> 
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <!-- placeholder is used to put text in the input box which can demonstrate an example -->
                    <input type="email" id="emailInput" name="emailInput" class="form-control" placeholder="Someone@somewhere.com" required="true"> 
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <label for="subjectInput">Subject</label>
                    <input type="text" id="subjectInput" name="subjectInput" class="form-control" placeholder="Whats your enquiry?" required="true">
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="messageInput">Message</label>
                    <!--Textarea is used for a larger amount of text which can be increased in size if there isnt enough room making it suitable for a message -->
                    <textarea type="text" id="messageInput" name="messageInput" class="form-control" row="4" placeholder="What do you want to say?" required="true"></textarea>
                </div>

                <!-- reCaptcha which has a api key and a class which is connected to a script to display the verifcation tick box-->
                <div class="g-recaptcha" data-sitekey="6LcxoukUAAAAAOicujrCLboFwIOah3XDNESnihti"></div>

                <!-- Submit, posts the data  -->
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
     
            </form>
        </div>
    </div>


    <!--social and venue banner -->
    <div class="container-fluid">
        <div class="venue-bar">
            <h3>Venue bar</h3>
            <button id="venue-button">Click here</button>
            <div class="venue-dropdown-content">

                <div class="venue-content-one venue-content">
                    <a href="venuesT.html"><img src="img/venuesIcon.png"></a>
                    <p>Taunton</p>
                </div>
                <div class="venue-content-two venue-content">
                    <a href="venuesE.html"><img src="img/venuesIcon.png"></a>
                    <p>Exeter</p>
                </div>
                <div class="venue-content-three venue-content">
                    <a href="venuesB.html"><img src="img/venuesIcon.png"></a>
                    <p>Bristol</p>
                </div>
                <div class="venue-content-four venue-content">
                    <a href="venuesW.html"><img src="img/venuesIcon.png"></a>
                    <p>Weston</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="social-bar">
            <h3>Social bar</h3>
            <button id="social-button">Click here</button>

            <div class="social-dropdown-content">
                <div class="row">
                    <div class="social-content-one social-content">
                        <a href="https://www.facebook.com/allstarstaunton/?fref=ts" target="_blank"><img src="img/facebook.png"></a>
                        <p>Taunton</p>
                    </div>
                    <div class="social-content-two social-content">
                        <a href="https://www.facebook.com/allstarssportsbarexeter/?ref=br_rs" target="_blank"><img src="img/facebook.png"></a>
                        <p>Exeter</p>
                    </div>
                    <div class="social-content-three social-content">
                        <a href="https://www.facebook.com/allstarsbristol/?fref=ts" target="_blank"><img src="img/facebook.png"></a>
                        <p>Bristol</p>
                    </div>
                    <div class="social-content-four social-content">
                        <a href="https://www.facebook.com/allstarssportsbars/?ref=br_rs" target="_blank"><img src="img/facebook.png"></a>
                        <p>Weston</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer-left">

                        <p>Allstars Sports Bars</p>
                        <p>Copyright 2019</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer-middle">
                        <p><a href="faq.html" target="_blank" style="color: #FFF">FAQ's</a></p>
                        <p><a href="privacy.html" target="_blank" style="color: #FFF">PRIVACY POLICY</a></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer-right">
                        <p>Weston-super-Mare 01934 419 111 | Taunton 01823 334 880 | Bristol 01179 294 295 | Exeter 01392 438 853</p>
                        <p>weston@allstarssportsbars.co.uk, taunton@allstarssportsbars.co.uk, bristol@allstarssportsbars.co.uk, exeter@allstarssportsbars.co.uk</p>
                        <a href="https://www.facebook.com/groups/1734623133420097/" target="_blank"><img src="img/facebook.png" class="facebook-icon" alt="Facebook"></a>
                        <a href="https://www.linkedin.com/company/allstars-sports-bars" target="_blank"><img src="img/linkedin.png" class="linkedin-icon" alt="LinkedIn"></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
