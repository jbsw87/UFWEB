<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
	<title>Liste des utilisateurs</title>
</head>

<body>
	<div class="header">
		<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>
	</div>
	<div class="content">
		Voici la liste des utilisateurs:
		<table>
			<tr>
				<th>Id</th>
				<th>Nom d'utilisateur</th>
				<th>Email</th>
			</tr>
			<?php
			//Je recupere les identifiants, les pseudos et les emails des utilisateurs
			$req = $bdd->prepare("select id, username, email from users");
			$req->execute();
			while ($dnn = $req->fetch(PDO::FETCH_ASSOC)) {
				?>
				<tr>
					<td class="left"><?php echo $dnn['id']; ?></td>
					<td class="left"><a href="profile.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></a></td>
					<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
				</tr>
			<?php
		}
		?>
		</table>
	</div>
	<div class="foot"><a href="<?php echo $url_home; ?>">Retour &agrave; l'accueil</a> </div>
</body>

</html>