@extends('template.index')
@section('title', 'Tambah Data')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Recording Forms</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Layer</a></li>
									<li class="breadcrumb-item active" aria-current="page">Recording Forms</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Desember 2021
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Recording Forms</h4>
							<p class="mb-30"></p>
						</div>
				    </div>
					<form action="{{ route('laporanproduksi.store') }}" method="post">
						@csrf
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text" name="tanggal">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Populasi</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="1000 (ekor)" name="populasi">
							</div>
						</div>
						{{-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Berat EggTrey</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="200 (gram)" name="Berat_Eggtrey">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Jumlah EggTrey</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="10 (EggTrey)" name="Jumlah_Eggtrey">
							</div>
						</div> --}}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Berat Kotor</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="20.000 (gram)" name="berat_telur">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Jumlah Telur</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="360 (Butir)" name="telur">
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="100" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div> -->
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="btn btn-primary">Tambah Data</button>
							</div>
						</div>
						
					</form>
				</div>
				<!-- Default Basic Forms End -->

			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Semangat!!! <a href="https://github.com/dropways" target="_blank"></a>
			</div>
		</div>

@endsection