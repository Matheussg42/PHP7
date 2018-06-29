<?php
session_start();

//Depois de verificar Login e senha, reinicie o ID da sessão;
session_destroy();

session_start();

session_regenerate_id();

echo session_id();