<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distribuidor extends Model
{
	
	// use SoftDeletes;

	protected $table = 'distribuidores';
    protected $fillable = [ 'nome', 'email', 'cpf', 'rg', 'area', 'imagem', 'usuario_id', 'condominio', 'unidade', 'bloco', 'cep', 'endereco', 'numero', 'bairro', 'cidade', 'estado', 'latitude', 'longitude', 'telefone','complemento','data_nascimento', 'deleted_at' ];

    // JOINS
    public function usuario(){
        return $this->hasOne( 'App\User', 'id', 'usuario_id' );
    }

}
