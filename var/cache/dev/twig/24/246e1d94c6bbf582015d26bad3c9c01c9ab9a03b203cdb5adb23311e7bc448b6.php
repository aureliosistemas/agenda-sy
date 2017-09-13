<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_376a9a8c24231e3a96d5f6d8d049270bdd20e777a4e651af90312de9f1ae0c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376a9a8c24231e3a96d5f6d8d049270bdd20e777a4e651af90312de9f1ae0c22->enter($__internal_376a9a8c24231e3a96d5f6d8d049270bdd20e777a4e651af90312de9f1ae0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_02141795f81b714a5d2512486058e00ae07fdee658c20daf1082b2d1b4b4887b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02141795f81b714a5d2512486058e00ae07fdee658c20daf1082b2d1b4b4887b->enter($__internal_02141795f81b714a5d2512486058e00ae07fdee658c20daf1082b2d1b4b4887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376a9a8c24231e3a96d5f6d8d049270bdd20e777a4e651af90312de9f1ae0c22->leave($__internal_376a9a8c24231e3a96d5f6d8d049270bdd20e777a4e651af90312de9f1ae0c22_prof);

        
        $__internal_02141795f81b714a5d2512486058e00ae07fdee658c20daf1082b2d1b4b4887b->leave($__internal_02141795f81b714a5d2512486058e00ae07fdee658c20daf1082b2d1b4b4887b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82978e57b4823d79d7fa465aeb6fa86eead08ec6232fbe5e2588bc052b13b2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82978e57b4823d79d7fa465aeb6fa86eead08ec6232fbe5e2588bc052b13b2e4->enter($__internal_82978e57b4823d79d7fa465aeb6fa86eead08ec6232fbe5e2588bc052b13b2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6bf4c5f6498eaa31d6e36a6c9bf76eb7d5d187c16f37486c04f1e813d4937d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bf4c5f6498eaa31d6e36a6c9bf76eb7d5d187c16f37486c04f1e813d4937d3->enter($__internal_e6bf4c5f6498eaa31d6e36a6c9bf76eb7d5d187c16f37486c04f1e813d4937d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e6bf4c5f6498eaa31d6e36a6c9bf76eb7d5d187c16f37486c04f1e813d4937d3->leave($__internal_e6bf4c5f6498eaa31d6e36a6c9bf76eb7d5d187c16f37486c04f1e813d4937d3_prof);

        
        $__internal_82978e57b4823d79d7fa465aeb6fa86eead08ec6232fbe5e2588bc052b13b2e4->leave($__internal_82978e57b4823d79d7fa465aeb6fa86eead08ec6232fbe5e2588bc052b13b2e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e2501d4e9949ebfbf8903a2b866ecf81fd147bab28e12e2f161040fdb9d1807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2501d4e9949ebfbf8903a2b866ecf81fd147bab28e12e2f161040fdb9d1807->enter($__internal_7e2501d4e9949ebfbf8903a2b866ecf81fd147bab28e12e2f161040fdb9d1807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c844a3b0a035dfe777e070b51f3a9429e6f0120eeed0b10250b8afea8dc784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c844a3b0a035dfe777e070b51f3a9429e6f0120eeed0b10250b8afea8dc784a->enter($__internal_3c844a3b0a035dfe777e070b51f3a9429e6f0120eeed0b10250b8afea8dc784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3c844a3b0a035dfe777e070b51f3a9429e6f0120eeed0b10250b8afea8dc784a->leave($__internal_3c844a3b0a035dfe777e070b51f3a9429e6f0120eeed0b10250b8afea8dc784a_prof);

        
        $__internal_7e2501d4e9949ebfbf8903a2b866ecf81fd147bab28e12e2f161040fdb9d1807->leave($__internal_7e2501d4e9949ebfbf8903a2b866ecf81fd147bab28e12e2f161040fdb9d1807_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c79761b1c8a6b078118ce4b46f9d9271d0c4d9f6e0615b1dab252b4ea9817240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79761b1c8a6b078118ce4b46f9d9271d0c4d9f6e0615b1dab252b4ea9817240->enter($__internal_c79761b1c8a6b078118ce4b46f9d9271d0c4d9f6e0615b1dab252b4ea9817240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2d8724fe530230a28b1703b0b767f347597a8e3c7c4876406db6dec43ef6783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d8724fe530230a28b1703b0b767f347597a8e3c7c4876406db6dec43ef6783->enter($__internal_e2d8724fe530230a28b1703b0b767f347597a8e3c7c4876406db6dec43ef6783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e2d8724fe530230a28b1703b0b767f347597a8e3c7c4876406db6dec43ef6783->leave($__internal_e2d8724fe530230a28b1703b0b767f347597a8e3c7c4876406db6dec43ef6783_prof);

        
        $__internal_c79761b1c8a6b078118ce4b46f9d9271d0c4d9f6e0615b1dab252b4ea9817240->leave($__internal_c79761b1c8a6b078118ce4b46f9d9271d0c4d9f6e0615b1dab252b4ea9817240_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
