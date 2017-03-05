<?php if($paginator->hasPages()): ?>
        
        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="button primary nextButton float-right">Next Page</a>
        <?php else: ?>
            <button class="button primary nextButton float-right disabled">Next Page</button>
        <?php endif; ?>

        
        <?php if($paginator->onFirstPage()): ?>
            <button class="button primary nextButton disabled float-right">Previous Page</button>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="button primary nextButton float-right">Previous Page</a>
        <?php endif; ?>

        
        
<?php endif; ?>
