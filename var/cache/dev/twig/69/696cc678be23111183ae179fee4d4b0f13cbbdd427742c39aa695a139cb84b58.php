<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc002d44418fb8c0d656c09dc978a8bb939752af74fb4075f3ebda5498ebbe2f extends Twig_Template
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
        $__internal_f6432aa1b7751d4d0581b056e3486cfef3cbe892897c47324115e6a146b19034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6432aa1b7751d4d0581b056e3486cfef3cbe892897c47324115e6a146b19034->enter($__internal_f6432aa1b7751d4d0581b056e3486cfef3cbe892897c47324115e6a146b19034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f36bdff34e07da3a206757bf45f682a82639faa3092e79b0ce4176c889fb372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36bdff34e07da3a206757bf45f682a82639faa3092e79b0ce4176c889fb372a->enter($__internal_f36bdff34e07da3a206757bf45f682a82639faa3092e79b0ce4176c889fb372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f6432aa1b7751d4d0581b056e3486cfef3cbe892897c47324115e6a146b19034->leave($__internal_f6432aa1b7751d4d0581b056e3486cfef3cbe892897c47324115e6a146b19034_prof);

        
        $__internal_f36bdff34e07da3a206757bf45f682a82639faa3092e79b0ce4176c889fb372a->leave($__internal_f36bdff34e07da3a206757bf45f682a82639faa3092e79b0ce4176c889fb372a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
