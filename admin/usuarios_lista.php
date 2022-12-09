<?php 
include "acesso_com.php";
include "../conn/connect.php";
$lista = $conn->query("select * from tbusuarios"); // order by (tipo, destaque, etc.) 
$row = $lista->fetch_assoc();
$nrows = $lista->num_rows;
// print_r($lista->fetch_all());
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Lista</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="fundofixo">
    <?php include "menu_adm.php";?>
    <main class="container">
        <h2 class="breadcrumb alert-danger">Lista de Usuarios</h2>
        <table class="table table-hover table-condensed tb-opacidade">
            <thead>
                <th class="hidden">ID</th>
                <th>LOGIN USUARIO</th>
                <th>NIVEL USUARIO</th>
                <th>
                    <a href="usuarios_insere.php" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">ADICIONAR</span>
                    </a>
                </th>
            </thead>
            
            <tbody><!-- inicio corpo da tabela -->
                <?php do {?>
                    <!-- inicio estrutura repetição -->
                    <tr>
                        <td class="hidden"><?php echo $row['nivel_usuario']; ?></td>
                        <td>
                            <span class="visible-xs"><?php echo $row['senha_usuario']?></span>
                            <span class="hidden-xs"><?php echo $row['login_usuario']?></span>
                        </td>
                        <td>
                             
                             <?php 
                                if ($row['nivel_usuario']=='sup') {
                                    echo '<span class="glyphicon glyphicon-king text-danger" aria-hidden="true"></span>';
                                }else {
                                    echo '<span class="glyphicon glyphicon-bishop text-info" aria-hidden="true"></span>';
                                }
                            ?>
                            <?php echo $row['nivel_usuario']?>
                        </td>
                        <td>
                            <a href="usuarios_atualiza.php?login_usuario=<?php echo $row['senha_usuario']; ?>" class="btn btn-warning btn-block btn-xs">
                                <span class="hidden-xs">ALTERAR</span>
                                <span class="glyphicon glyphicon-refresh"></span>
                            </a>
                            <br>
                            <button 
                            data-nome="<?php echo $row['login_usuario']?>" 
                            data-id="<?php echo $row['nivel_usuario']; ?>"
                            class="delete btn btn-xs btn-block btn-danger"
                            >
                                <span class="hidden-xs">EXCLUIR</span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </td>
                    </tr>
                <?php } while($row = $lista->fetch_assoc());?><!-- final estrutura repetição -->
            </tbody><!-- final corpo da tabela -->
        </table>
    </main>
    <!-- inicio do modal para excluir -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dimiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Deseja mesmo excluir o item?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-sucess" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do modal -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        // console.log('Viu como funciona!!');
        var nome = $(this).data('nome'); //busca o nome com a descrição (data-nome)
        var id = $(this).data('id'); // busca o id (data-id)
        // console.log(id + '-' + nome); // exibe no console
        $('span.nome').text(nome); // insere o nome do item na confirmação
        $('a.delete-yes').attr('href','usuarios_excluir.php?id_usuario='+id); // chama o arquivo php para excluir o usuario
        $('#modalEdit').modal('show');// chamar o modal
    });
</script>
</html>