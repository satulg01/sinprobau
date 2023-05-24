<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed'); ?>

<?php $this->load->view('components/header'); ?>

<main>
	<div class="container-xl py-5" id="featured-3">
		<h2 class="pb-4">Seções</h2>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 align-items-stretch g-4 py-2 py-lg-4 bg-white border rounded-5">
			<div class="col mt-lg-0">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./assets/images/unsplash-photo-1.jpg');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Notícias</h2>

						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<i class="fas fa-newspaper"></i>
							</li>

							<li class="d-flex align-items-center me-3 cursor-pointer">
								<i class="fas fa-external-link-alt me-1"></i>
								<small>Confira</small>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col mt-lg-0">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./assets/images/unsplash-photo-2.jpg');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Convênios</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<i class="fa fa-handshake"></i>
							</li>

							<li class="d-flex align-items-center me-3 cursor-pointer">
								<i class="fas fa-external-link-alt me-1"></i>
								<small>Confira</small>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col mt-lg-0">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./assets/images/unsplash-photo-3.jpg');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Campanha Salarial</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<i class="fas fa-money-bill-wave"></i>
							</li>

							<li class="d-flex align-items-center me-3 cursor-pointer">
								<i class="fas fa-external-link-alt me-1"></i>
								<small>Confira</small>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col mt-lg-0">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./assets/images/unsplash-photo-4.jpg');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Carteirinha Digital</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<i class="fas fa-wallet"></i>
							</li>

							<li class="d-flex align-items-center me-3 cursor-pointer">
								<i class="fas fa-external-link-alt me-1"></i>
								<small>Confira</small>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php $this->load->view('components/footer'); ?>