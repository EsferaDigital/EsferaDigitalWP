<aside class="Comments">
  <?php if(have_comments()): ?>
    <h3>
      <?php
        comments_number(
          __('No hay comentarios aún', 'esfera'),
          __('Hay un comentario publicado', 'esfera'),
          __('Hay % comentarios', 'esfera')
        );
      ?>
    </h3>
    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>
      <?php endif; ?>
      <?php comment_form(); ?>
</aside>
