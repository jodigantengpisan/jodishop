@extends('admin')
@section('main')

<div id="popUpModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="frm-edit">
                    {{Form::open(['url' => 'updatess', 'files' => 'true'])}}
                    <div class="form-group" style="padding-bottom: 20px !important;">
                        <div class="form-group">
                            <h5>Pilih Status</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::text('status',null,['class' => 'form-control status'])}}
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px !important;">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                            </div>
                            {{Form::close()}}
                            <div class="col-6">
                                <button type="button" class="btn btn-danger btn-sm btn-block"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>


<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href="./barang">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="img/Asset 4.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                            <a class="js-arrow" href="./admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                        
                        <li>
                            <a href="./barang">
                                <i class="fas fa-briefcase"></i>Barang</a>
                        </li>
                        <li>
                            <a href="./best_seller">
                                <i class="fas fa-tags"></i>Produk Unggulan</a>

                        <li>
                            <a href="./pesanadmin">
                                <i class="far fa-envelope"></i>Pesan</a>
                        </li>
                        <li class="active">
                            <a href="./pelanggan">
                                <i class="fas fa-users"></i>Pelanggan</a>
                        </li>
                        <li class="active">
                            <a href="./pesanan">
                                <i class="fas fa-shopping-cart"></i>Pesanan</a>
                        </li>
                        <li class="active">
                            <a href="./viewupload">
                                <i class="fas  fa-credit-card"></i>Bukti Transfer</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" align="right">
                        <div class="header-wrap">

                            <div class="header-button">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="uil uil-signout"></i>
                                        <span class="link-name" align="right">Logout</span>
                                    </a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <br>
            <br>
            <br>
            <br>
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2><i class="fa fa-shopping-cart"></i> List Pesanan</h2>
                        <p> Note : <p>
                                <p> Code : 1 (Sudah Pesan)<p>
                                        Code : 2 (Sudah Di Bayar)
                                        <p>
                                            Code : 3 (Pesanan Ditolak)
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                       
                                                        <th>Tanggal</th>
                                                        <th>Status</th>
                                                        <th>Total Harga</th>
                                                        <th>Detail</th>
                                                        <th>Kode</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no =1; ?>
                                                    @foreach($pesanan as $pesanan)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $pesanan->name }}</td>
                                                       
                                                        <td>{{ $pesanan->tanggal }}</td>
                                                        <td>
                                                            @if($pesanan->status == 1)
                                                            Sudah pesan
                                                            @elseif($pesanan->status == 2)
                                                            Sudah dibayar
                                                            @else
                                                            Pesanan ditolak
                                                            @endif
                                                        </td>
                                                        <td>Rp.
                                                            {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('pesanan/admin/') }}/{{ $pesanan->id_pesanan }}"
                                                                class="btn btn-primary"><i class="fa fa-info">
                                                                    Detail</i></a>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success far fa-edit  btn-ubah"
                                                                status="{{$pesanan->status}}"
                                                                idx="{{$pesanan->id_pesanan}}"></button>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                    </div>
                </div>

                @endsection

                @section('script')
                <script>
                    $('.btn-ubah').on('click', function () {
                        $('#popUpModal').modal('show');
                        $('.status').val($(this).attr('status'));
                        $('.idx').val($(this).attr('idx'));
                        $('.frm-edit').show();
                        $('.frm-hapus').hide();
                    })

                </script>
                @endsection
