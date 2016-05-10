<?php
	$tema = new template('servis.tpl');	// template aktarım yapıldı.

	$tema->data['title'] = 'Servis';	// sayfa adımız
	$tema->data['yazi']  = 'Burası servis sayfasıdır.';	// içerik yazımız

	$tema->render();	// ekrana bastır.
?>