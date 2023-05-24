<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed'); ?>

<?php $this->load->view('components/header'); ?>

<div class="container-fluid px-5 ">
	<h2 class="py-3" style="color: var(--h1-color);">Módulos do curso - Aprenda a cozinhar</h2>
	<div class="owl-carousel owl-theme owl-loaded owl-drag">
		<div class="owl-stage-outer">
			<div class="owl-stage">
				<div class="owl-item">
					<div class="owl-carousel-info-wrap item">
						<img src="<?php echo base_url('application/views/assets/'); ?>profile/cute-smiling-woman-outdoor-portrait.jpg" class="owl-carousel-image img-fluid">

						<div class="owl-carousel-info">
							<h4 class="mb-2 text-light text-center py-3 border border-light rounded-4">
								Comece por aqui
								<!-- <img src="images/verified.png" class="owl-carousel-verified-image img-fluid"> -->
							</h4>
						</div>
					</div>
					<div class="owl-buttons d-flex justify-content-center align-items-center">
						<a href="#" class="btn btn-success mb-2 text-center py-3 w-75 rounded-2 btn-lg">COMPRAR</a>
					</div>
				</div>

				<div class="owl-item">
					<div class="owl-carousel-info-wrap item">
						<img src="<?php echo base_url('application/views/assets/'); ?>profile/handsome-asian-man-listening-music-through-headphones.jpg" class="owl-carousel-image img-fluid">

						<div class="owl-carousel-info">
							<h4 class="mb-2 text-light text-center py-3 border border-light rounded-4">
								Faça o seu arroz
							</h4>
						</div>
					</div>
					<div class="owl-buttons d-flex justify-content-center align-items-center">
						<a href="/videos/1" class="btn btn-primary mb-2 text-center py-3 w-75 rounded-2 btn-lg">ASSISTIR</a>
					</div>
				</div>

				<div class="owl-item">
					<div class="owl-carousel-info-wrap item">
						<img src="<?php echo base_url('application/views/assets/'); ?>profile/man-portrait.jpg" class="owl-carousel-image img-fluid">

						<div class="owl-carousel-info">
							<h4 class="mb-2 text-light text-center py-3 border border-light rounded-4">
								Carne assada
							</h4>
						</div>
					</div>
					<div class="owl-buttons d-flex justify-content-center align-items-center">
						<a href="#" class="btn btn-success mb-2 text-center py-3 w-75 rounded-2 btn-lg">COMPRAR</a>
					</div>
				</div>

				<div class="owl-item">
					<div class="owl-carousel-info-wrap item">
						<img src="<?php echo base_url('application/views/assets/'); ?>profile/smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg" class="owl-carousel-image img-fluid" alt="">

						<div class="owl-carousel-info">
							<h4 class="mb-2 text-light text-center py-3 border border-light rounded-4">
								Batata com casca
							</h4>
						</div>
					</div>
					<div class="owl-buttons d-flex justify-content-center align-items-center">
						<a href="/videos/1" class="btn btn-primary mb-2 text-center py-3 w-75 rounded-2 btn-lg">ASSISTIR</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('components/footer'); ?>