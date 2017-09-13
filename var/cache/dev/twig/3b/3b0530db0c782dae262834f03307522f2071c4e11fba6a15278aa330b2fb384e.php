<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_457d6031a9d334355dbbf8cd7981eb4e5452b9081ac4f95ead2965e7b26466cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457d6031a9d334355dbbf8cd7981eb4e5452b9081ac4f95ead2965e7b26466cf->enter($__internal_457d6031a9d334355dbbf8cd7981eb4e5452b9081ac4f95ead2965e7b26466cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9c3411c42c598ef73ba9c8bcd6a8d88deea3f5818ec5217ec67132f247950759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3411c42c598ef73ba9c8bcd6a8d88deea3f5818ec5217ec67132f247950759->enter($__internal_9c3411c42c598ef73ba9c8bcd6a8d88deea3f5818ec5217ec67132f247950759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_457d6031a9d334355dbbf8cd7981eb4e5452b9081ac4f95ead2965e7b26466cf->leave($__internal_457d6031a9d334355dbbf8cd7981eb4e5452b9081ac4f95ead2965e7b26466cf_prof);

        
        $__internal_9c3411c42c598ef73ba9c8bcd6a8d88deea3f5818ec5217ec67132f247950759->leave($__internal_9c3411c42c598ef73ba9c8bcd6a8d88deea3f5818ec5217ec67132f247950759_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0790152465392ba14e5245fd6693311330a20461683ab1fb704af320f723015e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0790152465392ba14e5245fd6693311330a20461683ab1fb704af320f723015e->enter($__internal_0790152465392ba14e5245fd6693311330a20461683ab1fb704af320f723015e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13fa893f2a82d51325d44857a6d0fba82349b744c06007906ee6fd726811f2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fa893f2a82d51325d44857a6d0fba82349b744c06007906ee6fd726811f2c4->enter($__internal_13fa893f2a82d51325d44857a6d0fba82349b744c06007906ee6fd726811f2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_13fa893f2a82d51325d44857a6d0fba82349b744c06007906ee6fd726811f2c4->leave($__internal_13fa893f2a82d51325d44857a6d0fba82349b744c06007906ee6fd726811f2c4_prof);

        
        $__internal_0790152465392ba14e5245fd6693311330a20461683ab1fb704af320f723015e->leave($__internal_0790152465392ba14e5245fd6693311330a20461683ab1fb704af320f723015e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e982158600be1752b9d1ac1c974a5a8a2eb8eb0c2d7d5338ecbbdd588d4b8c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e982158600be1752b9d1ac1c974a5a8a2eb8eb0c2d7d5338ecbbdd588d4b8c92->enter($__internal_e982158600be1752b9d1ac1c974a5a8a2eb8eb0c2d7d5338ecbbdd588d4b8c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e46ada0de0d9873b6585efe26b5ac191fcc3059b3872e5696b06a712b42aa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e46ada0de0d9873b6585efe26b5ac191fcc3059b3872e5696b06a712b42aa32->enter($__internal_2e46ada0de0d9873b6585efe26b5ac191fcc3059b3872e5696b06a712b42aa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2e46ada0de0d9873b6585efe26b5ac191fcc3059b3872e5696b06a712b42aa32->leave($__internal_2e46ada0de0d9873b6585efe26b5ac191fcc3059b3872e5696b06a712b42aa32_prof);

        
        $__internal_e982158600be1752b9d1ac1c974a5a8a2eb8eb0c2d7d5338ecbbdd588d4b8c92->leave($__internal_e982158600be1752b9d1ac1c974a5a8a2eb8eb0c2d7d5338ecbbdd588d4b8c92_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7ce5708ef347338a5298f755d828d21e02822bd9e63e0ac833dbfeeee329641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ce5708ef347338a5298f755d828d21e02822bd9e63e0ac833dbfeeee329641->enter($__internal_a7ce5708ef347338a5298f755d828d21e02822bd9e63e0ac833dbfeeee329641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d555e4c14791cced06b7d910b535b0a0e1a0c742686390349efc492cd3d1e505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d555e4c14791cced06b7d910b535b0a0e1a0c742686390349efc492cd3d1e505->enter($__internal_d555e4c14791cced06b7d910b535b0a0e1a0c742686390349efc492cd3d1e505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d555e4c14791cced06b7d910b535b0a0e1a0c742686390349efc492cd3d1e505->leave($__internal_d555e4c14791cced06b7d910b535b0a0e1a0c742686390349efc492cd3d1e505_prof);

        
        $__internal_a7ce5708ef347338a5298f755d828d21e02822bd9e63e0ac833dbfeeee329641->leave($__internal_a7ce5708ef347338a5298f755d828d21e02822bd9e63e0ac833dbfeeee329641_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
