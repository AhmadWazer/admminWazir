<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class useraccountController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $viewData = array(
            'pageName' => 'Account',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Account',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.account.useraccount')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = User::query();
        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('title', 'like', '%' . $searchString . '%');
                    $query->orWhere('slug', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('name', 'is_admin', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredUseraccount = $query->get();
        foreach($filteredUseraccount as $useraccount) {
            $useraccount->actions = '<a class="useraccount" href="'.route('admin.useraccount.edit', ['id' => $useraccount->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>
                    <a class="deleteprocess" data-type="useraccount" data-id="'.$useraccount->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformuser'. $useraccount->id.'" method="POST" action="'.route('admin.useraccount.destroy', ['id' => $useraccount->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => User::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredUseraccount
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $role = DB::table('roles')->get();
        $viewData = array(
            'pageName' => 'Add Account',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Account',
                    'class' => '',
                    'url' => route('admin.useraccount.index')
                ),
                (object)array(
                    'name' => 'Add New Account',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.account.addedituseraccount')->with($viewData)->with('role',$role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'meta_title' => 'required|max:255',
        //     'featured_image' => 'required|file|mimes:jpg,jpeg,png|max:5120',
        //     'meta_description' => 'required|max:255',
        // ]);

        // if ($validator->fails()) {
        //     return Redirect()->route("admin.useraccount.create")->with('error', $validator->errors());
        // }

        $useraccount = new User;
        $useraccount->name = $request->name;
        $useraccount->email = $request->email;
        $useraccount->status = $request->status;
        $useraccount->role = $request->roles;
        $useraccount->is_admin = $request->is_admin;
        if ($request->password) {
            $useraccount->password = Hash::make($request->password);
        }
        $useraccount->save();
        return Redirect()->route("admin.useraccount.index")->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = DB::table('roles')->get();
        $useraccount = User::findOrFail($id);
        $viewData = array(
            'pageName' => 'Update Account',
            'useraccount' => $useraccount,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Account',
                    'class' => '',
                    'url' => route('admin.useraccount.index')
                ),
                (object)array(
                    'name' => 'Update Account',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.account.addedituseraccount')->with($viewData)->with('role',$role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $useraccount = User::findOrFail($id);
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'featured_image' => 'file|mimes:jpg,jpeg,png|max:5120',
        //     'meta_title' => 'required|max:255',
        //     'meta_description' => 'required|max:255',
        // ]);
        // if ($validator->fails()) {
        //     return Redirect()->route("admin.useraccount.update", ['id' =>$id])->with('error', $validator->errors());
        // }

        $useraccount->name = $request->name;
        $useraccount->email = $request->email;
        $useraccount->status = $request->status;
        $useraccount->role = $request->roles;
        $useraccount->is_admin = $request->is_admin;
        if ($request->password) {
            $useraccount->password = Hash::make($request->password);
        }
        $useraccount->save();
        return Redirect()->route("admin.useraccount.index")->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return Redirect()->route("admin.useraccount.index")->with('success', 'Category deleted successfully');
    }

    public function uploadImage($file) {
        $ext = $file->extension();
        $path = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
        $prefix = 'uploads-' . md5(time().rand());
        $imgName = $prefix . '.' . $ext;
        if ($file->move($path, $imgName)) {
            return url('/')."/uploads/". $imgName;
        }else{
            return false;
        }
    }
}
