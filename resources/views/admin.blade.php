<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | E-Mart </title>
</head>
<body>
    
@include('adminheader')

<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <br>
    <div class="container">

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('welcome')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
      </nav>

      <style>
        ol.breadcrumb {
          padding: 10px 16px;
          list-style: none;
          background-color: #eee;
        }
        </style>

<form action="{{url('/')}}/admin-dashboard" method="get">

  {{ csrf_field() }}

      <h2> Admin Login </h2>
      <br>

      @if ($message = Session::get('error'))
    <div class="alert alert-success">
        <strong> {{ $message }} </strong>
    </div>
@endif

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required/>
    
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    
    </div>

    <br>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="secret" required>
    
      @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
      
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me </label>
        <a href="{{url('account-recovery')}}">Forgot password</a>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Login</button>


  </div>
  </form>

  <br>
  <br>


@include('footer')


</body>
</html>