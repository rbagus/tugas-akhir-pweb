	function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours(); //variabel jam
		    var curr_minute = today.getMinutes();//variabel menit
		    var curr_second = today.getSeconds();//variabel detik
		    //rumus untuk menampilkan waktu 24 jam
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);//output jam
		    curr_minute = checkTime(curr_minute);//output menit
		    curr_second = checkTime(curr_second);//output detil
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}

		setInterval(showTime,500);