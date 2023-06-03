<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1030px)" href="css/phone.css">

    
    
</head>
<body>
    <?php
    // include 'header.php'; 
    // include_once 'header.php';//include_once ka kam jo bhi duplicate contant ko ek bar chalaneke liye karte  he
    // include 'header.php';
    require_once 'header.php';
    ?>

    <section id="home">
        <h1 class="h-pripary">Welcome To Keliz cack shope</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis</p>
        <p> inventore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste. Lorem ipsum dolor sit amet. </p>
        <button class="btn">Done</button>
    </section>
    
    <section class="services-container">
        <h1 class="h-secondary">Fauver of Cack and Detial</h1>
        <div id="Services">
            <div class="box">
                <img src="C:\Users\hp\Downloads\cack1.jpg" alt="">
                <h2 class="h2">Ice cack</h2>
              <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut architecto cum nihil vel, cupiditate ex unde quam dicta  praesentium!
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis velit praesentium perspiciatis eius reiciendis ab molestias saepe aut n
              </p>
            </div>
            <div class="box">
                <img src="C:\Users\hp\Downloads\caka2.jpg" alt="">
                <h2 class="h2">choclet cack</h2>
              <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut architecto cum nihil vel, cupiditate ex unde quam dicta praesentium!
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima laborum accusantium nam doloribus quam illo quasi in adipisci quas et?
              </p>
            </div>
            <div class="box">
                <img src="C:\Users\hp\Downloads\red-birthday-cake-png-5.png" alt="">
                <h2 class="h2">Stobary cack</h2>
              <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut architecto cum nihil vel, cupiditate ex unde quam dicta  praesentium!
                  Lorem ipsum dolor sit amet cons Debitis repudiandae sint voluptate accusamus. Aspernatur deserunt ea repudiandae quaerat maiores culpa.
              </p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="third">Client Section</h1>
        <div id="client">
            <div class="akash">
            <img src="C:\Users\hp\Downloads\images.jpg" alt="">
            </div>
            <div class="akash">
            <img src="C:\Users\hp\Downloads\images.png" alt="">
            </div>
            <div class="akash">
            <img src="C:\Users\hp\Downloads\whatsapp-png-logo-7.png" alt="">
            </div>
        </div>
    </section>
    <section id="contact">
        <h1 class="forth">Booking For Cack</h1>
        <div id="contact-box">
            <form action="resitation">
                <label for="name">name</label>
                    <div class="itam3">
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <label for="Email">Email</label>
                    <div class="itam3">
                    <input type="email" name="name" placeholder="Enter your email">
                </div>
                <label for="password">password</label>
                    <div class="itam3">
                    <input type="password" name="name" placeholder="Enter your password">
                </div>
                <label for="selected">Choise your cack</label>
                    <div class="itam3">
                    <select>
                        <option value="ice cack"> ice cack</option>
                        <option value="choclet cack">choclet cack</option>
                        <option value="Stobary cack"> stobary cack</option>
                    </select>
                </div>
                <div class="itam3">
                <label for="confirm">confirm delivery</label>
                    <input type="checkbox" name="name">
                </div>
                <br>
                <button class="btn2">New buy</button>
            </form>
        </div> 
    </section>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>