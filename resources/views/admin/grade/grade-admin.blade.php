<x-dashboard>
    <div class="p-4 space-y-6">
        <!-- Tombol Add Grade -->
        <a href="/admin/grades/create">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Daftar Grade</h1>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    + Add Grade
                </button>
            </div>
        </a>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Class</th>
                        <th scope="col" class="px-6 py-3">Department</th>
                        <th scope="col" class="px-6 py-3">Student List</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $grade->kelass }}</td>
                            <td class="px-6 py-4">{{ $grade->department->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                <ul>
                                    @foreach ($grade->students as $student)
                                        <li>{{ $student->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="px-6 py-4 flex space-x-4">
                                <!-- Detail Button -->
                                <button class="modalDetailBtn"
                                    data-id="{{ $grade->id }}"
                                    data-name="{{ $grade->kelass }}"
                                    data-department="{{ $grade->department->name ?? 'N/A' }}"
                                    data-modal-target="readGradeModal"
                                    data-modal-toggle="readGradeModal">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="1" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="1" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>
                                <!-- Edit Button -->
                                <a href="/admin/grades/edit/{{ $grade->id }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Grade Detail -->
        <div id="readGradeModal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full">
            <div class="relative p-4 w-full max-w-xl h-auto bg-white rounded-lg shadow dark:bg-gray-800">
                <dl>
                    <dt class="mb-2 font-semibold text-gray-900 dark:text-white">Grade</dt>
                    <dd id="modalName" class="mb-4 text-gray-500 dark:text-gray-400"></dd>
                    <dt class="mb-2 font-semibold text-gray-900 dark:text-white">Department</dt>
                    <dd id="modalDepartment" class="mb-4 text-gray-500 dark:text-gray-400"></dd>
                </dl>
                <a id="editButton" href="#"
                    class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Edit
                </a>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const modalDetailBtns = document.querySelectorAll('.modalDetailBtn');
                const modal = document.getElementById('readGradeModal');
                const modalName = document.getElementById('modalName');
                const modalDepartment = document.getElementById('modalDepartment');
                const editButton = document.getElementById('editButton');

                modalDetailBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        modalName.textContent = btn.getAttribute('data-name');
                        modalDepartment.textContent = btn.getAttribute('data-department');
                        editButton.href = `/admin/grades/edit/${btn.getAttribute('data-id')}`;
                        modal.classList.remove('hidden');
                    });
                });

                modal.addEventListener('click', (event) => {
                    if (event.target === modal || event.target.closest('.closeModal')) {
                        modal.classList.add('hidden');
                    }
                });
            });
        </script>
    </div>
</x-dashboard>
