<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-12 gx-lg-12 row-cols-12 row-cols-md-12 row-cols-xl-12 justify-content-center">
            <h1>Edit Product</h1>
            <form id="contactForm" action="<?=Path::url("answer") ?>" method="post">
                <input type="hidden" name="action" value="<?=Path::url("answer") ?>">
                <!-- Name input -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" pattern="^[A-Za-z]+[ ]{1}[A-Za-z]+$" required placeholder="Name" />
                </div>

                <!-- Email address input -->
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" name="email" type="email" required placeholder="Email Address" />
                </div>

                <!-- Message input -->
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" required type="text" placeholder="Message" style="height: 10rem;"></textarea>
                </div>
                <!-- Form submit button -->
                <div class="d-grid">
                    <button class="g-recaptcha btn btn-primary btn-lg"
                            data-sitekey="6Lf_U0QeAAAAAIv_Y-1wNF31uNn56yyl1pYY4sAX"
                            data-callback='onSubmit'
                            data-action='<?=Path::url("answer") ?>'>Submit</button>
                </div>

            </form>

            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onSubmit(token) {
                    document.getElementById("contactForm").submit();
                }
            </script>

        </div>
    </div>
</section>
