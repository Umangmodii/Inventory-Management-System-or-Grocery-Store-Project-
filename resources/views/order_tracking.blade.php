<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking Order | E-Mart </title>
</head>
<body>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    @include('header')

    <div class="container">

        <div class="container-xl px-4 mt-4">
    
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('welcome')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg> Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('account-profile')}}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tracking Order</li>
              </ol>
            </nav>
        </div>
        <br>
        <br>

    <div class="container">
    
        <div class="p-3 mb-2 bg-dark text-white"><h4>Tracking Order</h4></div>

    </div>

        <div class="container">
            <div class="row">

                <center>
                                  <div class="col-40 col-md-10 hh-grayBox pt100 pb20">
                                      <div class="row justify-content-between">
                                          <div class="order-tracking completed">
                                            <span class="is-complete"></span>
                                              <p>First Step<br>
                                                <span>Order placed</span></p>
                                          </div>
                                          <div class="order-tracking completed">
                                              <span class="is-complete"></span>
                                              <p>Second Step<br>
                                                <span>Processing order</span></p>
                                          </div>
                                          <div class="order-tracking completed">
                                              <span class="is-complete"></span>
                                              <p>Third Step<br>
                                                <span>Quality Chacked</span></p>
                                          </div>
                                          <div class="order-tracking">
                                            <span class="is-complete"></span>
                                            <p>Fourth Step<br>
                                                <span>Product dispatched</span></p>
                                        </div>
                                        
                                    </center>
                                      </div>
                                  </div>
                              </div>

                              <br>


                              <div class="container">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                   <h5>   Notify me when order is delivered. </h5>
                                    </label>
                                  </div>

                            <br>

                              <div class="form-group">
                              <button type="submit" class="btn btn-primary d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="26" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
                                <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z"/>
                              </svg>  View Order Details</button>
                            </div>
                        </div>
  

          

          
         
          <br>
          <br>

          

          <style>

.hh-grayBox {
	background-color: whitesmoke ;
	margin-bottom: 20px;
	padding: 80px;
  margin-top: 20px;
}
.pt45{padding-top:45px;}
.order-tracking{
	text-align: center;
	width: 25%;
	position: relative;
	display: block;
}
.order-tracking .is-complete{
	display: block;
	position: relative;
	border-radius: 100%;
	height: 30px;
	width: 30px;
	border: 0px solid #AFAFAF;
	background-color: #f7be16;
	margin: 0 auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
	z-index: 2;
}
.order-tracking .is-complete:after {
	display: block;
	position: absolute;
	content: '';
	height: 14px;
	width: 7px;
	top: -2px;
	bottom: 0;
	left: 5px;
	margin: auto 0;
	border: 0px solid #AFAFAF;
	border-width: 0px 2px 2px 0;
	transform: rotate(45deg);
	opacity: 0;
}
.order-tracking.completed .is-complete{
	border-color: #27aa80;
	border-width: 0px;
	background-color: #27aa80;
}
.order-tracking.completed .is-complete:after {
	border-color: #fff;
	border-width: 0px 3px 3px 0;
	width: 7px;
	left: 11px;
	opacity: 1;
}
.order-tracking p {
	color: #A4A4A4;
	font-size: 16px;
	margin-top: 8px;
	margin-bottom: 0;
	line-height: 20px;
}
.order-tracking p span{font-size: 14px;}
.order-tracking.completed p{color: #000;}
.order-tracking::before {
	content: '';
	display: block;
	height: 3px;
	width: calc(100% - 40px);
	background-color: #f7be16;
	top: 13px;
	position: absolute;
	left: calc(-50% + 20px);
	z-index: 0;
}
.order-tracking:first-child:before{display: none;}
.order-tracking.completed:before{background-color: #27aa80;}


            </style>


    </div>

    @include('footer')
    
</body>
</html>