<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/signin/parts/continue.button.twig */
class __TwigTemplate_9044239094e2d308114da30ee2b9cd5cc62d2e29864787e33dc5d6411b67aaa5 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"buttons-row\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Continue")), "style" => "anonymous-continue-button"))), "html", null, true);
        echo "
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/signin/parts/continue.button.twig";
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
/*  # Field : email*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title.continue", weight="110")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="buttons-row">*/
/*     {{ widget('XLite\\View\\Button\\Submit', label=t('Continue'), style='anonymous-continue-button') }}*/
/*   </td>*/
/* </tr>*/
