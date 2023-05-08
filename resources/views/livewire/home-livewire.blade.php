<div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashbord</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Jamaah</span>
                                <span class="info-box-number">
                                    {{ $totalJamaah }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Jamaah Laki-laki</span>
                                <span class="info-box-number">
                                    {{ $totalJamaahPria }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-female"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Jamaah Perempuan</span>
                                <span class="info-box-number">
                                    {{ $totalJamaahWanita }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-bill"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Nafi Isbat</span>
                                <span class="info-box-number">
                                    {{ number_format($totalNafiIsbat) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fas fa-money-bill-wave"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Bayar</span>
                                <span class="info-box-number">
                                    {{ number_format($totalBayar) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>