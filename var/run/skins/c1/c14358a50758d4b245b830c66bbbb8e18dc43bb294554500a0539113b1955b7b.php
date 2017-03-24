<?php

/* /var/www/html/lostcar/skins/customer/operate_as_user/parts/login.twig */
class __TwigTemplate_97e256b10f692df6998bacb5e6f33c15f1bbebf2b52e6a73063dc3ae14b06588 extends \XLite\Core\Templating\Twig\Template
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
<div class='login'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLogin", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/operate_as_user/parts/login.twig";
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
/*  # Login*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="30")*/
/*  #}*/
/* */
/* <div class='login'>{{ this.getLogin() }}</div>*/
/* */
