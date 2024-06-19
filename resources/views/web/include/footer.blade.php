<!--===============================================-->
<!--    Footer-->
<!--===============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section style="background-color: #3D4C6F">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="bg-primary text-white p-5 p-lg-6 rounded-3">
					<h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
					<p class="text-white">Stay current with our latest insights</p>
					<form class="mt-4">
						<div class="row align-items-center">
							<div class="col-md-7 pe-md-0">
								<div class="input-group"><input class="form-control" type="email"
										placeholder="Enter Email Here" /></div>
							</div>
							<div class="col-md-5 mt-3 mt-md-0">
								<div class="d-grid"><button class="btn btn-warning" type="submit"><span
											class="text-primary fw-semi-bold">Submit</span></button></div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<div class="row">
					<div class="col-12 col-sm-12 ms-sm-auto">
						<ul class="list-unstyled">
							<li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
									href="https://unidayan.ac.id" target="_blank"> <span class="brand-icon me-3"><span
											class="fas fa-globe"></span></span>
									<h5 class="fs-0 text-white mb-0 d-inline-block">Website Resmi UNIDAYAN</h5>
								</a></li>
							<li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
									href="https://www.instagram.com/unidayan.info_/" target="_blank"> <span class="brand-icon me-3"><span
											class="fab fa-instagram"></span></span>
									<h5 class="fs-0 text-white mb-0 d-inline-block">Instagram</h5>
								</a></li>
							<li class="mb-3"><a class="text-decoration-none d-flex align-items-center"
									href="https://www.facebook.com/universitasdayanuikhsanuddin.baubau" target="_blank"> <span class="brand-icon me-3"><span
											class="fab fa-facebook-f"></span></span>
									<h5 class="fs-0 text-white mb-0 d-inline-block">Facebook</h5>
								</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<footer class="footer bg-primary text-center py-4">
	<div class="container">
		<div class="row align-items-center opacity-85 text-white">
			<div class="col-sm-3 text-sm-start">
				<div style="background-color: #ffffff; padding: 5px; border-radius: 5px;" class="text-center">
					<a href="#">
						<img src="{{ asset('logo-primary.png') }}" class="text-center" alt="logo" />
					</a>
				</div>
			</div>
			<div class="col-sm-6 mt-3 mt-sm-0">
				<p class="lh-lg mb-0 fw-semi-bold">&copy; Copyright <span id="year"></span></p>
			</div>
			<div class="col text-sm-end mt-3 mt-sm-0">
				<span class="fw-semi-bold">Developed by </span>
				<a class="text-white" href="#">UPT TI</a>
			</div>
		</div>
	</div>
</footer>

@push('addon-script')
	<script>
		const d = new Date();
		let year = d.getFullYear();
		$('#year').html(year);
	</script>
@endpush