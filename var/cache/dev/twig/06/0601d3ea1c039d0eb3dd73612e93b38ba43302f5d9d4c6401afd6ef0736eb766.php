<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_88f11b1e857296202947b18f268b2cc539470e8047fba297f0948838878d304b extends Twig_Template
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
        $__internal_f51614d468892d1065cbf9f41fcf5c13d72deccd9d0d8b33783453277d8cb7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51614d468892d1065cbf9f41fcf5c13d72deccd9d0d8b33783453277d8cb7a6->enter($__internal_f51614d468892d1065cbf9f41fcf5c13d72deccd9d0d8b33783453277d8cb7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_18cd526144995e5f4e2faef91f09f108eea73824cc94b7eaacc93ab009aac801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cd526144995e5f4e2faef91f09f108eea73824cc94b7eaacc93ab009aac801->enter($__internal_18cd526144995e5f4e2faef91f09f108eea73824cc94b7eaacc93ab009aac801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f51614d468892d1065cbf9f41fcf5c13d72deccd9d0d8b33783453277d8cb7a6->leave($__internal_f51614d468892d1065cbf9f41fcf5c13d72deccd9d0d8b33783453277d8cb7a6_prof);

        
        $__internal_18cd526144995e5f4e2faef91f09f108eea73824cc94b7eaacc93ab009aac801->leave($__internal_18cd526144995e5f4e2faef91f09f108eea73824cc94b7eaacc93ab009aac801_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
