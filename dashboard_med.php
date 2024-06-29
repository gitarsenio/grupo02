<!-- yyyyyyphp

   session_start();
   include('protect_med.php')
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito | Area Para Medicos</title>
    
    !-- imagem navegador --
	<link rel="icon" type="image/png" href="images/hospital-4-128-removebg-preview.png" sizes="32x32">
     !-- fim --
     <!-- font awesome --
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	!-- fim --
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<style>
        
</style>
<body>
  --
  <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="dashboard_med.php">Clinica  de Viana</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class='bx bx-search-alt-2'></i>
                        <span>Pesquisa</span>
                    </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <form action="dashboard_med.php" method="GET">
                                        <div class="box-search">
                                        <input type="text" name="termo_pesquisa" placeholder="Digite sua pesquisa" class="form-control ">
                                        <button class="btn btn-primary" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                            </svg>
                                        </button>
                                        </div>
                                </form>
                        </ul>
                </li>
                <li class="sidebar-item">
                        <a href="dashboard_med.php" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class='bx bxs-contact'></i>
                            <span>Pacientes</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=listar-pacientes" class="sidebar-link">Listar pacientes</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="relatorio.php" class="sidebar-link">Relatorio</a>
                            </li>
                            
                        </ul>
                    </li> 
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-solid fa-book-medical"></i>
                            <span>registos</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=login" class="sidebar-link">Ver registos</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="?page=adicionar_registro" class="sidebar-link">Criar Registo</a>
                            </li>
                        </ul>
                    </li> 
                    
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <span>Especialidades</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            !-- <li class="sidebar-item">
                                <a href="?page=cadastrar-especialidades" class="sidebar-link">Cadastrar</a>
                            </li> --
                            <li class="sidebar-item">
                                <a href="?page=listar-especialidades" class="sidebar-link">Listar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="relatorio_espe.php" class="sidebar-link">Relatorio</a>
                            </li>
                        </ul>
                    </li> 
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-solid fa-book-medical"></i>
                            <span>Exames Marcados</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=cadastrar_exames_marcados" class="sidebar-link">Cadastrar Exames Marcados</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="?page=listar_exames_marcados" class="sidebar-link">Listar Exames Marcados</a>
                            </li>
                        </ul>
                    </li> 
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-sharp fa-solid fa-microscope"></i>
                            <span>Exames</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=cadastrar_exames" class="sidebar-link">Cadastrar tipos exames</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="?page=listar_exames" class="sidebar-link">Listar tipos exames</a>
                            </li>
                            
                        </ul>
                    </li> 
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-solid fa-capsules"></i>
                            <span>receitas</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=criar_receitas" class="sidebar-link">Cadastrar Receitas</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="?page=listar_receitas" class="sidebar-link">Listar Receitas</a>
                            </li>
                            
                        </ul>
                    </li> 
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class='bx bx-message-rounded'></i>
                            <span>Contatos</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="?page=listar-contato" class="sidebar-link">Listar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="relatorio_contato.php" class="sidebar-link">Relatorio</a>
                            </li>
                            
                        </ul>
                    </li>
            </ul>
            <div class="sidebar-footer">
                <a href="logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="col mt-4">
                                ?php
                                    include('config.php');
                                    switch (@$_REQUEST["page"]) {

                                        // pacientes
                                        case 'cadastrar-pacientes':
                                        include("marcar.php");
                                        break;
                                        case 'listar-pacientes':
                                            include("listarpaci_med.php");
                                            break;
                                            
                                            case "salvar-pacientes":
                                                include("salvar-pacientes.php");
                                                break;
                                        //  medicos
                                        
                                                    //  especialidades
                                                case "cadastrar-especialidades":
                                                include("cadastrar-especialidades.php");
                                                    break;
                                                    case "listar-especialidades":
                                                    include("listaresp_med.php");
                                                        break;

                                                            //  exames
                                                case "cadastrar_exames":
                                                    include("cadastrar_exames.php");
                                                        break;
                                                        case "editar_exames":
                                                        include("editar_exames.php");
                                                            break;
                                                            case "listar_exames":
                                                                include("listar_exames.php");
                                                                    break;
                                                        
                                                        case "salvar_exames":
                                                            include("salvar_exames.php");
                                                            break;
                                                                         //  exames marcados
                                                case "cadastrar_exames_marcados":
                                                    include("cadastrar_exames_marcados.php");
                                                        break;
                                                        case "editar_exames_marcados":
                                                        include("editar_exames_marcados.php");
                                                            break;
                                                            case "listar_exames_marcados":
                                                                include("listar_exames_marcados.php");
                                                                    break;
                                                                    
                                                        
                                                        case "salvar_exames_marcados":
                                                            include("salvar_exames_marcados.php");
                                                            break;
                                                                // contatos
                                                                case "cadastrar-contato":
                                                                    include("contato.php");
                                                                        break;
                                                                        case "listar-contato":
                                                                        include("listarcont_med.php");
                                                                            break;
                                                                            
                                                                            case "salvar-contato":
                                                                                include("salvar-contato.php");
                                                                                    break;
                                                                                    // registos
                                                                                    case "send_registo":
                                                                                        include("send_registo.php");
                                                                                            break;
                                                                                            case "adicionar_registro":
                                                                                                include("adicionar_registro.php");
                                                                                                    break;
                                                                                            case "login":
                                                                                                include("login_registo.php");
                                                                                                    break; 
                                                                                                    case "registos_medicos":
                                                                                                        include("registos_medicos.php");
                                                                                                            break;
                                                                                                            case "criar_receitas":
                                                                                                                include("criar_receitas.php");
                                                                                                                    break; 
                                                                                                                    case "salvar_receitas":
                                                                                                                        include("salvar_receitas.php");
                                                                                                                            break;
                                                                                                                            case "listar_receitas":
                                                                                                                                include("listar_receitas.php");
                                                                                                                                    break;
                                                                                                                                    case "apagar_receita":
                                                                                                                                        include("apagar_receita.php");
                                                                                                                                            break;
                                                        
                                                                                                                                            default:
                                                                                                                                            ?>
                                                                                                                                            <div class="container">
                                                                                                                                                <div class="row mt-">
                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                        <div class="card bg-blue-light">
                                                                                                                                                            <div class="card-body">
                                                                                                                                                            <h1 class="card-text"><i class="fa-regular fa-comments"></i></>
                                                                                                                                                                <h5 class="card-title">Feedback dos Pacientes</h5>
                                                                                                                                                                <?php
                                                                                                                                                                $sql = "SELECT * FROM contatos";
                                                                                                                                                                $res = $conn->query($sql);
                                                                                                                                                                $qtd = $res->num_rows; ?>
                                                                                                                                                                              <?php
                                                                                                                                                                                if ($qtd > 0) {
                                                                                                                                                                                    print "<p> <b>$qtd</b> resultado(s).</p>";
                                                                                                                                                                                } ?>
                                                                                                                                                                <a href="?page=listar-contato" class="btn btn-primary">Ver</a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                        <div class="card bg-blue-light">
                                                                                                                                                            <div class="card-body">
                                                                                                                                                            <h1 class="card-text"><i class="fa-solid fa-chart-line"></i></h1>
                                                                                                                                                            <h2>Pacientes</h2>                                    
                                                                                                                                                                           <?php
                                                                                                                                                                            $sql = "SELECT * FROM pacientes AS pac
                                                                                                                                                                                INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id";
                                                                                                                                                                            $res = $conn->query($sql);
                                                                                                                                                                            $qtd = $res->num_rows; ?>
                                                                                                                                                                              <?php
                                                                                                                                                                                if ($qtd > 0) {
                                                                                                                                                                                    print "<p> <b>$qtd</b> pacientes(s).</p>";
                                                                                                                                                                                } ?>
                                                                                                                                                              
                                                                                                                                                                <a href="?page=listar-pacientes" class="btn btn-primary">Ver</a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-md-6 ">
                                                                                                                                                        <div class="card bg-blue-light">
                                                                                                                                                            <div class="card-body">
                                                                                                                                                                <h1 class="card-text"><i class="fa-solid fa-heart-pulse"></i></h1>
                                                                                                                                                                <h5 class="card-title">Especialidades</h5>
                                                                                                                                                                <?php
                                                                                                                                                                $sql = "SELECT * FROM especialidades";
                                                                                                                                                                $res = $conn->query($sql);
                                                                                                                                                                $qtd = $res->num_rows; ?>
                                                                                                                                                                              <?php
                                                                                                                                                                                if ($qtd > 0) {
                                                                                                                                                                                    print "<p> <b>$qtd</b> especialidades(s).</p>";
                                                                                                                                                                                } ?>
                                                                                                                                                                <a href="?page=listar-especialidades" class="btn btn-primary">ver</a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <br>
                                                                                                                                                    <div class="col-md-6 mb-4">
                                                                                                                                                        <div class="card bg-blue-light">
                                                                                                                                                            <div class="card-body">
                                                                                                                                                                <h1 class="card-text"><i class="fa-solid fa-vial"></i></h1>
                                                                                                                                                                <h5 class="card-title">Exames</h5>
                                                                                                                                                                ?php
                                                                                                                                                                           $sql = "SELECT * FROM exames";                                                                       
                                                                                                                                                                            $res = $conn->query($sql);
                                                                                                                                                                            $qtd = $res->num_rows;?>
                                                                                                                                                                              ?php 
                                                                                                                                                                        if($qtd > 0){
                                                                                                                                                                            print "<p> <b>$qtd</b> exames(s).</p>"
                                                                                                                                                                                ;}?>
                                                                                                                                                                <a href="?page=listar_exames" class="btn btn-primary">ver</a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                            
                                                            
                                                                                                                                                    
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            ?php
                                                                                                                                        break;   
                                                }
                                ?>   
            </div>
            !-- seacrh pesquisa --
                            ?php 

                                if(isset($_GET['termo_pesquisa'])) {
                                    $termo_pesquisa = $_GET['termo_pesquisa'];
                                
                                    
                                    $sql_pacientes = "SELECT idpaciente AS id, nome AS nome, 'pacientes' AS tipo FROM pacientes WHERE nome LIKE '%$termo_pesquisa%'";
                                
                                    
                                    $sql_especialidades = "SELECT id AS id, nome_esp AS nome, 'especialidades' AS tipo FROM especialidades WHERE nome_esp LIKE '%$termo_pesquisa%'";
                                
                                
                                    $sql_medicos = "SELECT id_medico AS id, nome_medico AS nome, 'medicos' AS tipo FROM medicos WHERE nome_medico LIKE '%$termo_pesquisa%'";
                                
                                    $sql_exames = "SELECT id_exames AS id, exames AS nome, 'exames' AS tipo FROM exames WHERE exames LIKE '%$termo_pesquisa%'";
                                    
                                    $sql_exames_marcados = "SELECT id_exames_marcados AS id, nome_paciente AS nome, 'exames_marcados' AS tipo FROM exames_marcados WHERE nome_paciente LIKE '%$termo_pesquisa%'";
                                
                                    
                                    
                                    $sql_contatos = "SELECT id_contato AS id, nome_contato AS nome, 'contatos' AS tipo FROM contatos WHERE nome_contato LIKE '%$termo_pesquisa%'";
                                
                                    // Executar consultas
                                    $resultados = array();
                                    $resultados[] = $conn->query($sql_pacientes);
                                    $resultados[] = $conn->query($sql_especialidades);
                                    $resultados[] = $conn->query($sql_medicos);
                                    $resultados[] = $conn->query($sql_exames);
                                    $resultados[] = $conn->query($sql_exames_marcados);
                                    $resultados[] = $conn->query($sql_contatos);
                                
                                     Exibir resultados
                                    $total_resultados = 0;
                                    foreach ($resultados as $resultado) {
                                        if ($resultado->num_rows > 0) {
                                        print "<table class='table table-bordered table-striped table-hover'>";
                                        print "<tr>";
                                        
                                        print "<th>#</th>";
                                        print "<th>Nome</th>";
                                        print "<th>Tipo</th>";
                                        print "</tr>";
                                            while($row = $resultado->fetch_assoc()) {
                                            print "<tr>";
                                            print "<td>".$row["id"]."</td>";
                                            print "<td>".$row["nome"]."</td>";
                                            print "<td>".$row["tipo"]."</td>";
                                            
                                                $total_resultados++;
                                                print "</tr>";
                                            }
                                            print "</table>";
                                    
                                        }
                                    }
                                
                                    if ($total_resultados === 0) {
                                        echo "Nenhum resultado encontrado para sua pesquisa.";
                                    }
                                } 
                            ?>
                            
       </div>       
  </div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
  </script>
  <script>
    const hamBurger = document.querySelector(".toggle-btn");

       hamBurger.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("expand");
    });

  </script>    

</body>
</html>