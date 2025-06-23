<x-app-layouts title="Buat Matakuliah">
    @push('styles')
    @endpush
    <div class="card">
        <div class="card-header">
            <h4>Form Create Matakuliah</h4>
        </div>
        <div class="card-body col-md-8 col-sm">
            <form action="{{ route('matkuls.store') }}" method="post">
                @csrf
                <x-input type="text" attr="nm_matkul" label="Matakuliah" autofocus="autofocus" />
                <x-input type="text" attr="sks" label="SKS" />
                <x-input type="text" attr="semester" label="Semester" />
                <x-input type="text" attr="tahun_ajaran" label="Tahun Ajaran" />
                <x-button>Simpan</x-button>
            </form>
        </div>
    </div>
    @push('scrips')
    @endpush
</x-app-layouts>