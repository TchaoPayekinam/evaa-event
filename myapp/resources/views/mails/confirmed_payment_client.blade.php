<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="background:#ffffff" width="100%">
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="padding:0 5px" width="570">
					<tbody>
						<tr>
							<td height="30" style="padding:0 20px;text-align:center;font-size:14px;color:#676a6c;line-height:24px" width="100%">
								<br>
								Bonjour, {{ $inscription->gender }} {{ $inscription->first_name }} {{ $inscription->last_name }}
								<br>
								<p>
                                    Vous avez rentré avec succès les détails de votre paiement. Ces informations sont en cours de vérification par notre équipe. le statut du paiement est actuellement <strong>En attente</strong>. Après vérification, votre paiement sera confirmé dans 24 heurs maximum. Veillez vous reconnecter à votre compte sur notre site pour vérifier le statut du paiement.
                                </p></td>
						</tr>

						<tr>
							<td height="30" width="100%">
								&nbsp;</td>
						</tr>

						<tr>
							<td align="center" style="padding:0 20px;text-align:center" valign="middle" width="100%">
								<table align="center" border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td align="center" bgcolor="#ffa340" height="45" style="background:#ffa340;border-radius:5px;padding:0 30px;font-weight:600;color:#ffffff;text-transform:uppercase">
												<a href="https://evaa-event.com/my-payments" style="color:#ffffff;font-size:14px;text-decoration:none;line-height:24px;width:100%" target="_blank" data-saferedirecturl="https://evaa-event.com/my-payments">Vérifier le statut de votre paiement</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td height="30" width="100%">
								&nbsp;</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:center;font-size:14px;color:#676a6c;line-height:24px" valign="middle" width="100%">
								&nbsp;</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:center;font-size:14px;color:#676a6c;line-height:24px" valign="middle" width="100%">
                                Si après 24 heures, le statut de votre paiement n'est pas <strong>Paiement confirmé</strong>, veillez nous contactez sur ce numéro : +228 92 04 05 94
								</td>
						</tr>

						<tr>
							<td height="40" width="100%">
								&nbsp;</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:center;font-size:16px;color:#aaaaaa;line-height:30px;font-weight:700" valign="middle" width="100%">
								Cordialement,<br>
								L'équipe Eva\'a Event & Com
							</td>
						</tr>
						<tr>
							<td height="40" width="100%">
								&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
