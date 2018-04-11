<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Blog.css">

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
                <li class = active><a href="Blog.php">Blog</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Events<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="register.php">Register / Log In</a></li>
            </ul>
        </div>
    </nav>

    <div id="blog" class = "row">
        <div id ="Blog-Main" class = "col s8">
        <div class="card z-depth-5">
                <div class="card-content" id = "Latest">
                    <span class="card-title activator grey-text text-darken-4"><h1>Post Title 1</h1><i class="material-icons right top">more_vert</i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis viverra erat, eu tempor urna. In hac habitasse platea dictumst. Proin et posuere erat. Donec non purus hendrerit, consequat eros sed, consectetur dui. Aenean quis tristique purus. Etiam sed ex vel nulla dictum pulvinar ut non urna. Quisque a venenatis augue, vel venenatis nulla. Nulla efficitur ultrices aliquet. Donec porta, ipsum vel efficitur egestas, mi lectus fermentum justo, sagittis malesuada lectus dolor eget ligula. Sed malesuada mauris quam, non ornare nibh interdum at. Donec aliquam enim et sodales blandit. Duis eget tellus eleifend, commodo turpis eu, efficitur nunc. Nullam a dolor ipsum. Sed ac cursus arcu. Aenean viverra leo quis arcu laoreet, id pellentesque velit sodales.</p>
                </div>
                <div class="card-reveal">
                    <span  class="card-title grey-text text-darken-4 "><img class ="author-image circle" src="./images/portraitstock.jpg">Author's Name<i class="material-icons right">close</i></span>
                    <p>Here is some Information about the Author</p>
                </div>
            </div>
            <div class="card z-depth-5">
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><h1>Post Title 2</h1><i class="material-icons right top">more_vert</i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis viverra erat, eu tempor urna. In hac habitasse platea dictumst. Proin et posuere erat. Donec non purus hendrerit, consequat eros sed, consectetur dui. Aenean quis tristique purus. Etiam sed ex vel nulla dictum pulvinar ut non urna. Quisque a venenatis augue, vel venenatis nulla. Nulla efficitur ultrices aliquet. Donec porta, ipsum vel efficitur egestas, mi lectus fermentum justo, sagittis malesuada lectus dolor eget ligula. Sed malesuada mauris quam, non ornare nibh interdum at. Donec aliquam enim et sodales blandit. Duis eget tellus eleifend, commodo turpis eu, efficitur nunc. Nullam a dolor ipsum. Sed ac cursus arcu. Aenean viverra leo quis arcu laoreet, id pellentesque velit sodales.</p>
                </div>
                <div class="card-reveal">
                <span  class="card-title grey-text text-darken-4 "><img class ="author-image circle" src="./images/portraitstock.jpg">Author's Name<i class="material-icons right">close</i></span>
                    <p>Here is some Information about the Author</p>
                </div>
            </div>

            <div class="card z-depth-5">
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><h1>Post Title 3</h1><i class="material-icons right top">more_vert</i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis viverra erat, eu tempor urna. In hac habitasse platea dictumst. Proin et posuere erat. Donec non purus hendrerit, consequat eros sed, consectetur dui. Aenean quis tristique purus. Etiam sed ex vel nulla dictum pulvinar ut non urna. Quisque a venenatis augue, vel venenatis nulla. Nulla efficitur ultrices aliquet. Donec porta, ipsum vel efficitur egestas, mi lectus fermentum justo, sagittis malesuada lectus dolor eget ligula. Sed malesuada mauris quam, non ornare nibh interdum at. Donec aliquam enim et sodales blandit. Duis eget tellus eleifend, commodo turpis eu, efficitur nunc. Nullam a dolor ipsum. Sed ac cursus arcu. Aenean viverra leo quis arcu laoreet, id pellentesque velit sodales.</p>
                </div>
                <div class="card-reveal">
                <span  class="card-title grey-text text-darken-4 "><img class ="author-image circle" src="./images/portraitstock.jpg">Author's Name<i class="material-icons right">close</i></span>
                    <p>Here is some Information about the Author</p>
                </div>
            </div>
        </div>
        <div class = "col s4">
        Hello
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="js.js"></script>
</body>
</html>