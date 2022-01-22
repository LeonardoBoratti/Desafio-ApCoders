<?php
    if(isset($_POST['submit']));
   
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:url("condominios.jpg");
            background-size: cover;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 10px;
            width: 30%;
        }
        legend{
            border: 1px, solid white;
            padding: 10px;
            text-align: center;
        }
        .box-input{
            position: relative;
        }
        .inputUser{
            background:none;
            border: none;
            width: 100%;
            font-size: 15px;
            letter-spacing: 2px;
            color: white;
            border-bottom: 1px solid white;
            outline: none;
            letter-spacing: 2px;
         }
         .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
         }
         .inputUser:focus ~ .labelinput,
         .inputUser:valid ~ .labelinput{ 
             top: -20px;
             font-size: 12px;
        }
        #data_nacimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
         }
        #submit:hover{
            background-color: deepskyblue;       
         }
        button{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
            background-color: rgb(126, 134, 141);
            width: 32%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
         }
        button:hover{
            background-color: rgba(126, 134, 141, 0.685);
         } 


    </style>
</head>
<body> 
    <div class="box">
        <form action="imprimir_cadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Inquilinos</b></legend>
                <br>
                <div class="box-input">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelinput" for="nome">Nome Completo</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label class="labelinput" for="email">E-mail</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label class="labelinput" for="telefone">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outros</label>
                <br><br>
                <label for="data_nacimento"><b>Data de Nacimento</b></label>
                <input type="date" name="data_nacimento" id="data_nacimento" required>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form> 
        <br>
        <nav class="proximo">
        <a href="formulario_unidades.php"> <button>Formulário Unidades</button> </a> 
        <a href="formulario_despesas.php"> <button>Formulário Despesas</button> </a> 
        <a href="imprimir_cadastro.php"> <button>Imprimir Cadastros</button> </a> 
        </nav>

    </div>



</body>
</html>