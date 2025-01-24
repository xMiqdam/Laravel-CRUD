<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>


    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      No
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Class
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Jurusan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Student List
                  </th>
              </tr>
          </thead>
          @foreach ($grades as $grade)
          <tbody>
              <tr class="bg-white border-b">
                  <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{$grade -> id}}
                  </td>
                  <td class="px-6 py-4">
                      {{$grade -> kelass}}
                  </td>
                  <td class="px-6 py-4">
                    {{$grade -> department -> name}}
                </td>
                  <td class="px-6 py-4">
                    @foreach ($grade ->students as $student )
                    <ul><li>{{$student->name}}</li></ul>
                   @endforeach
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </x-layout>
