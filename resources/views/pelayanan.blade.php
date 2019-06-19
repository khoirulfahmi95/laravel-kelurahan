@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h4>MENU PELAYANAN MASYARAKAT</h4>
@stop

@section('content')
<div class="row">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Masyarakat</h3>
            <br/>
            <a href="/download" class="btn btn-success pull-right"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            <br/>
            <br/>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Tempat Lahir</td>
                        <td>Email</td>
                        <td>Alamat</td>
                        <td>Alamat Domisili</td>
                        <td>Agama</td>
                        <td>No Telp</td>
                        <td>Pekerjaan</td>
                        <td>Status</td>
                        <td>Kewarganegaraan</td>
                        <td>Approved</td>
                        <td>KTP</td>
                        <td>KK</td>
                        <td>S. Keterangan Sehat</td>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tempat_lahir}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->domisili}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->no_telp}}</td>
                        <td>{{$item->pekerjaan}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->kewarganegaraan}}</td>
                        <td>{{$item->approve_status}}</td>
                        <td>
                            <img src="/{{$item->upload_KTP}}" width="100" height="100" />
                        </td>
                        <td>
                            <img src="/{{$item->upload_KK}}" width="100" height="100" />
                        </td>
                        <td>
                            <img src="/{{$item->upload_s_kesehatan}}" width="100" height="100" />
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
            <!-- ./box-body -->
            <div class="box-footer">
                    {{ $data->links() }}
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    @stop
