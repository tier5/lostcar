<?php

/* /var/www/html/lostcar/skins/admin/modules/XC/ThemeTweaker/images_settings/parts/custom_images.twig */
class __TwigTemplate_2a4ae44698ee8efa78240e075ba20d104a9051faca16041528059e9a3fde23a3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"custom-images\">

  <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Custom images")), "html", null, true);
        echo "</h2>

  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\ThemeTweaker\\View\\Images"))), "html", null, true);
        echo "

  <div class=\"new-image\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("New images")), "html", null, true);
        echo ": <input type=\"file\" name=\"new_images[]\" multiple />
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/XC/ThemeTweaker/images_settings/parts/custom_images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Images sizes settings template*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="100")*/
/*  #}*/
/* */
/* <div class="custom-images">*/
/* */
/*   <h2>{{ t('Custom images') }}</h2>*/
/* */
/*   {{ widget('\\XLite\\Module\\XC\\ThemeTweaker\\View\\Images') }}*/
/* */
/*   <div class="new-image">*/
/*     {{ t('New images') }}: <input type="file" name="new_images[]" multiple />*/
/*   </div>*/
/* */
/* </div>*/
/* */
