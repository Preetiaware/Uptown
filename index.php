<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uptown Urbania Thane(w)</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
    swiper@9/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/f28ecfc546.js" 
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
  

  <div class="left-side">
  <!-----------------header section starts-----------------------> 
 <section class="header">
   <a href="#" class="logo">UPTOWN URBANIA</a>

     <nav class="navbar">
       <a href="#home">Home</a>
       <a href="#about">About Us</a>
       <a href="#breakups">Pricing</a>
       <a href="#gallery">Gallery</a>
       <a href="#amen">Amenites</a>
       <a href="#floorplan">Floor Plan</a>
       <a href="#location">Location</a>
       <a href="#contact">Contact Us</a>
     </nav>
     <div id="menu-btn"><i class="fa-solid fa-bars"></i></div>
   </section>
<!--------------------header section end-------------------------->

<!---------------------------------auto popup form code starts-----------------------------------> 
  <div id="modalBox">
    <h2 class="modal">REGISTER FOR <span>BEST OFFERS!</span></h2>
     <div class="offer-text">
      <form  action="login.php" method="post">
        <input type="text" name="name" placeholder="Enter Your Name" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="phone" name="phone" placeholder="Enter Your Phone" required>
        <button type="submit" class="btnn" onclick="closeForm()">Get Instant Call Back</button> 
       </form>
     </div>
    <span  class="close-icon" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></span>
  </div>   
<!---------------------------------auto popup form code ends----------------------------------->


<!-------------------------------home slider code------------------------------------->

 <div id="home">
 <div class="imgSlider"></div>
 </div>

<!--------------------------------home slider code ends---------------------->


<!--------------------------brochure code-------------------------------------->

<button type="button" class="bt downloadBrochure" onclick="openForm5()" 
target="_blank">Download Brochure</button>
  

<div id="popupForm5" class="form-popup5">
    <form  action="login.php" method="post" class="form-container5">
      <h1>Enter Your Details For <span> BROCHURE</span></h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
      <button type="button" class="btn cancel" onclick="closeForm5()">Close</button>
      <button type="submit" class="btn submit">Submit</button>
    </form> 
  </div>
<!----------------------brochure code end---------------------------------------------->



 <!-------------------------------about us code starts-------------------------------->  
 <div id="about">
    <section class="about">
      <div class="image">
         <img src="Img/familia.jpg" alt="" height="100%" width="100%"> 
      </div>
      <div class="content">
        <h3>About Us</h3>
        <p> <b>Welcome to Uptown La-vie, a magical world spread across 55 acres of adventure, discovery, friendships, and family time. 
          A host to numerous modern lifestyle amenities and world-class infrastructure, this fascinating township introduces the 
          first cluster of towers ‘La familia’, offering luxury 2 & homes in Thane. Now experience a haven of comfort and joy in a 
          community-centric development with a neighborhood where people feel safe, secure, and grow together Strategically located in the superior location of Thane,
           Uptown La-vie reinvents modern-day living, where you can embrace life beyond square feet of residential spaces. Incorporated with Futuristic technologies, 
           classic design sensibilities and modern lifestyle Uptown Urbania Thane is a benchmark for 21st century’s real estate.</b>
        </p>
      </div>
  
    </section>
    </div>
    <br></br>
<!-------------------------------about us code ends------------------------------------->  


<!-------------------------------Pricing code starts------------------------------------>
<div id="breakups">
<br></br>
<section>
<h2 class="pricings" style="text-align:center">PRICING & BREAKUPS</h2>

<div class="columns">
  <ul class="price">
    <li class="head">2 BHK</li>
    <li class="grey">600-700 Sqft.</li>
    <li style="background-color: white;"><button type="button" class="btn" onclick="openForm3()">Click Here For Pricing</button></li>
  </ul>
  <div id="popupForm3" class="form-popup3">
    <form  action="login.php" method="post" class="form-container3">
      <h1>ENQUIRE HERE FOR PRICING</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
      <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
      <button type="submit" class="btn submit">Submit</button>
    </form> 
  </div>
</div>

<div class="columns">
  <ul class="price">
    <li class="head">3 BHK</li>
    <li class="grey">800-1076 Sqft.</li>
    <li style="background-color: white;"><button type="button"  class="btn" onclick="openForm4()">Click Here For Pricing</button></li>
  </ul>
  <div id="popupForm4" class="form-popup4">
    <form action="login.php" method="post" class="form-container4">
      <h1>ENQUIRE HERE FOR PRICING</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
      <button type="button" class="btn cancel" onclick="closeForm4()">Close</button>
      <button type="submit" class="btn submit">Submit</button>
    </form>
  </div>
</div>
</section>
</div>
<br></br>
<!-----------------------------Pricing code ends--------------------------------->


<!-----------------------------gallery code starts------------------------------->  
<div id="gallery">
<br></br>
<br></br>
   <h1 class="prog">Project Gallery</h1>
   <div class="carousel">
    <div class="slide-container">
      <div class="slide">
        <img src="Img/livingroom.jpg" alt="Image 1" >
      </div>
      <div class="slide">
        <img src="Img/dinningroom.jpg" alt="Image 2">
      </div>
      <div class="slide">
        <img src="Img/kitchen.jpg" alt="Image 3">
      </div>
      <div class="slide">
        <img src="Img/bedroom.jpg" alt="Image 4">
      </div>
      <div class="slide">
        <img src="Img/balcony.jpg" alt="Image 5">
      </div>
    </div>
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
  </div>    
 </div> 

<!--  
<div class="carousel">
    <div class="slides">
      <img src="Img/livingroom.jpg" alt="Image 1">
      <img src="Img/dinningroom.jpg" alt="Image 2">
      <img src="Img/kitchen.jpg" alt="Image 3">
      <img src="Img/balcony.jpg" alt="Image 4">
      <img src="Img/bedroom.jpg" alt="Image 5">
    </div>
  </div> -->



<!-------------------------------gallery code ends-------------------------------------------->


<!--------------------------------amenities code starts---------------------------------------->
 <div id="amen">
  <br></br>
  <br></br>
  <section class="amenities">
   <h1 class="heading-title">Amenities</h1>
     <div class="box-container">
        <div class="box">
           <img src="Img/games.png" alt="Games" height="90%" width="90%" >
           <h3>Games</h3>
        </div>
        <div class="box">
           <img src="Img/garden.png" alt="Garden"  height="90%" width="90%">
           <h3>Garden</h3>
        </div>
        <div class="box">
           <img src="Img/gym.png" alt="Gym"  height="90%" width="90%">
           <h3>Gym</h3>
        </div>
        <div class="box">
           <img src="Img/kidsplayarea.png" alt="Kids Play Area"  height="90%" width="90%">
           <h3>Kids Play Area</h3>
        </div>
        <div class="box">
           <img src="Img/jacuzi.png" alt="Jaccuzi"  height="90%" width="90%">
           <h3>Jaccuzi</h3>
        </div>
        <div class="box">
           <img src="Img/swimming.png" alt="Swimming pool"  height="90%" width="90%">
           <h3>Swimming Pool</h3>
        </div>

        <div class="box">
          <img src="Img/badminton.png" alt="Badminton Court"  height="90%" width="90%">
          <h3>Badminton Court</h3>
       </div>

       <div class="box">
        <img src="Img/yoga.png" alt="Yoga & Stargazing Deck"  height="90%" width="90%">
        <h3>Yoga & Stargazing Deck</h3>
       </div>
     </div>
   </section>
  </div>
  <br></br>
  <br></br>
<!--------------------------------amenities code ends----------------------------------------->


<!-------------------------------floorplan code starts---------------------------------------->
      <div id="floorplan">
        <br></br>
        <div class="container">
          <h1 class="sub-title">Floor Plan</h1>
            <div class="plan-list">

               <div class="plan">
                  <img src="Img/masterplan.webp" >
                  <div class="layer">
                  <button type="button" onclick="openForm1()" class="btn1">View Plan</button>
                  </div>
            
                 <div id="popupForm1" class="form-popup1">
                    <form action="login.php" method="post" class="form-container1" >
                      <h1>LOGIN TO GET <span>PLAN DETAILS</span></h1>
                      <label for="name">Name:</label>
                      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                      <label for="phone">Phone:</label>
                      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
                      <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
                      <button type="submit" class="btn submit">Submit</button> 
                    </form>
                  </div> 
               </div>
              
                 
               <div class="plan">
                    <img src="Img/plan4.jpg" class="floor" >
                    <div class="layer">
                    <button type="button" onclick="openForm2()" class="btn1">View Plan</button>
                   </div> 
                   
                   <div id="popupForm2" class="form-popup2">
                    <form action="login.php" method="post" class="form-container2">
                      <h1>LOGIN TO GET  <span>PLAN DETAILS</span></h1>
                      <label for="name">Name:</label>
                      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                      <label for="phone">Phone:</label>
                      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
                      <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
                      <button type="submit" class="btn submit">Submit</button>
                    </form>
                  </div>
                 </div> 
                 

               </div>
              </div>
             </div>
            <br></br>
<!-------------------------------------floorplan code ends----------------------------------------------->        


<!-------------------------------------Location code starts----------------------------------------------->
<div id="location">
<br></br>
 <h1 class="loca">LOCATION HIGHLIGHTS</h1>
  <div class="image-in">
    <div class="location-map">
    <h4 class="connect">CONNECTIVITY</h4>
        <ul>
          <li> - Majiwada Junction (6 mins)</li><br>
          <li> - Mindspace, Airoli (20 mins)</li><br>
          <li> - Mulund Check-naka (12 mins)</li><br>
          <li> - BKC (45 mins)</li><br>
        </ul>
       <h4 class="high1">UPCOMING INFRASTRUCTURE</h4>
        <ul>
          <li> - Balkum Metro Station (8 mins)</li><br>
          <li> - Majiwada Metro Station (7 mins)</li><br>
          <li> - Sea Taxi Station (3 mins)</li><br>
          <li> - Thane Borivali Tunnel (10 mins)</li>
        </ul>
    </div>
    <img src="Img/locationmap.jpg" height="60%" width="55%" class="imge">   
  </div>
</div> 
<!-------------------------------------Location code end----------------------------------------------->


<!-----------------------------------Contact us code starts--------------------------------------------->
   <div id="contact">
   <section class="contact">

     <h1 class="heading-title">Contact Us Now!</h1>

      <form action="login.php" method="post" class="cnt-form">
            
         <div class="flex">
           <div class="inputBox">
               <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
           </div>

           <div class="inputBox">
               <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
           </div>

           <div class="inputBox">
               <input type="phone" name="phone" id="phone" placeholder="Enter Your Number" required>
           </div>
          </div>

          <input type="submit" value="submit" class="btn" name="send">
      </form>
   </section>
   </div>
   
<!----------------------------------Contactus code ends---------------------------------------------->


 <!----------------------------------footer code starts---------------------------------------------->

   <section class="footer">

     <div class="box-container">

       <div class="box">
         <h3>Contact Info</h3>
         <a href="#"><i class="fa-solid fa-phone"></i>+91 9619861001</a>
         <a href="#"><i class="fa-solid fa-envelope"></i>support@uptownurbania-thane.com</a>
         <a href="#"><i class="fa-solid fa-location-dot"></i>Thane West, Mumbai,Maharashtra. 400601.</a> 
       </div>

       <div class="box">
         <h3>Follow Us</h3>
         <a href="https://www.facebook.com"><i class="fa-brands fa-square-facebook"></i> facebook</a>
         <a href="https://www.instagram.com"><i class="fa-brands fa-square-instagram"></i> instagram</a>
         <a href="https://www.twitter.com"><i class="fa-brands fa-square-twitter"></i> twitter</a> 
       </div>
     
      </div>

      <!-- <div class="copyright"> copyright ©  developed by <span> UPTOWN URBANIA!</span></div> -->
      <div class="copyright"><b>Disclaimer:</b> &nbsp;&nbsp;We are an authorised marketing partner for this project. 
      Provided content is given by respective owners and this website and content is for information purpose only and it does not constitute
      any offer to avail for any services. Prices mentioned are subject to change without prior notice 
      and properties mentioned are subject to availability. You can expect a call, 
      SMS or emails on details registered with us. All Rights Reserved.</div>
   </section>

 <!-------------------------------- footer code end----------------------------------------------------->


 
 <!-----------------------------------------script links-------------------------------------------------->
 <script src="https://cdn.jsdelivr.net/npm/
 swiper@9/swiper-bundle.min.js"></script>
   
 <script src="main.js"></script>

 <!--------------------------sticky home page form code starts----------------------------------->

  
<!------------------popup form code starts for offer box----------------------------------->
<div id="popupForm" class="form-popup">
    <form  action="login.php" method="post" class="form-container">
      <h1>LOGIN HERE FOR <span>MORE OFFERS</span></h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      <button type="submit" class="btn submit">Submit</button>
    </form>
  </div>
 <!-----------------------popup form code ends for offer box--------------------------->


<div class="right-side">

<div class="offerbox">
  <div class="offer">
     <h2>BOOKING OPEN</h2>
     <img src="Img/uptown.png"><br>
    

     <b class="zoom-in-out">* YEARLY PAYMENT PLAN 20:20:20:20:20 *</b>
     <b class="zoom-in-out">* ZERO STAMP DUTY OFFER *</b>
     <b class="zoom-in-out">* 100+ ACRES TOWNSHIP *</b>
     <b class="zoom-in-out">* CONCEPT POD BALCONY HOMES *</b>
     <b class="zoom-in-out">*EXCELLENT CONNECTIVITY E.E. HIGHWAY*</b>
  
    <button type="button" onclick="openForm()" class="bounce-btn" >Enquire Now</button>
  </div>
 </div>
 
 <div id="rights">

<button type="button" class="ola_uber" onclick="openForm6()"><img src="Img/ola-uber.jpg" width="80">Schedule Free Site Visit Now</button>

<div id="popupForm6" class="form-popup6">
    <form  action="login.php" method="post" class="form-container6">
      <h1>Enter Details To Book <span>Ola/Uber</span></h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" placeholder="Enter Your Number" required>
      <button type="button" class="btn cancel" onclick="closeForm6()">Close</button>
      <button type="submit" class="btn submit">Submit</button>
    </form>
  </div>


 <a href="tel:+919619861001" class="phone" target="_blank">
    <i class="fa-solid fa-phone" aria-hidden="true"></i>
</a> 

<a href="https://api.whatsapp.com/send?phone=+919619861001&amp;text=Hello, I am intrested in Rustomjee Uptown Urbania" class="whatsapp" target="_blank">
<i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
</a>
</div>
 </div>
 <!--------------------------sticky home page form code ends----------------------------------->


</div>
</body>
</html>