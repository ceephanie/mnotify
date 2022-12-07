<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view ('groups.index')->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Group::create($input);
        return redirect('group')->with('flash_message', 'Group Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Group::find($id);
        return view('groups.show')->with('groups', $group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('groups.edit')->with('groups', $group);
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
        $group = Group::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('group')->with('flash_message', 'Group Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect('group')->with('flash_message', 'Group Deleted!');  
    }

    public function createGroups( Request $userInput){
        $nameOfGroups=$userInput->nameOfGroup;
        $valueformobile=$userInput->valueOfMobile;
        // dd($nameOfGroups,$valueformobile);
        $groupModel= new Group;
        $groupModel->name=$nameOfGroups;
        $groupModel->numberofcontacts=$valueformobile;
        $groupModel-> save();
        return back();

    }

    public function showgroupdata(){
        $showGroup=new Group;
        $datafromGroups=$showGroup::all();
        // dd( $datafromGroups);
        return view('groups.index',['groups'=>$datafromGroups]);

    }
    public function deleteGroups($id){
        $deleteGroupModel=new Group;
        $deletedGroup=$deleteGroupModel::find($id);
        // dd($deletedGroup);
        $deletedGroup->delete();
        return back();

    }
    public function getSpecificGroup($id){
        $specificGroup=new Group;
        $specifiedGroup=$specificGroup::find($id);
        return view('groups.edit',['groups'=>$specifiedGroup]);
        }

        public function updateGroup(Request $userInput,$id){
            $specificGroup=new Group;
            $newId=$userInput->newId;
            $newName=$userInput->newName;
            $newMobile=$userInput->newMobile;

            $foundGroup= $specificGroup::find($id);
            // $foundGroup->newId=$newId;
            $foundGroup->name=$newName;
            $foundGroup->numberofcontacts=$newMobile;
            $foundGroup->save();
            return redirect('group');

        }
        
        
}
