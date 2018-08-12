<!--   Core JS Files   -->
<script src="{{ asset('js/paper-kit/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/paper-kit/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/paper-kit/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/paper-kit/paper-kit.min-v=2.2.1.js') }}" type="text/javascript"></script>
<!-- Foto Gallery -->
<script src="{{ asset('js/paper-kit/photoswipe.min.js') }}"></script>
<script src="{{ asset('js/paper-kit/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('js/paper-kit/init-gallery.js') }}"></script>
<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>

<script>
/**
 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
  /*
  var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
  };
  */
  (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://kama13-pl.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<!-- Plugin For Google Maps -->
<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZCF-OiC6hsDkL3Y1kcq8UcdAHWNcTZvM"></script>
<script>
  $(document).ready(function () {
    // Javascript method's body can be found in assets/js/core/partials/_demo-object.js
    demo.initContactUsMap();
  });
</script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1698911263739225&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Google Plus Share icon -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'pl'}
</script>

<!-- Twitter Share icon -->
<script>
  window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
  
    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };
  
    return t;
  }(document, "script", "twitter-wjs"));
</script>
</body>
</html>