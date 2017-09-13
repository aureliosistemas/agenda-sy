<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_73eea420ca43760209dc1fd79abcd4aea12f3f5e6855ac163e2da8eb6c31f919 extends Twig_Template
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
        $__internal_10dd387604f83db52feedd40dfcdeae87ee08de01f55089ffb320881786c513b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dd387604f83db52feedd40dfcdeae87ee08de01f55089ffb320881786c513b->enter($__internal_10dd387604f83db52feedd40dfcdeae87ee08de01f55089ffb320881786c513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_9d460c89efe4ea67db02f9a772f507a711d274abb1d98e50f1dfd4521e0a9f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d460c89efe4ea67db02f9a772f507a711d274abb1d98e50f1dfd4521e0a9f3c->enter($__internal_9d460c89efe4ea67db02f9a772f507a711d274abb1d98e50f1dfd4521e0a9f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_10dd387604f83db52feedd40dfcdeae87ee08de01f55089ffb320881786c513b->leave($__internal_10dd387604f83db52feedd40dfcdeae87ee08de01f55089ffb320881786c513b_prof);

        
        $__internal_9d460c89efe4ea67db02f9a772f507a711d274abb1d98e50f1dfd4521e0a9f3c->leave($__internal_9d460c89efe4ea67db02f9a772f507a711d274abb1d98e50f1dfd4521e0a9f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
