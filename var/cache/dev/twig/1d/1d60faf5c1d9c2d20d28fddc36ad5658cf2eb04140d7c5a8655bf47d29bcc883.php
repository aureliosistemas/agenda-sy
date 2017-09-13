<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_851b499c1a09de6b5ff59e234923a0fa79f12ce372a047b59f3636edf33bcd85 extends Twig_Template
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
        $__internal_dd8c3b10bfcbfff3e069c5b662e160f44b1d4dc47ae888411bb59bd860376273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8c3b10bfcbfff3e069c5b662e160f44b1d4dc47ae888411bb59bd860376273->enter($__internal_dd8c3b10bfcbfff3e069c5b662e160f44b1d4dc47ae888411bb59bd860376273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_25754078ec3cb75cc5d12c2b66bc738c27788d49238584426ee0996f36ee2d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25754078ec3cb75cc5d12c2b66bc738c27788d49238584426ee0996f36ee2d64->enter($__internal_25754078ec3cb75cc5d12c2b66bc738c27788d49238584426ee0996f36ee2d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dd8c3b10bfcbfff3e069c5b662e160f44b1d4dc47ae888411bb59bd860376273->leave($__internal_dd8c3b10bfcbfff3e069c5b662e160f44b1d4dc47ae888411bb59bd860376273_prof);

        
        $__internal_25754078ec3cb75cc5d12c2b66bc738c27788d49238584426ee0996f36ee2d64->leave($__internal_25754078ec3cb75cc5d12c2b66bc738c27788d49238584426ee0996f36ee2d64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
