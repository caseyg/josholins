  <footer class="footer cf" role="contentinfo">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    <div class="colophon">
      <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
    </div>

  </footer>
<script>
$(document).ready(function() {
    $('#fullpage').fullpage({
	    sectionsColor: ['#9b9f92', '#fff', '#9b9f92', '#9b9f92'],
	    anchors: ['josholins', 'gallery', 'information', 'index'],
	});
});
</script>
</body>
</html>