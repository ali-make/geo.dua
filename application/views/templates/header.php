<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<!--css online-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--custom.css-->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/signin-custom.css">
	<!--style HERE-->
	<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
	<style>
		#map {
			height: 35vw;
			width: 100vw;
			min-height: 300px;
		}
	</style>
</head>

<body class="bg-light">