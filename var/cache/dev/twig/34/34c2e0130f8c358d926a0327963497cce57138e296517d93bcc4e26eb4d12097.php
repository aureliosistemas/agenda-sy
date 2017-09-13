<?php

/* ::base.html.twig */
class __TwigTemplate_7ba426c3fd6db79c519a62bea0910f1177809241c289686031b107a8977fbd24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aabf16d79bd9be0d7244af2b4ebc1665eedf837c2fee5f60a5f213ee1230b33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabf16d79bd9be0d7244af2b4ebc1665eedf837c2fee5f60a5f213ee1230b33b->enter($__internal_aabf16d79bd9be0d7244af2b4ebc1665eedf837c2fee5f60a5f213ee1230b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b56eea078645044aac534923e9bb6acb2841f728d7d06ee6a947f093301163fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56eea078645044aac534923e9bb6acb2841f728d7d06ee6a947f093301163fa->enter($__internal_b56eea078645044aac534923e9bb6acb2841f728d7d06ee6a947f093301163fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />


        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"container-fluid\">
            <nav id=\"main-menu\">
                <div class=\"btn-group\" role=\"group\">

                </div>
            </nav>
            fghjklçlkjhgfghjkl
            ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_aabf16d79bd9be0d7244af2b4ebc1665eedf837c2fee5f60a5f213ee1230b33b->leave($__internal_aabf16d79bd9be0d7244af2b4ebc1665eedf837c2fee5f60a5f213ee1230b33b_prof);

        
        $__internal_b56eea078645044aac534923e9bb6acb2841f728d7d06ee6a947f093301163fa->leave($__internal_b56eea078645044aac534923e9bb6acb2841f728d7d06ee6a947f093301163fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f8940f82c533a250e1d5b967cbff62a9f5f53255b174e491b32961f60edd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f8940f82c533a250e1d5b967cbff62a9f5f53255b174e491b32961f60edd9c->enter($__internal_75f8940f82c533a250e1d5b967cbff62a9f5f53255b174e491b32961f60edd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b20e780986359358d249c3ae78c354597ac8ddc6c30c37d512c41eb72dbdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b20e780986359358d249c3ae78c354597ac8ddc6c30c37d512c41eb72dbdc9->enter($__internal_50b20e780986359358d249c3ae78c354597ac8ddc6c30c37d512c41eb72dbdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aurelio";
        
        $__internal_50b20e780986359358d249c3ae78c354597ac8ddc6c30c37d512c41eb72dbdc9->leave($__internal_50b20e780986359358d249c3ae78c354597ac8ddc6c30c37d512c41eb72dbdc9_prof);

        
        $__internal_75f8940f82c533a250e1d5b967cbff62a9f5f53255b174e491b32961f60edd9c->leave($__internal_75f8940f82c533a250e1d5b967cbff62a9f5f53255b174e491b32961f60edd9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40e1746d6c1286249ee15285165ae9d7fb9ef0bba06e7fbd89c7ee31ef16acc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e1746d6c1286249ee15285165ae9d7fb9ef0bba06e7fbd89c7ee31ef16acc5->enter($__internal_40e1746d6c1286249ee15285165ae9d7fb9ef0bba06e7fbd89c7ee31ef16acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_37c292c58ae471d44fbcec7f4d11f57595c1211a8770ddeb023d04e99db0b538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c292c58ae471d44fbcec7f4d11f57595c1211a8770ddeb023d04e99db0b538->enter($__internal_37c292c58ae471d44fbcec7f4d11f57595c1211a8770ddeb023d04e99db0b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37c292c58ae471d44fbcec7f4d11f57595c1211a8770ddeb023d04e99db0b538->leave($__internal_37c292c58ae471d44fbcec7f4d11f57595c1211a8770ddeb023d04e99db0b538_prof);

        
        $__internal_40e1746d6c1286249ee15285165ae9d7fb9ef0bba06e7fbd89c7ee31ef16acc5->leave($__internal_40e1746d6c1286249ee15285165ae9d7fb9ef0bba06e7fbd89c7ee31ef16acc5_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_73374cab00a60ab1d24e306145f6b85483d58d52b8e2e9a43f57e3ea2e23f5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73374cab00a60ab1d24e306145f6b85483d58d52b8e2e9a43f57e3ea2e23f5c5->enter($__internal_73374cab00a60ab1d24e306145f6b85483d58d52b8e2e9a43f57e3ea2e23f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c53e1f6d58c296166ef9612b3aaab15cff3b9bf97fce001ca71c280ff994d3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53e1f6d58c296166ef9612b3aaab15cff3b9bf97fce001ca71c280ff994d3c3->enter($__internal_c53e1f6d58c296166ef9612b3aaab15cff3b9bf97fce001ca71c280ff994d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c53e1f6d58c296166ef9612b3aaab15cff3b9bf97fce001ca71c280ff994d3c3->leave($__internal_c53e1f6d58c296166ef9612b3aaab15cff3b9bf97fce001ca71c280ff994d3c3_prof);

        
        $__internal_73374cab00a60ab1d24e306145f6b85483d58d52b8e2e9a43f57e3ea2e23f5c5->leave($__internal_73374cab00a60ab1d24e306145f6b85483d58d52b8e2e9a43f57e3ea2e23f5c5_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a178e4af84b985c975051f81b832b31714196e1bf5a1da29d401f4602a7d96fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a178e4af84b985c975051f81b832b31714196e1bf5a1da29d401f4602a7d96fb->enter($__internal_a178e4af84b985c975051f81b832b31714196e1bf5a1da29d401f4602a7d96fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3756d89e1c57d5a616a77bc417441b1107b684969617d952507bab740ef10bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3756d89e1c57d5a616a77bc417441b1107b684969617d952507bab740ef10bf->enter($__internal_a3756d89e1c57d5a616a77bc417441b1107b684969617d952507bab740ef10bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3756d89e1c57d5a616a77bc417441b1107b684969617d952507bab740ef10bf->leave($__internal_a3756d89e1c57d5a616a77bc417441b1107b684969617d952507bab740ef10bf_prof);

        
        $__internal_a178e4af84b985c975051f81b832b31714196e1bf5a1da29d401f4602a7d96fb->leave($__internal_a178e4af84b985c975051f81b832b31714196e1bf5a1da29d401f4602a7d96fb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 25,  127 => 23,  110 => 6,  92 => 5,  80 => 26,  78 => 25,  75 => 24,  73 => 23,  60 => 13,  56 => 12,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Aurelio{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />


        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    </head>
    <body>
        <div class=\"container-fluid\">
            <nav id=\"main-menu\">
                <div class=\"btn-group\" role=\"group\">

                </div>
            </nav>
            fghjklçlkjhgfghjkl
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/base.html.twig");
    }
}
