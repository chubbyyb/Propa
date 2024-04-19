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
        <title>Propa -> Cork</title>
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
                href="index.php">Propa -> Cork
                <span>
                    <a onclick="play(); login.showModal();">
                        <img src="images/login-icon.png"
                            style="width: 46px; float: right; margin-right: 30px; margin-top: 4px;">
                    </a>
                </span>
            </h1>
        </h1>
        <div class="vDIV rounded-3"></div>
        <br>
        <div class="container glass">
            <div class="row">
                <div id="behindPic" class="col">
                    <img class="img-fluid" src="images/houses/cork-banner.jpg"
                        alt
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 7px;">
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <a onclick="play(); sgl.showModal();">
                        <img class="img-fluid panelObject rounded-3 hover-div"
                            src="images/houses/cork/single-room.jpg"
                            alt="Single Room">
                        <p class="text-center goodFont"
                            style="color: black;">Single Room <br>
                            <button type="button" class="btn btn-success btn-sm"
                                style="height: 30px; width: 60px;">€450</button>
                        </p>
                    </a>
                </div>

                <div class="col-sm">
                    <a onclick="play(); dbl.showModal();">
                        <img class="img-fluid panelObject rounded-3 hover-div"
                            src="images/houses/cork/double-room.jpg"
                            alt="Double Room" onclick="play();">
                        <p class="text-center goodFont"
                            style="color: black;">Double <br>
                            <button type="button" class="btn btn-success btn-sm"
                                style="height: 30px; width: 60px;">€307</button>
                        </p>
                    </a>
                </div>

                <div class="col-sm">
                    <a onclick="play(); drm.showModal();">
                        <img class="img-fluid panelObject rounded-3 hover-div"
                            src="images/houses/cork/premium-studio.jpg" alt="Premium Studio"
                            onclick="play();">
                        <p class="text-center goodFont"
                            style="color: black;">Premium Studio<br>
                            <button type="button" class="btn btn-success btn-sm"
                                style="height: 30px; width: 60px;">€730</button>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container text-center rounded-3"
            style="background-color: #6d483a;">
            <br>
            <h2 class="goodFont" style="font-size: large;">Melbourn Point</h2>
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: white;"">
                These rooms are located in <span class="goodFont"
                    style="color: white;">Melbourn Point</span> 
                    The rooms are a 10-minute walk from TU Cork campus, a 20-minute bus ride from University College Cork, and a 30-minute bus journey from Cork Institute of Technology. Nestled in a serene residential area, they offer easy access to a nearby park and supermarket. Each room is thoughtfully furnished with a bed, desk, chair, wardrobe, and sink. Residents share a fully equipped kitchen, cozy living room, and bathroom. The kitchen boasts modern amenities including a fridge, freezer, oven, microwave, kettle, toaster, and washing machine. The living room is equipped with a TV and a dining table, perfect for shared meals or relaxation. Outside, the house features a garden and a bike shed. Rent covers all bills and includes a weekly cleaning service. High-speed internet ensures seamless connectivity, and professional property management oversees the house with a 24/7 emergency helpline. Registered with the Residential Tenancies Board, this non-smoking, pet-free abode fosters a quiet, safe, and friendly environment. It's more than just a house—it's a happy home.
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.7719621386416!2d-6.281458401587959!3d53.351419883271284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670d1971e20ddb%3A0x40a400ffc3d9d045!2sArdcairn%20House%20-%20Student%20Accommodation!5e0!3m2!1sen!2sie!4v1713018774736!5m2!1sen!2sie"
                width="600" height="450" style="border:0;" allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
        </div>
    </body>

    <!-- Dialogs -->

    <!-- Single Room -->
    <dialog class="rounded-3" id="sgl"
        style="height: 500; width: 600px; max-height: 900px;">
        <div></div>
        <button class="btn btn-success btn-sm"
            style="height: 30px; width: 57px; margin-right: -5px; margin-top: -5px; outline: none; border: none; box-shadow: none;">€600</button>
        <br><br />
        <p style="color: black; font-weight: bold;">Single Room</p>
        <!-- dialog contents -->
        <img class="img-fluid" style="width: 600px;"
            src="images/houses/cork/single-room.jpg">
        <p style="color: black;">
            <p style="color: black;">
                The Single Room in Melbourn Point, Cork offers:
            </p>
            <ul>
                <li><span class="goodFont"
                        style="color: black;">Location:</span> 10-minute walk
                    from TU Cork campus, short bus ride from
                    other major universities.</li>
                <li><span class="goodFont"
                        style="color: black;">Services:</span> Rent includes all
                    bills, weekly cleaning, and high-speed internet.</li>
                <li><span class="goodFont"
                        style="color: black;">Ammenities:</span> Fully furnished
                    room with shared kitchen, living room, and bathroom. Garden
                    and bike shed available.</li>
                <li><span class="goodFont"
                        style="color: black;">Management:</span> Managed by a
                    professional company with a 24/7 emergency helpline.
                    Registered with the Residential Tenancies Board.</li>
                <li><span class="goodFont"
                        style="color: black;">Enviorment:</span> Quiet
                    residential area with nearby park and supermarket.
                    Non-smoking, pet-free, safe, friendly, and happy house.</li>
            </ul>
            <button class="btn btn-danger"
                onclick="play(); sgl .close()">Close</button>
            <a
                href="contact.php?property=Single+Room%3A+Cork%2C+Melbourn+Point"><button
                    class="btn btn-success"
                    onclick="play();">Contact</button></a>
        </dialog>

        <!-- Double Room -->
        <dialog class="rounded-3" id="dbl"
            style="height: 500; width: 600px; max-height: 900px;">
            <div></div>
            <button class="btn btn-success btn-sm"
                style="height: 30px; width: 57px; margin-right: -5px; margin-top: -5px; outline: none; border: none; box-shadow: none;">€367</button>
            <br><br />
            <p style="color: black; font-weight: bold;">Single Room</p>
            <!-- dialog contents -->
            <img class="img-fluid" style="width: 600px;"
                src="images/houses/cork/double-room.jpg">
            <p style="color: black;">
                <p style="color: black;">
                    The Double Room in Melbourn Point, Cork offers:
                </p>
                <ul>
                    <li><span class="goodFont"
                            style="color: black;">Location:</span> 10-minute
                        walk from TU Cork campus, short bus ride
                        from other major universities.</li>
                    <li><span class="goodFont"
                            style="color: black;">Services:</span> Rent includes
                        all bills, weekly cleaning, and high-speed
                        internet.</li>
                    <li><span class="goodFont"
                            style="color: black;">Ammenities:</span> Fully
                        furnished room with shared kitchen, living room, and
                        bathroom. Garden and bike shed available.</li>
                    <li><span class="goodFont"
                            style="color: black;">Management:</span> Managed by
                        a professional company with a 24/7 emergency helpline.
                        Registered with the Residential Tenancies Board.</li>
                    <li><span class="goodFont"
                            style="color: black;">Enviorment:</span> Quiet
                        residential area with nearby park and supermarket.
                        Non-smoking, pet-free, safe, friendly, and happy
                        house.</li>
                </ul>
                <button class="btn btn-danger"
                    onclick="play(); dbl.close()">Close</button>
                <a
                    href="contact.php?property=Double+Room%3A+Cork%2C+Melbourn+Point"><button
                        class="btn btn-success"
                        onclick="play();">Contact</button></a>
            </dialog>

            <!-- Dorm Room -->
            <dialog class="rounded-3" id="drm"
                style="height: 500; width: 600px; max-height: 900px;">
                <div></div>
                <button class="btn btn-success btn-sm"
                    style="height: 30px; width: 57px; margin-right: -5px; margin-top: -5px; outline: none; border: none; box-shadow: none;">€230</button>
                <br><br />
                <p style="color: black; font-weight: bold;">Single Room</p>
                <!-- dialog contents -->
                <img class="img-fluid" style="width: 600px;"
                    src="images/houses/cork/premium-studio.jpg">
                <p style="color: black;">
                    <p style="color: black;">
                        The Premium Studio in Melbourn Point, Cork offers:
                    </p>
                    <ul>
                        <li><span class="goodFont"
                                style="color: black;">Location:</span> 10-minute
                            walk from TU Cork campus, short bus
                            ride from other major universities.</li>
                        <li><span class="goodFont"
                                style="color: black;">Services:</span> Rent
                            includes all bills, weekly cleaning, and high-speed
                            internet.</li>
                        <li><span class="goodFont"
                                style="color: black;">Ammenities:</span> Fully
                            furnished room with shared kitchen, living room, and
                            bathroom. Garden and bike shed available.</li>
                        <li><span class="goodFont"
                                style="color: black;">Management:</span> Managed
                            by a professional company with a 24/7 emergency
                            helpline. Registered with the Residential Tenancies
                            Board.</li>
                        <li><span class="goodFont"
                                style="color: black;">Enviorment:</span> Quiet
                            residential area with nearby park and supermarket.
                            Non-smoking, pet-free, safe, friendly, and happy
                            house.</li>
                    </ul>
                    <button class="btn btn-danger"
                        onclick="play(); drm.close()">Close</button>
                    <a
                        href="contact.php?property=Premium+Studio%3A+Cork%2C+Melbourn+Point"><button
                            class="btn btn-success"
                            onclick="play();">Contact</button></a>
                </dialog>

                <iframe id="hiddenFrame" name="hiddenFrame"
                    style="display:none;"></iframe>
                <iframe id="hiddenFrameLogin" name="hiddenFrameLogin"
                    style="display:none;"></iframe>
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
                    <p style="color: black;">You are already logged in as <?php
                        echo $_SESSION['username']; ?></p>
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

            </html>