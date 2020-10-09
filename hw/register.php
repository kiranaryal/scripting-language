
<?php 

include 'layouts/header.php'; 
include 'layouts/registration.php';
include 'shortcut/conn2.php'
?>

<?php

if(isset($_POST['register'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password2']))
{

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];


   
    if(empty($username)|| empty($email)|| empty($password) || empty($password2))    {
        header ('location:register.php?error=empty_value') ;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        header ('location:register.php?error=invalid_email') ;
        exit();
    }
    
    elseif(preg_match("/^[a-zA-Z0-9]*%/")){
        header ('location:register.php?error=invalid_data') ;
        exit();
    }
    elseif($password!==$password2){
        header ('location:register.php?error=password_did_not_match') ;
        exit();
    }
    else{
        $query = "SELECT username from student where username=?;";
        $stmt = mysqli_stmt_init($conn2);
                if(!mysqli_stmt_prepare($stmt,$query)){
                     header("location:register.php?error=db");
                    exit();
                     }
                 else{
            
                    mysqli_stmt_bind_param($stmt,"s",$username);
                     mysqli_stmt_execute($stmt);
                      mysqli_stmt_store_result($stmt);
                 $resultCheck = mysqli_stmt_num_rows($stmt);
                             if($resultCheck > 0){
                                                                  //username is already registered
                               header("location:register.php?error=username_already_exists");
                                exit();
                                }
                                    else{
                                        $query = " INSERT INTO student (username,email,password) VALUES (?,?,?)";
                                        
                                        $stmt = mysqli_stmt_init($conn2);
                                        
                                        if(!mysqli_stmt_prepare($stmt,$query)){
                                            header("location:register.php?error=query");
                                            exit();
                                                                    }
                                            else{
                                                
                                                $encpassword = password_hash($password,PASSWORD_DEFAULT);
                                                mysqli_stmt_bind_param($stmt,"sss",$username,$email,$encpassword);
                                                mysqli_stmt_execute($stmt);
                                                header('location:index.php?message=success');
                                                exit();
                                            }
            }
        }
        
        
    }
}






?>