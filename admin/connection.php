<?php
class myClass
{
	var $host = 'localhost';
	var $user = 'root';
	var $pass = '$sitedb.111';
	var $db = '21fahrenheit';
	function myClass()
	{
		$conn = mysql_connect($this->host,$this->user,$this->pass) or die("can not connect");
		mysql_select_db($this->db,$conn);
		$this->conn = $conn;
	}
	function select($sql)
	{
		$data = array();
		$count = 0;
		$result = mysql_query($sql,$this->conn);
		while ($row = mysql_fetch_array($result)) {
			$data[$count] = $row;
			$count ++;
		}
		return $data;
	}
	function transection($sql)
	{
		mysql_query($sql,$this->conn);
	}
}
$obj = new myClass();
session_start();
?>