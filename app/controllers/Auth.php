<?php

class Auth extends Controller
{
    public function sessionCheck()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/admin/index');
        }
    }

    public function index()
    {
        $this->sessionCheck();
        $this->view('auth/login');
    }

    public function login()
    {
        $this->sessionCheck();

        if (isset($_POST['submit'])) {

            $data = [
                'user' => htmlentities($_POST['username']),
                'pass' => htmlentities($_POST['password'])
            ];

            $query = $this->dbh->prepare("SELECT * FROM admin WHERE username=:user OR id=:id");
            $query->execute([
                'user' => $data['user'],
                'id' => $data['user']
            ]);
            if ($query->rowCount() > 0) {

                $user_data = $query->fetch(PDO::FETCH_ASSOC);
                if (md5($data['pass']) === $user_data['password']) {
                    $_SESSION['auth'] = [
                        'token' => $this->generateToken(),
                        'id' => $user_data['id'],
                        'nama' => $user_data['nama']
                    ];
                    header('Location: ' . BASEURL . '/admin/index');
                    exit();
                } else {
                    $_SESSION['error'] = "Username / Password Salah!";
                    header('Location: ' . BASEURL . '/auth');
                    exit();
                }
            } else {
                $_SESSION['error'] = "Username / Password Salah!";
                header('Location: ' . BASEURL . '/auth');
                exit();
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        session_destroy();
        $this->dbh = null;
        header('Location: ' . BASEURL . '/auth');
        exit();
    }
}
