<?php
//print_r($database);
	if(sizeof($database)>0)
		{
			  $_SESSION['username'] =$database[0]->S_Emails;
			setcookie('username', $database[0]->S_Emails, time() + (86400 * 30), "/");
            $_SESSION['name'] = $database[0]->SalesID;
			setcookie('saleid', $database[0]->SalesID, time() + (86400 * 30), "/");
            $_SESSION['Role'] = $database[0]->S_Role;
			setcookie('role', $database[0]->S_Role, time() + (86400 * 30), "/");
            echo $_SESSION['Role'];
            switch ($database[0]->S_Role) {
                case 'Manager';
					$_SESSION['sidebar']='Manager';
                    header('Location:'.base_url().'customer/LeadsReport');
					
                    break;
                case 'Consultant';
					$_SESSION['sidebar']='Sales';
                    header('Location:'.base_url());
                    break;
                case 'Team Leader';
					$_SESSION['sidebar']='Team';
                    header('Location:'.base_url());
                    break;
                case 'Admin';
					$_SESSION['sidebar']='admin';
                    header('Location:'.base_url());
                    break;
            }
		}
else
	echo $database[0]->S_Emails;
		
		
	?>

