/**
 * @author merc
 * Print() is made for easy debugging, since I absolutely can NOT
 * figure this IDE out.
 */

//pinnard Element is the <p> class specifically for print div
function print( printArgs ){
	//this is so that the console doesn't go off my debug screen
	if (typeof(clearNum) == 'undefined'){
		var clearNum = 0;
	}
	
	//append to printcontainer, iterate line number
	$( "#println" ).append( "<p id='pinnard'>" + printArgs + "</p>" );
	clearNum++;
	
	//check number of terminal lines and reset if over X
	if( clearNum == 54 ){
		document.getElementById("println").innerHTML="";
		clearNum = 0;
	}
}



/*body onload calls this instead of print mainly so I can see
 * if it prints multiple lines in different <p> tags
*/
function printSomething(){
	print( "Hello, Me!" );
	print( "Another line!" );



/*side note: have to have a js script loaded from body onload, otherwise nothing
 * will execute, not even a jquery object event
 */


}