<?php
// Recebe as notificações de alerta do webhook do Zabbix
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Envia as notificações de alerta para a página web
header('Content-Type: application/json');
echo json_encode($data);