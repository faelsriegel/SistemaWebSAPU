<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
      <!--  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" /> 	
        <link href="../../assets/css/template.css" rel="stylesheet"/>
        <link href="../../assets/css/style.css" rel="stylesheet">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../assets/css/menu.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../../assets/img/logofundo.png" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name">SAPU</span>
                    <span class="profession">Sistema Analitíco de<br> Progressão Universitária</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bxs-search-alt-2 icon'></i>
                    <input type="text" placeholder="Procurar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../register/dashboard.php">
                            <i class='bx bxs-home icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../subjects/cadastrar_subjects.php">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Cadastramento</span>
                            
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../../view/subjects/import.php">
                        <i class='bx bxs-file-import icon'></i>
                            <span class="text nav-text">Importação</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../../view/subjects/export.php">
                        <i class='bx bxs-file-export icon'></i>
                            <span class="text nav-text">Exportação</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../../view/user/listagem.php">
                            <i class='bx bxs-user-circle icon'></i>
                            <span class="text nav-text">Usuários</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../../view/subjects/results.php">
                            <i class='bx bxs-spreadsheet icon' ></i>
                            <span class="text nav-text">Resultados</span>
                        </a>
                    </li>

                    

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../../model/logon/sair.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>


    <script>
      const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
</body>
</html>













    <!--
    <body> 
        <div class="leftmenu">
            <div class="leftmenu_logo"><img class="logo_menu_int" src="../../assets/img/fulllogo.png"></div>
            <div class="menuarea">
                <ul>
                    <li><a href="">Home</li>
                    <li><a href="../subjects/cadastrar_subjects.php">Cadastrar Grade</li>
                    <li><a href="./view/register/resultados.php">Resultados</li>                    
                    <li><a href="./view/register/cadastros.php">Usuários</li>
                    <li><a href="../../model/logon/sair.php">Sair</li>
                </ul>    
            </div>
        </div> 
        <scritp src="../../assets/js/bootstrap.dundle.min.js"></script>           
    </body>    
</html>-->