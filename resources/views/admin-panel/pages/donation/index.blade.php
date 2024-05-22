@extends('admin-panel.layout.app')

@section('title', 'Data Donasi')

@push('addon-style')
	<!-- Datatable -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="{{ asset('panel-assets/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
@endpush

@php
	$color = [
		'pending' => 'warning',
		'success' => 'success',
		'failed'  => 'warning',
	];

	$label = [
		'pending' => 'Pending',
		'success' => 'Berhasil',
		'failed'  => 'Gagal',
	];
@endphp

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Data Donasi</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('admin-panel.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Data Donasi</li>
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
		<section class="datatables">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table id="dataTable" class="table border table-striped table-bordered display nowrap" style="width: 100%">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th>Nama</th>
											<th>Kota</th>
											<th>Status</th>
											<th>Penempatan Donasi</th>
											<th class="text-center">Jumlah Donasi</th>
											<th class="text-center">Status Donasi</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($donations as $donation)
											<tr>
												<td class="text-center">{{ $loop->iteration }}</td>
												<td>{{ $donation->name }}</td>
												<td>{{ $donation->city }}</td>
												<td>{{ $donation->status }}</td>
												<td>
													{{ $donation->getDonationPlaced() }}
												</td>
												<td class="text-center">
													Rp. {{ number_format($donation->donation_nominal->amount) }}
												</td>
												<td class="text-center">
													<span class="badge bg-{{ $color[$donation->donation_nominal->status] }}">{{ $label[$donation->donation_nominal->status] }}</span>
												</td>
												<td class="text-center">
													<a href="{{ route('admin-panel.donations.show', $donation->id) }} " class="btn btn-sm btn-info"
                                                        data-toggle="tooltip" data-placement="top" title="Lihat Donasi">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
@endsection

@push('addon-script')
	<script src="{{ asset('panel-assets/dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript">
	$(function () {
		$("#dataTable").DataTable({
			scrollX: true,
		});

		$('.swal-confirm').click(function(event) {
			var form = $(this).closest("form");
			var id = $(this).data("id");
			event.preventDefault();
			Swal.fire({
				title: 'Yakin Hapus User?',
				text: "User yang terhapus tidak dapat dikembalikan",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, hapus!'
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
