<x-mail::message>
# Introduction

The body of your message {{ $name }} .

<x-mail::button :url="$url">
Button Text
</x-mail::button>

<x-mail::panel>
This is the panel content.
</x-mail::panel>
<br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
