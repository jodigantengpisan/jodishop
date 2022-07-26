@extends('master')
@section('main')

<body>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Now Everyone Can Be Beautiful</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/Asset 4.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./dashboard">Home</a></li>
                            <li><a href="./shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about">About Us</a></li>
                                    <li><a href="./shop_detail">Shop Details</a></li>
                                    <li><a href="./shopping_cart">Shopping Cart</a></li>
                                    <li class="active"><a href="./checkout">Check Out</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="./contact">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Pengiriman</h4>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
    
            <div class="container">
                <div class="card">
                <form action="{{url('/')}}" method='get'> 
                @csrf
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h5>Nama Anda</h5>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h5>Kirim Dari</h5>
                                        <select name="province_from" class="form-control">
                                            <option value="" holder>Pilih provinsi</option>
                                            @foreach($provinsi as $result)
                                            <option value="{{$result->id}}">{{$result->province}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <select name="origin" class="form-control">
                                        <option value="" holder>Pilih kota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h5>Kirim Ke</h5>
                                        <select name="province_to"  class="form-control">
                                            <option value="" holder>Pilih provinsi</option>
                                            @foreach($provinsi as $result)
                                            <option value="{{$result->id}}">{{$result->province}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <select name="destination" class="form-control">
                                        <option value="" holder>Pilih kota</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h5> Berat Paket </h5>
                                        <input name="weight" type="text" class="form-control">
                                        <small>Dalam gram contoh: 1700 = 1,7kg</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h5>Pilih Kurir</h5>
                                        <select name="courier" id="" class="form-control">
                                            <option value="" holder>Pilih Kurir</option>
                                            <option value="jne">JNE</option>
                                            <option value="tiki">TIKI</option>
                                            <option value="pos">Pos Indonesia</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-block">HITUNG ONGKIR</button>
                                    </div>
                                </div>
                            </div>

                    </div>
                </form>
                    
                    @if($cekongkir)
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Estimasi</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cekongkir as $result)
                                <tr>
                                        <td>{{$result['service']}}</td>
                                        <td>{{$result['description']}}</td>
                                        <td>{{$result['cost'][0]['value']}}</td>
                                        <td>{{$result['cost'][0]['etd']}}</td>
                                        <td>{{$result['cost'][0]['note']}}</td>
                                    </tr>
                            @endforeach    
                                </tbody>
                            </table> 
                        </div>
                    </div>
                    @else

                    @endif
                </div>
                               
            <div>
    </section>
            @stop
            @section('script')

            <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="province_from"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="origin"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="origin"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="origin"]').empty();
                }
            });

            $('select[name="province_to"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
            
        });
    </script>              
                         
                    
       
    
     
</body>
    @endsection