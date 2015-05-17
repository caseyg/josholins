<script type="text/javascript" src="/assets/js/sweet-justice.min.js"></script>
<script>
$(document).ready(function() {
  $('#fullpage').fullpage({
    sectionsColor: ['#9b9f92', '#fff', '#9b9f92', '#9b9f92'],
    anchors: ['josholins', 'gallery', 'information', 'index'],
    responsive: 0,
    loopHorizontal: false,
    animateAnchor: false,
    scrollOverflow: true,
    normalScrollElements: ['#josholins', '#gallery', '#information', '#index'],
    keyboardScrolling: false,
    afterLoad: function(anchorLink, index){
      var loadedSection = $(this);

      //using anchorLink
      if(anchorLink != 'josholins'){
        $("header").fadeIn();
        $("footer").fadeIn();
      }
      if(anchorLink == 'josholins'){
        $("header").fadeOut();
        $("footer").fadeOut();
        imagesLoaded( document.querySelector('#fullpage'), function( instance ) {
          $.fn.fullpage.moveSectionDown();
        });
      }
    },
    onLeave: function(index, nextIndex, direction){
      var leavingSection = $(this);

      if(index == 2 && direction == 'up'){
        $("header").fadeOut();
        $("footer").fadeOut();
      }
    },   
    afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){
      var leavingSlide = $(this);
      $("#slide-current").text(slideIndex);  
    },
	});
});
</script>
</body>
</html>