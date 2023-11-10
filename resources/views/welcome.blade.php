<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Mart | Store</title>
</head>
<body>

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scal=1, user-scalable=no">
<meta name="author" content="Mahesh">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--EXTERNAL CSS
<link rel="stylesheet" href="css/style.css">-->

<!--FAVICON ICON-->
<a href="http://127.0.0.1:8000/welcome" img src="https://cdn-icons-png.flaticon.com/512/8865/8865579.png"></a>

<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/641/641813.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



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
<form class="form-inline my-2 my-lg-0">
  <input class="text-input"  type="search" id="search_product"  placeholder="Search your product.." aria-label="Search">
</form>
</td>
{{-- <button type="submit"><i class="fa fa-search"></i></button> --}}

<td>
<span>
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="{{url('account-profile')}}">Profile</a>
      <a href="#">Orders</a>
      <a href="#">Wishlist</a>
      <a href="{{url('signup')}}">LogIn</a>
    </div>
  </div> 
  
    <div class="dropdown">
      <button class="dropbtn">View Product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="{{url('cart')}}">View Cart  <span class="badge bg-danger">{{ count((array) session('cart')) }}</span> <i class="fa-solid fa-cart-shopping"></i> </a>
      </div>
    </div> 
  
    
      
  </div> 
</div>
</span>
</td>
</tr>
</table>
</div>

<script>

$(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("nav ul li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        $("#filter-count").text("Number of Comments = "+count);
    });
});
  
</script>


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






<!--CAROUSEL-->
<div class="content-width">
  <div class="slideshow">
    <!-- Slideshow Items -->
    <div class="slideshow-items">
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="https://nammamaligai.com/wp-content/uploads/2022/08/nm-1.jpg" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part"><b>Striking Deals On <em>Grocery</em></em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part desc">
            <b>Offers you cannot miss! upto 80% off</b>
          </span>  
        </div>
      </div>
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="https://cdn.zoutons.com/images/originals/blog/1-adidas_1684827304.png" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part"><b>Top Deals On <em>Cook Ware</em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part desc">
            <b>Upto 10% off on cart value more than <i class="fa fa-rupee"></i>5000</b>
          </span>
        </div>
      </div>
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="https://img.freepik.com/free-psd/fashion-store-banner-template_23-2148675200.jpg?w=1380&t=st=1687084504~exp=1687085104~hmac=9c628b4a17a7456cb271f57eddcc0595dd3dc121a51559c584a5d4d4563e7770" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part" style="color:#fff;"><b>ShopNow On <em></em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part desc" style="color:#fff;">
            <b></b>
          </span>
        </div>
      </div>
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="https://media.istockphoto.com/id/1310271711/photo/discount-price-prototion-59-sign-display-in-fashion-department-store-during-sale-season.jpg?s=1024x1024&w=is&k=20&c=EnVeT-rhbnm5JCCvK8tsxcSe4q-QtgPGQeirnuYMoo8=" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part" style="color:#fff;"><b>Sell <em></em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part desc" style="color:#fff;">
            <b></b>
          </span>
        </div>
      </div>

      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/naireshm_LA/Deos-2_1.gif" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part" style="color:#fff;"><b>ShopNow On <em></em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part desc" style="color:#fff;">
            <b></b>
          </span>
        </div>
      </div>

    </div>
    <div class="controls">
      <ul>
        <li class="control" data-index="0"></li>
        <li class="control" data-index="1"></li>
        <li class="control" data-index="2"></li>
        <li class="control" data-index="3"></li>
        <li class="control" data-index="4"></li>
      </ul>
    </div>
  </div>
</div>

<h1 class="title section2-header">Season Special</h1>
<section class="section1">
<div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeC-G-JvS0nMaN24LEhEKRMw3n_nTBb8_LPvlhOrqIMsLAswCZaZO-6N2hHoNcL1vCZn4&usqp=CAU);">
<section>
<span class="title">Wagh Bakri Tea</span>
<span class="sub-title">Upto 25% Off On Tea</span>
<a href="" class="btn1">Shop Now</a>
</section>
</div>
<div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://eangadi.in/image/cache/catalog/grocery-280x280.png);">
<section>
<span class="title">Oil</span>
<span class="sub-title">Upto 25% Off On Oil</span>
<a href="" class="btn1">Shop Now</a>
</section>
</div>
<div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://m.media-amazon.com/images/I/71ubYSSqnzL._AC_UF350,350_QL80_.jpg);">
<section>
<span class="title">Dry-Fruits</span>
<span class="sub-title">Upto 10% Off On Dry-Fruits</span>
<a href="" class="btn1">Shop Now</a>
</section>
</div>
</section>


<div class="card">
  <h2 class="my-2">Grocery items</h2>
  <div class="cards">
    <div class="card-items">
      <img src="https://www.skyflexipack.com/wp-content/uploads/2021/04/unnamed-1-e1620394360622.jpg" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Dry Fruits</p>
        <p class="text-center my-1"><a href="#">Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="data:image/jpeg;base64,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" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Cooking Oil</p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="https://5.imimg.com/data5/GW/SM/XS/SELLER-16660695/masala-packaging-pouches.jpg" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Masala & Spices</p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="data:image/jpeg;base64,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" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Tea </p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="data:image/jpeg;base64,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" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Maggi </p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="https://www.spenlo.com/image/cache/catalog/products/Cadbury/Cadbury-Bournvita-Refill-Pack-500G-700x700.jpg" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Bourn Vita </p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>
    <div class="card-items">
      <img src="data:image/jpeg;base64,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" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Salt </p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRUYGRgYGhgcHBoaGhkZGBgcHBoaGRgaGhocIy4lHB4rIRkYJjgmKy8xNjU1GiQ7QDszPy40NTEBDAwMEA8QHxISHzUrJSs0NDU0NDQ6NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQxNP/AABEIAOEA4AMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAAAwECBAUGB//EAEYQAAICAAQDAwgGCAUBCQAAAAECABEDEiExBEFRBWFxBiIygZGxwfATQnKh0eEHIyRSYpKi8RQVgrLCYxYzNENTc3Sz0v/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACsRAAICAQMDAwMEAwAAAAAAAAABAhEDEiExBEFRE2FxIjKBkaHh8SMzQv/aAAwDAQACEQMRAD8A9TiIlgIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIlYBSIlYBSIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiURwRYlZAEREkCIlZANfxvHlGyhQdL3mK3a7/ur9/wCMh7aLnFCqoNqKsqL1PNiJgthYo0IW+lg161ueTmzZVNpPYybdmTieULruin2iS4Pb+b6i/wA/5TVv2fxD6oq+o37yJYmDxC3mKCtySPg0Rz5a3ZXXI6EdsaXk+/8AKY+J26QCcg/mP4TnzxTUfOv7KMR7SZq+K47Eo+Y5/lHxmkc83tZz5OoceGdNxvlU6Gkw0OgOpbmL5Cap/LTiL9DCHdlcn2zTcTxDhtcJm0XdlHLwkGDxLO6IvC6uwUW9iz1oTeM5NcnL685Sqzo18seI5phkdweZLeWjL6WGv9f4TQPwOMPpP2ZQcIAmg/7mccuk0nEdqYp0+jYDuOn36y2qS5NHPNF7s7E/pAfX9nX+c/8A5mLifpCxvq4OGPFmb8JyK8U5HoN9xkaq7mlQ/dcnXIh58nk6R/0icVmrJg1r9Vz/AM5IP0j8SN8HCPhnHxM5IcDjlj5h1vb8hKYnZGPuUI9bH4SdT8mqyu+T0TyS8sMbi+K+idMNU+jdqVWzWpQDzi1VqdKndzyT9GXCMvHEkaLgve4q3St/Az1uaRdo7cT1RuxERNDQREQBERAI3Qg5h6x1/OXI4IsS6RshBsesdfzjkrwSRLUexYl0gsIiIBz/AJTEqUYcyV+ImNw+MpGoA9U2HlXh3w5b9xg34++c+j6AjZgD69j988jrI6Z35OeTakbpeDU6hV8aEufhL3FzAwsdhsZm4PHH62s5k4vktFxaI24I1MHF7Pm5XilI0MxcXGFGdWOMexjkjFo1nFcCLH2VlezeCC42Ea2dffMvinHm6g+aOYv2euWcJjD6XD+2n+4TqgoqqObTDXZ1JwQXxx+8iX/Ky/CcNjdnoaJUHx/Cd6rfrsQf9LDP9WIPhOB4zjQomuWq3Neq00m/cJwqAaAD1CS8MiI10B4AWZosXtfepgPxrtuZirOD1Yp7I9F4cYaoMRaZ3FZTRBbUhV0OjVl050NDc4Hyi7SdHrDsIyI6MTmLo4tG9EVY5EaEEa7zV8TiuDo7D0ToxFZWzLXg1kd+si4l2xGLMzOb1ZiWYnYWTNdmjaWaMorY7f8ARdwprHxm1JKJZ7gWb/cs7+c35A8Pk4NDzdnf+rKPuWdJNocHp4F/jQiIlzYREQBERAEREgEbJRzL6x1/OXI4IsS6RshBsesdfzk8leCSJajgixLpBYx+0MHPhunVTOI7NObCcfWwyG78pOVvYaM78zgVxBw/GujeiSbHVHBs+qz7Jx9XDVTMsi4Nn2dwrYppaoCyx2A7/ZNjhdkhgfo8ZGI3rlfPQmR9iWmHxKncWL8EajJPJT03+wPfOWGKC0qStu/2KpJUvJBjdlgqxwsVXZQcyjQ6b1qehmFhcCpQPicSmGG9EGie4tqKmf5L+k32PiJjtwowsHBbC4YY74ihizKXUEgEaDQb9200hji1qSr+zKUU1dGD2l2ZjLi4eGpVjiL5rDRTl3LdABR5zJTsFlxMMf4rC+kVlbIdGNMGIGt8jym9xuKA4nh1cqHOE4oaAMfoyK6A5WAnKcd2DxB4wkISGxg4f6oXOGBLXoVHLu0nRojHhXuYTgou4pvevg7TDP7Yw64C/wBOI4/5TkOK8lDiEp/icJcTUjD3PM0db+6dUMdTxwUHUcO2b14iZb79/bON7SXJxAe9V4kG+euJR+4kS82k1avc1zqLitStWazs7ySxnbGUlVfBy5lOY5gQWBUjcEDSYXYfY78U+RCAQuYliaqwOQPWepBwvGupq8Th8Oh1yPig/wD2Ccx5H9n4mDxZU4bqoVwWKkLuMuuxuuUSirSOafTQU4pJ7tpnMN5OY+O74eCoP0ZKuzHKgYEjetTpdAbVMPjuzGwCyOUzKwDBWvUqHB2GlEazv+0cUpwPGNhMUYY+J5yGmF4i3RGxokTiuDwX4jGw0JZy7pmZiWOUVZZjr6IrXukSjVIzzYow0wjyz0/sjhvo8DDT93DQeuhf33MyInQuD2Yx0pIRESSwiJYz1AL7iRhL1O8uVuR398AsDVvtJZE0oj1of7QCaIiQCN0o5hvzHX85cj2LEukbIQbHrHX85PJXgknI+WfZ6uyMpy4gvKe67IbqJ1iPYsTkfKh83Eog+qgPtLCc+d1Blcj2LeEbGVcreYHQBzlDXRyWD01UeuX8NiYmGWKlgSCLUWCBrpY21BvvEu7QJGGl6qSARr5wF0p7rJ9o6SN+NLDYDYnnZBZq+ySzad/cJ5zlHa27RlIs4d3VgELKz+aNxdmum1jXpR6SHD4vHUpg4OKwzFa0IUXvow0A1utNDD8SbdiLzhgRZ0BObQ3Y1F+s9Zg8Z2ixZnoBijL3LmBDMo5E5mPi5MvicezfJx5ciiuX/A7TwMRijWzswGostuwRieWbK7DuWVw+1OMyCsXECZScxFgKELE5gC3oi77wdtY4jtWkPmqCyKqKAfNBQYZNnQKEVgBvbty3x+O7ebP5gTkScppmLriPQJsoSmGmuuVOVzqilVpnO/TtyUmvgpwrcWjlkTEztQLbsczVlJJ3zLWu1G6l3aCYzqH1zUMRjtWha9dCaGbTlMdO3HzHQUWZjRbNZRlTzmJ9EuzDTczJ4njGfCGYL1FCsuiLSi6AARQOem8iVKit49LSkyVMbGxFXHfGd8RSVXLlBQsyqgagDlY5vOGgK0ZNidqdpP8Aq1xMt6X+rDauyDzqsWyPR5hGOwuaZu28RWUrlBUIt5btUOZFNmqBAOlWQLl2H284R81XkVEAUUDkbDL39WkZhlG5a+t6R8mmPJHlya8+5lcIOK/w5wEKHDxQ7sG0bTIzHM1UTnQ3qPO3mV5Euo4xkYAlVcIwJK5l0c9DYuj49ZzfaXbuLipldhRvNShc9vnAbuDAHSroXdCbXyDxP2rD71cf0E/CO6LRcdcWre9bnqkRKFp0HslZaXlpN/O0pdfPzrJAZpVF67wq1r8iX1AKHTwgrcqDKbQChHcffI2WSV3ShXuPvgFqPXh7pNMdhKo9eEAniLljvWg1J2HzygiyzE0NrueXXv7vGcj2ohPGOSbyqi/05v8AlOxRK13J3Pw8Jx/EtfE4p/jr2Ko+E5uqf00Zz7fJkdpG8LT6pE1yHT1TaYqXw7H1/fNTgnzT655WRcGcyPE2mq4ibPFPmnwmb2P5OtiMfp1ZVUKyrsHs826DTTnc2wRcnSPPnilkkkiq+Shb6E4jjLVNk84gVYa/3TzI2sHvHSYPYuBgZ1XDBVwMy6tdKVqzsDqfG5nVlUBRR0AUUBVa8tK12HQQyCsuYG71BIrkdjrQPwM9GMYxVI9CHTwjvW5535QeTR4fKyMzqxawFJ+joghSQTe9Wek1mO/6oeH4z1vDsKVAY+kAb0Nk6gk3znKeVPk+uJhM+Ci/TFi2UE5mBJJFXWbfSqlJY73Rx5+i5lD9DzJsS2HjK4jS/iuCxcJgMXDdCdswIvwOxkDmScco00miPEGk33kXiZeJwPtEe1XHxnP4reb65tPJfEy8Rgn/AKife1fGDeG1P3R7STfztKD5+esqRz+f7yh+fnrOg9oHT8PnnKqnM/2hB13lx01+fGSAI2giAYBUwDKDpBgFD33GXujbbf53gjr7PygFrL3fH85FtJsv8I93ulrp87wC1XIHX590lRK13J3P4d0xwZIj1py90EE5nEuP2nF/9xvhO2ucVjf+Jxvtn3CcnVfavkpNcGxcfs7eE0WEdDN27/sz+FfeJo8AEAmjW90aPrnn5FdGckZHBdnPj5lQqKGpYkDUHoCeRncIWFEAGhVA1tYrv2B2nO9k8M2DbuwGcL5qnVdSaIrv5TaHiOlkXrqTlsaZrGutabCd+DHojb5ZOKGlX3NhZILihdG6HL4+vkNJVtK1vxHIkDSuub3TBXFZRvQB0H1vs3t64+kF6XS1zIvbXbXb7pubGYjGgAAAtFtPZQ5GvdLQL0FBiaDVoCLNj97c+6YzY1DQgXV6UCNOh2/GXPjrpTaE1vmqyNt6336wDC8oOw14hcjmywJRtLV9gw7q95HOeTdpdmYuC+Ijo36sgOwByC6ym+hsT2rPlIJtidr6jUE99fIuRY2EuJnDBSrjIwIUgitCd6FEi9eXqOJhmwRyb9zwjE9H1zP7FwyHR+QdD7HBnWdseQZRx9BbYbbBiCVI3BOmnO/ETW/4dMJxhF1LhwpAN0bHOZu0efOEo7Ndz1Qn5+ecqErX5EBefP3SQzoR66KEQDCygkkhTHODv6o6QCrQw0lH2l0AsOnjG3efn7pYMSuWvjC4g9fztALiOsZeij3H7pUdT890Zb39kAgxFrWUVpkFB0mO6ZYBIj1vtOR4zTicY/xj/as6pTOR7RNY+L9of7FnJ1f2L5KT7GfglTgU5pWdQfAsJty60B5pWqCgiidgtVoPwPSc2nEVhL3MWPgp1983eDRFOo0GgNEaitBZ329kr07TTXwEZDEaIPOoekNh5pU766Ejb4GpgaoVqbB21vfUfV29s1+GwBI1oCwT9YC7vvAAFHv6ydsTKbAIBHTSwLqvDl1nUWJ0JFg1pzGw8Ty+TKKt6AqTqKPLrQ/HrIVaxubOwXQevl6j3yiYoy2Olr6un336+UqCZMOtKABNHrevf86Sw1oDtoLrShWw3rQWZY+KDu2+wrKOnmjmTp75boNCWza7Vdcrrlt7JYFSarzTeguhe+4vb85fnoG210Bqm3N9BpentkC33kjWr0Gm5I5XftEhxrbUWLOUjnpW/fdVKgyS7MCXfLQ0NA5Rp95069J5txgvjnIFBcRSfEBRy+dJ3mO9UKAO431Ox5be6cJwvn8QDd/S4ivfOmYFf6SsrN1scnWfaq8nsMLsIYwo0myOtBfjKc/nvlVlBzkkht/b8JUx/aU5+EANLiZRpQ9IBHXXf50lCvX57u+XV8/ASiG9fZ4dB+MAjyEaj7vnWVXGI31knz+XhI3Xp/f8oBevEDnpJNGHWY1S1SQbEAuxEo9043tfE/W4vc4/2LO5Vgwnn3bysmPjgg0zAqetKtzk6tXFfJSfBHg4l5AfRshv9ROn3rN7wuMSihgPMzDQW1jQ5j37jlr3actggnKo3ugO8myT3/hN5gcQoIcnzWFOehGgb2791TkxTUMivh7FYmywX2sZvNpb2OwJAOwvT8iJK+Iq+ju2mUDfvJHom9fVIXwqBIOv1b1YZRtyrW/bKrioNhd5dTYNWD9axy37p6ZoSpilQRYAtjWlC9tTode787UxOV6r6ZoC7J1BvzgT7pCFXKCyg1R25kHfrvdiXu5NZRbDodADyJ6mtvkgT5yCGsWKFG6qyaIPLlpKLjE+cfNXUDUZtdenj86zGyjzVqgdCdSbHu2l2Qbb8rPUd/LWASLikixoQK0BJ7iDtdAweHBN56HShfIdd+6Y6MX6i7Aq9+tc6215SHKFW3rzTRJYiu/TZdKuAO1+Lw1wzhoWfExDkQk3ZcC2PUIMzeqpyfZTK/aKqnoLiZV8EAQf7JnPx1I/FtWVEKYArLmLGjiEdWYgDuBPOaf9H63xeHZ1tjffRNzlUlPI/C2/JyZXqa+UezP09sMeURtOw60CYOkbeMd8kkrtKbQO+IAHUwvWI3gFh+fwEom3zy+EtVq52p2P/EnlLgt6j+/5QQnY+fH8BJVWURal0EkTpzEiImVIsTD5iQDExMTICw5ff0nLdtIzuqbu1sSeXUnoJ03GMABew1PgPzqczgYufFZmrKzYaN3I2IoJ8OX9pxdQ9U1Eyk96L+zuAKKzomI9jKHVCUUHQsgvM/PUCukwMBchptUe8rciQaYEHY8iD0nR9p4rcKxwkJ+gcg//AB2Y0EzfVw3Yir9EmtiMuB5Y8MMKwNc6BmJ3DowTPoN2VgD1yCYThGVqK47+5eUNMVJvfwYSuMPR/Q5Mbpf4XPTofbM0OwGZPNUbVvpqKN8jNH2d2qrjJiEWRVmiHB5G+fvkfD8W6MyYTZRZ/V4gYoALIOoz4fm+dsRR20NXwZ5R+mfbuZKVHQ4bWAGewNa3o7jTnr36SxSyMazWQDoaIo+lU13Ddr7M2G5GXfDH0ig92U5h6xJMXthCdSw5GsN1JvqCunq6ztU4vho1UkZv+IsEfWU6d5Ghu9rqvXLmcbiwCa11JAOo00M1eN2mhoImKdKOXCevGyoA9sxn7SxNSoTDPnEnEZSwIFEZEJo6jQsupqRLJGPLIcoo3L8UMNczkBATZLAUDZ8ABprNY+bijbKcPANeabD41bBh9VNB3t4TCbhXLF8Q5zht/wCaVGGjKGIBSwqKwyFXtms6XMbtvtw4l4eCSEOjPzfuXovfue6cmTNLI9OP8sxyZoxW/Bg+VXagxWCIRkQ7iqZtrH8I1A9fdMbyexWwnR9RroaNfnyk/YmAqY2E7+gjhmoFqUXegE3PlDxS4v0YVnco2KGLp9HRYily8qo6HWaRgoRpHE8qkm77npnAcSMTDRx9cbdDsR6jpJ9vGc35D8VmwCp9JG94/I+2dJOqDuKZ6WKWqCY7zFczA6mJc0ERG8Aby0m9Bt87Su+23v8ACXgQCBl30u/SXr3jvlUeq1sHY/A98p6JAO3JuncZVlq9PtL17xKp1syrVbomiQo9VranY/A98mliUxERIJNB5Q4lEIL1Usa6C/wnB8N2mFclgCDasl1anQgdD0M6zyw4x8PEX6PDzlsPW2Cged1M43GR8Vrfg2DHmjprz5GefP8A2Nsx/wCjr+C7dUoyuuDjKwAYu4w2cA7YiMCrHXUjetpzfavaX6ormLsVC2WLBFUsUwwx1ciz551I8ZrP8rc+jgYo/wBaGVPYHENpkIH8ToPjJtVWxeW/JpMXiTR15S/h+3sRKVsrrqMr2TR0IDA3VaUbEzW8mMYgmlAq/wDvBMN/J3E8f5q9tS60NbnNKcY8ujZ4XbGAaZldC1nzcjhTyqytAHkOWkz/APNuHyqBj4wyqi+gfql2Ymm5krz0ArpMPD8lyCuY2Mqmtb168pt17ARlChW06a6+ypi4QfdmfrO6Rif5rw9MD9M4ZAvoqNQ5cNbOeoG31RGP2qqDNhYCrZzD6Ri9cxSigdgaN6gdJn8P5Fux83MB1IoD79fZMzi/It8uVWzEDYEAe0mWj06e+7M5vO6pbHDcTx74jDO5IHorsifYQUq+oSn082vFeTmJhG3w3A9fvGk1z4CDZL/1t+E3SS2SozlDU/qZkcD2v9EH0sOhQi6FEqbPX0SPXNt2n5Sf4nDyhMrM+c0SVFAgAWf4ibochrQnPF0FfqQd/rGXt2uVFJhovrJ+El8UWjCo6UzuPITisuO6H6+HfrUj4MfZO+rmZ5R+jjimxOM88AZcJyGF0TaCqPcSfVPV/GaY9lR6GBVGh3xEbzU2G8t30G3v7hK7+Hv7peBAAEREAoygijIfR0J05Hp3GTyjLehkBOiJl3039JeveO+Eeq1tTsfgZT0aB25N07jDLvp9peveJCdbMrKNboniQ4b1ztTsencZNLEp2aDtngGxGzBASBQNkaTSv2TxA9FB/MZ3MTN4ot20hpR58/Z3FjZB/MT8ZGMDjhsiz0WpDiJzEenHwKR5+eG7QIrKKqY/+Wcbd5EvrQM9FUyT51F/fJUIrsVcIvlHnX+C7Q/hHqWXjhO0+TVPRAelQT1MlRSLUjzwcD2l+/Kr2d2j+/PQh3CVuTRJwKdm9of+p7pa/YHGPq5RvFQZ6BtHfFENJ8nnX/YvFOrKnqUD3SbC8hiNSEv2+8zvx1MeMhxRV44Pscv2b5MnDdcTNlZemgo6EETqB3xG8KKXBMYqKpKhvLd9OXv7pXfw98vAliwAiIgCIiAIiIBRlBFGQ+joTpybp0Bk8oy3oZFBMiZd6G/pL17x3wj1Wtqdj07jHo6HbkencYZdyB9peveO+QnWxEo1uiaJDhvXO1Ox6dxk0sExERBJC6cx7IRpMZE6cxAK/OolwPhLFMuv5IgA+MqO4Sl94i++AVP3x4xXQR74A7zEeMbwBvLd/D3wTfh75IIAAiIgCIiAIiIAiIgCIiAQ8V6DeBl3MeHwiJRluxEfRfxPwmQm0RL9jNFYiILCUMRAIsPeSJsfGIgFJcIiADLF5xEAuaG2MRAKJsPCXxEAREQBERAEREA//9k=" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Sugar</p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

    <div class="card-items">
      <img src="https://m.media-amazon.com/images/I/81hA7zWuC0L._AC_UF1000,1000_QL80_.jpg" alt="" width="160px">
      <div class="lines">
        <p class="text-center my-1">Sugar</p>
        <p class="text-center my-1"> <a href="#"> Click Here</a></p>
      </div>
    </div>

  </div>
</div>

<style>

* {
  margin: 0;
  padding: 0;
}
  

.card {
  max-width: 91vw;
  margin: 37px auto;
  /* overflow: hidden; */
}

.card-items {
  display: inline-flex;
  justify-content: center;
  flex-direction: column;
  margin: 0 15px;
}

.card h2 {
  color: rgb(24, 76, 110);
  font-family: "Ubuntu", sans-serif;
}

.cards {
  display: flex;
  overflow: scroll;
}

/* justify-content: center; */
.card h2:hover {
  font-weight: bold;
  color: rgb(175, 157, 157);
  cursor: pointer;
}

.lines p:hover {
  color: rgb(75, 75, 156);
  font-weight: bold;
  cursor: pointer;
}

.teddy,
p {
  display: flex;
  justify-content: center;
  align-items: center;
  margin:5px 0;
}

.teddy
p:hover {
  cursor: pointer;
  font-weight: 900;
  font-family: "Ubuntu", sans-serif;
  border:2px solid white;
}

.flex-all-center {
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn {
  padding: 5px 10px;
  color: white;
  background: var(--main-bg-color);
  border: 2px solid white;
  border-radius: 7px;
  cursor: pointer;
}

.flex-all-center p:hover {
  font-weight: bold;
  color: burlywood;
  cursor: pointer;
}

.my-1 {
  margin: 5px 0;
}

.my-2 {
  margin: 26px 0;
}

.text-center {
  text-align: center;
}

.ali_abdul{
  display: flex;
  justify-content: center;
  align-items: center;
}

.ali_abdul  a {
  padding: 0 12px;
  text-decoration: none;
}

.ali_abdul a:hover {
  font-weight: bold;
  color: rgb(41, 36, 36);
}

</style>



<form action="" method="get">

@csrf

<h1 class="title section2-header">Grocery Half Price </h1>


<div class="product-container">

{{-- @foreach($products as $product) --}}

  <div class="product-card">
    <img src="https://www.madbananas.in/wp-content/uploads/2017/10/bournvita-jar-v-1-kg-1-4.png" alt="Product Name" class="product-image">
    <h3 class="product-name">Bourn Vita</h3>
    <p class="product-description"><a href="">See More</a></p>
    <div class="product-price">
      <span class="discount-price">Price<svg xmlns="http://www.w3.org/2000/svg" width="22" height="15" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
        <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
      </svg>120</span>
    </div>
    <button class="add-to-cart-button">Add to Cart</button>
  </div>


    
    <div class="product-card">
{{--     
@foreach($products as $product) --}}

    <img src="https://2.wlimg.com/product_images/bc-full/dir_131/3927472/wagh-bakri-tea-1503920091-3252077.jpeg"  alt="Product Name" class="product-image" >
    <h3 class="product-name">Wagh Bakri Tea </h3>
    <p class="product-description"><a href="{{'/welcome/darkfantasy'}}">See More Details </a></p>
    <div class="product-price">
      <span class="original-price">570</span>
      <span class="discount-price">479</span>
    </div>
    <button type="submit" data-name="Dark Fantasy" data-price="80" class="add-to-cart-button">  Add to cart </button> 

    {{-- @endforeach --}}

  </div>   


    
    <div class="product-card">
    <img src="https://m.media-amazon.com/images/I/716mQh6TR4L.jpg" alt="Product Name" class="product-image">
    <h3 class="product-name">Nutraj California Whole Walnut (Akrod)</h3>
    <p class="product-description"><a href="">See More</a></p>
    <div class="product-price">
      <span class="original-price">999</span>
      <span class="discount-price">300</span>
      </div>
    <button class="add-to-cart-button">Add to Cart</button>
  </div>
   
    <div class="product-card">
    <img src="https://images.mamaearth.in/catalog/product/o/n/onion_shampoo_1_ltr_1_white_bg.jpg" alt="Product Name" class="product-image">
    <h3 class="product-name">Mamaearth Onion & Plant Keratin</h3>
    <p class="product-description"><a href="">See More</a></p>
   <div class="product-price">
      <span class="original-price">350</span>
      <span class="discount-price">280</span>
    </div>  <button class="add-to-cart-button">Add to Cart</button>
  </div> 
  </div>


</form>

<!--
inspired by: https://dribbble.com/shots/5449304-Snickers-eShop-UI-animations-concept
-->




  <style>

.product-container{
  display:flex;
  flex-wrap:wrap;
   width:100%;
  justify-content:center
} 
.product-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
  border: 1px solid lightgray;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  margin: 20px;
    background-color: white; 
  
  padding-bottom:1%

}

.product-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-name {
  font-size: 1.25rem;
  font-weight: bold;
  margin: 10px 0;
  text-align: center;
}

.product-description {
  font-size: 0.875rem;
  margin: 10px 0;
  text-align: center;
}

.product-price {
  font-size: 1.125rem;
  font-weight: bold;
  margin: 10px 0;
  color: orange;
}

.add-to-cart-button {
  padding: 10px 20px;
  background-color: orange;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 0.875rem;
  cursor: pointer;
}

.add-to-cart-button:hover {
  background-color: darkorange;
}

.product-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
 }
.original-price {
  text-decoration: line-through;
  color: lightgray;
  font-size: 0.875rem;
}

.discount-price {
  color: orange;
  font-size: 1.125rem;
  font-weight: bold;
}
    </style>

<script src="https://sdks.shopifycdn.com/buy-button/0.2.0/buybutton.js"></script>
<!-- HTML code -->
<div id="product"></div>
<div id="product2"></div>


<style>

/* CSS code */
#product2 {display: none;}


</style>


<script>



</script>

    




<!--ADDS-->
<center>
<div class="Advertisement">
  <img class="myAdds" src="https://i.ibb.co/r5f5GgH/1.png" style="width:100%">
  <img class="myAdds" src="https://i.ibb.co/bN4XFXp/2.png" style="width:100%">
  <img class="myAdds" src="https://i.ibb.co/nfpZj9p/3.png" style="width:100%">
</div>
</center>




<section class="section6">
<table>
<tr>
<td>
<img src="https://i.ibb.co/sjTCyXj/app.png" alt="APP">
</td>
<td>
<span class="title">Download E-Mart App Now</span>
<span class="sub-title">Fast, Simple & Delightful. All it takes is 15 seconds to Download.</span>
<a href="#" class="btn1"><i class="fa fa-android"></i> DOWNLOAD</a>
</td>
</tr>
</table>
</section>










@include('footer')

<!--ADDITIONAL-->
<div id="id01" class="modal">
  
  <section class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    </section>
</div>
  

</body>
</html>


<!-- Header Style-->

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





/*CAROUSEL*/
.content-width {
  width: 100%;
  height: 70vh;
  margin: 0 auto;
  margin-top:10%;
}

.slideshow {
  position: relative;
  width: 100%;
  height: 70vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  position: relative;
  width: 100%;
  height: 70vh;
}

.item {
  position: absolute;
  width: 100%;
  height: auto;
}

.item-image-container {
  position: relative;
  width: 100%;
  height:70vh;
}

.item-image-container::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  width: 101%;
  height: 90vh;
  background: #22222A;
  opacity: 0;
 
}

.item-image {
  position: relative;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: block;
  /* transition: property name | duration | timing-function | delay  */
  transition: opacity .3s ease-out .45s;
}

.item.active .item-image {
  opacity: 1;
}

.item.active .item-image-container::before {
  opacity: .0;
}

.item-description {
  position: absolute;
  top: 50vh;
  left: 1.8%;
  width: 50%;
  color:#000;
  padding-right: 4%;
  line-height: 1.8;
  font-family: 'Exo 2', sans-serif;
}

/* Staggered Vertical Items ------------------------------------------------------*/
.item-header {
  position: absolute;
  top: 40vh;
  left: 1.8%;
}

.item-header .vertical-part {
  margin: 0 -4px;
  -webkit-font-smoothing: auto;
  font-size: 2vw;
  color: #000;
  font-family: 'Yusei Magic', sans-serif;
}

.desc b{
font-family: 'Titillium Web', sans-serif;
}

@media (max-width:600px){
.item-header .vertical-part {
font-size:3vw;
}
.content-width{
height:50vh;
}
.slideshow {
  position: relative;
  width: 100%;
  min-height: 50vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  min-height: 60vh;
}
.item-image-container {
  height:60vh;
}

.item-image-container::before {
  height: 60vh;
}
.item-description {
  position: absolute;
  top: 40vh;
  width: 90%;
  font-size:14px;
}
.item-header {
  position: absolute;
  top: 30vh;
}
}
.vertical-part {
  overflow: hidden;
  display: inline-block;
}

.vertical-part b {
  display: inline-block;
  transform: translateY(100%);
}

.item-header .vertical-part b {
  transition: .5s;
}

.item-description .vertical-part b {
  transition: .21s;
}

.item.active .item-header .vertical-part b {
  transform: translateY(0);
}

.item.active .item-description .vertical-part b {
  transform: translateY(0);
}

/* Controls ----------------------------------------------------------------------*/
.controls {
  position: relative;
  text-align: right;
  display:block;
}

.controls ul {
  list-style: none;
  float:left;
}

.controls ul li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 3px;
  background:#bdbdd5;;
  cursor: pointer;
}

.controls ul li.active {
  background:#6a6a77;;
}


@media (max-width:600px){
.content-width {
margin-top:15%;
}
.controls ul {
  list-style: none;
  position:absolute;
  top:-20vh;
}
}






/*SECTION1*/
.section1{
width:100%;
margin-right:auto;
margin-left:auto;
padding:20px;
overflow-x:hidden;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section1 .add-card{
padding:20px;
border-radius:5px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
width:26%;
margin:2%;
display:inline-block;
height:250px;
background-size:cover;
background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5));
}

.section1 section{
color:#fff;
padding:30px 0px;
}

.section1 .btn1:hover{
background:transparent;
color:#fff;
border:1px solid #fff;
}

.section1 .title{
color:#eebf4d;
}

@media (max-width:1280px){
.section1 .add-card{
min-width:20%;
margin:1%;
}
}

@media (max-width:600px){
.section1{
position:relative;
display:flex;
align-items:left;
justify-content: left;
margin-top:10vh;
}
.section1 .add-card{
min-width:80%;
height:200px;
}
}





/*SECTION2*/
.section2{
width:100%;
padding:30px;
padding-top:0px;
}

.section2-header{
font-size:1.5em;
padding:20px;
}

#timer{
font-size:16px;
color:gray;
}

.section2 .deal-card{
display:inline-block;
padding:15px;
height:330px;
width:250px;
position:relative;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
transition:0.5s;
margin:10px;
}

.section2 .deal-card img{
width:100%;
height:200px;
transition:0.5s;
}

.section2 .deal-card:hover > img{
transform:scale(1.1);
}

.section2 .deal-card .discount{
position:absolute;
left:20px;
}

.section2 .deal-card .tag-1 i{
color:#fff;
}

.section2 .deal-card .tag-1{
background:green;
padding:5px 20px;
text-align:center;
color:#fff;
position:absolute;
right:20px;
font-size:13px;
z-index:1;
top:20px;
}

.section2 .deal-card .tag-2{
background:red;
padding:5px 20px;
text-align:center;
color:#fff;
position:absolute;
right:20px;
font-size:13px;
z-index:1;
top:20px;
}

.section2 .deal-card .title{
font-size:1em;
}

.section2 .deal-card .sub-title{
font-size:0.7em;
color:gray;
}

.section2 .advertise-card{
background-image:url("https://i.ibb.co/VMHGgsk/add-card.png");
background-size:cover;
background-position:center;
height:330px;
position:relative;
top:50px;
width:550px;
border-radius:5px;
}

@media (max-width:600px){
.section2 .title{
display:block;
min-width:90%;
height:10vh;
}
.section2 .advertise-card{
display:none;
}
.section2{
position:relative;
display:flex;
align-items:left;
justify-content: left;
margin-top:0vh;
overflow-x:hidden;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section2-header{
margin-top:10vh;
}

.section2 .deal-card{
min-width:80%;
height:330px;
}
}




/*SECTION3*/
.section3{
width:100%;
height:45vh;
overflow-y:hidden;
padding:50px 30px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
overflow-x:hidden;
position:relative;
display:flex;
align-items:left;
justify-content: left;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section4{
width:100%;
min-height:40vh;
overflow-y:hidden;
padding:50px 30px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
overflow-x:hidden;
position:relative;
display:flex;
align-items:left;
justify-content: left;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section3-header,.section4-header{
padding:20px;
position:relative;
}

.section3-header .title,.section4-header .title{
font-size:1.8em;
margin-top:5vh;
}

.section3-header .viewmore,.section4-header .viewmore{
position:absolute;
right:20px;
top:20px;
background:#2874f0;
border-radius:3px;
}

.section3-header .viewmore:hover,.section4-header .viewmore:hover{
color:#fff;
background:#3399ff;
border:0;
}

.section3-header,.section4-header{
font-size:1em;
}

.section3 .discount-card,.section4 .discount-card{
padding:15px;
min-width:200px;
height:350px;
display:inline-block;
margin:0px 15px;
position:relative;
}

.section3 .discount-card a,.section4 .discount-card a{
position:absolute;
top:10px;
right:10px;
transition:0.5s;
}

.section3 .discount-card a:hover,.section4 .discount-card a:hover{
color:red;
}

.section3 .discount-card img,.section4 .discount-card img{
width:60%;
height:100px;
}

.section3 .discount-card .title,.section4 .discount-card .title{
font-size:1em;
}

.section3 .discount-card .btn1,.section4 .discount-card .btn1{
display:inline-block;
}

.section3 .discount-card .rating,.section4 .discount-card .rating{
color:gray;
}

.section3 .discount-card .checked,.section4 .discount-card .checked {
  color: orange;
}

.section3-header button,.section4-header button{
background:#fff;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
height:35vh;
width:50px;
font-size:30px;
z-index:111;
text-align:center;
border:0;
outline:none;
transition:0.5s;
}

.section3-header .next,.section4-header .next{
position:absolute;
right:0px;
top:25vh;
z-index:1;
}

.section3-header .previous,.section4-header .previous{
position:absolute;
left:0px;
top:25vh;
z-index:1;
}

.section3-header .next:hover,.section3-header .previous:hover,.section4-header .next:hover,.section4-header .previous:hover{
background:#eebf4d;
}

@media (max-width:600px){
.section3,.section4{
display:flex;
align-items:left;
justify-content: left;
}
.section3 .discount-card,.section4 .discount-card{
min-width:60%;
margin:0px 40px;
}
.section3-header .title,.section4-header .title{
font-size:1em;
}
  .section3-header .previous,.section4-header .previous,.section3-header .next,.section4-header .next{
   display:none; 
  }
}

.section4{
height:30vh;
}








/*ADDS*/
.Advertisement{
width:60%;
margin-left:auto;
margin-right:auto;
margin:10% 0%;
}

.Advertisement .myAdds{
height:150px;
display:none;
}




/*SECTION6*/
.section6{
width:100%;
background:#eebf4d;
position:relative;
}

.section6 table{
width:90%;
}

.section6 table td{
width:40%;
padding:30px;
}

.section6 table td img{
width:200px;
height:50vh;
position:absolute;
bottom:0;
margin-right:auto;
margin-left:auto;
pointer-events:none;
}

@media (max-width:600px){
.Advertisement{
width:90%;
}
.Advertisement .myAdds{
display:none;
}


.section6 table td{
padding:10px;
}
.section6 table td img{
width:40%;
height:40vh;
}
.section6 .title{
font-size:1.2em;
}
.section6 .sub-title{
font-size:0.8em;
}
}


/*ADDITIONAL*/
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-image:url("https://i.ibb.co/nmFGXfD/banner.png");
  background-size:cover;
  background-position:center;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%;
  height:70vh; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #eebf4d;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}



.credits{
  background:#1e1e1e;
  padding:10px;
  position:fixed;
  bottom:20px;
  right:0;
  color:gray;
  font-size:12px;
  z-index:9999;
}

.credits a{
  text-decoration:none;
  color:gray;
}

</style>

<!---Script Header-->

<script>

//DEFAULT
document.getElementById('id01').style.display='block';





var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("myAdds");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}

var modal = document.getElementById('id01');
document.addEventListener("keydown", ({key}) => {
    if (key === "Escape"){
      if(modal.style.display="block"){
      modal.style.display = "none";
      }
    }
});




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







/*CARD_SCROLLER*/
document.addEventListener("click", closeAllSelect);
function scrollright(){
  document.getElementById("section3").scrollLeft += 400;
}
function scrollleft(){
  document.getElementById("section3").scrollLeft -= 400;
}
/*CARD_SCROLLERENDS*/

/*CARD_SCROLLER*/
document.addEventListener("click", closeAllSelect);
function scrollright4(){
  document.getElementById("section4").scrollLeft += 400;
}
function scrollleft4(){
  document.getElementById("section4").scrollLeft -= 400;
}
/*CARD_SCROLLERENDS*/






var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>


 
