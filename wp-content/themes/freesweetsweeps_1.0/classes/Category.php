<?php
/**
 * @name Category
 * @since 09/08/2012
 * @author Constantine Alexeyev
 * @copyright adjump media
 * @version 1.0 
 * 
 */
 
 class Category {

   
    private $id;
    private $id2;
  

    public function __construct($id = NULL, $id2 = NULL) {
        


        $this->id = $id;
        $this->id2 = $id2;
		
	
    }

    public function __autoload($className) {
    if (file_exists(TEMPLATEPATH . DS .'classes' . DS . $className . '.php')){
    require_once(TEMPLATEPATH . DS .'classes' . DS . $className . '.php');
       }
    }

    public function __set($name, $value) {
        return $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
	
	public function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}
	
	
	
  } ?>