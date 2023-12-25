<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar pago') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @dd($fillReport)
                <form action="{{ route('payment_register.update', $fillReport)}}" method="put">
                    @include('payment_register.form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>