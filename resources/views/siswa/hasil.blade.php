@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<div class="panel panel-primary">
		<div class ="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
		<form id="searchForm">
			<center>
				<h2>Pencarian Atas Nama {{$query}}</h2>
			</center>

		</form>
		
		<div class="panel-body"></div>
		
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Gambar</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($barang as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->kelas}}</td>
						<td>{{$data->jurusan}}</td>
						<td>
							<img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px">									
						</td>
						<td>

							<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a>
						</td>
			
					
						<td>
						<td>
						
						<td>
						<form action="{{route('siswa.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</body>

		

		
		</div>
</div>


@endsection
