<?php $pager->setSurroundCount(2) ?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
  <ul class="pagination justify-content-end">
    <?php if ($pager->hasPrevious() || $pager->getCurrentPageNumber() > 1) : ?>
      <li class="page-item">
        <a class="page-link" href="<?= str_replace('/search', '', $pager->getFirst()) ?>" aria-label="<?= lang('Pager.first') ?>">
          <span aria-hidden="true"><?= lang('Pager.first') ?></span>
        </a>
      </li>
    <?php endif ?>
    <li class="page-item <?= ($pager->getCurrentPageNumber() == 1) ? 'disabled' : ''; ?>">
      <a class="page-link" href="<?= str_replace('/search', '', $pager->getPrevious()) ?>" aria-label="<?= lang('Pager.previous') ?>">
        <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
      </a>
    </li>

    <?php foreach ($pager->links() as $link) : ?>
      <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
        <a class=" page-link" href="<?= str_replace('/search', '', $link['uri']) ?>">
          <?= $link['title'] ?>
        </a>
      </li>
    <?php endforeach ?>

    <li class="page-item">
      <a class="page-link <?= ($pager->getCurrentPageNumber() == $pager->getPageCount()) ? 'disabled' : ''; ?>" href="<?= str_replace('/search', '', $pager->getNext()) ?>" aria-label="<?= lang('Pager.next') ?>">
        <span aria-hidden="true"><?= lang('Pager.next') ?></span>
      </a>
    </li>
    <?php if ($pager->hasNext() || $pager->getCurrentPageNumber() < $pager->getPageCount()) : ?>
      <li class="page-item">
        <a class="page-link" href="<?= str_replace('/search', '', $pager->getLast()) ?>" aria-label="<?= lang('Pager.last') ?>">
          <span aria-hidden="true"><?= lang('Pager.last') ?></span>
        </a>
      </li>
    <?php endif ?>
  </ul>
</nav>