<?php

/* /var/www/html/lostcar/skins/admin/file_selector/parts/url_copy_to_local.twig */
class __TwigTemplate_143c8e324f4034366a6c4c621894b3f641e0886c2396c3597889c45414c0b46b extends \XLite\Core\Templating\Twig\Template
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
<li class=\"url-copy-to-local input-field\">
  <label for=\"url-copy-to-local\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox", "value" => "Y", "isChecked" => "false", "attributes" => array("disabled" => "disabled"), "fieldName" => "url_copy_to_local", "fieldOnly" => "true"))), "html", null, true);
        echo "
    <span class=\"label\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Copy file to local server")), "html", null, true);
        echo "</span>
  </label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/file_selector/parts/url_copy_to_local.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="700")*/
/*  #}*/
/* */
/* <li class="url-copy-to-local input-field">*/
/*   <label for="url-copy-to-local">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox', value='Y', isChecked='false', attributes={'disabled': 'disabled'}, fieldName='url_copy_to_local', fieldOnly='true') }}*/
/*     <span class="label">{{ t('Copy file to local server') }}</span>*/
/*   </label>*/
/* </li>*/
/* */
