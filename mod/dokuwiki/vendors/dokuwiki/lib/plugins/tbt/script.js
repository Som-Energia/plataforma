// TBT javascript extensions: rgareus 2008
// TBT javascript prototype: Jaromil 2007
// reference javascript typewriter documentation: F. Permadi 2002
// GNU GPL


function TBT() {
  this.setRowCarriageReturn = setRowCarriageReturn;
  this.setXhtml = setXhtml;
  this.setSpeed = setSpeed;
  this.startTyping = startTyping;
  this.feed = feed;
  var currentChar;
  var destination;
  var cur_x;
  var cur_y;
  var row;
  var col;
  var text;
  var render_text;
  var rowsize;
  var colsize;
  var recording;
  var cr;
  var cc;
  var rowcr=0; // config option; do a CR (\r) when moving the cursor up/down
  var xhtml=0; // html or xhtml
  var speed=1; // time factor. 
    
  function setSpeed(s) {
    if (s> 0.01 && s< 20) this.speed=s;
    else speed=1.0;
  }

  function setXhtml(onoff) {
    xhtml=onoff?true:false;
  }

  function setRowCarriageReturn(onoff) {
    rowcr=onoff?true:false;
  }

  function startTyping(destinationParam, tbtrecord) {
    currentChar = 0;
    destination = destinationParam;
    recording   = tbtrecord;

    // global text positions
    row = 0;
    col = 0;
    // cursor positions
    cur_x = 0;
    cur_y = 0;
    // length counters
    rowsize = 0;
    colsize = 0;
    cr = 0;
    cc = 0;
    
    // text bidimensional array
    text = new Array();
    text[0] = new Array();
    // text render buffer
    render_text = "";    

    setTimeout(this.feed, speed*recording[currentChar][1] );
  }

  function feed() {
    var dest = document.getElementById(destination);
    
    if (dest) {
	// && dest.innerHTML)
	
	/* TODO: handle movement keys:
	   KEY_BACKSPACE 275, 127, 272
	   KEY_PAGE_UP 261 ; KEY_PAGE_DOWN 262
	   KEY_HOME 263 ; KEY_DELETE 275
	   port the abstract_console from slw in js
	*/
	
	// get the next char
	switch( recording[currentChar][0] ) {
	case 10:  // NEWLINE
	case 13:  // RETURN
	    cur_y++; row++;
	    cur_x = 0; col = 0;
	    if(row >= text.length) {
		text[row] = new Array();
	    }
	    break;

	case 8: // standard ASCII BACKSPACE
	case 127: // other low level BACKSPACE codes
	case 272: // (APPLE BACKSPACE)
	case 275: // (SOMETIMES!?)

	    if(col > 0) // delete if not at the beginning of line
		text[row].splice(col-1,1);
	    
	    if(cur_x > 0) {
		cur_x--;
		col--;
	    } else { // backspace at the beginning of a line
		     // move everything up one line
		// TODO
	    }
	    break;

	case 257: // UP
	    if(row <= 0) break;
	    cur_y--; row--; 
	    if (rowcr) { col=0; cur_x=0; }
	    break;
	case 258: // DOWN
	    if(row >= text.length) break;
	    cur_y++; row++;
	    if (rowcr) { col=0; cur_x=0; }
	    break;
	case 259: // LEFT
	    if(cur_x <= 0) break;
	    cur_x--;
	    col--;
	    break;
	case 260: // RIGHT
	    //	    if(cur_x >= text[row].length) break;
	    cur_x++;
	    col++;
	    break;

	default:
		if (!text[row]) text[row] = new Array();
	    text[row].splice(col,0,recording[currentChar][0]);
	    cur_x++; col++;
	    break;
	}

	// RENDER TEXT
	render_text = "";

	rowsize = text.length;
	for(cr = 0; cr < rowsize; cr++) {
	    
	    colsize = text[cr].length;

	    if(cur_y == cr) { // cursor row

		for(cc = 0; cc < colsize; cc++) {
		    
		    if(cur_x == cc) { // draw cursor
			    render_text += "<u>";
			    render_text += String.fromCharCode( text[cr][cc] );
			    render_text += "</u>";
		    } else // not yet on cursor
			render_text += String.fromCharCode( text[cr][cc] );

		}
		
		// draw cursor at the end of line
		if(cur_x >= colsize) render_text += "_";
		
	    } else  // no need to draw the cursor
		for(cc = 0; cc < colsize; cc++)
		    render_text += String.fromCharCode( text[cr][cc] );


	    // newline
	    render_text += xhtml?"<br/>":"<br>";
	}

	// render_text += String.fromCharCode( recording[currentChar][0] );
	dest.innerHTML = render_text;
	


	// DOM compliant alternative:
	//	var textNode=document.createTextNode(text);
	//	dest.replaceChild(textNode, dest.childNodes[0]);
	
	
	
	// go to the next entry
	currentChar++;
	
	
	if (currentChar >= recording.length) {
	    
	    // end of record, restart after 5 seconds
	    currentChar=0;
	    render_text="";

	    // clear all text buffer
	    for(cr=0; cr < text.length; cr++)
		delete text[cr];
	    delete text;

	    // end of text
	    
	} else {
	    
	   // RECURSION IS TIME  -jrml 31jan2007
	    setTimeout(feed, speed*recording[currentChar][1] );
	}
    }
  }
};
//Setup VIM: ex: sw=4 ts=8 enc=utf-8 :
