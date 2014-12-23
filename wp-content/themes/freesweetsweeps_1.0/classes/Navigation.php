<?php
/**
 * @name Navigation
 * @since 09/08/2012
 * @author Constantine Alexeyev
 * @copyright adjump media
 * @version 1.0 
 * 
 */
 
 class Navigation {

   
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
	
	public function get_previous_post($excludeCategory=NULL){
		if($excludeCategory!=null){
		$category=new Category();
        $catId=$category->get_category_id($excludeCategory);
		}
		next_post('%',
 '<span data-transition="slide" data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-l" data-inline="true" data-mini="true" style="margin-right:6.7em">Previous</span>', 'no', 'no',1, $catId); 
	}
	
	public function get_next_post($excludeCategory=NULL){
		if($excludeCategory!=null){
		$category=new Category();
        $catId=$category->get_category_id($excludeCategory);
		}
		previous_post('%',
'<span data-transition="slide" data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-r" data-inline="true" data-iconpos="right" data-mini="true">&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;</span>', 'no', 'no',1, $catId);
	}
	
  } ?>