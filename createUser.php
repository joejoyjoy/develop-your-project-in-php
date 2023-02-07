<?php include('./logic/head.php'); ?>

<body>
    <section class="h-100 gradient-form" style="background-color: #f1f2f6;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black container">
                        <h3 class="text-center">Sign Up</h3>
                        <form action="./logic/validatSignUp.php" method="POST" enctype="multipart/form-data" class="box">
                            <!-- NAME -->
                            <div class="form-outline mb-4">
                                <label for="email" class="form-label">User name: *</label>
                                <input type="text" id="email" name="email" class="form-control" required>
                            </div>
                            <!-- END -->
                            <!-- EMAIL -->
                            <div class="form-outline mb-4">
                                <label for="created_email">Email address:</label><br>
                                <input type="email" name="created_email" id="created_email" class="form-control">
                            </div>
                            <!-- END -->
                            <!-- PHONE NUMBER -->
                            <div class="form-outline mb-4">
                                <label for="phone" class="form-label">Phone number:</label>
                                <input type="tel" id="phone" name="phone" class="form-control">
                            </div>
                            <!-- END -->
                            <!-- PASSWORD -->
                            <div class="form-outline mb-4">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <label for="rule" class="form-label">Selec user rule *</label>
                            <select name="rule" id="rule" class="form-select" aria-label="Select user rule" required>
                                <option selected>Select Rule</option>
                                <option value="1">Administrator</option>
                                <option value="2">Client</option>
                            </select>

                            <div class="form-group">
                                <label for="rol" class="form-label">Rol de usuario *</label>
                                <input type="number" id="rol" name="rol" class="form-control" placeholder="Escribe el rol, 1 admin, 2 lector..">
                            </div>

                            <br>

                            <div class="mb-3">
                                <input type="submit" value="Submit" class="btn btn-success" name="signup">
                                <a href="javascript:history.go(-1)" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>