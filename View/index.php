<html>
    <head>
        <title>Fun Coding</title>
        <link rel="stylesheet" href="styles/styleindex.css"/>
    </head>
    <body id="bground">
        <div id="container">
            <div id="left">
                <div><img src="images/logo.png"></div>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                    <img id="image" src="images/description.png">
                    </div>

                    <div class="mySlides fade">
                    <img id="image" src="images/vision.png">
                    </div>

                    <div class="mySlides fade">
                    <img id="image" src="images/mission.png">
                    </div>
                </div>
            </div>
            <div><hr></div>
            <div id="right">
                <div><a href="login.php"><input type="button" value="Log-In"></a></div>
                <br>
                <div><a href="register.php"><input type="button" value="Sign-Up"></a></div>
            </div>
        </div>
    </body>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
    </script>
    
</html>