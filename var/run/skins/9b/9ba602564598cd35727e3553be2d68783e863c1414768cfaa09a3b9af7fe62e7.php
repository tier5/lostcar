<?php

/* /var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.descr.twig */
class __TwigTemplate_75aabdfa161215a24999ebe0ad4b0fb1481690ee3369493e09b9973ea0e68958 extends \XLite\Core\Templating\Twig\Template
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
<li><label for=\"by-descr\">
  <input type=\"checkbox\" name=\"by_descr\" id=\"by-descr\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "by_descr"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Description")), "html", null, true);
        echo "
</label></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.descr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Search in description*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced.options", weight="200")*/
/*  #}*/
/* */
/* <li><label for="by-descr">*/
/*   <input type="checkbox" name="by_descr" id="by-descr" value="Y" {% if this.getChecked('by_descr') %} checked="checked" {% endif %} />*/
/*   {{ t('Description') }}*/
/* </label></li>*/
/* */
