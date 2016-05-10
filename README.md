# templatephptr
Php Template Class TR - Basit ve kullanışlı

# Kullanımı TR
Not: template mantığı aşağıdaki şekildedir. Localhost ve web üzeri görüntüleyiniz.
- Kullanımı klasik ve kolaydır. Gayet kullanışlı template class dır.
- Template yanında benzersiz stringler kullanabilrisiniz. $tema->data['...'] gibi

# Php sayfanıza ekleyiniz.

```sh
$tema = new template('home.tpl');	// template aktarım yapıldı.

$tema->data['title'] = 'Ana Sayfa';	// sayfa adımız
$tema->data['yazi']  = 'Burası Ana sayfasıdır.';	// içerik yazımız

$tema->render();	// ekrana bastır..
```

# Tpl sayfasına ekleyiniz.
```sh
- <?php echo $title; ?>
- <?php echo $yazi; ?>
```

# Ekstra * Bilgi Amaçlı *
```sh

  echo $title; // yerine
  
  if ($title) {
    echo $title;
  }else{
    echo 'ben title';
  }
  
  .....
  
  foreach($title as $baslik) {
    echo $baslik;
  }

- Gibi stringden gelen verinin boş olması ve Sql veya diğer gelen verileri çoğaltma işlemi yapabilirsiniz.

```

# Kullanılan String çıktısı
```sh
  - <?php echo $title; ?>
  - <?php echo $yazi; ?>
```
# Kullanılmayan String çıktısı !!!
```sh
  - <?php echo $this->title; ?>
  - <?php echo $this->yazi; ?>
  - #title#
  - #yazi#
  - {$title}
  - {$yazi}
```
