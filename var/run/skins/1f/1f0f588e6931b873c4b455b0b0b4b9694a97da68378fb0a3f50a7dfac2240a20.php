<?php

/* /var/www/html/lostcar/skins/admin/header/parts/nofollow.twig */
class __TwigTemplate_c4a44795451649d25adff0c1461904ce5b4d35f24110ba58d5589f11b920472c extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
<meta name=\"ROBOTS\" content=\"NOFOLLOW\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/header/parts/nofollow.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="70")*/
/*  #}*/
/* */
/* <meta name="ROBOTS" content="NOFOLLOW" />*/
/* */
