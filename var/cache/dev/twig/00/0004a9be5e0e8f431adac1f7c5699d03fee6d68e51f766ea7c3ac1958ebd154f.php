<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_57797d445e1ae7026835a8dbf36ce0a3d974979017a5af17014fbde7106a22c8 extends Twig_Template
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
        $__internal_a0ab7798288dd81b593192d798e4e8d35bdfc744ff011b8f487ec637c8b781fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ab7798288dd81b593192d798e4e8d35bdfc744ff011b8f487ec637c8b781fa->enter($__internal_a0ab7798288dd81b593192d798e4e8d35bdfc744ff011b8f487ec637c8b781fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_251b27b030229edf8600a3a34cfa803a2c0096b3f23949e915328a3d58880ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251b27b030229edf8600a3a34cfa803a2c0096b3f23949e915328a3d58880ba4->enter($__internal_251b27b030229edf8600a3a34cfa803a2c0096b3f23949e915328a3d58880ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a0ab7798288dd81b593192d798e4e8d35bdfc744ff011b8f487ec637c8b781fa->leave($__internal_a0ab7798288dd81b593192d798e4e8d35bdfc744ff011b8f487ec637c8b781fa_prof);

        
        $__internal_251b27b030229edf8600a3a34cfa803a2c0096b3f23949e915328a3d58880ba4->leave($__internal_251b27b030229edf8600a3a34cfa803a2c0096b3f23949e915328a3d58880ba4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
