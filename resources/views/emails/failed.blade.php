@component('mail::message')
# @lang('Hello!')

@lang('There has been a failed login attempt to your :app account.', ['app' => config('app.name')])

> **@lang('Account:')** {{ $account->email }}<br/>
> **@lang('Time:')** {{ $time->toCookieString() }}<br/>
> **@lang('IP Address:')** {{ $ipAddress }}<br/>
> **@lang('Browser:')** {{ $browser }}<br/>

@lang('If this was you, you can ignore this alert. If you suspect any suspicious activity on your account, please change your password.')<br/>

@lang('Regards,')<br/>
{{ config('app.name') }}
@endcomponent
