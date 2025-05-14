<?php

namespace models;

use config\Connection;
use PDO;

class Detail_pesanan
{
    public static function all($pesanan_id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("
            SELECT dp.*, p.nama, p.harga 
            FROM detail_pesanan dp
            JOIN produk p ON dp.produk_id = p.id
            WHERE dp.pesanan_id = ?
        ");
        $stmt->execute([$pesanan_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function store($pesanan_id, $produk_id, $jumlah)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("INSERT INTO detail_pesanan (produk_id, pesanan_id, jumlah) VALUES (?, ?, ?)");
        // Pastikan pesanan_id valid
        return $stmt->execute([$produk_id, $pesanan_id, $jumlah]);
    }

    public static function delete($pesanan_id, $produk_id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("DELETE FROM detail_pesanan WHERE pesanan_id = ? AND produk_id = ?");
        return $stmt->execute([$pesanan_id, $produk_id]);
    }
}
