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

        <div class="dropdown left">
            <a href="#myMenu">
				<button class="dropbtn">
                Menu
            	</button>
			</a>
        </div>
		
		<div class="dropdown left">
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
	
	<h2 style="margin: 0 0 30px 40px">Search Result For {{ app('request')->input('menu') }}</h2>
	
        <div class="sosmed">
		<a href="#facebook" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/facebook.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
            <a href="#instagram" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/instagram.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
			<a href="#instagram" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/letter.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
            <a href="#instagram" style="float: right; clear:right;"><img src="{{ asset('assets/images/location1.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
        </div>
		
		@foreach($hasil as $makanan)
		<div class="kolom12">
			<div class="kolom4" style="margin:0 0 40px 40px">
				<img src="{{ asset('/images/menu/'. $makanan->gambar_menu) }}" style="width:100%; height: 280px;">
			</div>
			<div class="kolom6">
				<h3><center style="margin: 40px 0 0 0; font-family:Raleway">{{$makanan->nama_menu}}</center></h3>
			</div>
		</div>
		@endforeach
	
    <div class="kolom12 footer">
        <div class="kolom3">
            <div class="contenttfoot"><img src="{{ asset ('assets/images/title.png') }}" style="width:100px; height:100px; margin-right:10px;"> ITS FOOD</div>
            <div class="line2"></div>
            <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
            <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
            <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>           
            <span class="dot"></span>
        </div>
        <div class="kolom9">
            <div class="contenttfoot2">ITS FOOD</div>
			<div class="contentfoot">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
            <div class="line3"></div>
            <span class="dot2"></span><span class="dot2"></span><span class="dot2"></span><span class="dot2"></span>
            <span class="dot2"></span><span class="dot2"></span><span class="dot2"></span><span class="dot2"></span>
            <span class="dot2"></span><span class="dot2"></span><span class="dot2"></span><span class="dot2"></span>
            <span class="dot2"></span> 
            
        </div>
        <div class="copy">Copyright 2018 <a href="#" class="w">ItsFood.Or.Id.</a> All Rights Reserved.</div>
    </div>
</body>
</html>
