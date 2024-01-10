<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rower List') }}
        </h2>
    </x-slot>
    <x-slot name="style">
        <style>
            .text-center{
                color: #cccccc;
                font-size: 56px;
                margin: 50px;
            }
            /* Ajoutez vos styles CSS ici pour personnaliser l'apparence du tableau */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
                color: white; /* Couleur du texte */
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #3b4e61;
                color: #cccccc;
            }

            tr:nth-child(even) {
                background-color: #ffffff; /* Couleur de fond des lignes paires */
                color: #000000; /* Couleur du texte pour contraster avec le fond */
            }

            tr:nth-child(odd) {
                background-color: #f2f2f2; /* Couleur de fond des lignes impaires */
                color: #000000; /* Couleur du texte pour contraster avec le fond */
            }

            .center-div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .center-content {
                width: 80%; /* Ajustez la largeur du contenu selon vos besoins */
            }

            .add{
                background-color: #0f8623;
                border: #cccccc 2px solid;
                border-radius: 8px;
                margin-bottom: 10px;
                padding: 5px;
            }

           .show{
            display:flex;
            justify-content: left;
            margin-right: 10px;
            background: #86660f
           }

           .show:hover{
            background-color: #86660f
           }

           .button-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }


            .delete form {
                margin-left: 10px; /* Espacement entre les boutons */
            }

            /* Styles pour les boutons */
            .primary-button {
                background-color: #0f8623;
                border: #cccccc 2px solid;
                border-radius: 8px;
                margin-bottom: 10px;
                padding: 5px;
                margin-right: 5px; /* Espacement entre les boutons */
                text-align: center;
            }

            .primary-button a {
                text-decoration: none;
                color: #ffffff;
            }
            .primary-button a:hover {
                
                background: #556699            }

        </style>
    </x-slot>

    <div class="center-div">
        <div class="center-content">
            <h1 class="text-center">Rower list</h1>
            <button class="add">
                <a href="/rower/create" class="btn btn-primary mb-3">Add rower</a>
            </button>

            <table class="table">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Date of birth</th>
                    <th>Available</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rowers as $rower)
                    <tr>
                        <td>{{ $rower->first_name }}</td>
                        <td>{{ $rower->last_name }}</td>
                        <td>{{ $rower->date_of_birth }}</td>
                        <td>{{ $rower->availability ? 'Yes' : 'No'}}</td>
                    <<td>
                        <div class="button-container">
                            <x-primary-button class="show">
                                <a href="{{ route('rower.show', $rower->id) }}">Voir</a>
                            </x-primary-button>
                            <x-primary-button>
                                <a href="{{ route('rower.edit', $rower->id) }}">Modifier</a>
                            </x-primary-button>
                            <div class="delete">
                                <form action="{{ route('rower.destroy', $rower->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button type="submit">Supprimer</x-primary-button>
                                </form>
                            </div>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-app-layout>
