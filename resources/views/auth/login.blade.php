<div>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        @if($invalid_credentials ?? false)
            Invalid credentials
        @endif
        <button type="submit">Login</button>
    </form>
</div> 