@extends('layout')

@section('activeDb')
    active
@endsection

@section('pageTitle')
    Dashboard
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
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Reply</th>
                                <th>Mail Info</th>
                                <th>Action</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['subject'] }}</td>
                                    <td>{{ $item['message'] }}</td>
                                    <td>
                                        @if ($item['replySent'] == '' || $item['replySent'] == null)
                                            <i class="icon fas fa-exclamation-triangle" style="color: #dc3545"></i>
                                        @else
                                            <i class="icon fas fa-check" style="color: #28a745"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item['mailSent'] == '1')
                                            <i class="icon fas fa-check" style="color: #28a745"></i>
                                        @else
                                            <i class="icon fas fa-ban" style="color: #dc3545"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/reply?email={{ $item['email'] }}&name={{ $item['name'] }}"><i class="icon fas fa-comments"
                                                style="color: #17a2b8"></i></a>
                                    </td>
                                    <td>
                                        <span
                                            class="right badge badge-info">{{ date('d M, Y - h:m a', strtotime($item['cTime']) + 19800) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr no.</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Reply</th>
                                <th>Mail Info</th>
                                <th>Action</th>
                                <th>Date Time</th>
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
