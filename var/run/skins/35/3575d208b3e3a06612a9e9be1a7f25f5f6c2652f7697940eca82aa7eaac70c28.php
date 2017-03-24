<?php

/* /var/www/html/lostcar/skins/customer/recover_password/parts/form.user.twig */
class __TwigTemplate_bee3864f09020cd8575855c56984caa942fda0780e083357e6da15f690d344e9 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "noSuchUser", array())) {
            // line 8
            echo "  <tr>
    <td colspan=\"2\">&nbsp;</td>
    <td class=\"error-message\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No such user")), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "email", array()), "html", null, true);
            echo "</td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/recover_password/parts/form.user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form : user*/
/*  #*/
/*  # @ListChild (list="recover.password.fields", weight="200")*/
/*  #}*/
/* */
/* {% if this.noSuchUser %}*/
/*   <tr>*/
/*     <td colspan="2">&nbsp;</td>*/
/*     <td class="error-message">{{ t('No such user') }}: {{ this.email }}</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
