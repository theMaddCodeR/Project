<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Shayar's cafe</title>
</head>
<body>
   
    <h2 style="color:black;" >Welcome Mr. <?php echo $_SESSION['name']; ?> </h2>
    
    

<section class="top" id="poy">

<div class="nav-links">

    <ul>
        <li><a href="#poy">HOME</a></li>
        <li><a href="#about-us">ABOUT</a></li>
        <li><a href="#specials">OUR SPECIALS</a></li>

        <li><a href="#contact">CONTACT</a></li>
        <li><a href="user.php">PROFILE</a></li>
        
        <li> <a href="logout.php">LOGOUT</a></li>


    </ul>
    <hr color="white" size="1">

</div>
</nav>
<div class="text-box">
    <h1>
        <spam class="hey">Shayar</spam>'s cafe and <br>
        <spam class="spa">Resturant</spam><br>
    </h1>

    <p class="about"> jsdfjksbfjkbsdjkcbcjsddfbjksdbfjksdnfjksdnjksdj oiwefhjehf jufh dudfh juhf eifh
        iejfisfjsdfjh
        <br>jsdfjksbfjkbsdjkcbcjsddfbjksdbfjksdnfjksdnjksdj oiwefhjehf jufh dudfh juhf eifh iejfisfjsdfjh
        <br>jsdfjksbfjkbsdjkcbcjsddfbjksdbfjksdnfjksdnjksdj oiwefhjehf jufh dudfh juhf eifh iejfisfjsdfjh
    </p>
    <br><a href="" class="botton">Visit to know more</a>

</div>

</section>
<hr color="green" size="3px">


                                          <!-- this is 2nd class -->


<section class="ndclass" id="specials">

<h1 class="nhed">OUR <spam class="nhedd">SPECIAL</spam> DISHES</h1>

<hr color="red" size="3px">
<img src="home-img.png" alt="" class="pho">
<div class="aphoto">

    <h3 class="ha">Tasty Burger</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with Italian Sauce, Chicken, and organice vegetables.</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>

</div>
<div class="bphoto">
    <h3 class="ha">Keema Samosa</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with Italian Sauce, Chicken, and organice vegetables.</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>
</div>
<div class="cphoto">
    <h3 class="ha">Afgan jalebi</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with Italian Sauce, Chicken, and organice vegetables.</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>

</div>
<div class="dphoto">
    <h3 class="ha">Turkish Tea</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with honey, sugar, and lemon .</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>

</div>
<div class="ephoto">
    <h3 class="ha">Faluda</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with Italian Sauce, Chicken, and organice vegetables.</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>

</div>
<div class="fphoto">
    <h3 class="ha">Kullad Tea</h3>
    <p class="aaphoto">$15</p>
    <p class="aaphoto"> Made with Italian Sauce, Chicken, and organice vegetables.</p>
    <form action="Address.php" method="POST">
         <button  type="submit" class="but" >add to cart</button>
    </form>

</div>

</section>
<hr color="green" size="3px">




<!--                                        this is third section                  -->

  <section class="morefoods">
      <h1 class="hmorefood">More Foods</h1> <br>
      <div class="abox">
          <img src="chickenlahori.jpg" alt="" class="smallfoodphotos">
          <p class="costo">Chicken Lahori<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
          <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox"> 
      <img src="ChickenBiryani.jpg" alt="" class="smallfoodphotos">
      <p class="costo"> Chicken Biryani<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox"> 
      <img src="muttonbiryani.jpg" alt="" class="smallfoodphotos">
      <p class="costo">Mutton Biryani<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
      <form action="Address.php" method="POST">
      
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox"> 
      <img src="paneerbuttermasala.jpg" alt="" class="smallfoodphotos">
      <p class="costo">Paneer Masala<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
      
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox">
      <img src="daalmakhani.jpg" alt="" class="smallfoodphotos">
      <p class="costo">Daal Makhani<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox">
      <img src="friedrice.jpg" alt="" class="smallfoodphotos">
      <p class="costo">Fried Rice<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
      
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox">
      <img src="nonvegthali.jpeg" alt="" class="smallfoodphotos">
      <p class="costo">Non-veg Thali<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox">
      <img src="muttonhandi.jpeg" alt="" class="smallfoodphotos">
      <p class="costo">Mutton Handi<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
      <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
      </div>
      <div class="abox"> 
          <img src="frenchfries.jpeg" alt="" class="smallfoodphotos">
          <p class="costo">French Fries<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
          <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
        </div>
      <div class="abox"> 
          <img src="chickenkalimirch.jpg" alt="" class="smallfoodphotos">
          <p class="costo">Chicken kaliMirch<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
          <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
    </div>
      <div class="abox">
           <img src="friedchicken.jpg" alt="" class="smallfoodphotos">
           <p class="costo">Fried Chicken<br>$15</p>
           <!-- <p class="costo">$15</p> -->
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
     
           <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
        </div>
      <div class="abox"> 
          <img src="LachhaParatha.jpg" alt="" class="smallfoodphotos">
          <p class="costo">Lachha Paratha<br>$15</p>
      <p class="costofmorefoods">Made with Italian Sauce, Chicken, and organice vegetables.</p>
      
          <form action="Address.php" method="POST">
         <button  type="submit" class="cut" >add to cart</button>
    </form>
    </div>
      

  </section>




                                               <!-- this is contact us form -->




<hr color="green" size="3px">

<section class="thirdsection" id="contact">
<h1 class="threehi"> <spam class="cont">Contact</spam> Us</h1>

<div class="third">
    <h3 class="hhh">View On map</h3>
    <div class="mapp">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57330.46073730168!2d87.91197830970651!3d26.09389782254653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e516befd097303%3A0xb171e5facfa2a2d8!2sKishanganj%2C%20Bihar!5e0!3m2!1sen!2sin!4v1652790620050!5m2!1sen!2sin"
        width="500" height="500" style="border:2px dashed green;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

  
    <div class="location">
        <h1>exact location</h1>

    </div>
     

<div class="contactusform">
        <form action="mailto:kashifqumar06@gmail.com" class="formm" method="post" enctype="text/plain">
            <label for="" class="hh">Email Us</label> <br>
            <input type="text"   name="Name"placeholder="Name"> <br>
            <input type="text" name="Mobile no" placeholder="Mobile Number"><br>
            <input type="email" placeholder="Email" name="Email"><br>
            <textarea name="Message" cols="30" rows="10" placeholder="your message"></textarea><br>
            <input type="submit" placeholder="Submit"><br>
        </form>
    </div>
    </div>
</section> 
<hr color="green" size="3px">




  <!-- this is aboutus section -->


<section class="information" id="about-us">
<div class="heada">
 <h1 class="umar">About US</h1>
</div>
<div class="content">
 <h2>About us</h2>
 <p>lorem ipsum dolor sit amet consecutor <br>Adipisicing Eit.Cum LUsto Architecto 
    <br>porro Delectus lpsa Provident <br>Laborum Excepturi Optio</p>
</div>
<div class="foot">
<div class="nav-links">

    <ul>
        <li><a href="https://www.facebook.com/"><img src="Facebook_Logo.png" alt="" class="logo"></a></li>
        <li><a href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up"><img src="linkdinlogo.png" alt="" class="logo"></a></li>
        <li><a href="https://www.instagram.com/shayarscafe/"><img src="instalogoo.jpeg" alt="" class="logo"></a></li>

        <li><a href="https://twitter.com/account/access?lang=en&flow=single_sign_on"><img src="Twitter_logo.png" alt="" class="logo"></a></li>
        <li><a href="https://www.snapchat.com/" ><img src="snapchat_logo.png" alt="" class="logo"></a></li>

    </ul>
    <hr color="white" size="1">

</div>
</nav>

</div>

</section>
</body>

</html>