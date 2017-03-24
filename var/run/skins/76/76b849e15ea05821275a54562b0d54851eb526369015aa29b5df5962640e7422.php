<?php

/* /var/www/html/lostcar/skins/admin/product/inventory/buttons.twig */
class __TwigTemplate_414f8c1e5d858a937716f9c3d8ee7cf678e8281f225f6b3a3f1647265ae9598f extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td colspan=\"2\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update"))))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/product/inventory/buttons.twig";
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
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td colspan="2">*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label=t('Update')) }}*/
/*   </td>*/
/* </tr>*/
/* */
