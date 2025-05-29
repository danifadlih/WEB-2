<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;
use Livewire\Attributes\validate;
use App\Models\unitkerjas;

class EditPegawai extends Component
{
    #[validate('required|string|max:10')]
    public $nip; 

    #[validate('required|string|max:58')]
    public string $nama;

   #[validate('required')]
    public $unitkerjas;

    public Pegawai $pegawai;

    public $unitkerja; 

    public function mount(Pegawai $pegawai) {
        $this->pegawai = $pegawai;
        $this->nip = $pegawai->nip;
        $this->nama = $pegawai->nama;
        $this->unitkerjas = $pegawai->unitkerjas_id;
        $this->unitkerjas = unitkerjas::all();

    }

    public function save(){
        $this->validate();

        $this->pegawai->update([
            'nip' => $this->nip,
            'nama' => $this->nama,
            'unitkerjas_id' => $this->unitkerjas,
            
        ]);
        session()->flash('message', 'pegawai berhasil di ubah');

        $this->redirectRoute('pegawai.index');
    }

    public function render()
    {
        return view('livewire.pegawai.edit-pegawai');
    }
}
