<?php

/* /var/www/html/lostcar/skins/customer/operate_as_user/parts/desc.twig */
class __TwigTemplate_08dd9e4e589c5e7013eac93197fca8b1d5b5a54860b56fb072a456643f96d4a6 extends \XLite\Core\Templating\Twig\Template
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
<div class='description'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are operating as:")), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/operate_as_user/parts/desc.twig";
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
/*  # Description*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="10")*/
/*  #}*/
/* */
/* <div class='description'>{{ t('You are operating as:') }}</div>*/
/* */
