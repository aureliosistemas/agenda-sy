<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97f84cba036027b3815354ded6b88be556a78664ec2b5f65f80fbdd1ed4ac8db extends Twig_Template
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
        $__internal_6be5d92f77f244992b198aa38268d1acc0e0dd3c44deac661e685a9154577811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be5d92f77f244992b198aa38268d1acc0e0dd3c44deac661e685a9154577811->enter($__internal_6be5d92f77f244992b198aa38268d1acc0e0dd3c44deac661e685a9154577811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e96be16a1c28fb69c7835e6f0d3e393ca4704585bf8b15e202a14b67b0d9c9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96be16a1c28fb69c7835e6f0d3e393ca4704585bf8b15e202a14b67b0d9c9ef->enter($__internal_e96be16a1c28fb69c7835e6f0d3e393ca4704585bf8b15e202a14b67b0d9c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6be5d92f77f244992b198aa38268d1acc0e0dd3c44deac661e685a9154577811->leave($__internal_6be5d92f77f244992b198aa38268d1acc0e0dd3c44deac661e685a9154577811_prof);

        
        $__internal_e96be16a1c28fb69c7835e6f0d3e393ca4704585bf8b15e202a14b67b0d9c9ef->leave($__internal_e96be16a1c28fb69c7835e6f0d3e393ca4704585bf8b15e202a14b67b0d9c9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
