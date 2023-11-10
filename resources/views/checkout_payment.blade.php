<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment | E-Mart</title>
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
<br>

<form action="" method="get">

<div class="container">

    <div class="container-xl px-4 mt-4">

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('welcome')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </svg> Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('account-profile')}}">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
          </ol>
        </nav>
    </div>

    
  <div class="p-2 mb-10 bg-dark text-white w-100 vh-50 p-3"><h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-4-square-fill" viewBox="0 0 16 16">
    <path d="M6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265Z"/>
  </svg> Checkout Payment</h5>
    <br>

    <center>

    <div class="mainWrapper">
      <div class="statusBar">
        <span class="pBar"></span>
        <div class="node done n0 done nConfirm0">
          <div class="main done m0 done nConfirm0">1</div>
          
          <span class="text t0 done nConfirm0"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</span>
        </div>

        <div class="node n1 done nConfirm1">
          <div class="main done m0 done nConfirm1">2</div>
          <span class="text t0 done nConfirm1"> <i class="fa fa-user"></i>Details</span>
        </div>

        <div class="node n2 done nConfirm2">
          <div class="main done m0 done nConfirm2">3</div>
          <span class="text t2  done  nConfirm2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg></i>Shipping</span>
        </div>
        <div class="node n3 done nConfirm3">
          <div class="main done m0 done nConfirm3">4</div>
          <span class="text t3  done  nConfirm3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
          </svg> Payment</span>
        </div>
        <div class="node n4 done nConfirm4">
          <div class="main m4 nConfirm4"></div>
          <span class="text t4 nConfirm4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
          </svg> Review </span>
        </div>
      </div> 
    </div>
  </div>
  </div>
</div>
</div>

<br>
<br>
<br>
<br>


   

    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">

                    <h3> Choose a Payment Method </h3>

                    <div class="w-100 p-3">
                        <!-- Account details card-->
                        <div class="card mb-1">
                            <div class="p-3 mb-2 bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                              </svg>  Pay with Credit Card 
                            </div>

                            <br>
                            <br>
                    <!-- Credit card form tabs -->
            
                </div>

                <!-- End -->
                <!-- Credit card form content -->
                <div class="tab-content">
                    <!-- credit card info-->
                    <div id="credit-card" class="tab-pane fade show active pt-3">
                        <form action="{{''}}" name="myForm" method="GET">
                            <div class="form-group">
                                <label for="username">
                                    <h6>Card Owner</h6>
                                </label>
                                <input type="text" name="username" placeholder="Card owner name" required class="form-control" name="card_owner" />
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">
                                    <h6>Card number</h6>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="card_number" placeholder="Valid card number" class="form-control" required />
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>
                                            <span class="hidden-xs">
                                                <h6>Expiration Date</h6>
                                            </span>
                                        </label>
                                        <div class="input-group"><input type="text" placeholder="MM" name="expire_date" class="form-control" required /> 
                                          <input type="text" placeholder="YY" name="expire_date" class="form-control" required /></div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                        </label>
                                        <input type="text" required class="form-control" name="cvv" />
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 p-3">
                                <!-- Account details card-->


                                
                                <div class="card mb-1">
                                    <div class="p-3 mb-2 bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                      </svg>   Cash On Delivery
                                    </div>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cash_on_delivery">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Case On Delivery Payment
                                </label>
                              </div>

                             
                        </form>
                    </div>
                    <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group">
                            <label class="radio-inline"> <input type="radio" name="optradio" checked /> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5" />International </label>
                        </div>
                        <p>
                            <button type="button" class="btn btn-primary"><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button>
                        </p>
                        <p class="text-muted">
                            Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.
                        </p>
                    </div>
                    <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group">
                            <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label>
                            <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>
                                &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <button type="button" class="btn btn-primary" align="right"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button>
                            </p>
                        </div>
                        <p class="text-muted">
                            Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.
                        </p>
                    </div>
                    <!-- End -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script>

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

</script>
   
<br>
<br> 

<div class="container">
    <tr>
        <div class="text-right">

        <td><a href="{{url('checkout_shipping')}}" class="btn btn-secondary" id="back"><i class="fa fa-angle-left"></i> Back to Checkout Shipping </a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td><a href="{{url('chackout-review')}}" class="btn btn-primary" id="next"> Proceed to Review <i class="fa fa-angle-right"></i></a></td>
      </tr>
      </div>

    </div>
      
    <br>
    <br> 





<style>

    :root {
        --green: #1cbd2c;
        --grey: #c4c4c4;
        --white: #ffffff;
        --padding: 1em;
    }
    
    * {
        padding: 0;
        border: 0;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    
    
    .mainWrapper {
        width: 100ch;
        min-width: 40ch;
        max-width: 75vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .statusBar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0;
        width: 100%;
        position: relative;
        cursor: default;
    }
    
    .statusBar::before {
        content: "";
        height: 0.3em;
        background-color: var(--grey);
        position: absolute;
        left: var(--padding);
        right: var(--padding);
    }
    
    .pBar {
        content: "";
        height: 0.3em;
        border-radius: 0 0 0.15em 0.15em;
        background-color: var(--green);
        max-width: 100%;
        margin: 10px #000000 solid;
        position: absolute;
        left: 0;
        width: 0%;
    }
    
    .statusBar > .node {
        background-color: var(--grey);
        height: 1.2em;
        width: 1.2em;
        border-radius: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .node > .text {
        font-weight: 200;
        color: var(--grey);
        text-align: center;
        position: absolute;
        top: 2.5em;
        cursor: ;
    }
    
    .node.done {
        background-color: var(--green);
    }
    
    .node > .text.done {
        color: var(--green);
    }
    
    .node > .main {
        position: absolute;
        border: 0.2em var(--grey) solid;
        width: 0;
        height: 0;
        border-radius: 100%;
    }
    
    .node > .main.done {
        border: 0.2em var(--green) solid;
        width: 2em;
        height: 2em;
        border-radius: 100%;
    }
    
    .mainWrapper > .buttonHolder {
        margin-top: 3em;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .button {
        padding: 0.5em;
        padding-left: 1em;
        padding-right: 1em;
        margin: 1em;
        font-size: 1.3em;
        border-radius: 1.5em;
        cursor: pointer;
    }
    .button.b-next {
        background-color: var(--green);
        color: var(--white);
    }
    
    .button.b-next:hover {
        box-shadow: 3px 5px 6px 0px rgba(0, 0, 0, 0.2);
    }
    
    .button.disabled,
    .button.disabled:hover {
        opacity: 30%;
        cursor: default;
    }
    
    .button.b-next.disabled:hover {
        box-shadow: none;
    }
    
    .button.b-back {
        box-shadow: 0px 0px 0px 0.2em var(--green) inset;
        background-color: var(--white);
        color: var(--green);
    }
    
    .made {
        position: absolute;
        bottom: 0.7em;
    }
    
    .made > .credit {
        opacity: 40%;
        color: #4b4b4b;
        text-align: center;
    }
    
        </style>
    
        <script>
    
    var state = 0;
    var stateMax = 4;
    
    function next() {
        console.log("Next", state);
        // browser side functions here
    }
    
    function back() {
        console.log("Back", state);
        // browser side functions here
    }
    
    $("#next").click(function () {
        if (state < stateMax) {
            next();
    
            state += 1;
    
            // Enables 'back' button if disabled
            $("#back").removeClass("disabled");
    
            // Adds class to make nodes green
            $(".nConfirm" + state).each(function () {
                $(this).addClass("done");
            });
    
            // Progress bar animation
            var pBar = (state / stateMax) * 100;
            $(".pBar").css("width", `${pBar}%`);
    
            // Disables 'next' button if end of steps
            if (state == 4) {
                $("#next").addClass("disabled");
            }
        }
    });
    
    $("#back").click(function () {
        if (state > 0) {
            back();
    
            // Enables 'next' button if disabled
            $("#next").removeClass("disabled");
    
            // removes class that makes nodes green
            $(".nConfirm" + state).each(function () {
                $(this).removeClass("done");
            });
    
            state -= 1;
    
            // Progress bar animation
            var pBar = (state / stateMax) * 100;
            $(".pBar").css("width", `${pBar}%`);
    
            // Disables 'back' button if end of steps
            if (state == 0) {
                $("#back").addClass("disabled");
            }
        }
    });
    
    
          </script>
    
          <br>
          <br>
          <br>
          <br>


          @include('footer')

</body>
</html>