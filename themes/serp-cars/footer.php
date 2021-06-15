<footer class="footer <?php if (is_front_page()) echo ('footer--home') ?>">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.svg' ?>" alt="" srcset="">

  <p class="footer__copyright">&copy; Alright Right Reserved by <a href="/">SERP Cars</a> <?php echo date("Y");  ?>. This is an assessments for Junior Web Developer position at SERP.</p>
</footer>
<?php wp_footer() ?>
</body>

</html>