<?php 

	/**
	 * 
	 */
	class DB
	{
		

		private static function _connect(){
			try{
				$pdo = new PDO('mysql:host=localhost;dbname=portfolio','root','');
				$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			}
			catch(PDOException $e){
				echo 'Connection failed '.$e->getMessage();
			}

			return $pdo;
		}

		public static function query($query, $params = array())
		{
			$stmt = self::_connect()->prepare($query);
			$stmt->execute($params);

			if(explode(' ',$query)[0]=='SELECT'){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);

			}else{
				return 0;
			}
		}
	}

$db = new DB();