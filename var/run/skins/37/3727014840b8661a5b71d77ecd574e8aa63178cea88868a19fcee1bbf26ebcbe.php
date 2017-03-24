<?php

/* /var/www/html/lostcar/skins/admin/file_selector/parts/url_label.twig */
class __TwigTemplate_34d9a2d6494de00317dc93b629a466023f1adcf08e0fc16cb52e429931e302ec extends \XLite\Core\Templating\Twig\Template
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
<li class=\"url-label label-field\">
  <input type=\"radio\" id=\"file_select_url\" name=\"file_select\" value=\"url\" />
  <label for=\"file_select_url\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("from URL")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/file_selector/parts/url_label.twig";
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
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="500")*/
/*  #}*/
/* */
/* <li class="url-label label-field">*/
/*   <input type="radio" id="file_select_url" name="file_select" value="url" />*/
/*   <label for="file_select_url">{{ t('from URL') }}</label>*/
/* </li>*/
/* */
