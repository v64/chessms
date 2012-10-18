<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    function load($view = '' , $vars = array(), $return = FALSE){
    
        $CI =& get_instance();
        $vars['template_contents'] = $view;
        return $CI->load->view('templates/chessms', $vars, $return);
    }
}
