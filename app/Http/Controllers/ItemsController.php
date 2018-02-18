<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateItemRequest;

use Auth;
use App\Item;
use App\Type;
use App\Task;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active=Task::where('active', true)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        $inactive=Task::where('active', false)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('items.index')
            ->with('active',$active)
            ->with('inactive', $inactive);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::distinct()->pluck('name', 'id');
        // return $types;
        return view('items.create')
            ->with('types',$types); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItemRequest $request)
    {
        $result = $request->all();
        $result["date_from"] = date("Y-m-d",strtotime($result["date_from"]));
        $result["date_to"] = date("Y-m-d",strtotime($result["date_to"]));
        $userId = intval($result["user_id"]);
        unset($result["user_id"]);
        $item = Item::create($result);
        $list = ["active" => true,
                 "item_id" => $item['id'],
                 "user_id" => $userId];
        $task = Task::create($list);

        return redirect('/user/my-tasks');
        
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
        $task = Task::findOrFail($id);
        $types = Type::distinct()->pluck('name', 'id');
        $result = Item::findOrFail($task->id);
        return view('items.edit')
            ->with('result', $result)
            ->with('types', $types)
            ->with('task_id', $task->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateItemRequest $request, $id)
    {
        $result = $request->all();
        $result["date_from"] = date("Y-m-d",strtotime($result["date_from"]));
        $result["date_to"] = date("Y-m-d",strtotime($result["date_to"]));
        $item = Item::findOrFail($id);
        $item->update($result);
        return redirect('/user/my-tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('/user/my-tasks');
    }

    public function end($id)
    {
        $task = Task::findOrFail($id);
        $task->active = 0;
        $task->save();
        $item = Item::where('id',$task->item_id)->first();
        $item->status = 0;
        $item->save();
        return redirect('/user/my-tasks');
    }

}
