<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/signin/parts/continue.button.twig */
class __TwigTemplate_c716bb3788090829ac5b6b9e45a03167025ce9f0b99de5f9071e5b36d01cc1bf extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/crisp_white/customer/signin/parts/continue.button.twig";
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
