@extends('web.layout.app')

@section('title', 'Donasi Berhasil')

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
						<h5>Silahkan melakukan transfer bank ke rekening berikut:</h5>
						<div class="table responsive">
							<table class="table table-striped">
								<thead>
									<th>Bank</th>
									<th>No. Rekening</th>
									<th>A/N</th>
								</thead>
								<tbody>
									<tr>
										<td>BSI</td>
										<td>1234567890</td>
										<td>Universitas Dayanu Ikhsanuddin</td>
									</tr>
								</tbody>
							</table>
						</div>
						<hr>

						<h5>Bukti Transfer (wajib)</h5>
						<p>Setelah melakukan transfer, harap mengirimkan bukti transfer bank anda</p>
                        <form action="{{ route('web.upload-donation-receipt', $donation->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
							@csrf
                            <div class="form-group mt-3">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $donation->name }}" disabled>
                            </div>
                            <div class="form-group mt-3">
                                <label for="amount">Nominal</label>
                                <input type="number" name="amount" id="name" class="form-control" value="{{ $donation->donation_nominal->amount }}" disabled>
                            </div>
							<div class="form-group mt-3">
								<label for="image">Bukti Transfer <span class="text-danger">*</span></label>
								<input type="file" name="image" id="image" class="form-control">
							</div>
							<div class="d-flex justify-content-center mt-3">
								<img src="#" class="img-fluid" style="max-height:300px;" id="receipt_image_preview" alt="Receipt">
							</div>
							<button type="submit" class="btn btn-success mt-3">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

@push('addon-script')
	<script>
		$('#receipt_image_preview').hide();

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#receipt_image_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
			$('#receipt_image_preview').show();
        });
	</script>
@endpush