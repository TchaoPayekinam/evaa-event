@component('mail::message')
{{-- Salutation --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
# @lang('Bienvenue !')
@endif

{{-- Lignes d'introduction --}}
@lang('Merci de vous être inscrit, :lastName :firstName !', ['lastName' => $lastName, 'firstName' => $firstName])
@lang('Nous sommes ravis de vous compter parmi nos participants. Veuillez confirmer votre inscription en cliquant sur le bouton ci-dessous.')

{{-- Bouton d'action --}}
@isset($actionText)
@component('mail::button', ['url' => $actionUrl, 'color' => 'warning'])
{{ $actionText }}
@endcomponent
@endisset

{{-- Lignes de conclusion --}}

@lang('Si vous etes nouveau et vous avez choisi **je n\'ai pas de compte** lors de l\'inscription !')
@lang('Sachez que, nous vous avons créer automatiquement un compte qui vous permettra d\'accéder à votre tableau de bord et de confirmer vos inscriptions et payements.')

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Cordialement'),<br>
{{ config('app.name') }}
@endif

{{-- Sous-texte --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si vous avez des difficultés à cliquer sur le bouton \":actionText\", copiez et collez l'URL ci-dessous\n".
    'dans votre navigateur web :',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
