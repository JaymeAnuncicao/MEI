// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referÃªncia com o alvo
// Verificar a distÃ¢ncia entre o alvo e o topo
// Animar o scroll atÃ© o alvo

// Scroll suave para link interno
$(' nav a[href^="#"], #home a, #funcionalidades a').click(function(e){
	e.preventDefault();
	var id = $(this).attr('href'),
			menuHeight = $('nav').innerHeight(),
			targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - menuHeight
	}, 100);
})