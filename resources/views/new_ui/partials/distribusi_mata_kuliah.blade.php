<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Mata Kuliah</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">Kelompok Mata Kuliah</th>
            <th scope="col">SKS</th>
        </tr>
    </thead>
    <tbody>
        {{-- Semester 1 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 1</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk1)
            @if ($mk1->semester == 'Semester 1')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk1->kode_mk }}</td>
                    @if ($mk1->document == null)
                        <td>{{ $mk1->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk1->document) }}" target="_blank">{{ $mk1->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk1->kelompok_mk }}</td>
                    <td>{{ $mk1->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 1')->sum('sks') }}</td>
        </tr>
        {{-- Semester 2 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 2</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk2)
            @if ($mk2->semester == 'Semester 2')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk2->kode_mk }}</td>
                    @if ($mk2->document == null)
                        <td>{{ $mk2->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk2->document) }}" target="_blank">{{ $mk2->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk2->kelompok_mk }}</td>
                    <td>{{ $mk2->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 2')->sum('sks') }}</td>
        </tr>
        {{-- Semester 3 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 3</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk3)
            @if ($mk3->semester == 'Semester 3')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk3->kode_mk }}</td>
                    @if ($mk3->document == null)
                        <td>{{ $mk3->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk3->document) }}" target="_blank">{{ $mk3->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk3->kelompok_mk }}</td>
                    <td>{{ $mk3->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 3')->sum('sks') }}</td>
        </tr>
    </tbody>
</table>
