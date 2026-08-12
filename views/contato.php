<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Cadastro de contatos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

         <!-- CSS da página -->
    <link rel="stylesheet" href="assets/css/contato.css">

</head>

<body class="bg-light">


    <!-- =========================================
         CABEÇALHO DA LANDING PAGE
    ========================================== -->

    <header>

        <nav class="navbar navbar-dark bg-purple py-3"> <!-- classe pra colocar a cor roxa no CSS -->

            <div class="container">

                <!-- Logo / Nome -->
                <a href="index.php?page=landing"
                    class="navbar-brand fw-bold">

                    <i class="bi bi-grid me-2"></i>

                    Sistema MVC

                </a>


                <!-- Login -->
                <a href="index.php?page=login"
                    class="btn btn-outline-light">

                    <i class="bi bi-box-arrow-in-right me-1"></i>

                    Entrar

                </a>

            </div>

        </nav>

    </header>


    <!-- =========================================
         CONTEÚDO PRINCIPAL
    ========================================== -->

    <main>


        <!-- ===================****** inicio da página de cadastros *************======================== -->
        <section class="conteudo-cadastro container-fluid p-4">
            <h2 class="titulo-pagina mb-4">Cadastrar Contato</h2>

            <form class="form-evento-clean" id="formContato">

                <!-- Campos Básicos -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="titulo" class="form-label">Nome</label>
                        <input type="text" id="titulo" class="form-control" placeholder="Ex: Workshop de Tecnologia">
                    </div>
                    <div class="col-md-4">
                        <label for="data" class="form-label">email</label>
                        <input type="date" id="data" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">assunto</label>
                    <textarea id="descricao" class="form-control" rows="3"
                        placeholder="Insira os detalhes do evento..."></textarea>
                </div>

</section>


        <!-- =========================================
             RECURSOS
        ========================================== -->

        <section class="bg-white py-5">

            <div class="container">

                <div class="text-center mb-5">

                    <h2>
                        Recursos do sistema
                    </h2>

                    <p class="text-muted">

                        Funcionalidades disponíveis
                        na área administrativa.

                    </p>

                </div>


                <div class="row g-4">


                    <!-- Produtos -->

                    <div class="col-md-4">

                        <div class="card h-100 border-0 shadow-sm">

                            <div class="card-body text-center p-4">

                                <i class="bi bi-box-seam fs-1 text-purple"></i>

                                <h5 class="mt-3">
                                    Produtos
                                </h5>

                                <p class="text-muted">

                                    Cadastre e gerencie
                                    os produtos do sistema.

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Clientes -->

                    <div class="col-md-4">

                        <div class="card h-100 border-0 shadow-sm">

                            <div class="card-body text-center p-4">

                                <i class="bi bi-people fs-1 text-purple"></i>

                                <h5 class="mt-3">
                                    Clientes
                                </h5>

                                <p class="text-muted">

                                    Organize os dados dos
                                    clientes cadastrados.

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Funcionários -->

                    <div class="col-md-4">

                        <div class="card h-100 border-0 shadow-sm">

                            <div class="card-body text-center p-4">

                                <i class="bi bi-person-badge fs-1 text-purple"></i>

                                <h5 class="mt-3">
                                    Funcionários
                                </h5>

                                <p class="text-muted">

                                    Gerencie os funcionários
                                    cadastrados no sistema.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================
             CHAMADA PARA LOGIN
        ========================================== -->

        <section class="py-5">

            <div class="container">

                <div class="card bg-purple text-white border-0">

                    <div class="card-body text-center p-5">

                        <h2>
                            Pronto para acessar?
                        </h2>

                        <p class="mb-4">

                            Entre na área administrativa
                            para acessar os cadastros.

                        </p>

                        <a href="index.php?page=login"
                            class="btn btn-light btn-lg">

                            <i class="bi bi-lock me-2"></i>

                            Entrar no sistema

                        </a>

                    </div>

                </div>

            </div>

        </section>


    </main>


    <!-- =========================================
         RODAPÉ DA LANDING PAGE
    ========================================== -->

    <footer class="bg-purple text-white py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start">

                    <strong>
                        Sistema MVC
                    </strong>

                    <p class="text-white-50 mb-0">

                        Sistema de gerenciamento de cadastros.

                    </p>

                </div>


                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">

                    <span class="text-white-50">

                        Projeto desenvolvido com PHP e Bootstrap

                    </span>

                </div>

            </div>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>