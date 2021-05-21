<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID EVENT SUPERBILL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            .content h1{
              color:black;
              font-weight: 700;
              font-family: auto;
              margin-bottom: 30px
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .today-date{
                color:black;
                font-size: 24px;
                font-weight: 700;
                font-family: auto;
            }
            .each-tab{
              display: flex;
              
            }
            .each-tab-title {
              color:black;
              font-size: 24px !important;
              font-weight: 700;
              font-family: auto;
              margin-right: 10px;
              margin-top: 6px
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          
            <div class="container">
                <div class="content">
                  <h1>COVID EVENT SUPERBILL</h1>
                </div>
                <div class="container">
                  <div class="row col-xs-12 col-md-12">
                    <p class="today-date">DATE: <span id="date"></span></p>
                  </div>
                  
                  <div class="content">
                    <p class="today-date">PATIENT INFORMATION</p>
                  </div>

                  <div class="row col-xs-12 col-md-12">
                    <div class="col-md-4">
                      <div class="each-tab">
                        <label for="formGroupExampleInput" class="each-tab-title">NAME:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="please write name" style="font-size: 22px">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="each-tab">
                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                            <input class="form-control" type="text" readonly />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
       
        </div>
    </body>
<footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
      var d = new Date();
      var month = d.getMonth()+1;
      var day = d.getDate();

      var output = d.getFullYear() + '/' +
          (month<10 ? '0' : '') + month + '/' +
          (day<10 ? '0' : '') + day;
          document.getElementById("date").innerHTML = output;

          $(function(){
            $('.datepicker').datepicker({
                format: 'mm-dd-yyyy'
              });
          });
          $(function () {
            $("#datepicker").datepicker({ 
                  autoclose: true, 
                  todayHighlight: true
            }).datepicker('update', new Date());
          });
    </script>
    
</footer>
    
</html>
