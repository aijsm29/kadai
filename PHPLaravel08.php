4. artisanを使って、Admin/ProfileControllerを作成

 php artisan make:controller Admin/ProfileController


5.Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //add, create, edit, updateを作成。
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.plofile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
