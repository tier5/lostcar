<?php

/* /var/www/html/lostcar/skins/admin/modules/JThemesStudio/The80sMod/brands_logo/parts/images.twig */
class __TwigTemplate_cb5c62bfc845eb1938f56b3dfa74e854e6b93acce88c9416a46664c31911dbe3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"brands-logo-images\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\JThemesStudio\\The80sMod\\View\\ItemsList\\BrandsLogoItems"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/JThemesStudio/The80sMod/brands_logo/parts/images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Banner images list & upload*/
/*  #*/
/*  # @ListChild (list="crud.brandslogo.formFooter", zone="admin", weight="200")*/
/*  #}*/
/* */
/* <div class="brands-logo-images">*/
/*     {{ widget('\\XLite\\Module\\JThemesStudio\\The80sMod\\View\\ItemsList\\BrandsLogoItems') }}*/
/* </div>*/
/* */
