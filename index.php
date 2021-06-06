<!DOCTYPE html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="STYLE.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">ROOMATE FINDER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Room requiremnet
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Room requirement">
                        <a class="dropdown-item" href="need.php">NEED A ROOM?</a>
                        <a class="dropdown-item" href="have.php">HAVE A ROOM?</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div id="heading">
        <section>
            <img class="mySlides" src="IMAGES/room.jpg">

        </section>

        <script>
        // Automatic Slideshow - change image every 3 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
        </script>

    </div>
    <div id="about">
        <hr>
        <h1>Why<b>ROOMATES FINDER??</b></h1>
    </div>

    <div class="card-deck">
        <div class="card bg-white">
            <div class="card-body text-center">
                <h2 class="card-title"><b>The Perfect Match</b></h2>
                <img class="card-img-top" src="IMAGES/logo-match.png" alt="Card image" style="width:20%">
                <p class="card-text"><br>Stop wasting time weeding through irrelevant classified ads and actually
                    find a roommate. Our Perfect Match system will provide you with numerous compatible
                    roommate options based on mutual criteria.Finding the perfect roommate has never been
                    faster.</p>
            </div>
        </div>
        <div class="card bg-white">
            <div class="card-body text-center">
                <h2 class="card-title"><b>Safe And Secure</b></h2>
                <img class="card-img-top" src="IMAGES/secure.png" alt="Card image" style="width:20%">
                <p class="card-text"><br>Roommates.com has been trusted by millions nationwide since 2001. Your
                    contact information is kept private through our secure messaging center. We verify
                    identity through multiple sources so you can search with confidence! We even created our
                    own fraud detection tool to weed out the jerks. 🙅‍♂️</p>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="row">
            <div class="col-sm-6">
                <h1>Rent Your Way</h1>
                <p>
                    It’s your place. Rent it how you want.<br><br>
                    <b>A ROOMMATE FOR EVERYONE</b><br>
                    Use Roomi if you’re looking for a new BFF to live with or just need someone to move in and split
                    rent.<br><br>
                    <b>Flexible RENTING TERMS</b><br>
                    Find someone to rent an empty room – whether it’s for 3 months or a whole year!
                </p>
            </div>
            <div class="col-sm-6">
                <img src="https://roomiapp.com/static/media/new-rent.b55185d2.png" class="roomie">
            </div>
            <div class="col-sm-6">
                <img src="https://roomiapp.com/static/media/new-sublet.003ff873.png" class="roomie">
            </div>
            <div class="col-sm-6">
                <div class="para">
                <h1>Sublet Safely</h1>
                <p>
                    Trust and transparency are key to safe renting – let Roomi help with that<br><br>
                    <b>Background Checks</b><br>
                    Know who you’re renting to by asking potential roommates to complete a background check before they
                    apply to your listing.<br><br>
                    <b>SECURE In-App Messaging</b><br>
                    Keep your contact info private by chatting with potential roommates through the Roomi app or
                    website.
                </p>
            </div>
        </div>
    </div>
    <div id="contact">
        <h1>CONTACT US</h1>
    </div>
    <div class="container">
        <form action="/action_page.php">
            <div class="row1">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row1">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row1">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>
            <div class="row1">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>
                </div>
            </div>
            <div class="row1">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>