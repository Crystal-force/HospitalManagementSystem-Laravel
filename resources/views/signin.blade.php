<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>EVENT SUPERBILL</title>

        <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  	    <link rel="stylesheet" href="{{ asset('assets/styles/user_login.css') }}">


    </head>
    <body>
        <div class="wrapper fadeInDown user-login-background">
          <div class="alert alert-warning" role="alert" id="user_login_success">
            Username or Password error! Try again after checked the information.
          </div>
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="assets/images/logo.png" id="icon" alt="User Icon" />
                </div>

                <form action="p-check" method="post">
                    @csrf
                    <input type="text" id="login" class="fadeIn second" name="p_name" placeholder="Username" />
                    <input type="text" id="password" class="fadeIn third" name="p_pwd" placeholder="Password" />
                    <input type="button" class="fadeIn fourth" id="send" value="Log In" />
                </form>
            </div>
        </div>
    </body>

    <footer>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#send").click(function() {
                $.ajax({
                    url : "/p-check",
                    type: 'POST',
                    dataType: "text",
                    data: { 
                        p_name : $("#login").val(),
                        p_pwd  : $("#password").val()
                    },
                    success: function (res) {
                        if(res) {
                            window.location.href = "/firstpage";
                        } else {
                          $("#user_login_success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                        }
                    }
                });
            })
        </script>
    </footer>

</html>

