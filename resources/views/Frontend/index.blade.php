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
        <div class="dropdown">
            <a href="{{ url('masuk') }}">
				<button class="dropbtn">
                Login
            	</button>
			</a>
		</div>
        <div class="dropdown">
            <a href="{{ url('daftar') }}">
				<button class="dropbtn">
                Register
            	</button>
			</a>
        </div>		
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
                <a href="{{ url('galery') }}">Galeri</a>
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
	
	<div class="kolom12 imageback">
		<div class="backcolor">
			
		</div>
	</div>
	
        <div class="sosmed">
		<a href="#facebook" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/facebook.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
            <a href="#instagram" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/instagram.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
			<a href="#instagram" style="float: right; clear:right; margin-bottom:5px"><img src="{{ asset('assets/images/letter.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
            <a href="#instagram" style="float: right; clear:right;"><img src="{{ asset('assets/images/location1.png') }}" alt="Alternate Text" width="25px" height="25px" /></a>
        </div>
		
		@foreach($eat as $makanan)
        <div data-aos="fade-up"	data-aos-anchor-placement="bottom-bottom" class="kolom12">
			<div class="mySlidesMakanan">
				<div class="kolom7">
					<div class="bakcblur">
						<div class="tdescMakan">
						<div class="strightMakan">{{$makanan->nama_menu}}</div>
							<img src="{{ asset('/images/iconmenu/'. $makanan->icon_menu) }}" class="toppingMakan">
						</div>
						<div class="desc">
						{{$makanan->deskripsi_menu}}
						</div>	
					</div>
					<img src="{{ asset('/images/iconmenu/'. $makanan->icon_menu) }}" class="iconMakan">
				</div>
		
				<div class="kolom5 behind">
					<img src="{{ asset('/images/menu/'. $makanan->gambar_menu) }}" style="width:100%; height: 340px;">
				</div>
			</div>
		</div>
		@endforeach
		
		<div class="kolom12" data-aos="zoom-in-up">
			<div class="imageback2">
			<div class="backcolor2">
				
				</div>
			</div>
		</div>
		
		@foreach($drink as $minuman)
		<div data-aos="fade-up"	data-aos-anchor-placement="bottom-bottom" class="kolom12">
			<div class="mySlidesMinuman">
				<div class="kolom5 behind">
					<img src="{{ asset('/images/menu/'. $minuman->gambar_menu) }}" style="width:100%; height: 340px; ">
				</div>
				<div class="kolom7">
					<div class="bakcblur">
						<div class="tdescMinum">
							<div class="strightMinum">{{$minuman->nama_menu}}</div>
							<img src="{{ asset('/images/iconmenu/'. $minuman->icon_menu) }}" class="iconMinum">
						</div>
						<div class="desc">
						{{$minuman->deskripsi_menu}}
						</div>	
					</div>
				</div>
				<img src="{{ asset('/images/iconmenu/'. $minuman->icon_menu) }}" class="iconMinum2">
			</div>
		</div>
		@endforeach
		
		<div class="kolom12 main" data-aos="zoom-in" id="Pesan">
			<div class="imageback2">
				<div class="backpesan">
				<img src="{{ asset('assets/images/orderfood.png') }}" style="margin:20px 0px 20px 110px; width:120px; height: 120px; float:left; image-orientation: 90deg;">
						<h1 style="margin:40px 0px 40px 280px; float:left;">Pesan <strong>Sekarang</strong></h1><img src="{{ asset('assets/images/orderfood2.png') }}" style="margin:20px 0px 20px 260px; width:120px; height: 120px; float:left; image-orientation: 90deg;">
							<form action="{{ route('itsfood.store') }}" method="post" name="pesan">
							<h4>
								<div class="kolom6" style="clear:left; padding:0 50px 0 50px; margin:-80px 0 0 0">
								<center><h3>Isi Identitas</h3></center><br>
								@csrf
								Nama : <br><input type="text" class="form-control" name="id_pelanggan" placeholder="Masukkan Nama Anda"><br>

								No. HP : <br><input type="number" class="form-control" name="no_hp_pelanggan" placeholder="Masukkan No. HP"><br>

								Tanggal : <br><input type="text" class="form-control" name="tanggal_pembelian" value="<?php echo date('Y-m-d') ?>"><br>

								Alamat : <br><textarea type="text" maxlength="170" class="form-control" name="alamat_pelanggan" placeholder="Masukkan Alamat"></textarea><br>
								</div>

								<div class="kolom6" style="padding:0 50px 5px 50px; margin:-80px 0 0 0">
								<center><h3>Silahkan Beli</h3></center><br>

								Pilih Makanan : <br>
								<select class="form-control makanan" name="id_menu">
									<option value="-">Pilih Makanan</option>
									@foreach($eat as $makanan)
									<option value="{{$makanan->id_menu}}|{{$makanan->harga_menu}}">{{$makanan->nama_menu}} </option>
									@endforeach
								</select> <br>
								
								Harga Makanan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah Beli Makanan :  <br>
								<input type="number" readonly style="margin-right:16.66%" name="harga_makanan" class=" kolom5 form-control" id="hargamakanan">
								
								<input type="number" class="kolom5 form-control" name="jumbel_makanan" placeholder="Masukkan Jumlah Beli"><br><br><br>

								Pilih Minuman : <br>
								<select class="form-control minuman" name="id_menu">
									<option value="-">Pilih Minuman</option>
									@foreach($drink as $minuman)
									<option value="{{$minuman->id_menu}}|{{$minuman->harga_menu}}">{{$minuman->nama_menu}}</option>
									@endforeach
								</select> <br>

								Harga Minuman : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah Beli Makanan :  <br>
								<input type="number" readonly style="margin-right:16.66%" name="harga_minuman" class=" kolom5 form-control" id="hargaminuman">
								
								<input type="number" class="kolom5 form-control" name="jumbel_minuman" placeholder="Masukkan Jumlah Beli"><br><br>
								</div>
								<img src="{{ asset ('assets/images/orderfood3.png') }}" style="width:120px; height: 120px; margin:-170px 0 0 573px; float:left;">

								<div class="kolom12"><div class="kolom2" style="margin: -10px 0 10px 41.66%"><input readonly type="number" class="form-control" name="total_pembelian" id="totalpembelian" style="text-align:center;"></div></div>
								<button class="btn btn-primary" type="submit" style="margin-left:41.66%; clear:left; float:left;">Pesan</button>
								<button class="btn btn-default" type="reset" style="margin-left:15px; float:left;">Reset</button><input class="btn btn-default" type="button" value="Hitung" onclick="hitung()" style="margin-left:15px; float:left;"></h4>
							</form>
				</div>
			</div>
		</div>
		
		<div class="kolom12">
			<div class="kolom4">
			<a href="{{ url('itsfood/galery') }}">
				<div class="backcolor3">
					<img src="{{ asset ('assets/images/gallery.png') }}" style="width:70px; height: 70px; margin:72px;">
				</div>
				<div class="textjudulback">
					Galeri
				</div>
				<div class="textdescback">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					consequat..
				</div>
			</div>
			</a>
			
			<div class="kolom4 zoom">
				<div class="backcolor3">
				<a href="#myMenu">
					<img src="{{ asset ('assets/images/menu5.png') }}" style="width:70px; height: 70px; margin:72px; ">
				</div>			
				<div class="textjudulback">
					Menu
				</div>
				<div class="textdescback">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					consequat..
				</div>
			</div>
			</a>
			
			<div class="kolom4">
				<div class="backcolor3">
					<img src="{{ asset ('assets/images/info.png') }}" style="width:70px; height: 70px; margin:72px;">
				</div>
				<div class="textjudulback">
					Tentang Kami
				</div>
				<div class="textdescback">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					consequat..
				</div>
			</div>
		</div>
		
		<div class="kolom12 main" id="myMenu">
			<div class="backcolor4">
				<div class="kolom12 juduldismenu">
				 <img src="{{ asset ('assets/images/menu.png') }}" style="width:50px; height:50px;"> Menu-menu Kami <img src="{{ asset ('assets/images/menu.png') }}" style="width:50px; height:50px;">
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
			
				@foreach($galeryeat as $makanan)
				<div class="column makanan">	
					<div class="contentfilter">
						<div class="kolom12">
							<div class="container">
								<img src="{{ asset('/images/menu/'. $makanan->gambar_menu) }}" class="image">
								<div class="overlay">
									<div class="addmenu">
										<img src="{{ asset ('assets/images/menuadd.png') }}" style="width:50px; height:50px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			
				@foreach($galerydrink as $minuman)
				<div class="column minuman">
					<div class="contentfilter">
						<div class="kolom12">	
							<div class="container">
								<img src="{{ asset('/images/menu/'. $minuman->gambar_menu) }}" class="image">
								<div class="overlay">
									<div class="addmenu">
										<img src="{{ asset ('assets/images/menuadd.png') }}" style="width:50px; height:50px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		
		<div class="kolom12 marbot main" id="About">
			<div class="kolom4">
				<div class="judul">
					Kontak Kami 
				</div>
				<div class="kontak">
					Ingin memesan ? <br>
					Hubungi sekarang juga
				</div>	
				
				<img src="{{ asset ('assets/images/phone.png') }}" style="margin: 10px 0 0 70px; width:50px; height:50px; clear:left; float:left;"> 
				<div class="hub">
				: 0878-0898-8059
				</div>
				<div class="sosmedkami">
					Kunjungi Sosmed Kami
				</div>	
				<div class="kogambar">
					<div class="hov">
						<img src="{{ asset ('assets/images/facebook.png') }}" style="width:50px; height:50px;">
					</div>
					<div class="hov">
						<img src="{{ asset ('assets/images/telegram.png') }}" style="width:50px; height:50px; margin-left:5px;">
					</div>
					<div class="hov">
						<img src="{{ asset ('assets/images/twitter.png') }}" style="width:50px; height:50px; margin-left:5px;">
					</div>
					<div class="hov">
						<img src="{{ asset ('assets/images/instagram.png') }}" style="width:50px; height:50px; margin-left:5px;">
					</div>
					<div class="hov">
						<img src="{{ asset ('assets/images/youtube.png') }}" style="width:50px; height:50px; margin-left:5px;">
					</div>
				</div>
								
			</div>
			<div class="kolom4">
				<div class="judul">
					Warung Sudah Buka
				</div>
				<div class="buka">
					Setiap Hari
				</div>
				<div class="jam">
					10.00 - 21.00 <br>
					Waktu Indonesia Barat ( WIB )
				</div>
				<div class="bukgambar">
					<img src="{{ asset ('assets/images/clock.png') }}" style="width:70px; height:70px; clear:left; float:left;">
					<div class="strip">
						&nbsp - &nbsp
					</div> 
					<img src="{{ asset ('assets/images/clock2.png') }}" style="width:70px; height:70px; float:left;">
				</div>
			</div>
			<div class="kolom4 ">
				<div class="judul">
					Lokasi
				</div>	
				<div class="lokasi">
					Jl. Raya Banten No.59, Unyur, Kec. Serang, Kota Serang, Banten 42111
				</div>
				<div class="lokgambar">
					<img src="{{ asset ('assets/images/location3.png') }}" style="width:120px; height:120px;">
				</div>
			</div>
		</div>
		
		<div class="main kolom12" id="Lokasi">
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe width="100%" height="539" id="gmap_canvas" src="https://maps.google.com/maps?q=Pecak%20Bandeng%2059&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					<a href="https://www.pureblack.de/webdesign/"></a>
				</div>
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
			// When the user scrolls the page, execute myFunction
			window.onscroll = function () { myFunction() };

			// Get the navbar
			var navbar = document.getElementById("navbar");

			// Get the offset position of the navbar
			var sticky = navbar.offsetTop;

			// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
			function myFunction() {
				if (window.pageYOffset >= sticky) {
					navbar.classList.add("sticky")
				} else {
					navbar.classList.remove("sticky");
				}
			}
		</script>
	
		<script>
		// Add active class to the current button (highlight it)
			var header = document.getElementById("navbar");
			var btns = header.getElementsByClassName("dropbtn");
			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("click", function() {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
				});
			}
		</script>
		
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlidesMakanan");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 5000); // Change image every 5 seconds
		}	
		</script>
		
		<script>
			var myIndex2 = 0;
			carousel2();

			function carousel2() {
			var i2;
			var x2 = document.getElementsByClassName("mySlidesMinuman");
			for (i2 = 0; i2 < x2.length; i2++) {
				x2[i2].style.display = "none";  
			}
			myIndex2++;
			if (myIndex2 > x2.length) {myIndex2 = 1}    
			x2[myIndex2-1].style.display = "block";  
			setTimeout(carousel2, 5000); // Change image every 5 seconds
		}	
		</script>
		
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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		// Add smooth scrolling to all links
		$("a").on('click', function(event) {

			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 48
			}, 1600, function(){
		
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
			} // End if
		});
		});
		</script>
		
		<script src="{{ asset('assets/aos.js') }}"></script>
		
		<script>
			AOS.init();
		</script>

		<script>
		$(".makanan").change(function() {
            var combined = 0;
                combined = parseInt(this.value.split('|')[1]);  // here you'll get the second value, [0] will get the first one
            $("#hargamakanan").val(combined);
        }).trigger("change");
		</script>

		<script>
		$(".minuman").change(function() {
            var combined = 0;
                combined = parseInt(this.value.split('|')[1]);  // here you'll get the second value, [0] will get the first one
            $("#hargaminuman").val(combined);
        }).trigger("change");
		</script>
		
		<script language= "JavaScript">
        function hitung()

        {
        var hmakanan=parseFloat(document.pesan.harga_makanan.value);
        var jmakanan=parseFloat(document.pesan.jumbel_makanan.value);
        var hminuman=parseFloat(document.pesan.harga_minuman.value);
        var jminuman=parseFloat(document.pesan.jumbel_minuman.value);

        var hasil="";

            total=(hmakanan*jmakanan+(hminuman*jminuman));
            hasil=hasil+total;


        document.pesan.total_pembelian.value=hasil;

        }
        </script>

		<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("select.makanan").change(function(){
				var selectedMakanan = $(this).children("option:selected").val();
				$('#hargamakanan').val(selectedMakanan);
			});
		});
		</script> -->
		
		<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("select.minuman").change(function(){
				var selectedMinuman = $(this).children("option:selected").val();
				$('#hargaminuman').val(selectedMinuman);
			});
		});
		</script> -->

<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("select.menu").change(function(){
				var selectedMenu = $(this).children("option:selected").val();
				var select = document.getElementById("select");
			});
		});
		</script> -->
</body>
</html>
