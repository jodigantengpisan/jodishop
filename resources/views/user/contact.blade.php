@extends('master')
@section('main')

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
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li class="active"><a href="./contact">Contacts</a></li>
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
                        <h4>About Us</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


<!-- Contact Section Begin -->
<section class="contact spad">
        <div class="container">
            <div class="row">
            <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.346915500487!2d106.76152071529819!3d-6.603740166392654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5713e737c8b%3A0x1d0b1c22a6b11352!2sJl.%20Cikoneng%20II%20Kp.%20Cikoneng%20No.13%2C%20RT.6%2FRW.3%2C%20Pagelaran%2C%20Kec.%20Ciomas%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016610!5e0!3m2!1sid!2sid!4v1656263760661!5m2!1sid!2sid" width="1000" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br>
                <br>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        
                        <div class="section-title">
                            <br>
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>Tetap terhubung dengan kami dimanapun kalian berada, karena kami menyediakan semua kebutuhan kecantikan yang kalian butuhkan dengan kepuasaan pelanggan sebagai prioritas</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Bogor</h4>
                                <p>Kp. Cikoneng 2 No 12 Rt06/03 Kabupaten Bogor <br />0878 9871 0573</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="{{ route('pesan.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <br>
                                    <input type="text" name="nama_pesan" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <input type="text" name="email_pesan" placeholder="Email">
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="wa_pesan" placeholder="Nomer WA">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="isi_pesan"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    @stop