<div pagination>
	<nav aria-label="amp live list pagination" class="liveblog-pagination">
			<div>
			<?php $links = $this->get( 'links' ); ?>

			<a href="<?php echo $links->first ?>" title="First" class="liveblog-btn liveblog-pagination-btn <?php if ( !$links->prev ) { echo 'liveblog-btn--hide'; } ?>" data-link-name="">First</a>
			<a href="<?php echo $links->prev ?>" title="Prev" class="liveblog-btn liveblog-pagination-btn liveblog-pagination-prev <?php if ( !$links->prev ) { echo 'liveblog-btn--hide'; } ?>" data-link-name="">Prev</a>

			</div>
			<span class="liveblog-pagination-pages"><?php echo $this->get( 'page' ); ?> of <?php echo $this->get( 'pages' ) ?></span>
			<div>
			<?php if ( $links->next ): ?>
				<a href="<?php echo $links->next ?>" title="Next" class="liveblog-btn liveblog-pagination-btn liveblog-pagination-next" data-link-name="">Next</a>
			<?php endif; ?>
				<a href="<?php echo $links->last ?>" title="Last" class="liveblog-btn liveblog-pagination-btn liveblog-pagination-next" data-link-name="">Last</a>
			</div>
	</nav>
</div>
