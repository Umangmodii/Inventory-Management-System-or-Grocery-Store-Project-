<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Renew | Password</title>
</head>
<body>

    @include('header')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <form>
        <br>
        <div class="container">

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('welcome')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg> Home </a></li>
                <li class="breadcrumb-item"><a href="{{url('account-order')}}">Login</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Password</li>
              </ol>

              <br>

          <h2> Set New Password </h2>
          <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Enter Password</label>
          <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Passeword"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="secret" required/>
        </div>
    
        <br>
    
        <div class="form-group">
          <label for="exampleInputPassword1">Comfirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="secret" required>
        </div>
      
        <br>
    
        <button type="submit" class="btn btn-primary"><i class="fa fa-angle-left"></i> Set new Password </button>
         <button type="button" class="btn btn-light"><i class="fas fa-mobile-alt mr-2"></i><a href="{{url('welcome')}}"> To Shop </a> <i class="fa fa-angle-right"></i></button>
      
    
        <br>
        <br>
        <br>
    
      </div>
    </div>
  </div>
      </form> 
    
    @include('footer')
    
</body>
</html>