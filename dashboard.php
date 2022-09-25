<?php
require __DIR__ . "/header.php";
?>

<body>
    <div class="content">

        <div class="dashboard">

            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Fechar Menu</a>
                <nav>
                    <ul>
                        <li><a href=""><i class="fa-solid fa-user-group"></i>Clientes</a></li>
                        <li><a href=""><i class="fa-solid fa-dollar-sign"></i>Vendas</a></li>
                        <li><a href=""><i class="fa-solid fa-cart-shopping"></i>Produtos</a></li>
                        <li><a href=""><i class="fa-solid fa-truck-arrow-right"></i>Entregas</a></li>
                        <li><a href=""><i class="fa-solid fa-briefcase"></i>Fornecedores</a></li>
                        <li><a href=""><i class="fa-solid fa-user"></i>Vendedores</a></li>
                        <li><a href=""><i class="fa-solid fa-users"></i>Usuários</a></li>
                        <li><a href=""><i class="fa-solid fa-chart-column"></i>Relatórios</a></li>
                    </ul>
                </nav>
            </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">&#9776; Abrir Menu</button>
                <div class="logo">
                    <img src="assets/images/logotipo_santos_moveis.png" alt="" srcset="">
                </div>
            </div>

            <div class="container">
                <div class="profile">
                    <p>Olá Usuário, seja bem-vindo(a)!</p>
                    <p><i class="fa-solid fa-user"></i></p>
                </div>

                <div class="panel">
                    <h2>Resumo</h2>
                    <div class="panel-money">
                        <div class="panel-eye">
                            <button onclick="eyeClose()"><i class="fa-solid fa-eye"></i></button>
                        </div>
                        <div class="panel-cash">
                            <small>Saldo atual</small>
                            <h2 id="close">R$ 100.275,91</h2>
                        </div>
                    </div>
                </div>

                <div class="main-dashboard">
                    <div class="main-dashboard-outdoor sucess">
                        <div class="main-dashboard-outdoor-title">
                            <p>Clientes</p>
                        </div>
                        <h2>10</h2>
                    </div>
                    <div class="main-dashboard-outdoor alert">
                        <div class="main-dashboard-outdoor-title">
                            <p>Produtos</p>
                        </div>
                        <h2>10</h2>
                    </div>
                    <div class="main-dashboard-outdoor blue">
                        <div class="main-dashboard-outdoor-title">
                            <p>Fornecedores</p>
                        </div>
                        <h2>10</h2>
                    </div>
                    <div class="main-dashboard-outdoor users">
                        <div class="main-dashboard-outdoor-title">
                            <p>Usuários</p>
                        </div>
                        <h2>10</h2>
                    </div>
                    <div class="main-dashboard-outdoor">
                        <div class="main-dashboard-outdoor-title">
                            <p>Faturamento</p>
                        </div>
                        <div class="main-dashboard-outdoor-indor">
                            <p>Previsto</p>
                            <div class="main-dashboard-outdoor-indor-text alert">
                                <h2>R$</h2>
                                <h2>53.429,92</h2>
                            </div>
                        </div>
                        <div class="main-dashboard-outdoor-indor">
                            <p>recebido</p>
                            <div class="main-dashboard-outdoor-indor-text sucess">
                                <h2>R$</h2>
                                <h2>53.429,92</h2>
                            </div>
                        </div>
                    </div>
                    <div id="grafics">

                    </div>

                </div>

            </div>
        </div><!-- dashboard -->

    </div>
</body>
<script src="assets/js/index.js"></script>

</html>