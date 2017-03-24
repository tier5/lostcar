<?php

/* layout/footer/bottom_text_info/body.twig */
class __TwigTemplate_8bcd808ad2de7fb36fc82cb0b2aa4e273e14edbb0c1d65b747c45e5a62d14507 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"footer-info-cintainer\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer.textinfo.block"))), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/bottom_text_info/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div class="footer-info-cintainer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {{ widget_list('footer.textinfo.block') }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
