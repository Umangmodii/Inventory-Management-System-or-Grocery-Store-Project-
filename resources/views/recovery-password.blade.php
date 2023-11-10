<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Recovery | User </title>
</head>
<body>

@include('header')

<!--Account Recovery-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="{{url('mail-send')}}" method="get">

<div class="container padding-bottom-3x mb-2">

    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-10">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('welcome')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg> Home </a></li>
                <li class="breadcrumb-item"><a href="{{url('account-order')}}">Login</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
              </ol>

              <br>
              
            <h2> Forgot your password? </h2>
            <p> Change your password in three easy steps. This helps to keep your new password secure.</p>
            <ol class="list-unstyled">
                <li><span class="text-primary text-medium">1. </span>Fill in your email address below.</li>
                <li><span class="text-primary text-medium">2. </span>We'll email you a temporary code.</li>
                <li><span class="text-primary text-medium">3. </span>Use the code to change your password on our secure website.</li>
            </ol>

            <div class="card">
                <div class="card">
            <form class="card mt-4">
                <div class="card-body">
                    <div class="form-group">
                        
                        <label for="email-for-pass">Enter your email address</label>
                        <input class="form-control" type="text" id="email-for-pass" required="Please Enter your Email" name="email"><small class="form-text text-muted"></small>
                        
            <br>      
               
                    <button class="btn btn-primary" type="submit">Get New Password</button>
                
            
            </div>
        </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>

<style>

body{margin-top:20px;}
.form-control:not(textarea) {
    height: 44px;
}
.form-control {
    padding: 0 18px 3px;
    border: 1px solid #dbe2e8;
    border-radius: 22px;
    background-color: #fff;
    color: #606975;
    font-family: "Maven Pro",Helvetica,Arial,sans-serif;
    font-size: 14px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-group label {
    margin-bottom: 8px;
    padding-left: 18px;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
}


.form-text {
    padding-left: 18px;
}
.text-muted {
    color: #9da9b9 !important;
}

</style>

<br>
<br>



@include('footer')
    
</body>
</html>