<button class="btn" id="open_map"  style="display: none;">Open Map</button>

<!-- <button class="btn" id="open_mapsss" data-toggle="modal" data-target="#updatelat" style="display: nones;">updatelat-lng</button> -->

    <div id="show-hide-pro">
        <i class="material-icons" style="color: rgb(59, 89, 152);;
    font-size: 35px;">keyboard_arrow_down</i>
    </div>
    <div id="show-hide-pro2">
        <i class="material-icons" style="color: rgb(59, 89, 152);;
    font-size: 35px;">keyboard_arrow_up</i>
    </div>
    <div id="pro-search">
    <div class="nav nav-pills nav-pills-warning" id="ul-header2" style="" >
                            <div class="active" align="center" style="display: inline-block;">
                                <button class="btn btn-warning" id="private-btn"  href="#private" data-toggle="tab" aria-expanded="true"><span class="lng-private"></span> </button>
                            </div>
                            <div class="" align="center" style="display: inline-block;">
                                <button style=" background-color:#333" id="join-btn" class="btn btn-warning" href="#join" data-toggle="tab" aria-expanded="false"><span class="lng-join"></span></button>
                            </div>

                          <div class="form-group form-inline required " style="    padding: 9px 9px;
    text-align: center;
    /*border-right: 1px solid #ddd;
    border-left: 1px solid #ddd;
    border-radius: 0 0 4px 4px;*/
    margin-bottom: 12px;
    background: #fff;
   
    margin: auto;">
                                                            <!-- <label style="text-align:left" for="language">Guest name of your country</label>       -->
                                                                <select class="form-control" name="cartype" id="cartype" class="" style="     margin: auto;">
                                                                    <option value="" >All Type</option>
                                                                
                                                              </select>
                                                        </div>             
                        </div>
                        
    <div id="box-prosearch">
        <div>
             <div class="container" style="display:none;" id="container-product">
            <div class="row">
                <div class="col-md-9" style="    padding: 10px;">
                    <div class="col-lg-12">
                        <div class="row">
                        </div>
                        
                    </div>

                    <div class="tab-content" id="move-product">
                        <div class="tab-pane active" id="private" >
                                <div id="product_a">
                                    
                                </div>
                                <div id="product_b">
                                    
                                </div>
                        </div>
                        <div class="tab-pane "  id="join">
                                <div id="product_c">
                                    
                                </div>
                                <div id="product_d">
                                    
                                </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3"> 
                        <div class="box-info">
                            <div class="menu-city">
                                
                            </div>
                        </div>
                </div> -->
            </div>
        </div>
            
        </div>
        
    </div>
    
</div>
<div class="box-menu-select">
<!-- <div class="btn-show-select" >
    <i class="material-icons">vertical_align_bottom</i>
    
</div>
<div class="btn-hide-select" >
    <i class="material-icons">vertical_align_top</i>
    
</div> -->
    <!-- <div class="btn-real-res col-lg-12" id="btn-real-res">
   
    <i class="material-icons" id="iconhome" >home</i> 
         <i class="material-icons" id="iconleft" >keyboard_arrow_right</i> 
         <i class="material-icons" id="iconleft2" >navigate_before</i> 
             
               
              
               
           
                   
                      
                                     
               
            
    
       
    </div> -->
    <table width="100%">
        <tr>
        <td width="25%" style="border-right: 1px solid #555;">
                <div class="btn-home" >
                <table width="100%">
                        <tr>
                            <td align="center">
                            <i class="material-icons" id="iconhome" style="font-size: 35px;">home</i> 
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lnf-home" style="font-size: 10px; color: #000; font-weight: 500;">Home</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
        
            <td width="25%" style="border-right: 1px solid #555;">
                <div class="btn-realtime" >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 35px;">room</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-now-use" style="font-size: 10px; color: #000;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                </div>
            </td>
            <td width="25%" style="border-right: 1px solid #555;">
                <div class="btn-reservation" >
                <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 35px;" style="">search</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-advance-use" style="font-size: 10px; color: #000;font-weight: 500;"></span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="25%" >
            <div class="btn-management" >
           
                                                 
                           
                <table width="100%">
                    <tr>
                        <td align="center">
                            <i class="material-icons" style="font-size: 35px;">dvr</i>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <span class="" style="font-size: 10px; color: #000;font-weight: 500;">Management</span>
                        </td>
                    </tr>
                </table>
               
            </div> 
        </td>
            
        </tr>
    </table>    
 </div> 
<style>
.box-menu-select{
    
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 1;
    background: #fff;
    /* height: 90px; */
}
.btn-show-select{
    width: 50px;
    height: 50px;
    position: absolute;
    margin-top: -30px;
    background: #333;
    text-align: center;
    color: #fff;
    right: 0;
    padding-top: 5px;
    border-radius: 5px 5px;  
}
.btn-hide-select{
    width: 50px;
    height: 50px;
    position: absolute;
    margin-top: -30px;
    background: #333;
    text-align: center;
    color: #fff;
    right: 0;
    padding-top: 5px;
    border-radius: 5px 5px; 
    display:none;
}
.select-type-place{
	border: 1px solid #E0E0E0 !important;
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    position: relative;
}
@media screen and (min-height: 600px) {
    .media-scroll {
    	height: 300px;
    }
   
}
@media screen and (min-height: 660px) {
    .media-scroll{
    	height: 350px;
    }
  
}
@media screen and (min-height: 730px) {
   .media-scroll {
    	height: 400px;
    }
   
}
</style>
 <!-- Modal -->
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
  


<style>
	.material-button-anim {
  position: relative;
  padding: 0px 17px 27px;
  text-align: center;
  max-width: 320px;
  margin: 0 auto 20px;
      height: 90px;
      
}

.material-button {
    position: relative;
    top: 0;
    z-index: 1;
    width: 50px;
    height: 50px;
    font-size: 1.5em;
    color: #fff;
    background: #2C98DE;
        opacity: 0.85;
    border: none;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0,0,0,.275);
    outline: none;
}
.blinks {
  width: 50px;
  height: 50px;
 -webkit-animation: NAME-YOUR-ANIMATION 1s infinite; /* Safari 4+ */
  -moz-animation:    NAME-YOUR-ANIMATION 1s infinite; /* Fx 5+ */
  -o-animation:      NAME-YOUR-ANIMATION 1s infinite; /* Opera 12+ */
  animation:         NAME-YOUR-ANIMATION 1s infinite; /* IE 10+, Fx 29+ */
}

@-webkit-keyframes NAME-YOUR-ANIMATION {
0%, 49% {
    background-color: #d2d2d2;
/*    border: 3px solid #e50000;*/
}
50%, 100% {
    background-color: #2C98DE;
/*    border: 3px solid rgb(117,209,63);*/
}
}
.pac-container:after {
    /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */

    background-image: none !important;
    height: 0px;
    
}
.pac-container{
	z-index: 10000000 !important;
}

</style>

	<!--<div class="row" id="selectPlace" style="z-index: 10000 !important;display:none;left: 0px;position: absolute;">
      <div class="col-md-4 col-md-offset-4">
        <div class="material-button-anim" >
         
        
              <button class="material-button option1" type="button" style="left: -30px;" id="btn-home" >
             
                <span id="selectHome"><i class="fa fa-home fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(1);"></i></span>
              </button>
    
           
              <button class="material-button option2" type="button" id="btn-office">
              
                <span id="selectOffice"><i class="fa fa-building-o fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(2);"></i></span>
              </button>
   
       
              <button class="material-button option3" type="button" style="left: 30px; top: -5px;" id="btn-other">
                <span id="selectPlaceNearby"><i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#showPlace"></i></span>
              </button>
         
        </div>
      </div>
	</div>-->

   
     <div id="search-raeltime">
         <div class="col-md-12 " >
         	  <div class="card-contentrealtime" style=" background-image: linear-gradient(-179deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);border-radius: 4px;">
       					  <div class="box-search" id='boxRealtime'>
                              <!--  <input type='text' class="search form-control" placeholder="Current position" id="current"   style="border: none !important;"/> <button class="current-submit">Yes</button>-->
                              <button class="btn btn-success btn-xs" id="start_yes-change" style=" color: #fff; z-index: 1;display:none;   /* font-size: 13px; */    right: 25px; padding: 6px; position: absolute; border-radius:4px; background-color: #3b5998;    margin: 5px 0;"><span>Change</span></button>
                            <input type='text'   class="form-control" placeholder=""  id='current' style="border: none !important;padding: 10px; width: 100%;background: #fff;display:nones;margin: auto;"/>
			                        <div style="display: nones;" id="open-search">
			                        <div style="border-bottom: 1px solid #333;display:nones;"></div>
                                    <input  type='text' class="form-control" placeholder="where you go ?" id="pac-input" style="border: none !important;" value="" style="margin: auto;border: none !important;padding: 10px; width: 100%;background: #fff;" />   
                                   <!-- <input  type='text' class="form-control" placeholder="where you go ?" id="openSearch" style="border: none !important;" value="" />   -->
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
                <div class="card-content" style=" background-image: linear-gradient(-179deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);border-radius: 4px;">
                    <div class="box-search">
                        <button class="btn btn-success btn-xs" id="current-addr"><i class="material-icons">gps_fixed</i></button>
                            <input type='text' class="" placeholder="From Type airport,hotel name, or location."  id='search-from' style="border: none !important;padding: 10px; width: 100%;background: #fff;"/>
 <!-- -->                       <div style="border-bottom: 1px solid #333;"></div>
                                <div class="box-plancefrom" id="users" style="">
                                    <ul  class="list" id="box-plancefrom" name="character">
                                                
                                    </ul>
                                </div>                                        
                                <input  type='text' class="" placeholder="To Type airport,hotel name, or location." id='search-to' style="border: none !important;padding: 10px; width: 100%;background: #fff;" />
                                                
                                <div class="box-planceto"  style="">
                                    <ul  class="list" id="box-planceto" name="character">
                                    </ul>
                                </div>
                                    <input type="hidden" name="" value="" id="lat_from">
                                    <input type="hidden" name="" value="" id="lng_from">
                                
                                    <input type="hidden" name="" value="" id="lat_to">
                             <input type="hidden" name="" value="" id="lng_to">     
                                                                
                                <!-- <div class=" tm-yellow-gradient-bg text-center  " align="center" style="width: 100%">
                                    <a ><div  class="search-transfer-product col-md-5" onclick="search()" align="center"><i class="fa fa-search" aria-hidden="true" style="padding-right: 8px"></i><span class="lng-search"></span></div></a>
                                </div> -->
                    </div>
                </div>                          
            </div>            
        </div>


       <div id="map" style="width: 100%;height: 100vh;">

       </div>         


   
        <div class="modal fade" id="updatelat" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style="max-height: 640px; overflow: hidden; overflow-y: scroll;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">Gallery</h4> -->
                    </div>
                            
                    <div class="modal-body" style="padding: 0">                                    
                        <div class="box-country">
                            <div id="latlng">                                                                    
                            </div>
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
                <!-- Modal content-->
                <div class="modal-content">
                    <!-- <div class="modal-header"> -->
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                    <!-- </div>                             -->
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
			                             <!-- <B ng-if="flagcheck == 3">一. </B>      -->
                                         <img src="https://dotdotdottrip.com/files/img/air.png"  style="margin: 8px;"> 
			                            <span class="lng-conditioner"></span>
			                            
			                    </div>
			                    <div style="margin-left: 3%;padding-bottom: 9px;">
			                            <B >2.</B>
			                             <!-- <B ng-if="flagcheck == 3">二. </B> -->
                                         <i class="fa fa-music" aria-hidden="true"  style="margin: 8px;"></i> 
			                            <span class="lng-audio-player"></span>
			                            
			                    </div>
			                </div>

                          
                        </div>
                        <div style="padding: 2px 5px;font-size: 15px;">
                            <span  class="lng-terms-of-use" >Terms of Use</span>
                            <!-- <span  ng-if="flagcheck == 2" >ข้อกำหนดการใช้งาน</span>
                            <span  ng-if="flagcheck == 3" >服务条款</span> -->
				        </div>
                         <div style="padding: 10px;
    border-radius: 4px;
    font-size: 16px;
    border: 1px solid rgb(59, 89, 152);    
    margin-top: 5px;" id="terms-of-use"></div>
                    </div>
                    <div class="modal-footer">
                    
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button> -->
                                <button type="button" class="btn btn-default lng-close" data-dismiss="modal" ></button>
                            
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
<style>
body{
    height: 100vh;
}

#current-addr{
    color: #fff;
    z-index: 1;
    /* font-size: 13px; */
    right: 25px;
    padding: 6px;
    position: absolute;
    border-radius: 4px;
    background-color: #999999;
    margin: 5px 0;
}
#pro-search{
    z-index: 200;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
        /* padding: 15px; */
    background: rgba(255, 255, 255, 0.79);
    display: none;
}
#show-hide-pro{
       height: 36px;
    border-radius: 100%;
    /* background: #fff; */
    border: 2px solid rgb(59, 89, 152);
    min-width: 2rem;
    /* height: auto; */
    z-index: 201;
    left: 50vw;
    /* top: 86vh; */
    overflow: hidden;
    transform: translate(-50%,-50%);
    position: fixed;
    display: none;
    bottom: 0;
}
#show-hide-pro2{
       height: 36px;
    border-radius: 100%;
    /* background: #fff; */
    border: 2px solid rgb(59, 89, 152);
    min-width: 2rem;
    /* height: auto; */
    z-index: 201;
    left: 50vw;
    /* top: 86vh; */
    overflow: hidden;
    transform: translate(-50%,-50%);
    position: fixed;
    display: none;
    bottom: 0;
}
.modal-content .modal-body {
    padding: 24px 10px 16px !important;
}
.modal .modal-dialog {
    margin-top: 10px !important;
}
.media-heading:hover, a:link{
    color: #333 !important;
}
.lng-book{
     color: #333 !important;
}
#iconhome{
    /* font-size: 32px;
    color: #ffffff;
    position: absolute;
    border-radius: 4px;
    left: 15px;
    top: -38px;
    display: none; */
}
#iconleft{
    background: #2196f3;
    font-size: 45px;
    color: #fff;
    position: absolute;
    border-radius: 0 4px 4px 0;
    display: none;
    right: 15px;
    margin-bottom: 12px;
}
#iconleft2{
    background: #ff9800;
    font-size: 45px;
    color: #fff;
    position: absolute;
    border-radius: 4px 0 0 4px;
    display: none;
    margin-bottom: 12px;
}
#search-show{
    position: absolute;
    margin-top: 70px;
    width: 100%;
    z-index: 5;
    display: none;
}
#search-raeltime{
    position: absolute;
    margin-top: 70px;
    width: 100%;
    z-index: 5;
    display: none;
}
.card-content:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    left: 80px;
    top: -10px;
}
.card-contentrealtime:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    left: 260px;
    top: -10px;
    display: none;
}
.card-contentrealtime.hidden5:after {
    border-bottom: 0px solid #FFFFFF;
    /*border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    left: 260px;
    top: -10px;*/
}
.box-search{
        padding: 0 12px;
    }
    .box-search .form-group{
        margin: 0;
    }
    .btn-reservation{
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
    .btn-realtime{
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
    .btn-home{
        padding: 8px 0;
        font-size: 16px;
        /* font-weight: 400; */
        /* position: absolute; */
        width: 100%;
        /* border-radius: 4px; */
        /* padding: 12px; */
        color: #07c284;
        text-align: center;
        /* display: inline-block; */
        /* background-color: #2196f3; */
        z-index: 1;
    }
    .btn-management{
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
    .btn-management a{
        color: #999999;
    }
    /*.btn-reservation:hover{
        background-color: #FFC107;
    }*/
    .btn-real-res{
        position: absolute;
        margin-top: 50px;
        width: 100%;
        z-index: 5;
        text-align: center;
    }
.facebook-login-auth {
    color: #3b5998;
    border: 1px solid #3b5998;
    font-weight: 700;
    display: inline-block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 4px;
    margin-left: 15px;
}
.fa-facebook-official {
    display: inline-block;
    vertical-align: text-top;
    padding: 0;
    /* background-image: url(/images/2014/sprites/icons-header-336d99fe71.png); */
    width: 37px;
   /* height: 38px;*/
    padding-left: 2px;
    float: left;
}
.btn-signup {
    border: 1px solid #d93325;
    background-color: #a81707;
    color: #3b5998;
    /*border: 1px solid #3b5998;
    background-color: #3b5998;*/
    font-weight: 700;
   
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 4px;
    text-align: center;
    color: #ffffff;
    display: inline-block;
    margin-left: 15px;
    margin-right: 15px;
}
    .column {
    overflow: hidden;
    background: #f9f9f9;
    border-radius: 5px;
    border: 1px solid #ccc;
    min-height: 390px;
}
.join-block {
    padding: 10px 15px;
    font: bold 12px/30px Arial,Helvetica,sans-serif;
    color: #000;
}
div.banner {
    background: #f8f1f1;
    position: relative;
    min-height: 339px;
}
.city__cta-bit {
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 50%;
    left: 121px;
    padding: 30px;
    position: absolute;
    width: 350px;
    height: 350px;
}
.gmnoprint a, .gmnoprint span, .gm-style-cc {
    display:none;
}
.gmnoprint div {
    background:none !important;
}
.gm-style-cc { 
    display:none; 
}
a[href^="http://maps.google.com/maps"],
a[href^="https://maps.google.com/maps"],
a[href^="https://www.google.com/maps"] {
    display: none !important;
}
.gmnoprint:not(.gm-bundled-control) {
    display: none;
}
        </style>
        
<style>
    .nav-tabs {
    background: #ffffff;
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}
 input, input:before, input:after {
      -webkit-user-select: initial;
      -khtml-user-select: initial;
      -moz-user-select: initial;
      -ms-user-select: initial;
      user-select: initial;
     } 
.tm-home-box-1{
    /*background-image: -webkit-linear-gradient(269deg, #ffd000 0%, #ffb300 100%);
    background-image: linear-gradient(-179deg, #ffd000 0%, #ffb300 100%);*/
       width: 100%;
    padding: 40px 20px;
    border-radius: 0 0 5px 5px;
    min-height: 255px;
}
#box-prosearch{
    height:100%;
    border-radius: 4px;
    background: #fff;
    /* min-width: 33rem; */
    overflow: hidden;
    z-index: 10;
    overflow-y: scroll;
    /* margin-top: 15px; */
}
.a-link-item {
      width: 100%;
    /* padding-top: 20px; */
    /* height: 240px; */
    margin-top: 0px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #333;
    padding: 10px;
    box-shadow: 0px 2px 3px rgba(0,0,0,0.15);
    /* background: #f5f5f5; */
}
.item-thumbnail2 {
    position: absolute;
    display: inline-block;
    float: left;
    /* border-radius: 13px; */
    margin-top:60px;
     width: 235px; 
     height: 150px; 
    margin-bottom: 3px;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
    margin-left: 1%;
}
.item-thumbnail2 img {
    width: 100%;
    height: 100%;
    border-radius: 4px;
}
.a-link-item h2 {
    position: relative;
    font-size: 17px;
    margin-left: 7%;
    width: 64%;
    margin-top: 0;
}
.hotel_num {
    background-image: url('<?php echo base_url(); ?>files/images/icon_searchresult13.png');
    background-repeat: no-repeat;
    float: left;
    margin-left: -38px;
    background-size: 26px;
    width: 26px;
    height: 38px;
    /* background-position: -156px 0; */
    font-family: tahoma;
    font-weight: bold;
    font-size: 12px;
    color: #000;
    line-height: 24px;
    text-align: center;
    vertical-align: 1px;
}
.box-province {
    display: inline-block;
    /* margin-left: 52%; */
    width: 30%;
    color: #100f0f;
    /* margin-top: -35px; */
}
.car-type {
    /* margin-top: -9px; */
    /* position: relative;
    z-index: 1;
    color: #000; */
    /* margin-left: 50%; */
    /* padding: 1px 3px;
    border-radius: 3px;
    display: inline-block; */
}
.pax {
    /* margin-top: -9px; */
    position: relative;
    z-index: 1;
    color: #000;
    padding: 1px 3px;
    border-radius: 3px;
    display: inline-block;
}
#facilities {
    margin-top: 42px;
    /* position: absolute; */
}
#box-cost-view {
    right: 0;
    position: absolute;
    margin-right: 20px;
    /*padding: 0 12px;*/
    margin-top: 62px;
}
.product_r {
    text-align: center;
    margin-bottom: 15px;
}
.product_r .base_price {
    color: #f60;
    display: block;
    margin-bottom: 0;
    line-height: 1.2;
}
.sala {
    display: block; 
    /* font-family: 'Open Sans',sans-serif; */
    font-weight: 400;
    /* color: #757575; */
    font-size: 18px;
    /* font-weight: 600; */
    /* margin-top: 30px; */
    /* padding: 0 19px; */
    /* margin-bottom: 20px; */
}
.views-item {
    background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #ffb300 100%);
    background-image: linear-gradient(-1deg, #e58c00 0%, #ffb300 100%);
    border: 1px solid #E68E00;
    color: #000;
    /* width: 117px; */
    text-align: center;
    /* height: 35px; */
    padding: 10px 60px;
    position: relative;
    /* margin-left: 83.5%; */
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
}
#i-list {
    right: 0;
    position: absolute;
   /* background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #ffb300 100%);
    background-image: linear-gradient(-1deg, #e58c00 0%, #ffb300 100%);*/
    border: 1px solid #E68E00;
    font-size: 20px;
    text-align: center;
    margin-left: 38%;
    width: 82px;
    color: #000;
    height: 62px;
    line-height: 1.5;
    border-radius: 4px;
    /* background: #ebefc2; */
    /*margin-top: -18px;*/
    cursor: pointer;
}
#capacity {
    margin-top: 9px;
    font-size: 12px;
    padding: 0;
    margin-bottom: 0;
}
.type-t{
     /* position: absolute;
     margin-top: 15px; */
}
#box-plancefrom li{
            list-style: none;
    padding: 15px 8px;
    /* padding-left: 0; */
    font-size: 15px;
}
#box-planceto li{
           list-style: none;
    padding: 8px 35px;
    /* padding-left: 0; */
    font-size: 15px;
}
.box-info {
    border: 1px solid #ebefc2;
    height: 500px;
    padding: 17px 3px;
    background: #FFF176;
    border-radius: 5px;
}
#box-plancefrom li:hover{
    background-color: #ffcd00;
}
#box-planceto li:hover{
    background-color: #ffcd00;
}
.box-plancefrom{
    padding-left: 0;
    display: none;
    max-height: 385px;
    position: absolute;
    overflow-x: hidden;
    overflow-y: scroll;
    overflow: hidden;
    width: 92%;
    padding: 0px;
    margin-left: -13px;
    z-index: 100;
   /* border-bottom: 1px solid rgb(221, 221, 221);
    border-right: 1px solid rgb(221, 221, 221);
    border-left: 1px solid rgb(221, 221, 221);*/
    border-radius: 0px 5px 5px;
    overflow-y: scroll;
    overflow-x: none;
}
.list li{
     background: rgb(255, 255, 255);
     margin-bottom: 8px;
}
.box-planceto{
    padding-left: 0;
    display: none;
    max-height: 385px;
    position: absolute;
    overflow-x: hidden;
    overflow-y: scroll;
    overflow: hidden;
    width: 92%;
    padding: 0px;
    margin-left: -13px;
    z-index: 100;
    /*border-bottom: 1px solid rgb(221, 221, 221);
    border-right: 1px solid rgb(221, 221, 221);
    border-left: 1px solid rgb(221, 221, 221);*/
    border-radius: 0px 5px 5px;
    overflow-y: scroll;
    overflow-x: none;
}
#box-plancefrom{
    padding-left: 0;
    
}
#box-planceto{
    padding-left: 0; 
    
}
.form-control, .form-group .form-control {
     border: 1px solid #E0E0E0 !important;
    display: block;
    width: 100%;
    height: 34px;
        border-radius: 5px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 5px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s; 
}
.form-control{
      
}
.search-transfer-product {
   margin-top: 20px;
    color: #fff;
    background: #3b5998;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    float: right;
    font-weight: 400;
    margin-right: -12px; 
    
    
}
#ul-header{
    padding: 3px 12px; 
    text-align: center;
    padding-top: 35px;
    border-top: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-left: 1px solid #ddd;
    border-radius: 5px 5px 0 0;
    border-radius: 4px;
}
#ul-header2{
        padding: 3px 0;
    text-align: center;
    /* padding-top: 35px; */
    /* border-top: 1px solid #ddd; */
    /* border-right: 1px solid #ddd; */
    /* border-left: 1px solid #ddd; */
    /* border-radius: 5px 5px 0 0; */
    border-radius: 4px 4px;
    display: none;
    /* margin-bottom: 12px; */
    background: #fff;
}
.table-striped>tbody>tr:nth-of-type(odd){
        background-color: #ddd !important;
}
.not-found{
    text-align: center;
    margin-top: 50px;
    font-size: 20px;
    color: red;
    font-weight:400;
}






@media screen and (max-width: 767px){
#bodyClick{
        right: 229px !important;
}


#i-list {
   margin-right: 20px !important;
    margin-top: 15px !important;
    float: right;
}
.main-raised {
    margin: -60px 15px 0 !important;
    margin-bottom: 20px !important; 

}
#banner-right{
    margin-top: 20px;
}
.btn-signup {
    display: block;
    margin: 0;
}
.facebook-login-auth {
    display: block;
    margin: 0;

}
.container{
        /*margin-bottom: 20px;*/
}
div.banner{
    min-height: 125px; 
}
.column{
     min-height: 290px; 
}
.box-info{
    margin-top: 20px;
}
#banner-right{
    display: none;
}
#btn-real-res{
    width: 100%;

}
.a-link-item h2 {
   position: relative;
    font-size: 17px;
    margin-left: 14%;
    width: 86%;
    margin-top: 15px;
    font-size: 13px !important;
    font-weight: 500;
}
.box-province {
      display: inline-block;
    width: 150px;
    margin-left: -28px;
    margin-top: 140px;
    float: left;
    text-align: center;
}
#box-cost-view {
    margin-right: 20px !important;
    margin-top: 100px !important;
    padding: 0;
}
.a-link-item {
    /* padding: 8px; */
    min-height: 260px;
}
.item-thumbnail2 {
    width: 150px;
    height: 100px;
    /*margin-left: 10px;*/
    /*margin-top: -8px;*/
}
.views-item {
   
    padding: 5px 30px;
    
   
}
#join-btn{
    padding: 12px 58px;
}
#private-btn{
    padding: 12px 62px;
}
}
@media screen and (max-width:320px){
/*@media only screen and (max-device-width: 568px) and (min-device-width: 320px) and (orientation: portrait){*/
.box-province {
    
    margin-left: 3px;
    
}
.a-link-item {
    /* padding-left: 0px; */
    min-height: 240px;
}
#i-list {
   margin-right: 20px !important;
    margin-top: 15px !important;
    float: right;
}
#private-btn{
    padding: 12px 50px !important;
}
#join-btn{
        padding: 12px 42px !important;

}
#pro-item{
    height: 315px !important;
}


.hotel_num {
    margin-top: -14px;
}


.product_r {
    padding-bottom: 0px;


}
#facilities {
    margin-top: 15px;
    /* margin-left: 50px; */
    /* position: absolute; */
}

.car-type{
    /* padding: 0 */
}
.type-t {
    /* position: absolute;
    margin-top: -15px;
    margin-left: 50px;
    padding: 0; */
}
.box-info{
    max-height: 100px;
}
#box-cost-view {
    margin-right: 10px !important;
    margin-top: 100px !important;
    padding: 0;
}
}
        /*.tm-yellow-gradient-bg{
            background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);
        }*/
</style>

<style>

.form-control2 {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-control2,
.form-group .form-control2 {
  border: 0;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent;
  transition: background 0s ease-out;
  float: none;
  box-shadow: none;
  border-radius: 0;
  font-weight: 400;
}
</style>

<style>
	.pac-container{
	width: 100% !important;
    position: absolute !important;
    left: 0px !important;
    top: 155px !important;
    /* display: none; */
    height: 100% !important;
	}
	.pac-item {
/*    cursor: default !important;*/
    padding: 10px !important;
/*    text-overflow: ellipsis !important;
    overflow: hidden !important;
    white-space: nowrap !important;
    line-height: 30px !important;
    text-align: left !important;
    border-top: 1px solid #e6e6e6 !important;
    font-size: 11px !important;
    color: #999 !important;*/
}
</style>

<div id="testImo" class="modal fade" role="dialog">
  <div class="modal-dialog" style=" width: 100%;
  height: 60%;
  margin: 0;
  padding: 0;">

    <!-- Modal content-->
    <div class="modal-content" style="  height: auto;
  min-height: 100%;
  border-radius: 0;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--        <h4 class="modal-title">Modal Header</h4>-->
      </div>
      <div class="modal-body">
							  <div class="card-content">
                            
                                        <div class="form-group label-floating is-empty" id="startPut">
                                            <label class="control-label">Current location</label>
                                     <!--       <input type="text" class="form-control2" id="current" placeholder="">-->
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty" id="endPut">
                                            <label class="control-label">Where are you go?</label>
                                           <!-- <input type="text" class="form-control2" id="pac-input" placeholder="">-->
                                        <span class="material-input"></span></div>
                                        
                                       <!-- <button type="submit" class="btn btn-fill btn-rose">Submit</button>-->
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
