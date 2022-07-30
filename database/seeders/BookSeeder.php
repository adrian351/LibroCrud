<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            [
                'title'         => 'Pedro Páramo',
                'description'   => 'La historia narra el viaje que emprende Juan Preciado al pueblo de Comala para buscar y enfrentar a su padre, Pedro Páramo.',
                'author'        => 'Juan Rulfo',
                'literary_engre'    =>'Novela'
            ]  
        );

        DB::table('books')->insert(
            [
                'title'         => 'El laberinto de la soledad',
                'description'   => ' En estos textos, el autor busca dibujar la esencia del mexicano, como individuo y como parte de una sociedad compleja',
                'author'        => 'Octavio Paz',
                'literary_engre'    =>'Ensayo'
            ]  
        );

        DB::table('books')->insert(
            [
                'title'         => 'Confabulario',
                'description'   => 'El autor nos entrega una serie de relatos cortos llenos de sátira e ironía, inspirados en situaciones cotidianas absurdas que nos hacen reflexionar',
                'author'        => 'Juan José Arreola',
                'literary_engre'    =>'Ficción'
            ]
        );
        DB::table('books')->insert(
            [
                'title'         => 'Aura',
                'description'   => 'Nos cuenta la manera en que un joven historiador llega a una antigua casa en el centro de la capital para reescribir las memorias de un coronel francés que luchó en México.',
                'author'        => 'Carlos Fuentes',
                'literary_engre'    =>'Novela'
            ] 
        );

        DB::table('books')->insert(
            [
                'title'         => 'Como agua para chocolate',
                'description'   => 'En sus páginas, destaca la cocina mexicana como un mecanismo para reflejar las emociones y sentimientos de los protagonistas.',
                'author'        => 'Laura Esquivel',
                'literary_engre'    =>'Novela'
            ] 
        );
    }
}
