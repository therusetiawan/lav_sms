<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Requests\Yudisium\YudisiumCreate;
use App\Repositories\YudisiumRepo;
use App\Http\Controllers\Controller;
use Auth;

class UnggahMandiriController extends Controller
{
    protected $yudusim, $yudisiums;
    public function __construct(YudisiumRepo $yudisium)
    {
        // $this->middleware('teamSA', ['except' => ['destroy',] ]);
        // $this->middleware('super_admin', ['only' => ['destroy',] ]);

        $this->yudisium = $yudisium;
    }

    public function index()
    {
        $d['yudisiums'] = $this->yudisium->all();

        return view('pages.support_team.unggah_mandiri.index', $d);
    }

    public function destroy($id)
    {
        $this->yudisium->delete($id);
        return back()->with('flash_success', __('msg.del_ok'));
    }

    public function edit($id)
    {
        $data = array(
            'is_approved'=> 'true'
        );

        $this->yudisium->approve($id, $data);
        return back()->with('flash_success', __('msg.update_ok'));
    }

}
