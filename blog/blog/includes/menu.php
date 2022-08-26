<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav-link flex-column">
            <li class="nav-link">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="usuario_formulario.php">Cadastrre-se</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="login_formulario.php">Login</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="post_formulario.php">Incluir Post</a>
            </li>
            <?php if((isset($_SESSION['login']))
                    && ($_SESSION['login']['usuario']['adm'] === 1)) : ?>
            <li class="nav-link">
                <a class="nav-link" href="usuarios.php">Usuários</a>
            </li>
            <?php endif; ?>   
        </ul>
    </div>
</div>