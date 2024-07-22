@component('mail::message')
{{-- Salutation --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
# @lang('Bienvenue !')
@endif

{{-- Lignes d'introduction --}}
@lang('Merci de confirmer votre inscription, :lastName :firstName !', ['lastName' => $lastName, 'firstName' => $firstName])
@lang('Votre place pour la formation est réservée. Cliquez sur le bouton ci-dessous pour procéder au paiement des frais de formation')

{{-- Bouton d'action --}}
@isset($actionText)
@component('mail::button', ['url' => $actionUrl, 'color' => 'warning'])
{{ $actionText }}
@endcomponent
@endisset

{{-- Lignes de conclusion --}}

@lang('Veuillez conserver votre code de confirmation pour vos dossiers', ['confirmationCode' => $confirmationCode])

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
