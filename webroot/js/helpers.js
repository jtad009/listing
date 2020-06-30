
    
    /************************
	 * 
	 * 
	 * HELPER FUNCTION 
	 ************************/
	/**
	 * Format numbers
	 * @param {*} element 
	 */
	var  addCommas  = (element) => {
		var nStr;
		
		if(typeof element !== 'string') { 
			nStr = element.val();
		} else {
			nStr = element;
		}
		
		nStr += '';
		var comma = /,/g;
		nStr = nStr.replace(comma, '');
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		
		if(typeof element !== 'string') { 
			element.val(x1 + x2);
		}
		
		return x1 + x2;
	}
	/**
	 * Validate input is numeric
	 * @param {*} evt 
	 */
	const  validate = (evt) =>{
		var theEvent = evt || window.event;
	  
		// Handle paste
		if (theEvent.type === 'paste') {
			key = event.clipboardData.getData('text/plain');
		} else {
		// Handle key press
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode(key);
		}
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
		  theEvent.returnValue = false;
		  if(theEvent.preventDefault) theEvent.preventDefault();
		}
	  }
		/**
		* Check if a number is between a minima and a maxima
		* @param {*} x 
		* @param {*} min 
		* @param {*} max 
		*/
	const  between = (x, min, max) => { return x >= min && x <= max;}