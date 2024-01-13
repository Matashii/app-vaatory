<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Séances') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Liste des Séances</h1>

                <form method="POST" action="{{ route('seances.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="date" value="'Sélectionnez la date de la séance :'">Sélectionnez la date de la séance :</label>
                        <br>
                        <input type="date" name="date" id="date" class="form-input" required />

                        <label for="start_time" class="block text-sm font-medium text-gray-700">Heure de début de la séance :</label>
                        <input type="time" name="start_time" id="start_time" class="form-input" required>

                        <label for="end_time" class="block text-sm font-medium text-gray-700">Heure de fin de la séance :</label>
                        <input type="time" name="end_time" id="end_time" class="form-input" required>

                        <input type="hidden" name="coach_id" value="{{ Auth::user()->id }}">
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Place</th>
                            <th>Rameur</th>

                        </tr>
                        </thead>
                        <tbody>
                        @for ($i = 1; $i <= 6; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <label>
                                        <select name="rower{{ $i }}" class="form-select">
                                            <option value="">Sélectionnez un rameur</option>
                                            @foreach ($rowers as $rower)
                                                <option value="{{ $rower->id }}">{{ $rower->first_name }} {{ $rower->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <x-primary-button type="submit">Enregistrer la Séance</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
