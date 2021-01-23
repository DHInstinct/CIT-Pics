<?
    require_once("config.php");
    
    $query = "select p_ID, p_Filename, p_Title, p_Summary, p_Upload, p_Likes, u_FName, u_LName from pic, user WHERE pic.u_ID = user.u_ID"; 
    // Preparing Query
    $stmt = $db->prepare($query);
    //Execute
    $stmt->execute();
    //Store result
    $stmt->store_result();
    //bind
    $stmt->bind_result($p_ID, $p_Filename, $p_Title, $p_Summary, $p_Upload, $p_likes, $u_FName, $u_LName);


     while($stmt->fetch())
     {
         $photos[] = array("id"=>$p_ID, "Filename"=>$p_Filename, "Title"=>$p_Title, "Summary"=>$p_Summary, "UploadTime"=>$p_Upload, "Likes"=>$p_likes, "First"=>$u_FName, "Last"=>$u_LName);
     }
    
     echo json_encode($photos);
    
?>