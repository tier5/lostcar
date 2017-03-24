<?php

/* /var/www/html/lostcar/skins/customer/operate_as_user/parts/name.twig */
class __TwigTemplate_c1a11b39e86f7d416c1ce92e6ea0ef8dd2ebf084f3aa842a70b2eb7f400a135d extends \XLite\Core\Templating\Twig\Template
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
<div class='name'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/operate_as_user/parts/name.twig";
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
/*  # Name*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="20")*/
/*  #}*/
/* */
/* <div class='name'>{{ this.getName() }}</div>*/
/* */
