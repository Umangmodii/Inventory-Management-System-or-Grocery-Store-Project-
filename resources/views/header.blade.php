<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin</title>

</head>
<body>

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scal=1, user-scalable=no">
<meta name="author" content="Mahesh">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--EXTERNAL CSS
<link rel="stylesheet" href="css/style.css">-->

<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/641/641813.png">

@include('cdn');


<!--FAVICON ICON-->
<a href="http://127.0.0.1:8000/welcome" img src="https://cdn-icons-png.flaticon.com/512/8865/8865579.png"></a>


<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet"> 
</head>
<body>

<header>
<div class="menu">
<table>
<tr>
<td><a href="http://127.0.0.1:8000/welcome"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emart_Logo.svg/2560px-Emart_Logo.svg.png" alt="INFERNO" class="logo"></a></td>
<td>
<input type="text" class="search" name="search" placeholder="Search"><button type="submit"><i class="fa fa-search"></i></button>
</td>
<td>
<span>
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">Orders</a>
      <a href="#">Wishlist</a>
      <a href="#">LogIn</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn cart">Cart<i class="fa fa-shopping-cart"></i> <span class="value"></span>
    </button>
    <div class="dropdown-content cart-content">
      <a>
      <ul>
      <li>
      <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Item">
      </li>
      <li>
      <span class="title">Samsung Galaxy POP</span>
      <span class="sub-title"><i class="fa fa-rupee"></i>5999<span>
      </li>
      <li><i class="fa fa-trash"></i></li>
      </ul>
      <ul>
      <li>
      <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Item">
      </li>
      <li>
      <span class="title">Samsung Galaxy POP</span>
      <span class="sub-title"><i class="fa fa-rupee"></i>5999<span>
      </li>
      <li><i class="fa fa-trash"></i></li>
      </ul>
      <button type="submit" class="btn1">CheckOut</button>
      </a>
    </div>
  </div> 
</div>
</span>
</td>
</tr>
</table>
</div>

<div class="topnav" id="myTopnav">
  <div class="dropdown">
    <button class="dropbtn">All Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content mega-dropdown">
      <div class="row  column1">
        <div class="column">
          <h3>GROCERY</h3>
          <a href="#">Dry Fruits</a>
          <a href="#">Emart Grocery</a>
          <a href="#">Masala & Spics</a>
          <a href="#">Cooking Oil</a>
        </div>
        <div class="column">
          <h3>BABY & KIDS</h3>
          <a href="#">Baby Food</a>
          <a href="#">Diapers & Wipes</a>
          <a href="#">Baby Care</a>
          <a href="#">Toys & Games</a>
        </div>
        <div class="column">
          <h3>BEAUTY & COSMETICS</h3>
          <a href="#">Skin</a>
          <a href="#">Face</a>
          <a href="#">Nail</a>
          <a href="#">Eye</a>
          <a href="#">Lip</a>
          <a href="#">Beauty Accesories</a>
        </div>
        <div class="column">
          <h3>PERSONAL CARE</h3>
          <a href="#">Skin Care</a>
          <a href="#">Face Care</a>
          <a href="#">Eye Care</a>
          <a href="#">Lip Care</a>
          <a href="#">Beauty Care</a>
        </div>
        <div class="column">
            <h3>DIARY & BEVERAGES</h3>
            <a href="#">Diary</a>
            <a href="#">Beverages</a>
          </div>
          <div class="column">
            <h3>APPLIANCE</h3>
            <a href="#">Home Appliance</a>
            <a href="#">Kitchen Appliance </a>
            <a href="#">Personal Appliance</a>
          </div>
          <div class="column">
            <h3>HOME & KITCHEN</h3>
            <a href="#">Detergent & Febric Care</a>
            <a href="#">Clenaers</a>
            <a href="#">Inferno Store</a>
          </div>
          <div class="column">
            <h3>FOOTWEAR</h3>
            <a href="#">Shoe Care</a>
            <a href="#">Women's Footwear</a>
          </div>
      </div>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Men & Women
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content mega-dropdown">
      <div class="row">
        <div class="column">
          <h3>Clothing</h3>
          <a href="#">Men</a>
          <a href="#">Women</a>
          <a href="#">Trousers</a>
        </div>
        <div class="column">
          <h3>Grooming</h3>
          <a href="#">Perfumes</a>
          <a href="#">Deodrants</a>
          <a href="#">Hair Groom</a>
        </div>
        <div class="column">
          <h3>Footware</h3>
          <a href="#">Casual</a>
          <a href="#">Boots</a>
          <a href="#">Slippers</a>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Home & Furniture 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content mega-dropdown">
      <div class="row">
        <div class="column">
          <h3>Kitchen</h3>
          <a href="#">Cook Ware</a>
          <a href="#">Electric Corner</a>
          <a href="#">Infrastructure</a>
        </div>
        <div class="column">
          <h3>Home Improvements</h3>
          <a href="#">Cleaners</a>
          <a href="#">Perfumes</a>
          <a href="#">Sanitizer</a>
        </div>
        <div class="column">
          <h3>Living Room</h3>
          <a href="#">Lightning</a>
          <a href="#">Dining Table</a>
          <a href="#">Jugs</a>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Sport & Fitness 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content mega-dropdown">
      <div class="row">
        <div class="column">
          <h3>Sport</h3>
          <a href="#">Cricket</a>
          <a href="#">Football</a>
          <a href="#">Volley Ball</a>
        </div>
        <div class="column">
          <h3>Fitness</h3>
          <a href="#">Dumbells</a>
          <a href="#">Mini-Set</a>
          <a href="#">Powders</a>
        </div>
        <div class="column">
          <h3>Featured</h3>
          <a href="#">Suppliments</a>
          <a href="#">Gadgets</a>
          <a href="#">Kits</a>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Kids Store 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content mega-dropdown">
      <div class="row">
        <div class="column">
          <h3>Toys</h3>
          <a href="#">Dolls</a>
          <a href="#">E-Gadgets</a>
          <a href="#">Tabs</a>
        </div>
        <div class="column">
          <h3>Books</h3>
          <a href="#">Story Books</a>
          <a href="#">Educational</a>
          <a href="#">Guidlines</a>
        </div>
        <div class="column">
          <h3>Care</h3>
          <a href="#">Body Care</a>
          <a href="#">Hair Care</a>
          <a href="#">Growth</a>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">More 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Notifications</a>
      <a href="#">Customer Care</a>
      <a href="{{'download_app'}}">Download App</a>
    </div>
  </div> 
  
  <a href="#about">Coupons</a>
  <div class="dropdown responsive">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">Orders</a>
      <a href="#">Wishlist</a>
      <a href="{{'signin'}}">Login</a>
    </div>
  </div> 
  
  <div class="dropdown responsive">
    
    <button class="dropbtn">Cart<i class="fa fa-shopping-cart"></i></span>
    </button>
    
</header>





<style>

    html{
    scroll-behavior: smooth;
    }
    
    body{
    margin:0;
    overflow-x:hidden;
    font-family: 'Titillium Web', sans-serif;
    }
    
    /* Thin Scrollbar */
    :root{
      scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
      scrollbar-width: thin !important;
    }
    
    .responsive{
    display:none;
    }
    em{
    font-style:normal;
    color:#eebf4d;
    }
    .title{
    font-size:2em;
    display:block;
    font-family: 'Yusei Magic', sans-serif;
    }
    .sub-title{
    font-size:1em;
    display:block;
    font-family: 'Titillium Web', sans-serif;
    }
    .btn1{
    background:#1e1e1e;
    box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
    color:#fff;
    padding:5px 10px;
    transition:0.5s;
    border:0;
    outline:none;
    display:block;
    width:100px;
    text-align:center;
    border-radius:20px;
    margin:15px 0px;
    }
    .btn1:hover{
    background:#fff;
    color:#000;
    border:1px solid #1e1e1e;
    }
    .btn2{
    color:green;
    display:block;
    }
    .soldout{
    background:gray;
    box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
    color:#fff;
    padding:5px 10px;
    transition:0.5s;
    border:0;
    outline:none;
    display:block;
    width:100px;
    text-align:center;
    border-radius:20px;
    margin:15px 0px;
    }
    .soldout:hover{
    background:none;
    border:none;
    }
    a{
    text-decoration:none;
    }
    li{
    list-style:none;
    }
    
    
    
    
    /*HEADER*/
    header{
    width:100%;
    box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
    position:fixed;
    top:0;
    z-index:9;
    }
    
    .menu{
    width:100%;
    background:#000;
    color:#fff;
    padding:10px;
    }
    
    .menu table{
    width:100%;
    }
    
    .menu table td{
    width:33%;
    }
    
    .menu .logo{
    width:150px;
    height:50px;
    }
    
    .menu input{
    padding:10px;
    outline:none;
    border:0;
    width:80%;
    }
    
    .menu button{
    background:#eebf4d;
    color:#fff;
    padding:10px;
    outline:none;
    border:0;
    }
    
    @media (max-width:900px){
      .menu input{
       width:60%; 
      }
    }
    
    @media (max-width:600px){
    .menu table td{
    width:50%;
    }
    .menu table td:nth-child(3){
    display:none;
    }
    .menu input{
    width:65%;
    }
    }
    
    
    .menu span{
    float:right;
    margin-right:15%;
    }
    
    .menu .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .menu .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: #fff;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .value{
    text-align:center;
    padding:2px;
    color:#fff;
    background:red;
    position:relative;
    top:-30px;
    left:10px;
    z-index:1;
    border-radius:50%;
    width:15px;
    height:15px;
    font-size:10px;
    transition:0.5s;
    }
    
    .menu .navbar a:hover,.menu .dropdown:hover .dropbtn {
      background-color: #eebf4d;
    }
    
    .menu .dropdown .cart:hover{
    background:none;
    color:#eebf4d;
    }
    
    .dropdown-content {
      border-top:2px solid #eebf4d;
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 260px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .cart-content{
    min-width:180px;
    margin-bottom:20px;
    position: absolute;
    right:0;
    }
    
    .cart-content ul:hover{
    background:#fff;
    }
    
    .cart-content ul{
    width:100%;
    padding:10px;
    border-bottom:1px solid rgba(1,1,1,0.1);
    }
    
    .cart-content ul li{
    display:inline-block;
    }
    
    .cart-content ul li img{
    width:100%;
    height:50px;
    }
    
    .cart-content ul li:nth-child(1){
    width:30%;
    }
    
    .cart-content ul li:nth-child(2){
    width:50%;
    }
    
    .cart-content ul li:nth-child(3){
    width:10%;
    }
    
    .cart-content ul li:nth-child(3) i{
    position:relative;
    top:-15px;
    transition:0.5s;
    }
    
    .cart-content ul li:nth-child(3) i:hover{
    color:red;
    }
    
    .cart-content ul li .title{
    font-size:0.7em;
    display:inline-block;
    }
    .cart-content ul li .sub-title{
    font-size:0.6em;
    color:gray;
    display:inline-block;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    .topnav {
      overflow-x: hidden;
      overflow-y:auto;
      background-color: #fff;
      padding:0px 2%;
      
    }
    
    .topnav a {
      float: left;
      display: block;
      color: #1e1e1e;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 15px;
      margin:0px 20px;
    }
    
    .topnav .icon {
      display: none;
    }
    
    .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .dropdown .dropbtn {
      font-size: 15px;    
      border: none;
      outline: none;
      color: #1e1e1e;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0px 30px;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      overflow-y:auto;
    scrollbar-width:none;
    scroll-behavior: smooth;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .topnav a:hover, .dropdown:hover .dropbtn {
      background-color: #555;
      color: white;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    @media (max-width:1000px){
    .dropdown .dropbtn, .topnav a {
    margin:0px 10px;
    font-size:14px;
    padding:14px 8px;
    }
    }
    
    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child), .dropdown .dropbtn {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
      .value{
    text-align:center;
    padding:2px;
    color:#fff;
    background:red;
    position:relative;
    top:-10px;
    left:5px;
    z-index:1;
    border-radius:50%;
    width:20px;
    height:10px;
    font-size:10px;
    transition:0.5s;
    }
    }
    
    @media screen and (max-width: 600px) {
    .topnav{
    padding:0px 0%;
    }
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav a,.dropdown .dropbtn {
      margin:0px 0px;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
      .topnav.responsive .dropdown {float: none;}
      .topnav.responsive .dropdown-content {position: relative;}
      .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
    
    .column {
      float: left;
      width: 31.33%;
      background-color: #fff;
      height: 250px;
      padding:1%;
    }
    
    .column1 .column{
      float: left;
      width: 23%;
      background-color: #fff;
      height: 250px;
      padding:1%;
    }
    
    .column a {
      float: none;
      color: black;
      padding: 6px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .column a:hover {
      background-color: #ddd;
    }
    
    .column a:before {
    content:"\f0da ";
    font-family:"FontAwesome";
    color:#eebf4d;
    margin:0px 2px;
    }
    
    .column h3:after {
    content:"\f0d7 ";
    font-family:"FontAwesome";
    color:#eebf4d;
    margin:0px 2px;
    }
    
    .mega-dropdown{
    width:100%;
    float:left;
    position:absolute;
    left:0;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 90%;
        height: auto;
        padding:3%;
      }
      .column1 .column{
      float: left;
      width: 90%;
      background-color: #fff;
      height:auto;
      padding:3%;
    }
    
      .responsive{
    display:block;
    
    }
    }
    </style>
    
    <!---Script Header-->
    
    <script>
    
        //DEFAULT
        document.getElementById('id01').style.display='block';
        
        
        
       
        
        
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        
        
        
        const items = document.querySelectorAll('.item'),
        controls = document.querySelectorAll('.control'),
        headerItems = document.querySelectorAll('.item-header'),
        descriptionItems = document.querySelectorAll('.item-description'),
        activeDelay = .76,
        interval = 5000;
        
        let current = 0;
        
        const slider = {
          init: () => {
            controls.forEach(control => control.addEventListener('click', e => {slider.clickedControl(e);}));
            controls[current].classList.add('active');
            items[current].classList.add('active');
          },
          nextSlide: () => {// Increment current slide and add active class
            slider.reset();
            if (current === items.length - 1) current = -1; // Check if current slide is last in array
            current++;
            controls[current].classList.add('active');
            items[current].classList.add('active');
            slider.transitionDelay(headerItems);
            slider.transitionDelay(descriptionItems);
          },
          clickedControl: e => {// Add active class to clicked control and corresponding slide
            slider.reset();
            clearInterval(intervalF);
        
            const control = e.target,
            dataIndex = Number(control.dataset.index);
        
            control.classList.add('active');
            items.forEach((item, index) => {
              if (index === dataIndex) {// Add active class to corresponding slide
                item.classList.add('active');
              }
            });
            current = dataIndex; // Update current slide
            slider.transitionDelay(headerItems);
            slider.transitionDelay(descriptionItems);
            intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
          },
          reset: () => {// Remove active classes
            items.forEach(item => item.classList.remove('active'));
            controls.forEach(control => control.classList.remove('active'));
          },
          transitionDelay: items => {// Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
            let seconds;
        
            items.forEach(item => {
              const children = item.childNodes; // .vertical-part(s)
              let count = 1,
              delay;
        
              item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;
        
              children.forEach(child => {// iterate through .vertical-part(s) and style b element
                if (child.classList) {
                  item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
                  child.firstElementChild.style.transitionDelay = `${delay}s`; // b element
                  count++;
                }
              });
            });
          } };
        
        
        let intervalF = setInterval(slider.nextSlide, interval);
        slider.init();
        
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2023 15:37:25").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("timer").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
          }
        }, 1000);
    
        </script>
