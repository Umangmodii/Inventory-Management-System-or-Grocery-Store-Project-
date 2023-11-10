<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Confirm Order | E-Mart </title>
</head>
<body>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    @include('header')

    <br>
    <br>

    <center>
    
        <br>
            <br>
            <br>

    <div class="card border-info mb-3" style="max-width: 90rem; height: 360px;">
        <div class="btn btn-primary">Confirmation Order</div>
        <div class="card-body text-info">
            <br>
            <br>
         
          <h2 class="text-dark fw-bolder"><B>Thank you for your Order! </B></h2>
          <br>
          <h5 class="text-dark"><p class="fw-normal"> Your Order has been placed and will be processed as soon as possible. </p></h5>
          <h5 class="text-dark fw-normal">Make sure you make note of your order number.</h5>
        
<br>
<br>

          <div class="container">
            <tr>
                <div class="text-right">
        
                <td><a href="{{url('welcome')}}" class="btn btn-secondary btn-lg" id="back"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg> Back to Shopping </a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td><a href="{{url('order_tracking')}}" class="btn btn-primary  btn-lg" id="next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg> Tracking Order <i class="fa fa-angle-right"></i></a></td>
              </tr>
              </div>
        
            </div>

        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      
     

    @include('footer')

</body>
</html>