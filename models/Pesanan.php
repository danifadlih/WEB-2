<?php

namespace models;

use config\Connection;
use PDO;

class Pesanan
{
    public static function all()
    {
        $pdo = Connection::connect();
        $stmt = $pdo->query("
            SELECT p.*, a.id AS anggota_id, pg.nama AS nama_anggota
            FROM pesanan p
            JOIN anggota a ON p.anggota_id = a.id
            JOIN pegawai pg ON a.pegawai_id = pg.id
            ORDER BY p.tanggal DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("SELECT * FROM pesanan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("INSERT INTO pesanan (tanggal, diskon, status_bayar, anggota_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['tanggal'],
            $data['diskon'],
            isset($data['status_bayar']) ? 1 : 0,
            $data['anggota_id']
        ]);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("UPDATE pesanan SET tanggal = ?, diskon = ?, status_bayar = ?, anggota_id = ? WHERE id = ?");
        return $stmt->execute([
            $data['tanggal'],
            $data['diskon'],
            isset($data['status_bayar']) ? 1 : 0,
            $data['anggota_id'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("DELETE FROM pesanan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
