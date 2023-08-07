<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="font-monospace fw-lighter fw-bolder fs-5 text-white">Jumlah Menu</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="h5 mb-0 font-weight-bold text-gray-300"><?= $menu ?></div>
                    <div class="medium text-white"><i class="fas fa-book-open fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="font-monospace fw-lighter fw-bolder fs-5 text-white">Jumlah Penjualan</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="h5 mb-0 font-weight-bold text-gray-300"><?= $penjualan ?></div>
                    <div class="medium text-white"><i class="fas fa-shopping-cart fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <div class="font-monospace fw-lighter fw-bolder fs-5 text-white">Jumlah User</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="h5 mb-0 font-weight-bold text-gray-300"><?= $us ?></div>
                    <div class="medium text-white"><i class="fas fa-users fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="font-monospace fw-lighter fw-bolder fs-5 text-white">Jumlah Pegawai</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="h5 mb-0 font-weight-bold text-gray-300"><?= $pegawai ?></div>
                    <div class="medium text-white"><i class="fas fa-users fa-2x"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5">
        <div class="chart-body">
            <div class="chart-bar">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>