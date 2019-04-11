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
<div class="kolom12" id="navbar" style="z-index: 1; position: relative;">
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
	
    <div class="kolom12 content" style="display: inline-block; margin:-40px 0 0 0;">

	<div class="modal fade" id="detail" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Detail Menu <img src="{{ asset('assets/images/info4.png') }}" alt="Alternate Text" width="25px" height="25px" /></h4>
					</div>
					@foreach($allmenu as $menu)
					<div class="row">
						<div class="col-md-12">
							<div class="kolom12">
								<div class="kolom6" style="margin:0 0 0 25.66%"><img src="{{ asset('/images/menu/'. $menu->gambar_menu) }}" width="100%" height="200px"></div><br>
								<div class="kolom12">
									<div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-3">
									<center>
										<strong>
											<li class="list-group-item" style="font-family:Calibri; font-size:22px">{{$menu->nama_menu}} <img src="{{ asset('/images/iconmenu/'. $menu->icon_menu) }}" style="width:40px; height: 40px;"> <span class="label label-warning">{{ $menu->tipe_menu}}</span> </p>
										</strong> 
										<h4><span class="label label-primary">Rp. {{ number_format($menu->harga_menu)}}</span> </h4>
										<h4 style="margin:15px 0 5px 0;">{{ $menu->deskripsi_menu}}</h4>
									</center>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="kolom12 main" id="myMenu">
			<div class="backcolor4">
				<div class="kolom12 juduldismenu">
				 <img src="{{ asset ('assets/images/menu.png') }}" style="width:50px; height:50px;"> Galery Kami <img src="{{ asset ('assets/images/menu.png') }}" style="width:50px; height:50px;">
				</div>
				<div class="kolom12" >
					<div class="kolom1 menubar mmenubar" onclick="filterSelection('makanan')">
						Makanan
					</div>
					<div class="kolom2 menubar active" onclick="filterSelection('all')">
						Semua Menu
					</div>
					<div class="kolom1 menubar" onclick="filterSelection('minuman')">
						Minuman
					</div>
				</div>
			
				@foreach($eat as $makanan)
				<div class="column makanan">	
					<div class="contentfilter">
						<div class="kolom12">
							<div class="container">
								<a type="button" href="#" data-id="{{$makanan->id_menu}}" data-toggle="modal" data-target="#detail"  style="cursor:pointer">
								<img src="{{ asset('/images/menu/'. $makanan->gambar_menu) }}" class="image">
								<div class="overlay">
									<div class="addmenu">
										<img src="{{ asset ('assets/images/info4.png') }}" style="width:80px; height:80px;">
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			
				@foreach($drink as $minuman)
				<div class="column minuman">
					<div class="contentfilter">
						<div class="kolom12">
							<div class="container">
							<a type="button" data-toggle="modal" data-target="#detail"  style="cursor:pointer">
								<img src="{{ asset('/images/menu/'. $minuman->gambar_menu) }}" class="image">
								<div class="overlay">
									<div class="addmenu">
										<img src="{{ asset ('assets/images/info4.png') }}" style="width:80px; height:80px;">
									</div>
								</div>
							</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
    </div>

	
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
    
    <script>
		filterSelection("all")
		function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("column");
		if (c == "all") c = "";
		for (i = 0; i < x.length; i++) {
			w3RemoveClass(x[i], "show");
			if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

		function w3AddClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
			}
		}

		function w3RemoveClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			while (arr1.indexOf(arr2[i]) > -1) {
			arr1.splice(arr1.indexOf(arr2[i]), 1);     
				}
			}
			element.className = arr1.join(" ");
		}
		// Add active class to the current button (highlight it)
		var header = document.getElementById("myMenu");
		var menu = header.getElementsByClassName("menubar");
		for (var i = 0; i < menu.length; i++) {
 		 menu[i].addEventListener("click", function() {
		    var current = document.getElementsByClassName("active");
		    current[0].className = current[0].className.replace(" active", "");
		    this.className += " active";
		  });
		}
		</script>

		<script>
		    $.ajax({
			url: "{{ route('galery')}}/"+ id,
			type: 'PUT',
			// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: {
				id_menu : id,
				_token:     '{{ csrf_token() }}'
			}
			})
		</script>
		
</body>
</html>
