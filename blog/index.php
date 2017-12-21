<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
   
    <title>Laurean Ray</title>
    <script src="../js/jquery.js"></script>
    <script src="../js/script-blog.js"></script>
 
    <title>Blog | Laurean Ray</title>
</head>
<body>
<header class="main-header">


     <div class="loader" id="load">
        <div class="loadanim">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div>
            <div class="circle6"></div>
            <div class="circle7"></div>
            <div class="circle8"></div>
            <div class="circle9"></div>
            <div class="circle10"></div>
            <div class="circle11"></div>
            <div class="circle12"></div>
        </div>
        <div class="loadanim2">
            <div class="re1"></div>
            <div class="re2"></div>
            <div class="re3"></div>
            <div class="re4"></div>
            <div class="re5"></div>
            <div class="re6"></div>
            <div class="re7"></div>
            <div class="re8"></div>
            <div class="re9"></div>
            <div class="re10"></div>
            <div class="re11"></div>
            <div class="re12"></div>
        </div>
         <!-- <h1 class="ld-txt"> Loading Please Wait     </h1> -->
     </div>
    <div class="container">
        <div class="branding">
            <div class="brand-icon" id="brand"></div>
    <h3 class="brandingtxt"> Laurean Ray</h3>
    <h4 class="tagline"> Less is more </h4>
        </div>
    <!-- Hamburger -->
    
    <!-- For Desktop Navgition -->
   <nav class="main-nav">
    <ul class="nav-ul">
    <li><a href="../"> Overview </a> </li>
    <li><a href="#"> Skills & Projects </a> </li>
    <li><a href="#"> Services </a> </li>
    <li><a href="blog" class="current"> Blog </a> </li>
    <li><a href="login.php"> Log In </a> </li>
    </ul>
   
    </nav> 


    <!-- For Mobile Navigation  -->

    <div id="mySidenav" class="sidenav">
        <div class="container">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Overview</a>
            <a href="#">Skills</a>
            <a href="projects/">Projects</a>
            <a href="#">Services</a>
            <a href="#">Blog</a>
        </div>        
    </div>
    </div>
    
    </header>

<div class="fix"></div>
<div class="bd-wrapper">
<div class="blog-dropdown">
        <a href="admin.php"> Admiwn </a>
    </div>
</div>

<div class="container">


<div class="hamburger-wrapper">
         <div class="hamburger" onclick="openNav()"> 
            <div class="line1"></div>
             <div class="line2"></div>
        </div>
    </div>
<section class="posts">
    <div class="post-wrapper">
        <h4 class="post-heading">
            Post Heading
        </h4>
        <p class="post-date">
            January 01, 2017
        </p>
        <p class="post-author">
            Author
        </p>
        <p class="post-p">
            Lorem ipsum
        </p>
    </div>
</section>



<aside class="sbar">
        <p class="archive"> Archive </p>
</aside>
</div>
<footer id="footer">
        <div class="container">
        <div class="footer-txt">
                <p>
                        Laurean Ray Bahala &copy; 2017 <br> All Rights Reserved
                    </p>
                       
        </div>

        <div class="social">
                <p class="made">
                       Manila, Philippines
                    </p>
                    <div class="sns-wrapper">
                            <img src="../img/facebook.png" alt="" class="sns">
                            <img src="../img/twitter.png" alt="" class="sns">
                            <img src="../img/instagram.png" alt="" class="sns">
                    </div>
                      
        </div>
       
    </div>
    </footer>
</body>
</html>