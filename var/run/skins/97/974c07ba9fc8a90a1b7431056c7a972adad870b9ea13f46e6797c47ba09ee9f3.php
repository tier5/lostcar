<?php

/* /var/www/html/lostcar/skins/admin/import/parts/option.delete_temporary_files.twig */
class __TwigTemplate_1b0bbeba45d3900080bed8aef2a0e3e0630f8a50586d1029b2da14b95fd095e0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"checkbox-option\" style=\"display: none;\">
  <label for=\"clearImportDir\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete temporary files after the import is completed")), "html", null, true);
        echo "</label>
  <input type=\"checkbox\" name=\"options[clearImportDir]\" value=\"1\" id=\"clearImportDir\" />
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/import/parts/option.delete_temporary_files.twig";
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
/*  # Import begin section : settings : delete temporary files*/
/*  #*/
/*  # @ListChild (list="import.begin.options", weight="200")*/
/*  #}*/
/* */
/* <li class="checkbox-option" style="display: none;">*/
/*   <label for="clearImportDir">{{ t('Delete temporary files after the import is completed') }}</label>*/
/*   <input type="checkbox" name="options[clearImportDir]" value="1" id="clearImportDir" />*/
/* </li>*/
/* */
