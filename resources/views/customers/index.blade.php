
@extends('layouts.app')

@section('title', __('Dashboard'))

@section('content')

  <div class="card-header">
    <h3 class="card-title">List of Customer</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="btn-group-horizontal btn-group">
            <a href="{{ route('customers.create') }}" class="btn btn-outline-primary">Create New User </a>
        </div>
  </div>
  <!-- /.card-body -->

@endsection




@push('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('js_after')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('customers.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false, sClass : 'text-center' },
                ]
            });
            
        });

        
    </script>
@endpush
