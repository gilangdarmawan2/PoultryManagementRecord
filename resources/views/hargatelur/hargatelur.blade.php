@extends('template.index')
@section('title', 'Harga Telur')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
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
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Harga Telur</h4>
						<a class="btn btn-primary btn-lg" href="{{route('hargatelur.create')}}" role="button">Tambah Data</a>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Age</th>
									<th>Office</th>
									<th>Address</th>
									<th>Start Date</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Gloria F. Mead</td>
									<td>25</td>
									<td>Sagittarius</td>
									<td>2829 Trainer Avenue Peoria, IL 61602 </td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="{{route('hargatelur.edit')}}"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="{{route('hargatelur.destroy')}}"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>

@endsection

<!-- buttons for Export datatable -->
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
<!-- Datatable Setting js -->
<script src="{{asset('assets/vendors/scripts/datatable-setting.js')}}"></script>