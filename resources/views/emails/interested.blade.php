@component('mail::message')
# Boa notícia para você!!!

<center>
Os bolos abaixo estão disponíveis para entrega. Não perca tempo, mande uma mensagem ou clique no botão abaixo para ser redirecionado para nosso app delivery.
</center>

@component('mail::panel')
{{$cakes}}
@endcomponent

@component('mail::button', ['url' => '#','color' => 'success'])
Me entregue um bolo agora!!! ;)
@endcomponent

<small>
<center>
Agradecemos a preferência! =D
</center>
</small>

@endcomponent
