<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.pages.client.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $client = Client::create([
            'name' => $request->name,
        ]);

        if ($request->has('image')) {
            $client->addMedia($request->file('image'))->toMediaCollection('ClientLogo');
        }

        $notification = array(
            'messege' => 'Client added Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Client $client)
    {
        return view('admin.pages.client.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|max:191',
        ]);

        $client->update([
            'name' => $request->name,
        ]);

        if ($request->has('image')) {
            $client->addMedia($request->file('image'))->toMediaCollection('ClientLogo');
        }

        $notification = array(
            'messege' => 'Client Updated!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Client $client)
    {
        $client->delete();

        $notification = array(
            'messege' => 'Client Removed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
