
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Unit</b>FED</a>
    </div>
    <div class="card-body">

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Se souvenir de moi
              </label>
            </div>
        </div>
        <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Mot de passe oublié ?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Inscription</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <!-- <script src="{{ asset('js/adminlte.js') }}"></script> -->

</body>
</html>
