<?php
function opt_category($val=null){
    $opt='';
    $CI =& get_instance();
    $list=$CI->db->select("*")->from('tb_category')->order_by('category','asc')->get();
    foreach ($list->result_array() as $l) {
        # code...list
        $opt.="<option value='".$l['id_category']."'";
        if($val != null){
            if($l['id_category']==$val){
                $opt.='selected';
            }
        }
        $opt.=">".$l['category']."</option>";
    }
    return $opt;
}

?>