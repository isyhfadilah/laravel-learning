@extends('master')

@section('konten')
<table class="table-fixed w-1/2">
    <tr class="bg-cyan-600 text-lg">
        <th class="outline py-2">Name</th>
        <th class="outline">Position</th>
    </tr>
    @forelse ($content as $data)
    <tr>
        <td class="py-5">{{ $data->name; }}</td>
        <td>{{ $data->role; }}</td>
    </tr>
    @empty
    @endforelse
</table>   
@endsection