<x-guest-layout>
    <x-slot name="style">
        <style>
            /* Styles généraux */
            .text-center {
                color: #ffffff; /* Changer la couleur du texte en blanc */
                font-size: 36px;
                margin: 50px;
                text-align: center; /* Centrer le texte */
            }

            /* Styles spécifiques pour cette page */
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .input-label {
                margin-bottom: 10px;
            }

            .text-input {
                padding: 8px;
                margin-bottom: 15px;
                width: 200px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            .submit-button {
                padding: 10px 20px;
                background: #ffcc00;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .center-div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50%;
            }

            .center-content {
                width: 80%; /* Ajustez la largeur du contenu selon vos besoins */
            }

            .submit-button{
                margin-top: 10px;
            }
        </style>
    </x-slot>
    <div class="center-div">
        <div class="center-content">
            <h1 class="text-center">Edit Rower {{ $rower->first_name }}</h1>
            <form action="{{ route('rower.update', $rower->id) }}" method="POST">
                @csrf
                @method('PUT')
                <x-input-label class="input-label" for="first_name">First Name:</x-input-label>
                <x-text-input class="text-input" type="text" name="first_name" style="width: 100%;" value="{{ $rower->first_name }}" /><br>
                <x-input-label class="input-label" for="last_name">Last Name: </x-input-label>
                <x-text-input class="text-input" type="text" name="last_name" style="width: 100%;" value="{{ $rower->last_name }}" /><br>
                <x-input-label for="date_of_birth">Date of birth:</x-input-label>
                <x-text-input type="date" class="form-control-date" name="date_of_birth" style="width: 100%" value="{{ $rower->date_of_birth}}"></x-text-input>
                    <form action="{{ route('rower.update', $rower->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="availability">Available:</label>
                        <input type="checkbox" name="availability" {{ $rower->availability ? 'checked' : '' }}>

                        <!-- Autres champs à éditer -->

                        <x-primary-button class="submit-button" type="submit">Update</x-primary-button>
                    </form>
            </form>
        </div>
    </div>
</x-guest-layout>
