@extends('admin-panel.layout.app')

@section('title', 'Detail Donatur')

@push('addon-style')
	<!-- Datatable -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="{{ asset('panel-assets/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-success shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Detail Donatur</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('admin-panel.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Detail Donatur</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <img src="{{ asset('panel-assets/dist/images/breadcrumb/donation.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			@if ($donation->donation_nominal->status == 'pending')
			<div class="col-12">
				<div class="alert alert-warning" role="alert">
					Donasi ini belum dikonfirmasi. Silahkan periksa data donatur berikut dan pastikan bukti transfernya valid!
				</div>
			</div>
			@endif
			<div class="col-sm-12 col-md-7">
				<div class="card">
					<div class="card-body">
						<h3>Detail Donatur</h3>
						<div class="form-group mb-3">
							<label for="">Nama</label>
							<input type="text" class="form-control" value="{{ $donation->name }}" disabled>
						</div>
						<div class="form-group mb-3">
							<label for="">Email</label>
							<input type="text" class="form-control" value="{{ $donation->email }}" disabled>
						</div>
						<div class="form-group mb-3">
							<label for="">Nomor Handphone</label>
							<input type="text" class="form-control" value="{{ $donation->phone }}" disabled>
						</div>
						<div class="form-group mb-3">
							<label for="">Kota</label>
							<input type="text" class="form-control" value="{{ $donation->city }}" disabled>
						</div>
						<div class="form-group mb-3">
							<label for="">Status</label>
							<input type="text" class="form-control" value="{{ $donation->getStatus() }}" disabled>
						</div>
						{{-- <div class="form-group mb-3">
							<label for="">Penempatan Donasi</label>
							<input type="text" class="form-control" value="{{ $donation->getDonationPlaced() }}" disabled>
						</div> --}}
						<div class="form-group mb-3">
							<label for="">Pesan</label>
							<textarea name="" id="" cols="30" rows="10" class="form-control" disabled>{{ $donation->message }}</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="card">
					<div class="card-body">
						<h3>Bukti Transfer</h3>
						<div class="d-flex justify-content-center">
							<img src="{{ $donation->donation_nominal->image }}" alt="" style="max-height:400px; width: 400px">
						</div>
						<div class="mt-2">
							<h6>Metode: {{ $donation->donation_nominal->method }}</h6>
							<h6>Nominal: Rp. {{ number_format($donation->donation_nominal->amount) }}</h6>
							<h6>Status: {{ $donation->donation_nominal->status }}</h6>
						</div>
					</div>
				</div>
			</div>
			@if($donation->donation_nominal->status == 'pending')
			<form action="{{ route('admin-panel.donations.confirm-donation', $donation->id) }}" method="POST" class="confirm-donation">
				@method('PUT')
				@csrf
				<button class="btn btn-success">Konfirmasi Donasi</button>
			</form>
			@endif
		</div>
    </div>
@endsection

@push('addon-script')
	<script src="{{ asset('panel-assets/dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript">
	$(function () {
		$("#dataTable").DataTable({
			scrollX: true,
		});

		$('.confirm-donation').click(function(event) {
			var form = $(this).closest("form");
			var id = $(this).data("id");
			event.preventDefault();
			Swal.fire({
				title: 'Konfirmasi Donasi?',
				icon: 'info',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Konfirmasi!'
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit()
				} else if (result.isDenied) {
					Swal.fire('Perubahan tidak disimpan', '', 'info')
				}
			})
		});
	})
	</script>
@endpush
