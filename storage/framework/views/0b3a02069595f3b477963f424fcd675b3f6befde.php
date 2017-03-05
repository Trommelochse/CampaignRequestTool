<?php $__env->startSection('title', 'All Requests'); ?>

<?php $__env->startSection('content'); ?>

<div class="expanded row newRequest">
    <div class="medium-9 columns hide-for-small-only">
    </div>
    <div class="medium-3 small-12 columns ">
        <a href="<?php echo e(route('createCampaign')); ?>" class="button small-12 newRequestButton">New Request</a>
    </div>
</div>
<div class="expanded row requestListFilters">
    <div class="large-1 columns"><span class="filterTitle">Show: </span> </div>
    <div class="large-2 columns"> <span id="filterByApproved" class="filterBy button success float-center">Approved Requests</span></div>
    <div class="large-2 columns"> <span id="filterByPending" class="filterBy button warning float-center">Pending Approval</span></div>
    <div class="large-2 columns"><span id="filterByReview" class="filterBy button alert float-center">Review Required</span> </div>
    <div class="large-2 columns"><span id="filterByDraft" class="filterBy button secondary float-center">Draft Requests</span> </div>
    <div class="large-3 columns"></div>
</div>
<div class="expanded row requestListHeader show-for-large">
    <div class="large-1 columns text-center"> <span>Status</span> </div>
    <div class="large-4 columns text-left"> <span> Campaign Name</span> </div>
    <div class="large-2 columns text-left"> <span> Start Date</span> </div>
    <div class="large-2 columns text-left"> <span> End Date</span> </div>
    <div class="large-1 small-4 columns"> </div>
    <div class="large-1 small-4 columns"> </div>
    <div class="large-1 small-4 columns"> </div>
</div>

<!-- //////////////////////////////////////////////////////////////////// -->
<?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="callout requestList requestReview">
    <div class="expanded row">
        <div class="large-1 columns"> <span class=" label <?php echo e($campaign->state); ?>"><?php echo e($campaign->state); ?></span> </div>
        <div class="row show-for-small-only">&nbsp</div>
        <div class="large-4 columns"> <span class="campaignListName"><?php echo e($campaign->title); ?></span> </div>
        <div class="large-2 columns"> <span class="campaignListItemLabel show-for-small-only">Start Date:</span><span class="campaignListDate"> <?php echo e($campaign->startDate); ?></span> </div>
        <div class="large-2 columns"> <span class="campaignListItemLabel show-for-small-only">End Date:</span><span class="campaignListDate">
        <?php echo e($campaign->endDate); ?></span> </div>
        <div class="row show-for-small-only">&nbsp</div>
        <div class="large-1 small-4 columns"> <a class="float-center text-center" href="<?php echo e(route('showCampaign', $campaign->id)); ?>">View</a> </div>
        <div class="large-1 small-4 columns"> <a class="float-center text-center" href="<?php echo e(route('editCampaign', $campaign->id)); ?>">Edit</a> </div>
        <div class="large-1 small-4 columns"> <a class="float-center text-center" href="#">Delete</a> </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- //////////////////////////////////////////////////////////////////// -->



<div class="medium-6 columns float-right">
    <?php echo $campaigns->links();; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>