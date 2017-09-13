<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a92cbbfa89cf4291d5cd0d4b349a43cb1b7e0e7cd48659c3f8735b3fe74d4a28 extends Twig_Template
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
        $__internal_089b7e98df200d8114c3d18d20ae6727821ff06fb67ffc46f451a1a3cb537b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089b7e98df200d8114c3d18d20ae6727821ff06fb67ffc46f451a1a3cb537b70->enter($__internal_089b7e98df200d8114c3d18d20ae6727821ff06fb67ffc46f451a1a3cb537b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_552d1d8f0b50b1b81d756df6f6576516870e5328befc9352a7eeb4dc375f7ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552d1d8f0b50b1b81d756df6f6576516870e5328befc9352a7eeb4dc375f7ba6->enter($__internal_552d1d8f0b50b1b81d756df6f6576516870e5328befc9352a7eeb4dc375f7ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_089b7e98df200d8114c3d18d20ae6727821ff06fb67ffc46f451a1a3cb537b70->leave($__internal_089b7e98df200d8114c3d18d20ae6727821ff06fb67ffc46f451a1a3cb537b70_prof);

        
        $__internal_552d1d8f0b50b1b81d756df6f6576516870e5328befc9352a7eeb4dc375f7ba6->leave($__internal_552d1d8f0b50b1b81d756df6f6576516870e5328befc9352a7eeb4dc375f7ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
