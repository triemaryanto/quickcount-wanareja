<?php

namespace App\Livewire\Admin\Pages;

use App\Models\ComRegion;
use Livewire\Component;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class User extends Component
{
    public $idNya, $name, $email, $password, $password_confirmation, $role_user, $wa, $listKec, $kecamatan;
    public $isEdit = false;

    protected $listeners = ['edit', 'delete'];

    protected $rules = [
        'name' => 'required|max:255',
        'wa' => 'required|min:9',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password|min:8',
        'role_user' => 'required',
    ];

    public function add()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function cancel()
    {
        $this->isEdit = !$this->isEdit;
        $this->idNya = '';
        $this->name = '';
        $this->email = '';
        $this->wa = '';
        $this->role_user = '';
    }

    public function edit($id)
    {
        $this->isEdit = true;
        $data = ModelsUser::find($id);
        $this->idNya = $data->id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->wa = $data->wa;
        $this->kecamatan = $data->region_cd;
        $this->role_user = $data->getRoleNames();
    }
    public function save()
    {
        if ($this->idNya) {
            $this->update();
        } else {
            $this->validate($this->rules);
            ModelsUser::create([
                'name' => $this->name,
                'email' => $this->email,
                'wa_verified_at' => now(),
                'email_verified_at' => now(),
                'wa' => $this->wa,
                'password' => Hash::make($this->password),
                'region_cd' => $this->kecamatan,
            ])->assignRole($this->role_user);
            $this->dispatchBrowserEvent('Success');
            $this->emit('refreshDatatable');
            $this->cancel();
        }
    }
    public function update()
    {
        $valid = [
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
        $message = [
            'password.confirmed' => 'Password Tidak Sama.'
        ];
        $this->validate($valid, $message);
        $dataUser = ModelsUser::find($this->idNya);
        $dataUser->name = $this->name;
        $dataUser->email = $this->email;
        $dataUser->syncRoles($this->role_user);
        if ($this->password) {
            $dataUser->password = Hash::make($this->password);
        }
        $dataUser->region_cd = $this->kecamatan;
        $dataUser->status = false;
        $dataUser->save();
        $this->dispatchBrowserEvent('Update');
        $this->emit('refreshDatatable');
        $this->cancel();
    }

    public function delete($id)
    {
        $user = ModelsUser::find($id);
        $user->delete();
        $this->dispatchBrowserEvent('Delete');
        $this->emit('refreshDatatable');
    }
    public function mount()
    {
        $this->listKec = ComRegion::where('region_root', '3301020')->get();
    }
    public function render()
    {
        return view('livewire.admin.pages.user');
    }
}
