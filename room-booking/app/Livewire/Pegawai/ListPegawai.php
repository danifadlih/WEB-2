<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;

class ListPegawai extends Component
{
    public function render()
    {
        return view('livewire.pegawai.list-pegawai',[
            'pegawais' => Pegawai ::select('pegawai.*', 'unitkerjas.nama as nama_unitkerjas')
            ->join('unitkerjas', 'pegawai.unitkerjas_id', '=', 'unitkerjas_id')
            ->get(),
        
    ]);
    }
     public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        if ($pegawai) {
            $pegawai->delete();
            session()->flash('message', 'Ruang berhasil dihapus.');
        }
    }
}

