
                            <div style="padding: 15px 37px; font-weight: 600; font-size: 16px; text-align: center;"> 
                                <div class="lng-booking-infomation" style="display:inline-block"></div>
                            </div>                            
                            <div class="card" style="border-radius: 15px; padding: 15px 0;">                               
                                <div class="col-md-4">
                                    <div id="images-icon"></div>
                                </div>
                                <div class="col-md-12 ">        
                                    <div class="box-program">
                                        <table  width="100%">
                                            <tr>
                                                <td width="10">
                                                </td>
                                                <td>
                                                 <table width="100%">
                                                    <tr>
                                                        <td width="10"><div style="width: 10px; height: 10px; border-radius: 1px;background: #555;"></div></td>
                                                        <td align="left" style="padding-left: 15px;"><span id="placefrom" style="text-align: center;"></span></td>
                                                    </tr>
                                                    <tr>
                                                    <td colspan="2"><br/></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10"><div style="width: 10px; height: 10px; border-radius: 1px;background: #3b5998;"></div></td>
                                                        <td align="left" style="padding-left: 15px;"><span id="placeto" style="text-align: center;"></span></td>
                                                    </tr>
                                                 </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group form-inline">
                                        <table width="100%">
                                            <tr>
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                <label style="text-align:left" ><span class="lng-product"></span></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                    <span id="product" style="text-align: center;"></span>                                           

                                                </td>
                                            </tr>
                                            <tr class="boxs-from">
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                    <label style="text-align:left" >
                                                        <span class="lng-from"></span><span>:</span>
                                                    </label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                    <span id="province" style="color: #000;"></span>
                                                </td>
                                            </tr>
                                            <tr class="boxs-to">
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                <label style="text-align:left" ><span class="lng-to"></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                <span id="province_to" style="    color: #000;"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                    <label style="text-align:left" ><span class="lng-type"></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                <span  id="cars_persion" style="color: #000;"></span>                                

                                                </td>
                                            </tr>
                                            <tr id="box_price">
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                    <label style="text-align:left" ><span class="lng-price"></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                <span style="color: #16B3B1;" id="price"></span>                               

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100" valign="top"  style="padding: 5px 0;"> 
                                                <label style="text-align:left" ><span class="lng-total-prices "></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                <span id="numsumprice"></span>                             

                                                </td>
                                            </tr>
                                            <tr id="Rondate">
                                                <td valign="top"  style="padding: 5px 0;"> 
                                                <label style="text-align:left" ><span class="lng_departure "></span><span>:</span></label>

                                                </td>
                                                <td width="10px"></td>
                                                <td>
                                                <span id="Rondatetext"></span>                             

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="box-list-cars " >
                                        <span class="lng-you-choose"></span> 
                                        <span style="color: red" class="ng-binding" >(<span id="selectcar"></span>) </span> <span class="lng-car"></span>
                                        <span style="color:#000" class="ng-binding">1- <span id="checksum"></span><span class="lng-person"></span><span style="color: red" > (<span id="sumnum"></span>) </span></span>
                                    </div>
                                    <div class="form-group form-inline" id="select_date">
                                        <table width="100%">
                                            <tr>
                                                <td width="100px">
                                                    <label style="text-align:left" id="datetext"></label>   
                                                </td>
                                                <td >
                                                    <div class='input-group '  style="width: 100%">
                                                    <!-- <input type="text"> -->
                                                     <input id="on_date"   class="datepicker asd textInput"  name="date" type="text" autofocuss  >  
                                                    <!-- <input type="text"> -->
                                                    <!-- <input type="text" data-role="date" id="on_date" class="form-control asd date-input-css"> -->
                                                        <!-- <input type='date' id="on_date" class="form-control asd" value="<?php date("Y-m-d");?>" min="<?php date("Y-m-d");?>" data-date-format="d-M-yyyy"> -->
                                                    </div>
                                                                    <style>
                                                                        input::-webkit-clear-button {
                                                                        display: none;
                                                                        }
                                                                       
                                                                    </style>
                                                                    <script >
                                                                       
                                                                        // $('.datepicker').pickadate({
                                                                        //     formatSubmit: 'yyyy/mm/dd',
                                                                        //     // min: [2015, 7, 14],
                                                                        //     container: '#container',
                                                                        //     // editable: true,
                                                                        //     closeOnSelect: false,
                                                                        //     closeOnClear: false,

                                                                        // });

                                                                    </script>
                                                </td>
                                            </tr>
                                        </table>
                                    </div> 
                                    
                                    <div class="form-group form-inline" id="selece_time">
                                        <table width="100%">
                                            <tr>
                                                <td width="100px">
                                                    <label style="text-align:left" id="texttime"></label>
                                                </td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="49%" align="center">
                                                                <select class="textInput time_h asd" style="width: 100%;" id="time_h" name="time_h">
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
                                                                <select class="textInput time_m asd" style="width: 100%;" id="time_m" name="time_m" required>
                                                                    <option value="00" selected="selected">00</option>                                                                  
                                                                    <option value="05">05</option>
                                                                    <option value="10">10</option>
                                                                    <option value="15">15</option>
                                                                    <option value="20">20</option>
                                                                    <option value="25">25</option>
                                                                    <option value="30">30</option>
                                                                    <option value="35">35</option>
                                                                    <option value="40">40</option>
                                                                    <option value="45">45</option>
                                                                    <option value="50">50</option>
                                                                    <option value="55">55</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-person form-group " id="car-show">
                                        <table width="100%">
                                            <tr>
                                                <td width="100"  style="padding-right: 10px;">
                                                    <label style="text-align:left" ><span class="lng-car"></span><span>:</span></label>
                                                </td>
                                                <td width="">
                                                    <table width="100%">
                                                        <tr >
                                                            <td align="center">
                                                                <select class="textInput form-inline asd" id="num_cars"  name="num_cars" style="width: 100%" required>                                                                                                            
                                                                    <!-- <option value="1">1</option>            
                                                                    <option value="2">2</option>            
                                                                    <option value="3">3</option>            
                                                                    <option value="4">4</option>            
                                                                    <option value="5">5</option>            
                                                                    <option value="6">6</option>             -->
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-person form-group " style="" id="select_adult_child">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <div style="margin-right: 10px;">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="100">
                                                                    <label style="text-align:left" ><span class="lng-adult"></span><span>:</span></label>
                                                                </td>
                                                                <td>
                                                                    <select class="textInput asd" id="num_adult" name="num_adult"  style="" required>
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
                                                            <td width="">
                                                                <label style="text-align:left" ><span class="lng-child"></span><span>:</span></label>
                                                            </td>
                                                            <td>
                                                                <select class="textInput asd" id="num_child" name="num_child" style="" required>
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
                                    <div class="form-person form-group " id="visa-show">
                                        <table width="100%">
                                            <tr>
                                                <td width="100px"  style="padding-right: 10px;">
                                                    <label style="text-align:left" ><span class="lng-visa"></span><span>:</span></label>
                                                </td>
                                                <td >
                                                    <table width="100%">
                                                        <tr >
                                                            <td align="center">
                                                                <select class="textInput asd" id="visa"  name="visa" style="width: 100%" >
                                                                    <option value="0" class="lng-none-have"><font >None</font></option>            
                                                                    <option value="1" class="lng-have"><font ></font></option>            
                                                                    <option value="0" class="lng-none-have"><font class="lng-none-have"></font></option> 
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-person form-group " id="box-terminal" style="display: none;">
                                        <table width="100%">
                                            <tr>
                                                <td width="100"  style="padding-right: 10px;">
                                                    <label style="text-align:left" ><span class="lng-departure-terminal"></span><span>:</span></label>
                                                </td>
                                                <td width="">
                                                    <table width="100%">
                                                        <tr >
                                                            <td align="center">
                                                                <select class="textInput asd" id="terminal"  name="visa" style="width: 100%" >
                                                                    <option value="1" class="lng-demestic"></option>            
                                                                    <option value="2" class="lng-international"></option>            
                                                                    <!-- <option value="0" class="lng-none-have"><font class="lng-none-have"></font></option>  -->
                                                                </select>
                                                            </td>
                                                            <!-- <td align="center">
                                                                <input type="text" class="textInput asd" id="terminal">
                                                            </td> -->
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group form-inline">
                                        <table width="100%">
                                            <tr>
                                                <td width="100"  style="padding-right: 10px;">
                                                    <label style="text-align:left" ><span class="lng-remark"></span><span>:</span></label>
                                                </td>
                                                <td width="">
                                                    <div style="width:100%">                                                    
                                                        <input type="text" class="textInput asd" id="other"  style="width:100%" >
                                                    </div>   
                                                </td>
                                            </tr>
                                        </table>                                                
                                    </div> 
                                </div> 
                            </div>
                       
                                
                       
                            <div style="padding: 10px 4px; font-weight: 600; font-size: 16px;">
                                <span class="lng-contact-infomation"></span>
                            </div>
                            <div class="card" style="    border-radius: 15px;">
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-12" id="acceptancecheck">
                                            <div class="checkbox" style="margin-bottom: 30px;">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" id="acceptanceuser">
                                                    <span class="lng-get-detail"></span>
                                                </label>
                                                <div id="pleselogin" class="lng-plese-login" style="color: red; text-align: center; font-weight: 400; font-size: 16px; margin-top: 12px;display:none">Plese login</div>
                                            </div>
                                        </div>    
                                        <div class="col-md-6"> 
                                           
                                            <div class="contact_info">
                                               
                                                    <input type="text" class="textInput" placeholder="<? echo $lng_fiast_name;?> - <? echo $lng_last_name;?>" id="name_lastname" name="name_lastname"  pattern="^[A-z ก-ฮ]+$" required>                                                               
                                              
                                            </div>
                                            <div class="contact_info">
                                                
                                                    <label class="textInput"  id="select-country"><span id="numbercountry" style="    color: #aeaeae;"></span></label>
                                               
                                              
                                                    <div class="" style="position: absolute;
                                                    border-right: 1px solid #dfdfdf;
                                                    z-index: 1;
                                                    padding: 8px;
                                                    width: 80px;
                                                    height: 39px;
                                                    margin: 8px 0;
                                                    text-align: center;"  id="phonecode" value="phonecode">
                                                        <!-- <label class="textInput" > </label> -->
                                                    </div>
                                                    <div id="tphone">
                                                        <input type="text" class="textInput" placeholder="<? echo $lng_phone?>" id="phone" style="    padding-left: 85px;" aria-required="true" aria-invalid="true" required>                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact_info">
                                               
                                                    <input type="email" class="textInput" placeholder="<? echo $lng_email?>" id="email" aria-required="true" aria-invalid="true" required>                                                    
                                                
                                            </div>
                                            <div class="contact_info flight-box" >
                                                
                                                    <input type="text" class="textInput" placeholder="<? echo $lng_flight?>" id="flight" >
                                               
                                            </div>
                                                       
                                        </div> 
                                    </div>     
                                </div>
                               
                                
                            </div>
                        
                       
                            <div style="padding: 10px 4px; font-weight: 600; font-size: 16px;">
                            <span class="lng-terms-of-use" style="    margin-top: 15px;"></span>
                            </div>
                            <div class="card"  style="border-radius: 15px">
                                
                                <div class="col-md-12">
                                <div class="terms-of-use" style="    margin-top: 15px;"></div>
                                </div>
                                <div class="col-md-12">
                                
                                     <div class="checkbox" id="checkbox">
                                         <label>
                                             <input type="checkbox" name="optionsCheckboxes" value="check1" id="acceptance">
                                             <span class="lng-acceptance-of-terms"></span>
                                         </label>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div  class="lng_addbook" id="addbook" onclick="selecetBook();" value='Book' style=" background: #3b5998; width: 100%; color: #ffffff;  text-align: center;  padding: 10px; font-size: 17px;border-radius: 25px; margin-bottom: 15px;" />book
                                     </div>                                    
                                 </div>
                            </div>
                      