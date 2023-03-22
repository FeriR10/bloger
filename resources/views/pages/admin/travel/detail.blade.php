
@extends('layouts.AdminLTE.master')
@section('title', $data->judul)
@section('link_style')

@endsection
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" id="title-form-akun">Detail - {{$data->judul}} 
            @if($data->deleted_at == null)
            <a href="{{route('admin.travel.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
            @endif
        </h3>
        
        <div class="box-tools pull-right">
        
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        
        </div>
    </div>
    <div class="box-body">
        <div class="panel panel-default panel-body col-sm-12">
            <label for="judul">Judul: </label>
            <span>{{$data->judul}}</span>
        </div>
        <div class="panel panel-default panel-body col-sm-12">
            <label for="deskripsi">Deskripsi: </label>
            <div>
                {!! $data->deskripsi !!}
            </div>
        </div>
        <div class="panel panel-default panel-body col-sm-12">
            <label for="harga">Harga: </label>
            <span>Rp. {{number_format($data->harga,2,',','.')}}</span>
        </div>
    </div>
    <!-- /.box-footer-->
</div>
@endsection
@section('link_script')

@endsection
@section('script')

@endsection
