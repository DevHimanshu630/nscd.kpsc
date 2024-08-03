<?php
/**
 * @package Unite Gallery
 * @author Valiano
 * @copyright (C) 2022 Unite Gallery, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNITEGALLERY_INC') or die('Restricted access');


	class UniteElementsBaseUG{
		
		protected $db;
		protected $imageView;
		
		public function __construct(){
			
			$this->db = new UniteGalleryDB();
			$this->imageView = new UniteImageGenerationUG();
			
		}
		
	}

?>