<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address-Details | E-Mart </title>

    @include('cdn')

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

    <div class="container">

        <div class="container-xl px-4 mt-4">
  
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('welcome')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg> Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('account-profile')}}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
  
            
          
      <div class="p-2 mb-10 bg-dark text-white w-100 vh-50 p-3"><h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm4.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
</svg> Checkout Shipping Address</h5>
        <br>

        <center>
  
        <div class="mainWrapper">
          <div class="statusBar">
            <span class="pBar"></span>
            <div class="node n0 done nConfirm0">
              <div class="main done m0 done nConfirm0">1</div>
              
              <span class="text t0 done nConfirm0"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</span>
            </div>
            <div class="node n1 done nConfirm1">
              <div class="main done m0 done nConfirm1">2</div>
              <span class="text t0 done nConfirm1"> <i class="fa fa-user"></i>Details</span>
            </div>
            <div class="node n2 nConfirm2">
              <div class="main m2 nConfirm2"></div>
              <span class="text t2 nConfirm2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg></i>Shipping</span>
            </div>
            <div class="node n3 nConfirm3">
              <div class="main m3 nConfirm3"></div>
              <span class="text t3 nConfirm3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
              </svg> Payment</span>
            </div>
            <div class="node n4 nConfirm4">
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

              <div class="container">

                <div class="col-xl-13">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="p-3 mb-2 bg-primary text-white"> Shipping Address</div>
                        <div class="card-body">

                            <div class="container-xl">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">                                       

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a New Address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          
    

                @csrf

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Country</label>
                    <input type="text" class="form-control" name="country">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">State</label>
                    <input type="text" class="form-control" name="state">
                  </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">City</label>
                      <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Zip Code</label>
                      <input type="text" class="form-control" name="zipcode">
                    </div>
                  </div>
                

                <div class="form-group">
                  <div class="form-group">
                    <label for="inputCity">Line 1</label>
                    <input type="text" class="form-control" name="line1">
                  </div>
        
                  <div class="form-group">
                    <label for="inputZip">Line 2</label>
                    <input type="text" class="form-control" name="line2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Make this Address Primary
                    </label>
                  </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Address</button>
            </div>
        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                            <form action="{{url('/check_address')}}" method="get" class="row g-3 needs-validation">    
                                @csrf

                                <br>
                                         
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                  
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="small mb-1" for="inputFirstName">Name</label>
                                        <input class="form-control" type="text"  name="name" autocomplete="name" id="validationCustom01" >
                                        <div class="valid-feedback">
                                            Enter your name
                                        </div>

                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="small mb-1" for="inputLastName">Phone name</label>
                                        <input class="form-control" type="text" id="validationCustom02" name="phone">
                                        <div class="valid-feedback">
                                          Enter your phone number
                                      </div>

                                      </div>
                              

                                <div class="mb-3">
                                    <label for="validationCustom03" class="small mb-1" for="inputUsername">Address</label>
                                    <textarea class="form-control rounded-0" id="validationCustom03" rows="3" name="address"></textarea>
                                      <div class="valid-feedback">
                                        Enter your address
                                    </div> 
                                    </div>
    
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="small mb-1" for="inputOrgName">State</label>
                                        <input class="form-control"  type="text"  id="validationCustom04" name="state">
                                        <div class="valid-feedback">
                                          Enter your state
                                      </div>                                    
                                  </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="small mb-1" for="inputLocation">City</label>
                                        <input class="form-control"  type="text"  id="validationCustom05" name="city">                                                          
                                    <div class="valid-feedback">
                                      Enter your city
                                  </div>
                                </div>

                                </div>

                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                    <label class="form-check-label" for="invalidCheck">
                                      Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                      You must agree before submitting.
                                    </div>
                                  </div>
                                </div>
                             
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save Address</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

              </div>

              <div class="container">
            <tr>
                <div class="text-right">

                <td><a href="{{url('cart')}}" class="btn btn-secondary" id="back"><i class="fa fa-angle-left"></i> Back to Cart </a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td><a href="{{url('checkout_shipping')}}" class="btn btn-primary" id="next"> Proceed to Shipping <i class="fa fa-angle-right"></i></a></td>
              </tr>
              </div>

            </div>
              
            <br>
            <br>  

        </div>
      </div>


    @include('footer')

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


</body>
</html>