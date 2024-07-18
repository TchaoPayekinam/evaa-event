@component('mail::message')
{{-- Salutation --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
# @lang('Bienvenue !')
@endif

{{-- Lignes d'introduction --}}
@lang('Merci d\'avoir confirmer votre inscription, :lastName :firstName !', ['lastName' => $lastName, 'firstName' => $firstName])
@lang('Nous sommes ravi de vous comptez parmis nos participants')

{{-- Lignes de conclusion --}}

@lang('Voici le programme de la formation')

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