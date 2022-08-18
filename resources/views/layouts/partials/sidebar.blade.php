<x-maz-sidebar :href="url('/dashboard')" :logo="asset('images/logo/logo.png')">

    @if ($type_user == 'super_admin')
        <x-maz-sidebar-item name="Colaboradores" :link="route('show_home_collaborators')"
                            icon="bi bi-people-fill"></x-maz-sidebar-item>
    @endif
        <x-maz-sidebar-item name="Productos" :link="route('show_home_products')"
                            icon="bi bi-box-seam"></x-maz-sidebar-item>
</x-maz-sidebar>


