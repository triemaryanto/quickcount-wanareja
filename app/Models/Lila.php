<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Lila extends Model implements Auditable
{
    use HasFactory;
    use AuditableTrait;

    protected $guarded = [];

    public function Desa()
    {
        return $this->hasOne(ComRegion::class,  'region_cd', 'desa');
    }

    public function Kecamatan()
    {
        return $this->hasOne(ComRegion::class,  'region_cd', 'kecamatan');
    }

    public function Sekolah()
    {
        return $this->belongsTo(Sekolah::class,  'sekolah_id');
    }

    public function Usia_tp()
    {
        return $this->belongsTo(ComCode::class,  'usia_tp', 'code_cd');
    }

    public function Kategori()
    {
        return $this->belongsTo(ComCode::class,  'kategori_tp', 'code_cd');
    }
}
