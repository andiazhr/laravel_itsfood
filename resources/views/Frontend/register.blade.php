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
        <div class="dropdown left">
            <a href="{{ url('itsfood') }}">
				<button class="dropbtn">
                Home
            	</button>
			</a>
        </div>

        <div class="dropdown">
            <a href="#myMenu">
				<button class="dropbtn">
                Menu
            	</button>
			</a>
        </div>
		
		<div class="dropdown">
			<a href="#About">
				<button class="dropbtn">
                Tentang Kami
            	</button>
			</a>
        </div>
    </div>
	
	<div class="kolom2" id="logo">
        <a href="{{ url('itsfood') }}"><div class="logo"><img src="{{ asset ('assets/images/chickenleg.png') }}" alt="Jet" style="width:67px;height:67px;"></div></a>
    </div>
	
	<div class="kolom5" id="menu">
        <div class="dropdown">
			<a href="#Pesan">
            	<button class="dropbtn">
                Pesan
            	</button>
			</a>
        </div>
		
		<div class="dropdown">
            <button class="dropbtn">
                <a href="{{ url('itsfood/galery') }}">Galeri</a>
            </button>
        </div>
	
        <div class="dropdown">
			<a href="#Lokasi">
				<button class="dropbtn">
                Lokasi Kami
           		</button>
			</a>
        </div>
		<form action="{{ url('search') }}">
			<div class="kolom5">
				<input style="margin:9px 0 0 12px;" name="menu" type="text" class="form-control" placeholder="Search">
			</div>
		</form>
    </div>
</div>
	
    <div class="kolom12 content">
        <div class="kolom6 boxdaftar" style="margin: 35px 0 0 25%">
            <div class="kolom12" style="margin:20px 0 10px 40px">
            <p style="color:#FF7F00; font-family:Sofia; font-size: 20px"><img src="{{ asset ('assets/images/chickenleg.png') }}" alt="Jet" width="67px" height="67px" style="margin:0 10px 0 170px">Daftar Its Food</p>
                <form action="" method="post">
                @csrf
                    <div class="kolom12">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Nama</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama anda"></div>
                    </div>

                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Username</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    </div>

                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Email</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" class="form-control" name="email_pelanggan" placeholder="Email "></div>
                    </div>

                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Password</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" class="form-control" name="password" placeholder="Password"></div>
                    </div>

                    <div class="kolom12" style="margin:20px 0 0 0">
                        <div class="kolom3" style="text-align: right"><label for="nama" style="margin:5px 0 0 0; font-family:Raleway">Konfirmasi Password</label></div>
                        <div class="kolom5" style="margin:0 20px 0 20px"><input type="text" class="form-control" name="konfirmasi_pass" placeholder="Konfirmasi Password"></div>
                    </div>

                    <button class="btn btn-primary" style="margin:30px 20px 0 33.33%" type="submit">Daftar</button>
                    <button class="btn btn-default" style="margin:30px 20px 0 0" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
