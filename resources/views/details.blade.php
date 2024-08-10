@extends('layout')

@section('activeDetails')
    active
@endsection

@section('pageTitle')
    Resume Details
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Personal details</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">
                    <div class="row">
                        @php
                            $counter = 0;
                        @endphp
                        <div class="col-md-6">
                            <table class="table table-bordered example2" id="example2">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < round(count($personalDetails) / 2, 0); $i++, $counter++)
                                        <tr>
                                            <td>{{ $personalDetails[$counter]['pdId'] }}</td>
                                            <td>{{ $personalDetails[$counter]['pdTitle'] }}</td>
                                            <td
                                                style="max-width: 200px; overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                {{ $personalDetails[$counter]['pdValue'] }}</td>
                                            <td>
                                                @if ($personalDetails[$counter]['pdStatus'] == '1')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered example2" id="example2">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < floor(count($personalDetails) / 2); $i++, $counter++)
                                        <tr>
                                            <td>{{ $personalDetails[$counter]['pdId'] }}</td>
                                            <td>{{ $personalDetails[$counter]['pdTitle'] }}</td>
                                            <td
                                                style="max-width: 200px; overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                {{ $personalDetails[$counter]['pdValue'] }}</td>
                                            <td>
                                                @if ($personalDetails[$counter]['pdStatus'] == '1')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Visitors Details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>IP Address</th>
                                <th>Browser Info</th>
                                <th>Operating System</th>
                                <th>Device Info</th>
                                <th>Visit Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitors as $visitor)
                                <tr>
                                    <td>{{ $visitor['id'] }}</td>
                                    <td><span class="badge badge-info">{{ $visitor['ip'] }}</span></td>
                                    <td>{{ $visitor['browser'] }}</td>
                                    <td><span class="badge badge-success">{{ $visitor['os'] }}</span></td>
                                    <td>{{ $visitor['device'] }}</td>
                                    <td><span
                                            class="badge bg-warning">{{ date('d M, Y h:i a', strtotime($visitor['visitedDate'])) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Testimonials Details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Descreption</th>
                                <th>Image</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial['testimonialId'] }}</td>
                                    <td>{{ $testimonial['testimonialName'] }}</td>
                                    <td>{{ $testimonial['testimonialDescription'] }}</td>
                                    <td><img src="{{ $testimonial['testimonialImage'] }}" alt="{{ $testimonial['testimonialName'] }}"></td>
                                    <td><span
                                            class="badge bg-info">{{ date('d M, Y h:i a', strtotime($testimonial['testimonialDate'])) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Experience details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Flag</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($experience as $exp)
                                <tr>
                                    <td>{{ $exp['expId'] }}</td>
                                    <td>{{ $exp['expTitle'] }}</td>
                                    <td>{{ $exp['expCompany'] }}</td>
                                    <td>{{ $exp['expDesc'] }}</td>
                                    <td>{{ $exp['expCity'] . ', ' . $exp['expCountry'] }}</td>
                                    <td><span
                                            class="badge bg-info">{{ date('d M, Y', strtotime($exp['expStartDate'])) }}</span>
                                    </td>
                                    <td><span
                                            class="badge bg-warning">{{ date('d M, Y', strtotime($exp['expEndDate'])) }}</span>
                                    </td>
                                    <td>
                                        @if ($exp['flag'] == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Education details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Institute</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($education as $edu)
                                <tr>
                                    <td>{{ $edu['eduId'] }}</td>
                                    <td>{{ $edu['eduTitle'] }}</td>
                                    <td>{{ $edu['eduInstitute'] }}</td>
                                    <td>{{ $edu['eduDesc'] }}</td>
                                    <td>{{ $edu['eduCity'] . ', ' . $edu['eduCountry'] }}</td>
                                    <td><span
                                            class="badge bg-info">{{ date('d M, Y', strtotime($edu['eduStartDate'])) }}</span>
                                    </td>
                                    <td><span
                                            class="badge bg-warning">{{ date('d M, Y', strtotime($edu['eduEndDate'])) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Links details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Link Address</th>
                                <th>Icon class</th>
                                <th>Link Status</th>
                                <th>Link target</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($links as $lnk)
                                <tr>
                                    <td>{{ $lnk['linkId'] }}</td>
                                    <td>{{ $lnk['linkName'] }}</td>
                                    <td>{{ $lnk['linkAddress'] }}</td>
                                    <td>{{ $lnk['linkIcon'] }}</td>
                                    <td>
                                        @if ($lnk['linkStatus'] == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($lnk['linkTarget'] == '1')
                                            <span class="badge bg-warning">New</span>
                                        @else
                                            <span class="badge bg-info">Parent</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($lnk['linkDownload'] == '1')
                                            <span class="badge bg-primary">Yes</span>
                                        @else
                                            <span class="badge bg-secondary">No</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Facts details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Icon class</th>
                                <th>Digit</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facts as $fct)
                                <tr>
                                    <td>{{ $fct['fId'] }}</td>
                                    <td>{{ $fct['fTitle'] }}</td>
                                    <td>{{ $fct['fIcon'] }}</td>
                                    <td>{{ $fct['fDigit'] }}</td>
                                    <td>{{ $fct['fDesc'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Skills details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skl)
                                <tr>
                                    <td>{{ $skl['skillId'] }}</td>
                                    <td>{{ $skl['skillTitle'] }}</td>
                                    <td>{{ $skl['skillPercentage'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Bruteforce details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>IP Address</th>
                                <th>Browser Info</th>
                                <th>Operating System</th>
                                <th>Device Type</th>
                                <th>Count</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bruteforce as $bf)
                                <tr>
                                    <td>{{ $bf['bfId'] }}</td>
                                    <td>{{ $bf['bfIP'] }}</td>
                                    <td>{{ $bf['bfBrowserInfo'] }}</td>
                                    <td>{{ $bf['bfOperatingSystem'] }}</td>
                                    <td>{{ $bf['bfDeviceType'] }}</td>
                                    <td><span class="badge bg-info">{{ $bf['bfCount'] }}</span></td>
                                    <td><span class="badge bg-danger">{{ date("d M, Y h:i:s a", (strtotime($bf['bfFailures']) + 19800)) }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Bruteforce details</strong></h3>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-bordered example2" id="example2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image Path</th>
                                <th>Alter Text</th>
                                <th>Image Height</th>
                                <th>Image Width</th>
                                <th>Status</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $img)
                                <tr>
                                    <td>{{ $img['imgId'] }}</td>
                                    <td>{{ $img['imgTitle'] }}</td>
                                    <td>{{ $img['imgFile'] }}</td>
                                    <td>{{ $img['imgAlt'] }}</td>
                                    <td>{{ $img['imgHeight'] == '' ? 'null' : $img['imgHeight'] }}</td>
                                    <td>{{ $img['imgWidth'] == '' ? 'null' : $img['imgWidth'] }}</td>
                                    <td>
                                        @if ($img['imgStatus'] == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td><img src="{{ $img['imgFile'] }}" class="img-fluid mb-2"
                                            style="height: 10vh; width: auto"></td>
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
            $("#example1").DataTable({
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
