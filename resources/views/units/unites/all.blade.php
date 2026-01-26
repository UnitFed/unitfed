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
                            <h3 class="card-title text-uppercase mt-2">Liste des unités</h3>
                            <a href="/units/unites/add" class="btn btn-primary p-1 float-right">Créer une unité</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Icône</th>
                                    <th>Nom</th>
                                    <th>Stock initial</th>
                                    <th>Stock réel</th>
                                    <th>Rechargeable</th>
                                    <th>Status</th>
                                    <th>Origine</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>🌀</td>
                                        <td>Karma</td>
                                        <td>1000</td>
                                        <td>742</td>
                                        <td>No</td>
                                        <td>Locale</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>🪙</td>
                                        <td>Gold</td>
                                        <td>5000</td>
                                        <td>3120</td>
                                        <td>Yes</td>
                                        <td>Fédérée</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>⭐</td>
                                        <td>Reputation</td>
                                        <td>10000</td>
                                        <td>9876</td>
                                        <td>No</td>
                                        <td>Locale</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>⚡</td>
                                        <td>Energy</td>
                                        <td>2000</td>
                                        <td>430</td>
                                        <td>Yes</td>
                                        <td>Locale</td>
                                        <td>Paused</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>                                    

                                    <tr>
                                        <td>💳</td>
                                        <td>Credits</td>
                                        <td>100000</td>
                                        <td>84520</td>
                                        <td>Yes</td>
                                        <td>Fédérée</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>🗳️</td>
                                        <td>Votes</td>
                                        <td>300</td>
                                        <td>12</td>
                                        <td>No</td>
                                        <td>Locale</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>🔹</td>
                                        <td>Tokens</td>
                                        <td>10000</td>
                                        <td>0</td>
                                        <td>No</td>
                                        <td>Fédérée</td>
                                        <td>Depleted</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>💎</td>
                                        <td>Gems</td>
                                        <td>1500</td>
                                        <td>1490</td>
                                        <td>Yes</td>
                                        <td>Locale</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>🎫</td>
                                        <td>Access Pass</td>
                                        <td>50</td>
                                        <td>18</td>
                                        <td>No</td>
                                        <td>Locale</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>🤝</td>
                                        <td>Contribution</td>
                                        <td>9999</td>
                                        <td>6543</td>
                                        <td>Yes</td>
                                        <td>Fédérée</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="/units/unites/update" class="btn btn-info btn-sm">Modifier</a>
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