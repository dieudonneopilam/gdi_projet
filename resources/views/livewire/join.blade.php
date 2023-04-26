<div class="register login">
    @if($valide)
    <div class="join-div">
        <p>Votre operation a été effectué avec success, vous serez communiquez apres le traitement de votre demande Merci!!! <br>
            <a class="join-sucess-button" href="{{ route('home') }}">OK</a>
        </p>
    </div>
    @else
    <div style="display: flex;justify-content: space-between;align-items: center">
        <a href="{{ route('home') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg></a>
        <p>REJOIGNEZ-NOUS</p>
    </div>
    <form wire:submit.prevent='submit' >
        <div class="group-form">
            <label for="email">mail</label>
            <input wire:model='email' type="email" id="mail">
            <p style="color: red;margin: 5px 0">
                @error('email')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="nom">nom</label>
            <input wire:model='nom' type="text" id="nom">
            <p style="color: red;margin: 5px 0">
                @error('nom')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="postnom">postnom</label>
            <input wire:model='postnom' type="text" id="postnom">
            <p style="color: red;margin: 5px 0">
                @error('postnom')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="prenom">prenom</label>
            <input wire:model='prenom' type="text" id="prenom">
            <p style="color: red;margin: 5px 0">
                @error('prenom')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="phone">num Tel</label>
            <input wire:model='phone' type="text" id="phone">
            <p style="color: red;margin: 5px 0">
                @error('prenom')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="date">date</label>
            <input wire:model='date' type="date" id="date">
            <p style="color: red;margin: 5px 0">
                @error('date')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <label for="date">province</label>
            <select wire:model='province' class="prv" name="province">
                <option>Bas-Uele</option>
                <option>Equateur</option>
                <option>Haut-lomami</option>
                <option>Haut-Uele</option>
                <option>Ituri</option>
                <option>Kasai</option>
                <option>Kasai-Central</option>
                <option>Kasai-Oriental</option>
                <option>Kinshasa</option>
                <option>Kongo-central</option>
                <option>Kwango</option>
                <option>Kwilu</option>
                <option>Lomami</option>
                <option>Lualaba</option>
                <option>Mai-Ndombe</option>
                <option>Maniema</option>
                <option>Mongala</option>
                <option>Nord-Kivu</option>
                <option>Nord-Ubangi</option>
                <option>Sankuru</option>
                <option>Sud-Kivu</option>
                <option>Sud-Ubangi</option>
                <option>Tanganyika</option>
                <option>Tshopo</option>
                <option>Tshuapa</option>
            </select>
            <p style="color: red;margin: 5px 0">
                @error('province')
                {{ $message }}
            @enderror
            </p>
        </div>
        
        <div class="group-form">
            <label for="etude">niveau d'etude</label>
            <input wire:model='niveau' type="text" id="etude">
            <p style="color: red;margin: 5px 0">
                @error('niveau')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form group-form-btn">
            <button type="submit" class="btn">joindre</button>
        </div>
    </form>
    @endif
</div>