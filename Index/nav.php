<!-- Nav bar -->
  <script>
  $(function(){
    $(window).scroll(function() {
      if($(window).scrollTop() >= 100) {
        $('#con').addClass('scrolled');
      }
      else {
        $('#con').removeClass('scrolled');
      }
    });
  });
  </script>
    <nav class="nav">
    <div class="nav_logo">
      <a href="index.php">
        Logo
      </a>
    </div>
    <div class="container"  id="con">

          <div>
            <a href="">
              Start
            </a>
          </div>
          <div>
            <a href="">
              Podróże
            </a>
          </div>
          <div>
            <a href="">
              O Nas
            </a>
          </div>
          <div>
            <a href="">
              Kontakt
            </a>
          </div>
          <div>
            <a onclick="help();">
              &#9776;<i class="fa fa-wrench" aria-hidden="true"></i>
            </a>
          </div>
    </div>
  </nav>
      <div class="help" id="help" style="width: 0px;">
        <div onclick="help_close();">
          &#10141;
        </div>
        <div>
          Język<a>&#9873;</a><a>&#9872;</a>
        </div>
        <div>
          Wielkość czcionki
        </div>
        <div>
          <a class="small">small</a><a class="normal">normal</a><a class="big">big</a>
        </div>
        <div>
          Motyw<a onclick="motywl();">&#9787;</a><a onclick="motywd();">&#9786;</a>
        </div>
        <div>
          <a>Tryb do odczytu</a>
        </div>
      </div>
<!-- Nav Bar Created by Mateusz Jasnowski!-->
