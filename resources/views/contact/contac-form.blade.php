@component('mail::message')

<h3> New Message From {{$contact_form_data['InputSubject']}}</h3>
<p>Name: {{$contact_form_data['InputName']}}</p>
<p>Name: {{$contact_form_data['InputMessage']}}</p>
@endcomponent
