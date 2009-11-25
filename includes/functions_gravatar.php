<?php
//SARAH DID NOT MAKE THIS --- THIS LINKS INTO GRAVATAR, AN AVATAR SITE, REAL AUTHOR IS LISTED BELOW
// I AM JUST USING IT UNTIL I SET UP AVATARS LATER
/**
 * Gravatar link generator class
 *
 * @author xuanyan <xunayan1983@gmail.com>
 * @link   http://www.kukufun.com
 */

// example1:
// $gravatar = new Gravatar('xunayan1983@gmail.com');
// $gravatar->setDefault('monsterid')->setSize(100);
// echo $gravatar;
// 
// example2:
// $url = Gravatar::creat('xunayan1983@gmail.com')
//            ->setDefault('http://www.kukufun.com/images/logo.png')
//            ->setRating('x')
//            ->__toString();



class Gravatar
{
    private static $default_array = array('identicon', 'wavatar', 'monsterid');
    private static $rating_array = array('g', 'pg', 'r', 'x');

    private $size = 80;
    private $rating = 'g';
    private $default = '';
    private $email = '';
    const URL = 'http://www.gravatar.com/avatar/';

    public function __construct($email = '')
    {
        $this->email = md5(trim((string)$email));
    }

    public static function creat($email = '')
    {
        return new self($email);
    }

    public function setRating($rating = 'g')
    {
        if (in_array($rating, self::$rating_array))
        {
            $this->rating = $rating;
        }

        return $this;
    }

    public function setDefault($default = '')
    {
        $default = trim($default);
        if (substr($default, 0, 4) == 'http')
        {
            $this->default = urlencode($default);
        }
        elseif (in_array($default, self::$default_array))
        {
            $this->default = $default;
        }

        return $this;
    }

    public function setSize($size = 80)
    {
        $size = intval($size);
        $size < 1 && $size = 1;
        $size > 512 && $size = 512;
        $this->size = $size;

        return $this;
    }

    public function __toString()
    {
        $result = self::URL . $this->email . '?s=' . $this->size . '&r=' .$this->rating;
        $this->default && $result .= '&d=' . $this->default;

        return $result;
    }
}
?>