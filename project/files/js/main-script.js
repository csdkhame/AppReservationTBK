$(document).ready(function(){
  // setTimeout(function(){
      
  //   }, 1000);
    console.log( "readysss!" );
    if ($.cookie("login")) {
        console.log($.cookie("login"))
        $.ajax({
        type: 'POST',
        url: 'http://dotdotdottrip.com/getuser_control/mainpage',
        data: {'id': $.cookie("login")},
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
          console.log(data)
          $('#usernamess').html(data[0].s_username)
          //$('#textlogout').html("Logout")
          $('#btnlogin').css('display','none')
          $('#btnuser').css('display','block')
          $('.caret').css('display','inline-block')


      
        
           
          
        }
    });
    }
    else{
      //$('#usernamess').html("Login")
     // $('#textlogout').html("Login/Register")
      $('#btnlogin').css('display','block')
          $('#btnuser').css('display','none')
          $('.caret').css('display','none')


     // $('.dropdown-menu').css('display','none')



    }
    $('#btn-logout-user').click(function() {
    
        $.removeCookie("login");
        window.location.href = "http://dotdotdottrip.com/register";
    });
    
    var dataplace;
    //   $.ajax({
    //     type: 'POST',
    //     url: 'Getcountry_control/process',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data)
         
            
    //     }
    // });
    $.ajax({
        type: 'POST',
        url: '../service/servicepro.php',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
        console.log(data)
          dataplace = data 
           $('body').addClass('loaded');
       $('#text-load').css('display','none') 
              sendValuetojs(data);   
             $.each(data , function(i, val) { 
                
                  //alert('aaa')
                  //dataProvince.push(data[i])
                 $('#box-plancefrom').append('<li class="send-value" id="transferplace'+data[i].id+'" dataname ="'+data[i].topic+'" datapro="'+data[i].pro+'" dataaum="'+data[i].pro+'"onclick="sendValue(\''+data[i].id+'\');">'+data[i].topic+'</li>');
            
                
            });
        }
    });

     $('#search-from').keyup(function(){
      //console.log(dataProvince)
      $('.box-plancefrom').css('display','block');
      input = document.getElementById("search-from");
      filter = input.value.toLowerCase();
        //console.log(filter)
        $('#box-plancefrom > li.send-value').each(function(){
            if (filter.length >= 3) {
                var currentLiText = $(this).text().toLowerCase(),
                showCurrentLi = currentLiText.indexOf(filter) !== -1;
                //console.log(currentLiText)
            
            $(this).toggle(showCurrentLi);
            if (filter == '' ) {
                $('.box-plancefrom').css('display','none');

            }  
          }
                      
        }); 
    });

     $('#search-to').keyup(function(){
      //console.log(dataProvince)
      $('.box-planceto').css('display','block');
      input = document.getElementById("search-to");
      filter = input.value.toLowerCase();
        console.log(filter)
        $('#box-planceto > li.send-value').each(function(){
            
            var currentLiText = $(this).text().toLowerCase(),
                showCurrentLi = currentLiText.indexOf(filter) !== -1;
                //console.log(currentLiText)
            
            $(this).toggle(showCurrentLi);
            if (filter == '' ) {
                $('.box-planceto').css('display','none');

            }            
        });
    });

});

/**************************************************************************************/
/**********************************select place from***********************************/
/**************************************************************************************/
var dataplaceSend,id_placefrom,id_placeto,pro_from,pro_to,aum_from,aum_to,dataproduct,parame ;
//var datato = [];
function sendValuetojs(data){
  console.log(data)
  dataplaceSend = data;
  }
function sendValue(x){
      id_placefrom = x;
      pro_from = $('#transferplace'+x).attr('datapro');
      var name = $('#transferplace'+x).attr('dataname');
      aum_from = $('#transferplace'+x).attr('dataaum');
      $('#search-from').val(name)
      console.log(name)
         
      $('.box-plancefrom').css('display','none');
      //var sdata = {'id_from':id_placefrom,'pro_from' :pro_from,'aum_from':aum_from };
      //console.log(sdata)
            $.each(dataplaceSend , function(i, val) { 
                if (dataplaceSend[i].pro == pro_from) {
                 $('#box-planceto').append('<li class="send-value" id="transferplaceto'+dataplaceSend[i].id+'" dataname ="'+dataplaceSend[i].topic+'" onclick="sendValueto(\''+dataplaceSend[i].id+'\');">'+dataplaceSend[i].topic+'</li>');
            
                }
            }); 
}
/**************************************************************************************/
/**********************************select place to***********************************/
/**************************************************************************************/

    /**********************************END***********************************/ 
     

function sendValueto(x){     
      console.log(id_placefrom)
      var name = $('#transferplaceto'+x).attr('dataname');
      aum_to = $('#transferplaceto'+x).attr('dataaum');
      pro_to = $('#transferplace'+x).attr('datapro');
      id_placeto = x;

      $('#search-to').val(name)
      console.log(name)

      parame = {"place_default":id_placefrom, "stay":pro_from, "aum_from":aum_from, "place_default_to":id_placeto, "stay_to":pro_to, "aum_to":aum_to};
      //parame =  { "request":{ 'id_from':id_placefrom,'id_to':id_placeto,'pro_from':pro_from,'pro_to':pro_to,'aum_from':aum_from,'aum_to':aum_from},
           // "field": {"0":"id","1":"name","2":"name_th","3":"name_cn"},
            //"from": "web_transferproduct"
          //};
          console.log(parame)
     
      
         
            
             $('.box-planceto').css('display','none');
}
function search(){ 
  //alert("aaaaaa")

  $.ajax({
          type: 'POST',
          url: '../service/service.php',
          data:parame,
          //contentType: "application/json",
         dataType: 'json',
          success: function(data) { 
            console.log(data)
            
            
            var data1 = data[0].data1;
            var data2 = data[0].data2;
            console.log(data1)
            console.log(data2)
            // console.log(data2[0])
            // console.log(data[1])
            // console.log(data[2])
            // console.log(data[3])
            // console.log(data[4])
           
            // $.each(data, function(i, item) {
            //       console.log(data[2])
            // });
            console.log(data.length)
            dataproduct = data;
            var urlicon = 'http://t-booking.com/pic/carmodelicon/';
            if (data[0].data1.length != 0) {
                 $.each(data1, function(i, val) {  
                 var indexs = parseInt(i)+1;                
                 $('#product_a').append('<div class="a-link-item col-lg-12" >'+
                                    '<div class="item-thumbnail2" onclick="gotransfer(\''+ val+'\')">'+
                                        '<img src="'+urlicon+data1[i].transfer_icon+'.jpg">'+
                                    '</div>'+
                                    '<h2 class="searchresult_name" title="product name">'+
                                        '<span >'+data1[i].topic_en+'</span>'+
                                        '<span class="hotel_num">'+ indexs+'</span>'+
                                    '</h2>'+
                                    '<div class="box-province">'+
                                        '<p class="type-t">'+
                                            '<span class="car-type" >'+data1[i].car_topic_en+data1[i].pax_en+'</span>'+ 
                                        '</p>'+
                                       
                                        '<p id="facilities">'+
                                        '<span >  Facilities : </span>'+
                                        '<img src="http://gh-travel.com:8080/icon/air.png" alt="Air Conditioner" >&nbsp;&nbsp;'+
                                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>'+
                                        '</p>'+
                                    '</div>'+
                                    '<div id="box-cost-view">'+
                                        '<div class="product_r">'+
                                            '<span class="base_price"></span>'+
                                            '<span class="sala">'+data1[i].cost_a_agent_all+'฿'+'</span>'+
                                            
                                        '</div>'+                                
                                        '<div class="views-item" >'+
                                            '<a  href="book?data='+data1[i].transfer_id+'&from='+id_placefrom+'&to='+id_placeto+'" target="_blank"> <span >Book</span></a>'+
                                            
                                        '</div>'+
                                    '</div>'+
                                    '<div id="i-list"   onclick="getcondition(\''+ data1[i].car_model+'\')">'+ 
                                        '<p id="capacity">Capacity info.</p>'+
                                        '<i class="fa fa-list-alt"   aria-hidden="true"></i>'+
                                    '</div>'+
                                '</div>'

                  );
            
               
            }); 
            }
            else {
                $('#product_a').append('<div class="a-link-item col-lg-12" > not data</div>'

                  );
                $.each(data2 , function(i, val) { 
                var indexs2 =  parseInt(i)+1;               
                 $('#product_b').append('<div class="a-link-item col-lg-12" >'+
                                    '<div class="item-thumbnail2" onclick="gotransfer(\''+ val+'\')">'+
                                        '<img src="'+urlicon+data2[i].transfer_icon+'.jpg">'+
                                    '</div>'+
                                    '<h2 class="searchresult_name" title="product name">'+
                                        '<span >'+data2[i].topic_en+'</span>'+
                                        '<span class="hotel_num">'+ indexs2+'</span>'+
                                    '</h2>'+
                                    '<div class="box-province">'+
                                        '<p class="type-t">'+
                                            '<span class="car-type" >'+data2[i].car_topic_en+data2[i].pax_en+'</span>'+ 
                                        '</p>'+
                                       
                                        '<p id="facilities">'+
                                        '<span >  Facilities : </span>'+
                                        '<img src="http://gh-travel.com:8080/icon/air.png" alt="Air Conditioner" >&nbsp;&nbsp;'+
                                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>'+
                                        '</p>'+
                                    '</div>'+
                                    '<div id="box-cost-view">'+
                                        '<div class="product_r">'+
                                            '<span class="base_price"></span>'+
                                            '<span class="sala">'+data2[i].cost_a_agent_all+'฿'+'</span>'+
                                            
                                        '</div>'+                                
                                        '<div class="views-item" >'+
                                            '<a  href="book?data='+data2[i].transfer_id+'&from='+id_placefrom+'&to='+id_placeto+'" target="_blank"> <span >Book</span></a>'+
                                            
                                        '</div>'+
                                    '</div>'+
                                    '<div id="i-list"   onclick="getcondition(\''+ data2[i].car_model+'\')">'+ 
                                        '<p id="capacity">Capacity info.</p>'+
                                        '<i class="fa fa-list-alt"   aria-hidden="true"></i>'+
                                    '</div>'+
                                '</div>'
                                

                  );
            
               
            }); 
            }
           },
          error:function(err){
            console.log(err)
          }
      });  
}

function getcondition(i){
   $('.getcapa').remove();
   $('.getcapa2').remove();
  console.log(i)
  var parame2 = {'field' :{"0":"bag_big","1":"bag_small","2":"adult","3":"child","4":"plan","5":"car_model"},
        "request":{"car_model":i},
        "from": "web_car_capacity"};
  $.ajax({
        type: 'POST',
        url: '../service/getCapacity.php',
        data: {'car_model':i},
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
        console.log(data)

            //var ss = data[i].adult;
             $('#getcapa').append('<table class="table table-striped table-hover getcapa" width="100%" style="margin: 0;">'+
                                '<tr class="head-table-dialog" align="center" >'+
                                     '<td align="center" width="20%">'+
                                      '<span>Plan</span>'+                                   
                                      '</td>'+
                                      '<td align="center" width="20%">'+
                                        '<span >Adult</span>'+                                    
                                      '</td>'+
                                      '<td align="center" width="20%">'+
                                          '<span >Child</span>'+
                                      '</td>'+ 
                                      '<td align="center" width="20%">'+
                                          '<span >Bag big</span>'+                                    
                                      '</td>'+
                                      '<td align="center" width="20%">'+
                                        '<span >Bag small</span>'+
                                      '</td>'+                              
                                  '</tr>'+
                                  // '<div id= "getcapa2">'+
                                  // '</div>'+
                                  
                              '<table>');
           
             $.each(data , function(i, val) {
                  //if (i == 1) {
                    $('#getcapa2').append(
                      '<table class="table getcapa2" id="table'+data[i].plan+'" width="100%" style="margin: 0;">'+                               
                                  '<tr id="dd'+data[i].plan+'">'+
                                      '<td align="center" width="20%">'+
                                          '<span>'+data[i].plan+'</span>'+
                                      '</td>'+
                                      '<td width="20%">'+
                                        '<div id="adult'+data[i].plan+'">'+

                                        '</div>'+
                                      '</td >'+
                                      '<td width="20%">'+
                                          '<div id="child'+data[i].plan+'">'+
                                          '</div>'+
                                      '</td>'+
                                      '<td width="20%">'+
                                          '<div id="bag_big'+data[i].plan+'">'+
                                          '</div>'+
                                      '</td>'+
                                      '<td width="20%">'+
                                          '<div id="bag_small'+data[i].plan+'">'+
                                          '</div>'+
                                      '</td>'+
                                  '</tr>'+
                                  '</table>'
                              
                  );
                  //}

                 
                 console.log(data[i].adult)

                 if (data[i].adult == 0) {
                          $('#adult'+data[i].plan+'').append('<span>-</span>');
                  }
                  else{
                      for (var y = 0; y <data[i].adult ; y++) {
                        
                        
                            $('#adult'+data[i].plan+'').append('<i class="fa fa-child " aria-hidden="true" ></i>');
                        
                    }
                  }
                 
                  
                 
                  if (data[i].child == 0) {
                          $('#child'+data[i].plan+'').append('<span>-</span>');
                  }
                  else{
                      for (var y = 0; y <data[i].child ; y++) {
                        
                        
                            $('#child'+data[i].plan+'').append('<i class="fa fa-child " aria-hidden="true" ></i>');
                        
                    }
                  }
                    
                  if (data[i].bag_big == 0) {
                          $('#bag_big'+data[i].plan+'').append('<span>-</span>');
                  }
                  else{
                      for (var z = 0; z <data[i].bag_big ; z++) {
                        
                        
                            $('#bag_big'+data[i].plan+'').append('<i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>');
                        
                      }
                  }
                    
                  if (data[i].bag_small == 0) {
                          $('#bag_small'+data[i].plan+'').append('<span>-</span>');
                  }
                  else{
                      for (var a = 0; a < data[i].bag_small ; a++) {
                        
                        
                            $('#bag_small'+data[i].plan+'').append('<i class="fa fa-suitcase " aria-hidden="true" ></i>');
                        
                    }
                  }
              
            });
      $('#capacityss').modal('show')
        }

    });
}
function book(x){
    window.location.href = '/test';
alert(x);
}

