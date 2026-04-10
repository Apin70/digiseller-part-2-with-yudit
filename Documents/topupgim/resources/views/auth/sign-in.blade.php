@extends('layouts.app')

@section('title', 'Masuk Akun - Topupgim - TopUpGim')

@push('scripts')
<script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-10897083214');
        gtag('config', 'UA-226385448-1');
        gtag('config', 'G-1LGNR3GKBD');
        gtag('get', 'G-1LGNR3GKBD', 'client_id', (cid) => {
            document.querySelector('meta[name="gtag-cid"]')?.setAttribute("content", cid);
        });
    </script>
<script type="text/javascript">
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W4PF2R5');
    </script>
<script type="text/javascript">
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '957403245909694');
        fbq('track', 'PageView');
    </script>
@endpush

@section('content')
<!doctype html>
<html lang="id-ID">


<!-- Mirrored from topupgim.com/auth/sign-in by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2026 12:33:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    
    <!-- Title Of Site -->
    <!-- HTML Meta Tags -->
    <title>Masuk Akun - Topupgim</title>
    <meta name="description" content="TopUpGim.com adalah website Top Up Game dengan harga termurah se-Indonesia. Segera Topup akun Ml, FF, dan PUBGM kalian!" />
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Masuk Akun - Topupgim">
    <meta itemprop="description" content="TopUpGim.com adalah website Top Up Game dengan harga termurah se-Indonesia. Segera Topup akun Ml, FF, dan PUBGM kalian!">
    <meta itemprop="image" content="../https://cdn.topupgim.com/assets/media/favicons/site-thumbnail.jpg">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Masuk Akun - Topupgim" />
    <meta property="og:site_name" content="TopUpGim" />
    <meta property="og:description" content="TopUpGim.com adalah website Top Up Game dengan harga termurah se-Indonesia. Segera Topup akun Ml, FF, dan PUBGM kalian!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="sign-in.html" />
    <meta property="og:image" itemprop="image" content="../https://cdn.topupgim.com/assets/media/favicons/site-thumbnail.jpg">
    <meta property="og:image:type" content="image/jpeg">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Masuk Akun - Topupgim">
    <meta name="twitter:description" content="TopUpGim.com adalah website Top Up Game dengan harga termurah se-Indonesia. Segera Topup akun Ml, FF, dan PUBGM kalian!">
    <meta name="twitter:image" content="../https://cdn.topupgim.com/assets/media/favicons/site-thumbnail.jpg">
    
    <!-- Helper Meta Tags -->
    <meta name="csrf-token" content="k3cOOdgB-Fy56DFckwyADgLmHlL-9CY6rCJ8">
    <meta name="base-image" content="https://cdn.topupgim.com/" />
    <meta name="base-image-svg" content="https://img.topupgim.com/" />
    <meta name="gtag-cid" content="">
    
    <!-- Fav and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset(\'assets/media/favicons/favicon-small.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset(\'assets/media/favicons/favicon-medium.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(\'assets/media/favicons/apple-touch-icon.png" />
    
    <!-- Stylesheets -->
    
    <!-- Fonts and Main Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" />
    <link rel="stylesheet" id="css-main" href="../https://cdn.topupgim.com/topupgim-dist/main/assets/css/topupgim.min-e0a62d0b.css" />
    
    <!-- Against Backlink -->
    <link rel="canonical" href="sign-in.html" />
    
    <!-- Global site tag (gtag.js) - Google Ads: 10897083214 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10897083214"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-10897083214');
        gtag('config', 'UA-226385448-1');
        gtag('config', 'G-1LGNR3GKBD');
        gtag('get', 'G-1LGNR3GKBD', 'client_id', (cid) => {
            document.querySelector('meta[name="gtag-cid"]')?.setAttribute("content", cid);
        });
    </script>
    
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W4PF2R5');
    </script>
    <!-- End Google Tag Manager -->
    
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '957403245909694');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=957403245909694&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    
</head>

<body>
    <div id="page-container" class="remember-theme">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('../assets/media/images/bg-minecraft.png');">
                <div class="row g-0 justify-content-center bg-primary-dark-op">
                    <div class="hero-static col-11 col-md-6 col-xl-4 d-flex align-items-center py-2 px-0">
                        <!-- Sign In Block -->
                        <div id="main-block" class="block block-transparent block-rounded block-mode-loading-circle w-100 mb-0 overflow-hidden">
                            <div class="block-content block-content-full px-4 px-sm-5 py-5 bg-body-extra-light">
                                <!-- Header -->
                                <div class="mb-2 text-center">
                                    <a class="link-fx fw-bold fs-1" href="{{ route('home') }}">
                                        <span class="text-dark">TopUp</span><span class="text-primary">Gim</span>
                                    </a>
                                    <p class="text-uppercase fw-bold fs-sm text-muted">Masuk Akun</p>
                                </div>
                                <!-- END Header -->


                                <!-- Sign In Form -->
                                <form class="js-validation-auth-sign-in" action="https://topupgim.com/auth/do-sign-in" method="POST" novalidate="novalidate">
                                    <input type="hidden" name="_csrf" value="k3cOOdgB-Fy56DFckwyADgLmHlL-9CY6rCJ8">
                                    <div class="mb-4">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text input-group-text-alt">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-lg form-control-alt phone" id="memberWhatsAppNo" name="memberWhatsAppNo" placeholder="Nomor WhatsApp" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text input-group-text-alt">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="memberPassword" name="memberPassword" placeholder="Kata Sandi" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="text-center mb-4">
                                        <button type="submit" class="btn btn-hero btn-primary w-100">
                                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Masuk
                                        </button>
                                    </div>
                                </form>

                                <form id="formGoogleSignIn" action="https://topupgim.com/auth/do-google-sign-in" method="POST">
                                    <input type="hidden" name="_csrf" value="k3cOOdgB-Fy56DFckwyADgLmHlL-9CY6rCJ8">
                                    <input type="hidden" id="ref" name="ref" value="sign-in.html">
                                    <input type="hidden" id="openId" name="openId" value="">
                                    <input type="hidden" id="idToken" name="idToken" value="">
                                </form>

                                <div class="text-center">
                                    <button id="btnLoginGoogle" name="btnLoginGoogle" type="button" class="btn btn-outline-primary btn-lg w-100" onclick="window.googleSignIn()">
                                        <i class="fa-brands fa-google me-1"></i> Masuk dengan Google
                                    </button>
                                </div>
                                <!-- END Sign In Form -->
                            </div>
                            <div class="block-content bg-body">
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-3">
                                    <div class="fw-semibold fs-sm mb-1">
                                        <a class="text-success" href="register.html">Buat Akun Baru</a>
                                    </div>
                                    <div class="fw-semibold fs-sm mb-1">
                                        <a href="forgot-password.html">Lupa Kata Sandi?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Hidden Inputs -->
    <input type="hidden" id="hiddenMessageInfo" name="hiddenMessageInfo" value="">
    <input type="hidden" id="hiddenMessageType" name="hiddenMessageType" value="">
    <input type="hidden" id="hiddenFirebaseConfig" name="hiddenFirebaseConfig" value="{&quot;api_key&quot;:&quot;AIzaSyAFPAaO3iwTqnTPXYQ0jbaK1sRxNMChgmo&quot;,&quot;auth_domain&quot;:&quot;topupgimcom.firebaseapp.com&quot;,&quot;project_id&quot;:&quot;topupgimcom&quot;,&quot;storage_bucket&quot;:&quot;topupgimcom.firebasestorage.app&quot;,&quot;messaging_sender_id&quot;:&quot;7539421611&quot;,&quot;app_id&quot;:&quot;1:7539421611:web:95132eb44c13ee919fe2ee&quot;,&quot;measurement_id&quot;:&quot;G-L0NHVK46MG&quot;}">

    <!-- JS Cores -->
    <script src="../https://cdn.topupgim.com/topupgim-dist/main/assets/js/topupgim.app.min-8af9dc0d.js"></script>
    <script src="../https://cdn.topupgim.com/topupgim-dist/main/assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="../https://cdn.topupgim.com/topupgim-dist/main/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../https://cdn.topupgim.com/topupgim-dist/main/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- JS Helpers -->
    <script>Topupgim.helpersOnLoad(['jq-message']);</script>

    <!-- JS Pages -->
    <script src="../https://cdn.topupgim.com/topupgim-dist/main/assets/js/pages/frontend-auth-sign-in-708ba44c.js"></script>

    <!-- JS Views -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-analytics.js";
        import { getAuth, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js";

        const rawConfig = JSON.parse($("#hiddenFirebaseConfig").val() || "{}");
        const firebaseConfig = {
            apiKey: rawConfig.api_key,
            authDomain: rawConfig.auth_domain,
            projectId: rawConfig.project_id,
            storageBucket: rawConfig.storage_bucket,
            messagingSenderId: rawConfig.messaging_sender_id,
            appId: rawConfig.app_id,
            measurementId: rawConfig.measurement_id,
        };

        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const auth = getAuth();
        const provider = new GoogleAuthProvider();
        window.googleSignIn = async () => {
            try {
                const result = await signInWithPopup(auth, provider);
                if (!result) throw new Error("No result");
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const user = result.user;
                const openId = user.providerData?.[0]?.uid;
                const idToken = user.accessToken;
                $("#main-block").addClass("block-mode-loading");
                $("#openId").val(openId);
                $("#idToken").val(idToken);
                $("#formGoogleSignIn").submit();
            } catch (error) {
                var errorCode = error.code;
                var errorMessage = error.message;
                var email = error.email;
                var credential = error.credential;
                Topupgim.helpers("jq-notify", { type: "danger", message: "Error: " + String(errorMessage) });
            }
        };
    </script>
</body>


<!-- Mirrored from topupgim.com/auth/sign-in by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2026 12:33:44 GMT -->
</html>
@endsection
