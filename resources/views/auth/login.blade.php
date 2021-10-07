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
                <div class="logo-con m-t-10 m-b-10">
                    <img src="assets/images/logo-dark.png" class="dark-logo center-block img-responsive" alt="logo">
                    <img src="{{asset('assets/images/logo.png')}}" class="light-logo center-block img-responsive" alt="logo">
                </div><!-- /.logo-con -->

                <h2 class="text-center m-b-20">وارد شوید</h2>
                <hr>
                <form id="form" class="m-t-30 m-b-30" action="dashboard.html" method="POST" role="form">
                    <div class="form-group">
                        <label for="email" class="sr-only">رایانامه</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                            <input id="email" class="form-control ltr text-left" type="email" name="email" required>
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="password" class="sr-only">رمز عبور</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                            <input id="password" class="form-control ltr text-left" type="password" minlength="5" required>
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <p>
                        <button class="btn btn-info btn-round btn-block" type="submit">
                            <i class="icon-paper-plane font-lg"></i>
                            ورود
                        </button>
                    </p>
                </form>
                <hr class="m-b-30">
                <a href="forget.html" class="btn btn-default btn-round btn-block m-b-10">
                    <i class="icon-refresh font-lg"></i>
                    بازیابی رمز  عبور
                </a>
                <a href="{{route('auth.register.view')}}" class="btn btn-default btn-round btn-block">
                    <i class="icon-user-follow font-lg"></i>
                    حساب ندارید، ثبت نام کنید!
                </a>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.modal-page -->
<!-- END WRAPPER -->

@include('layout.script')
<!-- BEGIN PAGE JAVASCRIPT -->
<script src="{{asset('assets/js/pages/login.js')}}"></script>
<!-- END PAGE JAVASCRIPT -->

</body>
</html>