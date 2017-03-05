<?php $__env->startSection('title' , 'View Campaign Request'); ?>

<?php $__env->startSection('content'); ?>
<!-- Fixed Status symbol -->
<div class="row status-fixed">
  
</div>

<div class="wrapper">
  <div class="borderFieldset">
    <div class="row">
      <div class="large-12 columns">
        <label>Campaign Title</label>
        <h4><?php echo e($campaign->title); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="large-12 medium-12 columns">
        <hr />
        <label>Target Segment:</label>
        <h4><?php echo e($campaign->segment); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Campaign Description:</label>
        <p class="reviewable reviewEditable"><?php echo e($campaign->body); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <hr />
        <label>Offer Type:</label>
        <p><?php echo e($campaign->type); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Related Campaign:</label>
        <p><?php echo e($campaign->relatedCampaign); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <hr/>
      </div>
      <div class="large-9 columns">
        <div class="large-12 ">
          <h5>Product:</h5>
        </div>
        <div class="large-4 columns float-left">
        <?php if($campaign->sb): ?>
          <div class="large-12">
            <label for="productSB">Sportsbook</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->ca): ?>
          <div class="large-12">
            <label for="productSB">Casino</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->vca): ?>
          <div class="large-12">
            <label for="productSB">Vegas Casino</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->lca): ?>
          <div class="large-12">
            <label for="productSB">Live Casino</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->pk): ?>
          <div class="large-12">
            <label for="productSB">Poker</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->mx): ?>
          <div class="large-12">
            <label for="productSB">Mixed (Cross-Sell)</label>
          </div>
        <?php endif; ?>
        <?php if($campaign->in): ?>
          <div class="large-12">
            <label for="productSB">Info</label>
          </div>
        <?php endif; ?>
        </div>
      </div>
      <div class="large-3 columns">
        <h5>Platform:</h5>
        <?php if($campaign->mw): ?>
        <div class="large-12">
          <label for="platformMOB">Mobile Web</label>
        </div>
        <?php endif; ?>
        <?php if($campaign->native): ?>
        <div class="large-12">
          <label for="platformMOB">Native App</label>
        </div>
        <?php endif; ?>
        <?php if($campaign->web): ?>
        <div class="large-12">
          <label for="platformMOB">Desktop Site</label>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 medium-12 columns">
        <hr />
        <h4>Meeting Required?</h4>
        <p><?php echo e($campaign->meeting ? 'Yes' : 'No'); ?></p>        
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <hr />
        <h6>Running Time</h6>
      </div>
      <div class="large-5 columns">
        <h3><?php echo e($campaign->startDate); ?></h3>
      </div>
      <div class="large-2 columns">
        <p>to</p>
      </div>
      <div class="large-5 columns">
        <h3><?php echo e($campaign->endDate); ?></h3>
      </div>
    </div>
    <?php if($campaign->recurring): ?>
    <div class="row">
      <div class="large-12 columns">
        <label for="">Recurring Campaign</label>
      </div>
      <div class="large-4 float-left columns ">
        <h4><?php echo e($campaign->recurringBody); ?></h4>
      </div>
    </div>
    <?php endif; ?>

    <?php if($campaign->logo): ?>
    <div class="row">   
      <div class="large-12 columns">
        <hr/>
        <h4>Logo</h4>
      </div>
      <div class="large-12 columns">
        <label for="campaignLogo">Logo/Lockup Required</label>
      </div>
      <div class="large-12 columns ">
        <p><?php echo e($campaign->logoBody); ?></p>
      </div>
    </div>
    <?php endif; ?>

    <div class="row">
      <div class="large-12 columns">
        <hr/>
        <h4>Markets:</h4>
        <?php if($campaign->dk): ?>
        <div class="row">
          <div class="large-3 columns">
            <h2 for="marketDK">DK</h2>
          </div>
          <div class="large-9 columns  ">
            <label for="logoTextDK">DK Logo Text Translation</label>
            <h5><?php echo e($campaign->dkBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

        <?php if($campaign->sv): ?>
        <div class="row">
          <div class="large-3 columns ">
            <h2 for="marketSV">SV</h2>            
          </div>
          <div class="large-9 columns ">
            <label for="logoTextSV">SV Logo Text Translation</label>
            <h5><?php echo e($campaign->svBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

        <?php if($campaign->no): ?>
        <div class="row">
          <div class="large-3 columns ">
            <h2 for="marketNO">NO</h2>            
          </div>
          <div class="large-9 columns ">
            <label for="logoTextNO">NO Logo Text Translation</label>
            <h5><?php echo e($campaign->noBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

       <?php if($campaign->fi): ?>
        <div class="row">
          <div class="large-3 columns ">
            <h2 for="marketFI">FI</h2>            
          </div>
          <div class="large-9 columns ">
            <label for="logoTextFI">FI Logo Text Translation</label>
            <h5><?php echo e($campaign->fiBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

        <?php if($campaign->de): ?>
        <div class="row">
          <div class="large-3 columns ">
            <h2 for="marketDE">DE</h2>            
          </div>
          <div class="large-9 columns ">
            <label for="logoTextDE">DE Logo Text Translation</label>
            <h5><?php echo e($campaign->deBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

        
        <?php if($campaign->en): ?>
        <div class="row">
          <div class="large-3 columns ">
            <h2 for="marketEN">EN</h2>            
          </div>
          <div class="large-9 columns ">
            <label for="logoTextEN">EN Logo Text Translation</label>
            <h5><?php echo e($campaign->enBody); ?></h5>
          </div>
        </div>
        <?php endif; ?>

      </div>
      <div class="large-6 columns" id="insertinputs"></div>
    </div>
    <div class="row">
      <hr/>
      <div class="large-12 columns">
        <h4>Creative Brief</h4>
        <p><?php echo e($campaign->creativeBody); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <hr />
        <h4>Internal Channels</h4>
      </div>
      <div class="large-3 columns">
        <h5 for="channelOnsite">Onsite</h5>
        <p><?php echo e($campaign->onsite ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelOnsiteBrief">Onsite Banners Brief</label>
        <p><?php echo e($campaign->onsiteBody); ?></p>
      </div>
    </div>
    <div class="row">
      <hr />
      <div class="large-3 columns">
        <h5 for="channelLP">Landing Page</h5>
        <p><?php echo e($campaign->lp ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelLPURL">Landing Page Desired URL*</label>
        <p><?php echo e($campaign->lpUrl); ?></p>
        <label for="channelLPRef">Similar Landing Page</label>
        <p><?php echo e($campaign->lpSimilar); ?></p>
        <label for="channelLPBrief">Landing Page Brief</label>
        <p><?php echo e($campaign->lpBody); ?></p>
      </div>
    </div>
    <div class="row">
      <hr/>
      <div class="large-3 columns">
        <h5 for="channelEmail">Email Sendout</h5>
        <p><?php echo e($campaign->nl ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelEmailBrief">Email Sendout Brief</label>
        <p><?php echo e($campaign->nlBody); ?></p>
      </div>
    </div>
    <div class="row">
      <hr />
      <div class="large-3 columns">
        <h5 for="channelOMS">OMS (Onsite Message)</h5>
        <p><?php echo e($campaign->oms ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelOMSBrief">OMS (Onsite Messaging) Brief</label>
        <p><?php echo e($campaign->omsBody); ?></p>
      </div>
     
    </div>
    <div class="row">
      <hr/>
      <div class="large-3 columns">
        <h5 for="SMS">SMS</h5>
        <p><?php echo e($campaign->sms ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelSMSBrief">SMS Brief</label>
        <p><?php echo e($campaign->smsBody); ?></p>
      </div>
    </div>
    <div class="row">
      <hr />
      <div class="large-3 columns">
        <h5 for="channelPush">Push Notifications</h5>
        <p><?php echo e($campaign->push ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelPushBrief">Push Notifications Brief</label>
        <p><?php echo e($campaign->pushBody); ?></p>
      </div>
    </div>
    <div class="row">
      <hr />
      <div class="large-3 columns">
        <h5 for="channelBlog">Blog Post</h5>
        <p><?php echo e($campaign->blog ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelBlogBrief">Blog Post Brief*</label>
        <p><?php echo e($campaign->blogBody); ?></p>
        <label for="channelBlogCategoryTags">Desired Category and/or Tags for Blog Post</label>
        <p><?php echo e($campaign->blogCategory); ?></p>
      </div>
    </div>
    <div class="row">
      <hr />
      <div class="large-3 columns">
        <h5 for="channelSocial">Social Media</h5>
        <p><?php echo e($campaign->some ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="large-9 columns ">
        <label for="channelSocialBrief">Social Media Brief</label>
        <p><?php echo e($campaign->someBody); ?></p>
      </div>
  
    </div>
    <div class="row">
      <div class="small-12 columns">
        <hr />
        <h4>External Channels*</h4>
      </div>
      <div class="medium-6 columns">
        <label for="channelAffiliates">Affiliate Banners</label>
        <p><?php echo e($campaign->aff ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="medium-6 columns">
        <label for="channelExternalBanners">Other External Banners</label>
        <p><?php echo e($campaign->extba ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="medium-6 columns">
        <label for="channelLBM">Local Campaign - (LBMs)</label>
        <p><?php echo e($campaign->lbm ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="medium-6 columns">
        <label for="channelPrint">Print</label>
        <p><?php echo e($campaign->print ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="medium-6 columns">
        <label for="channelDirectMail">Direct Mailer</label>
        <p><?php echo e($campaign->dm ? 'Yes' : 'No'); ?></p>
      </div>
      <div class="medium-6 columns">
        <label for="channelTVC">TVC</label>
        <p><?php echo e($campaign->tvc ? 'Yes' : 'No'); ?></p>
      </div>
    </div>
    <form method="POST" action="#" >
      <div class="row">
        <div class="large-12 columns">
          <hr />          
          <label>Comments:</label>
          <textarea rows="6" name="body" aria-describedby="campaignDescHelpText" required data-live-validate></textarea>          
        </div>
      </div>
      <div class="row">
        <div class="large-3 medium-6 columns">
          <button type="submit" class="button alert" name="reject" value=1>Reject</button>
          <button type="submit" class="button success" name="approve" value=1>Accept Campaign</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>