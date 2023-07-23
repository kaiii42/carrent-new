<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = "tbl_transaksi";
    protected $primaryKey = "id_transaksi";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_transaksi', 'id_service', 'id_user', 'tgl_transaksi', 'status', 'alamat', 'delivery', 'catatan', 'bukti_bayar'];

    public function AdminOrder()
	{
	    $query = $this->db->query("SELECT * FROM tbl_transaksi JOIN tbl_service ON tbl_transaksi.id_service = tbl_service.id_service JOIN tbl_user ON tbl_transaksi.id_user = tbl_user.id_user WHERE tbl_transaksi.status = 'Pending' ORDER BY tbl_transaksi.tgl_transaksi ASC");
	    return $query->getResult();
	}
}