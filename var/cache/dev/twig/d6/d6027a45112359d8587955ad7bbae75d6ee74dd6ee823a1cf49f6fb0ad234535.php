<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1dfbc545999c961ea51c4573e762c043572812bf8db887f2229c0de9a3ca07a extends Twig_Template
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
        $__internal_090f376f90825d9c991a2c014f9284610f876e6677f11a5fbced88c83ba18c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090f376f90825d9c991a2c014f9284610f876e6677f11a5fbced88c83ba18c12->enter($__internal_090f376f90825d9c991a2c014f9284610f876e6677f11a5fbced88c83ba18c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0b7cdedaaf3347278552d340bc8b2a6ea83dec7a0e10350af0a846bbd636ba42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7cdedaaf3347278552d340bc8b2a6ea83dec7a0e10350af0a846bbd636ba42->enter($__internal_0b7cdedaaf3347278552d340bc8b2a6ea83dec7a0e10350af0a846bbd636ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_090f376f90825d9c991a2c014f9284610f876e6677f11a5fbced88c83ba18c12->leave($__internal_090f376f90825d9c991a2c014f9284610f876e6677f11a5fbced88c83ba18c12_prof);

        
        $__internal_0b7cdedaaf3347278552d340bc8b2a6ea83dec7a0e10350af0a846bbd636ba42->leave($__internal_0b7cdedaaf3347278552d340bc8b2a6ea83dec7a0e10350af0a846bbd636ba42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
