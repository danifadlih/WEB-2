<?php

namespace models;


use config\Connection;
use PDO;

class Kartu_diskon
{
    public static function all()
    {
        $pdo = Connection::connect();
        $stmt = $pdo->query("SELECT * FROM kartu_diskon");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("SELECT * FROM kartu_diskon WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("INSERT INTO kartu_diskon (nama, deskripsi, persen_diskon) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nama'], $data['deskripsi'], $data['persen_diskon']]);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("UPDATE kartu_diskon SET nama = ?, deskripsi = ?, persen_diskon = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['deskripsi'], $data['persen_diskon'], $id]);
    }

    public static function delete($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("DELETE FROM kartu_diskon WHERE id = 1,2,3,?");
        return $stmt->execute([$id]);
    }
}
