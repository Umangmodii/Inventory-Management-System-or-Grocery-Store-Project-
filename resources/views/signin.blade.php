<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign In | User</title>

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


<form action="{{url('welcome')}}" method="GET" class="g-10 needs-validation" novalidate>
    <br>
    <div class="container">

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('welcome')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sign in</li>
        </ol>
      </nav>

      <style>
        ol.breadcrumb {
          padding: 10px 16px;
          list-style: none;
          background-color: #eee;
        }
        </style>


      <h2> Sign in </h2>
      <br>

      @csrf

    <div class="form-group">
      <label for="validationCustom01">Email address</label>
      <input type="text" name="email" class="form-control w-100" id="validationCustom01" required/>
      <div class="valid-feedback">
        *Required Email
      </div>

    </div>

    <br>

    <div class="form-group">
      <label for="validationCustom02">Password</label>
      <input type="text" name="password" class="form-control w-100" id="validationCustom02" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <div class="valid-feedback">
        *Required Password
    </div>
    </div>


    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me </label>
        <a href="{{url('recovery-password')}}">Forgot password</a>
    </div>

    <br>
    
    <div class="">
    <button type="submit" class="btn btn-primary"> Sign in</button>
    </div>
    
    <br>
    <br>
  </div>
  </div>
  </form>


  <script>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
    
            form.classList.add('was-validated')
          }, false)
        })
    })()
    
    </script>

  

@include('footer')

</body>
</html>
