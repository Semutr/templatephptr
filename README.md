# templatephptr
Php Template Class TR - Basit ve kullanışlı

# Kullanımı TR
Not: template mantığı aşağıdaki şekildedir. Localhost ve web üzeri görüntüleyiniz.
- Kullanımı klasik ve kolaydır. Gayet kullanışlı template class dır.
- Template yanında benzersiz stringler kullanabilrisiniz. $tema->data['...'] gibi

# Php sayfanıza ekleyiniz.
  
- $tema = new template('home.tpl');	// template aktarım yapıldı.

- $tema->data['title'] = 'Ana Sayfa';	// sayfa adımız
- $tema->data['yazi']  = 'Burası Ana sayfasıdır.';	// içerik yazımız

- $tema->render();	// ekrana bastır..

# Tpl sayfasına ekleyiniz.

- <?php echo $title; ?>
- <?php echo $yazi; ?>

---------------------------------------

# Kullanılan String çıktısı
- <?php echo $title; ?>
- <?php echo $yazi; ?>

# Kullanılmayan String çıktısı !!!
- <?php echo $this->title; ?>
- <?php echo $this->yazi; ?>
- #title#
- #yazi#
- {$title}
- {$yazi}
