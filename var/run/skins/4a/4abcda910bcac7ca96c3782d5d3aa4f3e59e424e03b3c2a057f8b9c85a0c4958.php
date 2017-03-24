<?php

/* /var/www/html/lostcar/skins/admin/main_center/page_container_parts/header_parts/menu_control.twig */
class __TwigTemplate_6006a552c47c7330c633b17d908b998b914ea28d75b0013ca7b27ba0c20e85de extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "auth", array()), "isAdmin", array(), "method")) {
            // line 7
            echo "  <div class=\"left-menu-ctrl\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
            echo "\"><i class=\"fa fa-bars\"></i></a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/main_center/page_container_parts/header_parts/menu_control.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Left side menu control*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header", weight="30")*/
/*  #}*/
/* {% if this.auth.isAdmin() %}*/
/*   <div class="left-menu-ctrl"><a href="{{ url() }}"><i class="fa fa-bars"></i></a></div>*/
/* {% endif %}*/
/* */
