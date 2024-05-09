<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function proposals()
    {
        return view('admin.proposal.proposallist');
    }
}
