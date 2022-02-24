<a href="/">Teams</a>

<div>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm your password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit">Register</button>
    </form>
</div>