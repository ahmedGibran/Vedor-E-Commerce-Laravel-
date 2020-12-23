@include('admin.admin.nav')
<head>
  <title>تسجيل الدخول</title>
</head>
<body>

<!-- log in  Form -->
<div class="main">
<section class="sign-up" >
  <div class="container">
    <div class="signin-content">
      <div class="signin-image">
        <figure><a href="{{url('home/categories')}}"><img src="{{asset('assets/img/VedorLogo.png')}}" alt="Vedor Logo" ></a>
          <h2 style="font-family:pacifico;">Vedor</h2>
        </figure>
        <a href="{{url('home/signup')}} " class="signup-image-link">انشاء حساب جديد!</a>
      </div>


      <div class="signin-form">
        <h2 class="form-title">صفحة تسجيل دخول</h2>
        <form method="get" action="/check_users" class="register-form"  id="login-form">
          <div class="form-group">
            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="email" name="email" id="email" placeholder="Email"/>
          </div>
          <div class="form-group">
            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="password" id="your_pass" placeholder="Password"/>
          </div>
          <div class="form-group">
            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
            <label for="remember-me" class="label-agree-term"><span><span></span></span>تذكرني</label>
          </div>
          <div class="form-group form-button">
            <input type="submit" name="signin" id="signin" class="form-submit" value="تسجيل دخول"/>
          </div>
        </form>

        <div class="social-login">
          <span class="social-label">او التسجيل مع </span>
          <ul class="socials">
            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>
