<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_4eb53f3e197634888534ae9ba31f8ebdcc9931d37a19081f7409de62fcd80728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb53f3e197634888534ae9ba31f8ebdcc9931d37a19081f7409de62fcd80728->enter($__internal_4eb53f3e197634888534ae9ba31f8ebdcc9931d37a19081f7409de62fcd80728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3108fa9051151015ba0751d0ed7d52f5c2b9af92452021c25b4016c21f9d7d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3108fa9051151015ba0751d0ed7d52f5c2b9af92452021c25b4016c21f9d7d67->enter($__internal_3108fa9051151015ba0751d0ed7d52f5c2b9af92452021c25b4016c21f9d7d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4eb53f3e197634888534ae9ba31f8ebdcc9931d37a19081f7409de62fcd80728->leave($__internal_4eb53f3e197634888534ae9ba31f8ebdcc9931d37a19081f7409de62fcd80728_prof);

        
        $__internal_3108fa9051151015ba0751d0ed7d52f5c2b9af92452021c25b4016c21f9d7d67->leave($__internal_3108fa9051151015ba0751d0ed7d52f5c2b9af92452021c25b4016c21f9d7d67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
