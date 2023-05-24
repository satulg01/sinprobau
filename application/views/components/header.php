<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sinpro</title>

	<!-- BOOTSTRAP -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- CUSTOM CSS -->
	<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" />

	<!-- FONT AWESOME -->
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

	<!-- <link rel="stylesheet" type="text/css"
		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->


</head>

<body>
	<div class="wrapper" style="background-color: #f1f1f1;">
		<header class="p-3 bg-success text-white">
			<div class="container-fluid">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<!-- SMART ESSE APARECE -->
					<a href="/" class="col-11 col-md-2 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
						<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo Sinpro" width="80">
					</a>

					<ul class="col-md-7 d-none d-md-flex nav col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<li><a href="#" class="nav-link px-2 text-white">Home</a></li>
						<li><a href="#" class="nav-link px-2 text-white">Sindicato</a></li>
						<li><a href="#" class="nav-link px-2 text-white">Convenções</a></li>
						<li><a href="#" class="nav-link px-2 text-white">Notícias</a></li>
						<li><a href="#" class="nav-link px-2 text-white">Contato</a></li>
					</ul>

					<!-- SMART ESSE APARECE -->
					<button class="col-1 d-md-none btn text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
						<i class="fa fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
					</button>

					<form class="col-md-3 d-none d-md-flex col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start">
						<input type="search" class="form-control form-control-dark" placeholder="" aria-label="Search">
						<i class="fas fa-search fa-lg ms-2 cursor-pointer"></i>
					</form>

					<div class="text-end">
					</div>
				</div>
			</div>
		</header>

		<div class="offcanvas offcanvas-start w-25 bg-success" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
			<div class="offcanvas-header">
				<!-- SMART ESSE APARECE -->
				<a href="/" class="offcanvas-title text-white text-decoration-none">
					<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo Sinpro" width="60">
				</a>

			</div>

			<div class="offcanvas-body px-0 d-flex flex-wrap align-content-between justify-content-center">
				<ul class="nav w-100 nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start justify-content-center" id="menu">
					<li class="nav-item border-bottom border-bottom-sm-0 mb-3 mb-sm-0">
						<a href="#" class="nav-link text-white">
							<i class="fas fa-home"></i><span class="ms-1 d-none d-sm-inline">Home</span>
						</a>
					</li>
					<li class="nav-item border-bottom border-bottom-sm-0 mb-3 mb-sm-0">
						<a href="#" class="nav-link text-white">
							<i class="fas fa-users"></i><span class="ms-1 d-none d-sm-inline">Sindicato</span>
						</a>
					</li>
					<li class="nav-item border-bottom border-bottom-sm-0 mb-3 mb-sm-0">
						<a href="#" class="nav-link text-white">
							<i class="fas fa-users"></i><span class="ms-1 d-none d-sm-inline">Convenções</span>
						</a>
					</li>
					<li class="nav-item border-bottom border-bottom-sm-0 mb-3 mb-sm-0">
						<a href="#" class="nav-link text-white">
							<i class="fas fa-newspaper"></i><span class="ms-1 d-none d-sm-inline">Notícias</span>
						</a>
					</li>
					<li class="nav-item border-bottom border-bottom-sm-0 mb-3 mb-sm-0">
						<a href="#" class="nav-link text-white">
							<i class="fas fa-user"></i><span class="ms-1 d-none d-sm-inline">Contato</span>
						</a>
					</li>
				</ul>

				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
		</div>