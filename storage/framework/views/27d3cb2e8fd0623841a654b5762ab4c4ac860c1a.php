<?php $__env->startSection('title', 'Choose Localisation'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
  <form method="POST" action="<?php echo e(route('updateLocalisation', $campaign->id)); ?>" data-abide novalidate  >
    <fieldset class="borderFieldset">
      <div class="row">
        <div class="medium-4 columns">
          <div class="step-inactive"> 1. Campaign Info </div>
        </div>
        <div class="medium-4 columns">
          <div class="step-active"> 2. Localisation </div>
        </div>
        <div class="medium-4 columns">
          <div class="step-inactive"> 3. Channels </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <h4>Logo</h4>
          <p class="help-text" id="campaignLogoHelpText">Does this campaign require a logo?</p>
        </div>
        <div class="large-3 columns">
          <input class="revealer" type="checkbox" id="campaignLogo" name="logo" value=1 <?php echo e($campaign->logo ? 'checked' : ''); ?>>
          <label for="campaignLogo">Logo/Lockup Required</label>
        </div>
        <div class="large-9 columns hiddenField">
          <label for="campaignLogoBrief">Logo/Lockup Brief</label>
          <textarea rows="6" name="logoBody"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <hr/>
          <h4>Market*</h4>
          <p class="help-text" id="campaignMarketHelpText">Please select at least one market that this campaign will run in.</p>
          <div class="row">
            <div class="large-3 columns">
              <input class="revealer" id="marketDK" name="dk" type="checkbox" value=1 <?php echo e($campaign->dk ? 'checked' : ''); ?>>
              <label for="marketDK">DK</label>
            </div>
            <div class="large-9 columns hiddenField ">
              <label for="logoTextDK">DK Logo Text Translation</label>
              <input name="dkBody" type="text" value="<?php echo e($campaign->dkBody); ?>">
              <span class="form-error">Please enter the text for the DK version of the logo.</span> </div>
          </div>
          <div class="row">
            <div class="large-3 columns ">
              <input class="revealer" id="marketSE" name="sv" type="checkbox" value=1 <?php echo e($campaign->sv ? 'checked' : ''); ?>>
              <label for="marketSE">SE</label>
            </div>
            <div class="large-9 columns hiddenField">
              <label for="logoTextSE">SE Logo Text Translation</label>
              <input name="svBody" type="text" value="<?php echo e($campaign->svBody); ?>">
              <span class="form-error">Please enter the text for the SE version of the logo.</span> </div>
          </div>
          <div class="row">
            <div class="large-3 columns">
              <input class="revealer" id="marketNO" name="no" type="checkbox" value=1 <?php echo e($campaign->no ? 'checked' : ''); ?>>
              <label for="marketNO">NO</label>
            </div>
            <div class="large-9 columns hiddenField">
              <label for="logoTextNO">NO Logo Text Translation</label>
              <input name="noBody" type="text" value="<?php echo e($campaign->noBody); ?>">
              <span class="form-error">Please enter the text for the NO version of the logo.</span> </div>
          </div>
          <div class="row">
            <div class="large-3 columns">
              <input class="revealer" id="marketFI"  name="fi" type="checkbox" value=1 <?php echo e($campaign->fi ? 'checked' : ''); ?>>
              <label for="marketFI">FI</label>
            </div>
            <div class="large-9 columns hiddenField">
              <label for="logoTextFI">FI Logo Text Translation</label>
              <input name="fiBody" type="text" value="<?php echo e($campaign->fiBody); ?>">
              <span class="form-error">Please enter the text for the FI version of the logo.</span> </div>
          </div>
          <div class="row">
            <div class="large-3 columns">
              <input class="revealer" id="marketDE" name="de" type="checkbox" value=1 <?php echo e($campaign->de ? 'checked' : ''); ?>>
              <label for="marketDE">DE</label>
            </div>
            <div class="large-9 columns hiddenField">
              <label for="logoTextDE">DE Logo Text Translation</label>
              <input name="deBody" type="text" value="<?php echo e($campaign->deBody); ?>">
              <span class="form-error">Please enter the text for the DE version of the logo.</span> </div>
          </div>
          <div class="row">
            <div class="large-3 columns">
              <input class="revealer" id="en" name="en" type="checkbox" value=1 <?php echo e($campaign->en ? 'checked' : ''); ?>>
              <label for="marketEN">EN</label>
            </div>
            <div class="large-9 columns hiddenField">
              <label for="logoTextEN">EN Logo Text Translation</label>
              <input name="enBody" type="text" value="<?php echo e($campaign->enBody); ?>">
              <span class="form-error">Please enter the text for the EN version of the logo.</span> </div>
          </div>
        </div>
        <div class="large-6 columns" id="insertinputs"></div>
      </div>
    </fieldset>
    <div class="row">
      <hr>
      <div class="mediun-3 small-6 columns float-left">
        <a class="button primary float-left nextButton" href="<?php echo e(route('editCampaign', $campaign->id)); ?>">Previous</a>
      </div>
      <div class="medium-3 small-6 columns float-right">
        <button type="submit" class="submit button nextButton float-right">Next</button>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      </div>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>