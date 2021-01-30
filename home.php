<?php 
    session_start();
?>

<!doctype html>
<html>

    <head>

        <title>"Smile"</title>

        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet"> -->

    </head>
    
    <body>
    
    
    <?php include 'home_navbar.php';?>
    <?php include 'home_imageSlider.php';?>
    
    <!-- About Us -->
            <a name="about"></a>
            <section class="container-fluid text-center founders breathe">
                <div class="container" id="about">
                    <h1 style="padding: .5em; color: #04868E; font-size: 50px;">About Us</h1>
                    <p><span style="font-size:20px">Smile is a one-stop resource for donations. Through this online platform we seek to popularise the concept of donating for humanity. While monetary donations can be made by people with financial means, donating in kind can be done by practically everyone because item being donated is already in use with us.</span></p>

                    <p><span style="font-size:20px">Hereby we have started-off by providing information on donation seekers so that donors can straightaway contact the NGO's which will receive this donations and will provide to the needy. Through this site you can reach a government certified NGO in the city of Indore. However, in due course, we wish to move upwards on the value chain by organizing our own collection centres in major Indian cities, followed by distribution to deserving establishments.</span></p>
                </div>
            </section>

    <?php include 'home_howitworks.php';?>
    <?php include 'footer.php';?>

    <script>
    // Script for side navigation
        function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
        }

    // Close side navigation
        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }

    // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

<!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>