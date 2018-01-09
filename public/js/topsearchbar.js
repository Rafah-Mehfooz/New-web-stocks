                     
$(document).ready(function() 
{ 
    //suggestion for top search from data
    var mydata; 
    $.ajax({ url:"summaryTable.json",cache:false,success:function(result)
    {
        mydata=result;
    }});

    $('#top-search').keyup(function()
    {
        $("#drop2").html("");
        var data=mydata.data;
        var inputval=$('#top-search').val();
        for(var i=0;i<data.length;i++)
        {
            var str=data[i][0];
            var chk=new RegExp("^"+inputval+".*$","i");
            if( inputval === "" )
            { 
                $("#drop2").css("display","none");
                break;
            }
            else if(str.search(chk)==0)
            {
                $("#drop2").css("display","block");
                $("#drop2").append("<li class='slist-style'><a class='directing' href='"+data[i][8]+"'>"+str+"</a></li>");
            }
        }                
        
    });


    //onfocus suggesting
    
    $('#top-search').focus(function()
    {
        $("#drop2").html("");
        var data=mydata.data;
        var inputval=$('#top-search').val();
        for(var i=0;i<data.length;i++)
        {
            var str=data[i][0];
            var chk=new RegExp("^"+inputval+".*$","i");
            if( inputval === "" )
            { 
                $("#drop2").css("display","none");
                break;
            }
            else if(str.search(chk)==0)
            {
                $("#drop2").css("display","block");
                $("#drop2").append("<li class='slist-style'><a href='"+data[i][8]+"'>"+str+"</a></li>");
            }
        }                
        
    });


    $("#drop2").width($("#top-search").innerWidth());

    $(window).resize(function(){       
        $("#drop2").width($("#top-search").innerWidth());
    });
});

function foo2(){
 //   $("#drop2").mouseover().not(function(){
  //  $('#drop2').html("");
    
}