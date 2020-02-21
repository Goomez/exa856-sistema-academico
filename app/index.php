<?php
session_start();
if (isset($_SESSION['ID'])) {
    header('Location: dashboard.php');
    exit();
}
include '_head.php';
?>
<style>
    .border-20{
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
    }
    #corpo{
        /* margin-top: 10%; */
        padding-right: 30%;
        padding-left: 30%;
    }
    #logo{
        width: 40%;
    }
</style>
<title>Login</title>
<body class="bg-dark">
    <div class="container-fluid p-3 text-center">
        <div id="corpo" class="">
            <div id="form-corpo" class="p-4 bg-white shadow border-20 mt-5">
                <img id="logo" src="logo.png" alt="SysAcademy">
                <p class="h1 text-dark">Sistema Acadêmico</p>
                <p class="">Olá! Insira seu usuário e senha disponibilizado por nós.</p>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="usuario" id="Usuario" class="form-control" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success rounded">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
