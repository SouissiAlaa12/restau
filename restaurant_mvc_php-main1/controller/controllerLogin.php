
<?php

    

$controller = 'login';
  
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 





   
require_once("{$ROOT}{$DS}model{$DS}modelUser.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="login";	
	
switch ($action) {


	case "created":	
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']) ){
            $username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
            echo $password;
            echo $username;


            $u = ModelUser::login($username , $password);
            
            $count=$u->rowCount();


			
if($count==0)
{
	echo 'error';
}
else
{
	$ligne=$u->fetchObject();
	
	if($ligne->role == 1)
	{
		$_SESSION['role']=1;
	
		header("location: index.php?controller=reservation");
		exit;
	
	}
	
	else
	{
		$_SESSION['role']=2;
		header("location: index.php?controller=admin");
		exit;
	
		
	}
}
			}	
		break;
		

		
	case "login":
		$pagetitle = "Login";
		$view = "login";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
        case "exit":
			if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 

unset($_SESSION['role']);
session_destroy();

            $view = "login";
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
			
			
			case "regist":
				$pagetitle = "Register";
				$view = "register";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				break;
				
			


			case "register":
				if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['email']) ){

					$username = $_REQUEST["username"];
					$password = $_REQUEST["password"];
					$email = $_REQUEST["email"];
					$role = "1";
				
					
					$id = NULL;
		
		
					
						$u = new ModelUser($titre, $description, $image, $prix, $email);	
						$tab = array(
						"id" => $id,    
						"username" => $username,
						"password" => $password,
						"role" => $role,
						"email" => $email,
					
						);				
						$u->insert($tab);
					
						header('Location: index.php?controller=reservation');
					
				}
				break;
		

}







?>