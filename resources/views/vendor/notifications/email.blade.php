@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Welcome to Scroda')
@endif
@endif

{{-- Intro Lines --}}
{{--@foreach ($introLines as $line)
{{ $line }}

@endforeach--}}

<p>With Scroda being the next-generation, revolutionized infrastructure, directed towards realizing true global democracy, true freedom, and true equality. We believe that the success of such mission relies directly in ridding the world of hunger and poverty. This presents the Scroda function where all Scroda ID users within the Scroda network, will receive monthly rewards of SCR.
</p>
<p><Strong>Limited Edition Scroda ID Headset Offer</Strong></p>
<p>The Scroda ID headset is the access point to the unrestricted use of Scroda’s infrastructure, any participant who has obtained over 50,000 SCR during phase 1 of the Coin Distribution Event will receive a limited edition Scroda ID-accessing headset, upon the purchase of their Scroda ID headset.
</p>
<p>If you are ready to proceed as part of the Scroda family please click the link below.
</p>

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang(
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endcomponent
@endisset
@endcomponent
