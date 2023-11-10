<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Order | User </title>


<link rel="stylesheet" href={{'https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans'}}>
<link rel="stylesheet" href={{'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'}}>
<link rel="stylesheet" href={{'https://fonts.googleapis.com/icon?family=Material+Icons'}}>
<link rel="stylesheet" href={{'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'}}>

<script src={{'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'}}></script>
<script src={{'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'}}></script>

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
            <a class="nav-link active ms-0" href="account-profile" target="__blank">Profile Info</a>
            <a class="nav-link" href="{{url('account-order')}}" target="__blank">Orders</a>
            <a class="nav-link" href="{{url('account-address')}}" target="__blank">Address</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Payment Method</a>
        </nav>

    <hr class="mt-0 mb-4">

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('welcome')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('account-order')}}">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Order</li>
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
                    <center>  <input id="file" type="file" onchange="loadFile(event)"/> </center>
<br>
            <center>        <button type="submit" class="btn btn-danger">Save image</button> </center>

                </div>
            </div>
        </div>
    

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
                <div class="p-3 mb-2 bg-primary text-white"> Order Details</div>
                <div class="card-body">
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
        

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .table-responsive {
            margin: 10px 0;
        }
        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-width: 100%;
        }
        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }
        .search-box {
            position: relative;        
            float: right;
        }
        .search-box input {
            height: 34px;
            border-radius: 20px;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }
        .search-box input:focus {
            border-color: #3FBAE4;
        }
        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 2px;
            cursor: pointer;
        }
        table.table td:last-child {
            width: 120px;
        }
        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 2px;
        }
        table.table td a.view {
            color: #03A9F4;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #E34724;
        }
        table.table td i {
            font-size: 19px;
        }    
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }
        .pagination li a:hover {
            color: #666;
        }	
        .pagination li.active a {
            background: #03A9F4;
        }
        .pagination li.active a:hover {        
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }    
        </style>
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
        </head>
        <body>

        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2> My <b>Order</b></h2></div>
                            
                            
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sr No.</th>       
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                               
                        </tbody>
                    </table>
                   
            </div>  
        </div>  
    </div>

    </div>
</div>
</div>
</div>

    <br>
    <br>


    @include('footer')
    
</body>
</html>