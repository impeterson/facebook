<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="div01">
        
            
            
            
            <a href="http//www.facebook.com">facebook</a>
           
            <form>
                <label id="Email">Email ou telefone</label>
                <label id="Senha">Senha</label> <br>
                
                <input type="text" name="nome" id="nome" >
                <input type="password" name="senha" id="senha">
                
            <input id="entrar"type="submit" value="Entrar"/>
            <a id="aEsqueceuConta" href="https/www.facebook.com">Esqueceu a conta?</a>
            
            </form>
            
            
        </div>
        <div id="div02">
            <label id="minitexto">O Facebook ajuda você a se conectar e <br>
                compartilhar com as pessoas que fazem parte <br>
                da sua vida.</label>
            <img src="facebook.png"/>
            <form id="formCadastro">
                <label id="texto1">Abra uma conta</label><br>
                <label id="texto2">É gratuito e sempre será.</label>
                <div id="divNomeSobrenome">
                    <input type="text" name="nomee" id="nomee" placeholder="Nome">
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                </div><br>
                <input type="text" name="celemail" id="celemail" placeholder="Celular ou email"><br><br>
                <input type="text" name="novasenha" id="novasenha" placeholder="Nova senha">
                <label id="texto3">Data de nascimento</label>
                <select>
                    <option id="dia">Dia</option>
                </select>
                <select>
                    <option id="mes">Mês</option>
                </select>
                <select>
                    <option id="ano">Ano</option>
                    
                </select>
                
             </form>
        </div>
        
        
        <style>
            
            
            select{
                position: relative;
                width: 60px;
                height: 30px;
                top: 50px;
                left: -207px;
            }
            
            #texto1{
                position: relative;
                /*top: 300px;*/
                /*left: 00px;*/
                top: -50px;
                font-weight: bold;
                font-size: 40px;
                font-family: Verdana;
                margin-bottom: 40px;
            }
            
            #texto2
            {
                position: relative;
                font-family: Verdana;
                font-size: 20px;
                top: -35px;
            }
            #texto3{
                position: relative;
                font-family: Verdana;
                /*left: -250px;*/
                font-size: 20px;
                top: 20px;
            }
            #texto4{
                position: relative;
                font-family: Verdana;
                font-size: 10px;
                top: 30px;
                left: -50px;
            }
            
            #formCadastro
            {
                position: absolute;
                top: 20%;
                right: 10%;
                width: 450px;
               /* background-color: blue;*/
            }
            
            
            #formCadastro input
            {
                position: relative;
                height: 38px;
                width: 220px;
                margin-bottom: 0px;
                border-radius: 2px;
                border-style: none;
            }
            
            #formCadastro #celemail, #formCadastro #novasenha
            {
                width: 450px;
            }
            
            #divNomeSobrenome #sobrenome
            {
                position: absolute;
                right: 0;
            }
            
/*             #sobrenome{
                position: absolute;
                top: 170px;
                left: 470px;
            }
            #celemail{
                position: absolute;
                top: 130px;
                left: 50px;
            }
            #novasenha{
                position: absolute;
                top: 350px;
                left: 500px;
            }
            #nomee{
                position: absolute;
                top: 500px;
                left: 400px;
            }*/
            
            #minitexto{
                font-family: tahoma;
                font-weight: bold;
                position: absolute;
                top: 150px;
                left: 500px;
            }
            img{
                position: absolute;
                top: 210px;
                left: 500px;
            }
            
            
            #div02{
                width: 1920px;
                height: 550px;
                background-color: #ced6e0;
                
            }
            
            #Email{
                position: absolute;
                left: 0%;
                font-size: 15px;
                color: white;
            }
            #Senha{
                
                position: absolute;
                left: 45%;
                font-size: 15px;
                color: white;
            }
            
            
            #div01{
                background-color: #3b5998;  
                padding: 22px;
               
                
            }
            
            #aEsqueceuConta
            {
                position: absolute;
                white-space: nowrap;
                left: -75%;
                font-size: 12px;
            }
            
            a{
                text-decoration: none;
                color: white;
                font-family: Verdana;
                font-size: 40px;
                font-weight: bold;
                margin: 10px 10px 10px 475px;
            }
            
            #entrar{
                color: white;
                background-color: #4e71ba;
                border: none;
                
            }
            
            form{
                
                position: absolute;
                top: 20px;
                left: 1100px;
                
            }
            
            *{
                padding: 0px;
                margin: 0px;
            }
            </style>
    </body>
</html>
