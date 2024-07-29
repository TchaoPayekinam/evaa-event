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
			<td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';padding:25px 0;text-align:center">
				<a href="https://evaa-event.com" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block" target="_blank">
					<img src="https://evaa-event.com/event/assets/img/logo.png" alt="EECO Logo" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100%;border:none;height:75px;max-height:75px;width:180px" class="CToWUd" data-bit="iit">
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="padding:0 5px" width="570">
					<tbody>
						<tr>
							<td height="30" style="padding:0 20px;text-align:left;font-size:14px;color:#676a6c;line-height:24px" width="100%">
								<br>
								Bonjour {{ $inscription->gender }} {{ $inscription->first_name }} {{ $inscription->last_name }},<br>
								<br>
								<!-- <strong>Merci pour votre inscription à notre superbe newsletter ! </strong> -->
								Nous confirmons votre paiement réalisé sur notre site.&nbsp;</td>
						</tr>
						
						<!-- <tr>
							<td height="30" width="100%">
								&nbsp;</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:center" valign="middle" width="100%">
								<table align="center" border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td align="center" bgcolor="#ffa340" height="45" style="background:#ffa340;border-radius:5px;padding:0 30px;font-weight:600;color:#ffffff;text-transform:uppercase">
												<a href="https://fuligo-enterprises.com" style="color:#ffffff;font-size:14px;text-decoration:none;line-height:24px;width:100%" target="_blank" data-saferedirecturl="https://fuligo-enterprises.com">Oui, m'inscrire à cette NEWSLETTER</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr> -->
						<tr>
							<td height="30" width="100%">
								&nbsp;</td>
						</tr>
						
						<tr>
							<td align="center" style="padding:0 20px;text-align:left;font-size:14px;color:#676a6c;line-height:24px" valign="middle" width="100%">
								@if($inscription->type == 'registration_fees') {{ trans('user-payments.registration_fees') }} @else {{ trans('user-payments.training_costs') }} @endif - {{ $inscription->event_name }}
								<br>
								{{ trans('user-payments.inscription_id') }}: {{ $inscription->confirmationCode }}
								<br>
								{{ trans('user-payments.amount') }}: {{ $inscription->amount }} FCFA
								<br>
								{{ trans('user-payments.payment_method') }}: {{ $inscription->method }}
							</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:left;font-size:14px;color:#676a6c;line-height:24px" valign="middle" width="100%">
								&nbsp;</td>
						</tr>
						<tr>
							<td align="center" style="padding:0 20px;text-align:left;font-size:14px;color:#676a6c;line-height:24px" valign="middle" width="100%">
								Veuillez vous rendre sur la page des paiements dans votre compte pour télécharger le reçu de paiement.</td>
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