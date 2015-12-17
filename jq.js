$(window).load(function(){
  $("#preloaderImg").fadeOut("slow");
  $("#preloader").delay(1000).fadeOut("slow");

});

$(document).ready(function(){
/*	$("#nav1").click(function(){
    $("#div2").animate({width:"0px"},500,function(){

  $("#div1").css("z-index","99");
  $("#div2").css("z-index","9");
    $("#div2").css("width","100%");
    });
  });*/

	var left;
	var top;

	if($(window).width()>700)
	{
		left=-150;
		top=10;
	}
	else
	{
		left=-110;
		top=5;	
	}
	
$("#nav1").click(function(){
  if(!$("#div6").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
      $("#div6").css("visibility","visible");
      $(".Top").css("visibility","hidden");
      $(".Top").css("left","0px");
      $(".Top").removeClass("Top");
      $("#div6").addClass("Top");
		$("#content-title").html("Speaktacular 2015:");
		
		$("#nav2").removeClass("active_nav");
	  $("#nav3").removeClass("active_nav");
	  $("#nav4").removeClass("active_nav");
	  $("#nav5").removeClass("active_nav");
	  $("#nav6").removeClass("active_nav");
	  $("#nav1").addClass("active_nav");
		$("#nav1").animate({
      margin:top+"px 0px 0px "+left+"px"
    },100); 
    });  
  }
});

$("#nav2").click(function(){
  if(!$("#div5").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
      $("#div5").css("visibility","visible");
      $(".Top").css("visibility","hidden");
      $(".Top").css("left","0px");
      $(".Top").removeClass("Top");
      $("#div5").addClass("Top");
		$("#content-title").html("Format For Speaktacular 2015:");
		
	  $("#nav1").removeClass("active_nav");
	  $("#nav3").removeClass("active_nav");
	  $("#nav4").removeClass("active_nav");
	  $("#nav5").removeClass("active_nav");
	  $("#nav6").removeClass("active_nav");
	  $("#nav2").addClass("active_nav");
		$("#nav2").animate({
      margin:top+"px 0px 0px "+left+"px"
    },100); 
    });
  }
});

$("#nav3").click(function(){
  if(!$("#div4").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
    $("#div4").css("visibility","visible");
    $(".Top").css("visibility","hidden");
    $(".Top").css("left","0px");
    $(".Top").removeClass("Top");
    $("#div4").addClass("Top");
		$("#content-title").html("Rules & Regulations For Speaktacular 2015:");
		
		$("#nav1").removeClass("active_nav");
	  $("#nav2").removeClass("active_nav");
	  $("#nav4").removeClass("active_nav");
	  $("#nav5").removeClass("active_nav");
	  $("#nav6").removeClass("active_nav");
	  $("#nav3").addClass("active_nav");
		$("#nav3").animate({
      margin:top+"px 0px 0px "+left+"px"
    },100); 
  });
  }
});

$("#nav4").click(function(){
  if(!$("#div3").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
    $("#div3").css("visibility","visible");
    $(".Top").css("visibility","hidden");
    $(".Top").css("left","0px");
    $(".Top").removeClass("Top");
    $("#div3").addClass("Top");
		$("#content-title").html("History Of Speaktacular:");
		
		$("#nav1").removeClass("active_nav");
	  $("#nav2").removeClass("active_nav");
	  $("#nav3").removeClass("active_nav");
	  $("#nav5").removeClass("active_nav");
	  $("#nav6").removeClass("active_nav");
	  $("#nav4").addClass("active_nav");
		$("#nav4").animate({
      margin:top+"px 0px 0px "+left+"px"
    },100); 
  });
  }
});

$("#nav5").click(function(){
  if(!$("#div2").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
    $("#div2").css("visibility","visible");
    $(".Top").css("visibility","hidden");
    $(".Top").css("left","0px");
    $(".Top").removeClass("Top");
    $("#div2").addClass("Top");
		$("#content-title").html("Contact Us:");
		
		$("#nav1").removeClass("active_nav");
	  $("#nav2").removeClass("active_nav");
	  $("#nav3").removeClass("active_nav");
	  $("#nav4").removeClass("active_nav");
	  $("#nav6").removeClass("active_nav");
	  $("#nav5").addClass("active_nav");
		$("#nav5").animate({
     margin:top+"px 0px 0px "+left+"px"
    },100); 
  });
  }
});

$("#nav6").click(function(){
  if(!$("#div1").hasClass("Top"))
  {
    var width=$(window).width()*0.8;
    $(".Top").animate({left:-width},500,function(){
    $("#div1").css("visibility","visible");
    $(".Top").css("visibility","hidden");
    $(".Top").css("left","0px");
    $(".Top").removeClass("Top");
    $("#div1").addClass("Top");
		
		$("#nav1").removeClass("active_nav");
	  $("#nav2").removeClass("active_nav");
	  $("#nav3").removeClass("active_nav");
	  $("#nav4").removeClass("active_nav");
	  $("#nav5").removeClass("active_nav");
	  $("#nav6").addClass("active_nav");
		$("#nav6").animate({
      margin:top+"px 0px 0px "+left+"px"
    },100); 
  });
	    
  }
});


  $(".nav_div").hover( function(){
    $(this).animate({
      margin:top+"px 0px 0px 0px"
    },100);
  },function(){
    $(this).animate({
     margin:top+"px 0px 0px "+left+"px"
    },100);
  });
	
	$("#fb").hover( function(){
		$(this).attr("src","fb.png");
	},function(){
		$(this).attr("src","fb_black.png");
	});
	
	$("#tw").hover( function(){
		$(this).attr("src","t.png");
	},function(){
		$(this).attr("src","t_black.png");
	});
	
	$("#yt").hover( function(){
		$(this).attr("src","yt.png");
	},function(){
		$(this).attr("src","yt_black.png");
	});
	
	$("#tsec").hover( function(){
		$(this).attr("src","TSEC-LOGO-transparent-BLUE.png");
	},function(){
		$(this).attr("src","TSEC-LOGO-transparent-WHITE.png");
	});
	
	$("#register").click(function(){
		$("#register-form").css("display","block");
		$("#cover").css("display","block");
		$("#close").css("display","block");
	});
	
	$("#close").click(function(){
		$("#register-form").css("display","none");
		$("#cover").css("display","none");
		$("#close").css("display","none");
	});
	
	
	
});