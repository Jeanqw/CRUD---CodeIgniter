<?php 
namespace App\Controllers;
use App\Models\Users_table;
use App\Config\Validation;

class ActionsCRUD extends BaseController{

    public function index(){
    return view('cadastroUser');
}

    public function cadastrar(){
        $user = new Users_table();
        $insert = $this->request->getPost();

        $data = [
            'user_name' => $insert['user_name'],
            'email' => $insert['email'],
            'password' => password_hash($insert['password'], PASSWORD_DEFAULT),
        ];

        $inserted = $user->insert($data);


        return redirect()->route('cadastro')->with('errors', $user->errors());

    }

    public function select(){
            $user = new Users_table();
            $select = $user->findAll();
    
            return view('editUsers', ['select' => $select]);
    }
    

    public function update($id){
        $user = new Users_table();
        $update = $this->request->getPost();
        $data = [
            'user_name' => $update['user_name'],
            'email' => $update['email']
        ];
        $updated = $user->where('id', $id)->set($data)->update();
        return redirect()->route('users');
    }

    public function delete($id){
   
        $user = new Users_table();
        $deleted = $user->where('id', $id)->delete();
        
        return redirect()->route('users');
    }



}
?>