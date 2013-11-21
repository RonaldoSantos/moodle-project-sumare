<?php 
	include '../functions/session_verification.php';
	include '../includes/header.php'; 
?>
<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
</style>

<?php include '../includes/loginBar.php'; ?>

<div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit">
		<h1>Bem Vindo, Administrador</h1>
		<p>Bem-vindo, a aplica&ccedil;&atilde;o web para aperfei&ccedil;oamento de seu conhecimento e aprendizado, baseado em acompanhamento autom&aacute;tico dos alunos, atraves da logica Fuzzy.</p>
		<p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
	</div>

	<!-- Example row of columns -->
	<div class="row">
		<div class="span4">
			<h2>Criar Usu&aacute;rios</h2>
			<p>Clique na guia “Usuário” e no link “Professor” ou “Aluno” ou “Administrador”. Insira o nome real do seu usuário, escolha um nome de usuário e registre a senha provisória. Em seguida, clique no botão “Cadastrar novo usuário”. Repita quantas vezes forem necessárias.</p>
			<div class="btn-group">
				<a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Criar Usu&aacute;rios</a>
				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="access.php?id=3"><i class="icon-pencil"></i> Professor</a></li>
					<li class="divider"></li>
					<li><a href="access.php?id=4"><i class="icon-user"></i> Aluno</a></li>
					<li class="divider"></li>
					<li><a href="access.php?id=2"><i class="icon-eye-open"></i> Administrador</a></li>
				</ul>
			</div>
		</div>
		<div class="span4">
			<h2>Cadastros</h2>
			<p>Clique no link “Disciplina”, insira o nome real do sua disciplina, escolha o tipo da disciplina, ou seja,”EAD” ou “Presencial” e a registre. Em seguida, clique no botão “Cadastrar Disciplina”. Repita quantas vezes forem necessárias.</p>
			<div class="btn-group">
				<a class="btn btn-primary" href="#"><i class="icon-book icon-white"></i>Cadastros</a>
				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="register_course.php"><i class="icon-asterisk"></i>Curso</a></li>
					<li class="divider"></li>
					<li><a href="register_team.php"><i class="icon-asterisk"></i>Turmas</a></li>
					<li class="divider"></li>
					<li><a href="register_discipline.php"><i class=" icon-asterisk"></i>Disciplinas</a></li>
				</ul>
			</div>
		</div>
		<div class="span4">
			<h2>Vincular</h2>
			<p>Clique no link “Vincular Professor”, insira o nome real do seu professor, escolha o tipo da disciplina, ou seja,”EAD” ou “Presencial” e a registre nas . Em seguida, clique no botão “Vincular Professor”. Repita quantas vezes forem necessárias.</p>
			<div class="btn-group">
				<a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i>Vincular</a>
				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#a"><i class="icon-asterisk"></i>Disciplinas para Usuários</a></li>
					<li class="divider"></li>
					<li><a href="#a"><i class="icon-asterisk"></i>Disciplinas para Cursos</a></li>
					<li class="divider"></li>
					<li><a href="#a"><i class="icon-asterisk"></i>Turmas para Cursos</a></li>
				</ul>
			</div>
		</div>
	</div>

	<hr>

	<footer>
		<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
	</footer>

</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>