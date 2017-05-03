<!DOCTYPE html>
<html>
<head>
	<title><?= $titre ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>

<ul id="menu">
	<img id="nyan" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAACgCAMAAADHEAL6AAAAFVBMVEX///8AAAD/mf+ZmZn/zJn/M5n/mZly7fXaAAABxUlEQVR4nO3au3LCMBBAUUhI/v+T08jNzmy0shdjmHNLoueBQkVut6buF6nrPiBAgAABAgSI8wAeF+llICBAgAABAgSINoCvk3o5CAgQIECAAAGiDWL1Ij+j6udVEBAgQIAAAQLE+0AcvUhXIECAAAECBIj3hzjaPRT/nkFnEHE9ECBAgAABAsTnQWzrfocykBnEbD0QIECAAAECxHGIODHWDZE9iLKDV0EixGwdECBAgAABAkQfRDYhTjwKkTW7QHauWHU+CBAgQIAAAaIPogpShVj9h5HqRY4GAgQIECBAgOiD2Aty9EG1QZ0FUAYBAQIECBAgQCxDrIJEiNUH1NYMIp6retHZPBAgQIAAAQJEP0QGEjv6oKpCzL6YOK46DwQIECBAgADxPIgZzCpE9uCKB/0NZRdfLa4LAgQIECBAgDgPIoI8QrMLZ1Uh4rjVz0GAAAECBAgQ14WIIKtlF4oXWy1bZzcACBAgQIAAAWI3QCwD2dsMZG/tvwQQIECAAAECRBlgtsHVa/slgBiBGIEYgRiBGIEYgRjNAKrju/bt3g8ECBAgQIAA8TyIrOr47v1n4/but3wQECBAgPjvICBAfCbEH+yzElBvujPUAAAAAElFTkSuQmCC">
	<li><a href="index.php">Accueil</a></li>
	<li><a href="index.php?p=articles">Liste des articles</a></li>
	<li><a href="index.php?p=pageTrois">Page Trois</a></li>
	<li><a href="index.php?p=livre">Livre d'or</a></li>
	<li id="admin"><a href="index.php?p=admin">Admin</a></li>
</ul>
<div id="grosContenaire">
<div id="contenaire">
	<?= $content; ?>
</div>
</div>
</body>
</html>