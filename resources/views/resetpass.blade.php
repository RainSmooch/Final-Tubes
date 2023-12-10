@include('layout.loginstyle', ['title' => 'ITech - Reset Password'])

<body>

    <div class="container">
        <div class="img">
            <img src="{{ asset('login.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="login-content">
            <form autocomplete="off" action="{{ route('reset.password') }}" class="" method="POST">
                @csrf
                <img src="{{ asset('logo.png') }}" alt="Deskripsi Gambar">
                <h3 class="title">Ganti Password</h3>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="new-password" class="input" placeholder="New Password" required>
                    </div>
                </div>
                <button type="submit" class="btn">GANTI PASSWORD</button>
                <a class="text" style="text-align: center" href="/">Kembali ke Halaman Login</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('main.js') }}"></script>

</body>

</html>
