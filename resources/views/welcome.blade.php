@extends('layout.main')

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3 mb-3">
                    <span>Instance</span>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                    <span class="info-box-icon bg-dark elevation-1">🟢</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Status de l'instance</span>
                        <span class="info-box-number">
                            OK / Warning / Error
                        <!-- 10
                        <small>%</small> -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">⏱️</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Uptime</span>
                        <span class="info-box-number">5 Jrs 45 Hrs 50 Min 10 Sec</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Version</span>
                        <span class="info-box-number">3.5.2</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🔐</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mode instance</span>
                        <span class="info-box-number">UI (Activé) / API (Activé) / Hybride (Activé)</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🌍</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Fédération</span>
                        <span class="info-box-number">Activé / X Instances connectés</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">

                <div class="col-md-12 mb-3">
                    <span>Global</span>
                </div>  
                
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Unités totales</span>
                        <span class="info-box-number">45.649</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Transactions totales</span>
                        <span class="info-box-number">100.000</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Transactions d'ajouts</span>
                        <span class="info-box-number">50</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Transactions de retrait</span>
                        <span class="info-box-number">35</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-8">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-dark elevation-1">🧠</span>

                    <div class="info-box-content">
                        <span class="info-box-text">Volume total échangé</span>
                        <span class="info-box-number">12.564.698.522</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

            </div>
            {{-- <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3 class="text-white">150</h3>

                        <p class="text-white">New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3 class="text-white">53<sup style="font-size: 20px">%</sup></h3>

                        <p class="text-white">Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-white">44</h3>

                        <p class="text-white">User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 class="text-white">65</h3>

                        <p class="text-white">Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <!-- ./col -->
            </div> --}}
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection