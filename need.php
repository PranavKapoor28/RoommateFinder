<!DOCTYPE html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
               
            </ul>
        </div>
    </nav>

    <div id="room">
        <h1>NEED A ROOM?</h1>
        <h1> Enter your details <br></h1>
    </div> <div class="container-1">
        <form action="userinfo.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">EMAIL</label>
                </div>
                <div class="col-75">
                    <input type="email" id="fname" name="email" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="number">PHONE NUMBER</label>
                </div>
                <div class="col-75">
                    <input type="number" id="lname" name="pwd" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">REGISTRATION NUMBER</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="text" name="reg" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">NO. OF BEDS</label>
                </div>
                <div class="col-75">
                <input type="number" id="lname" name="bedded" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">BLOCK</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="lname" name="block" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">BRANCH</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="lname" name="branch" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <script type="text/javascript">

    $(document).ready(function(){
        $('#btnclick').click(function(){
            $('#table').load('userinfo.php'.function(){
                alert('this is done');
            })
        })
    })
    </script>

</body>