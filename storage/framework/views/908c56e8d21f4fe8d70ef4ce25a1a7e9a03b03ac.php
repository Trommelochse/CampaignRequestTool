<?php $__env->startSection('title', 'Add Creatives'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
    <form action="<?php echo e(route('updateCreative', $campaign->id)); ?>" data-abide novalidate method="POST">
        <fieldset class="borderFieldset">
            <div class="row">
                <div class="medium-4 columns">
                    <div class="step-inactive"> 1. Campaign Info </div>
                </div>
                <div class="medium-4 columns">
                    <div class="step-inactive"> 2. Localisation </div>
                </div>
                <div class="medium-4 columns">
                    <div class="step-active"> 3. Channels </div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <h4>Creative Brief*</h4>
                    <p class="help-text" id="creativeBriefHelpText">What will be the key creative for this campaign? Please be detailed as possible, yet leave space for flexibility by design team.</p>
                    <textarea rows="8" name="creativeBody" id="campaignCreativeBrief" type="text" required><?php echo e($campaign->creativeBody); ?></textarea>
                    <span class="form-error">This field cannot be left blank</span> </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <hr />
                    <h4>Internal Channels*</h4>
                    <p class="help-text" id="internalChannelsHelpText">Please tick all applicable selections. These are channels within direct control of NordicBet Team.</p>
                </div>
                <div class="large-3 columns">
                    <input id="channelOnsite" type="checkbox" class="revealer" name="onsite" value=1 <?php echo e($campaign->onsite ? 'checked' : ''); ?>>
                    <label for="channelOnsite">Onsite</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelOnsiteBrief">Onsite Banners Brief</label>
                    <textarea rows="3" id="channelOnsiteBrief" name="onsiteBody" data-abide-ignore><?php echo e($campaign->onsiteBody); ?></textarea>
                    <p class="help-text" id="channelOnsiteBriefHelpText">Please provide any information as to how you'd like to communicate the campaign on the NordicBet Sites. If this field is left blank, the production team will decide what is appropriate.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelLP" type="checkbox" class="revealer" name="lp" value=1 <?php echo e($campaign->lp ? 'checked' : ''); ?>>
                    <label for="channelLP">Landing Page</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelLPURL">Landing Page Desired URL*</label>
                    <input id="channelLPURL" type="text" name="lpUrl" value="<?php echo e($campaign->lpUrl); ?>">
                    <span class="form-error">This field cannot be left blank</span>
                    <p class="help-text" id="channelLPURLHelpText">Please provide the desired URL for the landing page.</p>
                    <label for="channelLPRef">Similar Landing Page</label>
                    <input id="channelLPRef" type="text" name="lpSimilar" data-abide-ignore value="<?php echo e($campaign->lpSimilar); ?>">
                    <p class="help-text" id="channelLPRefHelpText">If you would like a similar layout to a previously implemented Landing page, it will be helpful to at least refer to the campaign name. Better yet enter the URL for maximum clarity.</p>
                    <label for="channelLPBrief">Landing Page Brief*</label>
                    <textarea rows="3" id="channelLPBrief" name="lpBody"><?php echo e($campaign->lpBody); ?></textarea>
                    <span class="form-error">This field cannot be left blank</span>
                    <p class="help-text" id="channelLPBriefHelpText">Please provide a clear brief as to how the landing page should be constructed. Listing required elements can be enough, however it would be helpful to list as much information as possible.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelEmail" type="checkbox" class="revealer" name="nl" value=1 <?php echo e($campaign->nl ? 'checked' : ''); ?>>
                    <label for="channelEmail">Email Sendout</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelEmailBrief">Email Sendout Brief</label>
                    <textarea rows="3" id="nlBody" name="nlBody" data-abide-ignore><?php echo e($campaign->nlBody); ?></textarea>
                    <p class="help-text" id="channelEmailBriefHelpText">If you have any special request please enter them here. If this field is left empty, the decisions will rest on the execution team.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelOMS" type="checkbox" class="revealer" name="oms" value=1 <?php echo e($campaign->oms ? 'checked' : ''); ?>>
                    <label for="channelOMS">OMS (Onsite Message)</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelOMSBrief">OMS (Onsite Messaging) Brief</label>
                    <textarea rows="3" id="channelOMSBrief" name="omsBody" data-abide-ignore><?php echo e($campaign->omsBody); ?></textarea>
                    <p class="help-text" id="channelOMSBriefHelpText">If you have any special request please enter them here. If this field is left empty, the decisions will rest on the execution team.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="SMS" type="checkbox" class="revealer" name="sms" value=1 <?php echo e($campaign->sms ? 'checked' : ''); ?>>
                    <label for="SMS">SMS</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelSMSBrief">SMS Brief</label>
                    <textarea rows="3" id="channelSMSBrief" name="smsBody" data-abide-ignore><?php echo e($campaign->smsBody); ?></textarea>
                    <p class="help-text" id="channelSMSBriefHelpText">If you have any special request please enter them here. If this field is left empty, the decisions will rest on the execution team.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelPush" type="checkbox" class="revealer" name="push" value=1 <?php echo e($campaign->push ? 'checked' : ''); ?>>
                    <label for="channelPush">Push Notifications</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelPushBrief">Push Notifications Brief</label>
                    <textarea rows="3" id="channelPushBrief" name="pushBody" data-abide-ignore><?php echo e($campaign->push); ?></textarea>
                    <p class="help-text" id="channelPushBriefHelpText">If you have any special request please enter them here. If this field is left empty, the decisions will rest on the execution team.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelBlog" type="checkbox" class="revealer" name="blog" value=1 <?php echo e($campaign->blog ? 'checked' : ''); ?>>
                    <label for="channelBlog">Blog Post</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelBlogBrief">Blog Post Brief*</label>
                    <textarea rows="3" id="channelBlogBrief" name="blogBody"<?php echo e($campaign->blogBody); ?>></textarea>
                    <span class="form-error">This field cannot be left blank</span>
                    <p class="help-text" id="channelBlogBriefHelpText">Please provide a clear brief for the desired blog post.</p>
                    <label for="channelBlogCategoryTags">Desired Category and/or Tags for Blog Post</label>
                    <input id="channelBlogCategoryTags" type="text" name="blogCategory" data-abide-ignore value="<?php echo e($campaign->blogCategory); ?>">
                    <p class="help-text" id="channelBlogCategoryTagsHelpText">Please provide desired Categories or Tags for Blog Post. SoMe team will ultimately have final decision, however all requests will be taken strongly under consideration.</p>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <input id="channelSocial" type="checkbox" class="revealer" name="some" value=1 <?php echo e($campaign->some ? 'checked' : ''); ?>>
                    <label for="channelSocial">Social Media</label>
                </div>
                <div class="large-9 columns hiddenField">
                    <label for="channelSocialBrief">Social Media Brief</label>
                    <textarea rows="3" id="channelSocialBrief" name="someBody"><?php echo e($campaign->someBody ? 'checked' : ''); ?></textarea>
                    <span class="form-error">This field cannot be left blank</span>
                    <p class="help-text" id="channelSocialBriefHelpText">Please provide a clear brief for the desired Social Media campaign. Which channels to be used will be ultimately dependent on the Target Market (Acquisition, Retention or Both) and will be at the discretion of the SoMe Team.</p>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <hr />
                    <h4>External Channels*</h4>
                    <p class="help-text" id="campaignTitleHelpText">Please tick all applicable selections. These are channels that require preparation for handover of materials to external Teams. These will require further discussion as to their application.</p>
                </div>
                <div class="medium-6 columns">
                    <input name="aff" value=1 id="channelAffiliates" type="checkbox" class="campaignChannel" <?php echo e($campaign->aff ? 'checked' : ''); ?>>
                    <label for="channelAffiliates">Affiliate Banners</label>
                </div>
                <div class="medium-6 columns">
                    <input name="extba" value=1 id="channelExternalBanners" type="checkbox" class="campaignChannel" <?php echo e($campaign->extba ? 'checked' : ''); ?>>
                    <label for="channelExternalBanners">Other External Banners</label>
                </div>
                <div class="medium-6 columns">
                    <input name="lbm" value=1 id="channelLBM" type="checkbox" class="campaignChannel" <?php echo e($campaign->lbm ? 'checked' : ''); ?>>
                    <label for="channelLBM">Local Campaign - (LBMs)</label>
                </div>
                <div class="medium-6 columns">
                    <input name="print" value=1 id="channelPrint" type="checkbox" class="campaignChannel" <?php echo e($campaign->print ? 'checked' : ''); ?>>
                    <label for="channelPrint">Print</label>
                </div>
                <div class="medium-6 columns">
                    <input name="dm" value=1 id="channelDirectMail" type="checkbox" class="campaignChannel" <?php echo e($campaign->dm ? 'checked' : ''); ?>>
                    <label for="channelDirectMail">Direct Mailer</label>
                </div>
                <div class="medium-6 columns">
                    <input name="tvc" value=1 id="channelTVC" type="checkbox" class="campaignChannel" <?php echo e($campaign->tvc ? 'checked' : ''); ?>>
                    <label for="channelTVC">TVC</label>
                </div>
            </div>
        </fieldset>
        <div class="row">
            <hr>
            <div class="mediun-3 small-6 columns float-left">
                <a class="button primary float-left nextButton" href="<?php echo e(route('editLocalisation', $campaign->id)); ?>">Previous</a>
            </div>
            <div class="medium-5 small-6 columns float-right">
                <button class="submit button success nextButton float-right">Submit for Approval</button>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </div>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>