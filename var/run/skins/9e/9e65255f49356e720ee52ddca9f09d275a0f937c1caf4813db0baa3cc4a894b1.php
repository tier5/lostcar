<?php

/* /var/www/html/lostcar/skins/admin/images_settings/parts/default_settings.twig */
class __TwigTemplate_3fbb4e47bf8fcb9247feddae9286627e2afe2d43c330f766b1bf839718b3bcad extends \XLite\Core\Templating\Twig\Template
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
<div class=\"images-sizes\">

";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\Model\\ImagesSettings"))), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/images_settings/parts/default_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Images sizes settings template*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="30")*/
/*  #}*/
/* */
/* <div class="images-sizes">*/
/* */
/* {{ widget('\\XLite\\View\\ItemsList\\Model\\ImagesSettings') }}*/
/* */
/* </div>*/
/* */
