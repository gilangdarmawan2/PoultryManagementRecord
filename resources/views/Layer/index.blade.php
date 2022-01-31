@extends('template.index')
@section('title', 'Laporan Produksi')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Recordings Table Layer</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Layer</a></li>
							<li class="breadcrumb-item active" aria-current="page">Recordings Table Layer</li>
						</ol>
					</nav>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
							Desember 2021
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="">Export List</a>
							<a class="dropdown-item" href="">Policies</a>
							<a class="dropdown-item" href="">View Assets</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Simple Datatable start -->
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Hasil Produksi Harian</h4>
				<a class="btn btn-primary btn-lg" href="{{route('laporanproduksi.create')}}" role="button">Tambah Data</a>
			</div>
			<div class="pb-20">
				<table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th class="table-plus datatable-nosort">Pukul / Tanggal</th>
							<th>Populasi</th>
							<th>Berat Telur (gram)</th>
							<th>Telur (Butir)</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($laporanproduksis as $laporan)
						<tr>
							<td>{{ $laporan->id }}</td>
							<td class="table-plus">{{$laporan->tanggal}}</td>
							<td>{{$laporan->populasi}}</td>
							<td>{{$laporan->berat_telur}}</td>
							<td>{{$laporan->telur}}</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="{{ route('laporanproduksi.edit', $laporan->id) }}"><i class="dw dw-edit2"></i> Edit</a>
										<form action="{{ route('laporanproduksi.destroy', $laporan->id)}}" method="post">
											@csrf
											@method('DELETE')
											<button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i>Delete</button>
										  </form>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- Simple Datatable End -->
	</div>
	<div class="footer-wrap pd-20 mb-20 card-box"> Semangat!!! <a href="https://github.com/dropways" target="_blank"></a></div>
</div>
@endsection

@section('script')
	<script>
		
	</script>
@endsection

{{-- <script>
	 $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

</script> --}}