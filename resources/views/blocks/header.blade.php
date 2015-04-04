<header class="header">
    <div class="container">
        <div class="row">
            <!-- begin logo  -->
            <div class="col-lg-6 col-md-6">
                <div class="text-align-l">
                    <div class="logo">
                        <a href="#">
                            <img src="img/logo.png" height="33" width="198" alt="RoyaltyFreeMusic.me" class="logo_img">
                        </a>
                    </div>
                    <div class="description">
                        <p class="description_text">royalty free music supermarket</p>
                    </div>
                </div>
            </div>
            <!-- end logo -->
            <!-- begin col-right  -->
            <div class="col-lg-6 col-md-6">
                <div class="text-align-r">
                    <div class="plans"><a href="#" class="plans_link">see plans and pricing</a></div>
                    <div class="login">
                        @if(!Auth::user())
                            <a href="#" class="login_link">log in</a>
                        @else
                            <a href="{{ url('/auth/logout') }}" class="login_link">Logout</a>
                        @endif
                    </div>
                    <div class="start_downloading"><a href="#" class="download_button">
                            <span>start downloading</span>
                            <b></b>
                        </a></div>
                </div>
            </div>
            <!-- end col-right -->
        </div>
    </div>
</header>