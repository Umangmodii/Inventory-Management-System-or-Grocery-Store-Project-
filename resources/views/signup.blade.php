<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Sign Up | User </title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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


<form action="{{ url('signup-message') }}" method="get" class="g-10 needs-validation" novalidate >

    <div class="container">

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
          </svg> &nbsp; 
          <li class="breadcrumb-item"><a href="{{url('welcome')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sign up</li>
        </ol>
      </nav>

      <style>
        ol.breadcrumb {
          padding: 10px 16px;
          list-style: none;
          background-color: #eee;
        }
        </style>

      <h2> Sign Up </h2>
      <br>

      <div class="row">

      <div class="col-md-6 mb-4">
        <div class="form-outline">

          @if(Session::has('success'))

          <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
          </div>

          <br>
          <br>
          
          @endif

          @csrf

          <label class="form-label" for="form3Example1" for="validationCustom01">First name</label>
          <input type="text" id="firstname" class="form-control" name="firstname" id="validationCustom01"  required/>
          <div class="valid-feedback">
            *Required first name
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="form-outline">
            <label class="form-label" for="validationCustom02">Last name</label>
          <input type="text" id="lastname" name="lastname" class="form-control"  id="validationCustom02" required/>
          <div class="valid-feedback">
            *Required last name
          </div>
        </div>
      </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="validationCustom03">Email address</label>
      <input type="text" id="email" name="email" class="form-control" id="validationCustom03"  required/>
      <div class="valid-feedback">
        *Required Email
      </div>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="validationCustom04">Password</label>
      <input type="text" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  id="validationCustom04"  required/>
    <div class="valid-feedback">
      *Required Password
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

    <br>

    <button type="submit" class="btn btn-primary">Sign Up</button>

    <br>
    <br>

    <p class="mb-5 pb-lg-2" style="color: #393f81;"> User can login account? <a href="{{url('signin')}}"
      style="color: #393f81;">Sign in</a></p>    

  </div>
  </form>

<style>

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style>

<script>

$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text","","password");
} else {
  input.attr("type", "password");
}
});

</script>

{{-- Validation --}}

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
