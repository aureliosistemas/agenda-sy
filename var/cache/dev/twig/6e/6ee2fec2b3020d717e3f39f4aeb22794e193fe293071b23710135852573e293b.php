<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c808ed2685a1322cf1b07c38b6b867ae1d16a489f6934942730b5b0e15162420 extends Twig_Template
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
        $__internal_454e5237c036848d6f55a83ee3db141c2d0d1538c8c85175c342173f821cfefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454e5237c036848d6f55a83ee3db141c2d0d1538c8c85175c342173f821cfefe->enter($__internal_454e5237c036848d6f55a83ee3db141c2d0d1538c8c85175c342173f821cfefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bfa2ea6cdc49361ae9a878ad0fd9eb7b04e3e87cfd994a61e5617ba6018d5d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa2ea6cdc49361ae9a878ad0fd9eb7b04e3e87cfd994a61e5617ba6018d5d00->enter($__internal_bfa2ea6cdc49361ae9a878ad0fd9eb7b04e3e87cfd994a61e5617ba6018d5d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_454e5237c036848d6f55a83ee3db141c2d0d1538c8c85175c342173f821cfefe->leave($__internal_454e5237c036848d6f55a83ee3db141c2d0d1538c8c85175c342173f821cfefe_prof);

        
        $__internal_bfa2ea6cdc49361ae9a878ad0fd9eb7b04e3e87cfd994a61e5617ba6018d5d00->leave($__internal_bfa2ea6cdc49361ae9a878ad0fd9eb7b04e3e87cfd994a61e5617ba6018d5d00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
