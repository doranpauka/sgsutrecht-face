var a = Array;
$(document).ready(function(){
		var topoffset = 50;	
		var direction = 1;
		$(".tagcloud li").each(function(){
			$(this).css("top",topoffset + "px");
			topoffset += 60;
			
			if(direction == 1){
				$(this).css("left","-100px");
				direction = 0;
			}else{
				$(this).css("left","50px");
				direction = 1;
			}
		});
	
		$("button").click(function(e){
			if($(this).find("a").hasClass("subitem")){
				e.preventDefault();
			}else{
				var href = $(this).find("a").attr("href");
				if(href != undefined){
					location.href = href;
				}	
			}
			
		});
		
		$(".agendatitle").each(function(){
			var href = $(this).find("a").attr("href");
			$(this).parent().parent().css("cursor","pointer");
			$(this).parent().parent().click(function(){
				location.href=href;
				
			});
		});
	
	
	
	//rewrite sidenav{
		$("#sidenav li a").each(function(){
			$(this).unwrap();
			$(this).html("<i></i><label>" + $(this).html() + "</label>");
			$(this).addClass("item");
			$(this).find("i").attr("class",$(this).attr("class"));
			$(this).removeClass("item");
			$(this).removeClass("active");
			$(this).removeAttr("class");
			$(this).addClass("item");
		});
		
		
		$(".inspraak").click(function(){
			window.open("http://inspraak.sgsutrecht.nl");
		});
		
		$("#wordlid").click(function(){
			window.open("https://sgs.codex.link/index.php/publicly/subscribeform");
		});
		
		$(".sponsor").click(function(){
			window.open("http://rijschoolvlam.nl/");
		});
		
		var id = $(".field-name-field-linkid").find(".field-item").text();
		$(".field-name-field-linkid").find(".field-item").html("<a href='http://sgsutrecht.nl/sgform/index.php?id=" + id + "' target='_new'><button>Meld je aan!</button></a>");
	
		$("#leesverder").click(function(){
			var t = $("#contentview").scrollTop();
			$("#contentview").animate({
				scrollTop: t + 400
		   	},500);
		});
		
		$("#leesterug").click(function(){
			var t = $("#contentview").scrollTop();
			$("#contentview").animate({
				scrollTop: t - 400
		   	},500);
		});
		
		$("#kijkje").click(function(){
	  		$("#maintenance").fadeOut(2000);
	  });	
	
		$("#facebook").click(function(){
	    window.open("https://www.facebook.com/sgsutrecht");
    });

		$("#linkedin").click(function(){
	    window.open("https://nl.linkedin.com/in/sgsutrecht");
    });





//	$(".submenuitem").each(function(){
		//$(".submenuitem").parent().css("position","absolute");
    	//var pos = $(this).parent().prev().position();
//    	var left = pos.left;
//    	$(".submenuitem").parent().css("left", left + "px");	
//	});
    
//    var ofst = -40;
//    var up = true;
    
//    $(".section").each(function(){
//      $(this).find(".submenuitem").each(function()
//      {
//        if($(this).has("a"))
//        {
//          $(this).parent().css("margin-top",ofst + "px");
//         if(up)
//         {
            //ofst = ofst - 60;
          //}else{
//            ofst = ofst + 60;
          //}
//      
        //}
    //});
    
    //if(up){
//      ofst = 40;  
    //}else{
//      ofst = -40;  
    //}
    
//    });
    

  //    $(".submenuitem").parent().fadeOut();
        
    


});