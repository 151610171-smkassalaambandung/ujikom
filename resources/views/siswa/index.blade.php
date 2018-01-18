@extends('layouts.app')
@section('content')
<!DOCTYPE html>

  <head>
    <link rel="shortcut icon" href="https://smkassalaambandung.sch.id/img/logo-custom.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Pagination di Laravel 5</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

  </head>
<div class="container">

<div class=-"row">
    <center><h1>Data Siswa</h1></center>
    <div class="panel panel-primary">
    <div class ="panel-heading">Data Siswa
    <div class="panel-title pull-right"><a href="/siswa/create"> Tambah Data </a></div></div>

    
    {!! Form::open(['url'=>url('siswa'),'method'=>'post','class'=>'form-horizontal','id'=>'searchForm']) !!}
    <fieldset>
      {!! Form::text('nama',null,['class'=>'form-control','id'=>'s']) !!}

      {!! Form::submit('Search',['id'=>'submitButton']) !!}
    </fieldset>
    {!! Form::close() !!}
    <body>
    <div class="panel-body"></div>
    <table class="table table-hover table-bordered">
      
        <thead>
      <tr>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th colspan="3">Action</th>
      </tr>
      </thead>
      <tbody>
          
  @foreach ($siswa as $data)
          <tr>
            <td>{{$data->nama}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->jurusan}}</td>
            <td>
              <img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px">                 
            </td>
            

            <td>
              <a class="btn btn-warning" href="siswa/{{$data->id}}/edit">Edit</a>
            
      
          
            
            
            
            <form action="{{route('siswa.destroy',$data->id)}}" method="post">
              
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" >
              <input type="submit" class="btn btn-danger" value="delete">
              {{csrf_field()}}
            </form>
          </td>

          </tr>
          @endforeach
          </table>

</div>
      </tbody>

    </body>

    

    
    </div>
</div>


@endsection
