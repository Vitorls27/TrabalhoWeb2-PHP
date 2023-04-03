<?php
include '../Util.php';

if(!empty($_POST)){
    Util::logar($_POST);
}elseif(!empty($_GET['sair'])){
  Util::logoff();
}
$_SESSION['login'] = null;
?>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>PHP Test</title>
  </head>
  <body>
		<h3>Login Sistema Academico</h3>
		<form action="login.php" method="post">
			<?php
				if(isset($_GET["msg"])){
					echo "<b style='color:red;'>Login ou senha errado, por favor tente novamente!</b><br>";
				}
			?>
			<label>Login</label><br>
			<input type="text" name="login" placeholder="usuario"><br>
			<label>Senha</label><br>
			<input type="password" name="senha" placeholder="******"><br><br>
			<input type="submit" value="Logar" class="btn btn-primary"/>
		</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>