<?php

// Handles working with HTML output templates
class View {

	var $v;

	function __construct($v) {
		$this -> v = $v;
	}




	function set($var, $val) {
	$this -> $var = $val;
		 
	}
	//same as above
	function assign($var, $val) {
		$this -> $var = $val;
	}

	function set_array($a) {
		
		foreach ($a as $k => $v){
			$this -> $k = $v;
		}
	}

	

	function __get_vars() {

		ob_start();
		// write content
		extract((array)$this);

		//$old_dir = getcwd();
		$file_dir = dirname($this -> v) . DS;
 
		require ($this -> v);

		$content = ob_get_clean();
		unset($content);
		//ob_end_clean();

		$defined_vars = array();
		$var_names = array_keys(get_defined_vars());

		foreach ($var_names as $var_name) {
			if ($var_name != 'defined_vars' and $var_name != 'this') {
				$defined_vars[$var_name] = $$var_name;
			}
		}
		//chdir($old_dir);
		return $defined_vars;
	}
	function output() {
	return $this->__toString();

	}
	function __toString() {
        extract((array)$this);

        ob_start();


		//	set_include_path(dirname($this -> v) . DS . PATH_SEPARATOR . get_include_path());
		//$old_dir = getcwd();
		$file_dir = dirname($this -> v) . DS;

 
			require ($this -> v);
			$content = ob_get_clean();
 
		return $content;
	}

}
