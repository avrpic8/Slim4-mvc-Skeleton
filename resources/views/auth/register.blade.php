<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>قالب مدیریتی مدیران</title>
    @include('layout.head')

</head>
<body class="fix-header active-ripple theme-blue">
<!-- BEGIN LOEADING -->
<div id="loader">
    <div class="spinner"></div>
</div><!-- /loader -->
<!-- END LOEADING -->

<!-- BEGIN WRAPPER -->
<div class="fixed-modal-bg"></div>
<a href="#" class="btn btn-info btn-icon btn-round btn-lg" id="toggle-dark-mode">
    <i class="icon-bulb"></i>
</a>
<div class="modal-page shadow">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <p class="text-center m-t-30 m-b-40">
                    <i class="icon-user-following border img-circle font-xxxlg p-20"></i>
                </p>
                <h2 class="text-center m-b-20">ثبت نام </h2>
                <hr>

                <form id="advanced-form" method="post" action="#">
                    <div class="form-group">
                        <label class="sr-only control-label" for="firstname">نام</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-note"></i>
                                    </span>
                            <input type="text" class="form-control round" id="firstname" name="firstname" placeholder="نام">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="sr-only control-label" for="lastname">نام خانوادگی</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-note"></i>
                                    </span>
                            <input type="text" class="form-control round" id="lastname" name="lastname" placeholder="نام خانوادگی">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="sr-only control-label" for="username">نام کاربری</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-user"></i>
                                    </span>
                            <input type="text" class="form-control round" id="username" name="username" placeholder="نام کاربری">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="sr-only control-label" for="email">رایانامه</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                            <input type="text" class="form-control round ltr text-left" id="email" name="email" placeholder="مثال:info@site.com">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="sr-only control-label" for="password">رمز عبور</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                            <input type="password" class="form-control round ltr text-left" id="password" name="password" placeholder="رمز عبور">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="sr-only control-label" for="confirm_password">تکرار رمز عبور</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                            <input type="password" class="form-control round ltr text-left" id="confirm_password" name="confirm_password" placeholder="تکرار رمز عبور">
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group round">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="agree" name="agree" value="agree">
                                    <a href="#">قوانین و مقررات</a>
                                    سایت را می پذیرم
                                </label>
                            </div><!-- /.checkbox -->
                        </div><!-- /.input-group-->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-round btn-block" name="signup" value="Sign up">
                            <i class="icon-check"></i>
                            ثبت نام
                        </button>
                    </div><!-- /.form-group -->
                </form>

                <hr class="m-b-30">
                <a href="forget.html" class="btn btn-default btn-round btn-block m-b-10">
                    <i class="icon-refresh font-lg"></i>
                    بازیابی رمز  عبور
                </a>
                <a href="{{route('auth.login.view')}}" class="btn btn-default btn-round btn-block">
                    <i class="icon-user-follow font-lg"></i>
                    ثبت نام کرده اید؟ وارد شوید!
                </a>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.modal-page -->
<!-- END WRAPPER -->

<!-- BEGIN JS -->
@include('layout.script')

<!-- BEGIN PAGE JAVASCRIPT -->
<script src="{{asset('assets/js/pages/register.js')}}"></script>
<!-- END PAGE JAVASCRIPT -->

</body>
</html>
