<!-- Sessione recuperate dal destroy nel controller con il relativo messaggio -->
@if(session('message'))
<div class="alert alert-{{session('type')}} my-3">
    {{ session('message')}}
</div>
@endif