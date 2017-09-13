<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_b8d99c4620aac05f097617d83ccb0d6522b26a36e8d5c9e8e005128f57fb9fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d99c4620aac05f097617d83ccb0d6522b26a36e8d5c9e8e005128f57fb9fda->enter($__internal_b8d99c4620aac05f097617d83ccb0d6522b26a36e8d5c9e8e005128f57fb9fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9e6fda0b607f1a301979d988282511a5348c85f67d4c80e2c8bc7c1f2752fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6fda0b607f1a301979d988282511a5348c85f67d4c80e2c8bc7c1f2752fa91->enter($__internal_9e6fda0b607f1a301979d988282511a5348c85f67d4c80e2c8bc7c1f2752fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b8d99c4620aac05f097617d83ccb0d6522b26a36e8d5c9e8e005128f57fb9fda->leave($__internal_b8d99c4620aac05f097617d83ccb0d6522b26a36e8d5c9e8e005128f57fb9fda_prof);

        
        $__internal_9e6fda0b607f1a301979d988282511a5348c85f67d4c80e2c8bc7c1f2752fa91->leave($__internal_9e6fda0b607f1a301979d988282511a5348c85f67d4c80e2c8bc7c1f2752fa91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
