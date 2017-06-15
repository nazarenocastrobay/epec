$("#indexmodal").modal("show");
var pregunta = "¿QUIERES QUE ESO CAMBIE?"
var textoNo = "Has respondido que no tienes un contacto que pueda hacerte entrar a EPEC a donde solo se ingresa por ACOMODO.";
var textoSi = "Has respondido que tienes un contacto que puede hacerte entrar a EPEC por ACOMODO. Es una injusticia que solo unos pocos afortunados tengan este privilegio.";
function appendText(text, target) {
    var txt = $("<h4></h4>").text(text); 
    txt.css("color", "#636363");  // Create with jQuery
    $(target).before(txt);      // Append the new elements 
}
$("#indexmodal button").click(function (e) {
	e.preventDefault();
	var target = $(e.target)
	var preguntas = target.prev();
	var decisora = preguntas.find('h3.decisora');
	var noLabel = decisora.next();
	var no = noLabel.find('input');
	var si = noLabel.next().find('input');

	if(target.is('button.enviar')){
		var q = $("<h3></h3>").text(pregunta);
		q.addClass("pregunta-epec");
		preguntas.remove();
		target.text('Entrar');
		if(si.prop('checked')){
			appendText(textoSi, target);	
		} else {
			appendText(textoNo, target);
		}
		$(target).before(q);
		setTimeout(function(){
		  target.addClass( "entrar" );
		}, 1000);
		target.removeClass( "enviar" );
		
	} 
	if(target.is('button.entrar')){
		$("#indexmodal").modal("hide");
	}
	
});

