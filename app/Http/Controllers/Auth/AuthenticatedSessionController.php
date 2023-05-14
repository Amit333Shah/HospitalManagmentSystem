<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        if(Auth::user()->role_id=="2"){
            return redirect('doctorPanle');
        }
        elseif(Auth::user()->role_id=="3"){
            return redirect('patientForm');   
        }
        elseif(Auth::user()->role_id=="1"){
            return redirect('adminPanel'); 
        }
        // elseif(Auth::user()->role=="medicalStore"){
        //     return redirect('showMedicine'); 
        // }
        // elseif(Auth::user()->role=="receptionist"){
        //     return redirect('receptionPanel'); 
        // }
        else{

        return redirect('adminPanel');
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function destroyFoa(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('FoaLogin');
    }
}
