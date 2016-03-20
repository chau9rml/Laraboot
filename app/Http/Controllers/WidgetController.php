<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Widget;
use App\Http\Requests;
use Redirect;

class WidgetController extends Controller
{
    //
    public function index()
    {
        return view('widget.index');
    }
    
    public function create()
    {
        return view('widget.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['widget_name' => 'required|unique:widgets|alpha_num|max:40']);
        $widget = Widget::create(['widget_name' => $request->widget_name]);
        $widget->save();
        alert()->success('Congrats!', 'You made a widget');
        return Redirect::route('widget.index');
    }
}
