<?php
class Common_Model extends CI_Model {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

	function form_post()
	{
		$array['location'] 	= 'Destinasi Wisata';
		$array['hotel']		= 'Hotel';

		return $array;
	}

	function form_algorithm()
	{
		$array['cheapest'] = 'Algoritma Cheapest Insertion Heuristic';
		$array['dashboard']		= 'Algoritma Simulated Annealing';
		$array['kunang2']		= 'Algoritma Kunang-kunang';
		$array['cat']		= 'Algoritma Cat';

		return $array;
	}

	function form_visitingTime()
	{
		$array['3600'] = '1 jam';
		$array['7200'] = '2 jam';
		$array['10800'] = '3 jam';

		return $array;
	}

	function get($fn, $id)
	{
		$array = $this->$fn();

		if(isset($array[$id]) && !empty($id)) return $array[$id];
		else return '';
	}

	function add_logs($mod, $act, $id)
	{
		$ci = get_instance();
		$ci->load->helper('ycode');

		$user = y_info_login();

		$this->db->query("INSERT INTO logs VALUES ('', NOW(), '$mod', '$act', '$id', '".$user->user_id."')");
	}
}
?>
