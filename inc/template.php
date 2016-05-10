<?php
class Template {
   public $data = array(); // data ile stringleri ayırmak için kullanılır.
   protected $template;
	
   public function __construct($template) {
		$this->template = DIR_TPL . $template;
		
		if (file_exists($this->template)) {
			
			extract($this->data);
			
      		ob_start();
      
	  		include($this->template);
      
	  		$content = ob_get_contents();

      		ob_end_clean();

			return $content;
			
    	} else {
			trigger_error('Hata: Tema yüklenemedi '. $this->template .'!');
			exit();	
    	}
   }
   // template verileri yazdır
   public function render() {
  		extract($this->data);
  		require($this->template);
   }
}
?>
