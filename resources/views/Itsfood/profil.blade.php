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
				<input style="margin:3px 0 0 0; background-image: url('/assets/images/search.png'); background-position: 6px 7px; background-repeat: no-repeat; text-indent: 15px;" name="menu" type="search" class="form-control" placeholder="Search">
			</div>
		</form>
    </div>
</div>
	
    <div class="kolom12 content">
	{{ (auth('pelanggan')->user()->nama_pelanggan) }} <br>
	{{ (auth('pelanggan')->user()->username) }} <br>
	{{ (auth('pelanggan')->user()->email_pelanggan) }}
    </div>
</body>
</html>
