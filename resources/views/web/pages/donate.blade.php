@extends('web.layout.app')

@section('title', 'Donasi')

@push('addon-style')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #donate .normal {
            position: relative;
            width: calc((100% - 13px) / 4);
            background: rgb(242, 243, 244);
            border: none;
            border-radius: 0.25rem;
            color: #495057;
        }

        #donate input[type="radio"] {
            display: none;
        }

        #donate input:checked+span {
            background-color: #da366b;
            border: none;
            border-radius: 0.25rem;
            color: #F7F7F7;
        }

        #donate label span {
            text-align: center;
            font-size: 16px;
            padding: 0.875rem 0.75rem;
            display: block;
            font-weight: 900;
        }

        .input-icon {
            position: relative;
        }

        .input-icon>span {
            position: absolute;
            display: block;
            transform: translate(0, -50%);
            top: 49%;
            pointer-events: none;
            width: 42px;
            text-align: center;
            font-style: normal;
            font-weight: 900;
            color: #495057;
        }

        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
            width: 100%
        }

        .autocomplete input {
            background-color: transparent;
            padding: 0.875rem 0.75rem;
            font-size: .86rem;
        }

        .autocomplete input[type=text] {
            border: 1px solid rgb(232, 232, 232);
            background-color: transparent;
            width: 100%;
        }

        .autocomplete input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

        .ui-widget.ui-widget-content,
        .ui-widget-content {
            border: none;
        }

        .ui-menu .ui-menu-item {
            border: 1px solid #d4d4d4;
            margin-bottom: -1px;
        }

        .ui-menu .ui-menu-item-wrapper {
            font-size: .86rem;
            padding: 10px;
            color: #495057 !important;
        }

        .ui-menu .ui-menu-item-wrapper:hover {
            background-color: #e9e9e9;
            border: 1px solid #d4d4d4;
        }
    </style>
@endpush

@section('banner')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay"
            style="background-image:url({{ url('web-assets/assets/img/header-1.jpg') }});background-position:center bottom;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
                <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Donasi</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Donasi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h3 class="text-center fs-2 fs-md-3">Masukkan data diri kamu dibawah</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                        <form action="" id="donationForm" name="donationForm" method="POST">
                            @csrf
                            <div id="donate">
                                <label class="normal"><input id="rdo_0" type="radio" value="10000" name="price"
                                        onclick="DisplayPrice(this.value);"><span>10.000</span></label>
                                <label class="normal"><input id="rdo_1" type="radio" value="25000" name="price"
                                        onclick="DisplayPrice(this.value);"><span>25.000</span></label>
                                <label class="normal"><input id="rdo_2" type="radio" value="100000" name="price"
                                        onclick="DisplayPrice(this.value);"><span>100.000</span></label>
                                <label class="normal"><input id="rdo_3" type="radio" value="500000" name="price"
                                        onclick="DisplayPrice(this.value);"><span>500.000</span></label>
                                <!--label class="normal"><input id="rdo_4" type="radio" value="2500000" name="price" onclick="DisplayPrice(this.value);"><span>2.500.000</span></label-->
                            </div>
                            <div class="form-group input-icon" style="margin-bottom:0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp. </span>
                                    </div>
                                    <input autocomplete="off" data-msg-required="This field is required."
                                        class="form-control" type="text" min="1" id="amount" name="amount"
                                        placeholder="Nominal donasi lainnya"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        required="">
                                </div>
                            </div>
							<p>Minimal Donasi Rp. 10.000,-</p>

                            <div class="form-group mt-3">
                                <label for="name">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="name" class="form-control" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Nomor Handphone <span class="text-danger">*</span></label>
                                <input type="number" name="phone" id="name" class="form-control"
                                    placeholder="Nomor Handphone" required>
                            </div>
                            <div class="form-group ui-widget autocomplete mt-3">
                                <label for="city">Kota/ Kabupaten <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="city" name="city"
                                    placeholder="Alamat Kota/Kabupaten" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-select">
									<option value="" selected hidden>--- Pilih Status ---</option>
                                    <option value="student">Mahasiswa/i UNIDAYAN</option>
                                    <option value="lecturer">Dosen/Tendik</option>
                                    <option value="alumni">Alumni</option>
                                    <option value="public">Masyarakat Umum</option>
                                </select>
                            </div>
							<div class="form-group mt-3" id="faculty">
                                <label for="name">Fakultas <span class="text-danger">*</span></label>
                                <select name="faculty_id" class="form-select">
                                    <option value="fatek">Fakultas Teknik</option>
                                    <option value="fkip">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                </select>
                            </div>
							<div class="form-group mt-3" id="work_unit">
                                <label for="name">Unit Kerja <span class="text-danger">*</span></label>
                                <select name="work_unit_id" class="form-select">
                                    <option value="upt">UPT TI</option>
                                </select>
                            </div>
							<div class="form-group mt-3" id="public">
                                <label for="name"><span class="text-success">Silahkan pilih peruntukan untuk universitas atau fakultas tertentu</span> <span class="text-danger">*</span></label>
                                <select name="work_unit_id" class="form-select">
                                    <option value="upt">UPT TI</option>
                                </select>
                            </div>
							<div class="form-group mt-3">
								<label for="message">Pesan (opsional)</label>
								<textarea name="message" id="message" cols="10" rows="10" class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-success mt-3">Donasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

@push('addon-script')
    <script src="{{ asset('web-assets/assets/js/city.js') }}"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        /** Select Amount **/
        function DisplayPrice(price) {
            var val1 = 0;
            for (i = 0; i < document.donationForm.price.length; i++) {
                if (document.donationForm.price[i].checked == true) {
                    val1 = document.donationForm.price[i].value;
                }
            }


            var sum = parseInt(val1);
            document.getElementById('amount').value = sum;
        }
        
        
        function formatRupiah(angka, prefix) {
        	var number_string = angka.replace(/[^,\d]/g, "").toString(),
        		split = number_string.split(","),
        		sisa = split[0].length % 3,
        		rupiah = split[0].substr(0, sisa),
        		ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        
        	// tambahkan titik jika yang di input sudah menjadi angka ribuan
        	if (ribuan) {
        		separator = sisa ? "." : "";
        		rupiah += separator + ribuan.join(".");
        	}
        
			rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
			//return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
			return prefix == undefined ? rupiah : rupiah ? rupiah : "";
        }

        $('#faculty').hide();
        $('#work_unit').hide();
        $('#public').hide();
        $('select#status').change(function() {
            var value = $(this).val();
            if (value == '0') {
                $('#faculty').hide();
                $('#work_unit').hide();
                $('#public').hide();
            } else if (value == 'student' || value == 'alumni') {
                $('#faculty').show();
                $('#work_unit').hide();
                $('#public').hide();
            } else if (value == 'lecturer') {
                $('#faculty').hide();
                $('#work_unit').show();
                $('#public').hide();
            } else if (value == 'public') {
                $('#faculty').hide();
                $('#work_unit').hide();
                $('#public').show();
            } else {
                $('#fakultas').hide();
                $('#work_unit').hide();
                $('#public').hide();
            }
        });
    </script>
@endpush
