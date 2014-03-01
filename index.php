<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Slopescast</title>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/slopes.js"></script>
		<!-- <link rel="stylesheet" type="text/css" href="stylesheets/slopes.css" /> -->
		<link rel="stylesheet" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/snow.css" media="only screen and (min-device-width: 1136px)">
		<link rel="stylesheet" type="text/css" href="css/snow-2.css" media="only screen and (max-device-width: 1135px)">

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-48438738-1', 'slopescast.com');
		  ga('send', 'pageview');

		</script>

	</head>
	<body>
		<div class="wrapper">		
			<div id="main-img">			
  				<img src="images/br.jpg">
			</div>

			<div class="container">
				<div class="col-md-12" id="title">
					<h1 id="title-font"><a href="http://www.slopescast.com">Slopescast</a></h1>
				</div> 
				<div class="col-md-12 row-class" id="rad-right">
							  <div class="col-md-3 under-class">
							  	<h3 class="text-c">Appalachian</h3>
							  	<div class="place-box">
							  		<form role="form" class="place" action='http://api.worldweatheronline.com/free/v1/weather.ashx' method='get'>
										<select name='q' class="form-control f-control">
											<option value='05859'>Jay Peak</option>
											<option value='05148'>Magic Mountain</option>
											<option value='05356'>Mount Snow</option>
											<option value='05672'>Stowe Mountain</option>
										</select>	
										<input type='hidden' name = 'key' value='jtpc4myth9fwxjgwz9fh5fw5'>
										<input type='hidden' name = 'format' value='json'>
										<input type='hidden' name = 'includeLocation' value = 'yes'>
										<input type='submit' class="btn btn-info btn" value="Search">
									</form>
								</div> 
							  </div>
							  <div class="col-md-3 under-class">
							  	<h3 class="text-c">Cascade</h3>
							  	<div class="place-box">
									<form role="form" class="place" action='http://api.worldweatheronline.com/free/v1/weather.ashx' method='get'>
										<select name='q' class="form-control f-control">
											<option value='98858'>Badger Mountain</option>
											<option value='98144'>Mount Baker</option>
											<option value='97041'>Mount Hood</option>
											<option value='BC V0N 1B4'>Whistler-Blackcomb</option>
										</select>	
										<input type='hidden' name = 'key' value='jtpc4myth9fwxjgwz9fh5fw5'>
										<input type='hidden' name = 'format' value='json'>
										<input type='hidden' name = 'includeLocation' value = 'yes'>
										<input type='submit' class="btn btn-info btn" value="Search">
									</form>
								</div> 

							  </div>
							  <div class="col-md-3 under-class">
							  	<h3 class="text-c">Rockies</h3>
							  	<div class="place-box">
									<form role="form" class="place" action='http://api.worldweatheronline.com/free/v1/weather.ashx' method='get'>
										<select name='q' class="form-control f-control">
											<option value='80435'>A-Basin</option>
											<option value='81611'>Aspen/Snowmass</option>
											<option value='81620'>Beaver Creek</option>
											<option value='80424'>Breckenridge</option>
											<option value='84121'>Brighton</option>	
											<option value='81433'>Silverton</option>
											<option value='81657'>Vail</option>
											<option value='81147'>Wolf Creek</option>							
										</select>	
										<input type='hidden' name = 'key' value='jtpc4myth9fwxjgwz9fh5fw5'>
										<input type='hidden' name = 'format' value='json'>
										<input type='hidden' name = 'includeLocation' value = 'yes'>
										<input type='submit' class="btn btn-info btn" value="Search">
									</form>
								</div>

							  </div>
							  <div class="col-md-3 under-class">
							  	<h3 class="text-c">Sierra-Nevada</h3>
							  	<form role="form" class="place" action='http://api.worldweatheronline.com/free/v1/weather.ashx' method='get'>
							  		<select name='q' class="form-control f-control">
										<option value='96150'>Heavenly Mountain</option>
										<option value='96146'>Squaw Valley </option>
										<option value='92305'>Bear Mountain</option>
										<option value='93546'>Mammoth Mountain</option>
									</select>	
									<input type='hidden' name = 'key' value='jtpc4myth9fwxjgwz9fh5fw5'>
									<input type='hidden' name = 'format' value='json'>
									<input type='hidden' name = 'includeLocation' value = 'yes'>
									<input type='submit' class="btn btn-info btn" value="Search">
							  	</form>
							  </div>
				</div><!-- end of rad right --> 

				<div id="body" class="col-md-12">
					<div class="col-md-7 info">
						<div id="weather">					
						</div>

						<div id="pic">
						</div>
					</div>

					<div class="col-md-5" id="search-right">
						<div id="world">
							<h3 id="search-font">Slope Search</h3>
							<form role="form" class="place" action='http://api.worldweatheronline.com/free/v1/weather.ashx' method='get'>
								<input type="text" class="form-control" placeholder="ex: Vancouver, BC or 81611" name="q" id="world-info">
								<input type='hidden' name = 'key' value='jtpc4myth9fwxjgwz9fh5fw5'>
								<input type='hidden' name = 'format' value='json'>
								<input type='hidden' name = 'includeLocation' value = 'yes'>
								<input type='submit' class="btn btn-info btn-search" value="Go">
							</form>
						</div><!-- end of world --> 
					</div><!-- end of search-right --> 
					<div class="col-md-12 footer">
					</div>
				</div><!-- end of body --> 				
			</div><!-- end of class container --> 
		</div> <!-- end of class wrapper --> 
	</body>
</html>