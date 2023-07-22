<?php $pager->setSurroundCount(2) ?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
  <ul class="pagination justify-content-end">
    <!-- || $pager->getCurrentPageNumber() > 1 -->
    <?php if ($pager->hasPrevious()) : ?>
      <li class="page-item">
        <a class="page-link" href="<?= str_replace('/searchAjax', '/search_result', $pager->getFirst()) ?>" aria-label="<?= lang('Pager.first') ?>">
          <span aria-hidden="true"><?= lang('Pager.first') ?></span>
        </a>
      </li>
      <li class="page-item <?= ($pager->getCurrentPageNumber() == 1) ? 'disabled' : ''; ?>">
        <a class="page-link" href="<?= str_replace('/searchAjax', '/search_result', $pager->getPrevious()) ?>" aria-label="<?= lang('Pager.previous') ?>">
          <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
        </a>
      </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
      <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
        <a class=" page-link" href="<?= str_replace('/searchAjax', '/search_result', $link['uri']) ?>">
          <?= $link['title'] ?>
        </a>
      </li>
    <?php endforeach ?>

    <!-- || $pager->getCurrentPageNumber() <a $pager->getPageCount() -->
    <?php if ($pager->hasNext()) : ?>
      <li class="page-item">
        <a class="page-link <?= ($pager->getCurrentPageNumber() == $pager->getPageCount()) ? 'disabled' : ''; ?>" href="<?= str_replace('/searchAjax', '/search_result', $pager->getNext()) ?>" aria-label="<?= lang('Pager.next') ?>">
          <span aria-hidden="true"><?= lang('Pager.next') ?></span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="<?= str_replace('/searchAjax', '/search_result', $pager->getLast()) ?>" aria-label="<?= lang('Pager.last') ?>">
          <span aria-hidden="true"><?= lang('Pager.last') ?></span>
        </a>
      </li>
    <?php endif ?>
  </ul>
</nav>