<!DOCTYPE html>
<html>
<title>Immigrant Portal</title>

<head>
    <link rel="stylesheet" href="{{ url('styles/socialmedia.css') }}" />
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Sofia') }}" />
</head>

<body>

    <nav>
        <div class="topnav">
            <a href="#">Home</a>
            <a href="/login">Login</a>
            <a href="/signup">Signup</a>
            <a href="https://immigrantportalblog.wordpress.com/">Blog</a>
            <a href="/contactus">Contact Us</a>
            <a href="/aboutus">About Us</a>
        </div>
    </nav>

    <section>
        <div class="welcome">
            <h1 style="color: #DE354C;font-size:70px; font-family: 'Sofia', sans-serif">Welcome to Immigrant Portal</h1><br>
            <i style="font-size:25px; font-family: Georgia, serif">"Diversity is not about how we differ. Diversity is about embracing one anothers. "</i> <br>
            <i style="font-size:20px; font-family: Georgia, serif"> - Old Joseph</i><br> <br>
            <a href="{{url('login')}}"><button class="button button1">Register / Login</button></a>
        </div>
    </section>

    <section>
        <div class="base1" style="margin-top: 5px;">
            <h3 style="color:#932432;font-size:30px;font-family: 'Times New Roman', Times, serif;"><u>Key Features of our Website</u></h3><br><br>
            <div class="column">
                <h6 style="font-size:20px;  color: #3C1874;">Diversity <br> <br> <br> </h6>
                <div class="zoom">
                    <i class="fa fa-users" style="font-size:90px"></i>
                </div>
            </div>
            <div class="column">
                <h6 style="font-size:20px; color: #3C1874;">Communicate <br> <br><br> </h6>
                <div class="zoom">
                    <i class="fa fa-comments-o" style="font-size:100px"></i>
                </div>
            </div>
            <div class="column">
                <h6 style="font-size:20px;  color: #3C1874;">Tools & Resources <br> <br><br> </h6>
                <div class="zoom">
                    <i class="fa fa-cogs" style="font-size:100px"></i>
                </div>
            </div>
            <div class="column">
                <h6 style="font-size:20px;  color: #3C1874;">Explore <br> <br> <br></h6>
                <div class="zoom">
                    <i class="fa fa-globe" style="font-size:120px"></i>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="base2">
            <h3 style="color:#932432; font-size:30px; font-family: 'Times New Roman', Times, serif;"><u>Our Reach</u></h3><br>
            <div class="column1">
                <br>
                <div class="zoom">
                    <span class="xxlarge" style="font-variant-numeric: oldstyle-nums;">14+</span>
                </div>
                <br>
                <i class="fa fa-handshake-o" style="font-size: 50px"></i><br><br>
                <h6 style="font-size:17px;  color: #3C1874;">Partners <br> <br> </h6>
            </div>
            <div class="column1">
                <br>
                <div class="zoom">
                    <span class="xxlarge" style="font-variant-numeric: oldstyle-nums;">650+</span>
                </div>
                <br>
                <i class="fa fa-address-card-o" style="font-size: 50px"></i><br><br>
                <h6 style="font-size:17px;  color: #3C1874;">Immigrants <br> <br> </h6>
            </div>
            <div class="column1">
                <br>
                <div class="zoom">
                    <span class="xxlarge" style="font-variant-numeric: oldstyle-nums;">500+</span>
                </div>
                <br>
                <i class="fa fa-send" style="font-size: 50px"></i><br><br>
                <h6 style="font-size:17px;  color: #3C1874;">Visitors <br> <br> </h6>
            </div>
        </div>
    </section>

    <section>
        <div class="base1" style="height: 750px">
            <h3 style="color:#932432;font-size:30px;font-family: 'Times New Roman', Times, serif;"><u>Our Work</u></h3> <br>
            <h6 style="color:black;font-size:25px;  color: #3C1874;"><i>***What we have done for people***</i></h6><br><br>
            <div class="column1">
                <br>
                <img src="resources/images/first-vote.jpg" width="250" height="250" border="5px">
            </div>
            <br>
            <div class="column1">
                <img src="resources/images/carnival.jpg" width="300" height="250" border="5px">
                <br>
            </div>
            <div class="column1">
                <img src="resources/images/job.jpg" width="250" height="250" border="5px">
                <br>
            </div>
            <div class="column1">
                <br>
                <img src="resources/images/medical.jpg" width="250" height="250" border="5px">
            </div>
            <div class="column1">
                <br>
                <img src="resources/images/home.jpg" width="250" height="250" border="5px">
            </div>
            <div class="column1">
                <br>
                <img src="resources/images/senior-week.jpg" width="250" height="250" border="5px">
            </div><br><br>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <i class="fa fa-arrow-up"></i>
 </button>
        </div>
    </section>

</body>

<script type="text/javascript">
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the buttonst
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</html>
