<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="icon" href="<?php echo base_url('themes/frontend/images/favicon.png'); ?>" sizes="32x32" />
        <link rel="icon" href="<?php echo base_url('themes/frontend/images/favicon.png'); ?>" sizes="192x192" />

        <link rel="apple-touch-icon" href="<?php echo base_url('themes/frontend/images/favicon.png'); ?>" />
        <meta name="msapplication-TileImage" content="<?php echo base_url('themes/frontend/images/favicon.png'); ?>" />

        <link rel="stylesheet" href="<?php echo base_url('application/views/assets/'); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('application/views/login/'); ?>style.css">

        <script src="<?php echo base_url('application/views/assets/'); ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('application/views/assets/'); ?>js/jquery-3.6.4.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>

    <body>
        <div class="form-bg">
            <div class="container vh-100">
                <div class="row d-flex justify-content-center align-items-center vh-100 position-relative">
                    <div class="logo-menu position-absolute">
                        <img width="100%" src="<?php echo base_url('application/views/assets/img/logo.png'); ?>" alt="Logo Forumtelecom"/>
                    </div>
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                        <div class="form-container">
                            <div class="form-icon">
                                <i class="fa fa-user-circle"></i>
                                <span class="signup">Seja bem-vindo(a)</span>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url('/'); ?>" method="GET">
                                <h3 class="title">Login</h3>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" type="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                    <input class="form-control" type="password" placeholder="Senha">
                                </div>
                                <button class="btn signin">Entrar</button>
                                <span class="forgot-pass"><a href="#">Esqueceu a senha?</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>