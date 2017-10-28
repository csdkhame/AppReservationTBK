<script src="https://cdn.omise.co/omise.js"></script>
		<script>

		  Omise.setPublicKey("pkey_test_59iaxcc7zsr77n4nbkb");

		</script>
        <style>
  /* .checkout-form {
    max-width: 300px;
    margin-top: 40px;
  } */
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
<section style="height: 100vh;background: #fff;     margin-bottom: 35px;">
    <div class="container" style="    ">
        <div style="
    margin-top: 52px">
    <div class="col-md-12">
        <div class="col-md-12" style="text-align: center; padding-bottom: 10px;  font-size: 18px; font-weight: 400; border-bottom: dashed 1px #16b3b1 ;" >
            <span class="lng-payment"></span>
        </div>
</div>
<!-- <a title="Omise Gateway" href="https://www.omise.co/"><img alt="Omise Payment" src="../assets/img/logo.png"></a> -->
<!-- <form id="checkout-form" class="checkout-form" action="/checkout.php" method="POST">
      <div class="form-group">
        <label>Card Number</label>
        <input type="text" data-name="cardNumber" class="form-control" placeholder="••••••••••••••••" />
      </div>

      <div class="form-group">
        <label>Name on card</label>
        <input type="text" data-name="nameOnCard" class="form-control" placeholder="Full Name" />
      </div>

      <div class="form-group">
        <label>Expiry date</label>
        <div class="row">
          <div class="col-xs-6">
            <select class="form-control" data-name="expiryMonth">
              <option value="">MM</option>
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
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" data-name="expiryYear">
              <option value="">YYYY</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Security code</label>
        <input type="text" data-name="securityCode" class="form-control" placeholder="123" />
      </div>

      <div class="form-group">
        <button class="btn btn-primary" >Checkout</button>
      </div>

      <input type="hidden" name="omiseToken" />
    </form> -->
<!-- <div class="col-md-6"> -->
<style>
.channel li{
    padding: 8px 0;
    border-bottom: 1px solid #ddd;
}
.pad{
    padding-right: 10px;
    font-size: 20px;
}
.channel li span{
   font-size:15px;
   line-height: 2.5;
   vertical-align: super;
   
}
</style>
    

<div id="foget-password">
            <div class="box-in-foget" >
            <div style="text-align: center;
    padding: 30px 10px;
    font-size: 16px;" class="lng-omise-gateway">   
     <!-- <i class="fa fa-money pad" style="font-size: 35px; color: #4caf50;" aria-hidden="true"></i> -->
     <span style="    text-align: center;vertical-align: super;" class="lng-omise-gateway">Payment Channel</span><i class="fa fa-times pull-right" style="font-size: 22px;
    position: fixed;
    right: 15px;
    top: 15px;" id="close" aria-hidden="true"></i></div>
    
    <!-- <div align="center" style="margin-top:30px;">
 
    </div> -->
                <div style="padding: 12px;padding-top:0">
                   <div class="col-md-12" id="forget">
                   <!-- <i class="fa fa-chevron-left" aria-hidden="true"></i><span>Back</span> -->
                      
                        <!-- <div style="margin-top: 50px; font-size: 15px; color: #333333;margin-bottom: 10px;">
                            <span class="lng-please-input-email">Please input your email </span>
                        </div> -->
                        <ul class="channel" style="list-style: none; padding-left: 6px;">
                            <li class="credit-card">
                            <i class="fa fa-credit-card pad" aria-hidden="true"  style="color:#1a53f0;font-size: 30px;"></i>
                                <!-- <img src="<?php echo base_url(); ?>files/img/omi.png" width="42" alt="" style="    margin-left: -5px;"> -->
                                <span style="color:#333;   ">Credit Card</span></li>
                        <li>
                        <form class="paypal" action="./payments" method="post" id="paypal_form" target="_blank">
                         
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="no_note" value="1" />
                <input type="hidden" name="lc" value="UK" />
                <input type="hidden" name="currency_code" value="THB" />
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                
                <input type="hidden" name="first_name" value="Customer's First Name"  />
                <input type="hidden" name="last_name" value="Customer's Last Name"  />
                <input type="hidden" name="payer_email" value="ozaclever-busines-2@gmail.com"  />
                <input type="hidden" name="item_name" value="Customer's First Name"  id="item_name">
                <input type="hidden" name="item_number" value="988" id="item_number">
                <input type="hidden" type="number" name="txt_amount" class="textInput"  id="amount" />
               <!-- <input type="hidden" name="return" value="https://dotdotdottrip.com/dashboard/payments/?payment=success" />
                <input type="hidden" name="cancel_return" value="https://dotdotdottrip.com/dashboard/payments/?payment=cancelled" /> -->
                <input type="hidden" name="txn_ids" value="Reference" id="reference" / >
                        <i class="fa fa-paypal pad" aria-hidden="true" style="color:#253b80;    font-size: 30px;"></i><span><input style="background: #ffffff;  border: 0; color:#333; " type="image" name="submit" value="Paypal"   /></span>
                        </form></li>
                        <!-- <li class="internet-banking">
                            <i class="fa fa-university pad" aria-hidden="true" style="color:#e91e63;font-size: 30px;"></i>
                        <span style="color:#333">Internet Banking</span></li> -->
                        <!-- <li><i class="fa fa-credit-card" aria-hidden="true"></i><span>Credit Card</span></li> -->
                        </ul>
                    </div>
                   
                    
                </div>
                <!-- <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;">  -->
                <!-- <div  class="btn-close lng-close" ></div> -->
                   
                <!-- </div> -->
            </div>
        </div>
        <div id="foget-password2">
            <div class="box-in-foget2" >
            <div style=" border-bottom: 1px solid #ddd;  text-align: center;  padding: 10px; font-size: 16px;" class="lng-omise-gateway">
            <img src="https://assets.omise.co/assets/omise-logo-a86debcb438f41aa395a868ff43fe67090e277d44dea080cd2d51baec405ea71.svg" alt="" width="100">    
            <i class="fa fa-times pull-right" style="    font-size: 22px;" id="close-credit-card" aria-hidden="true"></i>
</div>
    
    <!-- <div align="center" style="margin-top: 40px; margin-bottom: 20px;"> -->
    <!-- <i class="fa fa-credit-card " aria-hidden="true" style="    font-size: 27px;
    color: #aaa;"></i> -->
   
    <!-- <i class="fa fa-money "  aria-hidden="true"></i> -->
    <!-- </div> -->
                <div style="padding: 20px;padding-top:0">
                   <!-- <div class="col-md-12" id="forget"> -->
                   <!-- <i class="fa fa-chevron-left" aria-hidden="true"></i><span>Back</span> -->
                       <!-- <h5 style="    text-align: center;" class="lng-omise-gateway">Credit Card</h5> -->
                     
                        
                    <!-- </div> -->
                    <form id="checkout" >
				 

				  <input type="hidden" name="omise_token">
				  <input type="hidden" class="form-control" id="datain" name="data" >
                  <input type="hidden" class="form-control" id="amount" name="amount">
                  <!-- <input type="hidden" name="item_namec" value="Customer's First Name"  id="item_namec"> -->
				  
                  

				     
		          <div class="control-group">
		          		
		          	
		            	<div class="control-label label_name">Cardholder Name</div>		            
		              	<input type="text" data-omise="holder_name" class="iname" id="creditname" name="creditname"  placeholder="Ex. John Smith"pattern="\w+ \w+.*" title="Fill your first and last name" required>		            
		          </div>
				  <div class="control-group" >	
		            <div class="control-label label_cardnumber">Card Number</div>		            	
		                            
		                  <input type="text" data-omise="number1" class="cardnumber" id="cardnumber"  autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="" required>		                
		                  <input type="text" data-omise="number2" class="cardnumber" id="cardnumber2" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>		                
		                  <input type="text" data-omise="number3" class="cardnumber" id="cardnumber3" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>		                
		                  <input type="text" data-omise="number4" class="cardnumber" id="cardnumber4" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>	                        
		          </div>
				  <div class="control-group">
		            <div class="control-label label_date">Expiration Date</div>	
		            	<input type="text" data-omise="expiration_month" class="numdate" id="numdate" autocomplete="off" maxlength="2" placeholder="mm"pattern="\d{2}" title="4 Digit" required>
		            	<div class="control-label label_slad">/</div>		                
		                <input type="text" data-omise="expiration_year" class="numyear" id="numyear" autocomplete="off" maxlength="4" placeholder="yyyy"pattern="\d{4}" title="4 Digit" required>
		                
		          </div>
				  <div class="control-group">
		            <div class="control-label label_cardcvv">CVV</div>              
		                  <input type="password" data-omise="security_code" class="ccv" id="cvv"autocomplete="off" maxlength="3" placeholder="***"pattern="\d{3}" title="Three digits at back of your card" required>
		                  <img src="images/cvv2.png" style="width: 68px;margin-left: 20px;margin-top: -1px;position: absolute; " />	
		                  <p class="maxtext">Must be 4 digits!</p>
		                  <p class="maxtext2">Must be 2 digits!</p>
		                  <p class="maxtext3">Must be 3 digits!</p>
		                  <p class="maxtext4">Must be 4 digits!</p>                
		          </div>
                  <div id="token_errors"></div>
		          <input type="submit" id="create_token" class="btn-submit"  value="Submit" >
		          
		         

				</form>
                
                   
                    
                </div>
               
            </div>
        </div>

        <!-- internet banking -->

        <div id="foget-password3">
            <div class="box-in-foget3" >
            <div style="    text-align: center;
    padding: 30px 10px;
    font-size: 16px;font-weight: 400;" class="lng-omise-gateway"> 
       
                 <!-- <i class="fa fa-linkedin-square pad"  style="    font-size: 35px; color: #e91e63;"></i> -->
                 <span style="text-align: center;color: #333;vertical-align: super;" class="lng-omise-gateway" >Internet Banking</span>
                <!-- <td> </td> -->
            
        <!-- </table> -->
            
       
        <i class="fa fa-times pull-right" style="    font-size: 22px;
    position: fixed;
    right: 15px;
    top: 15px;" id="close-internet-banking" aria-hidden="true"></i></div>
    
   
   
   
    <style>
.omise-logo-wrapper         { display: inline-block; padding: 5px; margin-right:10px; border-radius: 2px; vertical-align: top; }
.omise-logo-wrapper img     { width: 25px; height:25px; }
.omise-banking-text-wrapper { display: inline-block;
   
    color: #333; }
.secondary-text             { color: #aaa; font-size: 80%; }
.scb { background: #4e2e7f; }
.ktb { background: #1ba5e1; }
.bay { background: #fec43b; }
.bbl { background: #1e4598; }
.circle{
    position: absolute;
    right: 0;
    top: 12px;
}
.check{
    position: absolute;
    right: 0;
    top: 12px;
}
</style>
    
                <div style="padding: 12px;padding-top:0">
                   <div class="col-md-12" id="forget">
                   <!-- <i class="fa fa-chevron-left" aria-hidden="true"></i><span>Back</span> -->
                      
                        <!-- <div style="margin-top: 50px; font-size: 15px; color: #333333;margin-bottom: 10px;">
                            <span class="lng-please-input-email">Please input your email </span>
                        </div> -->
                        <form>
                            
                        <ul class="channel" style="list-style: none; padding-left: 6px;">
                        <li >                       
                            <div class="radio">
                                <label style="padding-left:0;width:100%">                        
                                    <div class="omise-logo-wrapper scb">
                                        <img src="<?php echo base_url(); ?>files/img/omise-offsite-scb.svg" class="scb" />
                                    </div>
                                    <div class="omise-banking-text-wrapper">
                                        <span class="">Siam Commercial Bank</span>
                                        <!-- <span class="rate secondary-text">Fee: 15 THB (same zone), 30 THB (out zone)</span> -->
                                    
                                    </div>
                                    <input type="radio" data-omise="offsite_provider" id="omise_offsite_scb" name="offsite_provider" value="internet_banking_scb" style="position: absolute;  right: 0;  top: 12px;"/>                       
                                </label>
                            </div>            
                            <!-- <img class="img-bank" src="<?php//echo base_url(); ?>files/img/scb.svg" alt=""><span>Siam Commercial Bank</span> -->
                        </li>
                        
                        <li >
                        <div class="radio">
                            <label style="padding-left:0;width:100%">
                                <input type="radio" data-omise="offsite_provider" id="omise_offsite_ktb" name="offsite_provider" value="internet_banking_ktb" />
                                <div class="omise-logo-wrapper ktb">
                                    <img src="<?php echo base_url(); ?>files/img/omise-offsite-ktb.svg" class="ktb" />
                                </div>
                                <div class="omise-banking-text-wrapper">
                                    <span class="">Krungthai Bank</span>
                                    
                                </div>
                            </label>
                        </div>
                            <!-- <img class="img-bank" src="<?php echo base_url(); ?>files/img/ktb.svg" alt=""><span>Krungthai Bank</span> -->
                        </li>
                        <li >
                        <div class="radio">
                            <label style="padding-left:0;width:100%">
                                <input type="radio" data-omise="offsite_provider" id="omise_offsite_bay" name="offsite_provider" value="internet_banking_bay" />
                                <div class="omise-logo-wrapper bay">
                                    <img src="<?php echo base_url(); ?>files/img/omise-offsite-bay.svg" class="bay" />
                                </div>
                                <div class="omise-banking-text-wrapper">
                                    <span class="">Krungsri Bank</span>
                                    <!-- <span class="rate secondary-text">Fee: 15 THB (same zone), 15 THB (out zone)</span> -->
                                </div>
                            </label>
                        </div>
                            <!-- <img class="img-bank" src="<?php echo base_url(); ?>files/img/bbl.svg" alt=""><span>Krungsri Bank</span> -->
                        </li>
                        <li >
                        <div class="radio">
                            <label style="padding-left:0;width:100%">
                                <input type="radio" data-omise="offsite_provider" id="omise_offsite_bbl" name="offsite_provider" value="internet_banking_bbl" />
                                <div class="omise-logo-wrapper bbl">
                                    <img src="<?php echo base_url(); ?>files/img/omise-offsite-bbl.svg" class="bbl" />
                                </div>
                                <div class="omise-banking-text-wrapper">
                                    <span class="">Bangkok Bank</span>
                                    <!-- <span class="rate secondary-text">Fee: 15 THB (same zone), 20 THB (out zone)</span> -->
                                </div>
                            </label>
                        </div>
                            <!-- <img class="img-bank" src="<?php echo base_url(); ?>files/img/bay.svg" alt=""><span>Bankok Bank</span> -->
                        </li>
                       
                        </ul>
                            <div class="buttons">        
                                <!-- <i class="omise-submitting fa fa-spinner fa-spin"></i> -->
            
                                <input type="submit" class=" btn-checkout" style="100%"  value="Submit" />
        
                            </div>
                    </form>
                </div>
                   
                    
                </div>
                 <!-- Button -->
    
                <!-- <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;">  -->
                <!-- <div  class="btn-close lng-close" ></div> -->
                   
                <!-- </div> -->
            </div>
        </div>
<!-- <form class="paypal" action="./payments" method="post" id="paypal_form" target="_blank"> -->
        <table class="table " width="100%">
            <tr>
                <td colspan="2" align="center"><div class="status-pay" style="font-weight: 400;
    font-size: 16px;"></div></td>
            </tr>
            <tr>
                <td>
                <span class="lng-product"></span>
                </td>
                <td>
                <span id="pdname"></span>
                </td>
            </tr><tr>
                <td>
                <span class="voucher-lang lng-voucher-no"></span>
                </td>
                <td>
                <span id="voucher"></span>
                </td>
            </tr>
            <tr>
                <td>
                <span class="amount-lang lng-amount"></span>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span class="adult-lang lng-adult"></span> :	<span id="adult"></span>
                            </td>
                            <td width="10"></td>
                            <td>
                                <span class="child-lang lng-child"></span> :	<span id="child"></span>
                            </td>
                    </tr></table>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="price-lang lng-price"></span>
                </td>
                <td>
                    <span id="price"></span> <span class="currency"></span>
                </td>
            </tr>
            <tr>
                <td>
                <span class="book_by-lang lng-book-by"></span>
                </td>
                <td>
                <span id="book_by"></span>
                </td>
            </tr>
            <tr class="box-pay">
                <td>
                <span class="lng-amount"></span> (THB.)
                </td>
                <td>
                <span id="total_amount"></span> 
                <!-- <input type="number" name="txt_amount" class="textInput" holder="" id="amount" /> -->
                <!-- disabled -->
                </td>
            </tr>
            <tr  class="box-pay">                        
                <td align="center" colspan="2" style="" id="btn-pay"> 
                                         
                    <!-- <input style="background: #ffffff;  border: 0; width:99% " type="image" name="submit" value="Submit Payment" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png"  />                                            -->
                </td>
            </tr>
                   
            <!-- <tr class="box-pay">
                
                <td colspan="2">
                    <div class="pay-driver" style="color: #3b5998; */
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
    background-color: #16B3B1;">Pay Driver</div>
                </td>
            </tr> -->
             <tr class="box-pay">
                
                <td colspan="2">
                    <div class="pay-omise" style="color: #3b5998; */
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
    background-color: #16B3B1;"><span class="lng-paynow"></span></div>
                </td>
            </tr>
            <tr>
                        
                        <td align="center" colspan="2" style="" id="btn-pay">                           
                        </br>                  
                        </br>                  
                        </td>
                    </tr>
        </table>
        
       <style>
           .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
               border-top: none;
           }
           boby{
            background-color: #fff !important;
           }
       </style>       

            
              
               
                <!-- <table width="100%" style="   " >
                    <tr>
                        <td style="padding:0 5px 5px 0;">
                        </td>
                        <td style="padding:0 5px 5px 0;">
                        <input type="number" name="txt_amount" class="textInput" holder="" id="amount"/>
                        </td>
                        
                    </tr>                   
                    <tr>
                        
                        <td align="center" colspan="2" style="" id="btn-pay">                           
                            <input style="background: #ffffff;  border: 0; margin-top: 15px;  " type="image" name="submit" value="Submit Payment" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png"  />                                           
                        </td>
                    </tr>
                </table> -->
        <!-- </div> -->
            <!-- </form> -->
        </div>
        </div>
    </section>
<style>
    .btn-checkout{
        margin-top: 40px;
    /* position: absolute; */
    /* bottom: 15px; */
    /* right: 15px; */
    left: 15px;
    width: 100%;
    color: #eee;
    display: inline-block;
    padding: 13px;
    font-size: 16px;
    border: aliceblue;
    border-radius: 0;
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#16B3B1, #16B3B1);
    }
.img-bank{
    width: 30px;
    margin-right: 10px;  
}
    .textInput {
    border: 1px solid #dfdfdf;
    padding: 8px;
    margin: 8px 0;
    width: 100%;
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
#foget-password2{
    z-index: 21; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget2{
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
#foget-password3{
    z-index: 21; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget3{
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
.label_name{
    display: block;
    font-size: 15px;
    margin-bottom: 5px;
			}
			.iname{
                width: 100%;
                color: #000;
                font-size: 16px;
                padding: 8px 20px;
                margin-bottom: 20px;
                border: 1px solid #16B3B1;
			    

			}
			.label_cardnumber{
				display: block;
                font-size: 16px;
                margin-bottom: 5px;
                /* font-weight: 200; */
                /* line-height: 10px; */
                /* margin-right: 90px; */
                /* clear: both; */
			}
			.label_cardnumber label{
				font-size: 20px;
	    		font-weight: 200;
	    		line-height: 10px;
	    		margin-right: 23px;
	    		clear:both;
			}
			.label_date{

                display: block;
                font-size: 15px;
                margin-bottom: 5px;

			}
			.label_cardcvv{
                font-size: 15px;
                display: inline-block;
                margin-bottom: 5px;
			}
			.ccv{
                font-size: 16px;
                text-align: center;
                display: block;
                border: 1px solid #16B3B1;
                padding: 8px 0;
                color: #000;
			}
			.cardnumber{
				
                width: 23.4%;
                text-align: center;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #16B3B1;
                padding: 8px;
                color: #000;
			    


			}
			.cardnumber:first{
				margin-left: 20px;

			}
			.Expiry-Date{
				width: 225px;
			    height: 43px;
			    margin-bottom: 20px;
			    margin-left: 10px;
			    /* border-radius: 26px; */
			    border: 1px solid #16B3B1;
			    padding: 20px 38px;
			    font-size: 16px;
			    color: #000;

			   
			}
			.Expiry-year{
				width: 115px;
				height: 43px;
				/* border-radius: 26px; */
				border: 1px solid #16B3B1;
				padding: 20px 38px;
				font-size: 16px;
				color: #000;

			    
			}
			/* .btn-submit{				
                position: fixed;
                bottom: 15px;
                right: 15px;
                left: 15px;
                width: 92%;
                color: #eee;
                display: inline-block;
                padding: 13px;
                font-size: 16px;
                border: aliceblue;
                border-radius: 0;
                background: -o-linear-gradient(#ebaf00, #f1a100);
                background: -moz-linear-gradient(#ebaf00, #f1a100);
                background: linear-gradient(#16B3B1, #16B3B1);



            } */
            .btn-submit {
    margin-top: 62px;
    /* position: absolute; */
    /* bottom: 15px; */
    /* right: 15px; */
    left: 15px;
    width: 100%;
    color: #eee;
    display: inline-block;
    padding: 13px;
    font-size: 16px;
    border: aliceblue;
    border-radius: 0;
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#16B3B1, #16B3B1);
}
			.btn-submit:focus{

				outline: none;


			}
			.btn-cancel{
				color: #000;
				display: inline-block;
				padding: 10px 57px;
    			margin-top: 59px;
				border:solid 1px #333;
				border-radius: 4px;
			}
			.headerp{
				display: block;
			    padding: 0;
			    font-size: 3em;
			    margin-bottom: 55px;
			    line-height: 40px;
			    color: #333333;
			    border: 0;
			    font-weight: 400;
				    
			}
			select {
				width: 220px;
				border: 1px solid #cccccc;
				background-color: #ffffff;
			}
			select, input[type="file"] {
				height: 30px;
				line-height: 30px;
			}
            .border-Right{
				position: absolute;
				/*border: solid 1px #8669FF; */
			    width: 55%;
			    /*height: 554px;*/
			    /*padding-left: 50px;*/
			    margin-top: 20px;
			    border-radius: 4px;
			    margin-left: 500px;
			}
			option{
				color: #7640f4;
			}
			.numdate{
				width: 80px;
                display: inline-block;
                font-size: 16px;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #16B3B1;
                padding: 8px;
                text-align: center;
                margin-right: 8px;
                color: #000;
			}
			.numyear{
                width: 68%;
                margin-left: 5px;
                display: inline-block;
                font-size: 16px;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #16B3B1;
                padding: 8px 20px;
                color: #000;
			}
			.label_slad{
				display: inline-block;
			}
			.imagess{
				display: block;
			    margin-left: 230px;
			    margin-bottom: 10px;
			}
			.maxtext{
				color: red;
			    font-size: 20px;
			    margin-top: -165px;
			    margin-left: 610px;
			    font-weight: 500;
			    position: absolute;
			    display: none;


			}
			.maxtext2{
				    color: red;
				    font-size: 20px;
				    margin-left: 610px;
				    margin-top: -96px;
				    font-weight: 500;
				    position: absolute;
				    display: none;


			}
			.maxtext4{
				    color: red;
				    font-size: 20px;
				    margin-left: 610px;
				    margin-top: -97px;
				    font-weight: 500;
				    position: absolute;
				    display: none;


			}
			.maxtext3{
				color: red;
			    font-size: 20px;
			    margin-left: 610px;
			    margin-top: -33px;
			    font-weight: 500;
			    position: absolute;
			    display: none;


			}
			
			#token_errors{
                color: red;
                position: absolute;
                margin-top: 10px;
                font-size: 16px;
			}
    </style>
    <script>
    var base_url = 'https://www.welovetaxi.com/app/booking/';
$( document ).ready(function() {
    var product_name,total_amount = 0;
    $.post( "<?php echo base_url(); ?>dashboard/get_user", function( data ) {
		var obj = JSON.parse(data);
		$.each(obj, function (index, value) {
			$('#name').html(obj[index].s_name);
            $('#loading').hide();
		});
    });

    //===============================================
    // $("#omise-form-checkout").submit(function() {
    //     var form            = $(this),
    //         alertSuccess    = form.find(".alert-success"),
    //         alertError      = form.find(".alert-error"),
    //         spinner         = form.find('.omise-submitting');
    //     // Show spinner icon.
    //     spinner.addClass('loading');
    //     // Hidden alert box
    //     alertError.removeClass('show');
    //     alertSuccess.removeClass('show');
    //     // Disable the submit button to avoid repeated click.
    //     form.find("input[type=submit]").prop("disabled", true);
    //     // Charge with internet banking.
    //     var posting = $.post("https://www.welovetaxi.com/app/booking/service/inBank.php", {
    //         "offsite_provider": form.find("[data-omise=offsite_provider]:checked").val()
    //         // "description": "Charge an internet banking from OpenCart that order id is <?php echo $orderid; ?> from <?php echo $billemail; ?>"
    //     });
    //     posting
    //         .done(function(resp) {
    //             spinner.removeClass('loading');
    //             resp = JSON.parse(resp);
    //             if (typeof resp === "object") {
    //                 if (typeof resp.error !== "undefined") {
    //                     alertError.html(resp.error).addClass('show');
    //                 } else {
    //                     if (typeof resp.redirect !== "undefined") {
    //                         console.log('redirect');
    //                         window.location = resp.redirect;
    //                     } else {
    //                         form.get(0).submit();
    //                     }
    //                 }
    //             }
    //             form.find("input[type=submit]").prop("disabled", false);
    //         })
    //         .fail(function(jqXHR, textStatus, errorThrown) {
    //             spinner.removeClass('loading');
    //             alertError.html("Omise "+errorThrown).addClass('show');
    //             form.find("input[type=submit]").prop("disabled", false);
    //         });
    //     // Prevent the form from being submitted;
    //     return false;
    // });
    //================================================================= 
    // function getParameterByName(name, url) {
    //     if (!url) url = window.location.href;
    //     name = name.replace(/[\[\]]/g, "\\$&");
    //     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    //         results = regex.exec(url);
    //     if (!results) return null;
    //     if (!results[2]) return '';
    //     return decodeURIComponent(results[2].replace(/\+/g, " "));
    // }
    console.log(getParameterByName('data'))
    $('#datain').val(getParameterByName('data'))
    $("#checkout").submit(function () {
					  //$('#token_errors').css('display','none');
					//   $('.btn-submit').css('color', '#f1a100');
					$('#loading').show();
					//   $('#floatingCirclesG').css('display','block');
					  var form = $(this);
                    //   form.find("input[type=submit]").prop("disabled", true);
					  var card = {
					    "name": form.find("[data-omise=holder_name]").val(),
					    "number": form.find("[data-omise=number1]").val()+form.find("[data-omise=number2]").val()+form.find("[data-omise=number3]").val()+form.find("[data-omise=number4]").val(),
					    "expiration_month": form.find("[data-omise=expiration_month]").val(),
					    "expiration_year": form.find("[data-omise=expiration_year]").val(),
					    "security_code": form.find("[data-omise=security_code]").val()
					   
					   
					  };
 
					  Omise.createToken("card", card, function (statusCode, response) {
					    if (response.object == "error") {					    	
					      $("#token_errors").html(response.message);
					      $('#floatingCirclesG').css('display','none');
					      $('.btn-submit').css('color', '#fff');
					      form.find("[data-omise=holder_name]").val('');
					      form.find("[data-omise=number1]").val("");
					      form.find("[data-omise=number2]").val("");
					      form.find("[data-omise=number3]").val("");
					      form.find("[data-omise=number4]").val("");
					      form.find("[data-omise=expiration_month]").val("");
					      form.find("[data-omise=expiration_year]").val("");
					      form.find("[data-omise=security_code]").val("");
					     
					$('#loading').hide();
					    
					    //   form.find("input[type=submit]").prop("disabled", false);
					    } else {
                            console.log(statusCode)
                            console.log(response)
                            $('#token_errors').css('display','none');
                            //console.log(find("[data-omise=amount]").val())
                            var param = {
                                "omise_token": response.id,
                                "amount":  total_amount,
                                "data":  getParameterByName('data'),
                                "creditname" : $("#creditname").val()

                            };
                            console.log(param)
                            $.ajax({
                            type: 'POST',
                            url: 'https://www.welovetaxi.com/app/booking/dashboard/paycredit',
                            data: param,
                            //contentType: "application/json",
                            //dataType: 'json',
                            success: function(data) {
                                console.log(data)
                                // form.find("[name=omise_token]").val(response.id);
                               ///form.get(0).submit();
                               location.reload();
                            }
                        });
					    	//alert("dsadsadas");
							//$('.btn-submit').css('color', '#f1a100');
					      	//$('.btn-submit').css('background', '#f1a100');
					      	//$('#floatingCirclesG').css('display','block');	    	
					      
					     
					      

					    };
					  });
					  return false;
					});
    $('.pay-omise').on('click', function() {
        $('#loading').show();
        $('#foget-password').fadeIn(500);
        //alert('asasasa')
        $.ajax({
            type: 'POST',
            url: 'https://www.welovetaxi.com/app/booking/service/inBank.php',
           // data: { 'from': pro_id, 'lng': lng },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#loading').hide();
            }
        });
        
    })
    $('.credit-card').on('click', function() {
        $('#loading').show();
        $('#foget-password2').fadeIn(500);
        $('#loading').hide();
        //alert('asasasa')
        // $.ajax({
        //     type: 'POST',
        //     url: 'https://www.welovetaxi.com/app/booking/service/inBank.php',
        //    // data: { 'from': pro_id, 'lng': lng },
        //     //contentType: "application/json",
        //     dataType: 'json',
        //     success: function(data) {
        //         console.log(data)
        //     }
        // });
        
    })
    $('.paypal').on('click', function() {
        $('#loading').show();
        $('#loading').hide();
    });
    $('.internet-banking').on('click', function() {
        //$('#foget-password').hide()
        $('#foget-password3').fadeIn(500);
        //alert('asasasa')
        $.ajax({
            type: 'POST',
            url: 'https://www.welovetaxi.com/app/booking/dashboard/checkout',
           // data: { 'from': pro_id, 'lng': lng },
            contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
            }
        });
        
    })
    $('#close').on('click', function() {
        $('#foget-password').fadeOut(500)
    });
    $('#close-credit-card').on('click', function() {
        $('#foget-password2').fadeOut(500)
        $('#foget-password').show();
    });
    $('#close-internet-banking').on('click', function() {
        $('#foget-password3').fadeOut(500)
        $('#foget-password').show();
    });
	$('#btn-logout-user').on('click', function() {
        console.log('logout')
        $.removeCookie("login");
        window.location.href = base_url + "register";
    })
    $('.pay-driver').on('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>dashboard/paydriver',
            data: { 'data': getParameterByName('data') },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                window.location.href =  "https://dotdotdottrip.com/dashboard/view_user"
            }
        });
    })
	
	if ($.cookie("login")) {
        console.log($.cookie("login"))
            //        alert(base_url+'getuser_control/mainpage');
        $.ajax({
            type: 'POST',
            url: '../getuser_control/mainpage',
            data: { 'id': $.cookie("login") },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log(data[0].s_image)
                console.log(data[0].s_code)
                $('.box-login').show();
                $('.box-login-non').hide();
                $('.box-desboard').show();


                if (data[0].s_image == '') {
                    $('#photo_profile').html('<img class="" src="' + base_url + 'pic/default-avatar.png">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');


                } else {
                    $('#photo_profile').html('<img   src="' + base_url + 'pic/' + data[0].s_image + '">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/' + data[0].s_image + '">');

                }
                $('#usernamess').html(data[0].s_username);
                $('#getname').html(data[0].s_name);

                //$('#textlogout').html("Logout")
                $('#btnlogin').css('display', 'none')
                $('#btnuser').css('display', 'block')
                $('.caret').css('display', 'inline-block')
            }
        });

    } 

	else {
        $('#photo_non-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
        $('.box-login').hide();
        $('.box-desboard').hide();

        $('.box-login-non').show();
        //$('#usernamess').html("Login")
        // $('#textlogout').html("Login/Register")
        $('#btnlogin').css('display', 'block')
        $('#btnuser').css('display', 'none')
        $('.caret').css('display', 'none')
	
	
}

function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('data')+"data")
    if($.cookie("lng")=="en"){
			//product_name = data.product_detail[0].topic_en;
			//cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht.");
		}else if ($.cookie("lng")=="cn"){
			//product_name = data.product_detail[0].topic_cn;
			//cartype = data.product_detail[0].car_topic_cn+" "+data.product_detail[0].pax_cn;
			$('.lng-flight').text('	航班');
			$('.lng-car_type').text('车型');
			$('.lng-transfer_date').text('日期/时间');
			$('.lng-num_of_car').text('车数');
			$('.currency').text('铢');
		}else if ($.cookie("lng")=="th"){
			//product_name = data.product_detail[0].topic_th;
			//cartype = data.product_detail[0].car_topic_th+" "+data.product_detail[0].pax_th;
			$('.lng-flight').text('เที่ยวบิน');
			$('.lng-car_type').text('ประเภทรถ');
			$('.lng-transfer_date').text('วัน/เวลา');
			$('.lng-num_of_car').text('จำนวนรถ');
			$('.currency').text('บาท');
		}else if($.cookie("lng")==undefined){
			//product_name = data.product_detail[0].topic_en;
			//cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht");
		}
    $.ajax({
            type: 'POST',
            url: '../dashboard/pay',
            data: { 'invoice': getParameterByName('data') },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log(data[0].product_detail[0])
                if($.cookie("lng")=="en"){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(wait for pay)');
                            $('.status-pay').css('color','red');
                        }
                        
                        $('.box-pay').show()
                        
                    }
                    else{
                        $('.status-pay').text('(Already paid)');
                        $('.status-pay').css('color','#4CAF50');
                        $('.box-pay').hide()
                          
                    }
                    product_name = data[0].product_detail[0].topic_en;
                   
                  
                   
                }else if ($.cookie("lng")=="cn"){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(等待付款)');
                            $('.status-pay').css('color','red');
                        }
                       
                        $('.box-pay').show()
                        
                        
                    }
                    else{
                        $('.status-pay').text('(已經支付)'); 
                        $('.status-pay').css('color','#4CAF50'); 
                        $('.box-pay').hide()
                    }
                    product_name = data[0].product_detail[0].topic_cn;
                  
                   
                }else if ($.cookie("lng")=="th"){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(รอจ่าย)');
                            $('.status-pay').css('color','red');
                        }
                        
                        $('.box-pay').show()
                        
                       
                        
                    }
                    else{
                        $('.status-pay').text('(ชำระแล้ว)');  
                        $('.status-pay').css('color','#4CAF50');
                        $('.box-pay').hide()
                    }
                    product_name = data[0].product_detail[0].topic_th;
                    
                   
                }else if($.cookie("lng")==undefined){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(wait for pay)');
                            $('.status-pay').css('color','red');
                        }
                        
                        $('.box-pay').show()
                        
                        
                    }
                    else{
                        $('.status-pay').text('(Already paid)');  
                        $('.status-pay').css('color','#4CAF50');
                        $('.box-pay').hide()
                        
                    }
                    product_name = data[0].product_detail[0].topic_en;
                   
                    
                }
                
                $('#pdname').html(product_name)
                $('#item_number').val(data[0].invoice)
                $('#reference').val(data[0].s_code)
                $('#item_name').val(data[0].book_by)
                $('#item_namec').val(data[0].book_by)
                //$('#amount').val(data[0].total_price)
                $('#voucher').html('<a href="'+data[0].voucher_url+'" target="_blank">'+data[0].invoice+'<a>');
                $('#adult').text(data[0].adult);
                $('#child').text(data[0].child);
                $('#num_of_car').text(data[0].numcar);
                $('#arrival_date').text(data[0].arrival_date);
                $('#arrival_time').text(data[0].arrival_time);
                $('#from').text(data[0].from);
                $('#to').text(data[0].to);
                $('#arrival_flight').text(data[0].arrival_flight);
                var book_date_f = data[0].booking_date;
                var res = data[0].booking_date.replace(" ", "/"); 
                $('#transfer_date').text(res);
                $('#book_by').text(data[0].book_by);
                $('#price').text(data[0].total_price);
                $('#total_amount').text(data[0].total_price);
                console.log(data[0].total_price*4.4)
                var charg = (parseInt(data[0].total_price)*4.4)/100;
                var sumcost = parseInt(data[0].total_price)+charg;
                console.log(sumcost)
                $('#amount').val(data[0].total_price);
                total_amount = data[0].totalpay
                
               
            }
        });

	});


    
</script>