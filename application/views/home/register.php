<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>App booking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Canonical SEO -->

    <?php echo link_tag('files/css/bootstrapre.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
    
    <?php echo link_tag('files/css/materialre-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/materialre-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

    <!--  Social tags      -->
    

</head>
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/api:client.js"></script>
<body style="background-color: #fff ">

    <style>
        .page-header .container {
    padding-top:0;
    color: #000;
    background-color: #fff;
    border-bottom: 1px solid #C8E1F5;
}
.navbar.navbar-transparent{
    background-color: #fff;
    color: #000;
    border-bottom: 1px solid #C8E1F5;
}
.navbar {
    box-shadow: none;
}
.loading-in{
    height: 115px;
    /* border-radius: 4px; */
    background: #fff;
    min-width: 15rem;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 10;
}
.loading-ld{
    font-weight: 500;
    color: #000;
    padding: 35px;
    text-align: center;
}
#loading{
    z-index: 9999;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
    display: nones;
}

    </style>

<input type="hidden" id="to" value="<?=$to;?>"/>
    <div id="loading" style="display: none;">
            <div class="loading-in">               
                <div class="loading-ld">
                    <div style="font-size: 15px">Loading</div>
                        <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i></div>
                
                    </div>        
                </div>
 <section style="position: relative; min-height: 100vh;">    
    <div class="header " data-parallax="true" >
        <nav class="navbar  navbar-color-on-scroll" id="sectionsNav">
            <div class="container" >
                <div class="navbar-header">
                   <!-- <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <i class="material-icons" id="iconhome" style="    position: absolute;
    font-size: 30px;
    right: 20px;
    margin-top: 15px;">home</i> 
                </div>            
            </div>
        </nav>
        <!-- <div class="box-menu-select">
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
                                <span class="lng-now-use" style="font-size: 10px;font-weight: 500;"></span>
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
                                <span class="lng-advance-use" style="font-size: 10px;font-weight: 500;"></span>
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
    </div> -->
   
    <div class="container">
        <div class="col-md-6" id="box-left" >
            <div class="box-signup" style="display: none;">
                <div id="section_title" class="section_title">
                    <h3 id="title-regis" class="lng-sign-create"></h3>                
                    <h4 style="font-size: 14px;" class="lng-what-is-your-email"></h4>
                </div>
                <div class="row">
                    <div class="col-sm-8 " style="padding:0;    margin-top: 20px;">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <button class="btn btn-warning btn-sm" id="checkmail" style="position: absolute; right: 0; z-index: 100;  margin-top: 2px; padding: 5px 10px;">
                                    <span class="lng-check"></span>
                                </button>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"> 
                                        <span class="lng-email"></span> 
                               
                                    </label>
                                    <input name="firstname" required="True" type="email" class="form-control" id="username-signup">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" style="padding-top: 0">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"><span class="lng-password"></span>
                                        <!-- <small>(required)</small> -->
                                    </label>
                                    <input name="lastname" type="password" class="form-control" id="password-signup">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div id="messagecheck" style="text-align: center;"></div>

                            </div>
                            <div class="col-md-12">
                                <div class="btn-signup" style="" id="registered" ><span class="lng-sign-in"></span></div>
                            </div>
                            <div class="col2">
                                <div class="col-sign">
                                    <div class="text-sign" >
                                        <span class="lng-have-member"></span>
                                        <a class="mtm sign-up" id="sign-in" style="cursor: pointer;">
                                            <span class="lng-registered-customers"></span>
                                        </a>
                                    </div>
                                    <div id="status"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-signin">
                    <div class="card-header text-center" data-background-color="green">
                        <h4 class="card-title" style="margin-bottom: 20px;" >
                            <span class="lng-login"></span>
                        </h4>                                       
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-8 " style="padding: 0" >
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label"><span class="lng-email"> </span>
                                                
                                            </label>
                                            <input  required="True" type="email"  class="form-control" id="username" size="80">
                                        </div>
                                    </div>                                       
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label"><span class="lng-password"></span></label>
                                            <input type="password" class="form-control" id="password" >
                                        </div>
                                    </div>
                                    <div id="message" style="text-align: center;"></div>
                                </div>
                                <div class="col-md-12">
                                    <div  type="submit" class=" btn-login " id="login" style="">
                                        <span class="lng-login"> </span>
                                    </div>
                                </div>
                                        
                                <div class="col2">
                                    <div class="text-sign" >
                                        <span class="lng-not-member"></span>
                                        <a class="sign-up" id="sign-up" style="cursor: pointer;" >
                                            <span class="lng-sign-up-now"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-regispro" style="display: none;">
                    <h3 id="title-info" class="lng-why-become"></h3>
                    <div class="special">
                        <div class="box-icon">
                            <i class="fa fa-tags" style="font-size: 30px;"></i>
                        </div>
                        <h4 class="lng-special-product"></h4>
                        <p>You'll get lower price for every Product booking, as a member.</p>
                    </div>
                    <div class="exclusive">
                        <div class="box-icon">
                            <i class="fa fa-user-md" aria-hidden="true" style="font-size: 30px;"></i>
                        </div>               
                        <h4 class="lng-exclusive-discount"></h4>
                        <p>You'll get the latest promo info and special member discount.</p>
                    </div>
                    <div class="fast">
                        <div class="box-icon">
                            <i class="fa fa-gavel" aria-hidden="true" id="special" style="font-size: 30px;"></i>
                        </div>              
                        <h4 class="lng-fast-booking"></h4>
                        <p>As a member using Go HolidayQuick, your booking is our priority.</p>
                    </div>
                </div>
                
                <div class="log-social box-signin">
                    <div class="unit social-column">
                        <div class="social-inner">
                            <div class="fb-wrapper">
                                <a id="facebook-login-button"  class="fb-auth inner facebook-login-auth" scope="public_profile,email" onclick="login();" return false>
                                    <i class=" fa fa-facebook-official " style="font-size: 36px; position: absolute; left: 16px;"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                           
                            <div class="google-wrapper">
								  <div id="gSignInWrapper">
								    <!--<span class="label">Sign in with:</span>-->
								    <div id="customBtn" class="google-auth inner google-login-auth">
								      <i class="fa fa-google-plus-square" style="font-size: 36px; position: absolute; left: 16px;"></i>
								      <span >Google</span>
								    </div>
								  </div>
                               <!-- <div>
                                    <a id="google-login-button"  class="google-auth inner google-login-auth" >
                                        <i class="fa fa-google-plus-square" style="font-size: 36px; position: absolute; left: 16px;"></i>
                                        <span>Google</span>
                                    </a>
                                </div>-->
                            </div>
                            <div style="margin-top: 30px;">
                                <div class=" btn-foget-pass " id="foget-pass" style="">
                                    <span class="lng-foget-pass">  ลืมรหัสผ่าน</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="foget-password">
            <div class="box-in-foget" >
                <div style="padding: 12px;">
                   <div class="col-md-12" id="forget"> 
                       <h4 style="    text-align: center;" class="lng-foget-pass">ลืมรหัสผ่าน</h4>
                        <div style="margin-top: 50px; font-size: 15px; color: #333333;margin-bottom: 10px;">
                            <span class="lng-please-input-email">Please input your email </span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>   
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"><span class="lng-email"></span></label>
                                <input type="email" class="form-control" id="email-forget" size="80">
                                <span class="material-input"></span>
                                
                                
                            </div>  
                            <div  class="btn-send lng-send" style="padding: 12px 20px;" ></div>   
                        </div>
                    </div>
                    <div id="check-email" style="text-align:center;display:none;margin-top: 50px; font-size: 15px; color: #333333;  margin-bottom: 10px;">
                        <span>Please check your email </span>
                    </div>
                    
                </div>
                <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;"> 
                <div  class="btn-close lng-close" ></div>
                    <div class="btn-login-forget lng-login" ></div>
                </div>
            </div>
        </div>
</section>

    
<style>
.btn-send{
    padding: 12px 20px;
    background: #16B3B1;
    color: #fff;
    width: 140px;
    position: absolute;
    text-align: center;
    right: 0px;
    margin-top: 15px;   
}
.btn-login-forget{
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
    background: #16B3B1;
    display: none;
}
    #sectionsNav {
    position: absolute;
    background: rgba(255, 255, 255, 0) !important;
    margin: auto;
    z-index: 20;
    width: 100%;
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    /* background: #07c284; */
}
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
        background: #fff;
        min-width: 100%;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
.btn-close {
    /*width: 200px; */
    background: #4BB1C1;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
}

.btn-login{
    /* color: #3b5998; */
    font-weight: 700;
    display: block;
    /* line-height: 36px; */
    padding: 10px;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    /* border-radius: 4px; */
    text-align: center;
    color: #ffffff;
    /* border: 1px solid #16B3B1; */
    background-color: #16B3B1;


}
#checkmail{
    background-color: #FF5722;
}
/* .btn-login:hover{
     border: 1px solid #3b5998;
     background-color: #3b5998;
     color: #ffffff;
} */
.btn-signup{
    color: #3b5998;
    border: 1px solid #16B3B1;
    background-color: #16B3B1;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    /* border-radius: 4px; */
    text-align: center;
     color: #ffffff;

}
.btn-signup:hover{
     border: 1px solid #3b5998;
     background-color: #3b5998;
     color: #ffffff;
}
.col-sign{
    /*margin-top: 20px;*/
    font-size: 13px;

}
.btn-foget-pass {
    color: #ffffff;
    background: #333333;
    text-align: center;
    padding: 10px;
}

.social-column .fb-wrapper .inner {
    color: #3b5998;
    border: 1px solid #3b5998;
    font-weight: 700;
    display: block;
    line-height: 36px;
/*    padding: 0 10px 0 0;*/
    padding: 0 0px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    /* border-radius: 4px; */
}
.social-column .google-wrapper .inner {
    color: #ea4335;
    border: 1px solid #ea4335;
    font-weight: 700;
    display: block;
    line-height: 36px;
/*    padding: 0 10px 0 0;*/
    padding: 0 0px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 200px;
    /* border-radius: 4px; */
}
.social-column .fb-wrapper {
    text-align: center;
}
 .notification {
    position: absolute;
    top: 2px;
    border: 1px solid #FFF;
        left: 22px;
    font-size: 9px;
    background: #f44336;
    color: #FFFFFF;
    min-width: 20px;
    padding: 0px 5px;
    height: 20px;
    border-radius: 10px;
    text-align: center;
    line-height: 19px;
    vertical-align: middle;
    display: block;
}
.social-column .fa-google-plus-square, .social-column .fa-facebook-official {
    display: inline-block;
    vertical-align: text-top;
    padding: 0;
    /*background-image: url(/images/2014/sprites/icons-header-336d99fe71.png);*/
    width: 37px;
    height: 38px;
    padding-left: 0;
    float: left;
}
.social-column .google-wrapper {
    text-align: center;
    margin-top: 20px;
/*    display: none;*/
}
.social-column .social-inner {
    display: table-cell;
    vertical-align: middle;
}
.social-column{
    padding: 100px 120px;
}
.dropdown-menu.dropdown-with-icons li>a:hover {
    /*padding: 12px 20px 12px 12px;*/
    background: #F44336 !important;
}
.dropdown-menu:after, .dropdown-menu-container:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid rgba(0,0,0,0);
    border-right: 11px solid rgba(0,0,0,0);
    content: "";
    display: inline-block;
    position: absolute;
    right: 30px;
    top: -10px;
}
.index-page .page-header, .presentation-page .page-header {
    height: 12vh !important;
    overflow: hidden;
}
.box-regispro {
    /*letter-spacing: 1px;*/
    color: #555555;
    padding: 2px 10px;
}
#special {
    display: inline-block;
    position: absolute;
}
#exclusive {
    display: inline-block;
    position: absolute;
}
#fast {
    display: inline-block;
    position: absolute;
}
.special {
    font-size: 14px;
    /*margin-left: 5%;*/
    margin-bottom: 20px;
}
.exclusive {
    font-size: 14px;
    /*margin-left: 5%;*/
    margin-bottom: 20px;
}
.fast {
    font-size: 14px;
    /*margin-left: 5%;*/
}
.section_title{
     /*font-size: 20px;*/

        position: relative;
    /*font-size: 170%;*/
    font-weight: normal;
    /*margin-left: 0px;*/
    
}
.special p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;


}
.special h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
.exclusive p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;

}
.exclusive h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
.fast p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;
}
.fast h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
#box-left{
    border-right: 1px solid #ccc;
    margin-top:75px;
}
.box-icon{
    width: 50px;
    border-radius: 50%;
    padding: 10px;
    height: 50px;
    border: 1px solid #555;
    position: absolute;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    
   
    color: #FFF;
    box-shadow: none;
}
.wizard-card{
    margin-bottom: 0;
   
}

.wizard-card{
    box-shadow: none;
}
#title-regis{
    color: #E47911;
     font-size: 20px;

    /*margin-top: 50px;*/

}
#title-info{
     font-size: 20px;

     margin-top: 20px;
}
.loginReg__or{
    right: 0;
    margin: 10px 0;
    position: absolute;
    font-size: 10px;
    width: 2em;
    height: 2em;
    text-align: center;
    /* line-height: 2.2; */
    background: #dcdcdc;
    border-radius: 50%;
    color: #666;
    margin-right: -10px;
    margin-top: -172px;
}
 @media screen and (max-width: 767px){
    #title-regis{
        color: #E47911;
        margin-top: 0;

} 
#title-info{
        margin-top: 30px;
    font-size: 18px;
} 
#box-left{
    border-right: none;
} 


                

}
 </style>
<!-- <a class="made-with-mk">
            <div class="brand"><i class="material-icons">home</i></div>
            <div class="made-with">App <strong>booking</strong></div>
        </a> -->
        <style>
           
        </style>
        <!--   Big container   -->



    <div class="modal fade" id="capacityss" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                            </div>
                            
                            <div class="modal-body">                                    
                                <div id="getcapa"></div>
                                <div id="getcapa2"></div>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="modal fade" id="codecountry" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style=" max-height: 700px;   overflow: hidden; overflow-y: scroll;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                            </div>
                            
                            <div class="modal-body" style="padding: 0">                                    
                                <div class="box-country">
                                    <ul id="select-name">                                                                     
                                    </ul>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #getcapa{
                        background-color: #ddd;
                        height: 35px;
                    }
                    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                        border-top: none;
                    }
                    #table1{
                        margin-top: 10px !important;
                    }
                    .footer a{
                        color: #000;
                        font-weight:normal;
                    }

                </style>
             
   

    <!--     *********    END PRICING 5      *********      -->
</body>
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
     <script src="<?php echo base_url(); ?>files/js/hammer.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>files/js/hammer.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>files/js/hammer-time.min.js" type="text/javascript"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
      



    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
  <script src="<?php echo base_url(); ?>files/js/moment.min.js"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="<?php echo base_url(); ?>files/js/nouislider.min.js" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-tagsinput.js"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="<?php echo base_url(); ?>files/js/jasny-bootstrap.min.js"></script>
     <!--  Plugin for the Wizard -->
     <script src="<?php echo base_url(); ?>files/assets/js/jquery.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="<?php echo base_url(); ?>files/assets/js/jquery.validate.min.js"></script>
    <!--    Plugin For Google Maps   -->
    <!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->

    <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
    <script src="<?php echo base_url(); ?>files/js/atv-img-animation.js" type="text/javascript"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="<?php echo base_url(); ?>files/js/material-kit.min.js?v=1.1.1" type="text/javascript"></script>

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery.sharrre.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js"></script>  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> 
 
<style>
        .index-page .header-filter:after, .presentation-page .header-filter:after {
    background: rgba(132,13,121,.88);
    background: linear-gradient(45deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    background: -moz-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    /* background: -webkit-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%); */
    /* background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgb(16, 15, 204)); */
    background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
}
.index-page .page-header, .presentation-page .page-header {
    height: 50vh;
    overflow: hidden;
}
.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    margin-bottom: 50px;
}
#imgcountry{
    width: 25px;
    margin-right: 15px;
}
.modal .modal-dialog {
    margin-top: 20px !important;
}
.box-country ul{
                        padding-left: 0;

                    }
                    .box-country ul li{
                            list-style: none;
    padding: 8px 20px;
                    }
                    #span-phonecode{
                        padding-right: 10px;
                    }
                    .box-country ul li:hover{
                        background-color: #ffd000;
                        color: #000;
                    }
                    #textcountry{
                        text-align: center;
                    }
                    #code{
                        text-align: center;
                    }
                    label.form-control
                    {
                        margin-top: 20px;
                    }
                    #calen{
                       margin-top: -15px;
                        margin-right: 2px;
                        position: absolute;
                        font-size: 20px;
                        color: #9E9E9E; 
                    }
.btn-login{
   margin-left: 40px;
    margin-top: 30px;
}
.btn-signup{
        margin-left: 40px;
    margin-top: 30px;
}
.text-sign{
    margin-left: 55px;
}

                     @media screen and (max-width: 767px){
                    


                #textcountry{
                        text-align: left;
                    }
                     #code{
                        text-align: left;
                    }
                    #tphone{
                        padding: 0;
                    }
                    .btn-login{
    margin-left:0;
    margin-top: 30px;
}

.text-sign{
        margin-left: 0;
    text-align: center;
}
.loginReg__or{
    display: none !important;
}
.social-column .social-inner{
    display: block;
}
.social-column {
    padding: 30px 0;
}
.btn-signup {
    margin-left: 0;
    margin-top: 30px;
}

                }

</style>
<style>
    .navbar-right{
    /* background: #000; */
}
.textmenu{
    margin-left: 10px;
}
.imgmem-log{
    
}
.imgmemu{
    width: 35px;  
    height: 35px; 
    border-radius: 50px;  
}
.user {
    background: #07c284;
    text-align: center;
    padding-bottom: 20px;
    /* margin: 25px auto 0; */
    position: relative;
    height: 160px;
    display:none;
}
.user .photo {
    width: 100%;
    /* height: 110px; */
    overflow: hidden;
    border-radius: 4px;
    /* margin: 0 auto; */
    /* margin-top: 50px; */
    /* box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); */
}
.user .photo img {
    width: 50px;
    height: 50px;
    margin-top: 30px;
    border-radius: 50px;                       
}

#usernamess{
    display: inline-block;
    text-transform: initial;
}


.box-menu-select {
position: fixed;
width: 100%;
bottom: 0;
z-index: 1;
background: #fff;
box-shadow: 0px 10px 5px #888, 0px 0px 5px rgba(136, 136, 136, 0.52);

/* height: 90px; */
}
.btn-reservation {
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

.btn-realtime {
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

.btn-home {
padding: 8px 0;
font-size: 16px;
/* font-weight: 400; */
/* position: absolute; */
width: 100%;
/* border-radius: 4px; */
/* padding: 12px; */
color: #16B3B1;
text-align: center;
/* display: inline-block; */
/* background-color: #2196f3; */
z-index: 1;
}

.btn-management {
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

.btn-management a {
color: #999999;
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


/*.btn-reservation:hover{
   background-color: #FFC107;
}*/

.btn-real-res {
position: absolute;
margin-top: 50px;
width: 100%;
z-index: 5;
text-align: center;
}

@media screen and (max-width: 767px){
    .user {
        
        display:block;
    }
}
                    </style>

<script>
$(document).ready(function(){
    var username, password , username_signup ,password_signup,text_check,forget = '';
    var base_url = "https://www.welovetaxi.com/app/booking/"
$.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>getuserlog_control/process',
       // data: {'from': getParameterByName('from'),'to': getParameterByName('to')},
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
        //   console.log(data)
          
        
           
          
        }
    });
    $('#username').on('change', function() {
        username = this.value ;
        console.log(username)
        
    //alert( this.value );
    })
    $('#password').on('change', function() {
        password = this.value ;
        console.log(password)

        
    //alert( this.value );
    })
    $('.btn-foget-pass').on('click', function() {
        $('#foget-password').fadeIn(500)
    });
    $('.btn-close').on('click', function() {
        $('#foget-password').fadeOut(500)
    });
    $('.btn-realtime').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=picuphere";
        }, 3000);


    })
    $('.btn-reservation').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=search";
        }, 3000);
    })
    $('.btn-car-service').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=service";
        }, 3000);
    })
    $('.btn-management').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "dashboard/view_user";
        }, 3000);


    })
    $('.btn-send').on('click', function() {
       forget = $('#email-forget').val();
        console.log(forget)
        
        if(forget != ''){
            $.ajax({
            type: 'POST',
            url: base_url+'fogetpassword.php',
            data: { 'mail': forget },
            //contentType: "application/json",
            //dataType: 'json',
            success: function(data) {
            console.log(data);
            //console.log(s_email);
            $('#forget').hide();
            $('.btn-close').hide();
            $('.btn-login-forget').show();
            $('#check-email').show();

           

            }
        });
        }
        
        
    });
    $('.btn-login-forget').on('click', function() {
       // $('#foget-password').fadeOut(500)
        window.location.reload();
    });
    
    $('#login').on('click', function() {
    	var type_login = $('#to').val();
//    	alert(type_login);
       console.log(password+username);
//    alert('<?php echo base_url(); ?>login_control/process');
        $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>login_control/process',
        data: {'username': username,'password':password},
        //contentType: "application/json",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          if(res.status == 0)
              {
                 console.log('login status 0');
                 $.cookie("login",res.username);
                 console.log('<?php echo base_url(); ?>');
                 if(type_login=='dasboard'){
				 	window.location.href = "<?php echo base_url(); ?>dashboard/view_user";
				 }else{
				 	window.location.href = "<?php echo base_url(); ?>home";
				 }
              }
              else if(res.status==1)
              {
                console.log('status==1')
               $('#message').html('Username is Invalid').css('color', 'red');
              }
              else if(res.status==2)
              {
                  console.log('status==2')
                $('#message').html('Password is Invalid').css('color', 'red');
              }
          
        
           
          
        }
    });
       
    //alert( this.value );
    })
    $('#iconhome').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            $('.btn-management').css('color', '#07c284');
            $('.btn-home').css('color', '#999999');
            $('.btn-reservation').css('color', '#999999');
            $('.btn-realtime').css('color', '#999999');
           // $('#loading').css('display', 'none');
            window.location.href = base_url+"";
        }, 2000);


    });
    $('.iconhome').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            $('.btn-management').css('color', '#07c284');
            $('.btn-home').css('color', '#999999');
            $('.btn-reservation').css('color', '#999999');
            $('.btn-realtime').css('color', '#999999');
            $('#loading').css('display', 'none');
            window.location.href = base_url+"";
        }, 2000);


    });
    $('#username-signup').on('change', function() {
        username_signup = this.value ;
        console.log(username_signup)
        
    //alert( this.value );
    })
    $('#password-signup').on('change', function() {
        password_signup = this.value ;
        console.log(password_signup)

        
    //alert( this.value );
    })
    $('#checkmail').on('click', function() {
        console.log('in case')
        $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>login_control/checkmail',
        data: {'username': username_signup,'password':password_signup},
        //contentType: "application/json",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          if(res.status == 0)
              { //have mail
                text_check = 0; 
               $('#messagecheck').html('Have this mail in system').css('color', 'red');
                
               
              }
              else if(res.status==1)
              {
                text_check = 1; 
                $('#messagecheck').html('This mail is available.').css('color', '#2c9930');
                console.log('status==1')
              }
              
              
          
        
           
          
        }
    });
    });
     $('#registered').on('click', function() {
        console.log('in case signup')
        console.log(text_check)
        if (text_check == 1) {
            $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>login_control/signup',
            data: {'username': username_signup,'password':password_signup},
            //contentType: "application/json",
            dataType: 'json',
            success: function(res) { 
                console.log(res)
                if(res.status == 0){
                    $.cookie("login",res.username);
                    window.location.href = "<?php echo base_url(); ?>home";
                    
                   
                }
                else{
                    console.log("incomplete insert")
                }
                
                  
                  
              
            
               
              
            }
        });
    }
    else{
        console.log("incomplete")
    }
        
    });
    


});//END
window.fbAsyncInit = function() {
    FB.init({
      appId      : '1865903040340223',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();   
  };
   

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    function login(){
        
   FB.login(function (response) { statusChangeCallback(response); }, { scope: 'email,public_profile', return_scopes: true });
// FB.getLoginStatus(function(response) 
//     {statusChangeCallback(response)},{ scope: 'email,user_likes' 
// });
// function checkLoginState() {
//   FB.getLoginStatus(function(response) {
//     statusChangeCallback(response);
//   });
// }
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      checkLoginState();
    } else {
      // The person is not logged into your app or we are unable to tell.
    //   document.getElementById('status').innerHTML = 'Please log ' +
    //     'into this app.';
    }
  }
  function checkLoginState() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email', function(response) {
        console.log(response)
        // $.cookie("idface", response.id);
        $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>login_control/processsocial',
        data: {'username': response.email,'name':response.name,'password':response.id,'type':'facebook'},
        //contentType: "application/json; application/x-www-form-urlencoded; charset=UTF-8",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          console.log(res.status)
          if(res.status == 0)
              {
                 $.cookie("login",res.username);
                   window.location.href = "<?php echo base_url(); ?>home";         
              }
              else 
              {    
               $('#message').html('Login not complete').css('color', 'red');
              }
        }
    });
       
      //console.log('Successful login for: ' + response.name);
      
    });
  }
    }
  
    $('#sign-up').click(function() {
       $('.box-signup').css('display','block');
       $('.box-regispro').css('display','block');

       $('.box-signin').css('display','none');
       $('.loginReg__or').css('display','none');

    })
    $('#sign-in').click(function() {
       $('.box-signup').css('display','none');
       $('.box-regispro').css('display','none');
       $('.loginReg__or').css('display','block');

       $('.box-signin').css('display','block');
    })
</script>


<script>
/**
* Login with Google Account *
*/
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '1057940740113-3suf1lugga5kceuqg3jed67edke0l1dg.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    // console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
        /*  document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();*/
               var profile = googleUser.getBasicProfile();
				 /* console.log('ID: ' + profile.getId());
				  console.log('Name: ' + profile.getName());
				  console.log('Image URL: ' + profile.getImageUrl());
				  console.log('Email: ' + profile.getEmail()); */
				  console.log(profile); 
				  var url = '<?php echo base_url(); ?>login_control/processsocial';
//				  alert(url);
				  
				  $.post( url, {'username': profile.getEmail(),'name':profile.getName(),'password':profile.getId(),'type':'google','img':profile.getImageUrl() } ,function( data ) {
//					 	console.log(data);
					 	var obj_c = JSON.parse(data);
					 	console.log(obj_c.status);
					 	console.log(obj_c);
					 	 if(obj_c.status == 0)
				              {
				                 $.cookie("login",obj_c.username);
//				                 $.cookie("logby",'google');
				                   window.location.href = "<?php echo base_url(); ?>home";         
				              }
				              else 
				              {    
				               $('#message').html('Login not complete').css('color', 'red');
				              }
					});
				 
				  
       
       
       
        }, function(error) {
          		   console.log(JSON.stringify(error, undefined, 2));
        });
  }
  </script>
<script>startApp();</script>


</html>





























