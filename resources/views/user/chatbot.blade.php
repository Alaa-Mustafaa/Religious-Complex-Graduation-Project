<html>
    <head>
      <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />
      <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        body {
          background-color: white;
          margin: 0 auto;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          flex-direction: column;
          height: 500vh;
        }
        #bp-web-widget-container {
          max-height: 90%;
          width: 481px;
          margin: auto;
          flex-grow: 1;
        }
        #bp-web-widget-container div {
          height: 100%;
        }
        .webchatIframe {
          position: relative !important;
        }
      </style>
      <title>Chatbot</title>
    <link rel="stylesheet" href="https://cdn.botpress.cloud/webchat/v1/inject.css"></head>
    <body>

        @include('user.nav')
  
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
  <script>
    window.botpressWebChat.init({
        "composerPlaceholder": "Chat with bot",
        "botConversationDescription": "This chatbot was built surprisingly fast with Botpress",
        "botId": "868e85f7-2ba0-462d-9414-4c649c1c8079",
        "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
        "messagingUrl": "https://messaging.botpress.cloud",
        "clientId": "868e85f7-2ba0-462d-9414-4c649c1c8079",
        "webhookId": "a8a315a6-9c56-41ad-83f4-476ba669eb48",
        "lazySocket": true,
        "themeName": "prism",
        "frontendVersion": "v1",
        "showPoweredBy": true,
        "theme": "prism",
        "themeColor": "#2563eb",
        "allowedOrigins": [],
        "hideWidget": true,
        "disableAnimations": true,
        "closeOnEscape": false,
        "showConversationsButton": false,
        "enableTranscriptDownload": false,
        "className": "webchatIframe",
        "containerWidth": "100%25",
        "layoutWidth": "100%25",
        "showCloseButton": false
    });
  window.botpressWebChat.onEvent(function () { window.botpressWebChat.sendEvent({ type: 'show' }) }, ['LIFECYCLE.LOADED']);
  </script><div id="bp-web-widget-container"><iframe id="bp-web-widget" title="This%20chatbot%20was%20built%20surprisingly%20fast%20with%20Botpress" frameborder="0" src="https://cdn.botpress.cloud/webchat/v1/index.html?options=%7B%22config%22%3A%7B%22composerPlaceholder%22%3A%22Chat%20with%20bot%22%2C%22botConversationDescription%22%3A%22This%20chatbot%20was%20built%20surprisingly%20fast%20with%20Botpress%22%2C%22botId%22%3A%22868e85f7-2ba0-462d-9414-4c649c1c8079%22%2C%22hostUrl%22%3A%22https%3A%2F%2Fcdn.botpress.cloud%2Fwebchat%2Fv1%22%2C%22messagingUrl%22%3A%22https%3A%2F%2Fmessaging.botpress.cloud%22%2C%22clientId%22%3A%22868e85f7-2ba0-462d-9414-4c649c1c8079%22%2C%22webhookId%22%3A%22a8a315a6-9c56-41ad-83f4-476ba669eb48%22%2C%22lazySocket%22%3Atrue%2C%22themeName%22%3A%22prism%22%2C%22frontendVersion%22%3A%22v1%22%2C%22showPoweredBy%22%3Atrue%2C%22theme%22%3A%22prism%22%2C%22themeColor%22%3A%22%232563eb%22%2C%22allowedOrigins%22%3A%5B%5D%2C%22hideWidget%22%3Atrue%2C%22disableAnimations%22%3Atrue%2C%22closeOnEscape%22%3Afalse%2C%22showConversationsButton%22%3Afalse%2C%22enableTranscriptDownload%22%3Afalse%2C%22className%22%3A%22webchatIframe%22%2C%22containerWidth%22%3A%22100%2525%22%2C%22layoutWidth%22%3A%22100%2525%22%2C%22showCloseButton%22%3Afalse%2C%22chatId%22%3A%22bp-web-widget%22%2C%22encryptionKey%22%3A%22x5uIECcVwjEgbvtmzsHBuyyBOLArJ6hx%22%7D%7D" class="bp-widget-web bp-widget-side webchatIframe" style="width: 100%;"></iframe></div>
  
   @include('user.footer') 
  </body></html>