      function showLoader() {
        var preloaderFinalBaseURL = preloaderBaseURL + '/preloader/preload/';
        $.colorbox({width:"400px", height:"180px", 
          href:preloaderFinalBaseURL + 'preload.php?preloadbaseurl=' + encodeURIComponent(preloaderFinalBaseURL),
          overlayClose:false, onLoad: function() {
            $('#cboxClose').remove();
          }}
        );
      }
      
      function hideLoader() {
        $.colorbox.close();
      }