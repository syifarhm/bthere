<?php
class Front extends CI_Controller{
    public function index()
    {
        $this->load->model('btmodel');
        $data = $this->btmodel->Get('relawan');
        //memanggil $data =
        $data = array('data'=>$data);
        $this->load->view('index');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function daftarRelawan()
    {
        $this->load->model('btmodel');
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        //echo $data untuk mencetak string
        //var_dump($data); untuk mencetak array
        //untuk mengecek
        $query = $this->btmodel->Insert('relawan', $data);

        if($query){
            echo "<script>alert('Berhasil Bergabung menjadi relawan!')</script>";
            $this->index();
        } else {
            echo "<script>alert('Gagal bergabung!')</script>";
            $this->index();
        }
    }


    public function editRelawan($id_relawan)
    {
        $this->load->model('btmodel');
        //SELECT id_relawan FROM relawan WHERE id_relawan = id_relawan
        $relawan = $this->btmodel->GetWhere('relawan', array('id_relawan' => $id_relawan));
        $data = array(
            'id_relawan' => $id_relawan,
            //ambil dari query, relawan indeks ke 0 dgn kolom username 
            //memasukkan ke dlm array =>, function ->
            'username' => $relawan[0]['username'],
            'email' => $relawan[0]['email'],
            'password' => $relawan[0]['password']

        );
        $this->load->view('form_edit_relawan', $data);
    }

    public function proses_edit_relawan($id_relawan)
    {
        $this->load->model('btmodel');
        if(empty($this->input->post('password'))){
            $password = $this->input->post('passwordSebelum');
        } else {
            $password = md5($this->input->post('password'));
        }
        $data = array(
            'username' =>$this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $password
        );

        $where = array(
            'id_relawan' => $id_relawan
        );
        //var_dump($data);
        $query = $this->btmodel->update('relawan', $data, $where);
        if($query){
            echo "<script>alert('Edit Data Berhasil ')</script>";
            $this->index();
        } else {
            echo "<script>alert('Edit Relawan Gagal')</script>";
            $this->index();
        }
    }


    public function hapusRelawan ($id_relawan)
    {
        $this->load->model('btmodel');
        $id_relawan = array(
            'id_relawan' => $id_relawan
        );
        $query = $this->btmodel->Delete('relawan', $id_relawan);
        if($query){
            echo "<script>alert('Hapus Data Berhasil ')</script>";
            $this->index();
        } else {
            echo "<script>alert('Hapus Relawan Gagal')</script>";
            $this->index();
        }
    }


    public function login_relawan()
    {
        $this->load->model('btmodel');
        $where = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        $cek = $this->btmodel->GetWhere('relawan', $where);
        $count_cek = count($cek);
        //untuk mengecek apakah ada 
        if($count_cek > 0 ){
            $data_session = array(
                'id_relawan' => $cek[0]['id_relawan'],
                'username' => $cek[0]['username'],
                'poto'=> $cek[0]['poto']
            );
            $this->session->set_userdata($data_session);
            echo "<script>alert('Login Relawan Berhasil')</script>";
            //buat controller baru : DashRelawan
            redirect(base_url("index.php/dashRelawan"));
        } else {
            echo "<script>alert('Login Relawan Gagal')</script>";
            $this->index();
        }
    }
}

?>

