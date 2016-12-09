<?php

if (!function_exists('dump')) {
    function dump($var, $label = 'Dump', $echo = TRUE) {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
     
        $output = preg_replace("/cc0000/", "16a085", $output);
        $output = preg_replace("/\<i/", "<i style='color: #95a5a6;'", $output);
        $output = preg_replace("/size\=/", "", $output);
        $output = preg_replace("/length\=/", "", $output);
        $output = '<pre style="background: #F9F9F9; color: #2c3e50; border: 1px solid #bdc3c7; padding: 20px; margin: 20px 10px; text-align: left;">' . $label . ' => ' . $output . '</pre>';
        
        if ($echo == TRUE) {
            echo $output, PHP_EOL;
        } else {
            return $output;
        }
    }
}

if (!function_exists('debug')) {
    function debug() {
        $CI = get_instance();
        $CI->output->set_profiler_sections(array(
			'get' => FALSE,
			'post' => FALSE,
	        'queries' => TRUE,
	        'benchmarks' => TRUE,
	        'config'  => FALSE,
			'controller_info' => FALSE,
			'http_headers' => FALSE,
			'memory_usage' => FALSE,
			'uri_string' => FALSE,
			'session_data' => TRUE,
			'query_toggle_count' => TRUE
		));
	    $CI->output->enable_profiler(TRUE);
    }
}

if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump($var, $label, $echo);
        exit();
    }
}