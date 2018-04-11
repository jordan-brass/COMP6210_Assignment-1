<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="kingscon.php">KingsCon</a></li>
        <li><a href="dreamcon.php">DreamCon</a></li>
    </ul>

    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Events<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="register.php">Register / Log In</a></li>
            </ul>
        </div>
    </nav>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5>If you do not have a DCI number please visit</h5>
            <p>I am a url link</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
    </div>

    <div class = "row">
        <div class = "col s3 card z-depth-4">
            <h1>Log In</h1>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Incorrect" data-success="Correct"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button class="btn waves-effect btn-flat waves-light" type="submit" name="action">Sign In
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        <div id = "placeholder-border" class = "col s6">
            <h3>Terms and Conditions</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis viverra erat, eu tempor urna. In hac habitasse platea dictumst. Proin et posuere erat. Donec non purus hendrerit, consequat eros sed, consectetur dui. Aenean quis tristique purus. Etiam sed ex vel nulla dictum pulvinar ut non urna. Quisque a venenatis augue, vel venenatis nulla. Nulla efficitur ultrices aliquet. Donec porta, ipsum vel efficitur egestas, mi lectus fermentum justo, sagittis malesuada lectus dolor eget ligula. Sed malesuada mauris quam, non ornare nibh interdum at. Donec aliquam enim et sodales blandit. Duis eget tellus eleifend, commodo turpis eu, efficitur nunc. Nullam a dolor ipsum. Sed ac cursus arcu. Aenean viverra leo quis arcu laoreet, id pellentesque velit sodales.</p>
            <form action="#" class = "right">
                <p>
                    <label>
                        <input type="checkbox"/>
                        <span>I have read and agree with the terms and conditions</span>
                    </label>
                </p>
            </form>
        </div>
        <div class = "col s3 card z-depth-4">
            <h1>Register</h1>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Incorrect" data-success="Correct"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 row">
                        <input  id="dci" type="text" class="validate col s11">
                        <a class="modal-action material-icons col s1 modal-trigger" href="#modal1">help_outline</a>
                        <label for="dci">DCI Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button class="btn waves-effect btn-flat waves-light" type="submit" name="action">Sign Up
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="js.js"></script>
</body>
</html>