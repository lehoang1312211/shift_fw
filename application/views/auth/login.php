        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

        	<div class="account-bg">
                <div class="card-box m-b-0">
                    <div class="text-xs-center m-t-20">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Channel Moto</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-xs-12 text-xs-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                            </div>
                        </div>

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('signin'); ?>
                        
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <input id="email" name="email" class="form-control" type="email" required placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <input id="password" name="password" class="form-control" type="password" required placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <div class="checkbox checkbox-custom">
                                        <input id="checkbox-signup" type="checkbox">
                                        <label for="checkbox-signup">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-10">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-12">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-12 text-xs-center">
                                    <h5 class="text-muted"><b>Sign in with</b></h5>
                                </div>
                            </div>

                            <div class="form-group row m-b-0 text-xs-center">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-xs-center">
                    <p class="text-white">Don't have an account? <a href="pages-register.html" class="text-white m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->
