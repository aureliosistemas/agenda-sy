<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0447a5b26578c982271d3959bc31fe1d29de4baea38b3240c66ed77af9056adc extends Twig_Template
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
        $__internal_c81270138c7efc23e1a1c5e9449d8901efac98e8c06b5378c97a0a64c3676bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81270138c7efc23e1a1c5e9449d8901efac98e8c06b5378c97a0a64c3676bee->enter($__internal_c81270138c7efc23e1a1c5e9449d8901efac98e8c06b5378c97a0a64c3676bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9045ea8a026e4e0feecccde762e0279b8803275c8d22bcfcab39a6f4a6f17901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9045ea8a026e4e0feecccde762e0279b8803275c8d22bcfcab39a6f4a6f17901->enter($__internal_9045ea8a026e4e0feecccde762e0279b8803275c8d22bcfcab39a6f4a6f17901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c81270138c7efc23e1a1c5e9449d8901efac98e8c06b5378c97a0a64c3676bee->leave($__internal_c81270138c7efc23e1a1c5e9449d8901efac98e8c06b5378c97a0a64c3676bee_prof);

        
        $__internal_9045ea8a026e4e0feecccde762e0279b8803275c8d22bcfcab39a6f4a6f17901->leave($__internal_9045ea8a026e4e0feecccde762e0279b8803275c8d22bcfcab39a6f4a6f17901_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e32f913fa6999d8c01120f23f5a999868f8070d30d3fa6c980fc6cb778bd2ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32f913fa6999d8c01120f23f5a999868f8070d30d3fa6c980fc6cb778bd2ae8->enter($__internal_e32f913fa6999d8c01120f23f5a999868f8070d30d3fa6c980fc6cb778bd2ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a44fc8cd77c77bd543e0aa0294e8ca1871a7f18e8e6833372c01d6278025df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44fc8cd77c77bd543e0aa0294e8ca1871a7f18e8e6833372c01d6278025df53->enter($__internal_a44fc8cd77c77bd543e0aa0294e8ca1871a7f18e8e6833372c01d6278025df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a44fc8cd77c77bd543e0aa0294e8ca1871a7f18e8e6833372c01d6278025df53->leave($__internal_a44fc8cd77c77bd543e0aa0294e8ca1871a7f18e8e6833372c01d6278025df53_prof);

        
        $__internal_e32f913fa6999d8c01120f23f5a999868f8070d30d3fa6c980fc6cb778bd2ae8->leave($__internal_e32f913fa6999d8c01120f23f5a999868f8070d30d3fa6c980fc6cb778bd2ae8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
