<footer class="ftco-footer">
   
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script></script>
                            <?php echo date('Y'); ?> All rights reserved  by <a href="https://health.go.ug/" target="_blank" rel="nofollow noopener">Ministry of Health</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/js/tiny-slider.js')}}"></script>
    <script src="{{asset('theme/js/glightbox.min.js%2brellax.min.js%2baos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.GegtEeL2Mo.js')}}"></script>
    <script>
        eval(mod_pagespeed_FVNClcdAuR);
    </script>
    <script>
        eval(mod_pagespeed_nPBLqysjv8);
    </script>
    <script>
        eval(mod_pagespeed_y1lpTGW0aX);
    </script>
     <script>
        eval(mod_pagespeed_Bz6BHysdDk);
    </script>
    <script>
        eval(mod_pagespeed_hLudSOF5YS);
    </script>

     <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
     
         <script>
         $(function() {
            $("#search" ).autocomplete({
               source: "{{ url('suggestions') }}",
               minLength: 2,
               select: function( event, ui ) {
                    $( "#search" ).val( ui.item.label);
                    $("#search_form" ).submit();
               }
            });
         });
      </script> 


   
   