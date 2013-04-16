<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?= base_url() ?>assets/js/jquery.js"><\/script>')</script>
	<script src="<?= base_url() ?>assets/js/script.js"></script>
</head>
<body>
<div id="container">
    <div id="headder">
        
    </div>

	<?= $content ?>
	
</div> <!-- div container -->
</body>
</html>