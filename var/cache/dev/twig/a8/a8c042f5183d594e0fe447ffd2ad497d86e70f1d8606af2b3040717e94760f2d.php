<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6886cbef29787afff90251e9e84872c41856f254feaec4ade7c9a87ef4e92692 extends Twig_Template
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
        $__internal_08f649203926887dacb68ba717bc9d3fb0dcd796f2b4c1552a581cfd1a932c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f649203926887dacb68ba717bc9d3fb0dcd796f2b4c1552a581cfd1a932c54->enter($__internal_08f649203926887dacb68ba717bc9d3fb0dcd796f2b4c1552a581cfd1a932c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_18309a08d72aef954513886cedce277793a0349e0c3965a5853b37ab288d8b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18309a08d72aef954513886cedce277793a0349e0c3965a5853b37ab288d8b67->enter($__internal_18309a08d72aef954513886cedce277793a0349e0c3965a5853b37ab288d8b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_08f649203926887dacb68ba717bc9d3fb0dcd796f2b4c1552a581cfd1a932c54->leave($__internal_08f649203926887dacb68ba717bc9d3fb0dcd796f2b4c1552a581cfd1a932c54_prof);

        
        $__internal_18309a08d72aef954513886cedce277793a0349e0c3965a5853b37ab288d8b67->leave($__internal_18309a08d72aef954513886cedce277793a0349e0c3965a5853b37ab288d8b67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
