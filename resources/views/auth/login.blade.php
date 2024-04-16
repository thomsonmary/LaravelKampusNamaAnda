<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" 
        required autofocus>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">{{ __('Login') }}</button>
</form>
