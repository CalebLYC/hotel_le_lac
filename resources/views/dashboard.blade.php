<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <h2>Mes réservations</h2>
    <!-- Table with stripped rows -->
    <table class="table table-striped m-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Chambre</th>
                <th scope="col">Date d'entrée</th>
                <th scope="col">Date de sortie</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->room->id }} - {{ $booking->room->name }}</td>
                    <td>{{ $booking->checkin_date }}</td>
                    <td>{{ $booking->checkout_date }}</td>
                    <td class="row">
                        <span class=" link-danger delete-link m-1" onclick="remove({{ $booking->id }})"
                            style="cursor: pointer;"
                            onclick='document.getElementById("delete{{ $booking->id }}").submit()'>Supprimer</span>
                    </td>
                    <form action="{{ route('bookings.destroy', ['id' => $booking->id]) }}"
                        id="delete{{ $booking->id }}" method="post" hidden>
                        @csrf
                        @method('delete')
                    </form>
                </tr>
            @empty
                <tr>
                    <td class="row w-100 align-center m-3">
                        <p class="text-bold">Aucune réservation éfectuée</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- End Table with stripped rows -->
</x-app-layout>
