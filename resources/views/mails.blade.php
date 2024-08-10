@extends('layout')

@section('activeMail')
    active
@endsection

@section('pageTitle')
    Mails Sent
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Mails Sent</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 693px;">
                    <table class="table table-head-fixed text-nowrap" id="">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Subject</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item['mailToName'] }}</td>
                                    <td>
                                        @php
                                            $emails = explode(",", $item['mailToEmail']);
                                        @endphp
                                        @foreach ($emails as $value)
                                            <span class="badge badge-info">{{ $value }}</span><br>
                                        @endforeach
                                    </td>
                                    <td>{{ $item['mailSubject'] }}</td>
                                    <td><span
                                            class="badge bg-success">{{ date('d M, Y h:i a', strtotime($item['mailDate']) + 19800) }}</span>
                                    </td>
                                </tr>
                                <tr class="expandable-body d-none">
                                    <td colspan="5">
                                        <div>
                                            <iframe src="/admin/mail?id={{ urlencode($item['mailId']) }}"
                                                frameborder="0" width="100%" height="600vh"></iframe>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('tblScript')
    <script>
        $(function() {
            $(".example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('.example2').DataTable({
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
