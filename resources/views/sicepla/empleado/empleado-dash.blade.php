@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Plazos',
    'link' => route('jefedepto.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-handshake-o',
    'title' => 'Plazos Temporales',
    'link' => route('jefeacttemp.index')
])
@endcomponent