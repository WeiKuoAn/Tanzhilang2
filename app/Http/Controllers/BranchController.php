<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function branch_datas(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $branches = Branch::where('customer_id', $request->cust_id)->get();

            if($branches){
                foreach ($branches as $key => $branch) {
                    $output.= '<option value="'.$branch->id.'">'.$branch->name."</option>'";
                  }
            }
            return Response($output);
        }
    }

    public function branch_data(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $branch = Branch::where('id',$request->branch_id)->first();

            if($branch){
                return Response($branch);
            }
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
