@component('mail::message')
# Hi {{$applicant->surname}},
# Your visit link is here.

With this link you can edit your application detail any time you want until final closing date.
 --please do no share this link !
@component('mail::button', ['url' => $user_url])
Click Here to visit
@endcomponent

having trouble ?
Call: 071 3499344

Thanks,<br>
{{ config('app.name') }}
@endcomponent
