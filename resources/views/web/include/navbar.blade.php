<div class="sticky-top navbar-elixir">
	<div class="container">
		<nav class="navbar navbar-expand-lg"> <a class="navbar-brand"
				href="#"><img src="{{ asset('logo-primary.png') }}"
					alt="logo" /></a><button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
				data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false"
				aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span
						class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
			<div class="collapse navbar-collapse" id="primaryNavbarCollapse">
				<ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
					<li class="nav-item dropdown"><a class="nav-link"
						href="{{ route('web.home') }}" role="button">Beranda</a>
					</li>
					<li class="nav-item dropdown"><a class="nav-link"
						href="{{ route('web.endowment') }}" role="button">Dana Abadi</a>
					</li>
					{{-- <li class="nav-item dropdown"><a class="nav-link"
						href="#" role="button">Laporan Keuangan</a>
					</li> --}}
					<li class="nav-item dropdown"><a class="nav-link"
						href="{{ route('web.news') }}" role="button">Berita</a>
					</li>
				</ul>
				<a class="btn btn-secondary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-3 my-3 my-lg-0"
					href="{{ route('web.how-to-donate') }}">Cara Donasi
				</a>
				<a class="btn btn-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-3 my-3 my-lg-0"
					href="{{ route('web.donate') }}">Donasi
				</a>
			</div>
		</nav>
	</div>
</div>