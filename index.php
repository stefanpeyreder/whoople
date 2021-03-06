<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Whoople is the easy wasy to connect all your social media accounts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>whoople</title>

    <!-- Page styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">whoople</span>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="dashboard.php">Dashboard</a>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
        </ul>
    </div>
</header>

    <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
            <div class="logo-font android-slogan">whoople. stay connected.</div>
            <div class="logo-font android-sub-slogan">welcome to whoople... be yourself. do your thing. see what's going
                on.
            </div>
            <div class="logo-font android-create-character">
                <div id="login-box">
                    <div class="left">
                        <!-- include registration.php wie unten login.php -->
                    </div>
                    <div class="right">
                        <?php include ("login.php"); ?>
                        <br>
                        <button class="social-signin facebook">Log in with facebook</button>
                        <!--<button class="social-signin twitter">Log in with Twitter</button>-->
                        <button class="social-signin google">Log in with Google+</button>
                    </div>
                    <div class="or">OR</div>
                </div>
            </div>

            <a href="#screens">
                <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                    <i class="material-icons">expand_more</i>
                </button>
            </a>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
            <div class="mdl-typography--display-1-color-contrast">What is Whoople?</div>
            <div class="android-screens">
                <p class="mdl-typography--headline mdl-typography--font-thin">Whoople is a free social media site,
                    designed to simplify your daily life. Whoople currently supports
                    Facebook, Twitter, Google+, Instagram and many more. The service is available on any device!
                    Register
                    now for free and try it out by yourself!</p>
                <p>
                    <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                        Check it out and register now&nbsp;<i class="material-icons">chevron_right</i>
                    </a>
                </p>
            </div>
        </div>
        <div class="android-wear-section">
            <div class="android-wear-band">
                <div class="android-wear-band-text">
                    <div class="mdl-typography--display-2 mdl-typography--font-thin">Connect your social networks</div>
                    <p class="mdl-typography--headline mdl-typography--font-thin">
                        Whoople works perfectly with every device. Once set up, you just need to log in and enjoy the
                        simplicity of staying connected.
                    </p>
                    <p>
                        <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                            Register now for free&nbsp;<i class="material-icons">chevron_right</i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="android-customized-section">
            <div class="android-customized-section-text">
                <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customise your
                    preferences
                </div>
                <p class="mdl-typography--font-light">
                    All the connections you care abour. All your whooples. Every feed and every notification in one
                    place. Try it out.
                    <br>
                    <a href="" class="android-link mdl-typography--font-light">Customise your whoople now</a>
                </p>
            </div>
            <div class="android-customized-section-image"></div>
        </div>

        <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
                <ul class="mdl-mini-footer__link-list">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Privacy & Terms</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
