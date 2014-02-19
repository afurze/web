<?php
	session_start();
	/** 
	* Check for active session 
	* Return true for existing
	* Return false for none
	**/
	function active_session() {
		if (session_status() === PHP_SESSION_ACTIVE) {
			return true;
		} else {
			return false;
		}
	}

	/**
	* Start new session and initialize variables
	**/
	function new_session($username, $isAdmin) {
		// check for existing session first
		if (active_session()) {
			session_destroy();
		}

		session_start();
		session_regenerate_id();
		$_SESSION['username'] = $username;
		$_SESSION['isAdmin'] = $isAdmin;
	}

	/**
	* Check for admin status
	* Return true if user is admin
	**/
	function isAdmin() {
		// check for active session
		if (!active_session()) return false;
		if ($_SESSION['isAdmin']) return true;
		else return false;
	}
?>