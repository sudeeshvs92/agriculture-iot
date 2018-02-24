<?php
include "header.php";
include "nav.php";

?>

    
        <section class="content">
		
	
				
				
				
                <header class="content__title">
				
                    

                    <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                </header>
             
				 <header class="content__title">
                    <h1>Sensors</h1>
                   
                </header>
               <div class="col-md-12">
			   
			   <div class="row">
			   <div class="col-md-4">
                <div class="card-demo">
                    <div class="card" style="text-align:center">
                        <div class="card-header">Sensor 1 </div>                            
                        <div class="card-body">
                            <h4 class="card-title">HUMIDITY</h4>
                             <div style="padding:10px" id="hum" class="easy-pie-chart" data-percent="50" data-size="170" data-track-color="rgba(0,0,0,0.5)" data-bar-color="#4af">
                          <span id="hum1" class="easy-pie-chart__value">40</span> 
                        </div>

                        </div>
						  <div class="card-header" ><small>updated: <span id="udate">85575</span></small></div>
                    </div> 
                </div>
                </div>
				<div class="col-md-4">
                <div class="card-demo">
                    <div class="card" style="text-align:center">
                        <div class="card-header">Sensor 2 </div>                            
                        <div class="card-body">
                            <h4 class="card-title">MOSITURE</h4>
                             <div id="moi" style="padding:10px"  class="easy-pie-chart" data-percent="5" data-size="170" data-track-color="rgba(0,0,0,0.5)" data-bar-color="#4af">
                          <span id="moi1" class="easy-pie-chart__value">5</span> 
                        </div>

                        </div>
						  <div  class="card-header"><small>updated: <span id="udate1">85575</span></small></div>
                    </div> 
                </div>
                
     
                </div>
				<div class="col-md-4">
                <div class="card-demo">
                    <div class="card" style="text-align:center">
                        <div class="card-header">Sensor 3</div>                            
                        <div class="card-body">
                            <h4 class="card-title">LIGHT</h4>
                             <div id="lig" style="padding:10px"  class="easy-pie-chart" data-percent="5" data-size="170" data-track-color="rgba(0,0,0,0.5)" data-bar-color="#4af">
                          <span id="lig1" class="easy-pie-chart__value">5</span> 
                        </div>

                        </div>
						  <div  class="card-header"><small>updated: <span id="udate2">85575</span></small></div>
                    </div> 
                </div>
				</div>
               </div>

                <br>
                <br>
				 <div class="card">
                            <div class="card-body">
							 <div class="card-header">Sensor 4 </div> 
                                <h4 class="card-title">TEMPERATURE</h4>

                                <div class="flot-chart flot-dynamic" id="flotchart" style="height:400px;"></div>
                                <div class="flot-chart-legends flot-chart-legends--dynamic"></div>
                            </div>
                        </div>
               
                       
 <br>
                <br>
               
				<h1 >DATA LOG</h1>
                        <div class="table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Last update</th>
                                        <th>humidity</th>
                                        <th>moisture</th>
                                        <th>temperature</th>
                                        <th>light</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </section>
<?php 
include "footer.php";
include "scripts_all.php";
include "scripts_dash.php";
include "close.php";
?>   
   



  