<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <title>CodePen Demo</title>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <link rel="canonical" href="https://codepen.io/geoffreyrose/pen/HKDkB">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js"></script>
    <script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-d00a5a605474f5a5a14d7b43b6ba5eb7b3449f04226e06eb1b022c613eabc427.js"></script>
    <script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>
    <style type="text/css" class="INLINE_PEN_STYLESHEET_ID">
        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body,
        html,
        .login_form {
            height: 100%;
        }

        body {
            background-color: #006664;
        }

        .login_form {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: center;
            -moz-box-flex: center;
            -webkit-flex: center;
            -ms-flex: center;
            flex: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            justify-content: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .login-wrapper {
            max-width: 500px;
            width: 100%;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            max-width: 200px;
            width: 100%;
            margin: 1em auto 2em;
        }

        form {
            background: #000;
            padding: 2em 1em;
            font-family: helvetica, sans-serif;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        form label {
            color: #fff;
            margin: 0 3% .25em;
            display: block;
            font-family: helvetica, sans-serif;
        }

        form input {
            width: 94%;
            padding: .5em .25em;
            margin: 0 3% 1em;
            font-size: 1.2em;
            border: 2px solid #000;
            outline: none;
            -webkit-transition: all 0.25s;
            -moz-transition: all 0.25s;
            -ms-transition: all 0.25s;
            -o-transition: all 0.25s;
            transition: all 0.25s;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        form input.password {
            padding-right: 4rem;
        }

        form input:focus {
            border: 2px solid #1fd100;
        }

        form button {
            width: 94%;
            margin: 2em 3% 0;
            border: none;
            background: #1fd100;
            padding: 1em 0;
            font-size: 1.25em;
            clear: both;
            color: #000;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            outline: none;
            -webkit-transition: all 0.25s;
            -moz-transition: all 0.25s;
            -ms-transition: all 0.25s;
            -o-transition: all 0.25s;
            transition: all 0.25s;
            cursor: pointer;
        }

        form button:focus,
        form button:hover {
            background: #262626;
        }

        .hide-show {
            width: 94%;
            margin: -3.62em 3% 0 1.5%;
            position: relative;
            z-index: 5;
            display: none;
        }

        .hide-show span {
            background: #1fd100;
            font-size: 1em;
            padding: .5em;
            float: right;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login_form">
        <setion class="login-wrapper">
            <div class="logo">
                <a target="_blank" rel="noopener" href="https://unrealnavigation.com">
                    <img src="https://lh3.googleusercontent.com/proxy/lYg0nRcWkvVIYrqJgXZrqKqOSGymp-gzQjzneC0dbEAOtKFeNwV8vUjGbzmO3ORj0CMShcYgPjP4f2jsWw4mLNeDJBRswMprplgJ3g" alt=""></a>
            </div>
            <form id="login" method="post" action="#">
                <label align="center">
                    <h2>ระบบยืม-คืนอุปกรณ์</h2>
                </label>
                <br>
                <label for="username">User Name</label>
                <input required="" name="login[username]" type="text" autocapitalize="off" autocorrect="off">
                <label for="password">Password</label>
                <input class="password" required="" name="login[password]" type="password">
                <div class="hide-show" style="display: block;">
                    <span class="show">Show</span>
                </div>
                <a href="./index.php">
                    <button type="submit">Sign In</button>
                </a>
            </form>

        </setion>
    </div>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script id="INLINE_PEN_JS_ID">
        $(function() {
            $('.hide-show').show();
            $('.hide-show span').addClass('show');

            $('.hide-show span').click(function() {
                if ($(this).hasClass('show')) {
                    $(this).text('Hide');
                    $('input[name="login[password]"]').attr('type', 'text');
                    $(this).removeClass('show');
                } else {
                    $(this).text('Show');
                    $('input[name="login[password]"]').attr('type', 'password');
                    $(this).addClass('show');
                }
            });

            $('form button[type="submit"]').on('click', function() {
                $('.hide-show span').text('Show').addClass('show');
                $('.hide-show').parent().find('input[name="login[password]"]').attr('type', 'password');
            });
        });
        //# sourceURL=pen.js
    </script>

</body>

</html>