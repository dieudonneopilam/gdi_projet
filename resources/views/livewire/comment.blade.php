@if($valide == true)
    <div class="join-div">
        <p>merci beaucoup pour votre commentaire<br>
            <button wire:click='ok' style="border: 1px solid transparent" class="join-sucess-button">OK</button>
        </p>
    </div>
@else
<form class="comment" wire:submit.prevent='submit' >
    <div class="group-form">
        <label for="nom">nom</label>
        <input wire:model='nom' id="nom" type="text" placeholder="Entrez votre nom">
        <p style="color: red;margin: 5px 0">
            @error('nom')
            {{ $message }}
        @enderror
        </p>
    </div>
    <div class="group-form">
        <label for="mail">mail</label>
        <input id="mail" type="email" wire:model='email' placeholder="entrez votre mail">
        <p style="color: red;margin: 5px 0">
            @error('email')
            {{ $message }}
        @enderror
        </p>
    </div>
    <div class="group-form">
        <label for="sexe">sexe</label>
        <select id="sexe" wire:model='sexe' >
            <option value="rd congo">MASCULIN</option>
            <option value="france">FEMININ</option>
        </select>
        <p style="color: red;margin: 5px 0">
            @error('sexe')
            {{ $message }}
        @enderror
        </p>
    </div>
   <div class="group-form">
    <label for="pays">Choisissz votre Pays</label>
    <select id="pays" wire:model='pays' >
        <option value="rd congo">RD Congo</option>
        <option value="france">France</option>
        <option value="burundi">Burundi</option>
        <option value="uganda">Uganda</option>
        <option value="anglaiterre">Anglaiterre</option>
        <option value="Espagne">Espagne</option>
        <option value="Italie">Italie</option>
        <option value="Turkye">Turkye</option>
        <option value="Canada">Canada</option>
    </select>
    <p style="color: red;margin: 5px 0">
        @error('pays')
        {{ $message }}
    @enderror
    </p>
   </div>
    <div class="group-form">
        <textarea wire:model='comment' rows="3" cols="50" placeholder="Entrez votre commentaire"></textarea> 
        <p style="color: red;margin: 5px 0">
            @error('comment')
            {{ $message }}
        @enderror
        </p>
    </div>
    <div class="group-form">
        <input type="submit" name="envoyer" value="envoyez">
    </div>
</form>
@endif
