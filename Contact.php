<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Contact</title>
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

    <div class = "row">
        <div class = " col s4">
            <div class = "card">
                <div class = "contact-con">
                    <h2 id = "white-remove">Contact Us</h2>
                    <p>if you would like to contact us please use one of the following methods or use the form to the right</p>
                    <br>
                    <h6>Method 1</h6>
                    <p>434353562355</p>
                    <br>
                    <h6>Method 2</h6>
                    <p>124155q32421</p>
                    <p>gfsdgfjg@fdgdgd.com</p>
                    <br>
                    <h6>Method 3</h6>
                    <p>fdsgldsgsadg@gsdgdg.com</p>
                </div>
            </div>
        </div>
            
        <div class = "col s8 card remove-padding">
            <div>
                <h4>Lorem Ipsum</h4>
                <p>Integer dignissim erat et rhoncus molestie. Integer at lectus sodales, placerat tellus ut, tincidunt lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam in bibendum nibh, non venenatis diam. Nullam quis urna convallis, pellentesque tortor eu, ullamcorper dui. Maecenas aliquam augue in enim condimentum, vel bibendum nunc eleifend. Morbi non metus ullamcorper, fermentum nisi id, pretium nulla. Donec sed est sagittis, fringilla ex eu, porta mi. Suspendisse non nunc dui. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc auctor mi ex, id hendrerit arcu mattis sit amet. Proin ultrices odio eu pharetra facilisis. Cras ut metus metus.</p>
            </div>
            <form class= "col s12" name = "contact">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Write your Message Here</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="emailc" type="email" class="validate">
                        <label for="emailc">Email</label>
                        <span class="helper-text" data-error="Incorrect" data-success="Correct"></span>
                    </div>
                </div>
                <div class ="row">
                    <button class="btn waves-effect btn-flat waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- <div class="row">
        <div class ="col s4 card">
            <h2>Contact Us</h2>
            <p>if you would like to contact us please use one of the following methods or use the form to the right</p>
            <br>
            <h6>Method 1</h6>
            <p>434353562355</p>
            <br>
            <h6>Method 2</h6>
            <p>124155q32421</p>
            <p>gfsdgfjg@fdgdgd.com</p>
            <br>
            <h6>Method 3</h6>
            <p>fdsgldsgsadg@gsdgdg.com</p>
        </div>
        <div class = "col s8 card">
            <div>
                <h4>Lorem Ipsum</h4>
                <p>Integer dignissim erat et rhoncus molestie. Integer at lectus sodales, placerat tellus ut, tincidunt lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam in bibendum nibh, non venenatis diam. Nullam quis urna convallis, pellentesque tortor eu, ullamcorper dui. Maecenas aliquam augue in enim condimentum, vel bibendum nunc eleifend. Morbi non metus ullamcorper, fermentum nisi id, pretium nulla. Donec sed est sagittis, fringilla ex eu, porta mi. Suspendisse non nunc dui. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc auctor mi ex, id hendrerit arcu mattis sit amet. Proin ultrices odio eu pharetra facilisis. Cras ut metus metus.</p>
            </div>
            <form class= "col s12" name = "contact">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Textarea</label>
                    </div>
                    <div class="input-field col s14">
                        <input id="emailc" type="email" class="validate">
                        <label for="emailc">Email</label>
                        <span class="helper-text" data-error="Incorrect" data-success="Correct"></span>
                    </div>
                </div>
                <div class ="row">
                    <button class="btn waves-effect btn-flat waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="js.js"></script>
</body>
</html>