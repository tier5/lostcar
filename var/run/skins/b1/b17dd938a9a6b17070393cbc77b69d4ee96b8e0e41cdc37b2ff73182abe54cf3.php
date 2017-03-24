<?php

/* /var/www/html/lostcar/skins/admin/modules/XC/WebmasterKit/warning/warning.twig */
class __TwigTemplate_e967fb3306a45330566134011b17b8caf3130d7b4ebcfa987a1e7558f0df31c2 extends \XLite\Core\Templating\Twig\Template
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
        if ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "module") && ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getActualName", array(), "method") == "XC\\WebmasterKit"))) {
            // line 7
            echo "  <div class=\"alert alert-warning\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Webmaster Kit module is recommended for use by advanced users only. It must not be used on production servers as it may significantly reduce the website performance.")), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/XC/WebmasterKit/warning/warning.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module settings page warning*/
/*  #*/
/*  # @ListChild (list="crud.modulesettings.header", zone="admin", weight="10")*/
/*  #}*/
/* {% if this.target == 'module' and this.module.getActualName() == 'XC\\WebmasterKit' %}*/
/*   <div class="alert alert-warning">*/
/*     {{ t('Webmaster Kit module is recommended for use by advanced users only. It must not be used on production servers as it may significantly reduce the website performance.') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
