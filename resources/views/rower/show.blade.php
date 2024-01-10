<x-guest-layout>
    <x-slot name="style">
        <style>
            h1 {
                font-size: 36px;
                text-align: center;
                margin-bottom: 30px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .profile-container {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #fff;
                border: 2px solid #040a18;
                border-radius: 0.375rem;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                padding: 20px;
                margin: 0 auto; /* Pour centrer horizontalement */
                width: 100%; /* Largeur de la boîte */
                /* max-width: 600px; Largeur maximale pour les grands écrans */
            }

            .profile-details {
                margin-bottom: 10px;
            }

            p {
                align-items: center;
                font-size: 18px;
            }
            .availability {
                font-size: 24px; /* Taille du symbole */
                /* Autres styles nécessaires */
            }
        </style>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 style="font-size: 36px; color: #ccc;">{{ $rower->first_name}} profile</h1>
                <div class="profile-container">
                    <div class="profile-details center">
                        <h1>Rower Details</h1>
                        <p><strong>First Name: </strong>{{ $rower->first_name }}</p>
                        <p><strong>Last Name: </strong>{{ $rower->last_name }}</p>
                        <p><strong>Date of Birth: </strong>{{ $rower->date_of_birth }}</p>
                        <p >
                            Availability :
                            @if($rower->availability)
                                <span class="availability">✔️</span> <!-- symbole de coche pour la disponibilité -->
                            @else
                                <span class="availability">❌</span> <!-- symbole de croix pour l'indisponibilité -->
                            @endif
                        </p>

                        <x-primary-button>
                            <a href="{{ route('rower.index') }}">Back to List</a>
                        </x-primary-button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
