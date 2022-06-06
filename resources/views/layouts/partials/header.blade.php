<!DOCTYPE html>
<html lang="en">
<head>
    <title>MoH Systems and Dashboards Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{asset('theme/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.UgmKpvvBTJ.css.pagespeed.cf.xhAIVbA-KH.css')}}" />

    <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet"> -->
  
<script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
      </script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</head>