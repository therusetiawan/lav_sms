<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Requests\Yudisium\YudisiumCreate;
use App\Repositories\YudisiumRepo;
use App\Http\Controllers\Controller;
use Auth;

class YudisiumController extends Controller
{
    protected $yudusim;
    public function __construct(YudisiumRepo $yudisium)
    {
        // $this->middleware('teamSA', ['except' => ['destroy',] ]);
        // $this->middleware('super_admin', ['only' => ['destroy',] ]);

        $this->yudisium = $yudisium;
    }

    public function index()
    {
        $d['yud'] = $this->yudisium->getYudisium(Auth::user()->id);

        return view('pages.support_team.yudisiums.index', $d);
    }

    public function create() 
    {
        return view('pages.support_team.yudisiums.create');
    }

    public function store(YudisiumCreate $req)
    {
        $data = $req->all();
        $this->yudisium->create($data);
        return redirect()->route('yudisiums.index')->with('flash_success', __('msg.store_ok'));
    }

}
