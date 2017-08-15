<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Booking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!-- <script>
		var base_url = <?php echo base_url(); ?> ;
	</script> -->
    <!-- Canonical SEO -->

    <?php echo link_tag('files/css/bootstrap3.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
    
    <?php echo link_tag('files/css/material-kit.min.css?v='.time().'>'); ?>	
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    <?php echo link_tag('files/css/normalize.css'); ?>
    <?php echo link_tag('files/css/load.css'); ?>
     

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

    <!--  Social tags      -->
    

</head>

<body class="presentation-page">
    <div id="loading" style="z-index: 9999;  position: fixed;  width: 100vw;   height: 100vh;   left: 0;    top: 0;   background: rgba(0, 0, 0, 0.59);    display: nones;">
        <div style="height: 115px;  border-radius: 4px;  background: #fff;  min-width: 15rem;   /* height: auto; */    left: 50vw;   top: 50vh;   transform: translate(-50%,-50%);   position: fixed;    z-index: 10000;">
            <div>
                <div style="font-weight: 500;  color: #000; padding: 35px; text-align: center;">
                    <div style="font-size: 15px">Loading</div>
                    <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i>
                </div>            
            </div>
        </div>
    </div>
    <div id="content">
        <nav class=" navbar" id="sectionsNav" >
            <div class="container" style="margin-bottom: 0 ">        
                <div class="navbar-header">
                    <div class="" style="    padding: 9px 10px;  margin-top: 8px;  margin-left: 15px;  margin-bottom: 8px;    font-size: 25px;   display: inline-block;">
                        <div class="box-login-non">
                            <i class="material-icons btn-login" style="    position: absolute;">account_circle  </i>
                            <span style="  margin-left: 30px;  font-size: 14px;" class="lng-login"></span>
                        </div>
                        <div class="box-login" style="width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">            
                        </div>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" style="background: rgba(255, 255, 255, 0) !important; color:#000 !important;;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                    </button>
                </div>
                <div class="navbar-collapse" style="margin-top: 10px;">            
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" id="btnuser">
                            <div class="user">
                                <div class="photo" id="photo_profile" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <div id="usernamess"></div>                             
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="" >
                                    <i class="material-icons">contacts</i><span class="lng-settings-account"></span>
                    
                                    </a>
                                </li>
                                
                                <li id="btn-logout-user">
                                    <a>
                                        <i class="material-icons">power_settings_new</i><span class="lng-logout"></span>
                    
                                    </a>
                                </li>
                        
                            </ul>
                        </li>
                        <li class="dropdown" id="btnlogin">
                            <div class="user">
                                <div class="photo" id="photo_non-login" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                        
                            
                        </li>       				
                        <!-- <li id="btnlogin">
                            <a href="<?php echo base_url(); ?>register">
                                <i class="material-icons">account_circle</i>
                                <span class="lng-login"></span><span> / </span><span class="lng-register"></span>                        
                            </a>
                        </li> -->
                        <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons">shopping_basket</i><span style="text-transform: initial;" class="lng-product textmenu"></span>
                                
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="<?php echo base_url(); ?>" >
                                        <i class="material-icons">directions_car</i><span class="lng-transports textmenu"></span>                    
                                    </a>
                                </li>                            
                                <!-- <li id="btn-logout-user">
                                    <a href="<?php echo base_url(); ?>tour">
                                        <i class="material-icons">style</i><span class="lng-tours textmenu"></span>                    
                                    </a>
                                </li>                         -->
                            </ul>
                        </li>
                        <li class="box-desboard">
                            <a href="<?php echo base_url(); ?>dashboard/view_user">
                                <i class="material-icons">dashboard</i><span style="text-transform: initial;" class="lng-dashboard textmenu"></span>                    
                            </a>
                        </li>
                        <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons">language</i><span style="text-transform: initial;" class="lng-language textmenu"></span>                                
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a  onclick="language('cn')">
                                        <img src="<?php echo base_url(); ?>/files/img/china.ico" style="width: 30px;margin-right: 15px;">简体中文 
                                </a>
                                </li>
                                <li>
                                    <a  onclick="language('en')">
                                <img src="<?php echo base_url(); ?>/files/img/usa.ico" style="width: 30px;margin-right: 15px;">"English 
                    
                                    </a>
                                </li>
                                <li>
                                    <a onclick="language('th')">
                                <img src="<?php echo base_url(); ?>/files/img/thai.ico" style="width: 30px;margin-right: 15px;">ภาษาไทย
                    
                                    </a>
                                </li>
                            </ul>
                        </li>
                            
                    </ul>
                </div>    
            </div>
        </nav>
        <div class="container-fluid">
       <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12 " style="padding: 0">
                    <!--      Wizard container        -->
                    <div class="wizard-container" style=" margin-top: 12px;">
                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form >
                                <!--You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                <div class="wizard-header">
                                    <h5 class="lng-booking-infomation"></h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab"></a><span class="lng-product"></span></li>
                                        <li><a href="#account" data-toggle="tab" ></a><span class="lng-contact-infomation"></span></li> <!-- <li><a href="#account" data-toggle="tab" ></a><span class="lng-contact-infomation"></span></li> -->
                                        <li><a href="#address" data-toggle="tab" ></a><span class="lng-summary"></span></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div id="images-icon"></div>
                                            </div>
                                            <div class="col-md-7 " id="box-detail-price" >        
                                                <div class="box-program">
                                                    <span id="placefrom" style="text-align: center;"></span>
                                                    <span> - </span>
                                                    <span id="placeto" style="text-align: center;"></span>
                                                </div>
                                                <div class="box-name">
                                                    <p>
                                                        <label style="text-align:left" ><span class="lng-product"></span></span><span>:</span></label>   &nbsp;&nbsp;
                                                        <span id="product" style="text-align: center;"></span>
                                                    </p>
                                                </div>                           
                                                <div class="province">
                                                    <p style="">
                                                        <label style="text-align:left" ><span class="lng-from"></span><span>:</span></label>
                                                            &nbsp;&nbsp;
                                                        <span id="province" style="color: #000;"></span>
                                                    </p>
                                                    <p style="">
                                                        <label style="text-align:left" ><span class="lng-to"></span><span>:</span></label>&nbsp;&nbsp;
                                                        <span id="province_to" style="    color: #000;"></span>
                                                    </p>
                                                </div>
                                                <p style="">
                                                    <label style="text-align:left" ><span class="lng-type"></span><span>:</span></label>&nbsp;&nbsp;
                                                    <span ng-if="flagcheck == 1" id="cars_persion" style="color: #000;"></span>
                                                </p>
                                                <p class="prices">
                                                    <label style="text-align:left" ><span class="lng-price"></span><span>:</span></label>&nbsp;&nbsp;
                                                    <span style="color: #fb833f;" id="price"></span>
                                                </p>
                                                <p class="sumprice">
                                                    <label style="text-align:left" ><span class="lng-total-prices "></span><span>:</span></label>                                                           
                                                    &nbsp; &nbsp;
                                                    <span id="numsumprice"></span>
                                                </p>
                                                <div class="box-list-cars" >
                                                    <span class="lng-you-choose"></span> 
                                                    <span style="color: red" class="ng-binding" >(<span id="selectcar"></span>)</span> <span class="lng-car"></span>
                                                    <span style="color:#000" class="ng-binding">1- <span id="checksum"></span><span class="lng-person"></span> </span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <table width="100%">
                                                                <tr>
                                                                    <td >
                                                                        <label style="text-align:left" id="datetext"></label>   
                                                                    </td>
                                                                    <td >
                                                                        <div class='input-group '  style="width: 100%">
                                                                            <input type='date' id="on_date" class="form-control asd" value="<?php date("Y-m-d");?>" min="<?php date("Y-m-d");?>" data-date-format="d-M-yyyy">
                                                                        </div>
                                                                        <style>
                                                                            input::-webkit-clear-button {
                                                                                display: none;
                                                                            }
                                                                        </style>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                                <div class="show-time">
                                                    <div class="form-group form-inline">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="">
                                                                    <label style="text-align:left" id="texttime"></label>   
                                                                    
                                                                </td>
                                                                <td>
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="49%" align="center">
                                                                                <select class="form-control form-inline time_h asd" style="width: 100%;padding: 0 30px;" id="time_h" name="time_h">
                                                                                    <option value="00">00</option>
                                                                                    <option value="01">01</option>
                                                                                    <option value="02">02</option>
                                                                                    <option value="03">03</option>
                                                                                    <option value="04">04</option>
                                                                                    <option value="05">05</option>
                                                                                    <option value="06">06</option>
                                                                                    <option value="07">07</option>
                                                                                    <option value="08">08</option>
                                                                                    <option value="09">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="23">23</option>

                                                                                </select>
                                                                            </td>
                                                                            <td width="2%" align="center">
                                                                                <span>:</span>
                                                                            </td>
                                                                            <td width="49%" align="center">
                                                                                <select class="form-control form-inline time_m asd" style="width: 100%;padding: 0 30px;" id="time_m" name="time_m" required>
                                                                                    <option value="00" selected="selected">00</option>
                                                                                    <option value="01">01</option>
                                                                                    <option value="02">02</option>
                                                                                    <option value="03">03</option>
                                                                                    <option value="04">04</option>
                                                                                    <option value="05">05</option>
                                                                                    <option value="06">06</option>
                                                                                    <option value="07">07</option>
                                                                                    <option value="08">08</option>
                                                                                    <option value="09">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="26">26</option>
                                                                                    <option value="27">27</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="29">29</option>
                                                                                    <option value="30">30</option>
                                                                                    <option value="31">31</option>
                                                                                    <option value="32">32</option>
                                                                                    <option value="33">33</option>
                                                                                    <option value="34">34</option>
                                                                                    <option value="35">35</option>
                                                                                    <option value="36">36</option>
                                                                                    <option value="37">37</option>
                                                                                    <option value="38">38</option>
                                                                                    <option value="39">39</option>
                                                                                    <option value="40">40</option>
                                                                                    <option value="41">41</option>
                                                                                    <option value="42">42</option>
                                                                                    <option value="43">43</option>
                                                                                    <option value="44">44</option>
                                                                                    <option value="45">45</option>
                                                                                    <option value="46">46</option>
                                                                                    <option value="47">47</option>
                                                                                    <option value="48">48</option>
                                                                                    <option value="49">49</option>
                                                                                    <option value="50">50</option>
                                                                                    <option value="51">51</option>
                                                                                    <option value="52">52</option>
                                                                                    <option value="53">53</option>
                                                                                    <option value="54">54</option>
                                                                                    <option value="55">55</option>
                                                                                    <option value="56">56</option>
                                                                                    <option value="57">57</option>
                                                                                    <option value="58">58</option>
                                                                                    <option value="59">59</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="row">
                                                            <div class="form-person form-group col-md-12" id="car-show">
                                                                <table width="100%">
                                                                    <tr>
                                                                        <td width="20%"  style="padding-right: 10px;">
                                                                            <label style="text-align:left" ><span class="lng-car"></span><span>:</span></label>
                                                                        </td>
                                                                        <td width="80%">
                                                                            <table width="100%">
                                                                                <tr >
                                                                                    <td align="center">
                                                                                    <select class="form-control form-inline asd" id="num_cars"  name="num_cars" style="width: 100%" required>
                                                                                                
                                                                                    <option value="1">1</option>            
                                                                                    <option value="2">2</option>            
                                                                                    <option value="3">3</option>            
                                                                                    <option value="4">4</option>            
                                                                                    <option value="5">5</option>            
                                                                                    <option value="6">6</option>            
                                                                                    </select>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                
                                                <div class="row">
                                                    <div class="form-person form-group fo col-md-12" style="">
                                                        <table width="100%">
                                                            <tr>
                                                                <td>
                                                                    <div style="margin-right: 10px;">
                                                                        <table width="100%">
                                                                            <tr>
                                                                                <td width="40%">
                                                                                    <label style="text-align:left" ><span class="lng-adult"></span><span>:</span></label>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control asd" id="num_adult" name="num_adult"  style="" required>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                        <option value="10">10</option>
                                                                                        <option value="11">11</option>
                                                                                        <option value="12">12</option>
                                                                                        <option value="13">13</option>
                                                                                        <option value="14">14</option>
                                                                                        <option value="15">15</option>
                                                                                        <option value="16">16</option>
                                                                                        <option value="17">17</option>
                                                                                        <option value="18">18</option>
                                                                                        <option value="19">19</option>
                                                                                        <option value="20">20</option>
                                                                                        <option value="21">21</option>
                                                                                        <option value="22">22</option>
                                                                                        <option value="23">23</option>
                                                                                        <option value="24">24</option>
                                                                                        <option value="25">25</option>
                                                                                        <option value="26">26</option>
                                                                                        <option value="27">27</option>
                                                                                        <option value="28">28</option>
                                                                                        <option value="29">29</option>
                                                                                        <option value="30">30</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="40%">
                                                                                <label style="text-align:left" ><span class="lng-child"></span><span>:</span></label>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control asd" id="num_child" name="num_child" style="" required>
                                                                                    <option value="0">0</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="form-person form-group col-md-12" id="visa-show">
                                                        <table width="100%">
                                                            <tr>
                                                                <td  style="padding-right: 10px;">
                                                                    <label style="text-align:left" ><span class="lng-visa"></span><span>:</span></label>
                                                                </td>
                                                                <td >
                                                                    <table width="100%">
                                                                        <tr >
                                                                            <td align="center">
                                                                            <select class="form-control form-inline asd" id="visa"  name="visa" style="width: 100%" >
                                                                                <option value="" ><font class="lng-none">None</font></option>            
                                                                                <option value="1"><font class="lng-yes">Yes</font></option>            
                                                                                <option value="0"><font class="lng-no">No</font></option> 
                                                                            </select>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="form-person form-group col-md-12" id="box-terminal" style="display: none;">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width=""  style="padding-right: 10px;">
                                                                    <label style="text-align:left" ><span class="lng-departure-terminal"></span><span>:</span></label>
                                                                </td>
                                                                <td width="">
                                                                    <table width="100%">
                                                                        <tr >
                                                                            <td align="center">
                                                                                <input type="text" class="form-control asd" id="terminal">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>    
                                    </div> <!-- end tab-pane-->
                                    <div class="tab-pane" id="account">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="row">
                                                    <div class="col-md-12" id="acceptancecheck">
                                                        <div class="checkbox" style="margin-bottom: 30px;">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes" id="acceptanceuser">
                                                                <span class="lng-get-detail"></span>
                                                            </label>
                                                        </div>
                                                    </div>    
                                                    <div class="col-md-6">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-inline required ">
                                                                <!-- <label style="text-align:left" for="language">Guest name of your country</label>       -->
                                                                <select class="form-control" name="guestcountry" id="guestcountry" class="" style=" border:  1px solid #d2d2d2; border-radius: 4px;">
                                                                    <option value="az_AZ" label="Guest name of your country" none=""></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="contact_info">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" placeholder="Lirst Name - Last name" id="name_lastname" name="name_lastname"  pattern="^[A-z ก-ฮ]+$" required>                                                               
                                                            </div>
                                                        </div>
                                                        <div class="contact_info">
                                                            <div class="col-sm-12">
                                                                <label class="form-control"  id="select-country"><span id="numbercountry"></span></label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="col-md-4" style="padding: 0">
                                                                    <label class="form-control"  id="phonecode" value="phonecode"> </label>
                                                                </div>
                                                                <div class="col-md-8" id="tphone">
                                                                    <input type="text" class="form-control" placeholder="Phone" id="phone"  aria-required="true" aria-invalid="true" required>                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="contact_info">
                                                                <div class="col-sm-12">
                                                                    <input type="email" class="form-control" placeholder="E-mail" id="email" aria-required="true" aria-invalid="true" required>                                                    
                                                                </div>
                                                            </div>
                                                            <div class="contact_info">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="Flight" id="flight" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-inline">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="Other" id="other" >
                                                                
                                                                </div>
                                                            </div>
                                                            
                                                
                                                    
                                            </div> 
                                            </div>
                                    
                                        </div>
                            
                                
                                
                                                    </div>
                                                </div>
                                        
                                            <div class="tab-pane" id="address">
                                                <div class="row">
                        <div class="col-md-8">                  
                            <div class="" id="view-product-all-item">
                                <div class="box-info-item">
                                <div>
                                    <table width="100%">
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;"> 
                                                <span class="lng-product-name"></span><span>:</span>

                                            </td>
                                            <td>
                                                <span>
                                                    <span  id="name_product"></span>
                                                    <span>(</span>
                                                    <span class="lng-transports" style="color: #fb833f;" ></span><span>)</span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                            <span class="lng-car-type"></span><span>:</span>
                                            </td>
                                            <td >
                                                <span style="color: #333;" id="cars_type"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                                <span class="lng-pick-up-from"></span><span>:</span>
                                            </td>
                                            <td>
                                                <span style="color: #333;" id="pickup_from"></span><span style="margin-left: 100px;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                                <span class="lng-pick-up-to"></span><span>:</span>
                                                
                                            </td>
                                            <td>
                                            <span style="color: #333;" id="pickup_to"></span><span style="margin-left: 100px;"></span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                                <span id="date-final"></span>
                                                
                                            </td>
                                            <td>
                                                <span style="color: #333;" class="" id="ondate_samary"></span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                            <span id="time-final"></span>
                                            </td>
                                            <td>
                                                <span style="color: #333;" class="" id="ontime_samary"></span>
                                            </td>
                                        </tr>
                                    </table>
                                    </div>
                                    <!-- <div >
                                        <div class="toppic">
                                        
                                            
                                        </div>

                                        <div class="toppic" >
                                            
                                            
                                            
                                        </div>
                                        <div class="toppic" >
                                            
                                            
                                        </div>
                                        <div class="toppic" >
                                        </div>
                                        
                                    
                                        
                                                        
                                        <div class="toppic">
                                        </div>
                                        <div class="toppic">
                                            
                                        
                                        </div> 
                                    
                                    </div> -->
                                    <div class="orderBoxdetail">
                                        <table width="100%">
                                            <tr>
                                            <td valign="top" width="100px" style="padding: 5px 0;">
                                                
                                                        <span class="lng-first-name"></span><span>:</span>
                                                    
                                                    
                                            </td>
                                            <td>
                                                <span id="summaryname"></span>
                                            </td> 
                                            </tr>
                                            <tr>
                                                <td valign="top" width="100px" style="padding: 5px 0;">
                                                    
                                                        <span class="lng-phone"></span><span>:</span>
                                                
                                                </td>
                                                <td>
                                                    <span id="summaryphone" ></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" width="100px" style="padding: 5px 0;">
                                                
                                                        <span class="lng-email"></span><span >:</span>                                            
                                                
                                                </td>
                                                <td>
                                                    <span  id="summaryemail"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" width="100px" style="padding: 5px 0;">
                                                    
                                                        <span class="lng-flight"></span><span >:</span>
                                                    
                                                </td>
                                                <td>
                                                    <span id="textflight"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" width="100px" style="padding: 5px 0;">
                                                    
                                                        <span class="lng-other"></span><span >:</span>                                          
                                                
                                                </td>
                                                <td>
                                                    <span id="summaryother"></span>
                                                </td>
                                            </tr>
                                        
                                        </table>
                                        <!-- <div class="col-lg-6" style="padding: 0">
                                            <div class="section06-detail-line02-firstname">             
                                                <div class="firstname ">
                                                <span class="lng-first-name"></span><span>:</span>
                                                    
                                                </div>
                                                
                                            </div>
                                        
                                            <div class="section06-line02-phone">
                                                        
                                            
                                            </div>                         
                                            
                                        </div>
                                        <div class="col-lg-6" style="padding: 0">
                                            
                                            <div class="section06-line02-email">     
                                                        
                                                
                                            </div>
                                        

                                            <div class="section06-line02-email">     
                                                <div class="email">
                                                
                                                    </div>         
                                                
                                            </div>
                                            <div class="section06-line02-email">     
                                                    
                                                
                                            </div>
                                            
                                        </div> -->
                                    </div>
                                </div>  
                            </div> 
                            
                            
                        </div>
                        <div class="col-md-4" id="detail-price">
                            <div class="box-list-summery">
                            <div >
                                        <!-- <div class="topic_ens">
                                            <span >Phuket Airport-Phuket Hotel All Area</span>
                                        </div> -->
                                        <div  >
                                            <div id="book-info">
                                            <span class="lng-car"></span><span>:</span>
                                            
                                            </div>
                                            <span style="color: #fb833f;" id="carsummary"></span><span></span>
                                            <span style="color: #fb833f;float:right;" id="costsummary"></span>
                                        </div>
                                    <div >
                                            <div id="book-info">
                                                <span class="lng-price"></span><span>/</span><span class="lng-car"></span><span>:</span>
                                                
                                            </div>
                                            
                                            <span style="color: #fb833f;float:right;" id="costproduct"></span>
                                        </div>
                                        
                                    
                                    <div >
                                            <div id="book-info">
                                                <span class="lng-adult"></span><span >:</span>
                                            
                                            </div>
                                            <span style="color: #fb833f;" id="adultsummary"></span>
                                            <span style="color: #fb833f;float:right;">-</span>
                                        </div>
                                        <div >
                                            <div id="book-info">
                                                <span class="lng-child"></span><span >:</span>
                                                
                                            </div>
                                                <span style="color: #fb833f;" id="childsummary"></span>

                                                
                                                <span style="color: #fb833f;float:right;">-</span>                                    
                                        </div>
                                        
                                    </div>
                                        <div class="summtotal">
                                        
                                        <span style="color: #000000"><span class="lng-sum-total"></span><span>:</span></span>
                                            
                                    
                                        <span style="color: #fb833f;float: right;" id="totalprice"></span> 
                                    </div> 
                                <div class="box-book-pay"> 
                                    <div class="btn-books" >
                                    <span class="lng-book"></span>
                                    
                                    </div>
                                
                                <p class="ng-binding"></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12" >
                            
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" value="check1" id="acceptance">
                                                        <span class="lng-acceptance-of-terms"></span>
                                                    </label>
                                                </div>
                            </div>
                    </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' id="next" style="padding: 12px 43px;" />
                                                <input type='button' class='btn btn-fill btn-warning btn-wd' id="addbook" value='Book' style="display: none;padding: 12px 42px; " />
                                            </div>

                                            <div class="pull-left">
                                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous'  value='Previous' id="previous" style="" />
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- wizard container -->
                        </div>
                    </div><!-- end row -->
            
            <!--   </div> -->
                </div>
            </div>
        </div>

        <div class="modal fade" id="capacityss" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>      
                    <div class="modal-body">                                    
                        <div id="getcapa"></div>
                        <div id="getcapa2"></div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="codecountry" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="max-height: 640px; overflow: hidden; overflow-y: scroll;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>    
                    <div class="modal-body" style="padding: 0">                                    
                        <div class="box-country">
                            <ul id="select-name"> </ul>
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

        </style>           
        <div class="modal fade" id="login">
            <div class="modal-dialog col-md-8">
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
                                                <input type="text" class="form-control" ng-model="username" style="">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" ng-model="password" style="    ">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" ng-click="login()">Login</button>
                    </div>
                </div>
            </div>
        </div>

    
        </div>
    </div>
</body>
<style>
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
   
    color: #FFF;
    box-shadow: none;
}
.card {
    border-radius: 0 !important;
    
}
.wizard-card{
    margin-bottom: 0;
   
}
#numsumprice {
    color: #fb833f;
    font-weight: 600;
}
.sumprice {
    position: relative !important;
    position: relative;
    color: #333;
    font-weight: 600;
    text-align: center;
    font-size: 18px;
    /* border: 1px dashed #45c3da; */
    display: inline-block;
    padding: 12px 0;
    border-radius: 3px;
}
.box-list-cars {
    display: block;
    padding-bottom: 23px;
    /* background: #fff; */
    /* top: 0; */
    /* right: 0; */
    /* bottom: 0; */
    /* left: 0; */
    text-align: center;
    color: #000;
    font-size: 16px;
}
#title-around {
    display: inline-block;
}
/*#num2 {
    border: 1px solid #9E9E9E;
    padding: 0 5px !important;
}*/
#title-car {
    margin-left: 6%;
    display: inline-block;
}
#cars {
    float: right;
    background: #fff;
    border: 1px solid #9E9E9E !important;
    border-radius: 3px;
    padding: 7px 9px;
    font-weight: 500;
}
 .form-group {
    padding-bottom: 0;
    margin: 0;
 }
#calen{
    position: absolute;
    color: #9E9E9E;
    right: 0;
    margin-top: -30px;
    margin-right: 20px;
                                   
}
.wizard-card{
    box-shadow: none;
}
.box-program{
    text-align: center;
    background: #ff9800;
    padding: 12px 2px;
    font-weight: 400;
    border-radius: 4px;
    margin-bottom: 20px;
}
 </style>
        

<style>
.moving-tab:after{
    /*border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    left: 50px;
    top: -10px;*/
}
.nav>li>a{
    padding: 0px;
}
.toppic p {
    display: inline-block;
}
.toppic p {
    /*font-weight: 600;*/
    color: #9E9E9E;
    width: 120px;
    display: inline-block;
}
.toppic span {
    color: #000;
    font-size: 13px;
    /*font-weight: 600;*/
}
.firstname {
    display: inline-block;
    color: #9E9E9E;
    /*font-weight: 600;*/
}
.orderBoxdetail {
    /* border-top: 1px #ddd solid; */
    width: 100%;
    padding: 20px 0;
    border-radius: 4px;
    position: relative;
    /*margin-bottom: 30px;*/
}
.phone {
    display: inline-block;
    color: #9E9E9E;
    /*font-weight: 600;*/
}
.email {
    display: inline-block;
    color: #9E9E9E;
    /*font-weight: 600;*/
}
.lastname {
    display: inline-block;
    color: #9E9E9E;
    /*font-weight: 600;*/
}
.box-list-summery {
    /*border: solid 1px #ccc; */
    /* top: 74px; */
    padding: 2px 10px;
    width: 100%;
    position: relative;
    margin-bottom: 50px;
}
.topic_ens {
    color: #616161;
    font-size: 16px;
    letter-spacing: 1px;
    margin-bottom: 30px;
}
.adult {
    /*margin-left: 35%;*/
    color: #999;
    display: block;
}
#book-info {
    width: 75px;
    margin-right: 10px;
    display: inline-block;
}
.child {
    display: block;
    color: #999;
    /*margin-left: 35%;*/
}
.pricec {
    color: #999;
    margin-top: 20px;
    /*margin-left: 35%;*/
    margin-bottom: 20px;
}
.summtotal {
    /*margin-left: 35%;*/
    margin-top: 100px;
    margin-bottom: 20px;
    font-size: 18px;
    color: #999;
}
.box-book-pay {
    text-align: center;
    position: relative;
    width: 100%;
    color: #999;
    display: none;
}
.box-info-item{
    padding: 2px 10px;
    /*border: solid 1px #ccc; */
    margin-bottom: 20px;

}
.asd{
    border: 0;
    background-image: linear-gradient(#9c27b0,#9c27b0),linear-gradient(#D2D2D2,#D2D2D2);
    background-size: 0 2px,100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom,center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;
    width: 100%;
    padding: 0 30px;
}
@media screen and (max-width: 767px){
    #bodyClick {
    right: 229px !important;
}
}
</style>
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
      <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js?v=<?=time()?>"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> 
   
    <!-- <script src="<?php echo base_url(); ?>files/js/modernizr-2.6.2.min.js"></script> -->
  
    
    <style>
       
.index-page .page-header, .presentation-page .page-header {
    height:30vh;
    overflow: hidden;
}
.main-raised {
    margin: 0px 0 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    /* margin-bottom: 50px; */
}
#imgcountry{
    width: 25px;
    margin-right: 15px;
}
.modal .modal-dialog {
    margin-top: 10px !important;
}
#box-image{
    width: 100%;
    border-radius: 4px;
}
#images-icon{
    width: 200px;
    margin-bottom: 20px;
    
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
                              padding: 5px 8px;
                       /* margin-top: 20px;*/
                    }
                    #calen{

                        z-index: 5;
                        margin-top: 1px;
                        margin-right: 15px;
                        position: absolute;
                        font-size: 20px;
                        color: #9E9E9E;
                    }
                    #usernamess{
                        display: inline-block;
                            text-transform: initial;
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
                    #images-icon{
                        width: 100%;
                        margin-bottom: 20px;
                        /*margin: auto;*/
                    }
                    #media-email{
                        margin-top: 20px;
                    }
                    #box-detail-price{
                        margin: 0;
                    }

                }

</style>
<style >
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
#sectionsNav{
        /* position: absolute; */
    /* background: rgba(255, 255, 255, 0) !important; */
    /* margin: auto; */
    z-index: 20;
    /* width: 100%; */
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    margin-bottom: 0;
    /* background: #07c284; */
    border-radius: 0 !important;
}
.loading-in{
    height: 115px;
    border-radius: 4px;
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
#usernamess{
    display: inline-block;
    text-transform: initial;
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

@media screen and (max-width: 767px){
    .user {
        
        display:block;
    }
}
                    </style>

</html>





























