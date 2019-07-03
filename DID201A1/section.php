<section class="section">
  <article>
    <p>
      <?php
       $article1 = file_get_contents('./article1.txt');
       $article2 = file_get_contents('./article2.txt');
       $article3 = file_get_contents('./article3.txt');

       echo "<p>$article1</p>";
       echo "<p>$article2</p>";
       echo "<p>$article3</p>";
      ?>
    </p>
  </article>
</section>
