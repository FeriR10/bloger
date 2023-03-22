
@extends('layouts.AdminLTE.master')
@section('title', !empty($data)?$data->judul:'Data Travel')
@section('link_style')

@endsection
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" id="title-form-akun">{{!empty($data)?'Edit':'Tambah'}} Travel - @yield('title')</h3>
        
        <div class="box-tools pull-right">
        
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        
        </div>
    </div>
    <div class="box-body">
        <div class="container-fluid">
        
            <form action="{{!empty($data)?route('admin.travel.update', $data->id):route('admin.travel.store')}}" method="post" id="form-akun">
                @csrf
                @if(!empty($data))
                @method('PUT')
                @endif
                <div class="form-group">
                    <label for="text_name">Judul<b class="text-danger">*</b></label>
                    <input type="text" name="judul" class="form-control" value="{{!empty($data)?$data->judul:null}}" required>
                </div>
                <div class="form-group">
                    <label for="text_email">Deskripsi <b class="text-danger">*</b></label>
                    <textarea class="ckeditor" name="deskripsi" required>{{!empty($data)?$data->deskripsi:null}}</textarea>
                </div>
                <div class="form-group">
                    <label for="text_email">Harga<b class="text-danger">*</b></label>
                    <input type="text" id="harga" name="harga" data-a-sign="Rp. " data-a-dec="," data-a-sep="." class="form-control" value="{{!empty($data)?$data->harga:null}}" required>
                </div>
                <div class="form-group btn-action-form">
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.box-footer-->
</div>
@endsection
@section('link_script')

<script type="text/javascript" src="{{asset('assets/plugins/autoNumeric/autoNumeric.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/plugins/ckeditor/adapters/jquery.js')}}" ></script>
@endsection
@section('script')
<script>
    $('#harga').autoNumeric('init');
</script>
@endsection
