<?php

/* /var/www/html/lostcar/skins/customer/product/search/parts/phrase.all.twig */
class __TwigTemplate_c0291878c21e7a4c60a77d33aa1d143c485adb29255f932464b31b2068bd5bfc extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"radio\" name=\"including\" id=\"including-all\" value=\"all\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "including", 1 => "all"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-all\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("All words")), "html", null, true);
        echo "<label/>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/search/parts/phrase.all.twig";
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
/*  # Search phrase : all*/
/*  #*/
/*  # @listChild (list="products.search.conditions.phrase", weight="100")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="radio" name="including" id="including-all" value="all" {% if this.getChecked('including', 'all') %} checked="checked" {% endif %} />*/
/*   <label for="including-all">{{ t('All words') }}<label/>*/
/* </li>*/
/* */
