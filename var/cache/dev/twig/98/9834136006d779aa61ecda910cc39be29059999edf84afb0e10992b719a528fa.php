<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6825bc42c6f9de277799b3845b6039455830ae143db01c70a8927287b2484470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6825bc42c6f9de277799b3845b6039455830ae143db01c70a8927287b2484470->enter($__internal_6825bc42c6f9de277799b3845b6039455830ae143db01c70a8927287b2484470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_648c36e39df4ca8bf738b741cf98dc7bea9e685ae20e87ab496233ed6d76968a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648c36e39df4ca8bf738b741cf98dc7bea9e685ae20e87ab496233ed6d76968a->enter($__internal_648c36e39df4ca8bf738b741cf98dc7bea9e685ae20e87ab496233ed6d76968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6825bc42c6f9de277799b3845b6039455830ae143db01c70a8927287b2484470->leave($__internal_6825bc42c6f9de277799b3845b6039455830ae143db01c70a8927287b2484470_prof);

        
        $__internal_648c36e39df4ca8bf738b741cf98dc7bea9e685ae20e87ab496233ed6d76968a->leave($__internal_648c36e39df4ca8bf738b741cf98dc7bea9e685ae20e87ab496233ed6d76968a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f357c4a9471a37f0793d62ab8738bb8c38d12675a08043a9bf17d87abf895857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f357c4a9471a37f0793d62ab8738bb8c38d12675a08043a9bf17d87abf895857->enter($__internal_f357c4a9471a37f0793d62ab8738bb8c38d12675a08043a9bf17d87abf895857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5dc28c18b98370d228eeb9eb51a2c9642ca114686847e80b83780590dce8466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dc28c18b98370d228eeb9eb51a2c9642ca114686847e80b83780590dce8466->enter($__internal_d5dc28c18b98370d228eeb9eb51a2c9642ca114686847e80b83780590dce8466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5dc28c18b98370d228eeb9eb51a2c9642ca114686847e80b83780590dce8466->leave($__internal_d5dc28c18b98370d228eeb9eb51a2c9642ca114686847e80b83780590dce8466_prof);

        
        $__internal_f357c4a9471a37f0793d62ab8738bb8c38d12675a08043a9bf17d87abf895857->leave($__internal_f357c4a9471a37f0793d62ab8738bb8c38d12675a08043a9bf17d87abf895857_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c997b251acf9b8e2ec63ee30d2841b0227ed030889ab52d6073a2f6435e7e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c997b251acf9b8e2ec63ee30d2841b0227ed030889ab52d6073a2f6435e7e76->enter($__internal_7c997b251acf9b8e2ec63ee30d2841b0227ed030889ab52d6073a2f6435e7e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb4162b75325a407221f59d16b007c0b02d83a7b320e1d4ad938be2294205dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4162b75325a407221f59d16b007c0b02d83a7b320e1d4ad938be2294205dc2->enter($__internal_cb4162b75325a407221f59d16b007c0b02d83a7b320e1d4ad938be2294205dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb4162b75325a407221f59d16b007c0b02d83a7b320e1d4ad938be2294205dc2->leave($__internal_cb4162b75325a407221f59d16b007c0b02d83a7b320e1d4ad938be2294205dc2_prof);

        
        $__internal_7c997b251acf9b8e2ec63ee30d2841b0227ed030889ab52d6073a2f6435e7e76->leave($__internal_7c997b251acf9b8e2ec63ee30d2841b0227ed030889ab52d6073a2f6435e7e76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b71065211d3740bf6de5ec6b3eacd76e863739d3d966b989d374510156387632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71065211d3740bf6de5ec6b3eacd76e863739d3d966b989d374510156387632->enter($__internal_b71065211d3740bf6de5ec6b3eacd76e863739d3d966b989d374510156387632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64c37881ccaa46dd65e18b4505c8bda26f3f66355237b127a0cfa65cf96af252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c37881ccaa46dd65e18b4505c8bda26f3f66355237b127a0cfa65cf96af252->enter($__internal_64c37881ccaa46dd65e18b4505c8bda26f3f66355237b127a0cfa65cf96af252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64c37881ccaa46dd65e18b4505c8bda26f3f66355237b127a0cfa65cf96af252->leave($__internal_64c37881ccaa46dd65e18b4505c8bda26f3f66355237b127a0cfa65cf96af252_prof);

        
        $__internal_b71065211d3740bf6de5ec6b3eacd76e863739d3d966b989d374510156387632->leave($__internal_b71065211d3740bf6de5ec6b3eacd76e863739d3d966b989d374510156387632_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
