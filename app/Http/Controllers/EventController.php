<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function tampil_event($id)
    {
        $event = Event::where('id', $id)
            ->first();
        return view('tampil_event', ['event' => $event]);
    }

    public function eventAll()
    {
        $event = Event::orderBy('waktu_mulai', 'desc')
            ->paginate(5);

        return view('eventAll', ['events' => $event]);
    }

    public function addEvents()
    {
        return view('adminEventsAdd');
    }

    public function addEvents_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required',
        ]);

        Event::insert([
            'nama' => $request->nama,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'penjelasan' => $request->penjelasan,
        ]);

        return redirect('/');
    }

    public function showEvent()
    {
        $events = Event::orderBy('id', 'desc')
            ->get();

        return view('adminEvents')->with('events', $events);
    }

    public function editEvent($id)
    {
        $events = Event::where('id', $id)
            ->first();

        return view('adminEventsEdit')->with('events', $events);
    }

    public function editEvent_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required',
        ]);

        Event::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'jenis' => $request->jenis,
                'lokasi' => $request->lokasi,
                'penyelenggara' => $request->penyelenggara,
                'kontak' => $request->kontak,
                'deskripsi' => $request->deskripsi,
                'penjelasan' => $request->penjelasan,
            ]);

        return redirect('/admin/showEvent');
    }

    public function hapusEvent($id)
    {
        Event::where('id', $id)
            ->delete();

        return redirect('/admin/showEvent');
    }
}
