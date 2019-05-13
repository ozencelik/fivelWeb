<?php

use Illuminate\Database\Seeder;

class MovementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-thumb-stretch-6col.gif',
    	'title' => 'MOVEMENT #1',
    	'description' => 'Start with your hand in a neutral, relaxed position with your fingers and thumb straightened. Next, bend your thumb across your palm, touching the tip of your thumb to the bottom of your small finger.']);

    	$movement->save();

    	$movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-knuckle-bend-6col.gif',
    	'title' => 'MOVEMENT #2',
    	'description' => 'Hand exercises can help improve joint flexibility and range of motion in people who have arthritis. Start by holding your hand and fingers straight and close together. Bend the end and middle joints of your fingers.']);

    	$movement->save();

    	$movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-fist-stretch-6col.gif',
    	'title' => 'MOVEMENT #3',
    	'description' => 'Start by holding your hand and fingers straight and close together, as if for a handshake — with your forearm, wrist and hand resting on a tabletop or other flat surface.']);

    	$movement->save();

    	$movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-thumb-stabilization-6col.gif',
    	'title' => 'MOVEMENT #4',
    	'description' => 'Start by holding your hand and fingers straight and close together. Gently curve your fingers into a C shape, as if your hand is wrapped around a can or bottle.']);

    	$movement->save();

    	$movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-fingertip-touch-6col.gif',
    	'title' => 'MOVEMENT #5',
    	'description' => 'Start with holding your hand and fingers straight and close together. Form an O shape by touching your thumb to each fingertip.']);

    	$movement->save();

    	$movement = new \App\Movement([
        'imagePath' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2015/11/26/10/29/ar00030-finger-walk-6col.gif',
    	'title' => 'MOVEMENT #6',
    	'description' => 'Rest your hand on a flat surface, such as a tabletop, with your palm facing down. Move your thumb away from your hand. Beginning with your index finger, move it up and toward your thumb.']);

    	$movement->save();
    }
}
