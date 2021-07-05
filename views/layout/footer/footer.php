 <!-- footer -->
 <section class="w3l-footer">
  <div class="w3l-footer-16-main py-5">
    <div class="container pt-lg-4">
      <div class="row">
        <div class="col-lg-6 column">
        <h3>Seja nosso Representante </h3>
          <div class="end-column">
            <h4>Quer ser nosso representante? </h4>
            <form action="#" class="subscribe" method="post">
              
              <button style="width: 100%;" type="submit">Faça seu Cadastro</button>
            </form>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
          <h3>Capitação de Leed </h3>
          <div class="end-column">
            <h4>Quer saber mais sobre nossas Atualizacoes e Ofertas</h4>
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Email Address" required="">
              <button type="submit"><span class="fa fa-paper-plane"></span></button>
            </form>
            <p></p>
          </div>
        </div>
      </div>
      <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
        <div class="columns text-lg-left text-center">
          <p>&copy; Redes Sociais da <a href="https://caldeiraseit.com.br/" target="_blank">
              Caldeiras EIT</a>
          </p>
        </div>
        <div class="columns-2 mt-lg-0 mt-3">
          <ul class="social">
            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </li>
            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            </li>
            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            </li>
            <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</section>
<!-- //footer -->