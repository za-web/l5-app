<div class="welcome_content">
    <div class="container">
        <!-- begin title  -->
        <div class="title" id="title_signup">
            <p class="title_text">Welcome to royalty free music supermarket</p>
        </div>
        <!-- end title -->
        <!-- begin content  -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="list col-left" id="list_signup">
                    <ul class="list_ul">
                        <li class="list_items">
                            <a href="">
                                <b class="sprite music"></b>
                                <p class="text">music</p>
                            </a>
                        </li>
                        <li class="list_items">
                            <a href="">
                                <b class="sprite effects"></b>
                                <p class="text">sound effects</p>
                            </a>
                        </li>
                        <li class="list_items">
                            <a href="">
                                <b class="sprite loops"></b>
                                <p class="text">music loops</p>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="see_plans">see plans and pricing</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-align-r">
                    <div class="start_downloading" id="signup">
                        <h2 class="title_form">Start downloading music now</h2>
                            {!! Form::open(['url'=>'/auth/register', 'class'=>'form-horizontal', 'role'=>'form']) !!}
                            <div class="block">
                                <span class="label_input margin_top">e-mail</span>
                                {!! Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'input  autofocus_default', 'required'=>'true']) !!}
                            </div>
                            <div class="block">
                                <span class="label_input">create <br> password</span>
                                {!! Form::password('password', ['placeholder' => 'Password', 'class'=>'input', 'required'=>'true']) !!}
                            </div>
                            <div class="block">
                                <button class="submit_button" type="submit">
                                    <span> sign up</span>
                                </button>
                            </div>
                            {!! Form::close() !!}
                            <div class="block">
                                <p class="text">
                                    or <a href="#" class="login">log in</a>
                                </p>
                            </div>
                            <div class="block">
                                <div class="check">
                                    <input type="checkbox" id="iagree">
                                    <label for="iagree"></label>
                                </div>
                                <p class="text_check">
                                    I agree to <a href="" class="link">terms of use and licensing agreement</a>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="start_downloading" id="login">
                            <h2 class="title_form">Start downloading music now</h2>
                            <!-- Login form !-->
                            {!! Form::open(['url'=>'/auth/login', 'class'=>'form-horizontal', 'role'=>'form']) !!}

                                <div class="block"><span class="label_input margin_top">e-mail</span>
                                    {!! Form::email('email', old('email'), ['placeholder' => 'Email', 'class'=>'input']) !!}
                                </div>
                                <div class="block">
                                    <span class="label_input">password</span>
                                    {!! Form::password('password', ['placeholder' => 'Password', 'class'=>'input']) !!}
                                </div>
                                <div class="block">
                                    <button class="submit_button" type="submit">
                                        <span> log in</span>
                                    </button>
                                </div>
                            {!! Form::close() !!}
                            <!-- End Login form !-->

                            <div class="block">
                                <p class="text">
                                    or <a href="#" class="signup">sign up</a>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
</div>