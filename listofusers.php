<?
    require_once("config.php");
    
    $query = "select u_ID, u_Fname, u_Lname, u_Email from user";     
    // Preparing Query
    $stmt = $db->prepare($query);
    //Execute
    $stmt->execute();
    //Store result
    $stmt->store_result();
    //bind
    $stmt->bind_result($id, $Fname, $Lname, $email);


     while($stmt->fetch())
     {
         $users[] = array("id"=>$id, "Fname"=>$Fname, "LName"=>$Lname, "email"=>$email);
     }
    
     echo json_encode($users);
    
     // select p_title, p_filename, p_ID from pic where u_ID=?
?>