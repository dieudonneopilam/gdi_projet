<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-d68d0937.css') }}" >
</head>
<body>
    <div class="register login">
        <div style="display: flex;justify-content: space-between">
            <a href="{{ route('user.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
              </svg></a>
            <p>ajouter un agent annuaire</p>
        </div>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="group-form">
                <label for="email">mail</label>
                <input name="email" type="email" id="mail">
                <p style="color: red;margin: 5px 0">
                    @error('email')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="nom">nom</label>
                <input name="nom" type="text" id="nom">
                <p style="color: red;margin: 5px 0">
                    @error('nom')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="postnom">postnom</label>
                <input name="postnom" type="text" id="postnom">
                <p style="color: red;margin: 5px 0">
                    @error('postnom')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="etude">fonction</label>
                <input name="fonction" type="text" id="etude">
                <p style="color: red;margin: 5px 0">
                    @error('fonction')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="password">password</label>
                <input name="password" type="password" id="password">
                <p style="color: red;margin: 5px 0">
                    @error('password')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="date">confirm password</label>
                <input name="password_confirmation" type="password" id="date">
                <p style="color: red;margin: 5px 0">
                    @error('confirmation')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="phone">num Tel</label>
                <input name="phone" type="text" id="phone">
                <p style="color: red;margin: 5px 0">
                    @error('phone')
                    {{ $message }}
                @enderror
                </p>
            </div>
            <div class="group-form">
                <label for="phone">Description</label>
                <textarea name="description" id="" cols="30" rows=""></textarea>
                <p style="color: red;margin: 5px 0">
                    @error('phone')
                    {{ $message }}
                @enderror
                </p>
            </div>
            
            <div class="group-form">
                <label for="phone">photo</label>
                <input name="file" type="file" id="file">
                <p style="color: red;margin: 5px 0">
                    @error('phone')
                    {{ $message }}
                @enderror
                </p>
            </div>
            
            <div class="group-form group-form-btn">
                <button type="submit" class="btn">joindre</button>
            </div>
        </form>
    </div>
     <script src="{{ asset('build/assets/app-657bc052.js') }}"></script>
</body>
</html>