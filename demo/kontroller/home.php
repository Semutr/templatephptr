<?php
	$tema = new template('home.tpl');	// template aktarım yapıldı.
	
	$tema->data['title'] = 'Ana Sayfa';	// sayfa adımız
	$tema->data['yazi']  = 'Burası Ana sayfasıdır.';	// içerik yazımız

	$tema->render();	// ekrana bastır.
?>