<!DOCTYPE html>
<html lang="en">
<head>
    <title>MoH Systems and Dashboards Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="icon" href="{{ asset('admin/images/favicon-32x32.png') }}" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{asset('theme/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.UgmKpvvBTJ.css.pagespeed.cf.xhAIVbA-KH.css')}}" />
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet"> -->
  
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<script>
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
}
function translateLanguage(lang) {
  googleTranslateElementInit();
  var $frame = $('.goog-te-menu-frame:first');
  if (!$frame.size()) {
    alert("Error: Could not find Google translate frame.");
    return false;
  }
  $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
  return false;
}
$(function(){
  $('.selectpicker').selectpicker();
});
</script>

</head>