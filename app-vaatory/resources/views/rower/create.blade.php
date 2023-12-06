<x-guest-layout>
    <x-slot name="style">
        <style>
            /* Vos styles CSS personnalisés ici */
            /* ... */

            /* Pour aligner le texte au centre */
            .text-center {
                color: #ffffff;
                font-size: 36px;
                margin: 50px;
                text-align: center;
            }

            .form-control {
                width: 100%;
            }
        </style>
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center">Add Rower</h1>

                    <div class="card-body">
                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <x-input-label class="first_name" for="first_name">Prénom:</x-input-label>
                                <x-text-input type="text" class="form-control" name="first_name"></x-text-input>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="last_name">Nom:</x-input-label>
                                <x-text-input type="text" class="form-control" name="last_name"></x-text-input>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="date_of_birth">Date de naissance:</x-input-label>
                                <x-text-input type="date" class="form-control-date" name="date_of_birth"></x-text-input>
                            </div>

                            <div class="mb-3 form-check">
                                <x-input-label for="availability">Disponibilité:</x-input-label>
                                <input type="checkbox" class="form-check-input" name="availability">
                            </div>

                            <div class="mb-3">
                                <x-primary-button class="btn btn-primary" type="submit">Créer</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
