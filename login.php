<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }
    body {
      background: #87ceeb;
      overflow: hidden;
    }
    ::selection {
      background: skyblue;
    }
    .container {
      max-width: 440px;
      padding: 0 20px;
      margin: 170px auto;
    }
    .wrapper {
      width: 100%;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
    }
    .wrapper .title {
      height: 90px;
      background: #16a085;
      border-radius: 5px 5px 0 0;
      color: #fff;
      font-size: 30px;
      font-weight: 600;
      display: flex;
      mouse: viewport;
      align-items: center;
      justify-content: center;
    }
    .wrapper form {
      padding: 30px 25px 25px 25px;
    }
    .wrapper form .row {
      height: 45px;
      margin-bottom: 15px;
      position: relative;
    }
    .wrapper form .row input {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 60px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    form .row input:focus {
      border-color: #16a085;
      box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
    }
    form .row input::placeholder {
      color: #999;
    }
    .wrapper form .row i {
      position: absolute;
      width: 47px;
      height: 100%;
      color: #fff;
      font-size: 18px;
      background: #16a085;
      border: 1px solid #16a085;
      border-radius: 5px 0 0 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .wrapper form .pass {
      margin: -8px 0 20px 0;
    }
    .wrapper form .pass a {
      color: #16a085;
      font-size: 17px;
      text-decoration: none;
    }
    .wrapper form .pass a:hover {
      text-decoration: underline;
    }
    .wrapper form .button input {
      color: #fff;
      font-size: 20px;
      font-weight: 500;
      padding-left: 0px;
      background: #16a085;
      border: 1px solid #16a085;
      cursor: pointer;
    }
    form .button input:hover {
      background: #12876f;
    }
    .wrapper form .signup-link {
      text-align: center;
      margin-top: 20px;
      font-size: 17px;
    }
    .wrapper form .signup-link a {
      color: #16a085;
      text-decoration: none;
    }
    form .button::after {
      color: #12876f;
    }
  </style>

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="authentication.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Email" name="email" required />
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              placeholder="Password"
              required
              maxlength="10" name="password"
            />
          </div>

          <div class="row button">
            <input type="submit" value="Login" />
          </div>
          <a href="list.php" style="text-decoration: none">Visit List</a>
        </form>
      </div>
    </div>
  </body>
</html>
