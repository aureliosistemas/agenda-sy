<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b415fa1bae06cfa94cff24c1f54b359fdbd2ebc52c9a375b86ea5924533e1c1d extends Twig_Template
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
        $__internal_be76a51ce96d154c75e6bc9718f7bc158d40f060e3f9e8a920cc5831a9b63ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be76a51ce96d154c75e6bc9718f7bc158d40f060e3f9e8a920cc5831a9b63ec7->enter($__internal_be76a51ce96d154c75e6bc9718f7bc158d40f060e3f9e8a920cc5831a9b63ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_8638790b4d02468ac5a0026769118aa674b378def89f11355ed78ad7c7dbc62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8638790b4d02468ac5a0026769118aa674b378def89f11355ed78ad7c7dbc62b->enter($__internal_8638790b4d02468ac5a0026769118aa674b378def89f11355ed78ad7c7dbc62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_be76a51ce96d154c75e6bc9718f7bc158d40f060e3f9e8a920cc5831a9b63ec7->leave($__internal_be76a51ce96d154c75e6bc9718f7bc158d40f060e3f9e8a920cc5831a9b63ec7_prof);

        
        $__internal_8638790b4d02468ac5a0026769118aa674b378def89f11355ed78ad7c7dbc62b->leave($__internal_8638790b4d02468ac5a0026769118aa674b378def89f11355ed78ad7c7dbc62b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
