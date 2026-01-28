@extends('layout.main')

    @push('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.min.css">
    @endpush

@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="pt-3 pb-3">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-uppercase mt-2">Liste des transactions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>ID</th>
                                    <th>Emetteur</th>
                                    <th>Récepteur</th>
                                    <th>Unités</th>
                                    <th>Montant</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                </tbody>
                                    <tr>
                                        <td>2026-01-15 14:32</td>
                                        <td>tx_1234567890abcdef</td>
                                        <td>uf:w_7f92a4c1</td>
                                        <td>uf:w_7x42a4c5</td>
                                        <td>LVN</td>   
                                        <td class="text-success">+ 150.00</td>
                                        <td>Completed / Pending / Failed</td>
                                        <td>
                                            <a href="/units/transactions/view" class="btn btn-info btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2026-01-14 10:15</td>
                                        <td>tx_abcdef1234567890</td>
                                        <td>uf:w_7f92a4c1</td>
                                        <td>uf:w_7x42a4c5</td>
                                        <td>USD</td>   
                                        <td class="text-danger">- 300.00</td>
                                        <td>Completed / Pending / Failed</td>
                                        <td>
                                            <a href="/units/transactions/view" class="btn btn-info btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2026-01-13 09:45</td>
                                        <td>tx_0987654321fedcba</td>
                                        <td>uf:w_7f92a4c1</td>
                                        <td>uf:w_7x42a4c5</td>
                                        <td>EUR</td>   
                                        <td class="text-success">+ 200.00</td>
                                        <td>Completed / Pending / Failed</td>
                                        <td>
                                            <a href="/units/transactions/view" class="btn btn-info btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2026-01-12 16:20</td>
                                        <td>tx_fedcba0987654321</td>
                                        <td>uf:w_7f92a4c1</td>
                                        <td>uf:w_7x42a4c5</td>
                                        <td>GBP</td>   
                                        <td class="text-danger">- 250.00</td>
                                        <td>Completed / Pending / Failed</td>
                                        <td>
                                            <a href="/units/transactions/view" class="btn btn-info btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

    @push('js')
        <script src="https://cdn.datatables.net/2.3.6/js/dataTables.min.js"></script>
        <script>
            $(function () {
                let table = new DataTable('#myTable');
            });
        </script>

    @endpush