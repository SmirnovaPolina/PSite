<?php
Class ModelNews extends Model
{
	
	public function getNews(){
		
		$sql = $this->db->query('SELECT * FROM news');
		return $sql->fetchAll();
		
	}
	
}
?>