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
		$this->render('register');
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
    	$this->redirect('/');
    } else {
    	$this->render('login', array('message' => 'Invalid username or password.'));
    }
	}
}