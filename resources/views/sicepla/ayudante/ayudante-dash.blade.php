@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Plazos',
    'link' => route('admindepto.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-handshake-o',
    'title' => 'Plazos Temporales',
    'link' => route('activtemporal.index')
])
@endcomponent