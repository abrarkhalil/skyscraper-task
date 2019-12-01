<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skyscrapers Task</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="http://textillate.js.org/assets/animate.css" rel="stylesheet">

    <!-- Styles -->
    <style>
      html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
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
      .title {
      font-size: 48px;
      }
      .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
      }
      .m-b-md {
      margin-bottom: 30px;
      }
      #menu a{
        color: #0e5495;
      }
    </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      <div class="top-right links" id="menu" >
        <a target="blank" href="/superadmin/login">Super Admin</a>
        <a target="blank" href="/admin/login">Admin</a>
        <a target="blank" href="/user/login">User</a>
        <a target="blank" href="/blogger/login">Blogger</a>
      </div>
      <div class="content">
        <div class="title m-b-md">
          <img id="logo_image" src="../assets/layouts/layout/img/logo.png" alt="">
          <h4  class="tlt">Login To Your Desired Account.......</p>
        </div>
      </div>
    </div>
    <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://textillate.js.org/jquery.textillate.js"></script>
    <script src="http://textillate.js.org/assets/jquery.lettering.js"></script>
    <script type="text/javascript">
   $(document).ready(function () {
        $('#logo_image').addClass('animated bounceInRight');
        //$('#menu').addClass('animated bounceInRight');
        $('.tlt').textillate();
        $('.tlt').textillate({ in: { effect: 'rollIn' } });
      });

    </script>
  </body>
</html>