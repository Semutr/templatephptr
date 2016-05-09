<?php
class Template {
   public $data = array(); // data ile stringleri ay�rmak i�in kullan�l�r.
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
			trigger_error('Hata: Tema y�klenemedi '. $this->template .'!');
			exit();	
    	}
   }
   // template verileri yazd�r
   public function render() {
  		extract($this->data);
  		require($this->template);
   }
}
?>