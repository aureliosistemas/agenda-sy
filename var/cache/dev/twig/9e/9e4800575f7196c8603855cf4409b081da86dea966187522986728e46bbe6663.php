<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_974044b637170e4d3edb850e2d6265ada3a73235f94a8bc1af973ad63b74a2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974044b637170e4d3edb850e2d6265ada3a73235f94a8bc1af973ad63b74a2b9->enter($__internal_974044b637170e4d3edb850e2d6265ada3a73235f94a8bc1af973ad63b74a2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0c3f3c192cc8e07c3cc248243e9df0bd80ccf6097701a93350cba40ce7ee40a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3f3c192cc8e07c3cc248243e9df0bd80ccf6097701a93350cba40ce7ee40a3->enter($__internal_0c3f3c192cc8e07c3cc248243e9df0bd80ccf6097701a93350cba40ce7ee40a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_974044b637170e4d3edb850e2d6265ada3a73235f94a8bc1af973ad63b74a2b9->leave($__internal_974044b637170e4d3edb850e2d6265ada3a73235f94a8bc1af973ad63b74a2b9_prof);

        
        $__internal_0c3f3c192cc8e07c3cc248243e9df0bd80ccf6097701a93350cba40ce7ee40a3->leave($__internal_0c3f3c192cc8e07c3cc248243e9df0bd80ccf6097701a93350cba40ce7ee40a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
