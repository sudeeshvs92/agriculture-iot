	<script>
		'use strict';

    

$(document).ready(function(){
	
	 
 var not1=false;
 var not2=false;
 var not3=false;
 var not4=false;
    // Chart Data
    var data = [];
	
	var dataset;
     var newdate;
	 var olddate=0;
	 var limit=0;
			 var options = {
        lines: { 
           show: true,
                lineWidth: 0.2,
                fill: 1,
                fillColor: {
                    colors: ['rgba(255,255,255,0.3)', 'rgba(255,255,255,0.8)','rgba(255,0,255,0.3)','rgba(255,0,255,0.8)','rgba(0,255,0,0.3)','rgba(0,255,0,0.8)','rgba(255,0,0,0.3)','rgba(255,0,0,0.8)']
                },
				 color: '#fff',
            shadowSize: 0

		},
        points: { show: true },
        xaxis: { 
		mode:'time',
		minTickSize: [60, "seconds"],
		tickFormatter: '%H:%i:%s',
		tickColor: 'rgba(255,255,255,1)',
            show: true,
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.9)',
                size: 11
            },
            shadowSize: 0
			},
		
		series: {
            
            lines: {
                show: true,
                lineWidth: 0.2,
                fill: 1,
                fillColor: {
                    colors: ['rgba(255,255,255,0.3)', 'rgba(255,255,255,0.8)','rgba(255,0,255,0.3)','rgba(255,0,255,0.8)','rgba(0,255,0,0.3)','rgba(0,255,0,0.8)','rgba(255,0,0,0.3)','rgba(255,0,0,0.8)']
                }
            },
            color: '#fff',
            shadowSize: 0
        },
        yaxis: {
            min: -200,
            max: 200,
			tickSize:20,
            tickColor: 'rgba(255,255,255,0.1)',
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.75)',
                size: 11
            },
            shadowSize: 0

        },
        grid: {
            borderWidth: 1,
            borderColor: 'rgba(255,255,255,0.1)',
            labelMargin:10,
            hoverable: true,
            clickable: true,
            mouseActiveRadius:6
        },
        legend:{
            container: '.flot-chart-legends--dynamic',
            backgroundOpacity: 0.5,
            noColumns: 0,
            lineWidth: 0,
            labelBoxBorderColor: 'rgba(255,255,255,0)'
        }
    };
    var data = [];
    var placeholder = $("#flotchart");
	$.plot(placeholder, data, options);
	 var t = $('#data-table').DataTable();
   
    
$('.easy-pie-chart').each(function () {
			
            var value = $(this).data('value');
            var size = $(this).data('size');
            var trackColor = $(this).data('track-color');
            var barColor = $(this).data('bar-color');

            $(this).find('.easy-pie-chart__value').css({
                lineHeight: (size - 2)+'px',
                fontSize: (size/5)+'px',
                color: barColor
            });

            $(this).easyPieChart ({
                easing: 'easeOutBounce',
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: 'rgba(255,255,255,0.15)',
                lineCap: 'round',
                lineWidth: 4,
                size: size,
                animate: 3000
                
            })
        });

    
    function chartUpdate() {
	  $.ajax({
               
                url: "<?php $_SERVER['SERVER_NAME']; ?>/iot/readtemp.php",
                method: 'GET',
                dataType: 'json',
                success: onDataReceived
            });
            
            
            function onDataReceived(series) {
               
                data = [ series ];
                
                $.plot($(".flot-dynamic"), data, options);
				
				
            }
			
		$.ajax({
type : 'GET',
dataType: 'json',
url : '<?php $_SERVER['SERVER_NAME']; ?>/iot/sensorread.php',
success : function(response){
	newdate=response.time;
	var mi=response.sensor2;
	
	if(mi<20 && not1==false  )
	{
		not1=true;
	$('#notfi').append(" <a href=\"#\" class=\"listview__item\"><img src=\"<?php $_SERVER['SERVER_NAME']; ?>/iot/demo/img/profile-pics/1.jpg\"   class=\"listview__img\" ><div class=\"listview__content\"><div class=\"listview__heading\">moisture alert<small>"+newdate+"</small></div><p>Moisture less than 20%...!</p></div></a>");	
	notify('top' ,'right', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Low Moisture....!</h4></span>','notification');	
	}
	
	if(response.sensor1<20 && not2==false)
	{
		not2=true;
	$('#notfi').append(" <a href=\"#\" class=\"listview__item\"><img src=\"<?php $_SERVER['SERVER_NAME']; ?>/iot/demo/img/profile-pics/1.jpg\"   class=\"listview__img\" ><div class=\"listview__content\"><div class=\"listview__heading\">Humidity alert<small>"+newdate+"</small></div><p>Humidity less than 20%...!</p></div></a>");	
	notify('top' ,'right', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Low Humidity....!</h4></span>','notification');	
	}
	if(response.sensor4<20 && not3==false  )
	{
		not3=true;
	$('#notfi').append(" <a href=\"#\" class=\"listview__item\"><img src=\"<?php $_SERVER['SERVER_NAME']; ?>/iot/demo/img/profile-pics/1.jpg\"   class=\"listview__img\" ><div class=\"listview__content\"><div class=\"listview__heading\">Light alert<small>"+newdate+"</small></div><p>light less than 20%...!</p></div></a>");	
	notify('top' ,'right', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Low Light....!</h4></span>','notification');	
	}
	
	if(response.sensor3>40 && not4==false)
	{
		not4=true;
	$('#notfi').append(" <a href=\"#\" class=\"listview__item\"><img src=\"<?php $_SERVER['SERVER_NAME']; ?>/iot/demo/img/profile-pics/1.jpg\"   class=\"listview__img\" ><div class=\"listview__content\"><div class=\"listview__heading\">Temperature alert<small>"+newdate+"</small></div><p>High temperature...!</p></div></a>");	
	notify('top' ,'right', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>High temperature....!</h4></span>','notification');	
	}
	
	
 $('#hum').attr('data-percent',response.sensor1);
 $("#hum1").text(response.sensor1);
 $("#udate").text(response.time);
 $('#moi').attr('data-percent',response.sensor2);
 $('#moi').data('easyPieChart').update(response.sensor2);
 $("#moi1").text(response.sensor2);
 $('#lig').attr('data-percent',response.sensor4);
 $('#lig').data('easyPieChart').update(response.sensor4);
 $("#lig1").text(response.sensor4);
 $("#udate1").text(response.time);
 $("#udate2").text(response.time);
$('#hum').data('easyPieChart').update(response.sensor1);
    
        


if((olddate!=newdate)&&(limit<=300))
{
	not1=false;
	not2=false;
	not3=false;
	not4=false;
	olddate=newdate;
	limit=limit+1;
	 var markup = "<tr><td>"+newdate+"</td><td>" + response.sensor1+ "</td><td>" + response.sensor2+ "</td><td>" + response.sensor3+ "</td> <td>" + response.sensor4+ "</td></tr>";
            
			t.row.add( [
            newdate ,
            response.sensor1,
           response.sensor2,
            response.sensor3,
            response.sensor4
        ] ).draw( false );
}
else if(limit==300)
{
	
	$("table tbody").find("tr").remove();
	t.clear().draw(false);
	limit=0;
}
}
});
   setTimeout(chartUpdate, 30);
    }
    chartUpdate();
	

 
	  
    });
	function notify(from, align, icon, type, animIn, animOut,message,head){
                $.notify({
                    icon: icon,
                    title: head,
                    message: message,
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div style="text-align:center;" data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                                '</div>'
                });
            }
			
			
			
		</script>