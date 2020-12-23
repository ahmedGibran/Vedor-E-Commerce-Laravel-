@include('admin.admin.nav')
<head><title>صفحة انشاء حساب جديد</title>
</head>
<body>
<!-- Sign up form -->
<div class="main">

<section class="sign-up">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form col-6">
                <h2 class="form-title">انشاء حساب</h2>
                <form method="POST"  action="home/signup/new" class="register-form" id="register-form">

                    <div class="form-row">
                        <div class="col">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="first_name" id="" placeholder="الأسم الأول"/>
                        </div>
                        <div class="col"><input type="text" name="last_name" id="" placeholder="الأسم الأخير"/></div>
                    </div>

                    <div class="form-row">


                        <div class=" col btn-group mt-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-sm btn-success gender-btn">
                                <input class="d-none" type="radio" name="gender" value="m">ذكر
                            </button>
                            <button type="button" class="btn btn-sm  btn-success gender-btn">
                                <input class="d-none" type="radio" name="gender" value="f">انثى
                            </button>
                        </div>
                    </div>

                    <div class=" form-row form-group" >
                        <label for="phone"> <i class="zmdi zmdi-phone"></i></label>
                        <input type="phone" name="phone" id="phone" placeholder="رقم الهاتف"/>
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <label for="address"> <i class="zmdi zmdi-pin"></i></label>
                            <input type="text" name="shipping_address" id="address" placeholder="العنوان"/>
                        </div>
                        <div class=" col dropdown btn-group mt-2"  aria-label="AddressDropDown">
                            <a class="btn btn-sm btn-success  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> اختيار مدينة
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">بنغازي</a>
                                <a class="dropdown-item" href="#">طرابلس</a>
                                {{--<a class="dropdown-item" href="#"></a>--}}
                            </div>

                        </div>
                    </div>



                    <div class="form-group form-row">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group form-row">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                    </div>

                    <div class="form-group form-row">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button form-row">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="تسجيل"/>
                    </div>
                </form>
            </div>
            <div class="signup-image col-6">
                <figure><a href="{{url('admin.admin.index')}}"><img src="{{asset('assets/img/VedorLogo.png')}}" alt="Vedor Logo" ></a>
                    <h2 style="font-family:pacifico;">Vedor</h2>
                </figure>
                <a href="{{url('/')}}" class="signup-image-link">! لدي حساب بالغعل</a>
            </div>
        </div>
    </div>
</section>
</div>
<script>
    $(document).ready(function () {
        $('body').on('click', '.gender-btn', function () {
            $('.gender-btn').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
