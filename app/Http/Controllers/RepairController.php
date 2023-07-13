<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use App\Models\Pelanggan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRepairRequest;
use App\Http\Requests\UpdateRepairRequest;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $repair = Repair::join('pelanggan', 'repairs.pelanggan_id', '=', 'pelanggan.id')
            ->where('repairs.nomor_servis', 'LIKE', '%' . $request->search . '%')
            ->orWhere('pelanggan.nama_pelanggan', 'LIKE', '%' . $request->search. '%')
            ->paginate(10);
        } else {
            $repair = Repair::latest()->paginate(10);
        }

        $pelanggan = Pelanggan::latest()->get();

        return view('home.terima-servis', compact('repair','pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::latest()->get();
        
        return view ('home.input-servis', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRepairRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepairRequest $request)
    {
        $repair = new Repair($request->validated());
        $repair['nomor_servis']="1";
        $repair['status']="daftar";

        //prefix
        if($repair->jenis_gadget == 'iPhone') {
            $prefix = "SER01"; // Prefix yang diinginkan
        } if($repair->jenis_gadget == 'Android') {
            $prefix = "SER02";
        } if($repair->jenis_gadget == 'MacBook') {
            $prefix = "SER03";
        } if($repair->jenis_gadget == 'Laptop') {
            $prefix = "SER04";
        }
        $randomNumber = mt_rand(100000, 999999); // Menghasilkan angka acak
        $repair->nomor_servis = $prefix . $randomNumber;
        $repair->save();

        return redirect()->route('repairs.index')
            ->with('success', 'Berhasil menambah data servis');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepairRequest  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepairRequest $request, Repair $repair)
    {
        // cek status jika selesai maka tidak dapat diperbarui
        if ($repair->status == 'selesai') {
            return redirect()->back()->with('error', 'Tidak dapat memperbarui data yang sudah selesai perbaikan.');
        }

        $repair->update($request->validated());

        return redirect()->route('repairs.index')
            ->with('success', 'berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();

        return redirect()->route('repairs.index')
        ->with('success', 'berhasil menghapus data!');
    }

    public function getStatus(Request $request)
    {
        $keyword = $request->search;
        $repair = Repair::where('nomor_servis', '=', $keyword)
            ->latest()->get();
        
        if($repair->isEmpty()) {
            $errorMessage = 'Data tidak ditemukan';
            return view('landing.check-status', compact('errorMessage', 'repair'));
        } else {
            return view('landing.status-gadget', compact('repair'));
        }
    }

    public function addComment(Request $request)
    {
        // Assuming 'id' is the primary key of the repair record you want to update
        $repair = Repair::findOrFail($request->input('id'));

        $repair->comments = $request->input('comments');
        $repair->save();
        
        return redirect()->back()->with('success', 'Terima kasih atas kritik dan saran anda!');
    }

    public function showComment(Request $request)
    {
        if($request->has('search')) {
            $repair = Repair::where('comments','like', '%' . $request->search . '%')
            ->orWhere('nomor_servis', 'like', '%' . $request->search . '%')
            ->paginate(10);
        } else {
            $repair = Repair::latest()->paginate(10);
        }
        
        return view ('home.komentar', compact('repair'));
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $repair = Repair::where('nomor_servis', 'like', '%' . $keyword . '%')
    //         ->orWhere('nama_pelanggan', 'like', '%' . $keyword . '%')
    //         ->orWhere('jenis_gadget', 'like', '%' . $keyword . '%')
    //         ->orWhere('tipe_gadget', 'like', '%' . $keyword . '%')
    //         ->paginate(20);

    //         return view('home.terima-servis', [
    //             'repair' => $repair,
    //             'keyword' => $keyword,
    //         ]);
    // }
    
}
