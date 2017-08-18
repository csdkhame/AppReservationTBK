<div class="row">         
    <div class="col-md-12 " style="padding: 0">
                    <div class="tab-content">
                       
                                                
                        
              
           
    </div>
</div><!-- end row -->

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
                                            <label style="text-align:left" >
                                                <span class="lng-from"></span><span>:</span>
                                            </label>&nbsp;&nbsp;
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