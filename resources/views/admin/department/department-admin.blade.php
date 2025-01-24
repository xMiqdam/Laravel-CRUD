<x-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="p-4 space-y-6">
        <!-- Tombol Add Department -->
        <a href="/admin/departments/create">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Daftar Department</h1>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    + Add Department
                </button>
            </div>
        </a>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Jurusan</th>
                        <th scope="col" class="px-6 py-3">Desc</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $department->id }}
                            </td>
                            <td class="px-6 py-4">{{ $department->name }}</td>
                            <td class="px-6 py-4">{{ $department->desc }}</td>
                            <td class="py-3 px-4 flex space-x-4">
                                <!-- Tombol View Detail -->
                                <button
                                    class="modalDetailBtn"
                                    data-id="{{ $department->id }}"
                                    data-name="{{ $department->name }}"
                                    data-department="{{ $department->desc }}"
                                    type="button">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="1"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="1"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>

                                <!-- Tombol Edit -->
                                <a href="/admin/departments/edit/{{ $department->id }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div id="readGradeModal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-black bg-opacity-50">
                <div class="relative p-4 w-full max-w-xl h-auto bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <dl>
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Name</dt>
                        <dd id="modalName" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"></dd>

                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Description</dt>
                        <dd id="modalDepartment"
                            class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"></dd>
                    </dl>
                    <div class="flex justify-between items-center">
                        <a type="button" href="#" id="editButton"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Edit
                        </a>
                    </div>
                </div>
            </div>

            <!-- Script Modal -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const modalDetailBtns = document.querySelectorAll('.modalDetailBtn');
                    const modal = document.getElementById('readGradeModal');
                    const modalName = document.getElementById('modalName');
                    const modalDepartment = document.getElementById('modalDepartment');
                    const editButton = document.getElementById('editButton');

                    modalDetailBtns.forEach((btn) => {
                        btn.addEventListener('click', function () {
                            modalName.textContent = this.getAttribute('data-name');
                            modalDepartment.textContent = this.getAttribute('data-department');
                            editButton.href = "/admin/departments/edit/" + this.getAttribute('data-id');
                            modal.classList.remove('hidden');
                        });
                    });

                    modal.addEventListener('click', function (event) {
                        if (event.target === modal || event.target.closest('.closeModal')) {
                            modal.classList.add('hidden');
                        }
                    });
                });
            </script>
        </div>
    </div>
</x-dashboard>
