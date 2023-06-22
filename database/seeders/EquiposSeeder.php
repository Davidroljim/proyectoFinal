<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Equipo::create(['nombre' =>'dB Technologies Opera 12', 'caracteristicas' => 'Amplificador digital de 600W 1200W / Pico, 600W / RMS SPL máximo de 129dB', 'precio' => '235', 'fotos' => 'https://sonicolor.es/5917-medium_default/db-technologies-opera-10-altavoz-amplificado.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'HK AUDIO SONAR 112 Xi', 'caracteristicas' => 'Caja acústica activa con woofer de 12 pulgadas y controlador HF de alto rendimineto de 1 pulgada, dispone de DSP de 24 bits con pantalla a color en su parte trasera para un cómodo control del menú en el cual se puede seleccionar 3 modos de sonido (Live, DJ, Monitor) de ecualización.', 'precio' => '80', 'fotos' => 'https://sonicolor.es/43607-medium_default/hk-audio-sonar-112-xi.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'Micrófono Inalámbrico SHURE BLX288/PG58 Dual', 'caracteristicas' => 'Con 2 Micrófonos de Mano PG58, 2 clips para micrófonos, fuente de alimentación, 4 baterías AA, y guía de usuario. El Sistema Inalámbrico de Doble Canal con Dos Micrófonos de Mano BLX288/PG58 es parte de los sistemas inalámbricos BLX®.', 'precio' => '50', 'fotos' => 'https://sonicolor.es/8861-large_default/shure-blx288_pg58-microfono-inalambrico-de-mano.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'Maquina Humo', 'caracteristicas' => 'Capacidad de calentamiento de 1300W, Incluye unidad de control remoto por cable y control remoto inalámbrico', 'precio' => '35', 'fotos' => 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/403498/11733600_800.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'Tarimas', 'caracteristicas' => 'Tarima para teatro, conciertos, espectaculos, etc... de fácil utilización.', 'precio' => '100', 'fotos' => 'https://www.hermex.es/media/images/articulos/large/1_4892.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'BEHRINGER MOVING HEAD MH363', 'caracteristicas' => 'La cabeza móvil MH363 de Behringer es un modelo formado por 36 leds de 3W de potencia en colores RGBW con una potencia total de 108W procedente de sus 12 leds rojos, verdes y azules.', 'precio' => '45', 'fotos' => 'https://sonicolor.es/17925-large_default/behringer-moving-head-mh363.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'WORK Pro LS-1 Mesa digital de iluminación', 'caracteristicas' => 'La WORK Pro LS-1 es una mesa digital de control de iluminación multiplataforma con hasta 8 universos DMX, con una superficie de control intuitiva y ergonómica. ', 'precio' => '120', 'fotos' => 'https://sonicolor.es/8232-large_default/work-pro-ls-1.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'BEHRINGER DIAMOND DOME DD610', 'caracteristicas' => 'El nuevo efecto LED de Behringer, DD610, será un top ventas para pequeños eventos y fiestas caseras sin duda.', 'precio' => '20', 'fotos' => 'https://sonicolor.es/17924-large_default/behringer-diamond-dome-dd610.jpg', 'disponible' => 0]);
        Equipo::create(['nombre' =>'Máquina de Confetti Showtec FX SHOT MKII 60906', 'caracteristicas' => 'El Showtec FX Shot MKII es un disparador de confeti eléctrico muy fácil de utilizar. Está diseñado para disparar cañones eléctricos prellenados de un solo uso, disponibles en tamaños de 50 y 80°cm.', 'precio' => '60', 'fotos' => 'https://sonicolor.es/6944-large_default/showtec-confetti-fx-shot-mkii-maquina-60906.jpg', 'disponible' => 0]);
    }
}