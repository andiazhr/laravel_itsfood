<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="{{ asset('assets/foodstyle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/bootstraps.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/chosen.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/ImageSelect.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/chosen.jquery.js') }}" rel="stylesheet">
	<link href="{{ asset('assets/ImageSelect.jquery.js') }}" rel="stylesheet">
	
    <title>itsFood</title>
    <style>
        * {
            box-sizing: border-box;
        }


        .kolom1 {
            width: 8.333%;
        }

        .kolom2 {
            width: 16.66%;
        }

        .kolom3 {
            width: 25%;
        }

        .kolom4 {
            width: 33.33%;
        }

        .kolom5 {
            width: 41.66%;
        }

        .kolom6 {
            width: 50%;
        }

        .kolom7 {
            width: 58.33%;
        }

        .kolom8 {
            width: 66.66%;
        }

        .kolom9 {
            width: 75%;
        }

        .kolom10 {
            width: 83.33%;
        }

        .kolom11 {
            width: 91.66%;
        }

        .kolom12 {
            width: 100%;
        }

        [class*="kolom"] {
            float: left;
        }
    </style>
</head>
<body>
<div class="kolom12" id="navbar">
    <div class="kolom5" id="menu">
	@if( auth('pelanggan')->check() )
        <div class="menudown">
			<button class="dropbtn">
				<img src="{{ asset ('assets/images/user3.png') }}" alt="Jet" style="width:20px;height:20px;"> {{ auth('pelanggan')->user()->username }}
            </button>
			<div class="menudown-content">
				<a href="{{ route('profil', auth('pelanggan')->user()->id_pelanggan) }}">
					<img src="{{ asset ('assets/images/user3.png') }}" alt="Jet" style="width:20px;height:20px;"> Profil
				</a>
				<a href="{{ route('keluar') }}">
					<img src="{{ asset ('assets/images/logout6.png') }}" alt="Jet" style="width:20px;height:20px;"> Logout
				</a>
			</div>
		</div>
        @else
        <div class="menudown">
            <div class="dropbtn">
				<img src="{{ asset ('assets/images/click2.png') }}" alt="Jet" style="width:20px;height:20px;"> Disini
			</div>
			<div class="menudown-content">
				<a href="{{ route('masuk') }}">
					<img src="{{ asset ('assets/images/login.png') }}" alt="Jet" style="width:20px;height:20px;"> Masuk            
				</a>
				<a href="{{ route('daftar') }}">
					<img src="{{ asset ('assets/images/register.png') }}" alt="Jet" style="width:20px;height:20px;"> Daftar
				</a>
			</div>
		</div>
		@endif
		
		<div class="menudown" style="float:right"> 
			<a href="{{ url('itsfood') }}#About">
				<button class="dropbtn">
                <img src="{{ asset ('assets/images/info5.png') }}" alt="Jet" style="width:20px;height:20px;"> Tentang Kami
            	</button>
			</a>
        </div>

		<div class="menudown" style="float:right">
			<a href="{{ url('itsfood') }}#myMenu">
				<button class="dropbtn">
				<img src="{{ asset ('assets/images/menu5.png') }}" alt="Jet" style="width:20px;height:20px;"> Menu
				</button>
			</a>
		</div>
		
        <div class="menudown" style="float:right">
            <a href="{{ url('itsfood') }}">
				<button class="dropbtn">
                <img src="{{ asset ('assets/images/home12.png') }}" alt="Jet" style="width:20px;height:20px;"> Home
            	</button>
			</a>
        </div>

    </div>
	
	<div class="kolom2" id="logo">
        <a href="{{ url('itsfood') }}"><div class="logo"><img src="{{ asset ('assets/images/chickenleg.png') }}" alt="Jet" style="width:56px;height:56px;"></div></a>
	</div>
	
	<div class="kolom5" id="menu">
		<div class="menudown"> 
			<a href="{{ route('keranjang')}}">
				<button class="dropbtn">
                <img src="{{ asset ('assets/images/cart10.png') }}" alt="Jet" style="width:20px;height:20px;"> Keranjang <span class="badge">{{ Session::has('keranjang') ? Session::get('keranjang')->totalJumbel : ''}}</span>
            	</button>
			</a>
		</div>
		
        <div class="menudown">
			<a href="{{ url('itsfood') }}#Pesan">
            	<button class="dropbtn">
                <img src="{{ asset ('assets/images/orderfood.png') }}" alt="Jet" style="width:20px;height:20px;"> Pesan
            	</button>
			</a>
        </div>
		
		<div class="menudown">
		<a href="{{ route('galery') }}">
			<button class="dropbtn">
			<img src="{{ asset ('assets/images/gallery.png') }}" alt="Jet" style="width:20px;height:20px;"> Galeri
			</button>
		</a>
        </div>
	
        <div class="menudown">
			<a href="{{ url('itsfood') }}#Lokasi">
				<button class="dropbtn">
                <img src="{{ asset ('assets/images/location1.png') }}" alt="Jet" style="width:20px;height:20px;"> Lokasi Kami
           		</button>
			</a>
        </div>
		<form action="{{ route('search') }}">
			<div class="kolom5">
				<input style="margin:3px 0 0 8px; background-image: url('/assets/images/search.png'); background-position: 6px 7px; background-repeat: no-repeat; text-indent: 15px;" name="menu" type="search" class="form-control" placeholder="Search">
			</div>
		</form>
    </div>
</div>
	
    <div class="kolom12 content">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <center><h2>Pesanan Anda</h2></center>
                <h3 style="margin: 5px 0 10px 0; float:left">Total Pesanan Anda : <span class="label label-info" style="float:right; margin-left:8px"> Rp. {{ number_format($totalPembelian) }}</span></h3><br><br>
                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">{{ Session::get('error')  }}</div>
                <form action="{{ route('pesan.submit') }}" method="post" id="form-pesan">
                 @csrf
                 @if(Session::has('keranjang'))
                        @foreach($menus as $nomor => $menu)
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="no-hp-pelanggan" style="display:none;">{{ $menu['menu']['nama_menu']}}</label>
                                        <input type="text" style="display:none;" name="id_menu[]" value="{{ $menu['menu']['id_menu']}}" class="form-control" readonly required>
                                        <input type="text" style="display:none;" name="harga_menu[]" value="{{ $menu['harga_menu']}}" class="form-control" readonly required>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="tanggal-pembelian" style="display:none;">Jumlah Beli</label>
                                        <input type="text" style="display:none;" name="jumbel_menu[]" value="{{ $menu['jumbel']}}" class="form-control" readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                @if( auth('pelanggan')->check() )
                                <input type="text" readonly value="{{ auth('pelanggan')->user()->nama_pelanggan }}" id="name" class="form-control" required>
                                <input type="text" readonly style="display:none" value="{{ auth('pelanggan')->user()->id_pelanggan }}" name="id_pelanggan" id="name" class="form-control" required>
                                @else
                                <input type="text" name="" id="name" class="form-control" required>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="no-hp-pelanggan">No Handphone</label>
                                        <input type="number" name="no_hp_pelanggan" id="no-hp-pelanggan" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="tanggal-pembelian">Tanggal</label>
                                        <input type="text" name="tanggal_pembelian" id="tanggal-pembelian" value="<?php echo date('Y-m-d') ?>" class="form-control" readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" name="alamat_pelanggan" id="alamat" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-number">Card Card Number</label>
                                <input type="number" name="" id="card-number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Expiration Month</label>
                                        <input type="text" maxlength="2" name="" id="card-expiry-month" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-year">Expiration Year</label>
                                        <input type="text" maxlength="4" name="" id="card-expiry-year" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-cvc">Card CVC</label>
                                <input type="number" name="" id="card-cvc" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <button style="margin:0 0 0 33.33%" type="submit" class="btn btn-success">Pesan Sekarang</button>
                </form>
            </div>
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('/assets/pesan.js') }}"></script>
    <script>$('div.alert').delay(3000).slideUp(300);</script>
</body>
</html>
