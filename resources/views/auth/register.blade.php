<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <button type="submit">{{ __('Register') }}</button>
</form>
