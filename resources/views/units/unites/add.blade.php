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
                            <h3 class="card-title text-uppercase mt-2">Créer une unité</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputFile">Icône</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choisir une image</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom de l'unité">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stock initial</label>
                                <input type="number" class="form-control" name="stock_initial" id="stock_initial" placeholder="Entrez le stock initial de l'unité">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Rechargeable</label>
                                <select class="form-control">
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Fédération</label>
                                <select class="form-control">
                                    <option>Locale</option>
                                    <option>Fédérée</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select class="form-control">
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Création de l'unité</button>
                        </div>
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