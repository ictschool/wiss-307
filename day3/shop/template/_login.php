<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <form id="loginForm" action="<?=Path::url("login") ?>" method="post">
                <input type="hidden" name="action" value="<?=Path::url("login") ?>">
                <!-- Name input -->
                <div class="mb-3">
                    <label class="form-label" for="name">Username</label>
                    <input class="form-control" id="name" type="text" name="name" minlength="3" required placeholder="Name" />
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" required placeholder="Password" />
                </div>

                <!-- Form submit button -->
                <div class="d-grid">
                    <button class="g-recaptcha btn btn-primary btn-lg"
                            data-sitekey="6Lf_U0QeAAAAAIv_Y-1wNF31uNn56yyl1pYY4sAX"
                            data-callback='onSubmit'
                            data-action='<?=Path::url("login") ?>'>Login</button>
                </div>

            </form>

            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onSubmit(token) {
                    document.getElementById("loginForm").submit();
                }
            </script>

            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?=Path::url('register') ?>">Register</a></div>

        </div>
    </div>
</section>

