<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use DB;
use Session;
use Carbon;
class TodoController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function add()
    {
    	return view('add');
    }
    public function saveitem(Request $request)
    {

        $item = new Item();
        $item -> user_id = auth() -> user()->id;
        $item-> Task_Name         = $request -> Task_Name;
        $item-> Completion_Date   = $request -> Completion_Date;
        $item-> Completion_Status = $request -> Completion_Status;
        $item-> save();
        //return 'success';
    	return redirect('/todo/add')->with('message','New item saved');
    }
    public function manageList()
    { 
        
      //  $items = auth()->user()->item;
       //$items = auth()->user()->item()->where('Completion_Status', 0)->latest()->get();
         $items = auth()->user()->item()->where('Completion_Date','>=',Carbon\Carbon::now() )->latest()->get();
        return view('todo',['items'=>$items]);
    }
    public function undoneitem($id)
    {
        $item = Item::find($id);
        $item->Completion_Status = 0;
        $item->save();
        return redirect('/todo')->with('message','Item info undone');
    }
     public function doneitem($id)
    {
        $item = Item::find($id);
        $item->Completion_Status = 1;
        $item->save();
        return redirect('/todo')->with('message','Item info done');
    }
    public function edititem($id)
    {
        $item = Item::find($id);
        return view('edit',['item'=>$item]);
    }

    public function updateitem(Request $request)
    {
        $item = Item::find($request -> item_id);
        $item-> Task_Name         = $request -> Task_Name;
        $item-> Completion_Date   = $request -> Completion_Date;
        $item-> Completion_Status = $request -> Completion_Status;
        $item-> save();

        return redirect('/todo')->with('message','Item info updated');

    }

    public function deleteItem($id)
    {
        $item = Item::find($id);
       // auth()->user()->item
        $item->delete();
     //   return view('history',['items'=>$item1]);
        return redirect('/todo')->with('message','item deleted');
    }
    public function history()
    {
        //$i = auth()->user()->id;
        //$task = Item::active()->where('user_id',$i)->get();
         $task = auth()->user()->item()->where('Completion_Date','<',Carbon\Carbon::now() )->latest()->get();
        return view('history',['tasks'=>$task]);
    }


}
