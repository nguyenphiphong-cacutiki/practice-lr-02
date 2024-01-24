<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        //
        $numberOfRecord = Channel::count();
        $perPage = 10;
        $numberOfPage = $numberOfRecord % $perPage == 0?
             (int) ($numberOfRecord / $perPage): (int) ($numberOfRecord / $perPage) + 1;
        $pageIndex = 1;
        if($request->has('pageIndex'))
            $pageIndex = $request->input('pageIndex');
        if($pageIndex < 1) $pageIndex = 1;
        if($pageIndex > $numberOfPage) $pageIndex = $numberOfPage;
        //
        $channels = Channel::orderByDesc('ChannelID')
                ->skip(($pageIndex-1)*$perPage)
                ->take($perPage)
                ->get();  
        // dd($arr);
        return view('index', compact( 'channels', 'numberOfPage', 'pageIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $channels = Channel::all();
        return view('create', compact('channels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Channel::create($request->all());
        return redirect()->route('channels.index')->with('mes', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel, Request $request)
    {
        //
         //page index
         $pageIndex = 1;
         if($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
         // show
         return view('show', compact('channel', 'pageIndex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel, Request $request)
    {
        //
        // pageIndex
        $pageIndex = 1;
        if($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
       
        return view('edit', compact('channel', 'pageIndex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Channel $channel)
    {
        //
        // pageIndex
        $pageIndex = 1;
        if($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
        // echo $pageIndex;
        // update
        $channel->update($request->all());
        return redirect()->route('channels.index', ['pageIndex' => $pageIndex])->with('mes', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel, Request $request)
    {
        //
        //
        $pageIndex = 1;
        if($request->has('pageIndex'))  $pageIndex = $request->input('pageIndex');
        $channel->delete();
        return redirect()->route('channels.index', ['pageIndex' => $pageIndex])->with('mes', 'Xóa thành công');
    }
}
