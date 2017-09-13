<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a31ac09c53be5bba0b56227d772a48cc39efd5140ee17c25e826170a1f8784e extends Twig_Template
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
        $__internal_c33fb997eda34fe5675d7018690556b884d52c96268970a31547ab240705d07c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33fb997eda34fe5675d7018690556b884d52c96268970a31547ab240705d07c->enter($__internal_c33fb997eda34fe5675d7018690556b884d52c96268970a31547ab240705d07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4a1f9f0068c35e1120af442d423e5ca802006143d02da3baec4f8936f4105b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1f9f0068c35e1120af442d423e5ca802006143d02da3baec4f8936f4105b64->enter($__internal_4a1f9f0068c35e1120af442d423e5ca802006143d02da3baec4f8936f4105b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c33fb997eda34fe5675d7018690556b884d52c96268970a31547ab240705d07c->leave($__internal_c33fb997eda34fe5675d7018690556b884d52c96268970a31547ab240705d07c_prof);

        
        $__internal_4a1f9f0068c35e1120af442d423e5ca802006143d02da3baec4f8936f4105b64->leave($__internal_4a1f9f0068c35e1120af442d423e5ca802006143d02da3baec4f8936f4105b64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
