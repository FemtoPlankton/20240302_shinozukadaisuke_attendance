<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WorkRecord;

class WorkController extends Controller
{
    public function index()
    {
        $worlEvents = WorkEvent::select(DB::raw('DATE(created_at) as date'))
            ->groupBy('date')
            ->get();

        return view('work_events.index', compact('workEvents'));
    }

    public function start(Request $request)
    {
        $user = $request->user();
        WorkRecord::create([
            'user_id' => $user->id,
            'type' => 'start'
        ]);

        // リダイレクトやレスポンスを返す

        auth()->user()->update(['work_started' => true]);

        return redirect('/dashboard');
    }

    public function end(Request $request)
    {
        $user = $request->user();
        WorkRecord::create([
            'user_id' => $user->id,
            'type' => 'end'
        ]);

        // リダイレクトやレスポンスを返す

        return redirect('/dashboard');
    }

    public function startBreak(Request $request)
    {
        $user = $request->user();
        WorkRecord::create([
            'user_id' => $user->id,
            'type' => 'start_break'
        ]);

        // リダイレクトやレスポンスを返す

        return redirect('/dashboard');
    }

    public function endBreak(Request $request)
    {
        $user = $request->user();
        WorkRecord::create([
            'user_id' => $user->id,
            'type' => 'end_'
        ]);

        // リダイレクトやレスポンスを返す

        return redirect('/dashboard');
    }
}
