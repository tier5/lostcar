<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/ProductAdvisor/product/parts/coming_soon.twig */
class __TwigTemplate_45735664af6a07ef3bc5981b3a8aaa5eebb5090e7efa94f70a42aa914579810c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isUpcomingProduct", array(), "method")) {
            // line 8
            echo "  <tr>
    <td colspan=\"3\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This product will be shown in coming soon section")), "html", null, true);
            echo "</td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/ProductAdvisor/product/parts/coming_soon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="product.modify.list", weight="832")*/
/*  #}*/
/* */
/* {% if this.product.isUpcomingProduct() %}*/
/*   <tr>*/
/*     <td colspan="3">{{ t('This product will be shown in coming soon section') }}</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
