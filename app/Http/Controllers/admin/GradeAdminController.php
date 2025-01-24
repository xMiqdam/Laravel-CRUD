<?php

namespace App\Http\Controllers\admin;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Department;


class GradeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gradesadmin = Grade::All();

        return view('admin.grade.grade-admin', [
            'title' => 'Grade Page',
            'grades' => $gradesadmin->load('students','department')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.grade.create', [
            'title' => 'Create New Grade',
            'departments' => Department::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validasi data yang dikirimkan
            $validated = $request->validate([
                'kelass' => 'required|string|max:255',
                'department_id' => 'required|exists:departments,id',
            ]);

            // Simpan data grade ke dalam tabel grades
            $grade = Grade::create([
                'kelass' => $validated['kelass'],
                'department_id' => $validated['department_id'],
            ]);

            // Redirect atau response sukses
            return redirect('/admin/grades')->with('success', 'Grade created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Ambil data grade berdasarkan ID
         $grade = Grade::findOrFail($id);

         // Ambil data departments untuk pilihan pada form
         $departments = Department::all();

         // Tampilkan halaman edit dengan data grade dan departments
         return view('admin.grade.edit', [
             'title' => 'Edit Grade Data',
             'grade' => $grade,
             'departments' => $departments
         ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // Validasi data yang dikirimkan
          $validated = $request->validate([
            'kelass' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        // Cari data grade berdasarkan ID
        $grade = Grade::findOrFail($id);

        // Update data grade
        $grade->update([
            'kelass' => $validated['kelass'],
            'department_id' => $validated['department_id'],
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect('/admin/grades')->with('success', 'Grade updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
