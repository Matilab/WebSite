<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign Up | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Sign Up">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Sign Up",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/apple-touch-icon.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico') ?>">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/aos/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/toastr/toastr.min.css') ?>"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme.min.css') ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme-dark.min.css') ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/custom.css') ?>">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(<?= base_url('assets/images/illustration/img-1.png') ?>);">
        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64" viewbox="0 0 351 100">
            <defs>
              <path id="a" d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z"></path>
            </defs>
            <g fill="none" fill-rule="evenodd">
              <path fill="currentColor" fill-rule="nonzero" d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z"></path>
              <use class="fill-warning" xlink:href="#a"></use>
            </g>
          </svg> <span class="sr-only">Sign Up</span>
        </h1>
        <p> Already have an account? please <a href="<?= base_url('user/login') ?>">Sign In</a>
        </p>
      </header>
      <!-- form -->
      <?= form_open('user/singin', ["class" => "auth-form", "id" => "formCadastroUser"]); ?>
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type='text' name='uu_Nome' id='uu_Nome' class='form-control' placeholder='Nome' value="<?= set_value('uu_Nome') ?>" required> <label for="uu_Nome">Nome</label>
          </div>
          <?php if(isset($response)): ?>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_Nome) ? $response->error->uu_Nome : ""; ?></div>
          <?php endif; ?>
        </div><!-- /.form-group -->


        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" name='uu_Email' id='uu_Email' class='form-control' placeholder="Email" value="<?= set_value('uu_Email') ?>" required> <label for="uu_Email">E-mail</label>
          </div>
          <?php if(isset($response)): ?>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_Email) ? $response->error->uu_Email : ""; ?></div>
          <?php endif; ?>
        </div><!-- /.form-group -->


        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name='uu_Senha' id='uu_Senha' class='form-control' placeholder="Senha" value="<?= set_value('uu_Senha') ?>" required> <label for="uu_Senha">Senha</label>
          </div>
          <?php if(isset($response)): ?>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_Senha) ? $response->error->uu_Senha : ""; ?></div>
          <?php endif; ?>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name='uu_SenhaConfirm' id='uu_SenhaConfirm' class='form-control' placeholder="Confirmar Senha" required> <label for="uu_SenhaConfirm">Confirmar Senha</label>
          </div>
          <?php if(isset($response)): ?>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_SenhaConf) ? $response->error->uu_SenhaConf : ""; ?></div>
          <?php endif; ?>
        </div><!-- /.form-group -->
        
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>. </p><!-- /recovery links -->
      <?= form_close() ?><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © <span id="year"></span> All Rights Reserved. </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url('assets/vendor/particles.js/particles.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/toastr/toastr.min.js') ?>"></script>
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', "<?= base_url('assets/javascript/pages/particles.json') ?>");
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url('assets/javascript/theme.min.js') ?>"></script> <!-- END THEME JS -->
    <script>
      document.getElementById("year").innerHTML = new Date().getFullYear()

      <?php if($response->status === "TRUE"): ?>
        $(document).on('theme:init', function () {
          toastr.options.onHidden = function() { location.href = "<?= base_url("user/login") ?>" }
          toastr.success(' <?= $response->message ?> ', ' Sucesso! ', {timeOut: 2500})
        });
        $('#formCadastroUser').find('input').each(function() {
            $(this).val('');
        });
      <?php endif; ?>
    </script>
  </body>
</html>