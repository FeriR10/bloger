@extends('layouts.AdminLTE.master')
@section('title', 'Data Travel')
@section('link_style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('assets/AdminLTE')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@yield('title')</h3>
        
        <div class="box-tools pull-right">
        <span><a href="{{route('admin.travel.create')}}" class="btn btn-success btn-flat btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></span>
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        
        </div>
    </div>
    <div class="box-body">
    <div class="table-responsive">
        <table id="datatable" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
    <!-- /.box-footer-->
</div>
@endsection
@section('link_script')
<script type="text/javascript" src="{{asset('assets/plugins/autoNumeric/autoNumeric.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/AdminLTE')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/AdminLTE')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
@endsection
@section('script')

<!-- page script -->
<script>
    
    
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        searchable: true,
        ajax: "{{route('admin.travel.data')}}",
        order: [0, 'DESC'],
        columns: [
            {data: "DT_RowIndex"},
            {data: "judul"},
            {
                data: 'harga', render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp. ' )
            },
            {
                data: null,
                render: function(data) {
                    var urlEdit = '{{route("admin.travel.edit", "id")}}'
                    var urlDetail = '{{route("admin.travel.show", "id")}}'
                    var urlHapus = '{{route("admin.travel.delete", "id")}}'
                    urlEditFix = urlEdit.replace("id", data.id)
                    urlDetailFix = urlDetail.replace("id", data.id)
                    urlHapusFix = urlHapus.replace("id", data.id)
                    return `
                        <a href="`+urlDetailFix+`" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Detail</a>
                        <a href="`+urlEditFix+`" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <form action="`+urlHapusFix+`" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    `;
                }
            }, 
        ]
    });


</script>
@endsection