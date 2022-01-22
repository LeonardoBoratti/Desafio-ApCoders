<?php
 if(isset($_POST['submit']));

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Despesas</title>
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
            padding: 25px;
            border-radius: 15px;
            width: 35%;
            height: 83%;
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
            border-radius: 10px;
            margin-top: 15px;
            margin-left: 2px;
            
         }
        button:hover{
            background-color: rgba(126, 134, 141, 0.685);
         } 


    </style>

</head>
<body>
    <div class="box">
        <form action="imprimir_despesas.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Dispesas Mensais</b></legend>
                <br>
                <div class="box-input">
                    <input type="text" name="funcionarios" id="funcionarios" class="inputUser" required>
                    <label class="labelinput" for="funcionarios">Funcionários</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="energia" id="energia" class="inputUser" required>
                    <label class="labelinput" for="energia">Energia</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="agua" id="agua" class="inputUser" required>
                    <label class="labelinput" for="agua">Água</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="seguranca" id="seguranca" class="inputUser" required>
                    <label class="labelinput" for="seguranca">Segurança</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="jardinagem" id="jardinagem" class="inputUser" required>
                    <label class="labelinput" for="jardinagem">Jardinagem/Paisagismo</label>
                </div>
                <br><br>
                <div class="box-input">
                    <input type="text" name="lixo" id="lixo" class="inputUser" required>
                    <label class="labelinput" for="lixo">Coleta de Lixo</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
        <nav class="proximo">
        <a href="formulario_unidades.php"> <button>Formulário Unidades</button> </a> 
        <a href="imprimir_despesas.php"> <button>Imprimir Despesas</button> </a> 
        <a href="formulario.php"> <button>Voltar</button> </a> 
        </nav>
    </div>



</body>
</html>