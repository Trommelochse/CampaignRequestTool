<?php $__env->startSection('title', 'New Request'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
  <form method="POST" action="<?php echo e(route('updateCampaign', $campaign->id)); ?>">
    <fieldset class="borderFieldset">
      <div class="row">
        <div class="medium-4 columns">
          <div class="step-active"> 1. Campaign Info </div>
        </div>
        <div class="medium-4 columns">
          <div class="step-inactive"> 2. Localisation </div>
        </div>
        <div class="medium-4 columns">
          <div class="step-inactive"> 3. Channels </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <h4>Campaign Info</h4>
          <label>Campaign Title*</label>
          <input type="text" name="title" value="<?php echo e($campaign->title); ?>"/>
          <span class="form-error"> Please enter a Campaign Title </span>
          <p class="help-text" id="campaignTitleHelpText">Please enter Campaign Title for reference. Keep in mind this will probably be used for preparation of campaign tracking codes</p>
        </div>
      </div>
      <div class="row">
        <div class="large-12 medium-12 columns">
          <hr />
          <h6>Target Segment</h6>
          <fieldset class="alwaysActive">
            <input type="radio" name="segment" value="Acquisition" id="segmentAcquisition" required <?php echo e($campaign->segment == 'Acquisition' ? 'checked' : ''); ?>>
            <label for="segmentAcquisition">Acquisition</label>
            <input type="radio" name="segment" value="Retention" id="segmentRetention" <?php echo e($campaign->segment == 'Retention' ? 'checked' : ''); ?>>
            <label for="segmentRetention">Retention</label>
            <input type="radio" name="segment" value="Acquisition and Retention" id="segmentBoth" <?php echo e($campaign->segment == 'Acquisition and Retention' ? 'checked' : ''); ?>>
            <label for="segmentBoth">Both</label>
            <span class="form-error">Please choose appropriate Target Market</span>
          </fieldset>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Campaign Description*</label>
          <textarea rows="6" name="body" aria-describedby="bodyHelpText" required data-live-validate><?php echo e($campaign->body); ?></textarea>
          <span class="form-error"> Please enter a Campaign Description </span>
          <p class="help-text" id="bodyHelpText">Overview Description of Campaign. You can copy/paste text of any length here.</p>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Offer Type*</label>
          <input type="text" name="type" aria-describedby="typeHelpText" required data-live-validate value="<?php echo e($campaign->type); ?>">
          <span class="form-error"> Please enter an Offer Type </span>
          <p class="help-text" id="typeHelpText">Type of Offer (example: Bonus, Freebet, Raffle, Tournament)</p>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Related Campaign</label>
          <input type="text" name="relatedCampaign" aria-describedby="relatedCampaignHelpText" data-abide-ignore value="<?php echo e($campaign->relatedCampaign); ?>"/>
          <p class="help-text" id="relatedCampaignHelpText">Is this campaign linked to an existing or upcoming campaign? If so which is it? Better yet, enter URL of existing campaign.</p>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <hr/>
        </div>
        <div class="large-9 columns">
          <div class="large-12 ">
            <h5>Product*</h5>
            <span class="form-error"> Please choose at least one product </span>
            <p class="help-text" id="campaignProductHelpText">Please select the applicable products</p>
          </div>
          <div class="large-4 columns">
            <div class="large-12">
              <input id="productSB" type="checkbox" name="sb" value=1 <?php echo e($campaign->sb ? 'checked' : ''); ?>>
              <label for="productSB">Sportsbook</label>
            </div>
            <div class="large-12">
              <input id="productCA" type="checkbox" name="ca" value=1 <?php echo e($campaign->ca ? 'checked' : ''); ?>>
              <label for="productCA">Casino</label>
            </div>
            <div class="large-12">
              <input id="productVCA" type="checkbox" name="vca" value=1 <?php echo e($campaign->vca ? 'checked' : ''); ?>>
              <label for="productVCA">Vegas Casino</label>
            </div>
            <div class="large-12">
              <input id="productLCA" type="checkbox" name="lca" value=1 <?php echo e($campaign->lca ? 'checked' : ''); ?>>
              <label for="productLCA">Live Casino</label>
            </div>
          </div>
          <div class="large-4 columns float-left">
            <div class="large-12">
              <input id="productVS" type="checkbox" name="vs"  value=1 <?php echo e($campaign->vs ? 'checked' : ''); ?>>
              <label for="productVS">Virtual Sports</label>
            </div>
            <div class="large-12">
              <input id="productPK" type="checkbox" name="pk"  value=1 <?php echo e($campaign->pk ? 'checked' : ''); ?>>
              <label for="productPK">Poker</label>
            </div>
            <div class="large-12">
              <input id="productMX" type="checkbox" name="mx"  value=1 <?php echo e($campaign->mx ? 'checked' : ''); ?>>
              <label for="productMX">MX (Cross-Sell)</label>
            </div>
            <div class="large-12">
              <input id="productIN" type="checkbox" name="in" value=1 <?php echo e($campaign->in ? 'checked' : ''); ?>>
              <label for="productIN">IN (Info)</label>
            </div>
            <span class="form-error"> Please select at least one product </span> </div>
        </div>
        <div class="large-3 columns alwaysActive">
          <h5>Platform*</h5>
          <p class="help-text" id="campaignPlatformHelpText">Please select the applicable plaforms</p>
          <div class="large-12">
            <input id="platformMOB" type="checkbox" name="mw" value=1 <?php echo e($campaign->mw ? 'checked' : ''); ?>>
            <label for="platformMOB">Mobile Web</label>
          </div>
          <div class="large-12">
            <input id="platformNAT" type="checkbox" name="native" value=1 <?php echo e($campaign->native ? 'checked' : ''); ?>>
            <label for="platformNAT">Mobile Native</label>
          </div>
          <div class="large-12">
            <input id="platformWEB" type="checkbox" name="web" value=1 <?php echo e($campaign->web ? 'checked' : ''); ?>> 
            <label for="platformWEB">Desktop Site</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 medium-12 columns">
          <hr />
          <h4>Meeting Required?*</h4>
          <p class="help-text" id="meetingHelpText">Should a meeting to discuss this campaign be organised prior to production request?</p>
          <fieldset class="alwaysActive">
            <input type="radio" name="meeting" value=1 id="meetingYes" required <?php echo e($campaign->meeting ? 'checked' : ''); ?>>
            <label for="meetingYes">Yes</label>
            <input type="radio" name="meeting" value=0 id="meetingNo" <?php echo e(!$campaign->meeting ? 'checked' : ''); ?>>
            <label for="meetingNo">No</label>
            <span class="form-error"> Please choose whether you require a meeting or not </span>
          </fieldset>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <hr />
          <h4>Running Time</h4>
          <p class="help-text" id="campaignRunningTimeHelpText">Please enter the dates this campaign will run on</p>
        </div>
        <div class="large-6 columns">
          <label>Start Date (UTC)*</label>
          <input type="text" class="dp1" name="startDate" required data-live-validate value="<?php echo e($campaign->startDate); ?>"/>
          <span class="form-error"> Please enter a Campaign Start Date </span> </div>
        <div class="large-6 columns">
          <label>End Date (UTC)*</label>
          <input type="text" placeholder="" class="dp1" name="endDate" required data-live-validate value="<?php echo e($campaign->endDate); ?>"/>
          <span class="form-error"> Please enter a Campaign End Date </span> </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <input class="revealer" id="campaignRecurring" type="checkbox" name="recurring" value=1 data-abide-ignore <?php echo e($campaign->recurring ? 'checked' : ''); ?> >
          <label for="campaignRecurring">Recurring Campaign</label>
        </div>
        <div class="large-4 float-left columns hiddenField">
          <label>Recurring How Often?</label>
          <input type="text" name="recurringBody" value="<?php echo e($campaign->recurringBody); ?>" />
          <span class="form-error"> Please enter the frequency this campaign will run across </span>
          <p class="help-text" id="campaignFrequencyHelpText">How Often will this campaign run? (ex. Weekly, Monthly, First full moon of each quarter?)</p>
        </div>
      </div>
    </fieldset>
    <div class="row">
      <hr>
      <div class="medium-3 small-6 columns float-right">
        <button type="submit" class="button primary float-right saveButton">Next</button>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      </div>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>