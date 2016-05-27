<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Csrf\CsrfToken;

////////////////////////////////////////////////////////////////////
// - CLASS DECLARATION - ///////////////////////////////////////////
////////////////////////////////////////////////////////////////////
/**
 * BaseController Class
 *
 * An abstract Veromo-flavoured controller which provides for all of our eccentricities.
 *
 * @package     VeromoApp
 * @version     1.0
 */
abstract class BaseController extends Controller
{
    ////////////////////////////////////////////////////////////////
    // - CLASS TRAITS - ////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////
    // - CLASS PROPERTIES - ////////////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string
     */
    protected $currentRoute;
    /**
     * @var Request
     */
    protected $request;
    ////////////////////////////////////////////////////////////////
    // - PUBLIC MEMBER METHODS - ///////////////////////////////////
    ////////////////////////////////////////////////////////////////
    public function setContainer( ContainerInterface $container = null )
    {
        $this->container = $container;

        if( is_null( $this->container ) === FALSE && $this->container->hasParameter( 'theme_'.$this->context ) )
        {
            $root   = $this->get('kernel')->getRootDir();
            $theme  = $this->getParameter('theme_'.$this->context);
            $views  = $root.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'views';

            if( file_exists( $views.DIRECTORY_SEPARATOR.$this->context ) )
            {
                $this->get('twig.loader')->prependPath( $views.DIRECTORY_SEPARATOR.$this->context );
            }
            if( file_exists( $views.DIRECTORY_SEPARATOR.'theme'.DIRECTORY_SEPARATOR.$theme.DIRECTORY_SEPARATOR.$this->context ) )
            {
                $this->get('twig.loader')->prependPath( $views.DIRECTORY_SEPARATOR.'theme'.DIRECTORY_SEPARATOR.$theme.DIRECTORY_SEPARATOR.$this->context );
            }
        }
    }
    ////////////////////////////////////////////////////////////////
    // - PROTECTED MEMBER METHODS - ////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /**
     * @param   string  $tokenID
     * @param   string  $tokenValue
     *
     * @return  boolean
     */
    protected function checkToken( $tokenID, $tokenValue )
    {
        return $this->get('security.csrf.token_manager')->isTokenValid( new CsrfToken( $tokenID, $tokenValue ) );
    }
    /**
     * @param   string  $tokenID
     *
     * @return  CsrfToken
     */
    protected function getToken( $tokenID )
    {
        return $this->get('security.csrf.token_manager')->getToken( $tokenID );
    }
    /**
     * @return string
     */
    protected function getAppHost()
    {
        if( $_SERVER['SERVER_NAME'] == 'veromo.dev' || $_SERVER['SERVER_NAME'] == 'localhost' )
        {
            return $_SERVER['SERVER_NAME'];
        }
        else
        {
            return 'go.veromo.com.au';
        }
    }
    /**
     * @return string
     */
    protected function getSiteHost()
    {
        if( $_SERVER['SERVER_NAME'] == 'veromo.dev' || $_SERVER['SERVER_NAME'] == 'localhost' )
        {
            return $_SERVER['SERVER_NAME'];
        }
        else
        {
            return 'www.veromo.com.au';
        }
    }
    /**
     * @param   string  $key
     * @param   mixed   $default
     *
     * @return  mixed
     */
    protected function getUserState( $key, $default = null )
    {
        return $this->get('session')->get( $key, $default );
    }
    /**
     * @param   string  $field
     * @param   mixed   $default
     * @param   int     $filter
     * @param   array   $options
     *
     * @return  mixed|null
     */
    protected function getUserStateFromRequest( $form, $field, $key, $default = null, $filter = FILTER_SANITIZE_STRING, $options = array() )
    {
        if( strtoupper( $this->request->getMethod() ) == 'POST' )
        {
            $formData = $this->request->request->all();

            if( isset( $formData[$form][$field] ) === TRUE && ( $value = filter_var( $formData[$form][$field], $filter, $options ) ) !== FALSE )
            {
                return $value;
            }
            else
            {
                return $default;
            }
        }
        else
        {
            return $this->getUserState( $key, $default );
        }
    }
    /**
     * @param   string  $key
     * @param   mixed   $value
     *
     * @return  mixed
     */
    protected function setUserState( $key, $value )
    {
        $this->get('session')->set( $key, $value );

        return $value;
    }
    /**
     * @param   \Symfony\Component\Form\Form    $form
     *
     * @return  array
     */
    protected function getErrorMessages( \Symfony\Component\Form\Form $form )
    {
        $errors = array();

        foreach( $form->getErrors( true ) as $error )
        {
            $field = ( ( $cause = $error->getCause() ) !== NULL )? $cause->getPropertyPath().' - ' : '' ;

            $errors[] = $field.$error->getMessage();
        }

        return $errors;
    }
    /**
     * @param   \Symfony\Component\Form\Form    $form
     *
     * @return  array
     *
     * @throws  AccessDeniedException
     */
    protected function handleFormErrors( \Symfony\Component\Form\Form $form )
    {
        $env = $this->get('kernel')->getEnvironment();

        if( $env != 'prod' )
        {
            return $this->getErrorMessages( $form );
        }

        throw new AccessDeniedException();
    }
}
////////////////////////////////////////////////////////////////////
// - END CLASS - ///////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////