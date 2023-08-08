    <div class="row justify-content-center">
        <div class="card col-4 bg-light mt-3 p-4">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="tuser" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="tpass" value="" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row justify-content-center">

                    <a href="<?php echo base_url() ?>dts/daftar"><small> Daftar </small></a>
                </div>

                <div class="mb-3 form-check">
                    <input name="tingat" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>