$(document).ready(function() {

	$('form').submit(function() {

          $.get($(this).attr('action')+"?callback=?", $(this).serialize(), function(weather)
          {
               var sunny = "<img src='images/w-sun.jpg'>";

//================================================================================
          	var weath = weather.data.weather[0];
               // console.log(weath); 

               var date = weath.date 
               var year = date.split("-")[0];
               var month = date.split("-")[1];
               
               var day = date.split("-")[2];

               // console.log(month);
               // var months=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
               var months = {
                    '01':"Jan",
                    '02':"Feb",
                    '03':"March",
                    '04': "April",
                    '05': "May",
                    '06': "June",
                    '07': "July",
                    '08': "Aug",
                    '09': 'Sept',
                    '10': 'Oct',
                    '11': 'Nov',
                    '12': 'Dec'
               };
               // console.log(months);
                var month = month.toString();
               // console.log(month);
          
// =============== Use switch next time ===================== // 
              
               // for (var i = 0; i < months.length; i++) {
               //      console.log(months[i]);
               // }

               // for (var i in months) {
               //       console.log(months[i]);
               //      if (months[i] == month) {
               //           console.log(months[i]);
               //      }
               // }

               for (key in months) {
                    if (months.hasOwnProperty(key)) {
                         // console.log(key +" " + months[key]);
                         if (key == month) {
                              new_month = months[key];
                              // console.log(new_month);
                         }
                    }
               }


               // if(month == 01)
               // {
               //      new_month = months[0];
               // }
               // else if(month == 02)
               // {
               //      new_month = months[1];
               // }
               // else if(month == 03)
               // {
               //      new_month = months[2];
               // }
               // else if (month == 04)
               // {
               //      new_month = months[3];
               // }
               // else if(month == 05)
               // {
               //      new_month = months[4];
               // }
               // else if(month == 06)
               // {
               //      new_month = months[5];
               // }
               // else if(month == 07)
               // {
               //      new_month = months[6];
               // }
               // else if(month == 08)
               // {
               //      new_month = months[7];
               // }
               // else if(month == 09)
               // {
               //      new_month = months[8];
               // }
               // else if(month == 10)
               // {
               //      new_month = months[9];
               // }
               // else if(month == 11)
               // {
               //      new_month = months[10];
               // }
               // else
               // {
               //      new_month == months[11];
               // }

               // console.log(new_month);     
               var dates = new_month + "," + day;
               // var date_n = Date.parse(date).toString("MMMM yyyy");
               // console.log(dates);

               var hour = weather.data.weather.time;
               // console.log(hour);

               var wind_dir = weath.winddirection;
               // console.log(wind_dir);


               var chance_percip = weath.precipMM;
               var chance_percip = 0.393701 * chance_percip;
               var chance_percip = Math.ceil(chance_percip * 100) / 100;
               // console.log(chance_percip);

               var outlook = weath.weatherDesc[0];
               var outlook = outlook.value
               // console.log(outlook);

               var temp_max = weath.tempMaxF;
               var temp_cmax = weath.tempMaxC;
               var temp_min = weath.tempMinF;
               var temp_cmin = weath.tempMinC;

               var wind_speed = weath.windspeedMiles;

               var now = weath.weatherDesc[0];
               var now = now.value;  
//=================================================================================

          	var req = weather.data.request[0];
          	// console.log(req);

               var zip = req.query;
               // console.log(zip);

               var city = req.query;
//==========================================================================
          	

               var main3 = weather.data.nearest_area[0];
               // console.log(main3);

               var state = main3.region[0];
               var state = state.value;
               // console.log(state);

               var city = main3.areaName[0];
               var city = city.value;
                // console.log(city);

               var pic = weath.weatherIconUrl[0].value;

               $('#weather').html("<div id='forecast'>" + "<h2 id='todays-slope'>" + "Today's Slopescast" + "</h2>" + "<h3 id='local'>" + city + ", " + state + " (" + zip + ")" + "</h3>" + "<h5>" + "<span class='f-font'>" + "Updated on:" + "</span>" + " " + dates + "</h5>" + "<p>" + "<span class='f-font'>" + "For Today:" + "</span>" + "  " +  outlook + "</p>" + "<p>" + "<span class='f-font'>" +"High:" + "</span>" + " " + temp_max + "&#8457" + " or " + temp_cmax + "&#8451" + "<p>" + "<span class='f-font'>" + "Low:" + "</span>" + " " + temp_min + "&#8457" + " " + " or " + " " + temp_cmin + "&#8451" + "</p>" + "<p>" + "<span id='percip'>" + "Expected Snowfall:" + "</span>" + " " + chance_percip + " in" + "</p>" + "<p>" + "<span class='f-font'>" + "Wind Speed:" + "</span>" + " " + wind_dir + " at " + wind_speed + " mph" + "</p>" + "</div>");
          	$('#pic').html("<img id='o' height='70%' width='70%' alt='" + state + "' src='" + pic + "'>");
          }, 'json');
          return false;
	 });


});

