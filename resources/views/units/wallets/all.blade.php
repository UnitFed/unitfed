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
                            <h3 class="card-title text-uppercase mt-2">Liste des wallets</h3>
                            <a href="/units/wallets/add" class="btn btn-primary p-1 float-right">Créer un wallet</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Propriétaire</th>
                                    <th>Adresse</th>
                                    <th>Unités</th>
                                    <th>Type</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Dernière activité</th>
                                    <th>Création</th>
                                    <th>Origine</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LVN</td>
                                        <td>uf:w_7f92a4c1@unitfed.social</td>
                                        <td>3</td>
                                        <td>🔴 System</td>
                                        <td>450.50</td>
                                        <td>Active / Frozen / Archived / Pending</td>
                                        <td>2 Min Ago / 2026-01-12</td>
                                        <td>26-01-2026</td>
                                        <td>Local / Federated / External</td>
                                        <td>
                                            <a href="/units/wallet/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Admin</td>
                                        <td>uf:w_7f92a4c1@unitfed.social</td>
                                        <td>5</td>
                                        <td>🔵 Federated</td>
                                        <td>1250.00</td>
                                        <td>Frozen</td>
                                        <td>10 Min Ago / 2026-01-10</td>
                                        <td>15-01-2026</td>
                                        <td>Federated</td>
                                        <td>
                                            <a href="/units/wallet/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>User123</td>
                                        <td>uf:w_7f92a4c1@unitfed.social</td>
                                        <td>2</td>
                                        <td>🟢 Trusted</td>
                                        <td>300.75</td>
                                        <td>Active</td>
                                        <td>5 Min Ago / 2026-01-11</td>
                                        <td>20-01-2026</td>
                                        <td>Local</td>
                                        <td>
                                            <a href="/units/wallet/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Guest</td>
                                        <td>uf:w_7f92a4c1@unitfed.social</td>
                                        <td>1</td>
                                        <td>🔴 System</td>
                                        <td>50.00</td>
                                        <td>Archived</td>
                                        <td>1 Hr Ago / 2026-01-09</td>
                                        <td>05-01-2026</td>
                                        <td>External</td>
                                        <td>
                                            <a href="/units/wallet/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>MemberX</td>
                                        <td>uf:w_7f92a4c1@unitfed.social</td>
                                        <td>4</td>
                                        <td>🟡 External</td>
                                        <td>800.20</td>
                                        <td>Pending</td>
                                        <td>30 Min Ago / 2026-01-12</td>
                                        <td>22-01-2026</td>
                                        <td>External</td>
                                        <td>
                                            <a href="/units/wallet/update" class="btn btn-info btn-sm">Modifier</a>
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