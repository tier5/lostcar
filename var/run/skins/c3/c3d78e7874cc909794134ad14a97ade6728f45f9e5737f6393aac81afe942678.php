<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/recover_password/parts/form.button.twig */
class __TwigTemplate_2e8e5901d3693d0ffc7c67e39f2c31b4f6ae5568423c5a9ed4cd5337439dff96 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"buttons\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("submit_restore_pass"))))), "html", null, true);
        echo "
    ";
        // line 10
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array()) != "checkout")) {
            // line 11
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PopupLoginLink", 1 => array("template" => "button/popup_login_link.twig")))), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/recover_password/parts/form.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form : button*/
/*  #*/
/*  # @ListChild (list="recover.password.fields", weight="300")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="buttons">*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label=t('submit_restore_pass')) }}*/
/*     {% if this.getTarget != 'checkout' %}*/
/*       {{ widget('XLite\\View\\Button\\PopupLoginLink', {template: 'button/popup_login_link.twig'}) }}*/
/*     {% endif %}*/
/*   </td>*/
/* </tr>*/
/* */
/* */
