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
        <form action="ownerinfo.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">EMAIL</label>
                </div>
                <div class="col-75">
                    <input type="email" id="fname" placeholder="Enter email" name="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="number">PHONE NUMBER</label>
                </div>
                <div class="col-75">
                    <input type="number" id="lname" placeholder="Enter Phone number" name="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">REGISTRATION NUMBER</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="text" placeholder="Enter Registration number" name="Registration">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Which Room?</label>
                </div>
                <div class="col-75">
                <input type="number" id="lname" placeholder="Which room you have" name="room">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Branch</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="lname" placeholder="Preffered roommate branch " name="branch">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Any Comments?</label>
                </div>
                <div class="col-75">
                <input type="varchar" id="lname"placeholder="Any Comments" name="comments">
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
            $('#table').load('ownerinfo.php'.function(){
                alert('this is done');
            })
        })
    })
    </script>

</body>

</body>