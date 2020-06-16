
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <script src="{{ url('fontawesome-free-5.13.0-web\js\all.min.js') }}"></script>

    <title>Admins Dashboard</title>

    <!-- Bootstrap core CSS -->
<link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ url('cssadmin/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><span style="text-transform:uppercase;"> ADMIN {{ Auth::guard('admin')->user()->username}}</span></a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/admin/logout">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/admin/dashboard">
            <i class="fas fa-home"></i></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/admins">
            <i class="fas fa-user-cog ml-1"></i></span>
              Admins
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/users">
            <i class="fas fa-user ml-1 mr-1"></i></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/products">
            <i class="fas fa-cart-plus mr-1"></i></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/couriers">
            <i class="fas fa-biking mr-1"></i></span>
              Couriers
            </a>
          </li>      
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-clipboard"></i> Report</h1>
      </div>
      <div class="card-body">
        <h5 class="card-title">Report transaksi tahun {{ $tahun }}</h5>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bulan</th>
                      <th>Transaksi expired</th>
                      <th>Transaksi dibatalkan</th>
                      <th>Transaksi delivered</t>
                      <th>Jumlah Transaksi Keseluhuran</th>
                      <th>Pemasukan Bulanan</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>Januari</td>
                            <td>{{ $expired[1] }}</td>
                            <td>{{ $canceled[1] }}</td>
                            <td>{{ $delivered[1] }}</td>
                            <td>{{ $transaksi[1] }}</td>
                            <td>Rp.{{ number_format($pemasukan[1],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Februari</td>
                            <td>{{ $expired[2] }}</td>
                            <td>{{ $canceled[2] }}</td>
                            <td>{{ $delivered[2] }}</td>
                            <td>{{ $transaksi[2] }}</td>
                            <td>Rp.{{ number_format($pemasukan[2],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Maret</td>
                            <td>{{ $expired[3] }}</td>
                            <td>{{ $canceled[3] }}</td>
                            <td>{{ $delivered[3] }}</td>
                            <td>{{ $transaksi[3] }}</td>
                            <td>Rp.{{ number_format($pemasukan[3],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>April</td>
                            <td>{{ $expired[4] }}</td>
                            <td>{{ $canceled[4] }}</td>
                            <td>{{ $delivered[4] }}</td>
                            <td>{{ $transaksi[4] }}</td>
                            <td>Rp.{{ number_format($pemasukan[4],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Mei</td>
                            <td>{{ $expired[5] }}</td>
                            <td>{{ $canceled[5] }}</td>
                            <td>{{ $delivered[5] }}</td>
                            <td>{{ $transaksi[5] }}</td>
                            <td>Rp.{{ number_format($pemasukan[5],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Juni</td>
                            <td>{{ $expired[6] }}</td>
                            <td>{{ $canceled[6] }}</td>
                            <td>{{ $delivered[6] }}</td>
                            <td>{{ $transaksi[6] }}</td>
                            <td>Rp.{{ number_format($pemasukan[6],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Juli</td>
                            <td>{{ $expired[7] }}</td>
                            <td>{{ $canceled[7] }}</td>
                            <td>{{ $delivered[7] }}</td>
                            <td>{{ $transaksi[7] }}</td>
                            <td>Rp.{{ number_format($pemasukan[7],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Agustus</td>
                            <td>{{ $expired[8] }}</td>
                            <td>{{ $canceled[8] }}</td>
                            <td>{{ $delivered[8] }}</td>
                            <td>{{ $transaksi[8] }}</td>
                            <td>Rp.{{ number_format($pemasukan[8],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>September</td>
                            <td>{{ $expired[9] }}</td>
                            <td>{{ $canceled[9] }}</td>
                            <td>{{ $delivered[9] }}</td>
                            <td>{{ $transaksi[9] }}</td>
                            <td>Rp.{{ number_format($pemasukan[9],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Oktober</td>
                            <td>{{ $expired[10] }}</td>
                            <td>{{ $canceled[10] }}</td>
                            <td>{{ $delivered[10] }}</td>
                            <td>{{ $transaksi[10] }}</td>
                            <td>Rp.{{ number_format($pemasukan[10],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>November</td>
                            <td>{{ $expired[11] }}</td>
                            <td>{{ $canceled[11] }}</td>
                            <td>{{ $delivered[11] }}</td>
                            <td>{{ $transaksi[11] }}</td>
                            <td>Rp.{{ number_format($pemasukan[11],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td>Desember</td>
                            <td>{{ $expired[12] }}</td>
                            <td>{{ $canceled[12] }}</td>
                            <td>{{ $delivered[12] }}</td>
                            <td>{{ $transaksi[12] }}</td>
                            <td>Rp.{{ number_format($pemasukan[12],0,'.','.') }}</td>
                        </tr>
                        <tr>
                            <td><b>Total</b></td>
                            <td><b>{{ array_sum($expired) }}</b></td>
                            <td><b>{{ array_sum($canceled) }}</b></td>
                            <td><b>{{ array_sum($delivered) }}</b></td>
                            <td><b>{{ array_sum($transaksi) }}</b></td>
                            <td><b>Rp.{{ number_format(array_sum($pemasukan),0,'.','.') }}</td>
                        </tr>
                  </tbody>
                </table>
            </div>
        </div>

        <div class="card-body">
        <h5 class="card-title">Grafik transaksi tahun {{ $tahun }}</h5>
        <div class="row">
            {!! $chart->container() !!}
            {!! $chart->script() !!}
        </div>    
        </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        <script src="{{ url('cssadmin/dashboard.js') }}"></script>      
        
</body>
</html>
