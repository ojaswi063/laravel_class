
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
</style>


<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->

    <fieldset>
        <legend>Login</legend>
        <form action="/users/login" method="POST" >
            @csrf
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="/user/register">Register here</a></p>
    </fieldset>


    @if ($errors->any()) 
        <div>
            <ul>
                @foreach($errors as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


</div>
