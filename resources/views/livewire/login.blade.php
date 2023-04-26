<div class="login">
    <div style="display: flex;justify-content: space-between;align-items: center;margin: 20px 0">
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
              </svg>
        </a>
        <p>Connectez-vous</p>
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
            <label for="password">password</label>
            <input wire:model='password' type="password" id="password">
            <p style="color: red;margin: 5px 0">
                @error('password')
                {{ $message }}
            @enderror
            </p>
        </div>
        <div class="group-form">
            <p style="color: red;margin: 5px 0">
                
                @if($error!="")
                <p style="color: red;margin: 5px 0">
                    {{ $error }}
                </p>
                @endif
            </p>
        </div>
        <div class="group-form">
            <button type="submit" class="btn">connexion</button>
        </div>
    </form>
</div>
