<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Session;
use Illuminate\Support\Str;
/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id','desc')->get();

        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    public function single(Request $request, $code){
        $client = Client::where('code', $code)->firstOrFail();
        $maximo_personas = $client->num_invitados_perm;
        $maximo_niños = $client->num_invitados_perm_n;

        return view('Wedding.inicio', compact('client', 'maximo_personas', 'maximo_niños'));
    }

    public function update_single(Request $request, $code){

        $user = Client::where('code', $code)->firstOrFail();
        $user->nombre = $request->get('nombre');
        $user->num_invitados_confirm = $request->get('num_invitados_confirm');
        $user->num_invitados_confirm_n = $request->get('num_invitados_confirm_n');
        $user->estatus = '1';
        $user->update();

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->back()->with('success', 'usuario editado con exito.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::random(8);
        $client = new Client;
        $client->nombre = $request->get('nombre');
        $client->estatus = '0';
        $client->num_invitados_perm = $request->get('num_invitados_perm');
        $client->num_invitados_perm_n = $request->get('num_invitados_perm_n');
        $client->telefono = $request->get('telefono');
        if ($request->hasFile("qr")) {
            $file = $request->file('qr');
            $path = public_path() . '/qr';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $client->qr = $fileName;
        }
        $client->code = $code;
        $client->save();

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client = Client::where('id', $client->id)->firstOrFail();
        $client->nombre = $request->get('nombre');
        $client->num_invitados_perm = $request->get('num_invitados_perm');
        $client->num_invitados_perm_n = $request->get('num_invitados_perm_n');
        $client->telefono = $request->get('telefono');
        if ($request->hasFile("qr")) {
            $file = $request->file('qr');
            $path = public_path() . '/qr';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $client->qr = $fileName;
        }
        $client->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        Session::flash('delete', 'Se ha eliminado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully');
    }
}
