/**
 * @author mercalus
 * 
 */
function setStage(){
	var stagesMoving = setInterval(function(){
		setStageRepeat();
	},200);
}

//main function that repeats @ X interval set above
function setStageRepeat(){
	var stageHeight = setStageHeight();
	var stageWidth = $(window).width();
	//print(stageWidth + "x" + stageHeight);
	
	/*Do something else here if height is under 500,
	 * like just making everything scale in its own class or something
	 */
	//check height is not under 500
	if( stageHeight < 500 ){
		$("#error").append("<h2 id='whitetext'>ERROR</h2><p id='whitetext'>Your screen resolution is not tall enough to use this website.<br/><br/>Try zooming out the page.</p><br/>");
	}
	else{
		$("#error").empty();
	}
	
	//load main content page container
}

function setStageHeight(){
	//get window height at load
	var currentWindowHeight = $(window).height();
	
	//set #main
	var setNewHeight = currentWindowHeight - 263;
	$("#main").css("height",setNewHeight);
	
	//set #pagecontainer
	var pageContainerHeight = setNewHeight * 0.8;
	$("#pagecontainer").css("height",pageContainerHeight);
	
	//set #finalinner
	var finalContainerHeight = pageContainerHeight - 160;
	$("#finalinner").css("height",finalContainerHeight);
	
	return setNewHeight
	
}