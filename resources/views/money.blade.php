@extends('layout')

@section('activeUpdMoney')
    active
@endsection

@section('pageTitle')
    Transections
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Transection details</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table id="example1" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Transection Id</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Bank</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($moneyData as $item)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item->moneyTransectionId }}</td>
                                    <td>{{ $item->moneyTitle }}</td>
                                    <td>{{ $item->moneyAmount }}</td>
                                    <td>
                                        @if ($item->moneyType == '1')
                                            <span class="badge badge-danger">Paid</span>
                                        @else
                                            <span class="badge badge-success">Deposit</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->bankName }}</td>
                                    <td>{{ date("d M, Y", strtotime($item->moneyDate)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr no.</th>
                                <th>Transection Id</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Bank</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('tblScript')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
