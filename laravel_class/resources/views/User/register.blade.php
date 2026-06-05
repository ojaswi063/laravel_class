<style>
    div{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    fieldset {
        width: 300px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    legend {
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    li {
        color: red;
    }
    input[type="file"] {
        margin: 20px 0 20px 0;
        border: 1px solid #ccc;
        border-radius: 100em;
        padding: 10px;
    }
</style>

<div>
    <fieldset>
        <legend>Register</legend>
    <form action="/users/store"  method="POST">
        @csrf

        <input type="file" name="profile_image" accept="image/*">
        <input type="text" placeholder="Name" name="name" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
        <button type="submit">Register</button>
    </form>
        <p>Already have an account? <a href="/user/login">Login here</a></p>
    </fieldset>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
