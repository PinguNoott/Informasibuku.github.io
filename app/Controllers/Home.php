<?php

namespace App\Controllers;

use App\Models\M_pet;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('level')>0) {
         echo view('header');
        echo view('menu');
        echo view('index');
        echo view('footer');
    }else{
            return redirect()->to('home/login');
        } 
    }

   public function dashboard()
{
   if (session()->get('level') > 0) {
        $model = new M_pet();
        // Fetch image data from the 'gambar' table
        $data['bukuData'] = $model->tampil('buku');

        // Render the views
        echo view('header');
        echo view('menu2');
        echo view('dashboard', $data); // View to display the images
        echo view('footer');

}else{
            return redirect()->to('home/login');
        } 
    } 
     public function login()
    {
        echo view('login');
    }

   public function aksilogin()
{
    $model = new M_pet();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $model->where(['username' => $username, 'password' => $password])->first();

    if ($user) {
        $session = session();
        $session->set([
            'id_user' => $user['id_user'],
            'username' => $user['username'],
            'level' => $user['level'], 
            'logged_in' => true
        ]);

        return redirect()->to('home/dashboard');
    } else {
        return redirect()->to('home/login')->with('error', 'Username atau Password salah');
    }
}

     public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login');
    }
        public function signup(){

    echo view('signup');
}

public function aksi_signup()
{
    $username = $this->request->getPost('username');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password'); 
    $level = $this->request->getPost('level'); 
    // Validasi input
    if (empty($username) || empty($password) || empty($email)) {
        return redirect()->to('home/signup')->with('error', 'All fields are required.');
    }

    // Pastikan password hanya berupa angka (integer)
    if (!ctype_digit($password)) {
        return redirect()->to('home/signup')->with('error', 'Password must be a number.');
    }

    $model = new M_pet();

    // Cek apakah username atau email sudah ada
    $existingUser = $model->where('username', $username)
                          ->orWhere('email', $email)
                          ->first();

    if ($existingUser) {
        return redirect()->to('home/signup')->with('error', 'Username or email already exists.');
    }

    // Data baru untuk disimpan ke database
    $newUser = [
        "username" => $username,
        "password" => (int)$password, // Simpan password sebagai angka
        "email" => $email,
        "level" => $level 
    ];

    // Simpan ke database
    if ($model->insert($newUser)) {
        return redirect()->to('home/login')->with('success', 'Account successfully created. Please login.');
    } else {
        return redirect()->to('home/signup')->with('error', 'Failed to create account. Please try again.');
    }
}

public function user()
{
    if (session()->get('level')>0) {
    $model = new M_pet();
    $data['desta'] = $model->tampil('user');

    echo view('header');
    echo view('menu2');
    echo view('user', $data);
    echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function tambahuser()
{
    if (session()->get('level')>0) {
    echo view('header');
    echo view('tambahuser');
    echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function edituser($id)
{
    if (session()->get('level')>0) {
    $model = new M_pet();
    $where = array('id_user' => $id);
    $data['a'] = $model->getwhere('user', $where);

    echo view('header');
    echo view('edituser', $data);
    echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function hapususer($id)
{
    if (session()->get('level')>0) {
    $model = new M_pet();
    $where = array('id_user' => $id);
    $model->hapus('user', $where);
    return redirect()->to('home/user');
}else{
            return redirect()->to('home/login');
        } 
    }

public function aksi_t_user()
{

        $data = array(
            'username' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('pass'),
            'level' => $this->request->getPost('level')
        );

        $model = new M_pet();
    $model->tambah('user', $data);  
    return redirect()->to('home/user');
}

public function aksi_e_user()
{
    $model = new M_pet();
    $a = $this->request->getPost('nama'); 
    $b = $this->request->getPost('email');
    $c = $this->request->getPost('pass');
    $d = $this->request->getPost('level');
    $id = $this->request->getPost('id');
    
    $data = array(
        'username' => $a,
        'email' => $b,
        'password' => $c,
        'level' => $d
       
    );

    $where = array('id_user' => $id);
    $model->edit('user', $data, $where);
    return redirect()->to('home/user');
}

    public function profil(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('profil');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function aksi_e_profil()
{
    $model = new M_pet();

    // Get the form data
    $id = $this->request->getPost('id');
    $username = $this->request->getPost('nama');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('pass');
    $foto = $this->request->getFile('foto');  // Get the uploaded file

    // Initialize data to update
    $data = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
    ];

    // If a new photo is uploaded, move the file and update the data
    if ($foto && $foto->isValid() && !$foto->hasMoved()) {
        // Define the upload path (for example, 'uploads/users/')
        $uploadPath = WRITEPATH . 'uploads/users/';

        // Move the uploaded file to the desired location
        $newFileName = $foto->getRandomName();  // Generate a random name to avoid file name conflicts
        $foto->move($uploadPath, $newFileName);

        // Update the data with the new photo path
        $data['foto'] = $newFileName;  // Store the file name (not the full path) in the database
    }

    // Update the user in the database
    $model->update($id, $data);

    // Set success message and redirect
    session()->setFlashdata('success', 'Profile updated successfully!');
    return redirect()->to('home/profil');
}


 public function anjing(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('anjing');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function kucing(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('kucing');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function hamster(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('hamster');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function kelinci(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('kelinci');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function burung(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('burung');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function ikan(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('ikan');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }

public function gecko(){
     if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('gecko');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }
public function kurakura(){
    if (session()->get('level')>0) {
        echo view('header');
        echo view('menu2');
        echo view('kurakura');
        echo view('footer');
}else{
            return redirect()->to('home/login');
        } 
    }
    public function buku()
{
    // Check if the user has permission
    if (session()->get('level') > 0) {
        $model = new M_pet();
        // Fetch image data from the 'gambar' table
        $data['bukuData'] = $model->tampil('buku');

        // Render the views
        echo view('header');
        echo view('menu2');
        echo view('buku', $data); // View to display the images
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}

public function tambahbuku()
{
    // Check if the user has permission
    if (session()->get('level') > 0) {
        // Render views for adding an image
        echo view('header');
        echo view('tambahbuku'); // View to add a new image
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}

public function editbuku($id)
{
    // Check if the user has permission
    if (session()->get('level') > 0) {
        $model = new M_pet();
        // Fetch image data by ID
        $where = array('id_buku' => $id);
        $data['bukuData'] = $model->getwhere('buku', $where);

        // Render the views for editing an image
        echo view('header');
        echo view('editbuku', $data); // View to edit image data
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}

public function hapusbuku($id)
{
    // Check if the user has permission
    if (session()->get('level') > 0) {
        $model = new M_pet();
        // Define the condition to delete the image by ID
        $where = array('id_buku' => $id);
        $model->hapus('buku', $where); // Delete the image from the 'gambar' table

        // Redirect back to the gambar page
        return redirect()->to('home/buku');
    } else {
        return redirect()->to('home/login');
    }
}

public function aksi_t_buku()
{
    // Retrieve the form data
    $judul = $this->request->getPost('judul');
    $penulis = $this->request->getPost('penulis');
    $tahun_terbit = $this->request->getPost('tahun_terbit');
    $kategori = $this->request->getPost('kategori');
    $deskripsi = $this->request->getPost('deskripsi');

    // Handle the uploaded file (if any)
    $foto = null;
    if ($this->request->getFile('foto')->isValid()) {
        $fotoFile = $this->request->getFile('foto');
        $foto = $fotoFile->getName();
        $fotoFile->move(WRITEPATH . 'images'); // Save to the 'images' folder
    }

    // Prepare data array
    $data = array(
        'judul' => $judul,
        'penulis' => $penulis,
        'tahun_terbit' => $tahun_terbit,
        'kategori' => $kategori,
        'deskripsi' => $deskripsi,
        'foto' => $foto
    );

    // Insert the data into the database
    $model = new M_pet(); // Assuming you have a model for 'buku'
    $model->tambah('buku', $data);  

    // Redirect to the book list page
    return redirect()->to('home/buku');
}
public function aksi_e_buku()
{
    $id = $this->request->getPost('id');
    $judul = $this->request->getPost('judul');
    $penulis = $this->request->getPost('penulis');
    $tahun_terbit = $this->request->getPost('tahun_terbit');
    $kategori = $this->request->getPost('kategori');
    $deskripsi = $this->request->getPost('deskripsi');

    // Get the old book data from the database
    $model = new M_pet(); // Assuming you have a model for 'buku'
    $bukuLama = $model->find($id); // Fetch current data from 'buku' table

    // Check if there is a new file uploaded
    $file = $this->request->getFile('foto');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        // If a new file is uploaded, replace the old image
        $newFileName = $file->getRandomName();
        $file->move('images', $newFileName);

        // If the old file exists, delete it from the 'images' directory
        if ($bukuLama['foto'] && file_exists('images/' . $bukuLama['foto'])) {
            unlink('images/' . $bukuLama['foto']);
        }

        // Use the new file name for the 'foto' field
        $foto = $newFileName;
    } else {
        // If no new file is uploaded, retain the old image
        $foto = $bukuLama['foto'];
    }

    // Prepare the data to update in the 'buku' table
    $data = [
        'judul' => $judul,
        'penulis' => $penulis,
        'tahun_terbit' => $tahun_terbit,
        'kategori' => $kategori,
        'deskripsi' => $deskripsi,
        'foto' => $foto, // Update the 'foto' field with the new or old file name
    ];

    // Update the record in the 'buku' table with the new data
    $model->update($id, $data);

    return redirect()->to(base_url('home/buku'))->with('success', 'Data buku berhasil diperbarui!');
}

public function detail($id)
{
    // Membuat objek model M_pet
    $model = new M_pet();

    // Mendapatkan data gambar berdasarkan ID
    $data['bukuData'] = $model->getById($id);  // Pastikan menggunakan objek model yang benar

    // Menampilkan halaman detail dengan data gambar
    echo view('header');
    echo view('menu2');
    echo view('detail', $data); // Menampilkan view detail dengan data gambar
    echo view('footer');
}



}
