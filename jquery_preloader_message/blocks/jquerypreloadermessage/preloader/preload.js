      function showLoader() {
        $.colorbox({width:"400px", height:"180px", 
          href:preloaderBaseURL + '/preloader/preload/preload.html',
          overlayClose:false, onLoad: function() {
            $('#cboxClose').remove();
          }}
        );
      }
      
      function hideLoader() {
        $.colorbox.close();
      }