@extends('layouts.master')

@section('isi')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Petambak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda-admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Kelola Petambak</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                <tr>
                </thead>
                <tbody>
                <?php foreach($petambak as $ptk) : ?>
                @php $no = 1;
                @endphp 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ptk->nama }}</td>
                    <td>{{ $ptk->gender }}</td>
                    <td>{{ $ptk->no_telp }}</td>
                    <td>{{ $ptk->alamat}}</td>
                    <td>
                    <a href="<?=route('petambak-edit',['id_petambak'=>$ptk->id_petambak]) ?>" class="btn btn-info btn-sm">Ubah</a>
                    <form action="<?= route('petambak-delete',['id_petambak'=>$ptk->id_petambak]) ?>" method="POST">
                     @csrf
                     @method('DELETE')
                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                    </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
                
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  @endsection