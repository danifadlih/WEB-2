<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Pegawai;
use App\Models\unitkerjas;

class CreatePegawai extends Component
{
     #[Validate('required|string|max:10')]
    public string $nip = '';
    #[Validate('required|string|max:100')]
    public $nama = '';
    #[Validate('required|string|max:50')]
    public $unitkerjas_id = '';

    public function save()
    {
        $this->validate();
        Pegawai::create([
            'nip' => $this->nip,
            'nama' => $this->nama,
            'unitkerjas_id' => $this->unitkerjas_id,
        ]);
        session()->flash('message', 'Pegawai berhasil ditambahkan.');
        // Reset the form fields
        $this->redirectRoute('pegawai.index');
    }
    public function render()
    {
        return view('livewire.pegawai.create-pegawai',[
            'unitkerjas' => unitkerjas::all(),
        
        ]);

    }
}
