<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.image.twig */
class __TwigTemplate_e6097b57b56abe6cdd88eb1783506aa222c1ecef98b6a02b611baef35e329239 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getImage", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "maxWidth" => "40", "maxHeight" => "40", "centerImage" => "0"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.image.twig";
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
/*  # Create return :: form :: products :: column :: image*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="15")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Image', image=this.item.getImage(), alt=this.item.getName(), maxWidth='40', maxHeight='40', centerImage='0') }}*/
/* */
