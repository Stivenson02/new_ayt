<x-app-layout menu="home" type_user="{{($company_people['type_user'])}}" people="{{($company_people['slug'])}}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('dashboard.show_products')

</x-app-layout>
