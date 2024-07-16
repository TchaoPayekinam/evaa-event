<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nouvelle soumission de formulaire de contact</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
		}
		.title {
			font-size: 20px;
			margin-bottom: 20px;
			font-weight: bold;
		}
		.content {
			margin-bottom: 10px;
		}
		.footer {
			margin-top: 20px;
			font-size: 12px;
			color: #777;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">Nouvelle soumission de formulaire de contact</div>
		<p>Bonjour,</p>
		<p>Vous avez reçu une nouvelle soumission de formulaire de contact. Voici les détails :</p>
		
		<div class="content">
			<strong>Nom :</strong> {{ $contact->last_name }}<br>
			<strong>Prénom :</strong> {{ $contact->first_name }}<br>
			<strong>Téléphone :</strong> {{ $contact->phone }}<br>
			<strong>Email :</strong> {{ $contact->email }}<br>
			@if($contact->society)
			<strong>Société :</strong> {{ $contact->society }}<br>
			@endif
			<strong>Message :</strong><br>
			{{ $contact->message }}
		</div>
		
		<p>Veuillez traiter cette demande dans les plus brefs délais.</p>
		
		<div class="footer">
			Cordialement,<br>
			L'équipe Eva\'a Event & Com
		</div>
	</div>
</body>
</html>
