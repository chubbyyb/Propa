<?php
session_start();
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
        <script src="scripts/hidden.js"></script>
        <link rel="icon" href="images/earth.png">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

        <script>
            'use strict';
            let finished = true; // turn to false to enable another paragraph

            function typeWriter(el, text) {
                const textArray = text.split(''); // split the text into an array of characters
                let i = 0; // set a counter

                function addLetter() { 
                    if (i < textArray.length) { 
                    el.textContent += textArray[i]; // append next letter
                    i++; // increment counter
                    setTimeout(addLetter, 5); // call the function again after 50ms
                    }

                    if(i == textArray.length && finished == false)  
                    {
                        finished = true; // set to true to prevent another paragraph
                        console.log("Finished: ",finished); // log to console
                        const elementEl = document.getElementById('elementEl1'); // get the second paragraph
                        elementEl.hidden = false; // make it visible
                        const text = ""; // set the text to empty
                        typeWriter(elementEl, text); // call the function again
                    }
                }

                addLetter();
            }

            document.addEventListener('DOMContentLoaded', function() {
            const elementEl = document.getElementById('elementEl');
            document.getElementById('elementEl1').hidden = true;
            document.getElementById('elementEl2').hidden = true;
            const text = "Welcome to Propa, where we redefine the student accommodation experience. As specialists in property management tailored specifically for students, we understand the unique needs and preferences of this dynamic demographic. With a commitment to excellence and a passion for creating vibrant living environments, we strive to exceed expectations and provide unparalleled service to both students and property owners alike.";
            typeWriter(elementEl, text);
            });
        </script>

        <script>
            panels = ["housesPanel", "hackathonPanel", "notesPanel"]
            function switchPanel(panel){
                for (i = 0; i < panels.length; i++){
                    if (panels[i] == panel){
                        document.getElementById(panels[i]).hidden = false;
                    }
                    else{
                        document.getElementById(panels[i]).hidden = true;
                    }
                }
            }
          </script>

        <script>
            function play() {
              var audio = document.getElementById("audio");
              audio.volume = 0.1;
              audio.play();
            }

            function refresh() {
                location.reload();
            }
          </script>

    </head>

    <!-- HEADING -->
    <body class="brown">
        <h1 class="lexend">
            <a style="text-decoration: none; color: #6d483a;
            "
                href="index.php">Propa
                <span style="mix-blend-mode: normal; color: black;">
                    <a onclick="play(); login.showModal();">
                        <img src="images/login-icon.png"
                            style="width: 46px; float: right; margin-right: 30px; margin-top: 4px;">
                    </a>
                    <a onclick="play(); settings.showModal();">
                        <img src="images/settings1.png"
                            style="width: 60px; float: right; margin-right: 30px; margin-top: -2px;">
                    </a>
                    <?php if (isset($_SESSION['username'])): ?>
                    <?php if ($_SESSION['username'] == "admin"): ?>
                    <a onclick="play(); messages.showModal();">
                        <img src="images/message.png"
                            style="width: 60px; float: right; margin-right: 25px; margin-top: -2px;">
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>

                </span>
            </h1>
        </h1>
        <div class="vDIV rounded-3"></div>
        <!-- Logo and top part -->
        <div class="container">
            <div class="row">
                <div id="behindPic" class="col behindPic">
                    <img class="img-fluid" src="images/logo1.jpg" alt
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 7px;">
                </div>

                <!-- Title Bar for about us -->
                <div id="boxNextPic" class="col-md-7 rounded-3 glass"
                    style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%); margin-top: 15px; margin-left: 15px; border-radius: 0px;">
                    <div class="row align-items-center"
                        style="border-style: none; padding: 1px; background-color: #6e493a; border-top-left-radius: 10px; border-top-right-radius: 10px">
                        <div class="col-auto pr-0">
                            <img class="img-fluid" src="images/industrial-design.png"
                                alt="win98" style="height: 28px; width: 28px;">
                        </div>
                        <div class="col rounded-3" style="margin-left: -12px;">
                            <h1 class="m-0 goodFont">
                                About Us
                            </h1>
                        </div>
                        <div class="col-auto pr-0">
                            <img class="img-fluid" src="images/min2.png"
                                alt="win98"
                                style="width: 24px; cursor: pointer; margin-bottom: 2px;"
                                onclick="play();">
                            <img class="img-fluid" src="images/x2.png"
                                alt="win98"
                                style="width: 24px; cursor: pointer; margin-bottom: 2px;"
                                onclick="play(); document.getElementById('boxNextPic').style.visibility = 'hidden';">
                        </div>
                    </div>
                    <br>
                    <!-- Text for about us -->
                    <p class="nunito" id="elementEl" style="color: black;"></p>
                    <p id="elementEl1" style="color: white; "></p>
                    <p id="elementEl2" style="color: white;"></p>
                </div>
            </div>

            <!-- Title Bar + Containers for locations, etc -->
            <div class="container">
                <div class="row">
                    <div id="projectsContainer" class="col-12 rounded-3 glass"
                        style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%); margin-top: 15px; margin-left: 15px; border-radius: 0px;">
                        <div class="row align-items-center"
                            style="border-style: none; padding: 1px; background-color: #6e493a; border-top-left-radius: 10px; border-top-right-radius: 10px">
                            <div class="col-auto pr-0">
                                <img class="img-fluid" src="images/earth1.png"
                                    alt="win98"
                                    style="width: 23px; margin-bottom: 2px;">
                            </div>

                            <!-- Select Buttons -->
                            <div class="col" style="margin-left: -10px;">

                                <button class="m-0 colButton rounded-3" style="background-color: #e4d7c5;"
                                    onclick="play(); switchPanel('housesPanel')">
                                    <img class="img-fluid smallIcon"
                                        src="images/house.png"
                                        alt="projectsIcon"><span class="goodFont"> Locations</span>
                                </button>

                                <button class="m-0 colButton rounded-3" style="background-color: #e4d7c5;"
                                    onclick="play(); switchPanel('hackathonPanel')">
                                    <img class="img-fluid smallIcon"
                                        src="images/cars/car1.png"
                                        alt="projectsIcon"><span class="goodFont"> Cars</span>
                                </button>

                            </div>
                            <!-- Exit+min buttons -->
                            <div class="col-auto pr-0">
                                <img class="img-fluid" src="images/min2.png"
                                    alt="win98"
                                    style="width: 24px; cursor: pointer; margin-bottom: 2px;"
                                    onclick="play();">
                                <img class="img-fluid" src="images/x2.png"
                                    alt="win98"
                                    style="width: 24px; cursor: pointer; margin-bottom: 2px;"
                                    onclick="play(); document.getElementById('projectsContainer').style.visibility = 'hidden';">
                            </div>
                        </div>

                        <!--Locations Panel-->
                        -
                        <div class="container" id="housesPanel">
                            
                            <div class="row">
                                <!--FIRST COLUMN-->
                                <div class="col-lg-6">
                                    <!-- DUBLIN -->
                                    <a href="dublin.php">
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/dublin.jpg"
                                            alt="Dublin" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Dublin</p>
                                    </a>

                                    <!-- CORK -->
                                    <a href="cork.php">
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/cork.jpg"
                                            alt="Cork" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Cork</p>
                                    </a>

                                    <!-- MEATH -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/meath.jpg"
                                            alt="Meath" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Meath
                                            [UNAVAILABLE]</p>
                                    </a>

                                    <!-- BELFAST -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/belfast.jpg"
                                            alt="Belfast" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Belfast
                                            [UNAVAILABLE]</p>
                                    </a>
                                </div>

                                <!--SECOND COLUMN-->
                                <div class="col-lg-6">

                                    <!-- LIMERICK -->
                                    <a href="limerick.php">
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/limerick.jpg"
                                            alt="Limerick" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Limerick</p>
                                    </a>

                                    <!-- GALWAY -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/galway.jpg"
                                            alt="Galway" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Galway
                                            [UNAVAILABLE]</p>
                                    </a>

                                    <!-- WATERFORD -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/waterford.jpg"
                                            alt="Waterford" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Waterford
                                            [UNAVAILABLE]</p>
                                    </a>

                                    <!-- ATHLONE -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/houses/athlone.jpg"
                                            alt="Athlone" onclick="play();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Athlone
                                            [UNAVAILABLE]</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Locations Panel End-->

                        <!-- Cars Panel -->
                        <div class="container" id="hackathonPanel"
                            hidden="true">
                            <div class="row">
                                <!--FIRST COLUMN WITH-->
                                <div class="col-lg-6">

                                    <!-- KIA Sol -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/cars/Kia-Sol.jpg"
                                            alt="Waterford"
                                            onclick="play(); sol.showModal()">
                                        <p class="text-center goodFont"
                                            style="color: black;">Kia Sol<br>
                                            <button type="button"
                                                class="btn btn-success btn-sm"
                                                style="height: 30px; width: 60px;">€530</button>
                                        </p>
                                    </a>

                                    <!-- KIA Seltos -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/cars/Kia-Seltos.jpg"
                                            alt="Waterford"
                                            onclick="play(); seltos.showModal();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Kia Seltos<br>
                                            <button type="button"
                                                class="btn btn-success btn-sm"
                                                style="height: 30px; width: 60px;">€630</button>
                                        </p>
                                    </a>

                                </div>

                                <!--SECOND COLUMN-->

                                <div class="col-lg-6">

                                    <!-- KIA Boul -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/cars/Kia-Boul.jpg"
                                            alt="Waterford"
                                            onclick="play(); boul.showModal();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Kia Boul<br>
                                            <button type="button"
                                                class="btn btn-success btn-sm"
                                                style="height: 30px; width: 60px;">€760</button>
                                        </p>
                                    </a>

                                    <!-- KIA Ceed -->
                                    <a>
                                        <img class="img-fluid panelObject rounded-3 hover-div"
                                            src="images/cars/Kia-Ceed.jpg"
                                            alt="Waterford"
                                            onclick="play(); ceed.showModal();">
                                        <p class="text-center goodFont"
                                            style="color: black;">Kia Ceed<br>
                                            <button type="button"
                                                class="btn btn-success btn-sm"
                                                style="height: 30px; width: 60px;">€700</button>
                                        </p>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <!-- Cars Panel End -->

                        <!-- Unused Panel -->
                        <div class="container" id="notesPanel">
                            <div class="row">
                                <!--FIRST COLUMN WITH-->
                                <div class="col-lg-6">
                                </div>
                            </div>
                        </div>
                        <!-- Unused Panel End-->
                    </div>

                    <!-- Break -->
                    <div>
                        <br><br><br>
                    </div>

                    <!-- Contact Form and Pic -->

                    <div class="container">
                        <div class="row justify-content-center">

                            <div id="boxNextForm" class="col-md-7 rounded-3"
                                style="background-color: #6d483a; margin-left: 10px;">

                                <pre style="color: white;">
                        _______________                        |*\_/*|________
                        |  ___________  |     .-.     .-.      ||_/-\_|______  |
                        | |           | |    .****. .****.     | |           | |
                        | |   0   0   | |    .*****.*****.     | |   0   0   | |
                        | |     -     | |     .*********.      | |     -     | |
                        | |   \___/   | |      .*******.       | |   \___/   | |
                        | |___     ___| |       .*****.        | |___________| |
                        |_____|\_/|_____|        .***.         |_______________|
                          _|__|/ \|_|_.............*.............._|________|_
                         / ********** \                          / ********** \
                       /  ************  \                      /  ************  \
                      --------------------                    --------------------

                    </pre>
                            <div class="text-center">
                                <a class="goodFont"
                                    >C22322811</a>
                                ██ <a class="goodFont"
                                    >TU857</a>
                                </div>


                            </div>
                        </div>
                        <div>
                            <br><br><br><br><br>
                        </div>

                        <!-- Bottom Bar-->
                        <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark rounded-3" style="justify-content: center; height: 40px; width: 150px; justify-self: center; background-color: #6e493a;">
                            <button class="m-0 mx-2 rounded-3"
                                style="font-size: 15px; color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; background-color: white; border-width: 0px;"
                                onclick="play(); document.getElementById('boxNextPic').style.visibility = 'visible';">
                                <img class="img-fluid" src="images/industrial-design.png" alt="projectsIcon" style="height: 26px; width: 26px;">
                            </button>
                            <button class="m-0 mx-2 rounded-3"
                                style="font-size: 15px; color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; background-color: white; border-width: 0px;"
                                onclick="play(); document.getElementById('projectsContainer').style.visibility = 'visible';">
                                <img class="img-fluid" src="images/earth1.png" alt="projectsIcon" style="height: 26px; width: 26px;">
                            </button>
                            </button>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Audio -->
    <audio id="audio" src="click.mp3"></audio>
    <dialog id="DMSa">
        <form method="dialog">
            <p style="color: black;">Hello</p>
            <button>Close</button>
        </form>
    </dialog>

    <!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues -->
    <!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues -->
    <!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues --><!-- Dialogues -->
    <dialog id="exit">
        <form method="dialog">
            <p style="color: black;">Are you sure you want to
                exit?</p>
            <button>Yes</button>
            <button>Cancel</button>
        </form>
    </dialog>

    <!-- Login Dialogue -->
    <dialog class="rounded-3" id="login"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/login-icon.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br><br />
        <p style="color: black; font-weight: bold;">Login</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/compressedPhotos/AMS.jpg">
        <br><br>

        <!-- Check if user is logged in -->
        <?php if (!isset($_SESSION['username'])): ?>
        <form method="post" action="scripts/login.php"
            target="hiddenFrameLogin">
            <p class="goodFont" style="color: black;">Username:
                <input type="text" name="username"></p>
            <p class="goodFont" style="color: black;">Password:
                <input type="password" name="password"></p><br>
            <input class="btn btn-success" style="float: right;"
                type="submit" value="Login">
            <p id="logError"
                style="color: red; visibility: hidden;">aaa</p>
        </form>
        <button class="btn btn-danger"
            onclick="play(); login.close()">Close</button>
        <button class="btn btn-success"
            onclick="play(); register.showModal()">Register</button>
        <?php else: ?>
        <p style="color: black;">You are already logged in as
            <?php echo $_SESSION['username']; ?></p>
        <button class="btn btn-danger"
            onclick="play(); login.close()"
            style="display: inline-block;">Close</button>
        <form method="post" action="scripts/logout.php"
            style="display: inline-block;">
            <input onclick type="submit" value="Logout"
                class="btn btn-danger">
        </form>
        <?php endif; ?>
    </dialog>

    <!-- Register Dialogue -->
    <dialog class="rounded-3" id="register"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/login-icon.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br><br />
        <p style="color: black; font-weight: bold;">Login</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/compressedPhotos/AMS.jpg">
        <br><br>
        <form method="post" action="scripts/register.php"
            target="hiddenFrame">
            <p class="goodFont" style="color: black;">First
                Name: <input name="first_name" type="text"></p>
            <p class="goodFont" style="color: black;">Surname:
                <input name="last_name" type="text"></p>
            <p class="goodFont" style="color: black;">Phone
                Number: <input name="phoneNum" type="text"></p>
            <p class="goodFont" style="color: black;">Email:
                <input name="email" type="text"></p>
            <p class="goodFont" style="color: black;">Username:
                <input name="username" type="text"></p>
            <p class="goodFont" style="color: black;">Password:
                <input name="password" type="password"></p><br>
            <input class="btn btn-success" style="float: right;"
                type="submit" value="Register">
            <p id="RegError"
                style="color: red; visibility: hidden;"></p>
        </form>

        <!--<button onclick="play(); window.location.href='https://github.com/chubbyyb/TRB-POS';" class="btn btn-dark"><i class="fa-brands fa-github-alt"></i> Github</button>!-->
        <button class="btn btn-danger"
            onclick="play(); register.close()">Close</button>
    </dialog>

    <!-- Settings Dialogue -->
    <dialog class="rounded-3" id="settings"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/login-icon.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br><br />
        <p style="color: black; font-weight: bold;">Login</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/compressedPhotos/AMS.jpg">
        <br><br>
        <?php if (!isset($_SESSION['username'])): ?>
        <p style="color: black;">You are not logged in</p>
        <?php else: ?>
        <form method="post" action="scripts/amend.php"
            target="hiddenFrameLogin">
            <p class="goodFont" style="color: black;">First
                Name: <input name="first_name" type="text"
                    value="<?php echo $_SESSION['fName']; ?>"></p>
            <p class="goodFont" style="color: black;">Surname:
                <input name="last_name" type="text"
                    value="<?php echo $_SESSION['sName']; ?>"></p>
            <p class="goodFont" style="color: black;">Phone
                Number: <input name="phoneNum" type="text"
                    value="<?php echo $_SESSION['phoneNum']; ?>"></p>
            <p class="goodFont" style="color: black;">Email:
                <input name="email" type="text"
                    value="<?php echo $_SESSION['email']; ?>"></p>
            <p id="AmendError"
                style="color: red; visibility: hidden;"></p><br>
            <input class="btn btn-warning" style="float: right;"
                type="submit" value="Amend">
        </form>
        <?php endif; ?>

        <!--<button onclick="play(); window.location.href='https://github.com/chubbyyb/TRB-POS';" class="btn btn-dark"><i class="fa-brands fa-github-alt"></i> Github</button>!-->
        <button class="btn btn-danger"
            onclick="play(); settings.close()">Close</button>
    </dialog>

    <!-- messages Dialogue -->
    <dialog class="rounded-3" id="messages"
        style="height: 500px; width: 500px; overflow-y: scroll;">
        <div></div>
        <img src="images/message.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br><br />
        <p style="color: black; font-weight: bold;">Messages</p>
        <!-- dialog contents -->
        <br>
        <!-- Display messages from SQL database-->
        <?php
        // Establish database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "propa";

        $conn = new mysqli($servername, $username, $password,
        $database);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM messages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<div class='message-container rounded-3 nunito'
            id='" . $row["ID"]. "'
            style='margin-bottom: 10px; color:black; background-color: #e4d7c5; padding: 10px; position: relative;'>Name:
            " . $row["fName"]. " " . $row["sName"]. "<br>Phone:
            " . $row["phoneNum"]. "<br>Email: " . $row["email"].
            "<br>Property: " . $row["property"]. "<br>Time: " .
            $row["time"]. " <br><br>Message: " .
            $row["message"]. "
            <form id='deleteForm-" . $row["ID"] . "'
                action='scripts/delete_message.php'
                target='hiddenFrame' method='POST'>
                <input type='hidden' id='" . $row["ID"] . "'
                    name='ID' value='" . $row["ID"] . "'>
                <button id='BTN-" . $row["ID"] . "'
                    style='background: none; border: none; cursor: pointer; position: absolute; bottom: 0; right: 0;'>
                    <img src='images/bin.png'
                        style='width: 42px; height: 42px;'>
                </button>
            </form>
        </div><hr>";

        // Add JavaScript event listener within the PHP loop
        echo "<script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.getElementById('BTN-" . $row["ID"] . "').addEventListener('click', function() {
                                            document.getElementById('deleteForm-" . $row["ID"] . "').submit();
                                            document.getElementById('" . $row["ID"] . "').remove();
                                        });
                                    });
                                </script>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>

        <br><br>

        <button class="btn btn-danger"
            onclick="play(); messages.close()"
            style="display: inline-block;">Close</button>
    </dialog>

    <!-- CAR Dialogues --><!-- CAR Dialogues --><!-- CAR Dialogues --><!-- CAR Dialogues --><!-- CAR Dialogues -->

    <!-- Purchase Dialogue -->
    <dialog class="rounded-3" id="purchase"
        style="height: 500; width: 500px;">
        <div></div>
        <img id="carIcon" src="images/cars/car.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br>
        <p id="carName" style="color: black; font-weight: bold;">Purchase</p>
        <img id="carImage" class="img-fluid"
            src="images/cars/Kia-Sol.jpg">
        <!-- dialog contents -->
        <br><br>
        <!-- Put in credit card info -->
        <p style="color: black;">Please enter your credit card
            information below:</p>
        <form method="post" action="scripts/purchase.php"
            target="hiddenFrame">
            <input hidden type="text" name="carName" id="carNameInput">
            <p class="goodFont" style="color: black;">Card
                Number: <input id="cardNum" name="cardNum" type="text"></p>
            <p class="goodFont" style="color: black;">Expiry
                Date: <input name="expiry" type="text"></p>
            <p class="goodFont" style="color: black;">CVV:
                <input name="cvv" type="text"></p>
            <p class="goodFont" style="color: black;">Name on
                Card: <input name="name" type="text"></p>
            <p class="goodFont" style="color: black;">Address:
                <input name="address" type="text"></p>
            <p class="goodFont" style="color: black;">Postcode:
                <input name="postcode" type="text"></p>
            <input class="btn btn-success" style="float: right;"
                type="submit" value="Purchase">
            <p id="purchaseError"
                style="color: red; visibility: hidden;"></p>
        </form>
        <br>
        <button class="btn btn-danger"
            onclick="play(); purchase.close()">Cancel</button>
    </dialog>

    <!-- Send info to purchase dialogue -->
    <script>
    function openPurchaseDialogue(carName, carImage) {
        document.getElementById('carName').innerText = carName;
        document.getElementById('carImage').src = carImage;
        document.getElementById('carNameInput').value = carName;
        purchase.showModal();
    }
</script>

    <!-- Prevent spaces in card number -->
    <script>
    document.getElementById("cardNum").addEventListener("keypress", function(event) {
      if (event.key === " ") {
        event.preventDefault();
      }
    });
</script>

    <!-- Kia Sol Dialogue -->
    <dialog class="rounded-3" id="sol"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/cars/car.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br>
        <p style="color: black; font-weight: bold;">Kia Sol</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/cars/Kia-Sol.jpg">
        <br><br>
        <p style="color: black;">The Kia Sol is a compact car
            that is perfect for city driving. It has a 1.6L
            engine and a top speed of 120mph. The car has a
            5-star safety rating and is perfect for a small
            family.</p>
        <ul>
            <li>1.6L Engine</li>
            <li>120mph Top Speed</li>
            <li>5-Star Safety Rating</li>
        </ul>
        <br>
        <button class="btn btn-danger"
            onclick="play(); sol.close()">Close</button>
        <?php if (!isset($_SESSION['username'])): ?>
        <p style="color: black;">You must be logged in to rent a car</p>
        <?php else: ?>
        <button class="btn btn-success"
            onclick="play(); openPurchaseDialogue('Kia Sol', 'images/cars/Kia-Sol.jpg')">Rent</button>
        <?php endif; ?>

    </dialog>

    <!-- Kia Seltos Dialogue -->
    <dialog class="rounded-3" id="seltos"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/cars/car.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br>
        <p style="color: black; font-weight: bold;">Kia Seltos</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/cars/Kia-Seltos.jpg">
        <br><br>
        <p style="color: black;">The Kia Seltos is a compact SUV
            that is perfect for city driving. It has a 2.0L
            engine and a top speed of 167mph. The car has a
            5-star safety rating and is perfect for a small
            group of friends who also enjoy camping.</p>
        <ul>
            <li>2.0L Engine</li>
            <li>167mph Top Speed</li>
            <li>5-Star Safety Rating</li>
        </ul>
        <br>
        <button class="btn btn-danger"
            onclick="play(); seltos.close()">Close</button>
        <?php if (!isset($_SESSION['username'])): ?>
        <p style="color: black;">You must be logged in to rent a car</p>
        <?php else: ?>
        <button class="btn btn-success"
            onclick="play(); openPurchaseDialogue('Kia Seltos', 'images/cars/Kia-Seltos.jpg')">Rent</button>
        <?php endif; ?>
    </dialog>

    <!-- Kia Boul Dialogue -->
    <dialog class="rounded-3" id="boul"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/cars/car.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br>
        <p style="color: black; font-weight: bold;">Kia Boul</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/cars/Kia-Boul.jpg">
        <br><br>
        <p style="color: black;">The Kia Boul is a compact SUV
            that is perfect for city driving. It has a 1.6L
            engine and a top speed of 120mph. The car has a
            5-star safety rating and is perfect for a small
            family.</p>
        <ul>
            <li>1.6L Engine</li>
            <li>128mph Top Speed</li>
            <li>5-Star Safety Rating</li>
        </ul>
        <br>
        <button class="btn btn-danger"
            onclick="play(); boul.close()">Close</button>
        <?php if (!isset($_SESSION['username'])): ?>
        <p style="color: black;">You must be logged in to rent a car</p>
        <?php else: ?>
        <button class="btn btn-success"
            onclick="play(); openPurchaseDialogue('Kia Boul', 'images/cars/Kia-Boul.jpg')">Rent</button>
        <?php endif; ?>
    </dialog>

    <!-- Kia Ceed Dialogue -->
    <dialog class="rounded-3" id="ceed"
        style="height: 500; width: 500px;">
        <div></div>
        <img src="images/cars/car.png"
            style="width: 48px; margin-right: -5px; margin-top: -5px;">
        <br>
        <p style="color: black; font-weight: bold;">Kia Ceed</p>
        <!-- dialog contents -->
        <img class="img-fluid"
            src="images/cars/Kia-Ceed.jpg">
        <br><br>
        <p style="color: black;">The Kia Ceed is a compact car
            that is perfect for city driving. It has a 1.6L
            engine and a top speed of 120mph. The car has a
            5-star safety rating and is perfect for a small
            family.</p>
        <ul>
            <li>1.0L Engine</li>
            <li>140mph Top Speed</li>
            <li>5-Star Safety Rating</li>
        </ul>
        <br>
        <button class="btn btn-danger"
            onclick="play(); ceed.close()">Close</button>
        <?php if (!isset($_SESSION['username'])): ?>
        <p style="color: black;">You must be logged in to rent a car</p>
        <?php else: ?>
        <button class="btn btn-success"
            onclick="play(); openPurchaseDialogue('Kia Ceed', 'images/cars/Kia-Ceed.jpg')">Rent</button>
        <?php endif; ?>
    </dialog>

    <iframe id="hiddenFrame" name="hiddenFrame"
        style="display:none;"></iframe>
    <iframe id="hiddenFrameLogin" name="hiddenFrameLogin"
        style="display:none;"></iframe>
</html>