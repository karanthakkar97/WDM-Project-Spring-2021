<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('../styles/contactus.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../styles/socialmedia.css') }}" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="../scripts/email.js"></script>
</head>

<body>
    <nav>
        <div class="topnav">
            <a href="/">Home</a>
            <a href="/login">Login</a>
            <a href="/signup">Signup</a>
            <a href="https://immigrantportalblog.wordpress.com/">Blog</a>
            <a href="#">Contact Us</a>
            <a href="/aboutus">About Us</a>
        </div>
    </nav>

    <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
            <p>
                <h2>Let's get in touch</h2>
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><img src="../resources/icons/call.jpg"></div>
                    <div class="text">
                        <h3>Text or Call us</h3>
                        <p style="color:black;">123-123-1234</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="../resources/icons/mail.jpg"></div>
                    <div class="text">
                        <h3>Support</h3>
                        <p style="color:black;">supportxyz@abc.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form onsubmit="return contactus(this);">
                    <h2>Drop us a message</h2>
                    <div class="inputBox">
                        <input type="text" name="name-field" required="required" placeholder="Your Name">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email-field" required="required" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="content-field" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit-button" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

<script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
    function contactus(form) {
        var name = form.elements["name-field"].value;
        if ((name == "") || (name === undefined) || ([...name].length = 0)) {
            alert("Please enter a valid name");
            return false;
        }
        var email = form.elements["email-field"].value;
        if ((email == "") || (email === undefined) || ([...email].length = 0) || (!email.includes('@')) || (!email.includes('.'))) {
            alert("Please enter a valid email");
            return false;
        }
        var content = form.elements["content-field"].value;
        if ((content == "") || (content === undefined) || ([...content].length = 0)) {
            alert("Please enter queries to ask us");
            return false;
        }

        var subject = "Queries for Immigrans Portal";
        var body = "<html><h2>Query for Immigrants Portal Submitted Successfully</h2><br><strong>Query: </strong><em>" + content + "</em></html>";
        sendEmail(email, subject, body);

        return false;
    }
</script>

</html>
