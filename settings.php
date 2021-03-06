<?php
    // Настройки базы данных:
    $dbHost     = 'localhost';
    $dbName     = 'h7936_db';
    $dbUser     = 'h7936_dbuser';
    $dbPassword = 'ryA60BPH';
    
    // Названия таблиц с данными игроков:
    $playersTableName = 'players';
    $tokensTableName  = 'tokens';
    $hwidsTableName   = 'hwids';

    // Имя колонки с логинами игроков в таблице $playersTableName:
    $playersColumnName = 'login'; 

    // Настройка файловой иерархии:
    $workingFolder  = 'http://myserver.com/fmx/';
    $skinsFolder    = 'Skins';
    $cloaksFolder   = 'Cloaks';
    $clientsFolder  = 'Clients';
    $javaFolder     = 'Java';
    $previewsFolder = 'Previews';
    
    $clientsSettingsFilePath = 'servers.json'; // Путь к файлу с настройками клиентов относительно auth.php
    
    // Система скинов:
    $cloaksPostfix = '_cloak'; // Постфикс для плащей в 1.7-1.8: имя плаща = {$username + $cloaksPostfix}.png
    $defSkinName   = 'Default.png';       // Название стандартного скина в папке $skinsFolder
    $defCloakName  = 'Default_cloak.png'; // Название стандартного плаща в папке $cloaksFolder
    
    // Настройки лаунчера:
    $launcherMinVersion = 3;
    $launcherLink32 = 'http://myserver.com/fmx/Launcher32.exe';
    $launcherLink64 = 'http://myserver.com/fmx/Launcher64.exe';
    
    // Ключ шифрования (должен совпадать с ключом в лаунчере):
    $encryptionKey = 'FMXL3';
?>