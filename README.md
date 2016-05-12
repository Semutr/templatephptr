# templatephptr
Php Template Class TR - Basit ve kullanışlı

# Kullanımı TR
Not: template mantığı aşağıdaki şekildedir. Localhost ve web üzeri görüntüleyiniz.
- Kullanımı klasik ve kolaydır. Gayet kullanışlı template class dır.
- Template yanında benzersiz stringler kullanabilrisiniz. $tema->data['...'] gibi

# Php sayfanıza ekleyiniz.

```sh
$tema = new template('home.tpl');	// template aktarım yapıldı.

$tema->data['title']  = 'Ana Sayfa';	// sayfa adımız
$tema->data['yazi']   = 'Burası Ana sayfasıdır.';	// içerik yazımız

$tema->render();	// ekrana bastır..
```

# Tpl sayfasına ekleyiniz.
```sh
- <?php echo $title; ?>
- <?php echo $yazi; ?>
```

# Ekstra Şekillendirme * Bilmeyenler için *

```sh
$tema = new template('home.tpl');	// template aktarım yapıldı.

$arr = array();
$sql = mysql_query('SELECT * FROM `urunler` where `id`'); // db işlevi yapıldı
  while($cek=mysql_fetch_array($sql)) { 
  	$arr[] = $cek;
  }


$tema->data['title']  = 'Ana Sayfa';	// sayfa adımız
$tema->data['yazi']   = 'Burası Ana sayfasıdır.';	// içerik yazımız

$tema->data['urunler']= $arr; // bu string tpl sayfamıza gönderdik. 

$tema->render();	// ekrana bastır..

----- TPL SAYFAMIZ ----

<?php echo $title; ?>
<?php echo $yazi; ?>

// ürünleri tekrarladık. Daha fazla işlevler kullanabilirsiniz.

<?php foreach ($urunler as $uruns) { ?>
  <li><a href="<?php echo $uruns['url']; ?>"><img src="<?php echo $uruns['logo']; ?>" alt="<?php echo $uruns['title']; ?>"/></a></li>
<?php } ?>


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
  
  foreach($title as $baslik) { // sadece db ile yapılabilir.
    echo $baslik;
  }

- Gibi stringden gelen verinin boş olması ve Sql veya diğer gelen verileri çoğaltma işlemi yapabilirsiniz.

```

# Kullanılan String
```sh
  - <?php echo $title; ?>
  - <?php echo $yazi; ?>
```
# Kullanılmayan String !!!
```sh
  - <?php echo $this->title; ?>
  - <?php echo $this->yazi; ?>
  - #title#
  - #yazi#
  - {$title}
  - {$yazi}
```
