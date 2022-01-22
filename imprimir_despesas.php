<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesas</title>
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

</head>

<body>
    <div class="form">
        <h2>Lista De Despesas</h2>
        <?php
        print_r('Funcionarios:' . $_POST['funcionarios']);
        print_r('<br>');
        print_r('Energia:' . $_POST['energia']);
        print_r('<br>');
        print_r('Água:' . $_POST['agua']);
        print_r('<br>');
        print_r('Segurança:' . $_POST['seguranca']);
        print_r('<br>');
        print_r('Jardinagem/Paisagismo:' . $_POST['jardinagem']);
        print_r('<br>');
        print_r('Coleta de Lixo:' . $_POST['lixo']);
        ?>

    </div>
    <a href="formulario.php"> <button>Voltar</button> </a> 
</body>

</html>