<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b7edc73be1df84354e2b6fcc211065fce6f5b9fedf694944c129d535991b375 extends Twig_Template
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
        $__internal_71f77dbeaebd2605bbcd53440c7a3f6a7fab51113a83558ee58f19e2a7db845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f77dbeaebd2605bbcd53440c7a3f6a7fab51113a83558ee58f19e2a7db845c->enter($__internal_71f77dbeaebd2605bbcd53440c7a3f6a7fab51113a83558ee58f19e2a7db845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f287707f18d811326388fda1826b5795b3c26b7c8f0a8da963b9feca1655a4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f287707f18d811326388fda1826b5795b3c26b7c8f0a8da963b9feca1655a4b4->enter($__internal_f287707f18d811326388fda1826b5795b3c26b7c8f0a8da963b9feca1655a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_71f77dbeaebd2605bbcd53440c7a3f6a7fab51113a83558ee58f19e2a7db845c->leave($__internal_71f77dbeaebd2605bbcd53440c7a3f6a7fab51113a83558ee58f19e2a7db845c_prof);

        
        $__internal_f287707f18d811326388fda1826b5795b3c26b7c8f0a8da963b9feca1655a4b4->leave($__internal_f287707f18d811326388fda1826b5795b3c26b7c8f0a8da963b9feca1655a4b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
