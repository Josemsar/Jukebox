<?php
// src/Jukebox/JukeboxBundle/Controller/JukeboxController.php
namespace Jukebox\JukeboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JukeboxController extends Controller
{

	public function listAction()
{
	//$artistas = $this->get('doctrine')->getManager()->createQueryBuilder()->select('p')->from('JukeboxJukeboxBundle:Post',  'p')->addOrderBy('p.fecha_nacimiento', 'DESC')->getQuery()->getResult();

	$artistas = $this->get('doctrine')->getManager()->getRepository('JukeboxJukeboxBundle:Artista')->getLatestArtistas();

	return $this->render('JukeboxJukeboxBundle:Jukebox:list.html.twig', array('artistas' => $artistas));
}

	public function showAction($id)
	{
		$artista = $this->get('doctrine')->getManager()->getRepository('JukeboxJukeboxBundle:Artista')->find($id);
		if (!$artista)
		{
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}

		return $this->render('JukeboxJukeboxBundle:Jukebox:show.html.twig', array('artista' => $artista));
	}

	public function contactAction()
	{
		return $this->render('JukeboxJukeboxBundle:Jukebox:contact.html.twig');
	}
}
?>
