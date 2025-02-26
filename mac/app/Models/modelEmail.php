<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class modelEmail extends Model
{
    use HasFactory;//Fatoração -  Dividir
    protected $table = 'mail';//Nome da tabela do BD
    
}//Coloco apenas a tabela do BD
 