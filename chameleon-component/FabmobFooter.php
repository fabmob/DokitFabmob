<?php
/**
 * File containing the Wikifab Footer class
 *
 *
 * @file
 * @ingroup   Skins
 */

namespace Skins\Chameleon\Components;

use Linker;

/**
 * ToolbarHorizontal class
 *
 * A horizontal toolbar containing standard sidebar items (toolbox, language links).
 *
 * The toolbar is an unordered list in a nav element: <nav role="navigation" id="p-tb" >
 *
 * @author Stephan Gambke
 * @since 1.0
 * @ingroup Skins
 */
class FabmobFooter extends Component {

	/**
	 * Builds the HTML code for this component
	 *
	 * @return String the HTML code
	 */
	public function getHtml() {
		global $wgScriptPath;

		$ret = '
			<div class="FabmobFooter">
			<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<img src="'. $wgScriptPath . '/extensions/DokitFabmob/img/logo-footer.png">
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<h4>'. wfMessage( 'fmfootertitle-about' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="http://wiki.lafabriquedesmobilites.fr/wiki/Proposition_de_valeur_pour_une_startup">'. wfMessage( 'fmfooter-startup' )->text() .'</a></li>
						<li><a href="http://wiki.lafabriquedesmobilites.fr/wiki/Proposition_de_valeur_pour_un_industriel">Industriel</a></li>
						<li><a href="http://wiki.lafabriquedesmobilites.fr/wiki/Communaut%C3%A9s">'. wfMessage( 'fmfooter-communaute' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'fmfooterlinks-communs' )->text() .'">'. wfMessage( 'fmfooter-communs' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'fmfooterlinks-blog' )->text() .'">'. wfMessage( 'fmfooter-blog' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'fmfooterlinks-contact' )->text() .'">'. wfMessage( 'fmfooter-contact' )->text() .'</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<h4>'. wfMessage( 'fmfootertitle-navigate' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="/index.php/'. wfMessage( 'fmfooterlinks-recentchanges' )->text() .'">'. wfMessage( 'fmfooter-recentchanges' )->text() .'</a></li>
						<li><a href="/index.php/'. wfMessage( 'fmfooterlinks-users' )->text() .'">'. wfMessage( 'fmfooter-users' )->text() .'</a></li>
						<li><a href="/index.php/'. wfMessage( 'fmfooterlinks-tools' )->text() .'">'. wfMessage( 'fmfooter-tools' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'fmfooterlinks-help' )->text() .'">'. wfMessage( 'fmfooter-help' )->text() .'</a></li>
						<li><a href="http://chat.fabmob.io">Chat</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<h4>'. wfMessage( 'fmfootertitle-hello' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="'. wfMessage( 'fmfooterlinks-newsletter' )->text() .'">'. wfMessage( 'fmfooter-newsletter' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'fmfooterlinks-legal' )->text() .'">'. wfMessage( 'fmfooter-legal' )->text() .'</a></li>
						<li><a href="/index.php/'. wfMessage( 'fmfooterlinks-emploi' )->text() .'">'. wfMessage( 'fmfooter-emploi' )->text() .'</a></li>
					</ul>
				</div>
			</div>
			</div>
			</div>

		';

		$ret .= self::getConnectionRequiredModal();


		return $ret;
	}


	public static function getConnectionRequiredModal() {
		global $wgOut;

		$loginTitle = \SpecialPage::getSafeTitleFor( 'Userlogin' );
		$page = $wgOut->getTitle();
		$urlaction = 'returnto=' . $page->getPrefixedDBkey();
		$loginUrl = $loginTitle->getLocalURL( $urlaction );
		$createAccountUrl = $loginTitle->getLocalURL( $urlaction . '&type=signup' );

		$ret = '
				<div class="modal fade" id="connectionRequiredModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">'.wfMessage('userlogin').'</h4>
				</div>
				<div class="modal-body">
				Vous devez être identifié pour pouvoir effectuer cette action.
				</div>
				<div class="modal-footer">
				<a href="'.$loginUrl.'"><button type="button" class="btn btn-default">'.wfMessage('gotaccountlink').'</button></a>
				<a href="'.$createAccountUrl.'"><button type="button" class="btn btn-primary">'.wfMessage('nologinlink').'</button></a>
				</div>
				</div>
				</div>
				</div>';
		return $ret;
	}
}
