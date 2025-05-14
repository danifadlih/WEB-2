<?php

namespace models;

use config\Connection;
use PDO;


class Pegawai
{

    public static function all()
    {
        $pdo = Connection::connect();
        $stmt = $pdo->query("SELECT * FROM pegawai");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("SELECT * FROM pegawai WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("INSERT INTO pegawai (nip, nama, jenis_kelamin, jabatan) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['nip'], $data['nama'], $data['jenis_kelamin'], $data['jabatan']]);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::connect();
        $stmt = $pdo->prepare("UPDATE pegawai SET nip = ?, nama = ?, jenis_kelamin = ?, jabatan = ? WHERE id = ?");
        return $stmt->execute([$data['nip'], $data['nama'], $data['jenis_kelamin'], $data['jabatan'], $id]);
    }

    public static function delete($id)
    {
        $db = Connection::connect();

        // Cek apakah pegawai ini masih digunakan di tabel anggota
        $stmt = $db->prepare("SELECT COUNT(*) FROM anggota WHERE pegawai_id = ?");
        $stmt->execute([$id]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            // Jangan hapus, kembalikan false atau tampilkan pesan
            return false;
        }

        // Jika tidak digunakan, baru boleh dihapus
        $stmt = $db->prepare("DELETE FROM pegawai WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
