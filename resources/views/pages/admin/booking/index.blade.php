@extends('layouts.AdminLTE.master')
@section('title', 'Data Booking')
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon/Whatsapp</th>
                    <th>Travel</th>
                    <th>Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon/Whatsapp</th>
                    <th>Travel</th>
                    <th>Dibuat Pada</th>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
    <!-- /.box-footer-->
</div>
@endsection
@section('link_script')
<!-- DataTables -->
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
        ajax: "{{route('admin.booking.data')}}",
        order: [0, 'DESC'],
        columns: [
            {data: "DT_RowIndex"},
            {data: "name"},
            {data: "email"},
            {
                data: null,
                render: function(data) {
                    txtPhone = '<p>+'+data.phone+'</p>'
                    btnWA = '<a href="https://wa.me/'+data.phone+'" class="btn btn-success btn-sm"><i class="fa fa-whatsapp"></i> Chat</a>';
                    btnTel = '<a href="tel:+'+data.phone+'" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i> Telepon</a>';

                    return txtPhone+" "+btnWA+" "+btnTel;
                }
            },
            {
                data: null,
                render: function(data) {
                    var urlDetail = `
                    <a href="{{route('admin.travel.show', 'id')}}" class="text-link">`+data.travel.judul+`</a>`;
                    urlDetailFix = urlDetail.replace('id', data.travel.id);
                    return urlDetailFix;
                }
            },
            // {
            //     data: null,
            //     render: function(data) {
            //         return `
            //             <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
            //         `;
            //     }
            // }, 
            {data: "created_at"},
        ]
    });
    

    


</script>
@endsection