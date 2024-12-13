<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class WorkerController extends Controller
{

    end in 8

    //action
    #[NoReturn] public function index()
    {
        $workers = Worker::all();
//        $workers->new_attr='new att';
//        dd($workers);
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));


    }

    /*
     * index
     * show
     * create
     * store
     * edit
     * update
     * delete
     * */


    public function create(): string
    {
        return view('worker.create');

    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::create($data);

        return redirect()->route('worker.index');
    }

    public function update()
    {
        $worker = Worker::find(3);
//        $worker->update([
//            'name'=>'Karl',
//            'surname'=>'Karlov',
//            'is_married'=>true,
//        ]);
        $worker->description = 'He is married';
        $worker->save();
        return $worker['name'] . ' was Updated';
    }

    public function delete()
    {
        $worker = Worker::find(1);
        $worker->delete();
        return $worker . 'was Deleted';
    }

}
