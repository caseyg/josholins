<script>
$(document).ready(function() {
    $('#fullpage').fullpage({
	    sectionsColor: ['#9b9f92', '#fff', '#9b9f92', '#9b9f92'],
	    anchors: ['josholins', 'gallery', 'information', 'index'],
      responsive: 0,
      loopHorizontal: false,
      afterLoad: function(anchorLink, index){
          var loadedSection = $(this);

          //using anchorLink
          if(anchorLink != 'josholins'){
              $("header").fadeIn();
          }
          if(anchorLink == 'josholins'){
              $("header").fadeOut();
          }
      },
      onLeave: function(index, nextIndex, direction){
          var leavingSection = $(this);

          if(index == 2 && direction == 'up'){
              $("header").fadeOut();
          }
      },     
	});
});
</script>
</body>
</html>