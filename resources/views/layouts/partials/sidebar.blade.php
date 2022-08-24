<x-maz-sidebar :href="url('/dashboard')" :logo="asset('images/logo/logo.png')">

    @if($menu == 'home')
        @if ($type_user == 'super_admin')
            <x-maz-sidebar-item name="Colaboradores" :link="route('show_home_collaborators')"
                                icon="bi bi-people-fill"></x-maz-sidebar-item>
        @endif
        <x-maz-sidebar-item name="Productos" :link="route('show_home_products',['people' => $people])"
                            icon="bi bi-box-seam"></x-maz-sidebar-item>
    @else
        <x-maz-sidebar-item name="Home" :link="url('dashboard' )"
                            icon="bi bi-house-fill"></x-maz-sidebar-item>
    @endif
    @if($menu == 'products')
            <x-maz-sidebar-item name="Productos" :link="route('show_home_products',['people' => $people])"
                                icon="bi bi-box-seam"></x-maz-sidebar-item>
    @endif
</x-maz-sidebar>


