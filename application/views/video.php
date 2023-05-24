<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed'); ?>

<?php $this->load->view('components/header'); ?>

<div class="container-fluid padding">
	<h2 class="py-3" style="color: var(--h1-color);">Coloque o arroz no fogo</h2>
	<div class="row">
		<div class="col col-12 col-md-12 col-sm-12 col-lg-8 col-xl-9">
			<div class="video w-100" style="">
				<iframe width="100%" style="max-width: 100vw; aspect-ratio: 1/0.5625;" src="https://www.youtube.com/embed/LXb3EKWsInQ"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					allowfullscreen></iframe>
			</div>

			<div class="container text-lg center border-top pt-2 pt-sm-3 my-2 my-sm-3 my-md-4" style="border-color: #efe96e !important; color: #efe96e;">
				<div class="d-flex justify-content-center align-items-center">
					<i class="fa fa-lg fa-thumbs-up px-2 border-end border-success cursor-pointer"></i>
					<i class="fa fa-lg fa-thumbs-down px-2 border-end border-success cursor-pointer"></i>
					<i class="fa fa-lg px-2 cursor-pointer fa-check"> <div class="d-inline h6" style="font-family: var(--bs-body-font-family);">Marcar como visto</div></i>
				</div>
			</div>
		</div>

		<div class="col col-12 col-md-12 col-sm-12 col-lg-4 col-xl-3 mb-4 mb-lg-2">
			<div class="row cant d-flex justify-content-center align-items-center h-100">
				<div class="col-md-6 w-100 h-100">
					<div class="p-3 card h-100">
						<a class="text-reset d-flex border-bottom justify-content-between align-items-center video text-decoration-none" href="<?php echo base_url('/videos/2'); ?>">
							<div class="d-flex flex-row align-items-center">
								<i class="fa fa-play-circle color me-2"></i>
								<small class="ml-2">Coloque o arroz no fogo</small>
							</div>
							<i class="fa fa-check color"></i>
						</a>

						<a class="text-reset d-flex border-bottom justify-content-between align-items-center video text-decoration-none" href="<?php echo base_url('/videos/2'); ?>">
							<div class="d-flex flex-row align-items-center">
								<i class="fa fa-play-circle color me-2"></i>
								<small class="ml-2">Pique a cebola</small>
							</div>
							<i class="fa fa-plus text-muted"></i>
						</a>

						<a class="text-reset d-flex border-bottom justify-content-between align-items-center video text-decoration-none" href="<?php echo base_url('/videos/2'); ?>">
							<div class="d-flex flex-row align-items-center">
								<i class="fa fa-play-circle color me-2"></i>
								<small class="ml-2">Coloque carne moída</small>
							</div>
							<i class="fa fa-check color"></i>
						</a>

						<a class="text-reset d-flex border-bottom justify-content-between align-items-center video text-decoration-none" href="<?php echo base_url('/videos/2'); ?>">
							<div class="d-flex flex-row align-items-center">
								<i class="fa fa-play-circle color me-2"></i>
								<small class="ml-2">Pique a salsinha</small>
							</div>
							<i class="fa fa-plus text-muted"></i>
						</a>

						<a class="text-reset d-flex border-bottom justify-content-between align-items-center video text-decoration-none" href="<?php echo base_url('/videos/2'); ?>">

							<div class="d-flex flex-row align-items-center">
								<i class="fa fa-play-circle color me-2"></i>
								<small class="ml-2">Misture tudo</small>
							</div>
							<i class="fa fa-check color"></i>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
</script>

<?php $this->load->view('components/footer'); ?>