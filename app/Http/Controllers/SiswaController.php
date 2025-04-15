<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Htpp\Response;
use Illuminate\View\View;;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
        if (request('cari')) {
            $siswas =$this->search(request('cari'));
        }
        return view('admin.siswa.index', compact('siswas'));
    }
    public function create(): View
    {
        return view('admin.siswa.create');
    }
    
    public function store(Request $request): RedirectResponse
    {