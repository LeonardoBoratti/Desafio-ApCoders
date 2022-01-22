<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrados</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: whitesmoke;
    }

    .form {
        width: 500px;
        height: 200px;
        line-height: 25px;
        text-align: center;
        position: absolute;
        top: 25%;
        margin-top: -25px;
        left: 35%;
        margin-left: -100px;
    }
    button{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 100;
            background-color: rgb(126, 134, 141);
            width: 12%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            
            
            
         }
        button:hover{
            background-color: rgba(126, 134, 141, 0.685);
         } 
</style>

<body>
    <div class="form">
        <h2>Lista De Inquilinos Cadastrados</h2>
        <?php
        print_r('Nome:' . $_POST['nome']);
        print_r('<br>');
        print_r('E-mail:' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone:' . $_POST['telefone']);
        print_r('<br>');
        print_r('Gênero:' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de Nacimento:' . $_POST['data_nacimento']);
        ?>

    </div>
    <a href="formulario.php"> <button>Voltar</button> </a> 

</body>

</html>