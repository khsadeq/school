<?php

namespace App\Models;
// use App\Models\parents;
use App\Models\student;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nationality extends Model
{
    use HasFactory;

    // public function  parents(){
    //     return $this->hasMany(parents::class,foreignKey:'Id_sexuals');
    // }
    protected $table ='nationality';
    protected $fillable = [
        // 'id',
        'name'];
    public function  teacher(){
        return $this->hasMany(teacher::class,'nationality_id','id');
    }
public function  student(){
        return $this->hasMany(student::class,'nationality_id','id');
    }
    public function  pare(){
        return $this->hasMany(teacher::class,'nationality_id','id');
    }

}
