<?php




include 'shortcut/conn2.php';




if(isset($_POST['login']))
{

    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username) ||  empty($password))    {
        header ('location:../loginform.php?error=empty_value') ;
        exit();
    }
    else{
        $query = "SELECT * FROM student WHERE username = ?";
        $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt,$query)){
            header("location:../login.php?error=preparedstatementerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);

                  $result = mysqli_stmt_get_result($stmt);
                                $row = mysqli_fetch_assoc($result);
                                if($row){
                                    $verifypassword = password_verify($password, $row['password']);
                                    if($verifypassword == false){
                                        header("location:../login?error=password didnt match");
                                    }
                                    else{
                                        session_start();
                                        
                                        $_SESSION['loginname']= $row['username'];
                                        header("location:../index.php?action=login successfully");
                                        
                                    }
                                }
                                
                           
                            
                        }
                    }
                    
                }

?>
