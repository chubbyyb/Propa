document.addEventListener('DOMContentLoaded', function() {
    // Wait for the iframe to load
    document.getElementById('hiddenFrame').addEventListener('load', function() {
        // Access the content of the iframe
        var iframeContent = this.contentDocument || this.contentWindow.document;
        // Extract the echoed output from the iframe content
        var echoedOutput = iframeContent.body.innerHTML;

        // Do something with the echoed output, for example, log it to the console
        console.log('Echoed output from PHP:', echoedOutput);

        if(echoedOutput == 1)
        {
            document.getElementById('RegError').innerHTML = "Please Enter A Valid Phone Number";
            document.getElementById('RegError').style.visibility = "visible";
            document.getElementById('RegError').style.color = "red";
        }
        if(echoedOutput == 2)
        {
            document.getElementById('RegError').innerHTML = "Please Enter A Valid Email";
            document.getElementById('RegError').style.visibility = "visible";
            document.getElementById('RegError').style.color = "red";
        }
        if(echoedOutput == 3)
        {
            document.getElementById('RegError').innerHTML = "Account Created :)";
            document.getElementById('RegError').style.visibility = "visible";
            document.getElementById('RegError').style.color = "green";
        }
        if(echoedOutput == 4)
        {
            document.getElementById('RegError').innerHTML = "Internal Error, Please Try a different Username";
            document.getElementById('RegError').style.visibility = "visible";
            document.getElementById('RegError').style.color = "red";
        }

        // For Contact Form 
        if (echoedOutput == 5)
        {
            document.getElementById('msgError').innerHTML = "Please Enter A Valid Phone Number";
            document.getElementById('msgError').style.visibility = "visible";
            document.getElementById('msgError').style.color = "red";
        }
        if (echoedOutput == 6)
        {
            document.getElementById('msgError').innerHTML = "Please Enter A Valid Email";
            document.getElementById('msgError').style.visibility = "visible";
            document.getElementById('msgError').style.color = "red";
        }
        if (echoedOutput == 7)
        {
            document.getElementById('msgError').innerHTML = "Message Sent :)";
            document.getElementById('msgError').style.visibility = "visible";
            document.getElementById('msgError').style.color = "green";
            console.log("Hi");
        }
        if (echoedOutput == 8)
        {
            document.getElementById('msgError').innerHTML = "Internal Error, Please Try Again";
            document.getElementById('msgError').style.visibility = "visible";
            document.getElementById('msgError').style.color = "red";
        }


        // For purchase form
        if (echoedOutput == 9)
        {
            document.getElementById('purchaseError').innerHTML = "Please Enter A Valid Email Address";
            document.getElementById('purchaseError').style.visibility = "visible";
            document.getElementById('purchaseError').style.color = "red";
        }
        if (echoedOutput == 10)
        {
            document.getElementById('purchaseError').innerHTML = "Please Enter A Valid Card Number";
            document.getElementById('purchaseError').style.visibility = "visible";
            document.getElementById('purchaseError').style.color = "red";
        }
        if (echoedOutput == 11)
        {
            document.getElementById('purchaseError').innerHTML = "Car Rented for 30 days, please find the details in your email :)";
            document.getElementById('purchaseError').style.visibility = "visible";
            document.getElementById('purchaseError').style.color = "green";
        }
        if (echoedOutput == 12)
        {
            document.getElementById('purchaseError').innerHTML = "Internal Error, Please Try Again";
            document.getElementById('purchaseError').style.visibility = "visible";
            document.getElementById('purchaseError').style.color = "red";
        }

    });

    // Wait for the iframe to load
    document.getElementById('hiddenFrameLogin').addEventListener('load', function() {
        // Access the content of the iframe
        var iframeContent = this.contentDocument || this.contentWindow.document;
        // Extract the echoed output from the iframe content
        var echoedOutput = iframeContent.body.innerHTML;

        // Do something with the echoed output, for example, log it to the console
        console.log('Echoed output from PHP:', echoedOutput);

        if(echoedOutput == 1)
        {
            document.getElementById('logError').innerHTML = "Logged In Successfully";
            document.getElementById('logError').style.visibility = "visible";
            document.getElementById('logError').style.color = "green";
            location.reload();
        }
        if(echoedOutput == 2)
        {
            document.getElementById('logError').innerHTML = "Invalid Login";
            document.getElementById('logError').style.visibility = "visible";
            document.getElementById('logError').style.color = "red";
        }
        if(echoedOutput == 3)
        {
            document.getElementById('logError').innerHTML = "Internal Error";
            document.getElementById('logError').style.visibility = "visible";
            document.getElementById('logError').style.color = "red";
        }


        // For amending
        if(echoedOutput == 4)
        {
            document.getElementById('AmendError').innerHTML = "Amended Successfully";
            document.getElementById('AmendError').style.visibility = "visible";
            document.getElementById('AmendError').style.color = "green";
            location.reload();
        }
        if(echoedOutput == 5)
        {
            document.getElementById('AmendError').innerHTML = "Invalid Phone or Email";
            document.getElementById('AmendError').style.visibility = "visible";
            document.getElementById('AmendError').style.color = "red";
        }
        if(echoedOutput == 6)
        {
            document.getElementById('AmendError').innerHTML = "Internal Error";
            document.getElementById('AmendError').style.visibility = "visible";
            document.getElementById('AmendError').style.color = "red";
        }
    });
});