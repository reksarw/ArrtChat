<?php

class Driver extends PDO{

	private $engine;
	private $host;
	private $database;
	private $user;
	private $pass;
	
	private $result;
	
	public function __construct(){
		self::connect();
	}
	
	public function connect(){
		$this->engine   = 'mysql';
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->database = 'arrtchat';
		
		try {
			$dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
			if($dns){
				parent::__construct( $dns, $this->user, $this->pass );
				//echo "ok";
			}else{
				throw new Exception('Unable to connect');
			}
		}catch(Exception $e){
			echo $e->getMessage();
			exit;
		}
	}
	
	public function select_tabel($table, $rows, $where = null, $order = null, $limit= null){
		$command = 'SELECT '.$rows.' FROM '.$table;
		
		if($where != null) {
		$command .= ' WHERE '.$where; }
		if($order != null) {
		$command .= ' ORDER BY '.$order; }   
		if($limit != null) {
		$command .= ' LIMIT '.$limit; } 
		   
		$query = parent::prepare($command);
		$query->execute();
 
		$one = 1; $null = 0;
		if($query->rowCount() > 0){
			return $one;
		}else{
			return $null;
		}
		/*
		$posts = array();
		while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
		$posts[] = $row;
		}
				return $this->result = json_encode(array('post'=>$posts));
				*/
	}
	
	public function insert_tabel($table,$rows = null){
		$command = 'INSERT INTO '.$table;
		$row = null ; $value = null;
		
		foreach($rows as $key => $val){
			$row .= ",".$key;
			$value .= ", :".$key;
		}
		
		$command .="(".substr($row,1).")";
		$command .="VALUES(".substr($value,1).")";
		 
		   
		$stmt =  parent::prepare($command);
		$stmt->execute($rows);
		$rowcount = $stmt->rowCount();
		return $rowcount;
	}
	
	public function delete_tabel($table,$where = null){
		$command = 'DELETE FROM '.$table;
		$list = Array(); $parameter = null;
		foreach ($where as $key => $value)
		{
		  $list[] = "$key = :$key";
		  $parameter .= ', ":'.$key.'":"'.$value.'"';
		}
		$command .= ' WHERE '.implode(' AND ',$list);
				   
		$json = "{".substr($parameter,1)."}";
		$param = json_decode($json,true);
					   
		$query = parent::prepare($command);
		$query->execute($param);
		$rowcount = $query->rowCount();
		return $rowcount;		
	}
	
	public function update_tabel($tabel , $field = null , $where = null){
		$command = 'UPDATE '. $tabel .' SET ';
		$set = null ; $value = null;
		
		foreach($field as $key => $values){
			$set .= ', '.$key. ' = :'.$key;
            $value .= ', ":'.$key.'":"'.$values.'"';
		}
		
		$command .= substr(trim($set),1);
        $json = '{'.substr($value,1).'}';
        $param = json_decode($json,true);
        
		if($where != null){
			$command .= ' WHERE '.$where;
        }
                 
        $query = parent::prepare($command);
        $query->execute($param);
        $rowcount = $query->rowCount();
        return $rowcount;
	}
	
	public function getResult(){
		return $this->result;
	}
}