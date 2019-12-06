<?
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?phpprintf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'imaga'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?phpprevious_comments_link(__('&larr; Older comments', 'imaga')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?phpnext_comments_link(__('Newer comments &rarr;', 'imaga')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php_e('Comments are closed.', 'imaga'); ?>
    </div>
  <?php endif; ?>

  <?phpcomment_form(); ?>
</section>
