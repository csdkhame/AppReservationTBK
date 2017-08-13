  <?php header('Content-type: text/html; charset=utf-8'); ?>

<script>
$( document ).ready(function() {
    $( "#user_view" ).addClass( "active" );
});
</script>	
<?php $num_rec = $this->input->get('num'); 
	  $page_get = $this->input->get('page',TRUE);
	  $start_get =  $this->input->get('start',TRUE);
	  if($num_rec==""){
	  	$num_rec = 1;
	  }
	  if($page_get==""){
	  	$page_get = 1;
	  }
	   $page = $total_user/$num_rec;
	  ?>
   <div class="">
                        <div class="card">

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                        <div class="input-group">
							<span class="input-group-addon"><i class=""></i></span>
							<p class="lng-search_d"><input type="text" value="" class="form-control" placeholder="Search name..." onkeyup="myFunction()" id="myInput" style="margin-left: -6px;" /></p>
						</div>
                             
                            </div>
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
</style>	
							<?php 
								$user_level = $this->session->userdata('i_rating');
      							$user_id = $this->session->userdata('i_id');
      				
							if($user_level==1){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table" class="table table-hover">
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
							<?php }else if($user_level==2){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table" class="table table-hover">
                                <thead>
                                   <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
                                    <th class="text-center">Order</th>
                                	<th data-sortable="true" class="text-center">Guest</th>
                                	<th data-sortable="true" class="text-center">Topic</th>
                                	<th data-sortable="true" class="text-center">Price</th>
                                	
                                </thead>
                                <tbody>
                                <?php foreach($results as $show){ ?>
                                    <tr class="tr-hover" >
                                        <!--<td style="display: none;"></td>-->
                                    	<td ><?=$show['id_order'];?></td>
                                    	<td ><?=$show['guest'];?></td>
                                    	<td ><?=$show['topic'];?></td>
                                    	<td ><?=$show['total_price'];?></td>
                                    
                                    </tr>
								<?php } ?>
  
                                </tbody>
                            </table>
     						</div>
							<?php } ?>
	
				<div class="fixed-table-pagination">
				   <div class="pull-left pagination-detail" style="margin: 10px;" >
				      <span class="pagination-info"></span>
				      <span class="page-list">
				         <span class="btn-group dropup">
				            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 70px;">
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
				   <div class="pull-right pagination">
				      <ul class="pagination pagination-info">
				         <li class="page-first <?=$disabled_frist;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=0&page=<?=$frist_page;?>">«</a></li>
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
				         <li class="page-last <?=$disabled_last;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$start_get;?>&page=<?=$page;?>">»</a></li>
				      </ul>
				   </div>
				</div>


                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
      
<!-- Modal ---------------------------------------------------------------------------------------------------------------------------------->
  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal-lg">
		      	<!-- Modal content-->
			      <div class="modal-content">
			       <!-- <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Modal Header</h4>
			        </div>-->
			        <div class="modal-body" id="modal_showdata">
			         
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
			        </div>
			      </div>
  		</div>
  	</div>
<!--End Modal ---------------------------------------------------------------------------------------------------------------------------------->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="open_modal" style="display: none;" >Open Modal</button>           
<style>
.grad1 {
	height: 200px;
    background: red;
    background: -webkit-linear-gradient(left top, red, yellow);
    background: -o-linear-gradient(bottom right, red, yellow);
    background: -moz-linear-gradient(bottom right, red, yellow);
    background: linear-gradient(to bottom right, rgb(255, 255, 255), rgba(72, 240, 255, 0.68));
}
</style>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
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

<script>
	function view_ref(head_id,code){
		//alert(123);
		$( "#modal_showdata" ).html( '<div align="center"><img src="<?php echo base_url(); ?>dasboard/ring.gif" /></div>' );
		$.post( "<?php echo base_url(); ?>dashboard/query_transfer",{"head_id":head_id,"code":code}, function( data ) {
			//alert(data);
			
			if(data!=""){
				$( "#modal_showdata" ).html( '<div id="showTableRef" class=""></div>' );
				var obj = JSON.parse(data);
//				console.log(obj);
				$.each(obj, function(index, value) {
				    console.log(value);
				    $( "#showTableRef" ).append( '<table id="tb-'+index+'" class="table table-hover grad1"></table>' );
				    $( "#tb-"+index ).append( '<tr><td><strong>Order</strong></td><td>'+value.id_order+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Topic</strong></td><td>'+value.topic_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Car</strong></td><td>'+value.pax_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Capacity</strong></td><td>'+value.car_topic_en+'</td></tr>');
				    $( "#tb-"+index ).append( '<tr><td><strong>Transfer date</strong></td><td>'+value.date_tran+'</td></tr>');
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
</script>


<!--<script>
	var $table = $('.table');
var $fixedColumn = $table.clone().insertBefore($table).addClass('fixed-column');

$fixedColumn.find('th:not(:first-child),td:not(:first-child)').remove();

$fixedColumn.find('tr').each(function (i, elem) {
    $(this).height($table.find('tr:eq(' + i + ')').height());
});
</script>
<style>
	
	.table-responsive>.fixed-column {
    position: absolute;
    display: inline-block;
    width: auto;
    border-right: 1px solid #ddd;
}
@media(min-width:768px) {
    .table-responsive>.fixed-column {
        display: none;
    }
}
</style>-->