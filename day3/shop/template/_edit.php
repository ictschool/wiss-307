<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-12 gx-lg-12 row-cols-12 row-cols-md-12 row-cols-xl-12 justify-content-center">
            <h1>Edit Product</h1>

            <?php
            if(isset($_POST['id'])){
                if(!preg_match('/^1[0-9]{3}2022$/', $_POST['id'])){
                    echo <<<PIPFAX
                    <div class="alert alert-danger" role="alert">
                      Format for id {$_POST['id']} is wrong!
                    </div>
PIPFAX;
                }else{
                    echo <<<VELO
                    <div class="alert alert-success" role="alert">
                      id {$_POST['id']} is saved
                    </div>
VELO;
                }
                foreach ($_FILES['image']['tmp_name'] as $key => $path){
                    //move_uploaded_file($path, __DIR__.'/../uploads/'.$_FILES['image']['name'][$key]);
                }

            }
            ?>


            <form id="editForm" action="<?=Path::url("edit") ?>" method="post"
            enctype="multipart/form-data">

                <div class="mb-3 input-group">
                    <!--oninvalid="this.setCustomValidity('pattern must be 1___2022')"
                           oninput="this.setCustomValidity('')"-->
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-123"></i></span>
                    <input class="form-control" id="id" type="text" name="id" pattern="^1[0-9]{3}2022$"
                           placeholder="1___2022" />
                </div>

                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                    <input class="form-control" id="name" type="text" name="name[]" placeholder="Name" />
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                    <input class="form-control" id="name" type="text" name="name[]" placeholder="Name" />
                </div>

                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-file-arrow-up"></i></span>
                    <input class="form-control" id="file" type="file" name="image[]" placeholder="File"
                    accept="image/*" multiple/>
                </div>


                <!-- Form submit button -->
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg">Submit</button>
                </div>

            </form>

        </div>
    </div>
</section>
