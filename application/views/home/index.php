<?php 
   
    if(!$_COOKIE['lng']){

       // echo  $_COOKIE['lng'].'unde';
        $lng_all_type = 'All Type';
        $lan_search_from = 'From: Type airport,hotel name, or location.';
        $lan_search_to = 'To: Type airport,hotel name, or location.';
        $lan_go_txt = 'where you go ?';
    }
    else if($_COOKIE['lng'] == 'en'){
        //echo 'en';
        $lng_all_type = 'All Type';
        $lan_search_from = 'From: Type airport,hotel name, or location.';
        $lan_search_to = 'To: Type airport,hotel name, or location.';
        $lan_go_txt = 'where you go ?';
        
    }
    else if($_COOKIE['lng'] == 'th'){
        //echo 'th';
        $lng_all_type = 'ทุกประเภท';
        $lan_search_from = 'จาก: สนามบินประเภทชื่อโรงแรมหรือสถานที่ตั้ง';
        $lan_search_to = 'ไปยัง: สนามบินประเภทชื่อโรงแรมหรือสถานที่ตั้ง';
        $lan_go_txt = 'คุณต้องการไปไหน ?';
        
    }
    else if($_COOKIE['lng'] == 'cn'){
       // echo 'cn';
       $lng_all_type = '所有類型';
       $lan_search_from = '从: 机场，酒店名称或位置。';
       $lan_search_to = '至: 机场，酒店名称或位置。';
       $lan_go_txt = '你去哪裡 ?';
       
    }
?>
<input type="hidden" id="paramUrl" value="<?=$_GET[action];?>" />
    <button class="btn" id="open_map"  style="display: none;">Open Map</button>
    <!-- <button class="btn" id="open_mapsss" data-toggle="modal" data-target="#updatelat" style="display: nones;">updatelat-lng</button> -->
    <div id="show-hide-pro">
        <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i>
    </div>
    <div id="show-hide-pro2">
        <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_up</i>
    </div>
    <div id="pro-search">
        <div class="nav nav-pills nav-pills-warning" id="ul-header2" style="" >
        <div class="" align="center" style="display: inline-block;    width: 100%;
    padding: 0 10px;">
                <div class="" id="private-btn"  href="#private" data-toggle="tab" aria-expanded="true"><span class="lng-private"></span> </div>
           
            
                <div style=" " id="join-btn" class="" href="#join" data-toggle="tab" aria-expanded="false"><span class="lng-join"></span></div>
            </div>
            <div class=" " style=" padding: 12px 10px; padding-bottom: 0;">
                <!-- <label style="text-align:left" for="language">Guest name of your country</label>       -->
                <select class="" name="cartype" id="cartype" class="" style="     margin: auto;">
                    <option value="All Type" ><?php echo  $lng_all_type;?></option>                                                                
                </select>
            </div>             
        </div>         
        <div id="box-prosearch">
            <div>
                <div class="container" style="display:none;" id="container-product">
                    <div class="row">
                        <div class="col-md-9" style="    padding: 10px;">
                            <div class="col-lg-12">
                                <div class="row"></div>
                            </div>
                            <div class="tab-content" id="move-product">
                                <div class="tab-pane active" id="private" >
                                    <div id="product_a"></div>
                                </div>
                                <div class="tab-pane "  id="join">
                                    <div id="product_c"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="box-menu-select">
    <table width="100%">
        <tr>
        <!-- <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-home" >
                <table width="100%">
                        <tr>
                            <td align="center">
<<<<<<< HEAD
=======
                            <i class="material-icons" id="iconhome" style="font-size: 30px;">home</i> 
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-home" style="font-size: 10px; color: #000; font-weight: 500;">Home</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td> -->
        
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-realtime" >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;">room</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-now-use" style="font-size: 10px;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                </div>
            </td>
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-reservation" >
                <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;" style="">search</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-advance-use" style="font-size: 10px;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-car-service" >
                <table width="100%">
                        <tr>
                            <td align="center">
                            <i class="material-icons" id="car-service" style="font-size: 30px;">directions_car</i>
                            <!-- <i class="material-icons" id="iconhome" style="font-size: 30px;">home</i>  -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-car-service" style="font-size: 10px; font-weight: 500;">Car service</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" >
            <div class="btn-management" >
           
                                                 
                           
                <table width="100%">
                    <tr>
                        <td align="center">
                        <!-- <i class="material-icons" style="font-size: 30px;">settings</i> -->
                            
                            <i class="material-icons" style="font-size: 30px;">dvr</i>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <span class="lng-management" style="font-size: 10px; font-weight: 500;">Management</span>
                        </td>
                    </tr>
                </table>
               
            </div> 
        </td>
            
        </tr>
    </table>    
 </div>
 <style>
 .box-menu-select2 {
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 1;
    background: #fff;
    /* height: 90px; */
}
.btn-car-service {
    padding: 8px 0;
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #999999;
    text-align: center;
    /* display: inline-block; */
    /* background-color: #2196f3; */
    z-index: 1;
}
 </style>
 <!-- <div class="box-menu-select2">
    <table width="100%">
        <tr>
        <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-home" >
                <table width="100%">
                        <tr>
                            <td align="center">
>>>>>>> c079dc80a7fe9d7685248e1cad509d41d609cb02
                            <i class="material-icons" id="iconhome" style="font-size: 30px;">home</i> 
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-home" style="font-size: 10px; color: #000; font-weight: 500;">Home</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td> -->
        
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-realtime" >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;">room</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-now-use" style="font-size: 10px;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                </div>
            </td>
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-reservation" >
                <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;" style="">search</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-advance-use" style="font-size: 10px;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-car-service" >
                <table width="100%">
                        <tr>
                            <td align="center">
                            <i class="material-icons" id="car-service" style="font-size: 30px;">directions_car</i>
                            <!-- <i class="material-icons" id="iconhome" style="font-size: 30px;">home</i>  -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-car-service" style="font-size: 10px; font-weight: 500;">Car service</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
<<<<<<< HEAD
=======
            <td width="20%" style="border-right: 1px solid #555;">
                <div class="btn-car-service" >
                <table width="100%">
                        <tr>
                            <td align="center">
                            <i class="material-icons" id="car-service" style="font-size: 30px;">directions_car</i>
                          
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-car-service" style="font-size: 10px; color: #000; font-weight: 500;">Car service</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
>>>>>>> c079dc80a7fe9d7685248e1cad509d41d609cb02
            <td width="20%" >
            <div class="btn-management" >
           
                                                 
                           
                <table width="100%">
                    <tr>
                        <td align="center">
                        <!-- <i class="material-icons" style="font-size: 30px;">settings</i> -->
                            
                            <i class="material-icons" style="font-size: 30px;">dvr</i>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <span class="lng-management" style="font-size: 10px; font-weight: 500;">Management</span>
                        </td>
                    </tr>
                </table>
               
            </div> 
        </td>
            
        </tr>
    </table>    
<<<<<<< HEAD
 </div>
=======
 </div>   -->
>>>>>>> c079dc80a7fe9d7685248e1cad509d41d609cb02
   
   
    	<div id="back-home" style="display:none"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
        <div id="search-raeltime">
            <div class="col-md-12 " >
                <div class="card-contentrealtime">
                    <div class="box-search" id='boxRealtime'>
                        <button class="btn btn-success btn-xs" id="start_yes-change" style=" color: #fff; z-index: 1;display:none;   /* font-size: 13px; */    right: 25px; padding: 6px; position: absolute;  background-color: #3b5998;    margin: 5px 0;"><span>Change</span></button>
                        <input type='text'   class="form-control" placeholder=""  id='current' style="border: none !important;padding: 10px; width: 100%;background: #fff;display:nones;margin: auto;color:#333"/>
                        <div style="display: nones;" id="open-search">
                            <div style="border-bottom: 1px solid #333;display:nones;"></div>
                            <input  type='text' class="form-control" placeholder="<? echo $lan_go_txt;?>" id="pac-input" style="border: none !important;" value="" style="margin: auto;border: none !important;padding: 10px; width: 100%;background: #fff;" />   
                                    
                        </div>          
                    </div>
                </div>
            </div>
            <input type="hidden" id="chk_val_search" value="0" />
            <input type="hidden" id="chk_val_boxsearch" value="0" />
            <input type="hidden" id="mapZ" value="0"/>
        </div>

        <div style="" id="search-show">            
            <div class="col-md-12 " >
                <div class="card-content" style=" background-image: linear-gradient(-179deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);">
                    <div class="box-search">
                        <div class="" id="current-addr">
                            <i class="material-icons">gps_fixed</i>
                        </div>
                        <input type='text' class="" placeholder="<? echo  $lan_search_from;?>"  id='search-from' style="border: none !important;padding: 10px; width: 100%;background: #fff;"/>
 <!-- -->                  <div style="border-bottom: 1px solid #333;"></div>
                        <div class="box-plancefrom" id="users">
                            <ul  class="list" id="box-plancefrom" name="character"></ul>
                        </div>                                        
                        <input  type='text' class="" placeholder="<? echo  $lan_search_to;?>" id='search-to' style="border: none !important;padding: 10px; width: 100%;background: #fff;" />                                                
                        <div class="box-planceto"  >
                            <ul  class="list" id="box-planceto" name="character"></ul>
                        </div>
                        <input type="hidden" name="" value="" id="lat_from">
                        <input type="hidden" name="" value="" id="lng_from">
                        <input type="hidden" name="" value="" id="lat_to">
                        <input type="hidden" name="" value="" id="lng_to">   
                    </div>
                </div>                          
            </div>            
        </div>
        <div id="box-car-service" style="width: 100%;height: 100vh;display:none;background: #fff;    position: relative;
     overflow: hidden; ">
           <div style="text-align:center; background: #16b3b1;
    padding: 5px;
    color: #fff;
    font-weight: 600;
    text-align: center;">
               <h4>Car service</h4>
           </div>
        </div>
       <div id="map" style="width: 100%;height: 100vh;"></div>         


   
<div class="modal fade" id="updatelat" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="max-height: 640px; overflow: hidden; overflow-y: scroll;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>         
            <div class="modal-body" style="padding: 0">                                    
                <div class="box-country">
                    <div id="latlng"> </div>
                </div>

            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="capacityss" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div align="left" style="padding: 2px 5px;font-size: 15px;text-shadow: none">
			        <span class="lng-seating"></span>
			    </div>                                    
                <div id="getcapa"></div>
                <div id="getcapa2"></div>
                <div id="facilities">
                    <div align="left" style="padding: 2px 5px;font-size: 15px;text-shadow: none" >
			            <span class="lng-facilitiy"> </span>
			        </div>
			        <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
			            <div style="margin-left: 3%; padding-top: 9px;">
			                <B >1.</B> 
                            <img src="https://dotdotdottrip.com/files/img/air.png"  style="margin: 8px;"> 
			                <span class="lng-conditioner"></span>			                            
			            </div>
			            <div style="margin-left: 3%;padding-bottom: 9px;">
			                <B >2.</B> 
                            <i class="fa fa-music" aria-hidden="true"  style="margin: 8px;"></i> 
			                <span class="lng-audio-player"></span>
			            </div>
			        </div>
                </div>
                <div style="padding: 2px 5px;font-size: 15px;">
                    <span  class="lng-terms-of-use" >Terms of Use</span>
				</div>
                <div id="terms-of-use"></div>
            </div>
            <div class="modal-footer" style="padding: 12px;">
                <div type="button" class="btn-close lng-close" data-dismiss="modal" ></div>
            </div>
        </div>
    </div>
</div>


<div id="testImo" class="modal fade" role="dialog">
    <div class="modal-dialog" style=" width: 100%;  height: 60%;  margin: 0;  padding: 0;">
        <div class="modal-content" style="  height: auto; min-height: 100%; border-radius: 0;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
			    <div class="card-content">                            
                    <div class="form-group label-floating is-empty" id="startPut">
                        <label class="control-label">Current location</label>
                            <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating is-empty" id="endPut">
                        <label class="control-label">Where are you go?</label>                                          
                            <span class="material-input"></span></div>
                    </div>
                    <div id="resultSearch" style="margin-top: 25px;">
                                12	
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showPlace" role="dialog">
    <div class="modal-dialog" style="margin-top: 15px;    margin: 15px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: none;">
          <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
           
        </div>
        	
         					 <div class="media-body">             
         					
                               <select class="select-type-place" id="types_ofPlace">
								  <option value="">Select Types</option>
								  <option value="hospital">Hospital</option>
								  <option value="store">Store</option>
								  <option value="airport">Airport</option>
								  <option value="cafe">Cafe</option>
								  <option value="spa">Spa</option>
								  <option value="bank">Bank</option>
								  <option value="department_store">Department Store</option>
								  <option value="lodging">Hotel,Resort</option>
								</select>
								<div style="overflow-y: scroll !important; " class="media-scroll" >
                               <ul class="list-group" id="list_place_push" style="font-size: 15px;" >
                               
								</ul>
								</div>                            
                           </div>  
        	
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"  style="display: nones;" >Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
