<?php
    require_once("db.php");

    function reserve($dataArray){
        try{
            $dbh = db_connect();
            $sql = "INSERT INTO Reservation(party_name, phone, num_guest, date, time, special) VALUES(?, ?, ?, ?, ?, ?)";
            $statement = $dbh->prepare($sql);

            $param = [$dataArray["Fullname"], $dataArray["Phone"], $dataArray["NumbGuest"],
                               $dataArray["Date"], $dataArray["Time"], $dataArray["Special"]];

            $statement->execute($param);
            return true;
        } catch(PDOException $e){
            echo $e;
            db_disconnect();
            exit();
        }

    }

    function uniqueUserName($username){

        try{
          $dbh = db_connect();
          $usernameExists = true;
          $sql = "SELECT * FROM Users";

          $rows = $dbh -> query($sql);

          foreach($rows as $row){
              if($row["username"] === $username){
                $usernameExists = false;
              }
          }
          return $usernameExists;

       }
       catch(PDOException $e){
              ?> <p> Issue checking unique user </p> <?php
              db_disconnect();
              exit();
       }

      }

    function uniqueEmail($email){

          try{
            $dbh = db_connect();
            $emailExists = true;
            $sql = "SELECT * FROM Users";

            $rows = $dbh -> query($sql);

            foreach($rows as $row){
                if($row["email"] === $email){
                  $emailExists = false;
                }
            }
            return $emailExists;

         }
         catch(PDOException $e){
                ?> <p> Issue checking unique email </p> <?php
                db_disconnect();
                exit();
         }

        }

    function insertUser($username, $password, $email, $name, $status){

        try{
                  $dbh = db_connect();
                  $sql = "INSERT INTO Users VALUES (?, ?, ?, ?, ?)";

                  $statement = $dbh->prepare($sql);
                  $params =[$username, crypt($password), $name, $email,0];
                  return $statement->execute($params);
           }
           catch(PDOException $e){
                  ?> <p> Unable to insert account into table </p> <?php
                  db_disconnect();
                  exit();
           }

      }
	
	function validatePassword($username, $password) {
		$correctPass = false;
		try {
			$dbh = db_connect();
			$sql = "SELECT password FROM Users WHERE username = ?";

			$statement = $dbh->prepare($sql);
			$params = [$username];
			$statement->execute($params);

			if($statement) {
				foreach($statement as $row) {
					$correctPassword = $row["password"];
					$correctPass = $correctPassword === crypt($password, $correctPassword);
				}
			}

			return $correctPass;
		} catch(PDOException $e) {
			?> <p> Issue validating password </p> <?php
                db_disconnect();
                exit();
		}
	}

	function getPrivilegeLevel($username) {
        try {
            $status = 0;
            $dbh = db_connect();
            $sql = "SELECT status FROM Users WHERE username = ?";

            $statement = $dbh->prepare($sql);
            $params = [$username];
            $statement->execute($params);

            if($statement) {
                foreach($statement as $row) {
                    $status = $row["status"];
                }
            }

            return $status;
        } catch(PDOException $e) {
            ?> <p> Issue validating password </p> <?php
            db_disconnect();
            exit();
        }
    }

	function getAllReservations() {
        try {
            $dbh = db_connect();
            $sql = "SELECT * FROM Reservation";

            $returnMe = $dbh->query($sql);

            return $returnMe;
        } catch(PDOException $e){
            ?> <p> Error getting reservations from database. </p> <?php
            db_disconnect();
            exit();
        }
    }
	
?>
