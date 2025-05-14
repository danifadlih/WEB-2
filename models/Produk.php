<?php

namespace models;

use config\Connection;
use PDO;

class Produk
{
    public static function all()
    {
        $pdo = Connection::connect();
        $stmt = $pdo->query("
            SELECT produk.*, jenis_produk.nama AS jenis
            FROM produk
            JOIN jenis_produk ON produk.jenis_produk_id = jenis_produk.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("SELECT * FROM produk WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("
            INSERT INTO produk (kode, nama, deskripsi, harga, stok, jenis_produk_id)
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        return $stmt->execute([
            $data['kode'],
            $data['nama'],
            $data['deskripsi'],
            $data['harga'],
            $data['stok'],
            $data['jenis_produk_id']
        ]);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("
            UPDATE produk SET kode = ?, nama = ?, deskripsi = ?, harga = ?, stok = ?, jenis_produk_id = ?
            WHERE id = ?
        ");
        return $stmt->execute([
            $data['kode'],
            $data['nama'],
            $data['deskripsi'],
            $data['harga'],
            $data['stok'],
            $data['jenis_produk_id'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("DELETE FROM produk WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
