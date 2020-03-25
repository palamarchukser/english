<script>
  $(document).ready(function() {

    var css = 
      '<style>\n\
        .markup-nav { cursor: pointer; position: fixed; z-index: 999999; top: 60px; left: -176px; width: 170px; font:bold 12px/1.2 Helvetica, Arial; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.6); transition: left 200ms ease; box-sizing: border-box; }\n\
        .markup-nav__inner { background:#fff; padding: 5px 10px 5px 0; position: relative; }\n\
        .markup-nav:before { content: ""; position: absolute; left: 100%; top: 0; width: 40px; height: 40px; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAwFBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABiCivsAAAAP3RSTlMAAAIEEBEVFiYsLS4vMzg5Ojs8PT5BR0tUXV5gaG5vcHd4fby9v8DBwsTFycvMzc/g4+Tl5uvs7vP09fb5+v5kF+L8AAAAsklEQVR42m3QaReBQBTG8aks2VNIthARQostmvv9v5U7V5164f/qOb9zZuYUyzLi2KAhSTl5AF5B/cuhOYkAgpHqnTWiEwAH6gPgE+2h1JaozQtJVSIb59uu1lcpjjHSwH3gshi2xBG6QxYCliiCaiAKfvSUBVWIQqY54qApaIYj3mi41rhupqxYCY4pvdgD0UsA8AaRC6V2RD7k8fyDNN/tzO9436LlHLv/f06WHl31jL67eSl1BXfldgAAAABJRU5ErkJggg==) no-repeat 60% 50% white; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.6); border-top-right-radius: 6px; border-bottom-right-radius: 6px; transition: all 0.3s ease;}\n\
        .markup-nav a { display: block; padding: 2px 10px; color: #000; /*text-shadow: 1px 1px 0 #283E68;*/text-decoration: none !important; border: none !important; }\n\
        .markup-nav a:hover { background: #edf1f5; color: #000 !important; }\n\
        .markup-nav.is-open { left: 0; }\n\
      </style>';

    var html =
      '<div class="markup-nav">\n\
        <div class="markup-nav__inner">\n\
          <a href="index.php">index.php</a>\n\
          <a href="about.php">about.php</a>\n\
          <a href="article.php">article.php</a>\n\
          <a href="certificate.php">certificate.php</a>\n\
          <a href="degree.php">degree.php</a>\n\
          <a href="faq.php">faq.php</a>\n\
          <a href="price.php">price.php</a>\n\
          <a href="reviews.php">reviews.php</a>\n\
          <a href="test.php">test.php</a>\n\
          <a href="vacancy.php">vacancy.php</a>\n\
          <a href="teachers.php">teachers.php</a>\n\
          <a href="account_teacher.php">account_teacher.php</a>\n\
          <a href="account_student.php">account_student.php</a>\n\
          <a href="forms.php">forms.php</a>\n\
        </div>\n\
      </div>'

    $('body').prepend(css + html);

    $('.markup-nav').on('click', function() {
      $(this).toggleClass('is-open');
    });

  });
</script>