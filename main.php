<!DOCTYPE html>
<htm>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Home</title>
    <script>
        var slideIndex = 1;

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("simg");
            var y = document.getElementsByClassName("sinwd");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                y[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
            y[slideIndex-1].style.display = "block";
        }
        function hide(){
            var x = document.getElementById("list");
            if(x.style.display=="none"){
                x.style.display="inline-block";
            }
            else{
                x.style.display="none";
            }
        }
        function downlist(){
            var x = document.getElementById("dlist")
            if(x.style.display=="none"){
                x.style.display="block";
            }
            else{
                x.style.display="none";
            }
        }
    </script>
</head>
<body>
    <header>
      <div id="headtext"><h1>CarTrend</h1></div>
      <div id="lrform">
            <img class="ucon" src="img/person.png" height="40px" width="40px">
            <img class="dcon" src="img/down.png" height="20px" width="20px" onclick="downlist()">
            <p><?php
                session_start();
                $uname = $_SESSION['uname']; 
                echo $uname;
                ?>
            </p>
      </div>
      <form action="logout.php" method="post" id="dlist">
              <ul>
                <a><li>Dashboard</li></a>
                <li><button type="submit" class="dbut">
                Log out</button></li>
              </ul>
      </form>
      <div id="share">
        <div id="shbut" onclick="hide()"><img src="img/share.png"></div>
        <ul id="list">
            <li class="shicon"><img src="img/fb.png"></li>
            <li class="shicon"><img src="img/tw.png"></li>
            <li class="shicon"><img src="img/gp.png"></li>
        </ul>
      </div>
    </header>
    <nav>
    <ul>
        <a href="#">
        <li class="navcon" style="margin-left:-25px">Home</li></a>
        <a href="#"><li class="navcon">Trending</li></a>
        <a href="#"><li class="navcon">Used car</li></a>
        <a href="#"><li class="navcon">Compare</li></a>
        <a href="#"><li class="navcon">Advise</li></a>
        <a href="#"><li class="navcon">compare</li></a>
    </ul>
    <form>
        <input type="search" placeholder="Search">
    </form>
    </nav>  
    <div id="card1">
         <div id="slider">
                    <img src="img/sc%201.jpg" class="simg">
                    <img src="img/sc%202.jpg" class="simg">
                    <img src="img/sc%203.jpg" class="simg">
                    <img src="img/sc%204.jpg" class="simg">
                    <img src="img/sc%205.jpg" class="simg">
        </div>
        <button class="left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="right" onclick="plusDivs(1)">&#10095;</button>
        <div id="sinfo">
                 <div class="sinwd">
                   <h1>Tata Tiago</h1><hr>
                   <p>Price : Rs 3,98,783</p>
                   <p>Mileage : 23.28kmpl / 27.28kmpl</p>
                   <button>Buy Now</button>
                 </div>
                 
                 <div class="sinwd">
                   <h1>Maruti Baleno</h1><hr>
                   <p>Price : Rs 3,98,783</p>
                   <p>Mileage : 23.28kmpl / 27.28kmpl</p>
                   <button>Buy Now</button>
                 </div>
                   
                 <div class="sinwd">
                   <h1>Mercedez Benz </h1><hr>
                   <p>Price : Rs 3,98,783</p>
                   <p>Mileage : 23.28kmpl / 27.28kmpl</p>
                   <button>Buy Now</button>
                 </div>  
                   
                 <div class="sinwd">
                   <h1>Honda City</h1><hr>
                   <p>Price : Rs 3,98,783</p>
                   <p>Mileage : 23.28kmpl / 27.28kmpl</p>
                   <button>Buy Now</button>
                 </div>  
                   
                 <div class="sinwd">
                   <h1>Lamborgini Aventador</h1><hr>
                   <p>Price : Rs 3,98,783</p>
                   <p>Mileage : 23.28kmpl / 27.28kmpl</p>
                   <button>Buy Now</button>
                 </div>  
        </div>
    </div>
    <div id="advertise">
        <b>#BornToDrive</b>
        <p>Buy Now!</p>
        <img src="img/ad.png">
        <a href="#"><p>Visit Site</p></a>
    </div>
    <hr style="margin-top:2%;">
    <div id="card2">
        <p>Search New Cars by</p>
        <a href="#"><div class="c2icon">
            <img src="img/logo5.png"><hr>
            <h3>Brand</h3>
        </div></a>
        <a href="#"><div class="c2icon">
            <img src="img/vehicle.png"><hr>
            <h3>Vehicle Type</h3>
        </div></a>
        <a href="#"><div class="c2icon">
            <img src="img/fuel.png"><hr>
            <h3>Fuel Type</h3>
        </div></a>
        <a href="#"><div class="c2icon">
            <img src="img/budget.png"><hr>
            <h3>Budget</h3>
        </div></a>
    </div>
    <section>
        <h4>Want to sell your used car?</h4>
        <p>Over 2.5 million used car buyers visit our site every month looking for a used car !</p><hr>
        <ul id="insurance">
            <li class="inscon">
              <img src="img/buyer.png"><P>Largest number of genuine buyers</P>
            </li>
            <li class="inscon">
              <img src="img/list.png"><P>Your used car stays listed till the car is sold</P>
            </li>
            <li class="inscon">
              <img src="img/clock.png"><P>Speedy and easy car selling process</P>
            </li>
            <li class="inscon">
              <img src="img/msg.png"><P>Get buyers detail via SMS and Email</P>
            </li>
        </ul>
    </section>
    <footer>
        <div id="app">
            <h3>Download Mobile App</h3>
            <ul id="applist">
                <li><img src="img/android.png"><p>Android App</p></li>
                <li><img src="img/Apple.png"><p>iOS App</p></li>
                <li><img src="img/windows.png"><p>Windows App</p></li>
            </ul>
        </div>
        <div id="foot">
            <a>About Us</a>
            <a>Contact Us</a>
            <a>Terms and Conditions</a>
        </div>
        <p>© Copyright 2008-2017 Powered By SquarSoft Software Pvt. Ltd. All Rights Reserved.</p>
        <p>Powered by CarTrend.com</p>
    </footer>
</body>
</htm>