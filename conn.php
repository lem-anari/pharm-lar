<?php

    $dsn = 'pgsql:host=127.0.0.1; dbname=pharma';

    try{

        // if(\Auth::check()){
            $u = 'postgres';
            $pass = '123';
            // $username = session('username');
            // $ds, $u, $pass;
            
            // $rol = \Auth::user()->role_;
            // if($rol == 1){
            //     $u = 'admins';
            //     $pass = 'admin';
            //     $_SERVER['DB_USERNAME'] = 'admins';
            //     $_SERVER['DB_PASSWORD'] = 'admin';
            //     // $dbh = new PDO($dsn,$u,$pass);
            //     session(['role_panel' => $u]);
            // }elseif($rol == 2){
            //     $u = 'clients';
            //     $pass = '4';
            //     // $dbh = new PDO($dsn,$u,$pass);
            //     session(['role_panel' => $u]);
            // }elseif($rol == 3){
            //     $u = 'ourstaff';
            //     $pass = 'ffat2';
            //     // $dbh = new PDO($dsn,$u,$pass);
            //     session(['role_panel' => $u]);
            // }else{
            //     $u = 'clients';
            //     $pass = '2';
                
            //     // $result = $dbh->query("UPDATE users SET role_ = '2' WHERE n_of_service=1;");
            //     session(['role_panel' => 'clients']);
            // }

            // $dbh = new PDO($dsn,$u,$pass);
            $dbh = new PDO($dsn,$u,$pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
        // }
        // else{
        //     $user = 'guests';
        //     $password = '1';
        //     $dbh = new PDO($dsn,$user,$password);
        //     // $dbh = pg_connect("host=127.0.0.1 dbname=heliot user=guests password=1", PGSQL_CONNECT_FORCE_NEW);
        //     // dd($dbh);
        //     // dd(extension_loaded('pgsql') ? 'yes':'no');
        //     session(['role_panel' => 'guests']);
        // }
    }catch(PDOException $e){
       echo $e->getMessage();
    }
