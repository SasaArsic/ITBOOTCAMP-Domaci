<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="frontpage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
  
</body>
</html>
<?php
    if(!isset($_SESSION['login_id']) && !isset($_COOKIE['login_id'])){?>
<div class="container-fluid">
    <div class="wrapper">
      <div class="h1 text-center">
        <a onclick="appear()" href="#form">Pick a movie for tonight!!</a>
      </div>
      <script>
        function appear() {
          document.getElementById("form").style.display = "inline-block";
        }
      </script>
    <div class='form1'>
      <form
        id="form"
        class="row gy-2 gx-3 align-items-center"
        action="login/check_login.php"
      >
       
        <div class="col-auto">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              id="autoSizingInputGroup"
              placeholder="Username"
              name='username'
            />
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <input
              type="password"
              class="form-control"
              id="autoSizingInputGroup"
              placeholder="Password"
              name='password'
            />
          </div>
        </div>

        <div class="col-auto">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="autoSizingCheck"
              name='remember'
            />
            <label class="form-check-label" for="autoSizingCheck">
              Remember me
            </label>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-success"  >Log-in</button> <a style='color:white;' href='sign-upform.html'> Sign-up </a>
        </div>
       
      </div>
      </form>
  <?php   }else{?>
          
          <div class="container-fluid">
            <div class="wrapper">
              <div class="h1 text-center">
                <a  href="index2.php">Pick a movie for tonight!!</a>
                <br>
                <a href='login/logout.php'>LOG OUT</a>
              </div>
            </div>
          </div>

      <?php  } ?>