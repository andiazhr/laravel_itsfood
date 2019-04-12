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
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
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

        @if(session()->get('fail'))
			<div class="kolom12">
				<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3" style="text-align:center; font-size:20px; top:30px;">
              		<div class="alert alert-danger">
                		{{ session()->get('fail') }} <img src="{{ asset ('assets/images/attention.png') }}" alt="Jet" style="width:36px;height:36px;">
              		</div>
			  	</div>
			</div>
         @endif
         
         @if(session()->get('login'))
			<div class="kolom12">
				<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3" style="text-align:center; font-size:20px; top:30px;">
              		<div class="alert alert-info">
                		{{ session()->get('login') }} <img src="{{ asset ('assets/images/login3.png') }}" alt="Jet" style="width:36px;height:36px;">
              		</div>
			  	</div>
			</div>
     	@endif

    <div class="kolom12 content">

    <div class="kolom6 boxdaftar" style="margin: 35px 0 0 25%">
            <div class="kolom12" style="margin:20px 0 10px 40px">
            <p style="color:#fff; font-family:Sofia; font-size: 20px"><img src="{{ asset ('assets/images/chickenleg.png') }}" alt="Jet" width="67px" height="67px" style="margin:0 10px 0 170px">Masuk Its Food</p>
                <form action="{{ route('masuk.submit')}}" method="post">
                    @csrf
                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Username</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" autofocus required class="form-control" name="username" id="username" placeholder="Username"></div>
                    </div>

                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Password</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="password" class="form-control" name="password" id="password" placeholder="Password"></div>
                    </div>

                    <div class="kolom12" style="margin: 10px 0 0 10%;">Belum punya akun? <a href="{{ route('daftar')}}" class="disini">Klik disini </a> &nbsp; : . : | : . : &nbsp; Lupa password? <a href="{{ route('daftar')}}" class="disini">Klik disini </a></div>

                    <button class="btn btn-primary" style="margin:10px 20px 0 31.33%" type="submit">Login</button>
                    <a href="{{url('itsfood')}}"><button class="btn btn-warning" style="margin:10px 20px 0 0" type="button">Kembali</button></a>
                </form>
            </div>
        </div>
    </div>

    <script>$('div.alert').delay(5000).slideUp(300);</script>
</body>
</html>
