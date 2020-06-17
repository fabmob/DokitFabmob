<?php
/**
 * File holding the NewTutoBar class
 *
 * @file
 * @ingroup Skins
 */

namespace Skins\Chameleon\Components;

use \Linker;
use Skins\Chameleon\IdRegistry;

/**
 * The NewTutoBar class.
 *
 * The search form wrapped in a div: <div id="p-search" role="search" >
 *
 * @author Stephan Gambke
 * @since 1.0
 * @ingroup Skins
 */
class FabmobButtonBar extends Component {

	/**
	 * Builds the HTML code for this component
	 *
	 * @return string
	 */
	public function getHtml() {

		$newTutoPageTitle = \Title::makeTitle( SF_NS_FORM, ''. wfMessage( 'wfTopButton-Tutorial' )->text() .'');

		$pageNewRessource = \Title::makeTitle( NS_MAIN, 'Créer_une_ressource');
		$ret = $this->indent() . '<!-- new Ressource button -->' .
			$this->indent( 1 ) . '<div class="wf-top-button">' .
			$this->indent() . '<a href="' . $pageNewRessource->getLinkURL() . '">' .
			$this->indent() . '<button class="btn" aria-label="Créer une ressource" title="Créer_une_ressource">' .
			$this->indent() . '<span class="glyphicon glyphicon-pencil"></span>Créer  ressource</button>' .
			$this->indent() . '</a>' .
			$this->indent( -1 ) . '</div>' . "\n".
		    $this->indent() . '<!-- end new Ressource button -->' ;

		return $ret;
	}
}
