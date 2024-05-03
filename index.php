<?php
// Telegram bot token-5909661258
define('BOT_TOKEN', '6017549203:AAHWxJAbW2uMN51-ub8665FhE9gFvQ2vkZw');

// Telegram chat ID
define('CHAT_ID', '@eeeeetttuuu');

// FTP server credentials
$ftp_server = 'ftpupload.net';
$ftp_username = 'epiz_33872455';
$ftp_password = '0CVsPpPtF6kJ';
$ftp_port = 21;

// Remote file to download from FTP server
$remote_file = '/e/my_backup.backup';

// Connect to FTP server
$conn_id = ftp_connect($ftp_server, $ftp_port);
$login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

// Get file size
$file_size = ftp_size($conn_id, $remote_file);

// Telegram message caption
$caption = "Backup file size: " . $file_size . " bytes\n";" >