<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;

class ListPegawai extends Component
{
    public function render()
    {
        return view('livewire.pegawai.list-pegawai', [
            'pegawais' => Pegawai::select('pegawai.*', 'unitkerja.nama as nama_unitkerja')
                ->join('unitkerja', 'pegawai.unitkerjas_id', '=', 'unitkerja.id')
                ->get(),
        ]);
    }
    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        if ($pegawai) {
            $pegawai->delete();
            session()->flash('message', 'pegawai berhasil dihapus.');
        }
    }
}
