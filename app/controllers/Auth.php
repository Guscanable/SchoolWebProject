<?php

class Auth extends Controller
{
    public function sessionCheck()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/admin/admin');
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
                'email' => htmlentities($_POST['email']),
                'pass' => htmlentities($_POST['password'])
            ];

            if (preg_match('/[\'^£$%&*()}";:!`{#~?><>,|=_+¬-]/', $data['email'])) {
                $_SESSION['error'] = "Email / Password tidak valid!";
                header('Location: ' . BASEURL . '/auth');
                exit();
            } else {
                $query = $this->dbh->prepare("SELECT * FROM admin WHERE email=:em OR id=:id");
                $query->execute([
                    'em' => $data['email'],
                    'id' => $data['id']
                ]);
                if ($query->rowCount() > 0) {
                    $user_data = $query->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($data['pass'], $user_data['password'])) {
                        $_SESSION['auth'] = [
                            'token' => $this->generateToken(),
                            'id' => $user_data['id'],
                            'name' => $user_data['name']
                        ];
                        header('Location: ' . BASEURL . '/admin');
                        exit();
                    } else {
                        $_SESSION['error'] = "Email / Password Salah!";
                        header('Location: ' . BASEURL . '/auth');
                        exit();
                    }
                } else {
                    $_SESSION['error'] = "Email / Password Salah!";
                    header('Location: ' . BASEURL . '/auth');
                    exit();
                }
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
