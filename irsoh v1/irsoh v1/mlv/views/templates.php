<?php
class Pages {
    
    public function templates($page){
        // sections
        // $header = include 'views/seccions/header.php';
        // $navbar = include 'views/seccions/navbar.php';
        if($page == 'about') {
            include 'views/seccions/header.php';
            include 'views/seccions/navbar.php';
            include 'views/moduls/about.php';
            include 'views/seccions/footer.php';
        } else if($page == 'profile'){
            include 'views/seccions/header.php';
            include 'views/seccions/navbar.php';
            include 'views/moduls/profile.php';
            include 'views/seccions/footer.php';
        } else if($page == 'login'){
            include 'views/moduls/login.php';
        }  else if($page == 'home_admin'){
            include 'views/seccions/navbar_admin.php';
            include 'views/moduls/home_admin.php';
        } else if($page == 'profile_admin'){
            include 'views/seccions/navbar_admin.php';
            include 'views/moduls/profile_admin.php';
        } else if($page == 'edit_admin'){
            include 'views/seccions/navbar_admin.php';
            include 'views/moduls/edit_admin.php';
        }else if($page == 'inicio_user'){
            include 'views/seccions/header.php';
            include 'views/seccions/navbar_user.php';
            include 'views/moduls/inicio.php';
            include 'views/seccions/footer.php';
        }   else if($page == 'profile_user'){
            include 'views/seccions/header.php';
            include 'views/seccions/navbar_user.php';
            include 'views/moduls/profile_user.php';
            include 'views/seccions/footer.php';
        } else if($page == 'edit_profile_user'){
            include 'views/seccions/header.php';
            include 'views/seccions/navbar_user.php';
            include 'views/moduls/edit_profile_user.php';
            include 'views/seccions/footer.php';
        }
        else {
            include 'views/seccions/header.php';
            include 'views/seccions/navbar.php';
	        include 'views/moduls/inicio.php';
            include 'views/seccions/footer.php';
	}

        
        // $footer = include 'views/seccions/footer.php';



    }
}


?>
