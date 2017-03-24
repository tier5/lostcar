<?php

/* /var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.title.twig */
class __TwigTemplate_aba1baa7ae10b43af4c203c68b02011ffdeb390a28b0ac51695122e56ae963ae extends \XLite\Core\Templating\Twig\Template
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
<li><label for=\"by-title\">
  <input type=\"checkbox\" name=\"by_title\" id=\"by-title\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "by_title"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Title")), "html", null, true);
        echo "
</label></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.title.twig";
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
/*  # Search in title*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced.options", weight="100")*/
/*  #}*/
/* */
/* <li><label for="by-title">*/
/*   <input type="checkbox" name="by_title" id="by-title" value="Y" {% if this.getChecked('by_title') %} checked="checked" {% endif %} />*/
/*   {{ t('Title') }}*/
/* </label></li>*/
/* */
