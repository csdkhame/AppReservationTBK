<?php 
   
    if(!$_COOKIE['lng']){

       // echo  $_COOKIE['lng'].'unde';
        $lng_all_type = 'All Type';
        $lag_search_from = 'From: Type airport,hotel name, or location.';
        $lag_search_to = 'To: Type airport,hotel name, or location.';
        $lag_go_txt = 'where you go ?';
        $lng_from = 'From';
        $lng_to = 'To';
        $lng_from_pro = 'From Province';
        $lng_to_pro = 'To Province';
        $click_save_place_txt = "No record (Click to save)";
        
        $select_type = "Select Types";
        $hospital = "Hospital";
        $store = "Store";
        $airport = "Airport";
        $cafe = "Cafe";
        $spa = "Spa";
        $bank = "Bank";
        $depart_store = "Department Store";
        $h_r = "Hotel,Resort";
    }
    else if($_COOKIE['lng'] == 'en'){
        //echo 'en';
        $lng_all_type = 'All Type';
        $lag_search_from = 'From: Type airport,hotel name, or location.';
        $lag_search_to = 'To: Type airport,hotel name, or location.';
        $lag_go_txt = 'where you go ?';
        $lng_from = 'From';
        $lng_to = 'To';
        $lng_from_pro = 'From Province';
        $lng_to_pro = 'To Province';
        $click_save_place_txt = "No record (Click to save)";
        
        $select_type = "Select Types";
        $hospital = "Hospital";
        $store = "Store";
        $airport = "Airport";
        $cafe = "Cafe";
        $spa = "Spa";
        $bank = "Bank";
        $depart_store = "Department Store";
        $h_r = "Hotel,Resort";
    }
    else if($_COOKIE['lng'] == 'th'){
        //echo 'th';
        $lng_all_type = 'ทุกประเภท';
        $lag_search_from = 'จาก: สนามบินประเภทชื่อโรงแรมหรือสถานที่ตั้ง';
        $lag_search_to = 'ไปยัง: สนามบินประเภทชื่อโรงแรมหรือสถานที่ตั้ง';
        $lag_go_txt = 'คุณต้องการไปไหน ?';
        $lng_from = 'จาก';
        $lng_to = 'ไปยัง';
        $lng_from_pro = 'จากจังหวัด';
        $lng_to_pro = 'ไปยังจังหวัด';
        $click_save_place_txt = "ไม่มีบันทึก (กดเพื่อบันทึก)";
        
        $select_type = "Select Types";
        $hospital = "Hospital";
        $store = "Store";
        $airport = "Airport";
        $cafe = "Cafe";
        $spa = "Spa";
        $bank = "Bank";
        $depart_store = "Department Store";
        $h_r = "Hotel,Resort";
    }
    else if($_COOKIE['lng'] == 'cn'){
       // echo 'cn';
       
       $lng_all_type = '所有類型';
       $lag_search_from = '从: 机场，酒店名称或位置。';
       $lag_search_to = '至: 机场，酒店名称或位置。';
       $lag_go_txt = '你去哪裡 ?';
       $lng_from = '从';
       $lng_to = '至';
       $lng_from_pro = '從省';
       $lng_to_pro = '到省';
       $click_save_place_txt = "没有记录 (按保存)";
       
        $select_type = "Select Types";
        $hospital = "Hospital";
        $store = "Store";
        $airport = "Airport";
        $cafe = "Cafe";
        $spa = "Spa";
        $bank = "Bank";
        $depart_store = "Department Store";
        $h_r = "Hotel,Resort";
       
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
                <!-- <dic class="" name="cartype" id="cartype" class="" style="     margin: auto;"> -->
                    <div  class="" id="select_pax_use" style="border: 1px solid #dfdfdf;
    padding: 8px;
    /* margin: 8px 0; */
    width: 100%;"></div>                                                                
                <!-- </div> -->


            </div>
            <style>
        #box-pax-use{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-pax-use-in{
    height: 100vh;
        /* border-radius: 4px; */
        /* background: rgba(0, 0, 0, 0.75); */
        min-width: 100%;
        background:#fff;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
                #paxuse{
    list-style: none;
    padding-left: 0;
}
#paxuse li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
#box-pax-rel{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-pax-rel-in{
    height: 100vh;
        /* border-radius: 4px; */
        /* background: rgba(0, 0, 0, 0.75); */
        min-width: 100%;
        background:#fff;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
                #paxuse{
    list-style: none;
    padding-left: 0;
}
#paxrel{
    list-style: none;
    padding-left: 0;
}
#paxrel li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
                   </style>
        <div id="box-pax-use">
            <div class="box-pax-use-in" >               
                   <div  id="pax-box">                      
                       <!-- <h4 style="    text-align: center;" class="lng-foget-pass">Please input your email</h4> -->
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-please-select-type"></span>
                            <i class="material-icons closepop">close</i>

                        </div>
                        <div class="col-md-12 boxpax" style="text-align: left;" > 
                        <ul class="" name="typecarservice" id="paxuse" >
                            <li value="All Type" onclick="sendpaxuse(0)" style="padding: 15px; border-bottom: 1px solid #ddd;"><?php echo  $lng_all_type;?>
                            </li>                                                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="box-pax-rel">
            <div class="box-pax-rel-in" >               
                   <div  id="pax-box">                      
                      
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-please-select-type"></span>
                            <i class="material-icons closepop">close</i>

                        </div>
                        <div class="col-md-12 boxpax" style="text-align: left;" > 
                        <ul class="" name="typecarservice" id="paxrel" >
                            <li value="All Type" onclick="sendpaxrel(0)" style="padding: 15px; border-bottom: 1px solid #ddd;"><?php echo  $lng_all_type;?>
                            </li>                                                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>                -->
        </div> 
             
        <div id="box-prosearch">
            <div>
                <div class="container" style="display:none;" id="container-product">
                    <div class="row">
                        <div class="col-md-12" style="padding: 10px;">                            
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
    <style>
       
        
    </style>
<div class="box-menu-select">
    <table width="100%">
        <tr>
            <td width="20%" style="">
                <div class="btn-realtime" >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;">room</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-now-use" style="font-size: 13px;"></span>
                            </td>
                        </tr>
                    </table>
                   
                </div>
            </td>
            <td width="20%" style="">
                <div class="btn-reservation" >
                <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;" style="">search</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-advance-use" style="font-size: 13px;"></span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" style="">
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
                            <span class="lng-car-service" style="font-size: 13px;">Car service</span>
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
                                <span class="lng-management" style="font-size: 13px;">Management</span>
                            </td>
                        </tr>
                    </table>
                </div> 
            </td>
        </tr>
    </table>
<style>
    .box_option{
        background-color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 100%;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px;
        cursor: pointer;
        position: absolute;
        bottom: 72px;
        /* padding: 8px; */
        right: 20px;
        z-index: 101;
        text-align: center;
        font-size: 26px;
        line-height: 1.3;
        display:none;
    }
</style>
 </div>
        <div id="back-home" style="display:none"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
        <div class="box_option">
        <i class="material-icons" style="line-height: 1.7; font-size: 25px;">place</i>
        </div>
        <div id="search-raeltime">
            <div class="" id="to-remove-class" >
                <div class="" style="">
               <!-- <div id="out-search" onclick="outSearchRealtime();" style="position: absolute;font-weight: 600;height: 100%;display: none;">
                <i class="material-icons" style="margin-top: 30px;" >chevron_left</i>
                </div> -->
                    
                    <div class="box-search" id='boxRealtime' >
                      <!-- <button class="btn btn-success btn-xs" id="delete_text" style=" color: #fff; z-index: 1;display:none;   right: 25px; padding: 6px; position: absolute;  background-color: #3b5998;    margin: 5px 0; width: 25px;"><span>X</span></button>-->
                        <input type='text'    placeholder=""  id='current' style="border: 1px solid #16b3b1;padding: 10px; width: 100%;background: #fff;display:nones;margin: auto;color:#333"/>
                        
                            <!-- <div style="border-bottom: 1px solid #333;display:nones;"></div> -->
                          
                                      
                               
                    </div>
                    <div class="box-searchto" id='boxRealtimeto' style="display:none">
                    <input type='text'  placeholder="<? echo $lag_go_txt;?>" id="pac-input"  
                            style="border: 1px solid #16b3b1; padding: 10px; width: 100%;  background: #fff; margin: auto;  color: #333;  height: 49px;" /> 
                    </div>
                    <div id="appendBox"></div>
                    
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
                        <input type='text' class="" placeholder="<? echo  $lag_search_from;?>"  id='search-from' style="border: none !important;padding: 10px; width: 100%;background: #fff;"/>
 <!-- -->                  <div style="border-bottom: 1px solid #333;"></div>
                        <div class="box-plancefrom" id="users">
                            <ul  class="list" id="box-plancefrom" name="character"></ul>
                        </div>                                        
                        <input  type='text' class="" placeholder="<? echo  $lag_search_to;?>" id='search-to' style="border: none !important;padding: 10px; width: 100%;background: #fff;" />                                                
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
     overflow: hidden;z-index: 100; ">
           <div style="text-align:center; background: #16b3b1;
    padding: 5px;
    color: #fff;
    font-weight: 600;
    text-align: center;">
               <h4 class="lng-a-place"></h4>
           </div>
           <style>
           .textInput {
    border: 1px solid #dfdfdf;
    padding: 8px;
    margin: 8px 0;
    width: 100%;
}
           </style>
            <div style="    margin-top: 10px;">
                <div class="col-md-12 col-sx-12">  
                    <!-- <div>
                        <span>
                            From
                        </span>
                    </div>                                           -->
                                                                                         
                        <!-- <select class="textInput" name="province" id="province" class="" style="  "> -->
                            <div class="textInput" id="selectpro"></div>
                        <!-- </select> -->
                    
                     
                    <!-- <div>
                        <span>
                            To
                        </span>
                    </div>                                                                        -->
                        <!-- <select class="textInput" name="provinceto" id="provinceto" class="" style="  "> -->
                            <div class="textInput"  id="selectproto"></div>
                        <!-- </select> -->
                       
                            <div  class="textInput" value="All Type" id="selectype" style="display:none"></div>
                            <?php ////echo  $lng_all_type;?>                                                            
</div>
                   <style>
                       #foget-password{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget{
    height: 100vh;
        /* border-radius: 4px; */
        /* background: rgba(0, 0, 0, 0.75); */
        min-width: 100%;
        background:#fff;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
#box-province{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-province-in{
    height: 100vh;
        /* border-radius: 4px; */
        /* background: rgba(0, 0, 0, 0.75); */
        min-width: 100%;
        background:#fff;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
#box-provinceto{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-provinceto-in{
    height: 100vh;
        /* border-radius: 4px; */
        /* background: rgba(0, 0, 0, 0.75); */
        min-width: 100%;
        background:#fff;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
#province{
    list-style: none;
    padding-left: 0;
}
#province li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
#provinceto{
    list-style: none;
    padding-left: 0;
}
#provinceto li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
#typecarservice{
    list-style: none;
    padding-left: 0;
}
#typecarservice li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
.closepop{
    position: absolute;
    right: 15px;
}

/* #box-pax-use{
    list-style: none;
    padding-left: 0;
}
#box-pax-use-in li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
} */
                   </style>
        <!-- <div id="box-pax-use">
            <div class="box-pax-use-in" >               
                   <div  id="pax-box">                      
                     
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-please-select-type"></span>
                        </div>
                        <div class="col-md-12 boxpax" > 
                        <ul class="" name="typecarservice" id="paxuse" >
                            <li value="All Type" onclick="sendpax(0)" style="padding: 15px; border-bottom: 1px solid #ddd;"><?php echo  $lng_all_type;?>
                            </li>                                                                
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="foget-password">
            <div class="box-in-foget" >               
                   <div  id="pax-box">                      
                       <!-- <h4 style="    text-align: center;" class="lng-foget-pass">Please input your email</h4> -->
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-please-select-type"></span>
                            <i class="material-icons closepop">close</i>

                        </div>
                        <div class="col-md-12 boxpax" > 
                        <ul class="" name="typecarservice" id="typecarservice" >
                            <li value="All Type" onclick="sendpax(0)" style="padding: 15px; border-bottom: 1px solid #ddd;"><?php echo  $lng_all_type;?>
                            </li>                                                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRO -->
        <div id="box-province">
            <div class="box-province-in" >               
                   <div  id="pax-box">                      
                       <!-- <h4 style="    text-align: center;" class="lng-foget-pass">Please input your email</h4> -->
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-from">From</span>
                            <i class="material-icons closepop">close</i>
                        </div>
                        <div class="col-md-12 boxpax" > 
                        <ul class="" name="typecarservice" id="province" >
                            <!-- <li ><? echo  $lng_from;?>
                            </li>                                                                 -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->

        <!-- PRO TO -->
        <div id="box-provinceto">
            <div class="box-provinceto-in" >               
                   <div  id="pax-box">                      
                       <!-- <h4 style="    text-align: center;" class="lng-foget-pass">Please input your email</h4> -->
                        <div style="background: rgb(22, 179, 177); color: #fff; padding: 18px; text-align: center; font-size: 19px; margin-bottom: 10px;">
                            <span class="lng-to">To</span>
                            <i class="material-icons closepop">close</i>

                        </div>
                        <div class="col-md-12 boxpax" > 
                        <ul class="" name="typecarservice" id="provinceto" >
                            <!-- <li  style="box-shadow: 0px 13px 16px 0px rgba(0, 0, 0, 0.3);list-style: none;padding: 15px 15px;  background: #fff; margin-bottom: 5px;"><? echo  $lng_to;?>
                            </li>                                                                 -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
                        
                        <div id="box-pro-service" style="  margin-bottom: 100px;">
                            <div id="product_service" style="height: 58vh;
    overflow-y: scroll;
    width: 100%;">
                            <div class="not-found lng-not-found" style="display:none"></div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
       <div id="map" style="width: 100%;height: 100vh;"></div>         


		<div id="clear-all" style="    z-index: 0;
    position: absolute;
    right: 20px;
    bottom: 130px;
    color: rgb(255, 255, 255);display: none;">
		<button title="Your Location" style="    background-color: #4285F4;
    border: none;
    outline: none;
    width: 40px;
    height: 40px;
    border-radius: 25px;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px;
    cursor: pointer;
    right: 15px;
    padding: 0px;">
		<i class="material-icons" style="    margin: 5px;
    font-weight: 800;">clear</i>
		</button></div>
		<style>
			.pac-icon-marker {
			    background-position: -5px -248px !important ;
			}
			.pac-icon {
			    width: 17px !important;
			    height: 24px !important;
			    margin-right: 7px !important;
			    margin-top: 3px !important;
			    display: inline-block;
			    vertical-align: top;
			    background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);
			    background-size: 52px !important;
			}
			#marginBox{
				/* margin-top: 90px; */
				background-color: #fff;
				position: relative;
			}
			 .pac-item-query{
			 	    font-size: 13px;
				    padding-right: 3px;
				    padding: 7px;
				    color: #000;
			 }  
		</style>

		<div id="btn_CurrentLocation" style="z-index: 0; position: absolute; right: 20px; /*top: 275px;*/    bottom: 190px;display: none;color: rgb(35,35,35);">
		<button title="Your Location" style="background-color: rgb(255, 255, 255);
    border: none;
    outline: none;
    width: 40px;
    height: 40px;
    border-radius: 25px;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px;
    cursor: pointer;
    right: 15px;
    padding: 0px;">
		<i class="material-icons" style="    margin: 5px;
    font-weight: 800;"><i class="material-icons">my_location</i></i>
		</button></div>



        <div id="boxForAutoCom">
        	<div style="padding: 0 15px">
        	<div id="marginBox">
           
            <div style="border-bottom: 4px solid rgba(51, 51, 51, 0.21);display:none;"></div>
            <div id="otherBox">
            	<div class="pac-item" id="currentPosId">
                    <span class="material-icons" aria-hidden="true" style="font-size: 2.1em;line-height: .75em; vertical-align: -40%; margin-left: -3px;color: #4285F4;">my_location</span>
                    <span class="pac-item-query" style="padding: 7px;">
                        <span class="lng-current-pos pac-matched ">Current position</span>
                    </span>
                </div>
                <div class="pac-item" id="home-place-id" onclick="selectSavePlaceOfften(1,'save');">
                    <span class="fa fa-home fa-lg" aria-hidden="true" style="font-size: 2.1em;"></span>
                    <span class="pac-item-query" style="padding: 7px;">
                        <span class="lng-home-locat pac-matched ">Home</span>
                        <!--<div id="text_check_home"></div>-->
                        <button class="btn btn-xs" id="edit-home_select" style="right: 10px;margin: 3px;width: 1px;position: absolute;background-color: rgba(22, 179, 177, 0.81);display: none;" onclick="selectSavePlaceOfften(1,'edit')">
                    	<i class="material-icons" style="right: 8px;">edit</i></button>
                    </span>
                </div>
                <div class="pac-item"  id="office-place-id" onclick="selectSavePlaceOfften(2,'save');">
                    <span class="fa fa-building fa-lg" aria-hidden="true" style="font-size: 2.1em;"></span>
                    <span class="pac-item-query" style="padding: 7px;">
                        <span class="lng-office-locat pac-matched ">Office</span>
                        <!--<div id="text_check_office"></div>-->
                    	<button class="btn btn-xs" id="edit-office_select" style="right: 10px;margin: 3px;width: 1px;position: absolute;background-color: rgba(22, 179, 177, 0.81);display: none;" onclick="selectSavePlaceOfften(2,'edit');">
                    	<i class="material-icons" style="right: 8px;">edit</i></button>
                    </span>
                </div> 
                <div class="pac-item" id="setpinId" onclick="setPinLocation();">
                    <span class="fa fa-map-pin fa-lg" aria-hidden="true" style="font-size: 2.1em;    margin: 3px;"></span>
                    <span class="pac-item-query" style="padding: 7px;">
                        <span class="lng-setpin-locat pac-matched ">Set location on map</span>
                    </span>
                </div>
                <div class="pac-item" id="nearbyId">
                    <span class="fa fa-arrow-right fa-lg" aria-hidden="true" style="font-size: 2.1em;"></span>
                    <span class="pac-item-query" style="padding: 7px;">
                        <span class="lng-nearby-locat pac-matched ">Nearby Places</span>
                    </span>
                </div>
            </div>
            <div id="showNearbyPlace" style="display: none;">
                <div style="margin: 8px;padding-top: 5px;padding-bottom: 2px;">
                    <table width="100%">
                        <tr>
                            <td>
                                <div style="/*border-top: 1px solid #e6e6e6;*/ font-size: 11px; color: #999;" id="outNearby" >
                                    <i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i>
                                </div>
                            </td>
                            <td>
                            <?php 
                            
                            $type_nearby_en = array("All Types", "Hospital", "Airport", "Spa", "Restaurant", "Department Store", "Hotel,Resort","Points of interest");
                            $type_nearby_th = array("ทุกประเภท", "โรงพยาบาล", "สนามบิน", "สปา", "ร้านอาหาร","ห้างสรรพสินค้า", "โรงแรม,รีสอร์ท","จุดน่าสนใจ");
                            $type_nearby_cn = array("所有类别", "医院", "机场", "温泉", "餐厅","百货商店" ,"酒店，度假村","兴趣点");
                            ?> 	
                                <select class="select-type-place" id="types_ofPlace">
                                	
                                	<?php
                                	$type_vale = 0;
                                	foreach($type_nearby_en as $item){
									     echo '<option value="'.$type_vale.'">'.$item.'</option>';
									     $type_vale+=1;
									 }
                                	?>
                                   <!-- <option value="">All Types</option>
                                    <option value="hospital">Hospital</option>
                                    <option value="store">Store</option>
                                    <option value="airport">Airport</option>
                                    <option value="cafe">Cafe</option>
                                    <option value="spa">Spa</option>
                                    <option value="bank">Bank</option>
                                    <option value="department_store">Department Store</option>
                                    <option value="lodging">Hotel,Resort</option>-->
                                </select>
                            </td>                            
                        </tr>
                    </table>
                </div>	
				<div id="list_place_push"></div>						               
            </div>
			</div>
			</div>
        </div>


 
        <div id="img-car" >
            <div class="box-in-foget" style="">
                <div class="header-img" style="">
                    <h4 class="lng-car"></h4>
                </div>
                <div style="">
                    <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;"> 
                        <div  class="btn-close-img lng-close" ></div>
                    </div>
                   <input type="hidden" name="" value="" id="idimage">

                   <div id="jssor_1" style="position: relative; top:60px; left: 0px; width: 600px; height: 300px;">
                            <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
       
                            <div ><img u="image" src="<?php echo base_url(); ?>files/img/index-01.jpg" /></div>
                            <div ><img u="image" src="<?php echo base_url(); ?>files/img/index-02.jpg" /></div>
                            <div ><img u="image" src="<?php echo base_url(); ?>files/img/index-03.jpg" /></div>
                            <div ><img u="image" src="<?php echo base_url(); ?>files/img/index-04.jpg" /></div>
                            <div ><img u="image" src="<?php echo base_url(); ?>files/img/index-05.jpg" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


<input type="hidden" id="for_check_currentInput" value="0"/>
<input type="hidden" id="for_check_endInput" value="0"/>

