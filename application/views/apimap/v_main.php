<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>API MAP</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBuI6uV4bFT1w6fVtu3uEaylxfzUcxx4MM"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="http://localhost/lobster.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
		<!-- ส่วนตกแต่งฟน้าจอ -->
		<style>
			/* Always set the map height explicitly to define the size of the div
			* element that contains the map. */
			#map {
				height: 90%;
				width : 100%;
				margin-bottom : 20px;
			}
			/* Optional: Makes the sample page fill the window. */
			html, body {
				width : 100%;
				height: 100%;
				margin: 0;
				font-family: 'Trirong', serif;
				
			}
			.container{
				color : black;
				width: 100%;
				height : auto;
				float: left;
				
			}
		
			#image_home{
				width : 100%;
				height : 100%;
				background-position: center; /* Center the image */
				background-size: cover;
				
			}
			.tab-content{
				width : 100%;
				height : auto;
				padding-bottom : 100px;
			}
			::-webkit-scrollbar {
			width: 10px;
			}
			
			/* Track */
			::-webkit-scrollbar-track {
				background: #f1f1f1; 
			}
			
			/* Handle */
			::-webkit-scrollbar-thumb {
				background: #888; 
			}
			
			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
				background: #555; 
			}
			.mySlides {display:none;}
			
			
			.block-research{
				width : 70%;
				border : 1px solid black;
				margin : 10px;
				padding-left : 30px;
				padding-right : 30px;
				float : left;
				background-color : white;
			}
			.block-producer{
				gravity : center;
				width : 20%;
				height : 500px;
				margin-left : 30px;
				margin-top : 10px;
				border : 1px solid black;
				padding : 10px;
				float : left;
				background-color : white;
			}
			.text_producer{
				font-size : 12px;
			}
			.header_image{
				width: 960px;
				height: 290px;
				margin: auto;
			}
			.menu_all{
				width: 100%;
				height: 47px;
				float: left;
				background-image : url("http://localhost/codeIgniter/Img/bg/toptab.png");
				background-position: center; /* Center the image */
				background-size: cover;	
			}
			.menu_area{
				width: 900px;
				height: 47px;
			}
			#menu{
				width: auto;
				height: auto;
				margin-left : 150px;
			}
			.content_all{
				width: 100%;
				height: auto;
				margin : auto;
				float: left;
				
			}
			.content_area{
				width: 960px;
				height: auto;
				margin : auto;
			}
			.content_txt{
				width: auto;
				height: auto;
				float: left;
				margin-left : 115px;
			}
			.image_Location{
				width : 50%;
				float: left;
				padding-left : 30px;
				margin-botton : 10px;
			}
			.text_Location{
				padding-top : 10px;
				width : 30%;
				float: left;
			}
			.border_image{
				width : 80%;
				height : 80%;
				margin : 10px;
				margin-top : 20px;
				border : 2px solid black;
			}
			
			.border_form{
				background-image : url("http://localhost/codeIgniter/Img/bg/background_king.jpg");
				background-position: center; /* Center the image */
				background-size: cover;	
				float: left;
				height : auto;
			}
			.row_form{
				width : 100%;
				height : auto;
				float: left;
				background-image : url("http://localhost/codeIgniter/Img/bg/border_bottom.png");
				background-position: center; /* Center the image */
				background-size: cover;	

				
			}
			.block_location{
				width : 30%;
				height : auto;
				float : left;
				margin-top : 10px;
				margin-right : 10px;
				margin-bottom : 50px;
				margin-left : 10px;
			}
			.border_location{
				margin-left : 80px;
				margin-top : 10px;
				width : 80%;
				height : auto;
				float : left;
				border: 2px solid black;
				background-color : #CCFF33;
				padding : 20px;	
				
			}
			.text_header{
				font-family: 'Charmonman', cursive;
				font-size : 40px;
			}
			.text_map{
				font-family: 'Charmonman', cursive;
				font-size : 40px;
				text-align : center;
			}
			#highlight_detail{
				float : left;
				font-family: 'Charmonman', cursive;
			}
			.row_travel{
				width : 100%
				float : left;
				background-color : #CCFF33;
				height : 100%;
				margin-top : 20px;
				padding : 20px;
				border: 2px solid black;
			}
			.form_detail{
				font-size : 12px;
				width : 30%;
				float : left;
			}
			.form_iframe{
				width : 70%;
				float : left;
			}
			a{
				color : blue;
			}
		</style>
	<!-- ส่วนตกแต่งฟน้าจอ -->
	
	<!-- ส่วนของการจัดการเรื่องของ map และ script การทำงานต่างๆ -->
	<script>
	  /// การประกาศตัวแปรต่างๆ ////////////
      var map;
	  var infowindow;
	  var myLatLng = {lat: 13.28704, lng: 100.9243691};
	  var beachMarker;
	  var directionsService = new google.maps.DirectionsService();
	  var directionsDisplay = new google.maps.DirectionsRenderer();
	  /// การประกาศตัวแปรต่างๆ ////////////
	  
	  //// ฟังชั่น initMap  เป็นส่วนของการกำหนดค่าให้กับแผนที่ /////
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(13.2855746, 100.916444),
          zoom: 8,
		  mapTypeId : 'roadmap'
        });
		directionsDisplay.setMap(map);
		infowindow = new google.maps.InfoWindow();
		selectLocation();
	  }
	  //// ฟังชั่น initMap  เป็นส่วนของการกำหนดค่าให้กับแผนที่ /////
	
	  /// ฟังชั่น selectLocation เป็นส่วนของการปักหมุดสถาที่ต่างๆ ที่ดึงมาจากฐานข้อมูล
	  function selectLocation(){
		var url = "ApiMap/getMapLocation";
		$.post(url,{
			
		},function(data){
		 var data = JSON.parse(data);
		 $.each(data,function(i,value){
			 $.each(value,function(j,row){
					var lat = row['lat'];
					var lng = row['lng'];
					var location_name =  row['location_name'];
					var location = '<img style = "float : left;"src = "http://localhost/codeIgniter/Img/highlight/'+row['location_image']+'" width = "200" height = "300">';
					location += '<div class = "highlight_detail">'+row['location_detail']+'</div><br>';
					location += '<a onclick = "calculateRoute('+lat+','+lng+')" >ไปที่นี่</a>';
					var latlng = new google.maps.LatLng(lat,lng);
					var makeroption = {map:map, html:location, position:latlng};
					var marker = new google.maps.Marker(makeroption);
					google.maps.event.addListener(marker,'click',function(e){
					infowindow.setContent(this.html);
					infowindow.open(map,this);
					});
					
				})
			})
		})
	}
	/// ฟังชั่น selectLocation เป็นส่วนของการปักหมุดสถาที่ต่างๆ ที่ดึงมาจากฐานข้อมูล
	
	/// ฟังชั่น calculateRoute เป็นฟังชั่นที่ใช้คำนวณระยะทางระหว่างตำแหน่งที่เราอยู่กับจุดที่เราเลือก //////
	function calculateRoute(lat,lng){
		if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
		var pos = {
			lat: position.coords.latitude,
			lng: position.coords.longitude
		};
		var pos_place = {
			lat: lat,
			lng: lng
		};
		console.log(pos_place);
		var request = {
			origin : pos,
			destination : pos_place,
			travelMode : 'DRIVING'
		}
		directionsService.route(request,function(result,status){
			if(status == "OK"){
				directionsDisplay.setDirections(result);
			}
		});
		
		}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
		}
		//console.log(lat,lng);
	}
	/// ฟังชั่น calculateRoute เป็นฟังชั่นที่ใช้คำนวณระยะทางระหว่างตำแหน่งที่เราอยู่กับจุดที่เราเลือก //////
	var slideIndex = 1;
	
	/// ฟังชั่น  plusDivs เป็นฟังชั่นในการเปลี่ยนรูปภาพกรณีที่เรากดที่ปุ่มที่จะเลื่อนslide ถ้าเป็น + จะเปลี่ยนslide ไปข่างหน้า ถ้าเป็น - จะถอนslide กลับ////
	function plusDivs(n) {
		showDivs(slideIndex += n);
	}
	/// ฟังชั่น  plusDivs เป็นฟังชั่นในการเปลี่ยนรูปภาพกรณีที่เรากดที่ปุ่มที่จะเลื่อนslide ถ้าเป็น + จะเปลี่ยนslide ไปข่างหน้า ถ้าเป็น - จะถอนslide กลับ////
	
	
	/// ฟังชั่น แสดงข้อมูลลงใน slide ///
	function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
		}
	/// ฟังชั่น แสดงข้อมูลลงใน slide ///

	//// link_detail ฟังชั่นที่จะเปลี่ยนiframe ตามที่เลือก //////
	function link_detail(id){
		if(id == 1){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getKasivitDetail');
		}else if(id == 2){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getKungKaBane');
		}else if(id == 3){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getPakDeeRumPai');
		}else if(id == 4){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getMaiPol');
		}else if(id == 5){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getHuaiSaMong');
		}else if(id == 6){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getHinSont');
		}else if(id == 7){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getPattana');
		}else if(id == 8){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getSongNam');
		}else if(id == 9){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getSiriChaloengWat');
		}else if(id == 10){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getAnuRak');
		}else if(id == 11){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getPaChaiLane');
		}else if(id == 12){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getTaoTaLay');
		}else if(id == 13){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getKaoRaGum');
		}else if(id == 14){
			$(".detail_click").attr('href','http://localhost/codeIgniter/index.php/ApiMap/getTungProngThong');
		}	
	}
	//// link_detail ฟังชั่นที่จะเปลี่ยนiframe ตามที่เลือก //////
		
	
    </script>
	<!-- ส่วนของการจัดการเรื่องของ map และ script การทำงานต่างๆ -->
	</head>
	<!-- เมื่อเข้ามาจะโหลดการทำงานในscript body คือส่วนตรงเนื้อหาของเว็บ  -->
	<body onload = "initMap(); showDivs(slideIndex);" style = "margin:0px; width:100%;">
	
	<!--เพิ่มขอบเขตให้เว็บอยุแค่ใน div นี้ เพื่อง่ายต่อการเซตbackground -->
	<div class = "border_form">
		<div class =  "row_form">
			<!-- ส่วนที่รวมtab กับเนื้อหาข้างล่าง -->
			<div class="container">
				<div class = "header_image" align = "center">
					<img src="http://localhost/codeIgniter/Img/bg/image_king.png" align = "center" width = "150" height = "200">
					<div class = "text_header">สถานที่ท่องเที่ยวตามพระราชดำริในภาคตะวันออก</div>
				</div>
				<!-- ส่วนของแท็บ -->
				<div class = "menu_all" align = "center">
					<div class = "menu_area">
						<div id = "menu">
							<ul class="nav nav-pills" >
								<li class="active" id = "li_home"><a data-toggle="pill" href="#home">หน้าแรก</a></li>
								<li ><a data-toggle="pill" href="#dataTravel">แหล่งข้อมูลท่องเที่ยว</a></li>
								<li ><a data-toggle="pill" href="#location">สถานที่ตั้ง</a></li>
								<li ><a data-toggle="pill" href="#maptap">แผนที่และเส้นทาง</a></li>
								<li ><a data-toggle="pill" href="#research">เกี่ยวกับโครงการวิจัย</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- ส่วนของแท็บ -->
				<div class = "content_all">
					<div class = "content_area" >
						<div class = "conะent_txt" >
							<!-- ส่วนของข้อมูลแต่ละแท็บ-->
							<div class="tab-content">
								<!-- ส่วนของแท็บแรก -->
									<div id="home" class="tab-pane fade in active">
									<center>
										<div class = "border_image">
											<div class = "border">
											<div class="w3-content w3-display-container">
										<?php foreach($place->result() as $index=>$row){?>
											<div class="w3-display-container mySlides">
												<!-- ส่วนของการแสดงรูปภาพ -->
													<a href = "<?php echo $row->reference;?>">
													<img src="http://localhost/CodeIgniter/Img/<?php echo $row->image;?>" id = "image_home" alt="<?php echo $row->name_image;?> "></a>
												<!-- ส่วนของการแสดงรูปภาพ -->
												
												<!-- ส่วนของการแสดงข้อความ -->
												<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
													<?php echo $row->name_image;?>
												</div>
												<!-- ส่วนของการแสดงข้อความ -->
											</div>
										<?php } ?>
											  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
												<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
											</div>
										</div>
										</div>
									</center>
									</div>
								
								<!-- ส่วนของแท็บแรก -->
								
								<!-- ส่วนของแท็บแหล่งข้อมูลท่องเที่ยว -->
								<div id="dataTravel" class="tab-pane fade">
									<div class = "row_travel">
										<div class = "text_map" >แหล่งข้อมูลท่องเที่ยว</div>
										<div class = "form_detail">
											<!-- ส่วนของการเลือกข้อมูลที่จะแสดงในiframe-->
												<?php foreach($place->result() as $index=>$row){ ?>
												<ul>
													<a type = "button" class = "detail_click" target="iframe_a" onclick = "link_detail(<?php echo $row->id;?>)">
														<li><?php echo $row->name_image;?></li>
													</a>
												</ul>
												<?php } ?>
											<!-- ส่วนของการเลือกข้อมูลที่จะแสดงในiframe-->
										</div>
										<!-- ส่วนของifram ที่แสดงเนื้อหาต่างๆ  ifreame คือการนำข้อมูลจากอีกไฟล์มาแสดงลงในขอบเขตที่เรากำหนดใหเในiframe -->
											<iframe src = "http://localhost/codeIgniter/index.php/ApiMap/getHomeDetail" height="90%" width = "70%" name = "iframe_a" style = "float : left;"></iframe>
										<!-- ส่วนของifram ที่แสดงเนื้อหาต่างๆ  ifreame คือการนำข้อมูลจากอีกไฟล์มาแสดงลงในขอบเขตที่เรากำหนดใหเในiframe -->
									</div>
								</div>
								<!-- ส่วนของแท็บแหล่งข้อมูลท่องเที่ยว -->
								
								<!-- ส่วนของแท็บสถามที่ตั้ง -->
								<div id = "location" class = "tab-pane fade">
									<!-- วนลูบแสดงของมูลของแต่ละสถานที่ -->
									<div class = "border_location">
									<div class = "text_map" >สถานที่ตั้ง</div>
									<?php foreach($detail_place->result() as $index=>$row){ ?>
										<div class = "block_location">
													<img src="http://localhost/CodeIgniter/Img/<?php echo $row->image_place;?>" id = ""  alt="<?php echo $row->detail_name_place;?> " width =  "100%" height = "150" style = "border : 3px solid #CC6600">
													<div class = "detail" style = "height : 180px; margin-top : 10px">
														<div style = "font-size : 14px;"><?php echo $row->detail_name_place;?></div>
														<ul>
															<li style = "font-size : 12px;"><?php echo $row->address_place;?></li>
															<li style = "font-size : 12px;"><?php echo $row->tel_place;?></li>
															<li style = "font-size : 12px;"><?php echo $row->web_place;?></li>
															<li style = "font-size : 12px;"><?php echo $row->time_place;?></li>
															<li style = "font-size : 12px;"><?php echo $row->season_place;?></li>
														</ul>
													</div>
										</div>
									<?php } ?>
									</div>
									<!-- วนลูบแสดงของมูลของแต่ละสถานที่ -->
								</div>
								<!-- ส่วนของแท็บสถามที่ตั้ง -->
								
								<!-- ส่วนของแท็บแผนที่ -->
								<div id="maptap" class="tab-pane fade">
									<div class = "text_map">แผนที่และเส้นทาง</div>
									<!-- ส่วนของแสดงแผนที่ -->
									<center><div id = "map"></div></center>
									<!-- ส่วนของแสดงแผนที่ -->
								</div>
								<!-- ส่วนของแท็บแผนที่ -->
								
								<!-- ส่วนของแท็บข้อมูลที่เกี่ยวกับ-->
								<div id="research" class="tab-pane fade">
									<div class = "block-research">
											<div class = "text_map" >เกี่ยวกับวิจัย</div>
											<span>  
												&emsp;&emsp;พระบาทสมเด็จพระเจ้าอยู่หัวปรมินทรมหาภูมิพลอดุลยเดช สมเด็จพระนางเจ้าฯพระบรมราชินีนาถ และพระบรมวงศานุวงศ์ทุกพระองค์ ต่างทุ่มเททรงงานหนัก เพื่อให้คนไทยมีความเป็นอยู่ที่ดีขึ้น โครงการอันเนื่องมาจากพระราชดำริมากมายนับพันโครงการ จึงเกิดขึ้นในทุกพื้นที่บนผืนแผ่นดินไทย โดยเฉพาะในเขตพื้นที่ของภาคตะวันออก มีโครงการพระราชดำริหลายแห่ง ซึ่งแต่ละสถานที่นั้นช่วยให้ชีวิตความเป็นอยู่ของประชาชนนั้นดีขึ้น และกลายมาเป็นสถานที่ท่องเที่ยว ให้ผู้ที่สนใจเข้าไปหาความรู้ และพักผ่อนหย่อนใจได้</span><br><br>
											<span>
												&emsp;&emsp;          ประเทศไทยมีการขยายตัวทางการท่องเที่ยวอย่างต่อเนื่อง การรวบรวมข้อมูลแหล่งท่องเที่ยวใหม่ ๆ เพื่อดึงดูดนักท่องเที่ยวให้เดินทางเข้ามาเที่ยวในประเทศไทย นอกเหนือจากแหล่งท่องเที่ยวกระแสหลักของประเทศไทย จึงได้พัฒนาการท่องเที่ยวโดยเลือกโครงการพระราชดำริตามรอยพระบาทในเขตพื้นที่ของภาคตะวันออก ของพระบาทสมเด็จพระเจ้าอยู่หัวปรมินทรมหาภูมิพลอดุลยเดช สมเด็จพระนางเจ้าฯพระบรมราชินีนาถ และพระบรมวงศานุวงศ์ทุกพระองค์ เพื่อเสนอและเป็นทางเลือกใหม่สำหรับนักท่องเที่ยวที่สนใจแหล่งท่องเที่ยวที่มีเอกลักษณ์เฉพาะตัวและมีความน่าสนใจ
											</span><br><br>
											<span>
												&emsp;&emsp;ในการวิจัยนี้มีวัตถุประสงค์เพื่อจัดทำเว็บแมพเซอร์วิสเพื่อเผยแพร่ข้อมูลแหล่งท่องเที่ยวโครงการพระราชดำริตามรอยพระบาทในพื้นที่ภาคตะวันออกและพัฒนาการสร้างเว็บแมพเซอร์วิสโดยใช้เทคโนโลยีของ Google Maps API แล้วนำเสนอข้อมูลแผนที่แหล่งท่องเที่ยวบนเครือข่ายอินเตอร์เน็ต โดยการรวบรวบข้อมูลแหล่งท่องเที่ยวของแต่ละจังหวัด ได้แก่ จังหวัดจันทบุรี ฉะเชิงเทรา ชลบุรี ตราด ปราจีนบุรี ระยอง และสระแก้ว ในการเผยแพร่ข้อมูลและแผนที่แหล่งท่องเที่ยวโครงการพระราชดำริผ่านทางเว็บไซต์ (Web Maps Services) ซึ่งผู้ใช้งานทั่วไปสามารถทำการสืบค้นแหล่งข้อมูลการท่องเที่ยว  ภาพ ข้อความ และตำแหน่งของสถานที่ ที่ใช้ในการเดินทางได้อย่างง่ายตามความต้องการของผู้ใช้งาน(นักท่องเที่ยว)
											</span><br><br>
									</div>
									<div class = "block-producer">
										<center><p>ผู้จัดทำโครงการวิจัย</p></center>
										<img src="http://localhost/codeIgniter/Img/jiratchaya.jpg" id = ""  alt="" width =  "80%" height = "30%" style = "margin-left : 15px"/>
										<p class = "text_producer">1.นางสาวจิรัชยา   สุวรรณรัตน์ รหัสนิสิต  58170060 คณะภูมิสารสนเทศศาสตร์</p><br>
										<img src="http://localhost/codeIgniter/Img/majanan2.jpg" id = ""  alt="" width =  "80%" height = "30%" style = "margin-left : 15px"/>
										<p class = "text_producer">2.นางสาวมัจนันท์  วันบุญ  รหัสนิสิต  58170122 คณะภูมิสารสนเทศศาสตร์</p><br>
									</div>
								</div>
								<!-- ส่วนของแท็บข้อมูลที่เกี่ยวกับ-->
							</div>
							<!-- ส่วนของข้อมูลแต่ละแท็บ-->
						</div>
					</div>
				</div>
			</div>
			<!-- ส่วนที่รวมtab กับเนื้อหาข้างล่าง -->
		</div>
	</div>
	<!--เพิ่มขอบเขตให้เว็บอยุแค่ใน div นี้ เพื่อง่ายต่อการเซตbackground -->
	</body>
	<!-- เมื่อเข้ามาจะโหลดการทำงานในscript -->
</html>