<?php

class UserController extends Controller
{
	public function actionLogin()
	{
		if (!Yii::app()->user->isGuest) {
      $this->redirect('/');
		} else {
			if (Yii::app()->request->isPostRequest) {
        $this->_handleLogin();
			} else {
				$this->render('login');
			}
		}
	}

  public function actionRegister()
	{
    if (!Yii::app()->user->isGuest) {
      $this->redirect('/');
    } else {
      if (Yii::app()->request->isPostRequest) {
        $this->_handleRegister();
      } else {
        $this->render('register');
      }
    }
	}

	public function actionLogout() {
		Yii::app()->user->logout();
		// redirect to login page
    $this->redirect(Yii::app()->user->loginUrl);
	}

	private function _handleLogin() {
    $username = Yii::app()->request->getPost('username');
    $password = Yii::app()->request->getPost('password');
    $identity=new UserIdentity($username,$password);

    if($identity->authenticate()) {
    	Yii::app()->user->login($identity);
    	$this->redirect(Yii::app()->homeUrl);
    } else {
    	$this->render('login', array('message' => 'Invalid username or password.'));
    }
	}

  private function _handleRegister() {
    $username = Yii::app()->request->getPost('username');
    $password = Yii::app()->request->getPost('password');
    $email = Yii::app()->request->getPost('email');
    $profile = Yii::app()->request->getPost('profile');

    $user = User::model()->find('LOWER(username)=?',array(strtolower($username)));
    
    if (!$user) {
      $user = new User();
      $user->username = $username;
      $user->password = $user->hashPassword($password);
      $user->email = $email;
      $user->profile = $profile;
      //All registered users are normal users.
      $user->role = 2;
      $user->save();
      $identity = new UserIdentity($username, $password);
      //login user
      if($identity->authenticate()) {
        Yii::app()->user->login($identity);
        $this->redirect(Yii::app()->homeUrl);
      }
    } else {
      $this->render('register', array('message' => 'User already exists.'));
    }
  }
}