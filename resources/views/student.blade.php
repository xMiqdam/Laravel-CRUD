<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Kelas</th>
                    <th scope="col" class="px-6 py-3">Jurusan</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$student->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$student->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->grade->kelass}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->grade->department->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->address}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
