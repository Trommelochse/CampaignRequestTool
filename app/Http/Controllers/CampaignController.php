<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Campaign;
use Session;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
    	return view('campaigns.dashboard')->withCampaigns($campaigns);
    }

    public function create() {
    	return view('campaigns.step1');
    }

    public function store(Request $request) {
    	$campaign = new Campaign;

    	$campaign->title = $request->title;
    	$campaign->segment = $request->segment;
        $campaign->body = $request->body;
        $campaign->type = $request->type;
        $campaign->relatedCampaign = $request->relatedCampaign;
        $campaign->sb = $request->sb;
        $campaign->ca = $request->ca;
        $campaign->vca = $request->vca;
        $campaign->lca = $request->lca;
        $campaign->vs = $request->vs;
        $campaign->pk = $request->pk;
        $campaign->mx = $request->mx;
        $campaign->in = $request->in;
        $campaign->mw = $request->mw;
        $campaign->native = $request->native;
        $campaign->web = $request->web;
        $campaign->meeting = $request->meeting;
        $campaign->startDate = $request->startDate;
        $campaign->endDate = $request->endDate;
        $campaign->recurring = $request->recurring;
        $campaign->recurringBody = $request->recurringBody;

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('createLocalisation' , $campaign->id);

    }

    public function show($id) {
        $campaign = Campaign::find($id);

        return view('campaigns.show')->withCampaign($campaign);
    }

    public function editCampaign($id) {
        $campaign = Campaign::find($id);

        return view('campaigns.edit1')->withCampaign($campaign);
    }

    public function updateCampaign(Request $request, $id) {

        $campaign = Campaign::find($id);

        $campaign->title = $request->title;
        $campaign->segment = $request->segment;
        $campaign->body = $request->body;
        $campaign->type = $request->type;
        $campaign->relatedCampaign = $request->relatedCampaign;
        $campaign->sb = $request->sb;
        $campaign->ca = $request->ca;
        $campaign->vca = $request->vca;
        $campaign->lca = $request->lca;
        $campaign->vs = $request->vs;
        $campaign->pk = $request->pk;
        $campaign->mx = $request->mx;
        $campaign->in = $request->in;
        $campaign->mw = $request->mw;
        $campaign->native = $request->native;
        $campaign->web = $request->web;
        $campaign->meeting = $request->meeting;
        $campaign->startDate = $request->startDate;
        $campaign->endDate = $request->endDate;
        $campaign->recurring = $request->recurring;
        $campaign->recurringBody = $request->recurringBody;

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('editLocalisation' , $campaign->id);

    }


    public function createLocalisation($id) {
    	$campaign = Campaign::find($id);
    	return view('campaigns.step2')->withCampaign($campaign);
    }

    public function storeLocalisation(Request $request, $id) {

    	$campaign = Campaign::find($id);

        $campaign->logo = $request->input('logo');
        $campaign->logoBody = $request->input('logoBody');
        $campaign->dkBody = $request->input('dkBody');
        $campaign->svBody = $request->input('svBody');
        $campaign->noBody = $request->input('noBody');
        $campaign->fiBody = $request->input('fiBody');
        $campaign->deBody = $request->input('deBody');
        $campaign->enBody = $request->input('enBody');
        $campaign->dk = $request->input('dk');
        $campaign->sv = $request->input('sv');
        $campaign->no = $request->input('no');
        $campaign->fi = $request->input('fi');
        $campaign->de = $request->input('de');
        $campaign->en = $request->input('en');

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('createCreative', $campaign->id);

    }

    public function editLocalisation($id) {
        $campaign = Campaign::find($id);

        return view('campaigns.edit2')->withCampaign($campaign);
    }

    public function updateLocalisation(Request $request, $id) {

        $campaign = Campaign::find($id);

        $campaign->logo = $request->input('logo');
        $campaign->logoBody = $request->input('logoBody');
        $campaign->dkBody = $request->input('dkBody');
        $campaign->svBody = $request->input('svBody');
        $campaign->noBody = $request->input('noBody');
        $campaign->fiBody = $request->input('fiBody');
        $campaign->deBody = $request->input('deBody');
        $campaign->enBody = $request->input('enBody');
        $campaign->dk = $request->input('dk');
        $campaign->sv = $request->input('sv');
        $campaign->no = $request->input('no');
        $campaign->fi = $request->input('fi');
        $campaign->de = $request->input('de');
        $campaign->en = $request->input('en');

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('editCreative', $campaign->id);

    }

    public function createCreative($id) {
        $campaign = Campaign::find($id);
        return view('campaigns.step3')->withCampaign($campaign);
    }

    public function storeCreative(Request $request, $id) {

        $campaign = Campaign::find($id);

        $campaign->creativeBody = $request->creativeBody;
        $campaign->onsite = $request->onsite;
        $campaign->lp = $request->lp;
        $campaign->nl = $request->nl;
        $campaign->oms = $request->oms;
        $campaign->sms = $request->sms;
        $campaign->push = $request->push;
        $campaign->blog = $request->blog;
        $campaign->some = $request->some;
        $campaign->onsiteBody = $request->onsiteBody;
        $campaign->lpBody = $request->lpBody;
        $campaign->lpUrl = $request->lpUrl;
        $campaign->lpSimilar = $request->lpSimilar;
        $campaign->nlBody = $request->nlBody;
        $campaign->omsBody = $request->omsBody;
        $campaign->smsBody = $request->smsBody;
        $campaign->pushBody = $request->pushBody;
        $campaign->blogBody = $request->blogBody;
        $campaign->blogCategory = $request->blogCategory;
        $campaign->someBody = $request->someBody;
        $campaign->aff = $request->aff;
        $campaign->extba = $request->extba;
        $campaign->lbm = $request->lbm;
        $campaign->print = $request->print;
        $campaign->dm = $request->dm;
        $campaign->tvc = $request->tvc;  

        $campaign->state = 'Pending';

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('showCampaign', $campaign->id);
    }

    public function editCreative($id) {
        $campaign = Campaign::find($id);
        return view('campaigns.edit3')->withCampaign($campaign);
    }

    public function updateCreative(Request $request, $id) {

        $campaign = Campaign::find($id);

        $campaign->creativeBody = $request->creativeBody;
        $campaign->onsite = $request->onsite;
        $campaign->lp = $request->lp;
        $campaign->nl = $request->nl;
        $campaign->oms = $request->oms;
        $campaign->sms = $request->sms;
        $campaign->push = $request->push;
        $campaign->blog = $request->blog;
        $campaign->some = $request->some;
        $campaign->onsiteBody = $request->onsiteBody;
        $campaign->lpBody = $request->lpBody;
        $campaign->lpUrl = $request->lpUrl;
        $campaign->lpSimilar = $request->lpSimilar;
        $campaign->nlBody = $request->nlBody;
        $campaign->omsBody = $request->omsBody;
        $campaign->smsBody = $request->smsBody;
        $campaign->pushBody = $request->pushBody;
        $campaign->blogBody = $request->blogBody;
        $campaign->blogCategory = $request->blogCategory;
        $campaign->someBody = $request->someBody;
        $campaign->aff = $request->aff;
        $campaign->extba = $request->extba;
        $campaign->lbm = $request->lbm;
        $campaign->print = $request->print;
        $campaign->dm = $request->dm;
        $campaign->tvc = $request->tvc;  

        $campaign->state = 'pending';

        $campaign->save();

        //Session::flash('success', 'Campaign saved');

        return redirect()->route('showCampaign', $campaign->id);

    }
}
