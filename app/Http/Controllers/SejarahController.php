<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function sejarah()
    {
        $sejarah = Sejarah::first();
        return view('sejarah')->with('sejarah', $sejarah);
    }

    public function editSejarah()
    {
        $sejarah = Sejarah::first();

        return view('adminSejarahEdit')->with('sejarah', $sejarah);
    }

    public function editSejarah_proses(Request $request)
    {
        $this->validate($request, [
            'sejarah' => 'required',
        ]);

        $sejarah = Sejarah::first();

        Sejarah::where('sejarah', $sejarah->sejarah)
            ->update([
                'sejarah' => $request->sejarah,
            ]);
        return redirect('/admin/visiMisi');
    }
}
