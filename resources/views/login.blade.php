<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng Nhập Tài Khoản</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/asset/css/login.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/asset/images/logonew.webp') }}">
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container register-container">
        <form action="#">
          <h1>Đăng Kí Tài Khoản</h1>
          <input type="text" placeholder="Họ và tên" id="name" class="name"/>
          <input type="email" placeholder="email" id="email" class="email"/>
          <input type="password" placeholder="password" id="passwordd" class="passwordd"/>
          <div class="content" >
          <div class="checkbox">
            <input type="checkbox" id="checkboxx" onclick="hienthipassdk()" />
            <label for="checkbox">Hiện mật khẩu</label>
          </div>
          </div>
          <button onclick="AddRow()">Đăng Kí</button>
          <span>sử dụng tài khoản của bạn</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="https://www.facebook.com/login" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="https://www.instagram.com/accounts/login/" class="social"><i class="lni lni-instagram-fill"></i></a>
          </div>
        </form>
      </div>

      <div class="form-container login-container" id="page2_id1">
        <form action="/check_login" method="POST">
          <h1>Đăng Nhập</h1>
          <input type="email" name="email" placeholder="email" id="email" class="email"/>
          <input type="password" name="password" placeholder="password" id="password" class="password"/>
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" id="checkbox" onclick="hienthipasslogin()" />
              <label for="checkbox">Hiện mật khẩu</label>
            </div>
            <div class="pass-link">
              <a href="#">Quên mật khẩu?</a>
            </div>
          </div>
          <button >Đăng Nhập</button>
          <span>sử dụng tài khoản của bạn</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="https://www.instagram.com/accounts/login/" class="social"><i class="lni lni-instagram-fill"></i></a>
          </div>
          @csrf
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">
                XIN CHÀO<br />
              ADMIN
            </h1>
            <p>Nếu bạn có tài khoản, hãy đăng nhập ở đây và sử dụng quyền admin nhé</p>
            <button class="ghost" id="login">
              Đăng Nhập
              <i class="lni lni-arrow-left register"></i>
            </button>
          </div>

          <div class="overlay-panel overlay-right">
            <h1 class="title">
              Hello, <br />
              future admin
            </h1>
            <p>
              Bạn cần phải tạo tài khoản và được ADMIN xác nhận mới có thể đăng nhập !!!
            </p>
            <button class="ghost" id="register">Đăng ký
              <i class="lni lni-arrow-right register"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('frontend/asset/js/login.js')}}"></script>
  </body>
</html>
