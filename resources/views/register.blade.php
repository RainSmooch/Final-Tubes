@include('layout.loginstyle', ['title' => 'ITech - Register'])

<body>
    <div class="container">
        <div class="img">
            <img src="login.png" alt="Login">
        </div>

        <div class="login-content">
            <form action="{{ route('actionregister') }}" method="post">
                @csrf
                <img src="logo.png" alt="Logo">
                <h1 class="title">Register</h1>
                <h5 class="title">Ayo segera daftarkan dirimu di ITech!</h5>
                <hr>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="role" class="form-control" value="Guest" readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i>
                    Register</button>
                <hr>
                <a href="/" class="text" style="text-align: center">Sudah Punya Akun? Login Disini!</a>
            </form>
        </div>
    </div>
</body>

</html>
