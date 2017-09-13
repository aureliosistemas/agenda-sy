<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1c6d9174d573178796b3159335813abc7dff9cbd033779c19d1ee5b9c5fa108 extends Twig_Template
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
        $__internal_7f88b9e1e931fb5f0813700b125e9b176d551c4a740a4c6810254471f0f0518b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f88b9e1e931fb5f0813700b125e9b176d551c4a740a4c6810254471f0f0518b->enter($__internal_7f88b9e1e931fb5f0813700b125e9b176d551c4a740a4c6810254471f0f0518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_42456b7a3ddd2f0694b2364fad893028310d3ea3b79c89409ea26193d04808e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42456b7a3ddd2f0694b2364fad893028310d3ea3b79c89409ea26193d04808e2->enter($__internal_42456b7a3ddd2f0694b2364fad893028310d3ea3b79c89409ea26193d04808e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7f88b9e1e931fb5f0813700b125e9b176d551c4a740a4c6810254471f0f0518b->leave($__internal_7f88b9e1e931fb5f0813700b125e9b176d551c4a740a4c6810254471f0f0518b_prof);

        
        $__internal_42456b7a3ddd2f0694b2364fad893028310d3ea3b79c89409ea26193d04808e2->leave($__internal_42456b7a3ddd2f0694b2364fad893028310d3ea3b79c89409ea26193d04808e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
