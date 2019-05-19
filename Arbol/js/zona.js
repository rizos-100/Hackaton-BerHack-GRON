var options = {
		0 : ["Palo loco","Encino Quiebra Hacha","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"]/*,
		1 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		2 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		3 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		4 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		5 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		6 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"],
		7 : ["Espuania","Palo loco","Querecus Rugosa","Pingüica","Flor Tocada","Cola de Caballo","Mira Sol"]*/
}

$(function(){
	var fillSecondary = function(){
		var selected = $('#primary').val();
		$('#secondary').empty();
		options[selected].forEach(function(element,index){
			$('#secondary').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#primary').change(fillSecondary);
	fillSecondary();
});