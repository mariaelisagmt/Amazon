<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedor')->insert([
            [
                'nome'=>'Amanda e Isadora Telecom Ltda',
                'endereco'=>'Rua Jorge Dias Carneiro',
                'num'=> 658,
                'bairro'=>'Guaratinguetá',
                'cep'=>'69317-232',
                'contato'=>'financeiro@amandaeisadoratelecomltda.com.br',
                'cnpj'=>'37359892000121',
                'insc'=>'611.294.070.767',
                'tel'=>'(61) 3518-5175'
            ],
            [
                'nome'=>'Marcos e Anderson Ferragens Ltda',
                'endereco'=>'Rua Maria Antonieta de Barros Bindão',
                'num'=>438,
                'bairro'=>'Jardim do Vale',
                'cep'=>'12518-500',
                'contato'=>'fabricacao@marcoseandersonferragensltda.com.br',
                'cnpj'=>'003588800172',
                'insc'=>'353.503.871.752',
                'tel'=>'(88)9745-6334'
            ]
        ]);
    }
}
