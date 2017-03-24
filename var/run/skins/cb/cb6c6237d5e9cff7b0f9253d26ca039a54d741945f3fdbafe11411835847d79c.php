<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/recover_password/parts/form.user.twig */
class __TwigTemplate_61b2b2b3b0f9579ea8e838d05dd59c6cb594ca55d3fcbb4829985393575aaceb extends \XLite\Core\Templating\Twig\Template
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
    <td class=\"error-message\">";
            // line 9
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
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/recover_password/parts/form.user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
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
/*     <td class="error-message">{{ t('No such user') }}: {{ this.email }}</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
