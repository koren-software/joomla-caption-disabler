<?php
use Joomla\CMS\HTML\HTMLHelper;

/**
 * @author John Rix
 * @source https://joomla.stackexchange.com/a/28497/3944
 */
class PlgSystemCaptionDisabler extends JPlugin
{
    public function onAfterInitialise()
    {
        if (!HTMLHelper::isRegistered('behavior.caption')) {
            HTMLHelper::register('behavior.caption', array(__CLASS__, 'caption'));
        }
    }

    // Dummy override function to disable default Joomla 'caption' behavior
    public static function caption()
    {
    }
}
