<?php

/* /var/www/html/lostcar/skins/admin/file_selector/parts/url_input.twig */
class __TwigTemplate_14f6ce3e9baf860d6dcd30df0f295c5fc152e69d9369eacf0ddcd72a88d44807 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"url-input input-field\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "url", "fieldOnly" => "true", "value" => ""))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/file_selector/parts/url_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="600")*/
/*  #}*/
/* */
/* <li class="url-input input-field">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='url', fieldOnly='true', value='') }}*/
/* </li>*/
/* */
