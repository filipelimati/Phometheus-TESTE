<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Prometheus</title>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  

  
 <!--DataTable JS-->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

  <!--DataTable STYLE-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

  <!-- Bootstrap Core CSS -->

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  
  <script type="text/javascript">
    function fMasc(objeto,mascara) {
      obj=objeto
      masc=mascara
      setTimeout("fMascEx()",1)
    }
    function fMascEx() {
      obj.value=masc(obj.value)
    }
    function mTel(tel) {
      tel=tel.replace(/\D/g,"")
      tel=tel.replace(/^(\d)/,"($1")
      tel=tel.replace(/(.{3})(\d)/,"$1)$2")
      if(tel.length == 9) {
        tel=tel.replace(/(.{1})$/,"-$1")
      } else if (tel.length == 10) {
        tel=tel.replace(/(.{2})$/,"-$1")
      } else if (tel.length == 11) {
        tel=tel.replace(/(.{3})$/,"-$1")
      } else if (tel.length == 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
      } else if (tel.length > 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
      }
      return tel;
    }
    function mCPF(cpf){
      cpf=cpf.replace(/\D/g,"")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
      return cpf
    }
    function mCEP(cep){
      cep=cep.replace(/\D/g,"")
      cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
      cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
      return cep
    }
    function mNum(num){
      num=num.replace(/\D/g,"")
      return num
    }

    $(document).ready(function() {
      $('#tenf').DataTable({
                "language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_  resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
  }
      });
    } );

  </script>    



</head>

    <body>

      <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#" class="navbar-left">
                    <img src="../img/logo2.png" width="40" height="40" alt=""></img> 
                </a>

                <a class="navbar-brand" href="home.html">                                                           
                    PROMETHEUS
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Alterar Senha</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
              <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </div>
                            
                        </li>


                        <li>
                            <a href="home.php"> <i class="fa fa-home fa-fw"></i> <b>Home</b></a>                            
                        </li>
                        <li>
                            <a href="consulta.php"><i class="fa fa-user-md fa-fw"></i> <b>Consultas</b></a>
                        </li>
                        <li>
                            <a href="triagem.php"><i class="fa fa-stethoscope fa-fw"></i> <b>Triagens</b></a>
                        </li>
                        <li>
                            <a href="prontuario.php"><i class="fa fa-clipboard fa-fw"></i> <b>Prontuários</b></a>                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus-circle fa-fw"></i> <b>Cadastros</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="paciente.php">Paciente</a>
                                </li>
                                <li>
                                    <a href="medicos.php">Médico</a>
                                </li>
                                <li>
                                    <a href="enfermeiro.php">Enfermeiro</a>
                                </li>
                                <li>
                                    <a href="tecnico.php">Técnico de Enfermagem</a>
                                </li>                                
                                <li>
                                    <a href="maqueiro.php">Maqueiro</a>
                                </li>
                                <li>
                                    <a href="medicamento.php">Medicamento</a>                            
                                </li>
                                <li>
                                    <a href="usuario.php">Usuário</a>                            
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                        
                        
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> <b>Sobre</b></a>

                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
          <!-- Page Content -->
          <div id="page-wrapper">
            <div class="container-fluid">

              <br>
              <br>

              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-primary">

                    <div class="panel-heading">
                      <b>ENFERMEIRO</b>
                    </div>
                    <div class="panel-body">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Cadastrar" data-toggle="tab">Cadastrar</a>
                        </li>
                        <li><a href="#Consultar" data-toggle="tab">Consultar</a>
                        </li>
                      </ul>

                      <br>

                      <div class="tab-content">
                       <div class="tab-pane fade in active" id="Cadastrar">

                         <div class="row">
                          <form role="form" action="cadastro_enf.php" method="post">
                            <div class="form-group col-md-4">
                              <label>COREN</label>
                              <input name="coren" type="text" class="form-control" placeholder="Informe o número do COREN" required autofocus>
                            </div>

                            <div class="form-group col-md-9">
                              <!-- Alinhar campos -->
                            </div>

                            <div class="form-group col-md-4">
                              <label>Nome</label>
                              <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" required>
                            </div>

                            <div class="form-group col-sm-4">
                             <label>E-mail</label>
                             <input name="email" type="email" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                           </div>

                           <div class="form-group col-sm-4">
                            <label>CPF</label>
                            <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Telefone Residencial</label>
                            <input name="fixo" type="phone" class="form-control" placeholder="Digite seu telefone" id="telefone" maxlength="13" onkeydown="javascript: fMasc( this, mTel );">
                            <!--pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Telefone Celular</label>
                            <input name="celular" type="phone" class="form-control" placeholder="Digite seu número de celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );">
                            <!-- pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Data de Nascimento</label>
                            <input name="dataNasc" type="date" class="form-control" placeholder="dd/mm/aaaa" id="data" required>
                          </div>

                          <br/>

                          <div class="form-group col-sm-3">
                            <label>Sexo</label>
                            <select class="form-control mr-sm-2" name="sexo" required>
                              <option>Selecione</option>
                              <option>Masculino</option>
                              <option>Feminino</option>
                            </select>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>CEP</label>
                            <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" onkeydown="javascript: fMasc( this, mCEP );" required>
                          </div>

                          <div class="form-group col-sm-6">
                            <label>Logradouro</label>
                            <input name="logradouro" id="logradouro" type="text" placeholder="Infome o endereço" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-2">
                            <label>Número</label>
                            <input name="endNumero" id="endNumero" type="number" placeholder="Nº 1234" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-8">
                            <label>Complemento</label>
                            <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>Bairro</label>
                            <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-6">
                            <label>Cidade</label>
                            <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" required>
                          </div>

                          <br/>

                          <div class="form-group col-sm-6">
                            <label>UF</label>
                            <select name="estado" id="estado" class="form-control mr-sm-2" required>
                              <option>Selecione o estado</option>
                              <option value="AC">Acre</option>
                              <option value="AL">Alagoas</option>
                              <option value="AP">Amapá</option>
                              <option value="AM">Amazonas</option>
                              <option value="BA">Bahia</option>
                              <option value="CE">Ceará</option>
                              <option value="DF">Distrito Federal</option>
                              <option value="ES">Espirito Santo</option>
                              <option value="GO">Goiás</option>
                              <option value="MA">Maranhão</option>
                              <option value="MS">Mato Grosso do Sul</option>
                              <option value="MT">Mato Grosso</option>
                              <option value="MG">Minas Gerais</option>
                              <option value="PA">Pará</option>
                              <option value="PB">Paraíba</option>
                              <option value="PR">Paraná</option>
                              <option value="PE">Pernambuco</option>
                              <option value="PI">Piauí</option>
                              <option value="RJ">Rio de Janeiro</option>
                              <option value="RN">Rio Grande do Norte</option>
                              <option value="RS">Rio Grande do Sul</option>
                              <option value="RO">Rondônia</option>
                              <option value="RR">Roraima</option>
                              <option value="SC">Santa Catarina</option>
                              <option value="SP">São Paulo</option>
                              <option value="SE">Sergipe</option>
                              <option value="TO">Tocantins</option>
                            </select>
                          </div>

                          <div class="col-md-7">
                            <!--alinhamento dos Botões-->
                          </div>                                    

                          <div class="col-md-2 col-sm-12 col-xs-6">
                            <button type="reset" class="btn btn-warning btn-block">LIMPAR</button>
                          </div>

                          <div class="col-md-3 col-sm-12 col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">CADASTRAR</button>
                          </div>   

                        </form>

                      </div>
                    </div>
                    <div class="tab-pane fade" id="Consultar">

                      <div class="row">                              
                        <!--tabelas-->
                        <div class="table-responsive col-xs-12 col-sm-12 col-md-12">
                          <label>Selecione o usuário para editar:</label>
                          <table class="table table-striped table-bordered table-hover " id="tenf"> 
                            <thead>
                              <tr>
                                <th>
                                  <b>COREN</b>
                                </th>
                                <th>
                                  <b>NOME</b>
                                </th>
                                <th>
                                  <b>EMAIL</b>
                                </th>
                                <th>
                                  <b>DATA CADASTRO</b>
                                </th>                                                  
                              </tr>
                            </thead>
                            <tbody>
                            <?php  
                              include_once("conexao.php");

                              $sql = "select nome,coren,email,datacadastro from enfermeiro";
                              $consulta = mysqli_query($conexao,$sql); 
                              if ($resultado = $consulta){
                                while ($obj = $resultado->fetch_object()){ 
                            ?>
                                <tr>
                                  <th ><?php printf($obj->coren) ?></th>
                                  <td ><?php printf($obj->nome) ?></td>
                                  <td ><?php printf($obj->email) ?></td>
                                  <td ><?php printf($obj->datacadastro) ?></td>
                                </tr>
                              <?php }
                              $resultado->close();
                              } ?>
                            </tbody>
                          </table>
                        </div> 

                        <form role="form">                                                                    

                          <div class="form-group col-md-4">
                            <label>COREN</label>
                            <input name="coren" type="number" class="form-control" placeholder="Informe o número do COREN" required autofocus>
                          </div>

                          <div class="form-group col-md-11">
                            <!-- Alinhar campos -->
                          </div>


                          <div class="form-group col-md-4">
                            <label>Nome</label>
                            <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" required>
                          </div>

                          <div class="form-group col-sm-4">
                           <label>E-mail</label>
                           <input name="email" type="email" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                         </div>

                         <div class="form-group col-sm-4">
                          <label>CPF</label>
                          <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
                        </div>

                        <div class="form-group col-sm-3">
                          <label>Telefone Residencial</label>
                          <input name="fixo" type="phone" class="form-control" placeholder="Digite seu telefone" id="telefone" maxlength="13" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" onkeydown="javascript: fMasc( this, mTel );">
                        </div>

                        <div class="form-group col-sm-3">
                          <label>Telefone Celular</label>
                          <input name="celular" type="phone" class="form-control" placeholder="Digite seu número de celular" maxlength="14" id="celular" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" onkeydown="javascript: fMasc( this, mTel );">
                        </div>

                        <div class="form-group col-sm-3">
                          <label>Data de Nascimento</label>
                          <input name="dataNasc" type="date" class="form-control" placeholder="dd/mm/aaaa" id="data" required>
                        </div>

                        <br/>

                        <div class="form-group col-sm-3">
                          <label>Sexo</label>
                          <select class="form-control mr-sm-2" required>
                            <option>Selecione</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                          </select>
                        </div>

                        <div class="form-group col-sm-4">
                          <label>CEP</label>
                          <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" pattern= "\d{5}-?\d{3}" required>
                        </div>

                        <div class="form-group col-sm-6">
                          <label>Logradouro</label>
                          <input name="logradouro" id="logradouro" type="text" placeholder="Infome o endereço" class="form-control" required>
                        </div>

                        <div class="form-group col-sm-2">
                          <label>Número</label>
                          <input name="endNumero" id="endNumero" type="number" placeholder="Nº 1234" class="form-control" required>
                        </div>

                        <div class="form-group col-sm-8">
                          <label>Complemento</label>
                          <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" required>
                        </div>

                        <div class="form-group col-sm-4">
                          <label>Bairro</label>
                          <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" required>
                        </div>

                        <div class="form-group col-sm-6">
                          <label>Cidade</label>
                          <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" required>
                        </div>

                        <br/>

                        <div class="form-group col-sm-6">
                          <label>UF</label>
                          <select name="estado" id="estado" class="form-control mr-sm-2" required>
                            <option>Selecione o estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                          </select>
                        </div>

                        <div class="col-md-6">
                          <!--alinhamento dos Botões-->
                        </div> 

                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <button type="reset" class="btn btn-danger btn-block">EXCLUIR</button>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <button type="button" class="btn btn-success btn-block">SALVAR</button>
                        </div>
                      </div>
                    </div>
                    <!-- /.container-fluid -->
                  </div>
                  <!-- /#page-wrapper -->

                </div>
              </div>
                  <!-- /#wrapper -->



  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>

            </body>

            </html>
