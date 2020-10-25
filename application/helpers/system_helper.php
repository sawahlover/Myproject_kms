<?php
if(! function_exists('set_label')){
	function set_label($label,$keterangan=null){
		$ci =& get_instance();
		$ci->get_label = '<span class="label-title">'.$label.'</span> <small>'.$keterangan.'</small>';
		$ci->get_title = strip_tags($label);
		$ci->desc=$keterangan;
	}
}
if(! function_exists('get_label')){
	function get_label(){
		$ci =& get_instance();
		return $ci->get_label;
	}
}
if(! function_exists('get_desc')){
	function get_desc(){
		$ci =& get_instance();
		return $ci->desc;
	}
}
if(! function_exists('get_title')){
	function get_title(){
		$ci =& get_instance();
		return $ci->get_title==''?'':$ci->get_title;
	}
}
function add_js($add_js){
	$ci =& get_instance();
	$ci->path_js = $add_js;
}
function add_css($add_css){
	$ci =& get_instance();
	$ci->path_css = $add_css;
}
function asset_js(){
	$ci =& get_instance();
	$js ='';
	if(!empty($ci->path_js)){
		foreach($ci->path_js as $phat_js){
			$js .= "\n\t\t".'<script src="'.base_url().'assets/'.$phat_js.'" type="text/javascript"></script>';
		}
		
	}
	echo $js;
}
function asset_css(){
	$ci =& get_instance();
	$css ='';
	if(!empty($ci->path_css)){
		foreach($ci->path_css as $phat_css){
			$css .= "\n\t\t".'<link href="'.base_url().'assets/'.$phat_css.'" rel="stylesheet" type="text/css"/>';
		}
	}
	echo $css;
}

?>