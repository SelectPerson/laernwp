let firstResultHour = false;
let firstResultMinute = false;

let secondResultHour = false;
let secondResultMinute = false;

let FullWorkTime;

$(document).ready(function() {
	
	
	$('.hour__input').on('keyup scroll',function() {
		if($(this).val() > 23) {
			$(this).val('23');
		}
		else if($(this).val() < 0) {
			$(this).val('0');
		}
		else if($(this).val().length > 2) {
			$(this).val('0');
		}
	}); 
	$('.minute__input').on('keyup',function() {
		if($(this).val() > 59) {
			$(this).val('59');
		}
		else if($(this).val() < 0) {
			$(this).val('0');
		}
		else if($(this).val().length > 2) {
			$(this).val('0');
		}
	});
	$('.input__first__full').on('click',function(){
		console.log('Text');
	});
	$('.input__first__full').on('keyup click', function() {
		if(($('#hour__first').val().length > 0 && $('#minute__first').val()).length > 0) {
			
			firstResultHour = $('#hour__first').val();
			firstResultMinute = $('#minute__first').val();
			collectWorkTime(firstResultHour,firstResultMinute,secondResultHour,secondResultMinute);
			$('.inner__time__effective__input').val(""+FullWorkTime);
			if(firstResultHour != false && firstResultMinute != false && secondResultHour != false && secondResultMinute != false) {
				
			}
		}
	});
	$('.input__second__full').on('keyup click', function() {
		if(($('#hour__second').val().length > 0 && $('#minute__second').val()).length > 0) {
			secondResultHour = $('#hour__second').val();
			secondResultMinute = $('#minute__second').val();
			collectWorkTime(firstResultHour,firstResultMinute,secondResultHour,secondResultMinute);
			$('.inner__time__effective__input').val(""+FullWorkTime); 
			if(firstResultHour != false && firstResultMinute != false && secondResultHour != false && secondResultMinute != false) {
				
			}
		}
		
	});
});

function collectWorkTime(time0,time1,time2,time3) {
    let hours = 0;
    let minutes = 0;
   	let fullTime = [];
    fullTime[0] = parseInt(time0);
    fullTime[1] = parseInt(time1);
    fullTime[2] = parseInt(time2);
    fullTime[3] = parseInt(time3);
  	if(fullTime[0] <= fullTime[2]) {
        hours = fullTime[2] - fullTime[0];
        if(fullTime[3] >= 60 || fullTime[1] >= 60) {
            return console.log('Error');
        }
        else if((fullTime[0] == fullTime[2]) && fullTime[3] < fullTime[1]) {
            return console.log('Error: (Minutes more)')
        }

        else if(fullTime[3] < fullTime[1]) {
            console.log('Less minute');
            hours = hours - 1;
            minutes = 60 - (fullTime[1] - fullTime[3]);

            
            //FullWorkTime = hours+":"+minutes;
          
        }
        else if(fullTime[3] > fullTime[1]) {
            console.log('More minute');
            minutes = fullTime[3] - fullTime[1];
            
        }
        
    }
    else {
        console.log("Error Time Invalid");
    }
    // new FilterWithoutZero(hours);
    // new FilterWithoutZero(minute);
    hours = hours.toString();
    minutes = minutes.toString();
    if(hours.length == 1) {
        hours = 0+hours;
        // console.log('Hours: '+hours);
    }
    if(minutes.length == 1) {
        minutes = 0+minutes;
        // console.log('Minutes: '+minutes);
    }
    // console.log("Min Length: "+minutes.length);
    FullWorkTime = hours+":"+minutes;
    // console.log(FullWorkTime);
    
}