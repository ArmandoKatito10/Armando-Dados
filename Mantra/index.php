<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Página Inicial do site da LEI" />
    <meta name="author" content="Armando Katito" />
    <!--Icone que aparece na janela do navegador-->
    <link rel="icon" href="images/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="_bootstrap/bootstrap4.css" media="screen" rel="stylesheet" />
    <!-- Estilos customizados para esse template -->
    <link href="css/estilo.css" rel="stylesheet">
    <!--Font Awesome-->
    <script src="_js/Fontawesome-all.js"></script>
    <title>TRELLO</title>
</head>

<body class="text-center fundo-capa " style="background: url(../images/6.jpg) no-repeat fixed 0 0 / cover ;">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
        <header class="masthead mb-auto">
            <div class="inner">
            
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active " href="#">Home</a>
                    <a class="nav-link transicao" href="Sobre _out.html">Blog</a>
                    <a class="nav-link transicao" href="#" data-toggle="modal" data-target="#Contacto"
                        data-whatever="@mdo">Contatos</a>
                    <!--Modal Contacto-->
                    <div class="modal fade" id="Contacto" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="exampleModalLabel">Contacte-nos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form class="form-signin"  method ="POST"  action ="php/Mesagem.php">
                                        <div class="form-group text-left">
                                            <label for="inputEmail" class="sr-only">E-mail</label>
                                            <p class="text-left text-dark mt-2 mb-0">E-mail</p>
                                            <input type="email" name ="email_contacto" class="form-control mb-1"
                                                placeholder="Endereço de E-mail" required autofocus>
                                        </div>
                                        <div class="form-group text-left">
                                            <label for="message-text" class="col-form-label text-dark">Mensagem</label>
                                            <textarea class="form-control" name="Mensagem_contacto"
                                                placeholder="Digite a sua mensagem"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Enviar mensagem</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fim Modal COntacto-->
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
                
            <h1 class="titulo">O MANTRA DA PRODUTIVIDADE</h1>
            <p class="lead">Confira as suas tarefas
                 <a href="#" class="font-weight-bold" data-toggle="modal" data-target="#login">Navegue </a> ou <a
                    href="#" class="font-weight-bold" data-toggle="modal" data-target="#cadastro">cadastre-se</a>, e
                desfrute.
            </p>
            <div class=" lead" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-branco " data-toggle="modal" data-target="#login">Entrar</button>
                <button type="button" class="btn btn-branco" data-toggle="modal"
                    data-target="#cadastro">Cadastrar-se</button>
            </div>


            <!-- Modal Login-->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Insira suas Credenciais</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <body class="text-center">
                                <form class="form-signin"  method ="POST"  action ="php/ValidarUser.php" >

                                    <label for="inputEmail" class="sr-only">Nome</label>
                                    <p class="text-left text-dark mt-2 mb-0">Nome</p>
                                    <input type="text" name ="usuario" class="form-control mb-1"
                                        placeholder="Nome de Usuário" required autofocus>



                                    <label for="inputPassword" class="sr-only">Palavra Passe</label>
                                    <p class="text-left text-dark mt-2 mb-0">Senha</p>
                                    <input type="password" name ="senha" class="form-control mb-1"
                                        placeholder="Senha" required>



                                    <button class="btn btn-azul btn-block mb-2" type="submit">Entrar</button>
                                    <button class="btn btn-block transicao btn-fb" type="submit"><i
                                            class="fab fa-facebook-f mr-2"></i> Entrar com o
                                        facebook</button>
                                </form>
                            </body>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar Menu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/FIm Modal Login-->

            <!--Modal Cadastrar-->

            <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Faça seu Cadastro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <body>


                                <form class="needs-validation" method = "POST" action = "php/Cadastro.php">

                                    <div class="form-row">
                                        <div class="col-md-12 mb-1">
                                            <p class="text-left text-dark mt-2 mb-0">Nome</p>
                                            <input type="text" class="form-control" name ="nome"
                                                placeholder="Nome" value="" required>
                                            
                                        </div>


                                        <div class="col-md-12 mb-1">
                                            <p class="text-left text-dark mt-2 mb-0">Nome de usuario</p>
                                            <input type="text" class="form-control" name ="usuario"
                                                placeholder="Ususario" value="" required>
                                            
                                        </div>

                                        <div class="col-md-12 mb-1">
                                            <p class="text-left text-dark mt-2 mb-0">Crie uma Senha</p>
                                            <input type="password" name ="senha" class="form-control"
                                                placeholder="Senha" required>
                                            
                                        </div>
                                        <div class="col-md-12 mb-1">

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                required>
                                            <label class="form-check-label text-dark" for="invalidCheck">
                                                Concordo com os <a href="#" class="text-dark">Termos de Uso</a>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <button class="btn btn-azul mb-2 btn-block" type="submit">Cadastrar</button>
                                    <button class="btn btn-block transicao btn-fb" type="submit"><i
                                            class="fab fa-facebook-f mr-2"></i> Entrar com o
                                        facebook</button>
                                </form>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function () {
                                        'use strict';
                                        window.addEventListener('load', function () {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function (form) {
                                                form.addEventListener('submit', function (event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </body>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar
                                Menu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Fim Modal Cadastrar-->
        </main>

     
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="_js/jquery.slim.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <script src="_js/tether.min.js"></script>
</body>

</html>

</html>