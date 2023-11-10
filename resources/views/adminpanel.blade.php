
    <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title></title>
	<link rel="stylesheet"
		href="style.css">
	<link rel="stylesheet"
		href="responsive.css">
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">E-Mart | Dashbaord</div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> Dashboard</h3>
					</div>

					<div class="option2 nav-option">
						<img src=
"https://cdn-icons-png.flaticon.com/512/2211/2211640.png"
							class="nav-img"
							alt="articles">
						<h3><a href="{{url('admin/inventory')}}"> Inventory</a></h3>
					</div>

					<div class="nav-option option3">
						<img src=
"https://e7.pngegg.com/pngimages/936/444/png-clipart-computer-icons-icon-design-order-icon-cdr-angle.png"
							class="nav-img"
							alt="report">
						<h3> Orders</h3>
					</div>

					<div class="nav-option option4">
						<img src=
"https://cdn-icons-png.flaticon.com/512/4129/4129437.png"
							class="nav-img"
							alt="institution">
						<h3> Prdoucts</h3>
					</div>

					<div class="nav-option option5">
						<img src=
"https://cdn-icons-png.flaticon.com/512/4712/4712570.png"
							class="nav-img"
							alt="blog">
						<h3> Reports</h3>
					</div>

					<div class="nav-option option6">
						<img src=
"https://w7.pngwing.com/pngs/204/48/png-transparent-computer-icons-icon-design-computer-software-management-waste-management-service-silhouette-user-interface.png"
							class="nav-img"
							alt="settings">
						<h3> Layout Manager</h3>
					</div>

					<div class="nav-option logout">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout">
						<h3>Logout</h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading"></h2>
						<h2 class="topic"> Inventory</h2>
					</div>

					<img src=
"https://cdn-icons-png.flaticon.com/512/5429/5429507.png"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">150</h2>
						<h2 class="topic">Orders</h2>
					</div>

					<img src=
"https://cdn-icons-png.flaticon.com/512/2180/2180194.png"
						alt="likes">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">320</h2>
						<h2 class="topic">Prdoucts</h2>
					</div>

					<img src=
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTSJOO5YLUolzIOcX3lCoxWwyxzKatkgx2QQ&usqp=CAU"
						alt="comments">
				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">70</h2>
						<h2 class="topic">Reports</h2>
					</div>

                
                                        
					<img src=
                    "data:image/png;base64,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"
                                            alt="comments">
                                    </div>
                    
                                    <div class="box box5">
                                        <div class="text">
                                            <h2 class="topic-heading">70</h2>
                                            <h2 class="topic">Reports</h2>
                                        </div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
				</div>
			</div>

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Recent Order</h1>
					
				</div>

				
	</div>

	<script src="./index.js"></script>

    <style>

/* Main CSS Here */

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
:root {
--background-color1: #fafaff;
--background-color2: #ffffff;
--background-color3: #ededed;
--background-color4: #cad7fda4;
--primary-color: #4b49ac;
--secondary-color: #0c007d;
--Border-color: #3f0097;
--one-use-color: #3f0097;
--two-use-color: #5500cb;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: 27px;
font-weight: 600;
color: rgb(47, 141, 70);
}

.icn {
height: 30px;
}
.menuicn {
cursor: pointer;
}

.searchbar,
.message,
.logosec {
display: flex;
align-items: center;
justify-content: center;
}

.searchbar2 {
display: none;
}

.logosec {
gap: 60px;
}

.searchbar input {
width: 250px;
height: 42px;
border-radius: 50px 0 0 50px;
background-color: var(--background-color3);
padding: 0 20px;
font-size: 15px;
outline: none;
border: none;
}
.searchbtn {
width: 50px;
height: 42px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 0px 50px 50px 0px;
background-color: var(--secondary-color);
cursor: pointer;
}

.message {
gap: 40px;
position: relative;
cursor: pointer;
}
.circle {
height: 7px;
width: 7px;
position: absolute;
background-color: #fa7bb4;
border-radius: 50%;
left: 19px;
top: 8px;
}
.dp {
height: 40px;
width: 40px;
background-color: #626262;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
}
.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}
.dpicn {
height: 42px;
}

.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
background-image:
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
width: 5px;
}
.main::-webkit-scrollbar-track {
background-color: #9e9e9eb2;
}

.box-container {
display: flex;
justify-content: space-evenly;
align-items: center;
flex-wrap: wrap;
gap: 50px;
}
.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}
.nav-option:hover {
border-left: 5px solid #a2a2a2;
background-color: #dadada;
cursor: pointer;
}
.nav-img {
height: 30px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option1 {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option1:hover {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
}
.box {
height: 130px;
width: 230px;
border-radius: 20px;
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
padding: 20px;
display: flex;
align-items: center;
justify-content: space-around;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}
.box:hover {
transform: scale(1.08);
}

.box:nth-child(1) {
background-color: var(--one-use-color);
}
.box:nth-child(2) {
background-color: var(--two-use-color);
}
.box:nth-child(3) {
background-color: var(--one-use-color);
}
.box:nth-child(4) {
background-color: var(--two-use-color);
}

.box img {
height: 50px;
}
.box .text {
color: white;
}
.topic {
font-size: 13px;
font-weight: 400;
letter-spacing: 1px;
}

.topic-heading {
font-size: 30px;
letter-spacing: 3px;
}

.report-container {
min-height: 300px;
max-width: 1200px;
margin: 70px auto 0px auto;
background-color: #ffffff;
border-radius: 30px;
box-shadow: 3px 3px 10px rgb(188, 188, 188);
padding: 0px 20px 20px 20px;
}
.report-header {
height: 80px;
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 20px 10px 20px;
border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Articles {
font-size: 30px;
font-weight: 600;
color: #5500cb;
}

.view {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #5500cb;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: 1120px;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
}

.label-tag {
width: 100px;
text-align: center;
background-color: rgb(0, 177, 0);
color: white;
border-radius: 4px;
}

/* Responsive CSS Here */
@media screen and (max-width: 950px) {
.nav-img {
	height: 25px;
}
.nav-option {
	gap: 30px;
}
.nav-option h3 {
	font-size: 15px;
}
.report-topic-heading,
.item1,
.items {
	width: 800px;
}
}

@media screen and (max-width: 850px) {
.nav-img {
	height: 30px;
}
.nav-option {
	gap: 30px;
}
.nav-option h3 {
	font-size: 20px;
}
.report-topic-heading,
.item1,
.items {
	width: 700px;
}
.navcontainer {
	width: 100vw;
	position: absolute;
	transition: all 0.6s ease-in-out;
	top: 0;
	left: -100vw;
}
.nav {
	width: 100%;
	position: absolute;
}
.navclose {
	left: 00px;
}
.searchbar {
	display: none;
}
.main {
	padding: 40px 30px 30px 30px;
}
.searchbar2 {
	width: 100%;
	display: flex;
	margin: 0 0 40px 0;
	justify-content: center;
}
.searchbar2 input {
	width: 250px;
	height: 42px;
	border-radius: 50px 0 0 50px;
	background-color: var(--background-color3);
	padding: 0 20px;
	font-size: 15px;
	border: 2px solid var(--secondary-color);
}
}

@media screen and (max-width: 490px) {
.message {
	display: none;
}
.logosec {
	width: 100%;
	justify-content: space-between;
}
.logo {
	font-size: 20px;
}
.menuicn {
	height: 25px;
}
.nav-img {
	height: 25px;
}
.nav-option {
	gap: 25px;
}
.nav-option h3 {
	font-size: 12px;
}
.nav-upper-options {
	gap: 15px;
}
.recent-Articles {
	font-size: 20px;
}
.report-topic-heading,
.item1,
.items {
	width: 550px;
}
}

@media screen and (max-width: 400px) {
.recent-Articles {
	font-size: 17px;
}
.view {
	width: 60px;
	font-size: 10px;
	height: 27px;
}
.report-header {
	height: 60px;
	padding: 10px 10px 5px 10px;
}
.searchbtn img {
	height: 20px;
}
}

@media screen and (max-width: 320px) {
.recent-Articles {
	font-size: 12px;
}
.view {
	width: 50px;
	font-size: 8px;
	height: 27px;
}
.report-header {
	height: 60px;
	padding: 10px 5px 5px 5px;
}
.t-op {
	font-size: 12px;
}
.t-op-nextlvl {
	font-size: 10px;
}
.report-topic-heading,
.item1,
.items {
	width: 300px;
}
.report-body {
	padding: 10px;
}
.label-tag {
	width: 70px;
}
.searchbtn {
	width: 40px;
}
.searchbar2 input {
	width: 180px;
}
}
        </style>

<script>

let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
	nav.classList.toggle("navclose");
})


</script>




    


   