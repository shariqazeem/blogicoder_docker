<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Sign Up to Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/partials/_handleSignup.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="signupPass" name="signupPass">
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="signupcPass" name="signupcPass">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>