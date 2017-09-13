<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e228051c03e77a1b82ee3800c4acabc8fe02ca2c249317a943d16608030b111 extends Twig_Template
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
        $__internal_5542e20623e88fa8864179539bf1f99f455a86df8e5a3034c98f896345acd0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5542e20623e88fa8864179539bf1f99f455a86df8e5a3034c98f896345acd0cd->enter($__internal_5542e20623e88fa8864179539bf1f99f455a86df8e5a3034c98f896345acd0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_60d2c451d65b2172aca7f0ba035c2666e88354d614b486e3ab2e8619ee5e499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d2c451d65b2172aca7f0ba035c2666e88354d614b486e3ab2e8619ee5e499f->enter($__internal_60d2c451d65b2172aca7f0ba035c2666e88354d614b486e3ab2e8619ee5e499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5542e20623e88fa8864179539bf1f99f455a86df8e5a3034c98f896345acd0cd->leave($__internal_5542e20623e88fa8864179539bf1f99f455a86df8e5a3034c98f896345acd0cd_prof);

        
        $__internal_60d2c451d65b2172aca7f0ba035c2666e88354d614b486e3ab2e8619ee5e499f->leave($__internal_60d2c451d65b2172aca7f0ba035c2666e88354d614b486e3ab2e8619ee5e499f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
