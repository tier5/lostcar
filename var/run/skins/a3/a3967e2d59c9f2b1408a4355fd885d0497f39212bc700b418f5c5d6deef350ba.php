<?php

/* /var/www/html/lostcar/skins/customer/signin/signin_title.twig */
class __TwigTemplate_de9ed62f55e785dec36b2ce701c5642540c46a750894660cd175b27693da4c00 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-anonymous-title-description\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSigninAnonymousTitle", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/signin/signin_title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title", weight="20")*/
/*  #}*/
/* <div class="signin-anonymous-title-description">{{ this.getSigninAnonymousTitle()|raw }}</div>*/
/* */
