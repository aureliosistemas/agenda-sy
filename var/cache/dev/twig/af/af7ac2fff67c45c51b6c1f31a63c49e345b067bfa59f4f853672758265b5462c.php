<?php

/* AurelioAgendaBundle:Default:index.html.twig */
class __TwigTemplate_5cf90beb18d7f713b86c384f06e47a5e97829638793be3d3079eb095cc5e7fec extends Twig_Template
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
        $__internal_9e79039cb6d78577cd3909cf2f87dc8577227acd5933b6c505b4a0a6e8b53461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e79039cb6d78577cd3909cf2f87dc8577227acd5933b6c505b4a0a6e8b53461->enter($__internal_9e79039cb6d78577cd3909cf2f87dc8577227acd5933b6c505b4a0a6e8b53461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AurelioAgendaBundle:Default:index.html.twig"));

        $__internal_14949c51c7cf5c46767e6951c248bb4b1551c05480612179be7fb41cb215861f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14949c51c7cf5c46767e6951c248bb4b1551c05480612179be7fb41cb215861f->enter($__internal_14949c51c7cf5c46767e6951c248bb4b1551c05480612179be7fb41cb215861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AurelioAgendaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9e79039cb6d78577cd3909cf2f87dc8577227acd5933b6c505b4a0a6e8b53461->leave($__internal_9e79039cb6d78577cd3909cf2f87dc8577227acd5933b6c505b4a0a6e8b53461_prof);

        
        $__internal_14949c51c7cf5c46767e6951c248bb4b1551c05480612179be7fb41cb215861f->leave($__internal_14949c51c7cf5c46767e6951c248bb4b1551c05480612179be7fb41cb215861f_prof);

    }

    public function getTemplateName()
    {
        return "AurelioAgendaBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AurelioAgendaBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\src\\Aurelio\\AgendaBundle/Resources/views/Default/index.html.twig");
    }
}
