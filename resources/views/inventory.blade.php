<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inventory | Admin Panel </title>
</head>
<body>

	@include('cdn')
	
	
</body>
</html>

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


<br>
<br>	
<br>
<br>
<br>
<br>
<br>
<br>	
<br>
<br>
<br>
<br>

<main>
	<header class="clearfix">
		<div class="home">
			
		</div>
		<nav class="container-fluid">
			<ul class="clearfix">
				<li><a href="#one" class="activ">Manage Category</a></li>
				<li><a href="#two">Manage Variation</a></li>
				<li><a href="#three">Manage Brands</a></li>
				<li><a href="#four">Manage Product</a></li>
				
			</ul>
			<span></span>
		</nav>
	</header>
	<section class="row">
		<br>
		<br>
		<h1>Welcome here !</h1>
  <p class="col-xs-12">Try to add or remove some content, the CSS and the JavaScript will adapt to your needs</p>
		<div class="col-xs-12 content activ" id="one">
			<h2>Add Caye</h2>
			
			<div class="container" id="book-crud-container">
				<div class="title text-center">
					<h1>
						<strong data-id="title">Not defined</strong>
					</h1>
				</div>
				<div class="main row">
					<div class="col-sm-12 col-md-4">
						<form data-id="crud-form" autocomplete="off">
						</form>
					</div>
					<div class="col-sm-12 col-md-8">
						<table class="table table-striped mt-5">
							<thead data-id="table-header">
							</thead>
							<tbody data-id="table-list">
							</tbody>
						</table>
					</div>
				</div>
			</div>


			<div class="container">
				<h2>NovoPay Assignment</h2>
			  <button class="button">Add User</button>
				<input type="text" id="myInput" onkeyup="searchtable()" placeholder="Search for names.." title="Type in a name">
				<div class="modal">
				<div class="modal-content">
					<span class="close-button">&times;</span>
					<p>Add User</p>
					<form id="formElem">
						<label for="name">Name</label>
						<input type="text" id="name" name="name">
						<label for="dob">Date of Birth</label><br><br>
						<input type="date" id="dob" name="dob"><br><br>
						<label for="location">Location</label>
						<input type="text" id="location" name="location">
						<label for="interests">Interests</label>
						<input type="text" id="interests" name="interests">
						<button class="button" type="submit">Submit</button>
					</form>
				</div>
			</div>
			<table id="dataTable">
		  <tr>
			<th>Name</th>
			<th>Age</th>
			<th>DOB</th>
			<th>Location</th>
			<th>Interest</th>
			<th>Delete User</th>
		  </tr>
		</table>
			</div>

			

			
			<script>

var entityManager = (function () {
    "use strict";

    var self = this;

    // variables initialised in init() function
    var name_entity, key_entity, fields, field_key, store;
    var container, main_container, submit_button, form_container;
    var crud_key_field, crud_action_field;
    var crud_key_list;
    var title_entity = '';
    var selectedRow = null;

    var messages = {};
    messages.allrequired = 'Please fill in all fields';

    function capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    class Model {
        constructor(datas) {
            let keys = Object.keys(datas);
            keys.forEach(key => {
                this[key] = datas[key];
            });
        }
    }

    /**
     * Handles UI tasks
     */
    class UI {

        static displayItems() {
            const items = store.getItems();

            items.forEach((item) => UI.addItemToList(item));
        }

        static addItemToList(item) {

            const row = document.createElement('tr');

            var columns = '';
            fields.forEach(elt => {
                columns += `<td>${item[elt]}</td>`;
            });

            let key = `${item[field_key]}`;

            row.innerHTML = `${columns}
      <td><a href="#" class="btn btn-success btn-sm" data-action="edit" data-id="${key}">Edit</a></td>
      <td><a href="#" class="btn btn-danger btn-sm" data-action="delete" data-id="${key}">Drop</a></td>
    `;
            crud_key_list.appendChild(row);
        }

        static editItemToList(list) {
            fields.forEach((item, index) => {
                selectedRow.children[index].textContent = list[item];
            });
        }

        static deleteItem(el) {
            el.parentElement.parentElement.remove();

            store.removeItem(el.dataset.id);
            UI.showAlert(messages.deleted, 'danger');
        }

        static editItem(el) {
            submit_button.value = 'Submit edition';
            selectedRow = el.parentElement.parentElement;
            fields.forEach((item, index) => {
                form_container.querySelector('[data-field=' + item + ']').value = selectedRow.children[index].textContent;
            });
            let key = el.dataset.id;

            // in edit mode, we protect the field corresponding to the unique key of the model
            let protectField = form_container.querySelector('[data-field=' + field_key + ']');
            if (protectField != undefined) {
                protectField.setAttribute('disabled', 'disabled');
            }

            crud_key_field.value = key;
            crud_action_field.value = 'edit';
        }

        static showAlert(message, className) {
            const div = document.createElement('div');
            div.className = `alert alert-${className}`;

            div.appendChild(document.createTextNode(message));
            const main = main_container.querySelector('.main');
            main_container.insertBefore(div, main);
            // div.style.position = "absolute";
            // div.style.top = "30px";
            // div.style.left = "90%";
            setTimeout(() => main_container.querySelector('.alert').remove(), 3000);
        }

        static clearFields() {
            submit_button.value = 'Submit creation';

            fields.forEach((item, index) => {
                form_container.querySelector('[data-field=' + item + ']').value = '';
            });

            crud_key_field.value = '';
            crud_action_field.value = 'add';

            // in edit mode, we protect the field corresponding to the unique key of the model
            let protectField = form_container.querySelector('[data-field=' + field_key + ']');
            if (protectField != undefined) {
                protectField.removeAttribute('disabled');
            }
        }
    }

    /**
     * Store Class: Handles Storage
     */
    class Store {

        constructor(store_name, field_key) {
            this.store_name = store_name;
            this.field_key = field_key;
        }

        getItems() {
            let items;
            if (localStorage.getItem(this.store_name) === null) {
                items = [];
            } else {
                items = JSON.parse(localStorage.getItem(this.store_name));
            }

            return items;
        }

        addItem(item) {
            let items = store.getItems();
            items.push(item);
            localStorage.setItem(this.store_name, JSON.stringify(items));
        }

        updateItem(key, data) {

            // we delete and recreate the item in the store
            let items = store.getItems();
            for (let index=0, imax=items.length; index<imax; index++) {
                let item = items[index];
                if (item[this.field_key] == key) {
                    items[index] = data;
                }
            }

            localStorage.setItem(this.store_name, JSON.stringify(items));
        }

        removeItem(key) {
            let items = store.getItems();

            items.forEach((item, index) => {
                if (item[this.field_key] === key) {
                    items.splice(index, 1);
                }
            });

            localStorage.setItem(this.store_name, JSON.stringify(items));
        }

        clearStore() {
            localStorage.clear(this.store_name);
        }
    }

    function init(param) {

        title_entity = param.title;
        name_entity = param.entityName;
        key_entity = param.entityKey;
        fields = param.fields;
        field_key = param.fieldKey;

        container = key_entity + '-crud-container';

        messages.deleted = `${name_entity} deleted`;
        messages.added = `${name_entity} added`;
        messages.edited = `${name_entity} edited`;

        //---- FIND THE MAIN CONTAINER
        main_container = document.getElementById(container);
        if (main_container == undefined) {
            console.error('DOM target not found for ID ' + container);
            return;
        }

        //---- SET THE HEADER OF THE TABLE
        let header_key = `[data-id=table-header]`;
        let list_header = main_container.querySelector(header_key);
        if (list_header == undefined) {
            console.error('DOM target not found for ID ' + header_key);
        } else {
            let columns = '';
            fields.forEach(elt => {
                columns += `<th>${capitalize(elt)}</th>`;
            });
            list_header.innerHTML = `<tr>
                    ${columns}
                    <th></th>
                    <th></th>
                </tr>`;
        }

        //---- SET THE TITLE
        let title_key_target = `[data-id=title]`;
        let title_target = main_container.querySelector(title_key_target);
        if (title_target == undefined) {
            console.error('DOM target not found for ID ' + title_key_target);
        } else {
            title_target.innerHTML = title_entity;
        }

        //---- GENERATE THE FORM
        var form_container_key = '[data-id=crud-form]'
        form_container = main_container.querySelector(form_container_key);
        if (form_container == undefined) {
            console.error('DOM target not found for ID ' + form_container_key);
        } else {

            let columns = '';
            fields.forEach(elt => {
                columns += `<div class="form-group">
                    <label class="col-md-12">${capitalize(elt)}
                    <input type="text" data-field="${elt}" class="form-control">
                    </label>
                </div>`;
            });

            form_container.innerHTML = `${columns}
                <input type="hidden" value="" data-id="crud-key">
                <input type="hidden" value="" data-id="crud-action">
                <input type="submit" value="Submit creation" data-id="submit-button" class="btn btn-success btn-block" >
                <input type="button" value="Cancel" data-id="cancel-button" class="btn btn-secondary btn-block" >`;

            form_container.addEventListener('submit', (e) => {
                // Prevent actual submit
                e.preventDefault();

                let form_values = {};
                let flag_all_filled = true;
                fields.forEach((item, index) => {
                    form_values[item] = String(form_container.querySelector('[data-field=' + item + ']').value).trim();
                    if (form_values[item] == '') {
                        flag_all_filled = false;
                    }
                });

                // Validate

                if (flag_all_filled == false) {
                    UI.showAlert(messages.allrequired, 'danger');
                } else {
                    // Instatiate Model
                    const item = new Model(form_values);
                    if (crud_action_field.value == 'add') {
                        console.log('add item');
                        store.addItem(item);
                        // Add item to UI
                        UI.addItemToList(item);
                        selectedRow = null;
                        UI.showAlert(messages.added, 'success');
                    } else {
                        let key = crud_key_field.value;
                        store.updateItem(key, item);
                        UI.editItemToList(item);
                        selectedRow = null;
                        UI.showAlert(messages.edited, 'info');
                    }
                    // Clear fields
                    UI.clearFields();

                }
            });

            // Event: Remove an item
            var crud_dom_key_list = `[data-id=table-list]`;
            crud_key_list = main_container.querySelector(crud_dom_key_list);
            if (crud_key_list == undefined) {
                console.error('DOM target not found for ID ' + crud_dom_key_list);
            } else {
                crud_key_list.addEventListener('click', (e) => {
                    let node = e.target;
                   // if (el.dataset.action)
                    if (node.dataset.action) {
                        if (node.dataset.action == 'delete') {
                            UI.deleteItem(e.target);
                        }
                        if (node.dataset.action == 'edit') {
                            UI.editItem(e.target);
                        }
                    }
                });
            }

            submit_button = main_container.querySelector('[data-id=submit-button]');
            if (submit_button == undefined) {
                console.error('DOM target not found for submit-button');
            }

            let cancel_button = main_container.querySelector('[data-id=cancel-button]');
            if (cancel_button == undefined) {
                console.error('DOM target not found for cancel-button');
            } else {
                cancel_button.addEventListener('click', (e) => {
                    UI.clearFields();
                });
            }

            crud_key_field = main_container.querySelector('[data-id=crud-key]');
            if (crud_key_field == undefined) {
                console.error('DOM target not found for crud-key');
            }
            crud_action_field = main_container.querySelector('[data-id=crud-action]');
            if (crud_action_field == undefined) {
                console.error('DOM target not found for crud-action');
            }

            //---- SET STORE IN LOCAL STORAGE
            store = new Store(param.local_storage_key, field_key);

            if (param.clear_store == true) {
                store.clearStore();
            }

            // Mockup data for starting
            let mockup_data = param.load_mockup || [];
            mockup_data.forEach(item => {
                let book = new Model(item);
                store.addItem(book);
            });

            UI.displayItems();
            UI.clearFields();

            return self;
        }

    }

    // Déclaration des méthodes et propriétés publiques
    return {
        init: init,
    };
})();

    window.addEventListener("DOMContentLoaded", (event) => {
        console.log("DOM entièrement chargé et analysé");

        let mockup = [
            {
                title: 'La Fabrique De L’homme Nouveau. Travailler, Consommer Et Se Taire ?',
                author: 'Jean-Pierre Durand',
                isbn: '9782356875419'
            },
            {
                title: 'La Dissociété, à la recherche du progrès humain',
                author: 'Jacques Généreux',
                isbn: '9782757822890'
            },
        ];

        let configEntity = {
            clear_store: true,
            local_storage_key: 'books',
            title : 'Book manager',
            entityName : 'Book',
            entityKey : 'book',
            fields : ['title', 'author', 'isbn'],
            fieldKey : 'isbn',
            load_mockup: mockup
        };

        let bookmanager = entityManager.init(configEntity);
    });


            </script>



		</div>
		<div class="col-xs-12 content" id="two">
			<h2>Two</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus architecto, a. Commodi magnam eaque saepe ab illo, cupiditate blanditiis voluptatibus tempore eum, architecto nihil necessitatibus, similique nemo, a. Doloribus, dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus architecto, a. Commodi magnam eaque saepe ab illo, cupiditate blanditiis voluptatibus tempore eum, architecto nihil necessitatibus, similique nemo, a. Doloribus, dolorum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus architecto, a. Commodi magnam eaque saepe ab illo, cupiditate blanditiis voluptatibus tempore eum, architecto nihil necessitatibus, similique nemo, a. Doloribus, dolorum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus architecto, a. Commodi magnam eaque saepe ab illo, cupiditate blanditiis voluptatibus tempore eum, architecto nihil necessitatibus, similique nemo, a. Doloribus, dolorum.
			</p>
		</div>
		<div class="col-xs-12 content" id="three">
			<h2>Three</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.
			</p>
		</div>
		<div class="col-xs-12 content" id="four">
			<h2>Four</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.
			</p>
		</div>
		<div class="col-xs-12 content" id="five">
			<h2>Five</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis optio voluptate enim labore in magni quaerat adipisci doloribus nisi iure, assumenda reprehenderit similique deleniti, libero eligendi debitis ratione quam.
			</p>
		</div>
	</section>
</main>

<style>

* {
    margin: 0;
    padding: 0;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
body {
    font-family: sans-serif;
}

ul {
    list-style-type: none;
}

a {
    text-decoration: none;
    color: #000;
}
header{
    width: 100%;
}
div.home{
    width: 20%;
    float: left;
}
div.home img{
    display: block;
    width: 50px;
    margin: 0 auto;
    position: relative;
    -webkit-transform: translateY(40%);
    -moz-transform: translateY(40%);
    -ms-transform: translateY(40%);
    -o-transform: translateY(40%);
    transform: translateY(40%);
}
nav{
    width: 80%;
    float: right;
}
nav ul{
	width: 100%;
}

nav ul li {
    float: left;
    width: 20%;
    line-height: 60px;
    text-align: center;
}
span{
	display: block;
	height: 3px;
	width: 20%;
	background: red;
	position: relative;
	left: 0;
    transition: 0.3s ease-in-out;
}
section{
    margin-top: 50px;
}
h1{
  display: block;
  width: 100%;
	text-align: center;
	margin: 0 auto;
	font-weight: 400;
	font-size: 30px;
}
section>p{
	text-align: center;
	margin: 30px auto;
	padding: 0 10%;
}
section>div{
	width: 90%;
	margin: 0 auto;
	display: none;
}
section>div.activ{
	display: block;
}
div.content h2{
	margin: 10px 0 40px 20%;
}
div.content p{
    display: block;
    margin: 0 auto;
	width: 60%;
    line-height: 1.7;
}

@media screen and (max-width: 600px) {
	div.content h2{
		margin: 10px 0 40px 5%;
	}
	div.content p{
		width: 95%; 
	}
}

</style>

<script>

var links = document.querySelectorAll('nav ul li a');
var content = document.querySelectorAll('div.content');
var border = document.querySelector('span');
var lis = document.querySelectorAll('nav ul li');

for (let i = 0; i < links.length; i++){
	links[i].addEventListener('click', function(e){
    e.preventDefault();
		var activLinks = document.querySelector('nav ul li a.activ');
		var activContent = document.querySelector('section>div.activ');

		activLinks.classList.remove('activ');
		activContent.classList.remove('activ');

		this.classList.add('activ');
		var attr = this.getAttribute('href');

		var activ = document.querySelector(attr);

		activ.classList.add('activ');

        var lisLength = lis.length;
        var lisWidth = 100 / lisLength;
        var position = i*lisWidth;
        border.style.left = position + '%';

	});
}

</script>