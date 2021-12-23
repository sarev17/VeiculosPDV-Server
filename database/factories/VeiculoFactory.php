<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        date_default_timezone_set ("America/Sao_Paulo");
        return [
           'placa' => $this->faker->randomElement(array(chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90))."".rand(1111,9999))),
           'produto' => $this->faker->randomElement(array('Moto','Carro')),
           'marca' => $this->faker->randomElement(array('Avelloz', 'BMW', 'Ducati', 'Haojue', 'Harley-Davidson', 'Honda', 'Kawasaki', 'KTM', 'Kymco', 'Piaggio', 'Royal Enfield', 'Shineray', 'Suzuki', 'Triumph', 'Voltz Motors', 'Yamaha')),
           'modelo' => $this->faker->randomElement(array('ADV 150', 'AMERICA CLASSIC 1600', 'BIZ 110i', 'BIZ 125 ES/ ES F.INJ./ES MIX F.INJECTION','BIZ 125 EX/ 125 EX FLEX', 'BIZ 125 KS/ KS F.INJ./KS MIX F.INJECTION', 'BIZ 125+', 'BIZ 125/125i Flex','C 100 BIZ+', 'C 100 BIZ-ES', 'C 100 BIZ/ 100 BIZ KS', 'C 100 DREAM', 'CB 1000R/ABS','CB 300R/ 300R FLEX', 'CB 450 DX', 'CB 500', 'CB 500F', 'CB 500X', 'CB 600F HORNET', 'CB 650F','CB 650R', 'CB TWISTER/FLEXONE 250cc', 'CB1300 SUPER FOUR', 'CBR 1000 F', 'CBR 1000 RR Fireblade','CBR 1000 RR Fireblade SP', 'CBR 1000 RR-R Fireblade SP', 'CBR 1100 XX SUPER BLACKBIRD', 'CBR 250R','CBR 450', 'CBR 450 SR', 'CBR 500R', 'CBR 600 F', 'CBR 600 RR', 'CBR 650 R', 'CBR 650F','CBR 900 RR FIRE BLADE', 'CBX 150 AERO', 'CBX 200 STRADA', 'CBX 250 TWISTER', 'CBX 750 FOUR','CBX 750 FOUR INDY', 'CBX 750 R', 'CG 125', 'CG 125 CARGO ES', 'CG 125 CARGO ESD','CG 125 CARGO/ CARGO KS/125i CARGO', 'CG 125 FAN / FAN KS / 125 i FAN', 'CG 125 FAN ES','CG 125 FAN ESD', 'CG 125 TITAN', 'CG 125 TITAN-ES', 'CG 125 TITAN-KS', 'CG 125 TITAN-KSE','CG 125 TODAY', 'CG 150 CARGO ESD FLEX', 'CG 150 FAN ESDi/ 150 FAN ESDi FLEX','CG 150 FAN ESi/ 150 FAN ESi FLEX', 'CG 150 SPORT', 'CG 150 START FLEXONE', 'CG 150 TITAN-ES','CG 150 TITAN-ES MIX', 'CG 150 TITAN-ESD MIX/FLEX', 'CG 150 TITAN-ESD/ TITAN SPECIAL EDITION','CG 150 TITAN-EX MIX/FLEX', 'CG 150 TITAN-KS MIX', 'CG 150 TITAN-KS/ TITAN-JOB', 'CG 160 CARGO','CG 160 FAN ESDi FLEXONE', 'CG 160 FAN Flex', 'CG 160 START', 'CG 160 TITAN 25TH ANNIVERSARY','CG 160 TITAN FLEXONE/Ed.Especial 40 Anos', 'CG 160 TITAN S Flex', 'CH 125-R SPACY', 'CR 125', 'CR 250','CR 80', 'CRF 1000L AFRICA TWIN', 'CRF 1000L AFRICA TWIN ADV. SPORTS TE','CRF 1000L AFRICA TWIN ADVENTURE SPORTS', 'CRF 1000L AFRICA TWIN TE', 'CRF 1100L AFRICA TWIN','CRF 1100L AFRICA TWIN ADV. SPORTS ES', 'CRF 110F', 'CRF 150F', 'CRF 230 F', 'CRF 250 F', 'CRF 250 X','CRF 250L', 'CRF 450 R', 'CRF 450 RX', 'CRF 450 X', 'CTX 700N', 'DOMINATOR 650', 'ELITE 125','GOLD WING 1500/ 1800', 'GOLD WING TOUR 1800', 'LEAD 110', 'MAGNA 750', 'NC 700 X/ 700X ABS','NC 750X/NC 750X ABS', 'NX 150', 'NX 200', 'NX 350 SAHARA', 'NX 400i FALCON', 'NX-4 FALCON 400','NXR 125 BROS ES', 'NXR 125 BROS KS', 'NXR 150 BROS ES', 'NXR 150 BROS ES MIX/FLEX', 'NXR 150 BROS ESD','NXR 150 BROS ESD MIX/FLEX', 'NXR 150 BROS KS', 'NXR 150 BROS KS MIX/FLEX', 'NXR 160 BROS','NXR 160 BROS ESD FLEXONE', 'NXR 160 BROS ESDD FLEXONE', 'PCX 150 SPORT', 'PCX 150/DLX', 'POP 100 97cc','POP 110i', 'SH 150i/DLX', 'SH 300i', 'SH 300i Sport', 'SHADOW 1100 AC', 'SHADOW 1100 OURO','SHADOW AM 750', 'SHADOW VT 1100', 'SUPER HAWK 1000', 'TRX 350 FOURTRAX FM QUADRICICLO','TRX 350 FOURTRAX TM QUADRICICLO', 'TRX 420 FOURTRAX TM 4x2 QUADRICICLO','TRX 420 FOURTRAX FM 4x4 QUADRICICLO', 'VALKYRIE 1500', 'VFR 1200F', 'VFR 1200X CROSSTOURER','VT 600 C SHADOW', 'VT 750 SHADOW', 'VTX 1800R/ 1800S/ 1800C 1795cc', 'X-ADV 745cc','XL 1000V VARADERO', 'XL 125 DUTY', 'XL 125 S', 'XL 700V TRANSALP', 'XLR 125', 'XLR 125 ES','XLX 250 R', 'XLX 350 R', 'XR 200 R', 'XR 250 TORNADO', 'XR 650', 'XRE 190 ADVENTURE FLEX','XRE 190/ Flex', 'XRE 300 ADVENTURE FLEX', 'XRE 300 RALLY FLEX', 'XRE 300/ 300 ABS/ FLEX')),
           'exercicio' => $this->faker->numberBetween(2010,2021),
           'cor' => $this->faker->randomElement(array('Vermelha','Preta','Branca')),
           'renavam' => $this->faker->numberBetween(1000000000,9999999999),
           'fabricacao' => $this->faker->numberBetween(2010,2021),
           'compra' => $this->faker->numberBetween(5000,8000),
           'venda' => $this->faker->numberBetween(9000,11000),
           'updated_at'=> $this->faker->date('Y-m-d H:i:s'),
           'created_at'=> $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
