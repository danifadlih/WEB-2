<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create pegawai</h1>
    <form wire:submit.prevent="save" class="space-y-4">
        <flux:input type="text" id="nip" wire:model.defer="nip" label="NIP Pegawai"
            placeholder="Masukkan NIP Pegawai" required />
        <flux:input type="text" id="nama" wire:model.defer="nama" label="Nama Pegawai"
            placeholder="Masukkan Nama Pegawai" required />
        <flux:select id="unitkerjas_id" wire:model.defer="unitkerjas" label="Unit kerja"
            placeholder="Pilih Unit kerja" required>
            @foreach ($unitkerjas as $unit)
            <flux:select.option value="{{$unit->id}}">
               {{ $unit->nama}}
            </flux:select.option>
            @endforeach
        </flux:select>
        <flux:button type="submit" variant="primary">
            Save
        </flux:button>
    </form>
</div>
