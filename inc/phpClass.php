<?php
/*=== PHP Class include ===*/
class DB
{
	//////////////// variable DB //////////////////
	var $host = DB_HOST ;
	var $database ;
	var $connect_db ;
	var $selectdb ;

	////////////////// DB Connect ///////////////////////////
	function connectdb($host="localhost",$db_name="database",$user="username",$pwd="password"){
		$this->host = $host;
		$this->database = $db_name;
		$this->username = $user;
		$this->password = $pwd;
		$this->connect_db = mysqli_connect ( $this->host, $this->username, $this->password ) or die ( "database-connect". mysqli_errno($this->connect_db) );
		$this->db = mysqli_select_db ( $this->connect_db, $this->database)
		.mysqli_query($this->connect_db, "SET character_set_client = utf8")
		.mysqli_query($this->connect_db, "SET character_set_results = utf8")
		.mysqli_query($this->connect_db, "SET character_set_connection = utf8");
		return true;
	}

	function arr_select($sql){
			$result = array();
			$req = mysqli_query($this->connect_db, $sql) or $this->_error();
			while($data = mysqli_fetch_assoc($req)){
					$result[] = $data;
			}
			return $result;
	}
	function my_query($sql){
			if(mysqli_query($this->connect_db, $sql)){return true;}
			else { die("SQL Error : ".$sql."<br />".mysqli_errno($this->connect_db));}
	}
	//ตรวจสอบค่าสูงสุดในตาราง
	function my_maxID($filed,$table,$condition) {

		if(empty($condition))
		{
			$sql="select MAX($filed) from $table";
		}else
		{
			$condition=" where ".$condition;
			$sql="select MAX($filed) from $table".$condition;
		}

		$result = mysqli_query($this->connect_db, $sql);
		if(@mysqli_num_rows($result)>0){
			$row=mysqli_fetch_row($result);
			return $row[0];
		}else{return 0;}
	}

	/////////////// Insert DB //////////////
	function my_insert($table,$data){
			$sql = '';
			$i = 1;
			$fields = '';
			$values = '';
			foreach($data as $key => $val){
					if($i != 1){
							$fields .= ',';
							$values .= ',';
					}
					$fields .= $key;
					$values .= "'".$val."'";
					$i++;
			}
			$sql = "INSERT INTO ".$table." (".$fields.") VALUES (".$values.")";
			return $sql;
	}

	/////////////// Update DB //////////////
	function my_update($table,$data,$where){
			$modifs = '';
			$i = 1;
			foreach ($data as $key => $val){
					if($i != 1) {$modifs .= ', ';}
					if(is_numeric($val)) {$modifs .= $key.'=\''.$val.'\'';}
					else {$modifs .= $key.'=\''.$val.'\'';}
					$i++;
			}
			$sql = "UPDATE ".$table." SET ".$modifs." WHERE ".$where;
			return $sql;
	}

	/////////////// Delete DB //////////////
	function my_delete($table,$where){
			$sql = "DELETE FROM ".$table." WHERE ".$where;
			return $sql;
	}

	///////// escape_string //////////
	function escape_string($data) {
		return mysqli_real_escape_string($this->connect_db, $data);
	}
	
	/////////////// Close DB Connect //////////////
	function closedb( ){
		mysqli_close ( $this->connect_db ) or $this->_error();
	}

	////// Error DB /////////
    function _error(){
        $this->error[]=mysqli_errno($this->connect_db);
    }
}

?>
