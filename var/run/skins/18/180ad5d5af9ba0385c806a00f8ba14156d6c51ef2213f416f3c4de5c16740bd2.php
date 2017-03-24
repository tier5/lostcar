<?php

/* /var/www/html/lostcar/skins/admin/images_settings/parts/resize_images.twig */
class __TwigTemplate_edf34eb3b9bb1dd56cd0da905327e82f5c2ea4d34860ae7cb31dd1c987091956 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "use_dynamic_image_resizing", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUseDynamicImageResizingValue", array(), "method"), "label" => "Use dynamic image resizing", "help" => "Use dynamic image help"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/images_settings/parts/resize_images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Use dynamic image resizing setting*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="20")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff', fieldName='use_dynamic_image_resizing', value=this.getUseDynamicImageResizingValue(), label='Use dynamic image resizing', help='Use dynamic image help') }}*/
