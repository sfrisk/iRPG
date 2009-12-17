<?php session_start();
// File: logout.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16
	session_unset();
	header('Location: index.php');

?>