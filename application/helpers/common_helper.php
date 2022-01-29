<?php

function get_user_name($user_id)
{
    $CI =& get_instance();
	$res=$CI->db->query('select fname,lname from users where id='.$user_id)->row();

	if(!empty($res)){
	echo $res->fname;
	} else {
		echo "";
	}
}

function get_user_name1($user_id)
{
    $CI =& get_instance();
	$res=$CI->db->query('select fname,lname from users where id='.$user_id)->row();

	if(!empty($res)){
	return $res->fname;
	} else {
		echo "";
	}
}


function getIndianCurrency(float $number)
{ if($number>0)
  {

  
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = ucfirst(implode('', array_reverse($str)));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
    }
}


function get_column($select,$table,$where=false,$return=false){
	$CI =& get_instance();
	$CI->db->select($select);
	if($where){
		$CI->db->where($where);
	}
	$row = $CI->db->get($table)->row();
	if($return){
		return isset($row->$return) ? $row->$return : '';
	} else {
		return $row;
	}
}

function update_table($table,$rr,$where)
{
    $CI =& get_instance();
    $CI->db->where($where);
    $CI->db->set($rr);
	$CI->db->update($table);
	
	return $CI->db->affected_rows();
}

function get_result($select,$table,$where=false,$single=false,$order=''){
	$CI =& get_instance();
	$CI->db->select($select);
	if($where){
		$CI->db->where($where);
	}
	if($order){
		$CI->db->order_by($order);
	}
	if($single){
		return $CI->db->get($table)->row();
	} else {
		return $CI->db->get($table)->result();
	}
}

function get_count($table,$where=false){
	$CI =& get_instance();
	$CI->db->from($table);
	if($where){
		$CI->db->where($where);
	}
	return $CI->db->count_all_results();
}

function make_option_tree($result,$parent,$selected_id=0,$separator=''){
	$html = '';
	foreach($result as $item){
		if($item->parent_id == $parent){
			$selected_text = ($selected_id == $item->id) ? ' selected' : '';
			$html .= '<option value="'. $item->id .'"'. $selected_text .'>' . $separator . ' ' . $item->text . '</option>';
			$html .= make_option_tree($result,$item->id,$selected_id,$separator . '-');
		}
	}
	return $html;
}

?>