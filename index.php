<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase">
    <meta name="keywords" content="Creative Commons, images, gallery">
    <meta name="author" content="Geoffrey Reeves">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Creative Commons Showcase</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-lightbox.css" />

    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/layout.css"> 
    <link rel="stylesheet" href="css/navigation.css"/>

    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>
    
</head>
    
<body>
    
    <div class="wrapper">
    
    <div class="logo">
        <img class="responsive" src="images/sphere_logo.png"
        alt="s" />
    </div> <!-- logo -->

    <div class="top-title">
        <h2>CC Showcase</h2>
    </div> <!-- top title -->

        <div class="header">
            <div class="menu-header">

                <i class="fa fa-bars"></i>

                <div class="menu-content">
                    <ul>
                        <li><a href="#">Home</a></li>   
                        <li><a class="dropbtn" href="#">Gallery<i 
                        class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="#">Insects</a></li>
                                <li><a href="#">Space</a></li>
                                <li><a href="#">People</a></li>
                            </ul>

                        </li> <!-- Gallery Dropdown -->


                        <li><a href="#">About</a></li>
                        <li><a href="#">Links</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box main">
        <div class="info-text">
            <h2>Creative Commons - The Mission!</h2>
            <p>
                Creative Commons gives content creators and consumers a way to share 
                works without needing to grant permission for work to be used each time.
            </p>

            <p>
                The goal of creative commons is to "overcome legal obstacles to the sharing of knowledge and creativity to address the world’s pressing challenges". 
                You can learn more about <a href="https://creativecommons.org">Creative Commons</a> at the preceding link.
            </p>

            <p>
                It is easy to <a href="https://creativecommons.org/share-your-work">share your work</a> by choosing a 
                suitable license and then putting the license information on the work. 
                Standard abbreviations seen in CC licenses are...
            </p>

            <ul class="text">
                <li>SA (share alike)</li>
                <li>BY (attribution required)</li>
                <li>NC (non-commercial)</li>
            </ul>
            <p>
                Many government organisations and Schools in New Zealand are Creative Commons organisations. 
                This means that work created by employees will be CC licensed.
            </p>
                
            <p>
                Please vist the links page to find sources of CC works and 
                tools for correctly attributing these materials.
            </p>
        </div> <!-- info text div -->
        </div>  <!-- main div -->
       

        <div class="box footer">
            CC yourname 20XX
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
<script>
    $('.dropbtn').click(function()
        {
            $('.dropdown').toggleClass('display');
        }
    )

    // Make navigation button clickable

    $('.fa-bars').click(function()
    {
        $('.menu-content').toggle();
    })
</script>

</body>        
