<?php

/* /var/www/html/lostcar/skins/customer/product/search/parts/phrase.phrase.twig */
class __TwigTemplate_72e47ee9f41315655380b2253ec13551b2ba283e68633df805d1d1717940e321 extends \XLite\Core\Templating\Twig\Template
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
<li>
  <input type=\"radio\" name=\"including\" id=\"including-phrase\" value=\"phrase\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "including", 1 => "phrase"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-phrase\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Exact phrase")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/search/parts/phrase.phrase.twig";
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
/*  # Search phrase : pharse*/
/*  #*/
/*  # @listChild (list="products.search.conditions.phrase", weight="300")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="radio" name="including" id="including-phrase" value="phrase" {% if this.getChecked('including', 'phrase') %} checked="checked" {% endif %} />*/
/*   <label for="including-phrase">{{ t('Exact phrase') }}</label>*/
/* </li>*/
/* */
