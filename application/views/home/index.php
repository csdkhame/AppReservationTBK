<button class="btn" id="open_map" style="display: none;">Open Map</button>
<div class="">
    <div class="btn-real-res col-lg-12" id="btn-real-res">
        <div class="btn-reservation" > Reservation</div>
        <div class="btn-realtime" >Realtime</div>
    </div>
     <div id="search-raeltime" style=" position: absolute;
        margin-top: 112px;
        width: 100%;
        z-index: 20;
        display: none;">
         <div class="col-md-12 " >
         	  <div class="card-content" style=" background-image: linear-gradient(-179deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);border-radius: 4px;">
       					  <div class="box-search">
                                <input type='text' class="search form-control" placeholder="Current position" id="current"   style="border: none !important;"/>
 <!-- -->                        <div style="border-bottom: 1px solid #333;"></div>
                                       
                                
                                        
                                    <input  type='text' class="form-control" placeholder="To Type airport,hotel name, or location." id="pac-input" style="border: none !important;" />
                                                
                                   
                            </div>
                </div>
      	</div>

        </div>
        <div style=" position: absolute;  margin-top: 112px;width: 100%; z-index: 20; display: none;" id="search-show">            
            <div class="col-md-12 " >
                <div class="card-content" style=" background-image: linear-gradient(-179deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);border-radius: 4px;">
                    <div class="box-search">
                        <button class="btn btn-success btn-xs" style=" color: #fff; z-index: 1;   /* font-size: 13px; */    right: 25px; padding: 6px; position: absolute; border-radius: 50%; background-color: #3b5998;    margin: 5px 0;"><i class="material-icons">gps_fixed</i></button>
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
                                        
                                                                
                                <div class=" tm-yellow-gradient-bg text-center  " align="center" style="width: 100%">
                                    <a href="#move-product"><div  class="search-transfer-product col-md-5" onclick="search()" align="center"><i class="fa fa-search" aria-hidden="true" style="padding-right: 8px"></i><span>Search</span></div></a>
                                </div>
                    </div>
                </div>
                    


                                            
            </div>
           
                
          
                        
        </div>

       <div id="map" style="width: 100%;height: 100vh;"></div>         
    

    <div class="container" style="display:none;margin-top: -130px;" id="container-product">
			<div class="row">
				<div class="col-md-9">
                    <div class="col-lg-12">
                        <div class="row">
                        <div class="nav nav-pills nav-pills-warning" id="ul-header2" >
                            <div class="active" align="center" style="display: inline-block;">
                                <button class="btn btn-warning" style="padding: 12px 55px;" href="#private" data-toggle="tab" aria-expanded="true"> Private</button>
                            </div>
                            <div class="" align="center" style="display: inline-block;">
                                <button style="padding: 12px 60px; background-color:#333" class="btn btn-warning" href="#join" data-toggle="tab" aria-expanded="false">Join</button>
                            </div>
                                       
                        </div>
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
         <div class="modal fade" id="login">
                    <div class="modal-dialog col-md-8">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <!-- <h4 class="modal-title" >Logout</h4> -->
                            </div>
                            <div class="modal-body">
                               <div class="row">
                        <div class="">
                            <form >
                                
                                    <div class="card-header text-center" data-background-color="green">
                                        <h4 class="card-title">Login</h4>
                                        <!-- <div class="social-line">
                                            <a href="#btn" class="btn btn-just-icon btn-simple" style="">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#eugen" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                    
                                    <div align="text-center">
                                        <p id="message" style="text-align: center;"></p>
                                    </div>
                                    <div class="card-content col-sm-8 col-sm-offset-2" >
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email or Phone</label>
                                                <input type="text" class="form-control" ng-model="username" style="border: 0;
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
    border: none !important">
                                            </div>
                                        </div>
                                        <!-- <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" ng-model="password" style="    border: 0;
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
    border: none !important">
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                        <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" ng-click="login()">Login</button>
                                    </div>
                                    </div>
                                    
                                
                            </form>
                        </div>
                    </div>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div> -->
                        </div>
                    </div>
                </div>
		</div>
<style>
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
.box-search{
        padding: 0 12px;
    }
    .box-search .form-group{
        margin: 0;
    }
    .btn-reservation{
        font-size: 16px;
        font-weight: 400;
        display: inline-block;
        /* position: absolute; */
         z-index: 1; 
        width: 48%;
        margin-right: 2%;
        border-radius: 4px;
        padding: 12px;
        text-align: center;
        background-color: #ff9800;
    }
    .btn-realtime{
        font-size: 16px;
        font-weight: 400;
       position: absolute;
        width: 46%;
        border-radius: 4px;
        padding: 12px;
        color: #fff;
        text-align: center;
        display: inline-block;
        background-color: #333;
        z-index: 1; 
    }
    /*.btn-reservation:hover{
        background-color: #FFC107;
    }*/
    .btn-real-res{
        position: absolute;
        margin-top: 50px;
        width: 100%;
        z-index: 20;
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
.a-link-item {
    width: 100%;
    padding-top: 20px;
    height: 240px;
    margin-top: 0px;
    margin-bottom: 20px;
    border-radius: 4px;
    box-shadow: 0px 2px 3px rgba(0,0,0,0.15);
    background: #f5f5f5;
}
.item-thumbnail2 {
    position: absolute;
    display: inline-block;
    float: left;
    border-radius: 13px;
    margin-top:50px;
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
    margin-left: 52%;
    width: 30%;
    color: #100f0f;
    /* margin-top: -35px; */
}
.car-type {
    /* margin-top: -9px; */
    position: relative;
    z-index: 1;
    color: #000;
    /* margin-left: 50%; */
    padding: 1px 3px;
    border-radius: 3px;
    display: inline-block;
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
    position: absolute;
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
    /* display: block; */
    font-family: 'Open Sans',sans-serif;
    font-weight: 100;
    color: #757575;
    font-size: 24px;
    /* font-weight: 600; */
    /* margin-top: 30px; */
    /* padding: 0 19px; */
    margin-bottom: 20px;
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
    position: absolute;
    background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #ffb300 100%);
    background-image: linear-gradient(-1deg, #e58c00 0%, #ffb300 100%);
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
     position: absolute;
     margin-top: 15px;
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
    border-top: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-left: 1px solid #ddd;
    /* border-radius: 5px 5px 0 0; */
    border-radius: 4px;
    display: none;
    margin-bottom: 12px;
    background: #fff;
}
@media screen and (max-width: 767px){


.a-link-item {
    padding-left: 0px;
    min-height: 340px;
}
#i-list {
    margin-left: 57% !important;
    margin-top: 25px !important;
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
    width: 64%;
    margin-left: -28px;
    margin-top: 135px;
    float: left;
}
#box-cost-view {
    margin-right: 20px !important;
    margin-top: 100px !important;
    padding: 0;
}
.a-link-item {
    padding: 8px;
    min-height: 260px;
}
.item-thumbnail2 {
    width: 130px;
    height: 100px;
    margin-left: 10px;
    /*margin-top: -8px;*/
}
}
@media only screen and (max-device-width: 568px) and (min-device-width: 320px) and (orientation: portrait){



.hotel_num {
    margin-top: -14px;
}


.product_r {
    padding-bottom: 0px;


}
#facilities {
    margin-top: 15px;
    margin-left: 50px;
    position: absolute;
}

.car-type{
    padding: 0
}
.type-t {
    position: absolute;
    margin-top: -15px;
    margin-left: 50px;
    padding: 0;
}
.box-info{
    max-height: 100px;
}
}
        /*.tm-yellow-gradient-bg{
            background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);
        }*/
</style>


