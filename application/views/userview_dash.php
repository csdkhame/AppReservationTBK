  <?php header('Content-type: text/html; charset=utf-8'); ?>
<script>
	var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
//       console.log('Hideeeeeeeeeeee');
       $('nav').hide(300);
       
   } else {
//        console.log('Showwwwwwwwwwww');
         $('nav').show(300);
   }
   lastScrollTop = st;
});
</script>
    <?php echo link_tag('files/css/classic.css'); ?>
    <?php echo link_tag('files/css/classic.date.css'); ?>
	 <script type="text/javascript" src="<?php echo base_url(); ?>files/js/picker.js?v=<?=time()?>"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/picker.date.js?v=<?=time()?>"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/legacy.js?v=<?=time()?>"></script> 
    <?
    $json = json_encode($results);
     ?>
<script>
$( document ).ready(function() {
    $( "#user_view" ).addClass( "active" );
    
    var base_url = '<?php echo base_url(); ?>';
    
    console.log(<?=$json;?>);
});
</script>	
<?php
 $num_rec = $this->input->get('num'); 
	  $page_get = $this->input->get('page',TRUE);
	  $start_get =  $this->input->get('start',TRUE);
	  if($num_rec==""){
	  	$num_rec = 1;
	  }
	  if($page_get==""){
	  	$page_get = 1;
	  }
	   $page = $total_user/$num_rec;
								$user_level = $this->session->userdata('i_rating');
      							$user_id = $this->session->userdata('i_id');
	  ?>
	  <style>
	  		.end-page {
    position: fixed; 
    left: auto;
    right: 0;
    top: 260px;
    opacity: .9;
    z-index: 3;
    padding: 1rem;
    overflow-y: auto;
    cursor: default;
}
.top-page {
    position: fixed; 
    left: auto;
    right: 0;
    top: 160px;
    opacity: .9;
    z-index: 3;
    padding: 1rem;
    overflow-y: auto;
    cursor: default;
}
.table-responsive{
			margin-bottom: 0 !important;
			border:none !important;
}

		</style>
		<section >
        <div class="container" style="padding: 0 10px;margin-top: 49px;">
						<h4 class="lng-booking-infomation" style="    padding-left: 5px;"></h4>
						<div style="display: none;">
							<button class="top-page btn btn-info" onclick="scrollWin('top');" style="cursor: pointer;"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
							<button class="end-page btn btn-info" onclick="scrollWin('end');"  style="cursor: pointer;"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						</div>	  
	  
	  				<div class="toolbar" style="    background: #ffffff;
    padding: 8px;
    margin-bottom: 10px;">
                        <div class="input-group" style="display: block;">
														<? 
																$adate = date('Y-m-d');
																$date = date("Y-m-d",strtotime("-1 month",strtotime($adate)));
														?>
							
														<table width="100%">
																<tr>
																		<td width="49%">
																				<input id="date1"   class=""  name="date" type="text" value="<?=$date;?>" style="padding: 8px;     border: 1px solid #eeeeee;width:100%;">  
																		</td>
																		<td width="2%"></td>
																		<td  width="49%">
																				<input id="date2"   class=""  name="date" type="text" value="<?=$adate;?>"  style="padding: 8px;      border: 1px solid #eeeeee;width:100%;">  
																		</td>
																</tr>
														</table>
														<div style="  margin: 15px 0;
    margin-bottom: 0;">
																<input id="search_order"   class=""  name="date" type="text" value="" onkeyup="search()" placeholder="Search Order..(e.x. 7033496)"  style="padding: 8px;     border: 1px solid #eeeeee;width:100%;">  
							
														</div>
					
												</div>
                    </div>
   					<div class="">
                <div style="background-color: white;  padding: 8px;">
                    
<style>
.tr-hover:hover {
/*    color: hotpink;*/
    color: #038cfc;
    /*background-color: #f96c3e;*/
    cursor: pointer;
}
.tr-hover{
    text-align: center;
}
.pagination.pagination-info>.active>a, .pagination.pagination-info>.active>a:focus, .pagination.pagination-info>.active>a:hover, .pagination.pagination-info>.active>span, .pagination.pagination-info>.active>span:focus, .pagination.pagination-info>.active>span:hover {
    background-color: #07c284;;
    border-color: #00bcd4;
    box-shadow: 0 4px 5px 0 rgba(0, 188, 212, .14), 0 1px 10px 0 rgba(0, 188, 212, .12), 0 2px 4px -1px rgba(0, 188, 212, .2)
}
.inputDate::placeholder {
  color: rgba(51, 51, 51, 0.57);
}
.inputDate{
	 display: block;
    width: 100%;
    padding: .5rem .75rem;
    /* font-size: 1rem; */
    line-height: 1.25;
    color: #464a4c;
    background-color: #fff;
    background-image: none;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
</style>	
							
      				
							<?php if($user_level==1){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table1" class="table table-hover">
                                <thead>
                                   <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
                                    <th class="text-center"><p>ID</p></th>
                                	<th data-sortable="true" class="text-center"><p class="lng-name_d">Name</p></th>
                                	<th data-sortable="true" class="text-center "><p class="lng-username_d">UserName</p></th>
                                	<th data-sortable="true" class="text-center email"><p class="lng-email_d">Email</p></th>
                                	<th  data-sortable="true" class="text-center Cr"><p class="lng-cr_d">Cutomer Reference</p></th>
                                	<th data-field="actions" class="td-actions text-center code" data-events="operateEvents" data-formatter="operateFormatter"><p class="lng-code_d">Code</p></th>
                                	<th  data-sortable="true" class="text-center"><p class="lng-amount_d">Amount</p></th>
                                </thead>
                                <tbody>
                                <?php foreach($results as $show){ ?>
                                    <tr class="tr-hover" onclick="view_ref('<?=$show['i_id'];?>','<?=$show['s_code'];?>');">
                                        <!--<td style="display: none;"></td>-->
                                    	<td ><?=$show['i_id'];?></td>
                                    	<td ><?=$show['s_name'];?></td>
                                    	<td ><?=$show['s_username'];?></td>
                                    	<td ><?=$show['s_email'];?></td>
                                    	<td ><?=$show['num_ref'];?></td>
                                    	<td ><?=$show['s_code'];?></td>
                                    	<td ><?=$show['total_am'];?></td>
                                    </tr>
								<?php } ?>
  
                                </tbody>
                            </table>
     						</div>
							<?php }
							else if($user_level==2){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table" class="table table-hover">
                                <thead>
                                   <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
                                    <th class="text-center">Date</th><center></center>
                                    <th class="text-center">Order</th>
                                	<th data-sortable="true" class="text-center">From</th>
                                	<th data-sortable="true" class="text-center">To</th>
                                	<!--<th data-sortable="true" class="text-center">Price</th>-->
                                	
                                </thead>
                                <tbody>
                                <?php foreach($results as $show){ 
//                                	$spec = strpos('a', 'abc');
//                                	$date = substr($show['date_time'],0,$spec);
									$mystring = $show['date_time'];
									/*$findme   = ' ';
									$pos = strpos($mystring, $findme);
									$date = substr($show['date_time'],0,$pos);
									$format = date('Y-m-d',$mystring);*/
                                ?>
                                    <tr class="tr-hover" onclick="view_order_level2('<?=$show['invoice'];?>');">
                                        <!--<td style="display: none;"></td>-->
                                    	<td ><? echo $show['date_time'];?> </td>
                                    	<td ><?=$show['invoice'];?></td>
                                    	<td ><?=$show['from'];?></td>
                                    	<td ><?=$show['to'];?></td>
                                    	<!--<td ><?=$show['total_price'];?></td>-->
                                    
                                    </tr>
								<?php } ?>
  
                                </tbody>
                            </table>
     						</div>
							<?php } ?>
			<div style="display: none;">
				<div class="fixed-table-pagination" style="display: none;">
				   <div class="pull-left pagination-detail" style="margin: 10px;display: none;" >
				      <span class="pagination-info"></span>
				      <span class="page-list">
				         <span class="btn-group dropup">
				            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 70px;" >
				            <span class="page-size"><?php if($num_rec){echo $num_rec; }else{ echo "5";} ?></span> 
				            <span class="caret"></span></button>
				            <ul class="dropdown-menu" role="menu">
				               <li class='<? if($num_rec==5){echo "active";} ?>'><a  href="<?php echo base_url(); ?>dashboard/view_user?num=5&start=0&page=1" >5</a></li>
				               <li class='<? if($num_rec==10){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=10&start=0&page=1" >10</a></li>
				               <li class='<? if($num_rec==15){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=15&start=0&page=1" >15</a></li>
				               <li class='<? if($num_rec==20){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=20&start=0&page=1" >20</a></li>
				            </ul>
				         </span>
				        <!-- rows visible-->
				      </span> 
				   </div>
				   <?// echo $total_user." : ".$num_rec; 
				   	$frist_page = $page-$page+1;
				   	if($frist_page==$page_get){
						$disabled_frist = "disabled";
						?><script>$(document).ready(function(){	$('.page-first a').attr('href','#');
				        $('.page-pre a').attr('href','#');	});
				       </script> <?
					}
				   ?>
				   <div class="pull-right pagination" style="margin: 0px 0 !important;">
				      <ul class="pagination pagination-info">
				         <!--<li class="page-first <?=$disabled_frist;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=0&page=<?=$frist_page;?>">«</a></li>-->
				         <li class="page-pre <?=$disabled_frist;?>"><a href="javascript:void(0)">‹</a></li>
		
				         <?php 
				        
				         for($i=0;$i<$page;$i++){
				         	$cur = $i+1;
				         		if($cur==$page_get){
									$active = "active";
								}else{
									$active = "";
								}
						 	?> <li class="page-number <?=$active;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$i*$num_rec;?>&page=<?=$cur;?>"><?=$cur;?></a></li> <?
						 }?>
						   <? if($page==$page_get){
				         	$disabled_last = "disabled";
				        ?> <script>$(document).ready(function(){	$('.page-next a').attr('href','#');
				        $('.page-last a').attr('href','#');	});
				       </script> 
				      <?   } ?>
				         <li class="page-next <?=$disabled_last;?>"><a id="next_page" href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$start_get*$page_get;?>&page=<?=$page_get+1;?>">›</a></li>
				        <!-- <li class="page-last <?=$disabled_last;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$start_get;?>&page=<?=$page;?>">»</a></li>-->
				      </ul>
				   </div>
				</div>
</div>

                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
<br/>
<br/>
<br/>
<br/>

<style>
	.dialog{
	z-index: 300;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    /* padding: 15px; */
    background: #f5f5f5;
    display: none;
    overflow: auto;
	}


</style>
    <!-- -->
<div class="dialog"> <div id="show_order"></div></div>
  	
<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal_showdata">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  	
<!--End Modal ---------------------------------------------------------------------------------------------------------------------------------->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-fullscreen" id="open_modal" style="display: none;" >Open Modal</button>           
<style>
.grad1 {
	height: 200px;
    background: red;
    background: -webkit-linear-gradient(left top, red, yellow);
    background: -o-linear-gradient(bottom right, red, yellow);
    background: -moz-linear-gradient(bottom right, red, yellow);
    background: linear-gradient(to bottom right, rgb(255, 255, 255), rgba(72, 240, 255, 0.68));
}
.box-menu-select {
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 1;
    background: #fff;
    /* height: 90px; */
}
</style>

<style>
	.box-menu-select {
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 1;
    background: #fff;
    /* height: 90px; */
}
</style>

<script>

    $('#date1').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: true,
        closeOnClear: false,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
        });
        
      
        
        
   
</script>

<script>
	  $('#date2').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: true,
        closeOnClear: false,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
        });
</script>

<script>
function search() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_order");
  filter = input.value.toUpperCase();
  table = document.getElementById("bootstrap-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<style>
.btn-silver
{
		    background-color: #777;
}
	
/* .modal-transparent */

.modal-transparent {
  background: transparent;
}
.modal-transparent .modal-content {
  background: transparent;
}
.modal-backdrop.modal-backdrop-transparent {
  background: #ffffff;
}
.modal-backdrop.modal-backdrop-transparent.in {
  opacity: .9;
  filter: alpha(opacity=90);
}

/* .modal-fullscreen */

.modal-fullscreen {
  background: transparent;
}
.modal-fullscreen .modal-content {
  background: transparent;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.modal-backdrop.modal-backdrop-fullscreen {
  background: #ffffff;
}
.modal-backdrop.modal-backdrop-fullscreen.in {
  opacity: .97;
  filter: alpha(opacity=97);
}

/* .modal-fullscreen size: we use Bootstrap media query breakpoints */

.modal-fullscreen .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .modal-fullscreen .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .modal-fullscreen .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .modal-fullscreen .modal-dialog {
     width: 1170px;
  }
}

</style>

<script>
	function view_ref(head_id,code){
		//alert(123);
		$( "#modal_showdata" ).html( '<div align="center"><img src="<?php echo base_url(); ?>dasboard/ring.gif" /></div>' );
		$.post( "<?php echo base_url(); ?>dashboard/query_transfer",{"head_id":head_id,"code":code}, function( data ) {
			//alert(data);
			
			if(data!=""){
				$( "#modal_showdata" ).html( '<div id="showTableRef" class="" align="center"></div>' );
				var obj = JSON.parse(data);
//				console.log(obj);
				$.each(obj, function(index, value) {
				    console.log(value);
				    $( "#showTableRef" ).append( '<table id="tb-'+index+'" class="table table-hover grad1"></table>' );
				    $( "#tb-"+index ).append( '<tr><td><strong>Order</strong></td><td>'+value.id_order+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Topic</strong></td><td>'+value.topic_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Car</strong></td><td>'+value.pax_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Capacity</strong></td><td>'+value.car_topic_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Transfer date</strong></td><td>'+value.booking_date+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Total Price</strong></td><td>'+value.total_price+'</td></tr>');
//				    $( "#tb-json"+index ).html( '<tr><td>555</td></tr>' );
				}); 
			}
			else{
				$( "#modal_showdata" ).html( '<div><h2>No record</h2></div>' );
			}
			
		});
		$('#open_modal').click();	
	}

	function view_order_level2(order_id){
//			$( "#show_order" ).html( '<div align="center" ><img src="'+base_url+'dasboard/ring.gif" /></div>' );
			$( "#show_order" ).html( '<div align="center" ></div>' );
			$.post( base_url+"dashboard/query_transfer_byuser?order_id="+order_id,{ check : "yes" } ,function( data ) {
				
				$( "#show_order" ).html( data);
				
//					console.log(data);
					

		});
		$('#sectionsNav').hide();
		$('.dialog').show();
//	$('#open_modal').click();
	}	
$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});


	
</script>

<script>
	$('#gohome').click(function(){
		location.href = base_url;
	});
	$('#goto_realtime').click(function(){
		location.href = base_url+"?action=realtime";
	});
	$('#goto_reservation').click(function(){
		location.href = base_url+"?action=reservation";
	});
	$('#goto_management').click(function(){
		location.href = base_url+"dashboard/view_user?num=5&start=0&page=1";
	});
</script>

<script>
	$( document ).ready(function() {
    	
    	findRowDate();
    	
	
	});
	
	$( "#date2" ).change(function() {
//	  	alert(555);
	  	findRowDate();
	});
	
	function findRowDate(){
//		alert(555);
		$('tr[class="tr-hover"]').css('display','');
		console.log(559999999999999999999955);
		var dateFrom = $('#date1').val();
    	var dataTo = $('#date2').val();
    	var result ;

    	var arry = [];
	    $('#bootstrap-table tr[class="tr-hover"]').each(function (i, el) {
	      	var dataCheck = $(this).find('td').eq(0).text();
	    
	      result = checkBetween(dateFrom,dataTo,dataCheck);
	      
	      if(result==false){
//		  	$(this).css('background-color','red');
		  	$(this).css('display','none');
		  }
	      
//		alert(dateFrom+" | "+dataCheck+" | "+dataTo);
	    });
	}
	
	function checkBetween(dateFrom,dateTo,dateCheck){
		/*var dateFrom = "12/07/2017";
		var dateCheck = "12/08/2017";
		var dateTo = "12/09/2017";*/
		
	/*	var dateFrom = "2017-07-12";
		var dateTo = "2017-09-12";
		var dateCheck = "2017-07-21";*/
		
		var dateFrom = formatDate (dateFrom);
		var dateCheck = formatDate (dateCheck);
		var dateTo = formatDate (dateTo);
		
		
		var d1 = dateFrom.split("/");
		var d2 = dateTo.split("/");
		var c = dateCheck.split("/");

		var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
		var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
		var check = new Date(c[2], parseInt(c[1])-1, c[0]);

	/*	console.log(check >= from && check <= to);
		console.log(dateFrom+' | '+dateCheck+' | '+dateTo);*/
		return check > from && check < to;

	}

	function formatDate (input) {
	
	  var datePart = input.match(/\d+/g),
	  year = datePart[0].substring(0), // get only two digits
	  month = datePart[1], day = datePart[2];

	  return day+'/'+month+'/'+year;
}
	
</script>

<script>
	function scrollWin(type) {
		if(type=="top"){
			 window.scrollTo(0,document.body.scrollHeight-document.body.scrollHeight);
		}else if(type=="end"){
			 window.scrollTo(0,document.body.scrollHeight);
		}
   
}
</script>