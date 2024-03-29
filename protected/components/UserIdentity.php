<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $user_id;
	public function authenticate()
	{
	
		$user = Users::model()->findByAttributes(array('username'=>$this->username));
		 
		if($user === null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else if($user->password != md5 ($this->password)){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}else{
			$this->errorCode = self::ERROR_NONE;
			$this->setState('role',$user->user_type);
			$this->user_id = $user->user_id;
		}
		
		return !$this->errorCode;
	}

	public function getId(){
		return $this->user_id;
	}

}