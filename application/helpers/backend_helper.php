<?php
if (! function_exists('page_title')) {
    function page_title(){
        $CI =& get_instance(); 
        $seg1 = $CI->uri->segment('1');
        $seg2 = $CI->uri->segment('2');
        $seg3 = $CI->uri->segment('3');

        if (!empty($seg3)){
            echo ucwords(str_replace(str_split('_-'), ' ', $seg3));
        }elseif (!empty ($seg2)) {
            echo ucwords(str_replace(str_split('_-'), ' ', $seg2));
        }else {
            //echo ucfirst(strtolower($seg1));
            echo ucwords(str_replace(str_split('_-'), ' ', $seg1));
            //.ucwords(str_replace(str_split('_-'), ' ', $seg2
        }
    }
}

if (! function_exists('close_tag')) {
    function close_tag(){
        
        $close = '</body></html>';

        return $close;
    }
}

if (! function_exists('get_log')) {
    function get_log($tipe = "", $str = ""){
        $CI =& get_instance();
    
        if (strtolower($tipe) == "login"){
            $log_tipe   = 0;
        }
        elseif(strtolower($tipe) == "logout"){
            $log_tipe   = 1;
        }
        elseif(strtolower($tipe) == "add"){
            $log_tipe   = 2;
        }
        elseif(strtolower($tipe) == "edit"){
            $log_tipe  = 3;
        }
        else{
            $log_tipe  = 4;
        }
    
        // paramter
        $param['log_userid_fk']     = $CI->session->userdata('ses_uid');
        $param['log_tipe']          = $log_tipe;
        $param['log_desc']          = $str;
    
        //load model log
        $CI->load->model('m_log');
    
        //save to database
        $CI->m_log->save_log($param);
    
    }
}