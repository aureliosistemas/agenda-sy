<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b43fed8eb2f4e706faca5f10af4b31cf22ad05a8642c9123058fcfdf92621a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b43fed8eb2f4e706faca5f10af4b31cf22ad05a8642c9123058fcfdf92621a6->enter($__internal_6b43fed8eb2f4e706faca5f10af4b31cf22ad05a8642c9123058fcfdf92621a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7330add3689fe856c8b5db8faf01bcfe02c70c30eecbdac113a73f7df78e857a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7330add3689fe856c8b5db8faf01bcfe02c70c30eecbdac113a73f7df78e857a->enter($__internal_7330add3689fe856c8b5db8faf01bcfe02c70c30eecbdac113a73f7df78e857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b43fed8eb2f4e706faca5f10af4b31cf22ad05a8642c9123058fcfdf92621a6->leave($__internal_6b43fed8eb2f4e706faca5f10af4b31cf22ad05a8642c9123058fcfdf92621a6_prof);

        
        $__internal_7330add3689fe856c8b5db8faf01bcfe02c70c30eecbdac113a73f7df78e857a->leave($__internal_7330add3689fe856c8b5db8faf01bcfe02c70c30eecbdac113a73f7df78e857a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_357e2cae5911d6b95c13ddc1d515c3ae4e935bb70a4803f1a3d0ad60ace394a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357e2cae5911d6b95c13ddc1d515c3ae4e935bb70a4803f1a3d0ad60ace394a8->enter($__internal_357e2cae5911d6b95c13ddc1d515c3ae4e935bb70a4803f1a3d0ad60ace394a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7f82621d0c76eb3c0990e167b050816fe9e09ade2e4b9186e6239694920eb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f82621d0c76eb3c0990e167b050816fe9e09ade2e4b9186e6239694920eb2d->enter($__internal_b7f82621d0c76eb3c0990e167b050816fe9e09ade2e4b9186e6239694920eb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b7f82621d0c76eb3c0990e167b050816fe9e09ade2e4b9186e6239694920eb2d->leave($__internal_b7f82621d0c76eb3c0990e167b050816fe9e09ade2e4b9186e6239694920eb2d_prof);

        
        $__internal_357e2cae5911d6b95c13ddc1d515c3ae4e935bb70a4803f1a3d0ad60ace394a8->leave($__internal_357e2cae5911d6b95c13ddc1d515c3ae4e935bb70a4803f1a3d0ad60ace394a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
