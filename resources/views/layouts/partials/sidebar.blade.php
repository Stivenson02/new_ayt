<x-maz-sidebar :href="url('/dashboard')" :logo="asset('images/logo/logo.png')">

    @if ($type_user == 'super_admin')
        <x-maz-sidebar-item name="Colaboradores" :link="route('show_home_collaborators')"
                            icon="bi bi-grid-fill"></x-maz-sidebar-item>
    @endif
</x-maz-sidebar>


