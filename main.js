$(document).ready(function () {

	$('#archivoTXTPalindromos').change(function(){
		var file = this.files[0];
		$('#palindromos').empty();
	  	var reader = new FileReader();
	  	reader.onload = function(progressEvent){
		    // Leemos línea por línea
		    var lines = this.result.split('\n');
		    for(var line = 0; line < lines.length; line++){
		    	//console.log(lines[line]);
		    	tokens = lines[line].split(" ");
		    	for(var i=0; i<tokens.length; i++) {
		    		//console.log(tokens[i])
		    		$('#tablaResultadosPalindromos tbody').append('<tr><td class="text-center">'+tokens[i]+'</td><td class="text-center">'+esPalindromo(tokens[i])+'</td></tr>');
		    	}
		    }
	  	};
	  	reader.readAsText(file);
	});
	
	$('#archivoTXTBalance').change(function(){
		var file = this.files[0];
		var pila = [];
		$('#balance').empty();
	  	var reader = new FileReader();
	  	reader.onload = function(progressEvent){
		    // Leemos línea por línea
		    var lines = this.result.split('\n');
		    for(var line = 0; line < lines.length; line++){
		    	//console.log(lines[line]);
		    	tokens = lines[line].split(" ");
		    	for(var i=0; i<tokens.length; i++) {
		    		//console.log(tokens[i])
		    		$('#tablaResultadosBalance tbody').append('<tr><td class="text-center">'+tokens[i]+'</td><td class="text-center">'+balanceoCorrecto(tokens[i], pila)+'</td></tr>');
		    		pila = [];
		    	}
		    }
	  	};
	  	reader.readAsText(file);
	});


	function esPalindromo (palabra) {
		var aux = palabra;
		if (aux.split("").reverse().join("") == palabra)
			return true;
		return false;
	}

	function balanceoCorrecto(str, stack) {
		flg = true;
		for(var i=0; i<str.length; i++) {
			if(str.charAt(i)=='(' || str.charAt(i)=='[' || str.charAt(i) == '{') 
				stack.push(str.charAt(i));
			if(str.charAt(i)==')' || str.charAt(i)==']' || str.charAt(i) == '}') {
				if(stack.length == 0) {
					flg = false;
					break;
				}
				var current = stack.pop();
				if(str.charAt(i)==')' && current=='(' || str.charAt(i)==']' && current=='[' || str.charAt(i) == '}' && current == '{')
					//stack.pop();
					continue;
				else {
					flg=false;
					stack.push(current);
					break;
				}
			}
		}
		return flg;
	}


});