<?php
session_start();
if (isset($_GET['property'])) {
$_SESSION['property'] = $_GET['property'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="theme-color" content="#000000" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Propa</title>
        <link rel="stylesheet" href="style/style.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://kit.fontawesome.com/9acf13952f.js"
            crossorigin="anonymous"></script>
        <script
            src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="scripts/hidden.js"></script>
        <link rel="icon" href="images/earth.png">

        <script>
            function play() {
              var audio = document.getElementById("audio");
              audio.volume = 0.1;
              audio.play();
            }
        </script>
        <audio id="audio" src="click.mp3"></audio>

    </head>

    <body class="brown">
        <h1 class="lexend">
            <a style="text-decoration: none; color: #6d483a;"
                href="index.php">Propa -> Contact
                <span>
                    <a onclick="play(); login.showModal();">
                        <img src="images/login-icon.png"
                            style="width: 46px; float: right; margin-right: 30px; margin-top: 4px;">
                    </a>
                </span>
            </h1>
        </h1>
        <div class="vDIV rounded-3"></div>
        <div class="container">
            <div class="row">
                <div id="behindPic" class="col"
                    style="background-color: #e6d9c7; margin-top: 15px; border-radius: 7px;">
                    <img class="img-fluid" src="images/logo1.jpg" alt
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 7px;">
                </div>

                <div id="boxNextPic" class="col-md-7 rounded-3"
                    style="background-color: white; margin-top: 15px; margin-left: 15px; border-radius: 0px;">
                    <div class="row align-items-center"
                        style="border-style: none; padding: 1px; background-color: #6d483a;">
                        <div class="col-auto pr-0">
                            <img class="img-fluid" src="images/W3T1.png"
                                alt="win98" style="height: 28px; width: 28px;">
                        </div>
                        <div class="col" style="margin-left: -12px;">
                            <h1 class="m-0 goodFont">
                                Contact Us
                            </h1>
                        </div>
                        <div class="col-auto pr-0">
                            <img class="img-fluid" src="images/min.png"
                                alt="win98"
                                style="height: 23px; width: 23px; cursor: pointer;"
                                onclick="play();">
                            <img class="img-fluid" src="images/x.png"
                                alt="win98"
                                style="height: 32px; width: 32px; cursor: pointer;"
                                onclick="play(); document.getElementById('boxNextPic').style.visibility = 'hidden';">
                        </div>
                    </div>
                    <br>
                    <!-- php to check if logged in -->
                    <?php if (isset($_SESSION['username'])): ?>
                    <form method="post" action="scripts/sendMsg.php" target="hiddenFrame" >
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                    id>Property</span>
                            </div>
                            <input type="text" class="form-control"
                                name="property"
                                value="<?php echo $_SESSION['property']; ?>">
                        </div>
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id>First and last
                                    name</span>
                            </div>
                            <input type="text" class="form-control" name="fName"
                                value="<?php echo $_SESSION['fName']; ?>">
                            <input type="text" class="form-control" name="sName"
                                value="<?php echo $_SESSION['sName']; ?>">
                        </div>
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id>Email & Phone
                                    Num</span>
                            </div>
                            <input type="text" class="form-control" name="email"
                                value="<?php echo $_SESSION['email']; ?>">
                            <input type="text" class="form-control"
                                name="phoneNum"
                                value="<?php echo $_SESSION['phoneNum']; ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="textArea">Message</label>
                            <textarea class="form-control" id="textArea"
                                name="message" rows="6"></textarea>
                        </div>
                        <br>
                        <p id="msgError" style="color: red; visibility: hidden;"></p>
                        <br>

                        <button type="submit" class="btn btn-success"
                            style="float: right;">Send</button>


                    </form>
                </div>
                <?php else: ?>
                <p style="color: white;">You must be logged in to contact us.</p>
                <button class="btn btn-success" onclick="play(); login.showModal();">Login</button>
                <?php endif; ?>
                
            </div>

        </div>
    </body>

    <!-- Hidden iFrames -->
    <iframe id="hiddenFrame" name="hiddenFrame" style="display:none;"></iframe>
    <iframe id="hiddenFrameLogin" name="hiddenFrameLogin"
        style="display:none;"></iframe>

    <!-- Login Dialogue -->
    <dialog class="rounded-3" id="login"
        style="height: 500; width: 500px; background-color: white;">
        <div></div>
        <img src="images/login-icon.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br><br />
        <p style="color: black; font-weight: bold;">Login</p>
        <!-- dialog contents -->
        <img class="img-fluid" src="images/compressedPhotos/AMS.jpg">
        <br><br>

        <!-- Check if user is logged in -->
        <?php if (!isset($_SESSION['username'])): ?>
        <form method="post" action="scripts/login.php"
            target="hiddenFrameLogin">
            <p class="goodFont" style="color: black;">Username: <input
                    type="text" name="username"></p>
            <p class="goodFont" style="color: black;">Password: <input
                    type="password" name="password"></p><br>
            <input class="btn btn-success" style="float: right;" type="submit"
                value="Login">
            <p id="logError" style="color: red; visibility: hidden;">aaa</p>
        </form>
        <button class="btn btn-danger"
            onclick="play(); login.close()">Close</button>
        <button class="btn btn-success"
            onclick="play(); register.showModal()">Register</button>
        <?php else: ?>
        <p style="color: black;">You are already logged in as <?php echo
            $_SESSION['username']; ?></p>
        <button class="btn btn-danger" onclick="play(); login.close()"
            style="display: inline-block;">Close</button>
        <form method="post" action="scripts/logout.php"
            style="display: inline-block;">
            <input onclick type="submit" value="Logout" class="btn btn-danger">
        </form>
        <?php endif; ?>
    </dialog>
</html>