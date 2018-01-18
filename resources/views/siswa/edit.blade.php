@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Siswa
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a>
		</div>
		</div>
		<div class="panel body">
		<form action="{{route('siswa.update',$siswa->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			</div>
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$siswa->nama}}" class="form-control" required="">
			</div>
		
			<div class="form-group">
				<label class="control-label">Kelas</label>
				<input type="text" name="c" value="{{$siswa->merek}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jurusan</label>
				<input type="text" name="d" value="{{$siswa->warna}}" class="form-control" required="">
			</div>
			

					<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" value="{{$siswa->cover}}" required=""></input>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection