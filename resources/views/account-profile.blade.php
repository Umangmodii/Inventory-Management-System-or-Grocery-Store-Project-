<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | E-Mart </title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
<body>

@include('header')

<br>
<br>
<br>
<br>
<br>
<br>

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{url('account-profile')}}" target="__blank">Profile Info</a>
            <a class="nav-link" href="{{url('account-order')}}" target="__blank">Orders</a>
            <a class="nav-link" href="{{url('account-address')}}" target="__blank">Address</a>
            <a class="nav-link" href="()"  target="__blank">Payment Method</a>
        </nav>
        

        <hr class="mt-0 mb-4">

        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('welcome')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('account-profile')}}">Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>

        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                   <center> <div class="p-3 mb-2 bg-danger text-white">Profile Info</div> </center>

                    <label class="-label" for="file">
                        <span class="glyphicon glyphicon-camera"></span>
                        <br>
                       <center> <span>Change Image</span> </center>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                   
                        <!-- Profile picture help block-->
                        
                        <img src="https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg" id="output" width="200" />
                     <br>
                     <br>
                        <center>  <input id="file" class="form-control" type="file" name="input_img" onchange="loadFile(event)"/> </center>
<br>
                <center>        <button type="submit" class="btn btn-danger">Save image</button> </center>

                    </div>
                </div>
            </div>

            <?php

 function fileUpload(Request $request) {
                $this->validate($request, [
                    'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            
                if ($request->hasFile('input_img')) {
                    $image = $request->file('input_img');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/image');
                    $image->move($destinationPath, $name);
                    $this->save();
            
                    return back()->with('success','Image Upload successfully');
                }
            }

            ?>
        

            <script>

var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};
            </script>

<style>

@mixin object-center {
  display: flex;
  justify-content: left;
  align-items: left;
}


$circleSize: 165px;
$radius: 100px;
$shadow: 0 0 10px 0 rgba(255,255,255,.35);
$fontColor: rgb(250,250,250);

.profile-pic {
  color: transparent;
  transition: all .3s ease;

  position: relative;
  transition: all .3s ease;
  
  input {
    display: none;
  }
  
  img {
    position: absolute;
    object-fit: cover;
    width: $circleSize;
    height: $circleSize;
    box-shadow: $shadow;
    border-radius: $radius;
    z-index: 0;
  }
  
  .-label {
    cursor: pointer;
    height: $circleSize;
    width: $circleSize;
  }
  
  &:hover {
    .-label {
    
      background-color: rgba(0,0,0,.8);
      z-index: 10000;
      color: $fontColor;
      transition: background-color .2s ease-in-out;
      border-radius: $radius;
      margin-bottom: 0;
    }
  }
  
  span {
    display: inline-flex;
    padding: .2em;
    height: 2em;
  }
}


</style>


            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="p-3 mb-2 bg-primary text-white">Update Your Account Details</div>
                    <div class="card-body">

                        <form action="{{url('/')}}/db" method="get">

                            @csrf
                                     
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" type="text" placeholder="Enter your first name" name="fname" autocomplete="name">
                                   
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" type="text" placeholder="Enter your last name" name="lname">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Address</label>
                                <input class="form-control" type="text" placeholder="Enter your Address" name="address">
                            </div>

                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Country</label>
                                    <input class="form-control"  type="text" placeholder="Enter your Country name" name="country">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">State</label>
                                    <input class="form-control"  type="text" placeholder="Enter your State" name="state">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email Id</label>
                                <input class="form-control"  type="email" placeholder="Enter your email id" name="email">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Contact number</label>
                                    <input class="form-control"type="text" placeholder="Enter your phone number" name="contact">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birth date</label>
                                    <input class="form-control" type="date" placeholder="Enter your birthday" name="birthdate">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}

    </style>
    
    @include('footer')


</body>
</html>