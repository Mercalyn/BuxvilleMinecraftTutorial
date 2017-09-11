/**
 * @author mercalus
 * 
 */

function loadScripts(){
	//printcontainer
	//$("#printcontainer").hide();
	
	//stage dimensions & banner init
	loadBannerImgs();
	setStage();
	
	//fadeTo is set to 750,0 normally
	$("#shadow").fadeTo(0,0,function(){
		$(this).hide();
	});
	$("#pageinnersecond").hide();
	
	//load events when page is done
	$(document).ready(function(){
		js_events();
	});
}

function js_events(){
	//footer onclick
	$(".footermember").click(function(){
		var userHasSelected = $( this ).attr( "id" );
		$("#shadow").fadeTo(450,1);
		
		//switch here
		switch( userHasSelected ){
			case "terms":
				$("#shadow").load("../content/terms.txt");
				break;
			case "contact":
				$("#shadow").load("../content/contact.txt");
				break;
			case "site":
				$("#shadow").load("../content/site.txt");
				break;
			default:
				print("error");
		}
	});
	
	//footer leaving, .shadowmember for just the button
	$("#shadow").click(function(){
		$("#shadow").fadeTo(450,0,function(){
			$(this).hide();
			$(this).empty();
		});
	});
	
	//load first page and page mover scripts
	arrowPageMove();
	
	//side arrows hover
	arrowPageHover();	
}

function arrowPageHover(){
	$("#pagesideleft").hover(function(){
		$(".pageleftout").animate({left:"-10px"},100);
		$(".pageleftin").animate({left:"2px"},100);
	},function(){
		$(".pageleftout").animate({left:"0px"},100);
		$(".pageleftin").animate({left:"20px"},100);
	});
	
	//right side now
	$("#pagesideright").hover(function(){
		$(".pagerightout").animate({right:"-10px"},100);
		$(".pagerightin").animate({right:"2px"},100);
	},function(){
		$(".pagerightout").animate({right:"0px"},100);
		$(".pagerightin").animate({right:"20px"},100);
	});
}

function loadBannerImgs(){
	//load graphics
	var spinners = Raphael( document.getElementById("rotaterone"),256,256 );
	var spinnerIn = spinners.image( "img/innercircletwo.png",0,0,256,256 );
	var spinnerOut = spinners.image( "img/outercircle.png",0,0,256,256 );
	
	//set beginning rotation
	var rotationNum = 0.0;
	
	//begin rotations, to save on CPU I've combined both spinners
	var stopRotation = setInterval(function(){
		if( rotationNum>359.8 ){
			//clearInterval( stopRotation );
			rotationNum = 0.0;
		}
		else{
			rotationNum += 0.2;
		
			//rotate
			spinnerIn.transform( "r" + rotationNum );
			spinnerOut.transform( "r-" + rotationNum );
		}
	},20);
}

function arrowPageMove(){
	//done automatically
	var pageArray = jQuery.makeArray();
	$.get( "../content/p0/page.txt", function( data ) {
		pageArray[0] = data;
  		$( "#pageinner" ).html( pageArray[0] );
  		print( pageArray.length );
	});
	
	//$("#pageinner").load("../content/p0/page.txt");
	
	//pageside click events
	var stageWidth = 0;
	
	//user clicked left arrow
	$("#pagesideleft").click(function(){
		stageWidth = $(window).width();
		
		if( $("div").hasClass( "pageleftout" ) ){
			$( "#pageinnersecond" ).css( "left",0-(stageWidth*2)-300 );
			$( "#pageinnersecond" ).show();
			$( "#pageinnersecond" ).animate({left:"50%"},750,"easeInOutQuint");
			$( "#pageinner" ).animate({left:stageWidth+300},750,"easeInOutQuint",function(){
				$( this ).css( "left","50%" );
				
				//right here make pageinner and its second switch data
				
				$( "#pageinnersecond" ).css( "left",stageWidth+300 );
			});
		}
		else{
			//do nothing
		}
	});
	
	//user clicked right arrow
	$("#pagesideright").click(function(){
		stageWidth = $(window).width();
		//remember to not only load upcoming content, but unload past content
		//also grey out both arrows on page scroll
		
		if( $("div").hasClass( "pagerightout" ) ){
			var nextPage = "../content/p" + pageArray.length + "/page.txt"; 
			print( nextPage );
			$( "#pageinnersecond" ).css( "left",stageWidth+300 );
			$( "#pageinnersecond" ).show();
			$( "#pageinnersecond" ).animate({left:"50%"},750,"easeInOutQuint");
			$( "#pageinner" ).animate({left:0-(stageWidth*2)-300},750,"easeInOutQuint",function(){
				$( this ).css( "left","50%" );
				
				//right here make pageinner and its second switch data
				
				$( "#pageinnersecond" ).css( "left",stageWidth+300 );
			});
		}
		else{
			//do nothing
		}
		
		//print( pageArray.length );
		/*$.get( nextPage, function( data ) {
			
  			//$( "#pageinnersecond" ).html( pageArray[0] );
  			//print( pageArray.length );
  			
		});*/
	});
}

