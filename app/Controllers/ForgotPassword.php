<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;

 
class ForgotPassword extends BaseController
{
    public function index()
    {
        $data['title'] = 'Forgot Password';
        echo view('Templates/Header', $data);
        echo view('ForgotPassword');
        echo view('Templates/Footer');
    }


    public function SendMail()
    {
        $model = new UserModel();
        $to = $this->request->getVar('email');
        $userdata = $model->where('email', $to)->first();
        if(!empty($userdata)){
            if($model->updatedAt($userdata['token'])){
                $messege = '
                <h3>You have requested to reset your password</h3>
                <br>
                Hi '. $userdata['name'] .'.
                <br><br>
                We cannot simply send you your old password. A unique link to reset your
                password has been generated for you. To reset your password, click the
                following button and follow the instructions with in 3mins.
                <br><br>
                <a href="http://localhost:8080/index.php/ForgotPassword/reset/'. $userdata['token'] .'" style="color:white; padding:3px; background: #4568DC; background: -webkit-linear-gradient(to right, #B06AB3, #4568DC); background: linear-gradient(to right, #B06AB3, #4568DC);">CLICK ME</a>';
    
                $email = \Config\Services::email(); 
                $email->setFrom('muzakkiahmad10071999@gmail.com', 'Muzakki Ahmad Al Farisi');
                $email->setTo($to);
                $email->setSubject("Password Reset Request");
                $email->setMessage($messege);
    
                if ($email->send()) {
                    return redirect()->back()->with('success', 'Request successful, please check your email and verify with in 3mins');
                } else {
                    return redirect()->back()->with('error', 'Something wrong');
                }
            }else{
                return redirect()->back()->with('error','Sorry! Unable to update. try again');
            }
 
        }else{
            return redirect()->back()->withInput()->with('error','Email not Found');
        }
    }

    public function Reset($token = null)
    {
        $data['title'] = 'Reset Password';
        helper(['form']);
        $model = new UserModel();
        if ($token){
            $userdata = $model->where('token', $token)->first();
            if (!empty($userdata)){
                if($this->checkExpiryDate($userdata['updated_at'])){
                    if($this->request->getMethod()=='post'){
                        $rules = [
                            'password'      => 'required|min_length[6]',
                            'confpassword'  => 'matches[password]'
                        ];
                        if($this->validate($rules)){
                            $password = password_hash($this->request->getVar('password'),PASSWORD_DEFAULT);
                            if($model->updatePassword($token,$password)){
                                return redirect()->to('/')->with('success','Password updated successfully! Login now');
                            }
                            else{
                                return redirect()->back()->with('error','Sorry! Unable to update Password. Try again');
                            }
                        }else{
                            return redirect()->back()->with('error','Password must min 6 character and match');
                        }
                    }
                }else{
                    return redirect()->back()->with('error','Reset password link was expired');
                }
                
            }else{
                return redirect()->back()->with('error','Sorry! Unauthourized access');
            }
        }else{
            
            return redirect()->back()->with('error','Sorry! token not found');
        }
        echo view('Templates/Header', $data);
        echo view('ResetPassword');
        echo view('Templates/Footer');
    }

    public function checkExpiryDate($time){
        $timeDiff = strtotime(date("Y-m-d h:i:s"))- strtotime($time);
        if($timeDiff < 180){
            return true;
        }
        else
        {
            return false;
        }
    }
}