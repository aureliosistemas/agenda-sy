<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_54550814b0f76ae8ebe05a89b8704e21a062f4995d945a0979ef7d4c652fbb77 extends Twig_Template
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
        $__internal_e5c1b55f0d557f176b7e21de89c724f89066e2458806deee20d2ad7d4091616c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c1b55f0d557f176b7e21de89c724f89066e2458806deee20d2ad7d4091616c->enter($__internal_e5c1b55f0d557f176b7e21de89c724f89066e2458806deee20d2ad7d4091616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_445b404e125cb7e7e2ccdaac942e4317022b870154dd31d883029a9447fd61a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445b404e125cb7e7e2ccdaac942e4317022b870154dd31d883029a9447fd61a2->enter($__internal_445b404e125cb7e7e2ccdaac942e4317022b870154dd31d883029a9447fd61a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e5c1b55f0d557f176b7e21de89c724f89066e2458806deee20d2ad7d4091616c->leave($__internal_e5c1b55f0d557f176b7e21de89c724f89066e2458806deee20d2ad7d4091616c_prof);

        
        $__internal_445b404e125cb7e7e2ccdaac942e4317022b870154dd31d883029a9447fd61a2->leave($__internal_445b404e125cb7e7e2ccdaac942e4317022b870154dd31d883029a9447fd61a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
