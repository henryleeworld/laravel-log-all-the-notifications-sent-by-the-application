@component('mail::message')
# @lang('Hello!')

@lang('Your :app account logged in from a new device.', ['app' => config('app.name')])

> **@lang('Account:')** {{ $account->email }}<br/>
> **@lang('Time:')** {{ $time->toCookieString() }}<br/>
> **@lang('IP Address:')** {{ $ipAddress }}<br/>
> **@lang('Browser:')** {{ $browser }}<br/>

@lang('If this was you, you can ignore this alert. If you suspect any suspicious activity on your account, please change your password.')

@lang('Regards,')<br/>
{{ config('app.name') }}
@endcomponent
