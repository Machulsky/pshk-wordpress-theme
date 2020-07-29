<footer>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3">
              <h5>Информация</h5>
              <?php 
    wp_nav_menu([
      'theme_location' => 'footer_info',
      'menu_class' => '',
      'depth' => 0,
      
    ]); 
      ?>
              <!-- <ul>
                <li><a href="">Ссылка 1</a></li>
                <li><a href="">Ссылка 2</a></li>
                <li><a href="">Ссылка 3</a></li>
                <li><a href="">Ссылка 4</a></li>
                <li><a href="">Ссылка 5</a></li>
              </ul> -->
            </div>
            <div class="col-lg-3">
              <h5>Схема проезда</h5>
              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adc35ac64bc7afb82f6979171412e5bd590e0fd3b5074f42853d7793071746a14&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="col-lg-3">
              <h5>Прочие ссылки</h5>
              <?php 
    wp_nav_menu([
      'theme_location' => 'footer_other',
      'menu_class' => '',
      'depth' => 0,
      
    ]); 
      ?>
              <!-- <ul>
                <li><a href="">Ссылка 1</a></li>
                <li><a href="">Ссылка 2</a></li>
                <li><a href="">Ссылка 3</a></li>
                <li><a href="">Ссылка 4</a></li>
                <li><a href="">Ссылка 5</a></li>
              </ul> -->
            </div>
            <div class="col-lg-3">
              <h5>Контакты</h5>
				
              <ul class="footer-contacts">
                <li>
                  <span>Телефон приемной комиссии:</span>
                  <a href="">8 (861) 237-48-37</a></li>
                <li>
                  <span>Телефон приемной директора:</span>
                  <a href="">8 (861) 237-48-37</a></li>
                <li>
                  <span>Электронная почта:</span>
                  <a href="">info@pshk.ru</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-overlay">
      <div class="container">
        
      <div class="row">
        <div class="col-md-4">
          <p>© 2019 Государственное бюджетное
            профессиональное образовательное
            учреждение Краснодарского края
            “Пашковский сельскохозяйственный колледж”
            </p>
        </div>
        <div class="col-md-4 text-center mb-3">
          <img width="110" src="<?php echo get_template_directory_uri(); ?>/img/developer.png" alt="">
        </div>
        <div class="col-md-4">
          <p>
            350910 г. Краснодар, ул. им. Евдокии Бершанской, д. 220, 
           <br>Учебно-спортивный комлекс г. Краснодар, ул. Гоголя 60/2
          </p>
        </div>
      </div>

    </div>
    </div>
  </footer>
</main>

<?php wp_head(); wp_footer(); ?>
  </body>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.min.js"></script>
</html>

<script>$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})</script>