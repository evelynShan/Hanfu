<section class="Home_BackPage">
    <div class="container">
        <div class="form-Back">
            <!--登录表格-->
            <div class="LogSign_form">
                <form class="form-box  front" name="form1" method="get" action="<?= ($BASE) ?>/Login" >
                    <div class="form-log">
                        <div class="row">
                            <div class="col-12">
                                <label for="inputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" id="inputEmail1" placeholder="xxx@mail.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="Input_Password1" class="form-label">Password</label>
                                <input type="Password" name="password" id="Input_Password1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <button type="submit" name="submit" class="btn btn-primary"id="submit_Log"onclick="submitted_Pass()">Login</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p>Have a account ? You can Click here to <a id="signUp">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--注册表格-->
            <div class=" LogSign_form">
                <form class="form-box  back" name="form2" method="post" action="<?= ($BASE) ?>/SignUp" >
                    <div class="form-log">
                        <div class="row">
                            <div class="col-12">
                                <label for="inputName2" class="form-label">Name</label>
                                <input type="text" name="name"  id="inputName2" placeholder="shan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="inputEmail2" class="form-label">Email</label>
                                <input type="text" name="email"  id="inputEmail2" placeholder="xxx@mail.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="inputPhone2" class="form-label">Phone number</label>
                                <input type="text" name="phoneNum"  id="inputPhone2" placeholder="+44">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="input_Password2" class="form-label">Password</label>
                                <input type="text" name="password"  id="input_Password2" >
                            </div>
                            <div class="col-12">
                                <label for="Input_ConfirmPassword2" class="form-label">Confirm Password</label>
                                <input type="text" name="ConfirmPassword"  id="Input_ConfirmPassword2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <!-- <input type="submit" name="Submit" value="Submit" /> -->
                                    <button type="submit" class="btn btn-primary" onclick="submitted_Pass()">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p>Have a account ? You can Click here to <a id="logIn">Log in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>