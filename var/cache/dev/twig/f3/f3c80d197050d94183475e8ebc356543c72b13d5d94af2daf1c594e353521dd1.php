<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f1ad46441adaaa876ead5e4032cec652eb0eb235e9271099cffa72e8f8522253 extends Twig_Template
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
        $__internal_16df02bf1a8515b0334ad56d14c944df7cacf7c91a2bd1fe71e02d881ca1eb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16df02bf1a8515b0334ad56d14c944df7cacf7c91a2bd1fe71e02d881ca1eb58->enter($__internal_16df02bf1a8515b0334ad56d14c944df7cacf7c91a2bd1fe71e02d881ca1eb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a2d20a89249d6b4f072f6fa53acd934936a41e60e32fed0881967caf976b5e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d20a89249d6b4f072f6fa53acd934936a41e60e32fed0881967caf976b5e84->enter($__internal_a2d20a89249d6b4f072f6fa53acd934936a41e60e32fed0881967caf976b5e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_16df02bf1a8515b0334ad56d14c944df7cacf7c91a2bd1fe71e02d881ca1eb58->leave($__internal_16df02bf1a8515b0334ad56d14c944df7cacf7c91a2bd1fe71e02d881ca1eb58_prof);

        
        $__internal_a2d20a89249d6b4f072f6fa53acd934936a41e60e32fed0881967caf976b5e84->leave($__internal_a2d20a89249d6b4f072f6fa53acd934936a41e60e32fed0881967caf976b5e84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
