@extends('master')

@section('konten')
<div class="flex justify-center pt-16">
    <table class="table-fixed w-1/2">
        <tr class="bg-cyan-600 text-lg">
            <th class="outline py-2">Name</th>
            <th class="outline">Position</th>
        </tr>
        @forelse ($content as $data)
        <tr class="bg-gradient-to-b from-cyan-300">
            <td class="py-5">{{ $data->name; }}</td>
            <td>{{ $data->role; }}</td>
        </tr>
        @empty
        @endforelse
    </table>   
</div>
@endsection