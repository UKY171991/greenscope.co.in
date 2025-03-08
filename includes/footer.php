<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Connect to Us</h4>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8805022728</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>drsham.greenscope@gmail.com</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="<?=$bu?>">Home</a>
                <a class="btn btn-link" href="<?=$bu?>about.php">About</a>
                <a class="btn btn-link" href="<?=$bu?>services.php">Services</a>
                <a class="btn btn-link" href="<?=$bu?>gallery.php">Gallery</a>
                <a class="btn btn-link" href="<?=$bu?>contact.php">Contact</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Follow Us</h4>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                        href="https://www.facebook.com/greenscope"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                        href="https://www.instagram.com/greenscope.solutions"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">GreenScope</a>, All Rights Reserved. Designed by <a class="border-bottom" href="https://www.sitsolutions.co/">SITSolutions</a>
            </div>
            <div class="col-md-6 text-center text-md-end">

            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>

<?php
// functions
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function validateName($name)
{
    $valid = true;
    $name = str_replace(' ', '', $name); // Remove all spaces
    $name = str_replace('.', '', $name); // Remove all dots
    if (strlen($name) < 3 || !ctype_alnum($name)) {
        $valid = false;
    }
    return $valid;
}
function validateMobileNumber($number)
{
    $valid = true;
    if (strlen($number) != 10 || !ctype_digit($number)) {
        $valid = false;
    }
    return $valid;
}
// functions
if (isset($_POST['send_msg'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $msg = $_POST['message'];
    $error = "";
    // validate name
    if (empty($_POST["fullname"])) {
        $error .= "Full Name is required.<br>";
    } else {
        if (!validateName($name)) {
            $error .= "Name Can have Alphabets, spaces and dots.<br>";
        } else {
            $name = test_input($_POST["fullname"]);
        }
    }
    // validate contact
    if (empty($_POST["contact"])) {
        $error .= "Contact is required.<br>";
    } else {
        if (!validateMobileNumber($contact)) {
            $error .= "Contact should be exactly of 10 Digits.<br>";
        } else {
            $contact = test_input($_POST["contact"]);
        }
    }
    // validate email
    if (empty($_POST["email"])) {
        $error .= "E-Mail is required.<br>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "Email Format is not correct.<br>";
        } else {
            $email = test_input($_POST["email"]);
        }
    }
    // validate msg
    if (empty($_POST["message"])) {
        $error .= "Message is required.<br>";
    } else {
        $msg = test_input($_POST["message"]);
    }
    if ($error == "") {
        $subject = "New Message from Greenscope message form.";
        $message = "";
        $to = "drsham.greenscope@gmail.com";
        $message .= "Hello Admin,<br>";
        $message .= "\tYou have got a new Message. Below are the Details:<br><br>";
        $message .= "<strong>Name</strong>: " . $name . "<br>";
        $message .= "<strong>Contact</strong>: " . $contact . "<br>";
        $message .= "<strong>Email Id</strong>: " . $email . "<br>";
        $message .= "<strong>Message</strong>: " . $msg . "<br><br>";
        $message .= "---------------------------------<br><br>";
        $message .= "Team<br>";
        $message .= "Greenscope<br>";
        $headers = "From: " . strip_tags($email) . "\r\n";
        $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if ($x = mail($to, $subject, $message, $headers)) {
            $msg = "Form Submitted Successfully.";
            echo "<script>$('.errorlist').css('color','#0F4229')</script>";
            echo "<script>$('.errorlist').html('" . $msg . "')</script>";
        } else {
            $msg = "Form Not Submitted.";
            echo "<script>$('.errorlist').css('color','#D91414')</script>";
            echo "<script>$('.errorlist').html('" . $msg . "')</script>";
        }
    } else {
        echo "<script>$('.errorlist').html('" . $error . "')</script>";
    }
}
?>