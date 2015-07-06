<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div id="landing" class="carousel-inner" role="listbox">
    <div  class="item active">
      <img src="img/responsive.jpg" alt="...">
      <div class="carousel-caption">
        <h2>This is the first slider, which links to:</h2>
        <ul>
          <li><a class="showSlider" data-target="#carousel-example-generic" data-slide-to="1" href="">Slider 2</a></li>
          <li><a class="showSlider" data-target="#carousel-example-generic" data-slide-to="2" href="">Slider 3</a></li>
          <li><a class="showSlider" data-target="#carousel-example-generic" data-slide-to="3" href="">Slider 4</a></li>
        </ul>
      </div>
    </div>
    <div class="item">
      <img src="img/responsive.jpg" alt="...">
      <div class="carousel-caption">
        <h2>This is slider 2, and you can go back to:</h2>
        <a class="hideSlider" data-target="#carousel-example-generic" data-slide-to="0" href="#">Slider 1</a>
      </div>
    </div>
      <div class="item">
        <img src="img/responsive.jpg" alt="...">
        <div class="carousel-caption">
          <h2>This is slider 3, and you can go back to:</h2>
          <a class="hideSlider" data-target="#carousel-example-generic" data-slide-to="0" href="#">Slider 1</a>
        </div>
      </div>
      <div class="item">
        <img src="img/responsive.jpg" alt="...">
        <div class="carousel-caption">
          <h2>This is slider 4, and you can go back to:</h2>
          <a class="hideSlider" data-target="#carousel-example-generic" data-slide-to="0" href="#">Slider 1</a>
        </div>
  </div>

  <!-- Controls -->
  <a id="carBackBtn" class="left carousel-control hideSlider" data-target="#carousel-example-generic" href="#" role="button" data-slide-to="0">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<!--  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
<script>// Show or hide slider
  $(document).ready(function(){
    $("#carBackBtn").css("display","none");
  });
  $(".hideSlider").click(function(){
    $("#carBackBtn").css("display","none");
  });
  $(".showSlider").click(function(){
    $("#carBackBtn").css("display","block");
  });
</script>